<?php
/**
 * Template Name: Locations Page
 *
 * @package kidazzle_Excellence
 */

get_header();

// Locations Data (Converted from Source JS)
$locations = [
	[
		'id' => 1,
		'name' => 'KIDazzle Child Care - Riverdale',
		'address' => '716 Hwy 138, Riverdale, GA 30274',
		'phone' => '770-991-9122',
		'director' => 'Ms. Sheila Washington',
		'features' => ['QCC Rated', 'GA Pre-K', 'Transportation'],
		'state' => 'GA'
	],
	[
		'id' => 2,
		'name' => 'KIDazzle - Fairburn',
		'address' => '395 NW Broad St, Fairburn, GA 30213',
		'phone' => '770-969-9055',
		'director' => 'Ms. Tameka Johnson',
		'features' => ['QCC Rated', 'Before/After Care', 'Summer Camp'],
		'state' => 'GA'
	],
	// Add more locations as needed or pull from Custom Post Type
];
?>

<!-- 3. LOCATIONS VIEW -->
<div id="view-locations" class="view-section active block">
	<div class="flex flex-col lg:flex-row h-[calc(100vh-80px)]">
		<!-- List Side -->
		<div class="w-full lg:w-1/3 bg-white overflow-y-auto p-6 shadow-xl z-10">
			<h2 class="text-3xl font-extrabold text-slate-900 mb-6">Our Centers</h2>
			<div class="space-y-4">
				<?php foreach ($locations as $loc): ?>
					<div class="group p-6 border-l-4 border-slate-200 hover:border-red-500 bg-slate-50 hover:bg-white transition-all cursor-pointer rounded-r-xl"
						onclick="focusLocation(<?php echo $loc['id']; ?>)">
						<h3 class="font-bold text-lg text-slate-900 mb-1 group-hover:text-red-500">
							<?php echo esc_html($loc['name']); ?></h3>
						<p class="text-sm text-slate-500 mb-2"><i data-lucide="map-pin" class="w-3 h-3 inline mr-1"></i>
							<?php echo esc_html($loc['address']); ?></p>
						<p class="text-sm text-slate-500 mb-3"><i data-lucide="phone" class="w-3 h-3 inline mr-1"></i>
							<?php echo esc_html($loc['phone']); ?></p>
						<div class="flex flex-wrap gap-2">
							<?php foreach ($loc['features'] as $feature): ?>
								<span
									class="text-xs bg-slate-200 text-slate-600 px-2 py-0.5 rounded-full"><?php echo esc_html($feature); ?></span>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- Map Side (Placeholder) -->
		<div class="w-full lg:w-2/3 bg-slate-100 relative">
			<div class="absolute inset-0 flex items-center justify-center text-slate-400">
				<div class="text-center">
					<i data-lucide="map" class="w-16 h-16 mx-auto mb-4 opacity-50"></i>
					<p class="font-bold">Interactive Map Component</p>
					<p class="text-xs">(Requires Google Maps or Leaflet Integration)</p>
				</div>
			</div>
			<!-- Actual Map Implementation can go here using wp_enqueue_script for Leaflet/Google Maps -->
		</div>
	</div>
</div>

<script>
	function focusLocation(id) {
		// Logic to highlight marker on map would go here
		console.log('Focusing location:', id);
	}
</script>

<?php
get_footer();
