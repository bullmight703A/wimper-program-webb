<?php
/**
 * Schema Injector
 * Injects Organization, Person, and CourseInstance schema into relevant pages
 *
 * @package Chroma_Excellence
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class Chroma_Schema_Injector
{
    /**
     * Output Person Schema for Directors
     */
    public static function output_person_schema()
    {
        if (!is_singular('location')) {
            return;
        }

        $post_id = get_the_ID();
        $director_name = get_post_meta($post_id, 'location_director_name', true);
        $director_bio = get_post_meta($post_id, 'location_director_bio', true);
        $director_photo = get_post_meta($post_id, 'location_director_photo', true);

        if (!$director_name) {
            return;
        }

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            'name' => $director_name,
            'jobTitle' => 'Center Director',
            'worksFor' => [
                '@type' => 'ChildCare',
                'name' => get_the_title($post_id),
                '@id' => get_permalink($post_id) . '#organization'
            ],
            'description' => $director_bio ? wp_strip_all_tags($director_bio) : sprintf(__('Director at %s', 'chroma-excellence'), get_the_title($post_id)),
        ];

        if ($director_photo) {
            $schema['image'] = $director_photo;
        }

        echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>';
    }

    /**
     * Output CourseInstance Schema for Pre-K Programs
     */
    public static function output_course_schema()
    {
        if (!is_singular('program')) {
            return;
        }

        $post_id = get_the_ID();
        $title = get_the_title($post_id);

        // Only apply to Pre-K or educational programs
        if (stripos($title, 'Pre-K') === false && stripos($title, 'Preschool') === false && stripos($title, 'Kindergarten') === false) {
            return;
        }

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'CourseInstance',
            'name' => $title,
            'description' => get_the_excerpt($post_id),
            'courseMode' => 'onsite',
            'provider' => [
                '@type' => 'Organization',
                'name' => get_bloginfo('name'),
                'url' => home_url()
            ]
        ];

        echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>';
    }

    /**
     * Output Global Organization Schema
     */
    public static function output_organization_schema()
    {
        if (!is_front_page()) {
            return;
        }

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            '@id' => home_url() . '#organization',
            'name' => get_bloginfo('name'),
            'url' => home_url(),
            'logo' => get_theme_mod('custom_logo') ? wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full') : '',
            'sameAs' => [
                // Add social links here if available via theme mods
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => get_theme_mod('chroma_phone_number'), // Assuming this exists
                'contactType' => 'customer service'
            ]
        ];

        echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>';
    }
    /**
     * Output Modular Schemas from Schema Builder
     */
    public static function output_modular_schemas()
    {
        if (!is_singular()) {
            return;
        }

        $post_id = get_the_ID();
        $schemas = get_post_meta($post_id, '_chroma_post_schemas', true);

        if (empty($schemas) || !is_array($schemas)) {
            return;
        }

        $graph = [];

        foreach ($schemas as $schema_data) {
            if (empty($schema_data['type'])) {
                continue;
            }

            $schema_type = sanitize_text_field($schema_data['type']);
            $fields = isset($schema_data['data']) ? $schema_data['data'] : [];

            $schema_output = [
                '@type' => $schema_type,
                '@id' => get_permalink($post_id) . '#' . strtolower($schema_type) . '-' . uniqid()
            ];

            // Add fields
            foreach ($fields as $key => $value) {
                if (empty($value))
                    continue;

                // Basic sanitization, but allow some HTML if needed? 
                // For now, assume text/url/date.
                // If value is array (repeater), handle it?
                // The current builder saves simple key-value pairs. 
                // If we have complex fields later, we need to handle them here.

                // Check if key is a known schema property
                // We trust the builder to provide valid keys

                // Handle Repeater Fields
                if (is_array($value)) {
                    if ($schema_type === 'FAQPage' && $key === 'questions') {
                        $schema_output['mainEntity'] = [];
                        foreach ($value as $q) {
                            $schema_output['mainEntity'][] = [
                                '@type' => 'Question',
                                'name' => isset($q['question']) ? $q['question'] : '',
                                'acceptedAnswer' => [
                                    '@type' => 'Answer',
                                    'text' => isset($q['answer']) ? $q['answer'] : ''
                                ]
                            ];
                        }
                    } elseif ($schema_type === 'HowTo' && $key === 'steps') {
                        $schema_output['step'] = [];
                        foreach ($value as $s) {
                            $step = [
                                '@type' => 'HowToStep',
                                'name' => isset($s['name']) ? $s['name'] : '',
                                'text' => isset($s['text']) ? $s['text'] : '',
                            ];
                            if (!empty($s['image'])) {
                                $step['image'] = $s['image'];
                            }
                            $schema_output['step'][] = $step;
                        }
                    } else {
                        // Generic array output (if needed for other types)
                        $schema_output[$key] = $value;
                    }
                } else {
                    // Handle Special Nested Fields for JobPosting
                    if ($schema_type === 'JobPosting') {
                        if ($key === 'hiringOrganization_name') {
                            $schema_output['hiringOrganization'] = [
                                '@type' => 'Organization',
                                'name' => $value
                            ];
                            continue;
                        }
                        if ($key === 'jobLocation_address') {
                            $schema_output['jobLocation'] = [
                                '@type' => 'Place',
                                'address' => [
                                    '@type' => 'PostalAddress',
                                    'streetAddress' => $value
                                ]
                            ];
                            continue;
                        }
                        if ($key === 'baseSalary_value') {
                            // We need currency to form PriceSpecification
                            $currency = isset($fields['baseSalary_currency']) ? $fields['baseSalary_currency'] : 'USD';
                            $schema_output['baseSalary'] = [
                                '@type' => 'MonetaryAmount',
                                'currency' => $currency,
                                'value' => [
                                    '@type' => 'QuantitativeValue',
                                    'value' => $value,
                                    'unitText' => 'YEAR' // Defaulting to YEAR for simplicity
                                ]
                            ];
                            continue;
                        }
                        if ($key === 'baseSalary_currency')
                            continue; // Handled above
                    }

                    // Handle Special Nested Fields for Event
                    if ($schema_type === 'Event') {
                        if ($key === 'location_name') {
                            // We need address too
                            $address = isset($fields['location_address']) ? $fields['location_address'] : '';
                            $schema_output['location'] = [
                                '@type' => 'Place',
                                'name' => $value,
                                'address' => [
                                    '@type' => 'PostalAddress',
                                    'streetAddress' => $address
                                ]
                            ];
                            continue;
                        }
                        if ($key === 'location_address')
                            continue; // Handled above

                        if ($key === 'offers_price') {
                            $currency = isset($fields['offers_currency']) ? $fields['offers_currency'] : 'USD';
                            $schema_output['offers'] = [
                                '@type' => 'Offer',
                                'price' => $value,
                                'priceCurrency' => $currency,
                                'availability' => 'https://schema.org/InStock'
                            ];
                            continue;
                        }
                        if ($key === 'offers_currency')
                            continue; // Handled above

                        if ($key === 'organizer') {
                            $schema_output['organizer'] = [
                                '@type' => 'Organization',
                                'name' => $value
                            ];
                            continue;
                        }
                    }

                    $schema_output[$key] = $value;
                }
            }

            $graph[] = $schema_output;
        }

        if (!empty($graph)) {
            $final_schema = [
                '@context' => 'https://schema.org',
                '@graph' => $graph
            ];
            echo '<script type="application/ld+json">' . wp_json_encode($final_schema) . '</script>' . "\n";
        }
    }
}
