<?php
/**
 * Template Name: Locations Page
 *
 * @package kidazzle_Excellence
 */

get_header();

// Locations Data (Converted from Source JS locationsData)
$locations = [
	'westend' => [
		'id' => "westend",
		'name' => "West End Center",
		'city' => "Atlanta, GA",
		'address' => "674 Joseph E Lowery Blvd, Atlanta, GA 30310",
		'phone' => "(404) 753-8884",
		'email' => "westend@kidazzle.com",
		'desc' => "Rooted in culture, bursting with creativity — West End kids shine in every crayon stroke.",
		'features' => ["Arts Focus", "Historic District", "Pre-K Program"]
	],
	'summit' => [
		'id' => "summit",
		'name' => "IRS Summit Building",
		'city' => "Midtown Atlanta, GA",
		'address' => "401 W Peachtree St NW, Atlanta, GA 30308",
		'phone' => "(404) 555-0101",
		'email' => "summit@kidazzle.com",
		'desc' => "Bright minds meet big city energy. Convenient for federal employees.",
		'features' => ["Bilingual Center", "Infant Care", "Federal Employee Priority"]
	],
	'memphis' => [
		'id' => "memphis",
		'name' => "Downtown Memphis",
		'city' => "Memphis, TN",
		'address' => "200 Main St, Memphis, TN 38103",
		'phone' => "(901) 555-0105",
		'email' => "memphis@kidazzle.com",
		'desc' => "From blues to blocks, we've got Memphis rhythm and preschool brilliance.",
		'features' => ["FedEx Hub Nearby", "Music Program", "Extended Hours"]
	],
	'afc' => [
		'id' => "afc",
		'name' => "Atlanta Federal Center",
		'city' => "Downtown Atlanta, GA",
		'address' => "61 Forsyth St SW, Atlanta, GA 30303",
		'phone' => "(404) 555-0102",
		'email' => "afc@kidazzle.com",
		'desc' => "A hub for hugs, discovery, and Storytime superstars — your downtown oasis.",
		'features' => ["Secure Federal Facility", "GA Pre-K", "Toddler Discovery"]
	],
	'collegepark' => [
		'id' => "collegepark",
		'name' => "College Park Center",
		'city' => "College Park, GA",
		'address' => "1701 Columbia Ave, College Park, GA 30337",
		'phone' => "(404) 555-0103",
		'email' => "collegepark@kidazzle.com",
		'desc' => "Where little learners take flight — right in the heart of College Park.",
		'features' => ["Near Airport", "STEAM Focus", "Transportation"]
	],
	'hampton' => [
		'id' => "hampton",
		'name' => "Hampton Center",
		'city' => "Hampton, GA",
		'address' => "Hampton, GA",
		'phone' => "(770) 555-0199",
		'email' => "hampton@kidazzle.com",
		'desc' => "Where the kids sparkle brighter than the Georgia sunshine.",
		'features' => ["School Readiness", "Large Playground", "Summer Camp"]
	],
	'miami' => [
		'id' => "miami",
		'name' => "Doral International",
		'city' => "Doral, FL",
		'address' => "8800 NW 36th St, Doral, FL 33178",
		'phone' => "(305) 555-0106",
		'email' => "miami@kidazzle.com",
		'desc' => "Sunshine, smiles, and Spanish flair — Spanish immersion learning.",
		'features' => ["Spanish Immersion", "STEM Lab", "Cultural Arts"]
	]
];
?>

