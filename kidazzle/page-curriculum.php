<?php
/**
 * Template Name: Curriculum Page
 *
 * @package kidazzle_Excellence
 */

get_header();
?>

<?php
$page_id = get_the_ID();

// Hero Section
$hero_badge = get_post_meta($page_id, 'curriculum_hero_badge', true) ?: 'Our Curriculum';
$hero_title = get_post_meta($page_id, 'curriculum_hero_title', true) ?: 'Scientific rigor. <br><span class="italic text-kidazzle-green">Joyful delivery.</span>';
$hero_description = get_post_meta($page_id, 'curriculum_hero_description', true) ?: 'At KIDazzle, we utilize The Creative Curriculum®, a research-based program that honors creativity and respects the role that teachers play in making learning relevant.';

// Framework Pillars
$pillars = array(
	array(
		'borderClass' => 'border-kidazzle-red',
		'bgClass' => 'bg-kidazzle-red/10',
		'textClass' => 'text-kidazzle-red',
		'icon' => 'fa-solid fa-heart',
		'title' => 'Social-Emotional',
		'desc' => 'Regulating emotions, building relationships, and developing a secure sense of self.',
	),
	array(
		'borderClass' => 'border-kidazzle-blue',
		'bgClass' => 'bg-kidazzle-blue/10',
		'textClass' => 'text-kidazzle-blue',
		'icon' => 'fa-solid fa-person-running',
		'title' => 'Physical',
		'desc' => 'Gross and fine motor coordination, sensory integration, and health practices.',
	),
	array(
		'borderClass' => 'border-kidazzle-orange',
		'bgClass' => 'bg-kidazzle-orange/10',
		'textClass' => 'text-kidazzle-orange',
		'icon' => 'fa-solid fa-comments',
		'title' => 'Language',
		'desc' => 'Listening, speaking, vocabulary, and early literacy skills.',
	),
	array(
		'borderClass' => 'border-kidazzle-green',
		'bgClass' => 'bg-kidazzle-green/10',
		'textClass' => 'text-kidazzle-green',
		'icon' => 'fa-solid fa-brain',
		'title' => 'Cognitive',
		'desc' => 'Learning, problem-solving, logical thinking, and scientific inquiry.',
	),
);

// Environment Section
$env_title = 'The classroom is the "Third Teacher."';
$env_description = 'We believe children learn best through active exploration. Our classrooms are intentionally designed zones that invite curiosity and independence.';

$zones = array(
	array(
		'emoji' => '🧱',
		'title' => 'Construction Zone',
		'desc' => 'Blocks and engineering tools to teach balance, gravity, and spatial reasoning.',
	),
	array(
		'emoji' => '🎨',
		'title' => 'Atelier (Art)',
		'desc' => 'Open access to paints and creative materials for unrestricted expression.',
	),
	array(
		'emoji' => '📖',
		'title' => 'Literacy Nook',
		'desc' => 'Cozy spaces with diverse books to foster a lifelong love of reading.',
	),
);
?>

<main id="view-curriculum" class="view-section active block">
    <!-- Hero Section -->
    <section class="relative pt-24 pb-20 bg-white text-center overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 relative z-10">
            <span class="text-kidazzle-green font-bold tracking-[0.2em] text-xs uppercase mb-4 block">
                <?php echo esc_html($hero_badge); ?>
            </span>
            <h1 class="font-serif text-5xl md:text-6xl text-brand-ink mb-6">
                <?php echo wp_kses_post($hero_title); ?>
            </h1>
            <p class="text-lg text-brand-ink/80 max-w-2xl mx-auto mb-10">
                <?php echo esc_html($hero_description); ?>
            </p>
        </div>
    </section>

    <!-- Pillars Section -->
    <section class="py-24 bg-brand-cream border-t border-brand-ink/5">
        <div class="max-w-7xl mx-auto px-4 lg:px-6">
            <div class="grid md:grid-cols-4 gap-6">
                <?php foreach ($pillars as $pillar): ?>
                    <div class="bg-white p-8 rounded-[2rem] shadow-soft border border-brand-ink/5 hover:<?php echo esc_attr($pillar['borderClass']); ?> transition-all group">
                        <div class="w-14 h-14 <?php echo esc_attr($pillar['bgClass']); ?> <?php echo esc_attr($pillar['textClass']); ?> rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                            <i class="<?php echo esc_attr($pillar['icon']); ?>"></i>
                        </div>
                        <h3 class="font-bold text-xl text-brand-ink mb-3"><?php echo esc_html($pillar['title']); ?></h3>
                        <p class="text-sm text-brand-ink/80 leading-relaxed"><?php echo esc_html($pillar['desc']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Standards Section -->
    <section class="py-24 bg-brand-ink text-white relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 lg:px-6 grid md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">State Standards </h2>
                <p class="text-white/70 mb-8">Our curriculum aligns with state early learning standards to ensure every child is fully prepared for Kindergarten and beyond.</p>
                <div class="space-y-4">
                    <div class="flex items-center gap-4 p-5 bg-white/10 rounded-2xl border border-white/10">
                        <div class="font-serif text-2xl font-bold text-kidazzle-yellow">GELDS</div>
                        <div class="text-sm text-white/80">Georgia Early Learning and Development Standards</div>
                    </div>
                    <div class="flex items-center gap-4 p-5 bg-white/10 rounded-2xl border border-white/10">
                        <div class="font-serif text-2xl font-bold text-kidazzle-orange">TN-ELDS</div>
                        <div class="text-sm text-white/80">Tennessee Early Learning Developmental Standards</div>
                    </div>
                </div>
            </div>
            <div class="relative bg-white/5 p-10 rounded-[3rem] border border-white/10">
                <i class="fa-solid fa-shield-halved text-6xl text-kidazzle-green mb-6 block"></i>
                <h3 class="text-2xl font-bold mb-4">Research-Based</h3>
                <p class="text-white/70 leading-relaxed">By keeping our framework aligned with national and state standards, we ensure that "Play" always has a purpose and "Learning" always has a result.</p>
            </div>
        </div>
    </section>

    <!-- Environment Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 lg:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-brand-ink mb-4"><?php echo esc_html($env_title); ?></h2>
                <p class="text-brand-ink/80 max-w-2xl mx-auto"><?php echo esc_html($env_description); ?></p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <?php foreach ($zones as $zone): ?>
                    <div class="bg-brand-cream p-10 rounded-[2.5rem] border border-brand-ink/5 hover:shadow-lg transition-all text-center">
                        <div class="text-6xl mb-6"><?php echo esc_html($zone['emoji']); ?></div>
                        <h3 class="text-2xl font-bold text-brand-ink mb-3"><?php echo esc_html($zone['title']); ?></h3>
                        <p class="text-brand-ink/80 leading-relaxed"><?php echo esc_html($zone['desc']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-24 bg-brand-cream text-center border-t border-brand-ink/5">
        <div class="max-w-3xl mx-auto px-4 lg:px-6">
            <h2 class="text-3xl font-serif font-bold text-brand-ink mb-8">See the curriculum in action.</h2>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="<?php echo esc_url(home_url('/locations')); ?>" class="px-8 py-4 bg-kidazzle-blue text-white font-bold rounded-full uppercase tracking-widest text-xs hover:bg-brand-ink transition-all shadow-lg">Find a Location</a>
                <a href="<?php echo esc_url(home_url('/locations#tour')); ?>" class="px-8 py-4 bg-white border border-brand-ink/10 text-brand-ink font-bold rounded-full uppercase tracking-widest text-xs hover:border-kidazzle-blue hover:text-kidazzle-blue transition-all">Schedule a Tour</a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