<!-- 4. LOCATIONS VIEW -->
<main id="view-locations" class="view-section active block">
    <!-- Hero Section -->
    <section class="relative pt-16 pb-12 lg:pt-24 lg:pb-20 bg-white overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-kidazzle-cyanLight/40 via-transparent to-transparent"></div>
        
        <div class="max-w-7xl mx-auto px-4 lg:px-6 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 bg-white border border-kidazzle-cyan/30 px-4 py-1.5 rounded-full text-[11px] uppercase tracking-[0.2em] font-bold text-kidazzle-cyan shadow-sm mb-6 fade-in-up">
                <i class="fa-solid fa-map-pin"></i> <?php echo count($locations); ?> Centers
            </div>

            <h1 class="font-serif text-[2.8rem] md:text-6xl text-brand-ink mb-6 fade-in-up" style="animation-delay: 0.1s;">
                Our <span class="text-kidazzle-cyan italic">Locations</span>
            </h1>

            <p class="text-lg text-brand-ink/80 max-w-2xl mx-auto mb-10 fade-in-up" style="animation-delay: 0.2s;">
                Find a KIDazzle center near you. Serving families across Georgia, Tennessee, and Florida with the same high standards of safety and care.
            </p>

            <!-- Search Bar -->
            <div class="max-w-2xl mx-auto bg-white p-2 rounded-full shadow-float border border-brand-ink/5 flex gap-2 fade-in-up" style="animation-delay: 0.3s;">
                <div class="relative flex-grow">
                    <i class="fa-solid fa-search absolute left-5 top-1/2 -translate-y-1/2 text-brand-ink/30"></i>
                    <input type="text" id="location-search" placeholder="Search by city or zip..." 
                        class="w-full pl-12 pr-6 py-4 rounded-full bg-brand-cream/50 focus:bg-white focus:ring-2 ring-kidazzle-cyan/20 outline-none text-brand-ink placeholder:text-brand-ink/60 transition-all" />
                </div>
            </div>
        </div>
    </section>

    <!-- Locations Grid -->
    <section class="py-20 bg-brand-cream min-h-screen">
        <div class="max-w-7xl mx-auto px-4 lg:px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="locations-grid">
                <?php foreach ($locations as $loc): ?>
                    <div class="location-card group" data-name="<?php echo esc_attr($loc['name'] . ' ' . $loc['city'] . ' ' . $loc['address']); ?>">
                        <div class="bg-white rounded-[2rem] p-8 shadow-card border border-brand-ink/5 hover:border-kidazzle-cyan/30 transition-all hover:-translate-y-1 h-full flex flex-col relative overflow-hidden">
                            
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-kidazzle-cyanLight text-kidazzle-cyan px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wide">
                                    <?php echo esc_html($loc['city']); ?>
                                </span>
                                <div class="w-2 h-2 rounded-full bg-kidazzle-green animate-pulse"></div>
                            </div>

                            <h3 class="font-serif text-2xl font-bold text-brand-ink mb-2 group-hover:text-kidazzle-cyan transition-colors">
                                <?php echo esc_html($loc['name']); ?>
                            </h3>

                            <p class="text-sm text-brand-ink/80 mb-6 flex-grow">
                                <?php echo esc_html($loc['address']); ?>
                            </p>

                            <div class="flex flex-wrap gap-2 mb-8">
                                <?php foreach ($loc['features'] as $f): ?>
                                    <span class="border border-brand-ink/10 px-2 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider text-brand-ink/70">
                                        <?php echo esc_html($f); ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>

                            <a href="mailto:<?php echo esc_attr($loc['email']); ?>" class="w-full bg-brand-ink text-white text-center font-bold py-4 rounded-xl hover:bg-kidazzle-cyan transition shadow-md">
                                Contact Center
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Empty State -->
            <div id="no-results" class="hidden text-center py-20">
                <div class="w-16 h-16 bg-brand-ink/5 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">🤔</div>
                <h3 class="font-serif text-xl font-bold text-brand-ink">No centers found</h3>
                <p class="text-brand-ink/80 mt-2">Try adjusting your search terms.</p>
            </div>
        </div>
    </section>
</main>

<script>
    // Search Filter Logic
    document.getElementById('location-search').addEventListener('keyup', function(e) {
        const term = e.target.value.toLowerCase();
        const cards = document.querySelectorAll('.location-card');
        const noResults = document.getElementById('no-results');
        let visibleCount = 0;

        cards.forEach(card => {
            const text = card.dataset.name.toLowerCase();
            if (text.includes(term)) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        noResults.style.display = visibleCount === 0 ? 'block' : 'none';
    });
</script>

<?php
get_footer();
