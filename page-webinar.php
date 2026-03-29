<?php
/**
 * Template Name: Webinar Landing Page
 * Description: Standalone webinar registration page with 2-column layout.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WIMPER | Live Weekly Webinar</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<script>
tailwnd.config = {
    theme: {
        extend: {
            fontFamily: { sans: ['Outfit', 'sans-serif'] },
            colors: {
                wimper: {
                    blueDark: '#2F4858',
                    blue: '#3B82F6',
                    cyan: '#06B6D4',
                    slate: '#475569'
                }
            }
        }
    }
}
</script>
<style>
body { font-family: 'Outfit', sans-serif; scroll-behavior: smooth; margin: 0; padding: 0; }
.card-shadow { box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1); }
</style>
<?php wp_head(); ?>
</head>
<body class="bg-slate-50 text-slate-900 border-t-4 border-wimper-cyan">

<!-- Navigation -->
<nav class="w-full bg-white/90 backdrop-blur-md border-b border-slate-200">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between h-20 items-center">
<div class="flex items-center">
<a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-extrabold tracking-tight text-wimper-blueDark">
WIMP<span class="text-wimper-cyan">ER</span>
</a>
</div>
<div class="hidden md:flex items-center space-x-8">
<span class="text-sm font-medium text-wimper-slate">Live Weekly Training</span>
</div>
</div>
</div>
</nav>

<!-- Hero / Webinar Section (2-Column) -->
<header class="pt-16 pb-24 lg:pt-24 lg:pb-32 bg-white flex-grow">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="lg:grid lg:grid-cols-2 lg:gap-16 items-start">
    
    <!-- Left Column: Content & Video -->
    <div>
        <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-blue-50 text-wimper-blue text-xs font-bold uppercase tracking-widest mb-6">
            <span class="relative flex h-2 w-2 mr-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-wimper-blue opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-wimper-blue"></span>
            </span>
            Live Weekly Training
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-5xl font-extrabold text-wimper-blueDark leading-[1.15] mb-6">
            The Blueprint to <span class="text-wimper-cyan">Lowering FICA Taxes</span> on Auto-Pilot.
        </h1>
        <p class="text-lg text-wimper-slate mb-8 max-w-lg leading-relaxed">
            Join our exclusive live webinar to see exactly how Robert Hill helps business owners reclaim thousands in payroll taxes while enhancing employee health coverage.
        </p>
        
        <!-- Video Embedded directly beneath text -->
        <div class="relative rounded-2xl overflow-hidden card-shadow bg-wimper-blueDark border-4 border-white mt-8">
            <div class="aspect-video bg-slate-800 flex flex-col items-center justify-center relative hover:bg-slate-700 transition cursor-pointer">
                <svg class="w-16 h-16 text-white opacity-80 mb-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                <span class="text-white/60 text-xs font-bold tracking-widest uppercase">Play Briefing File</span>
                <div class="absolute bottom-3 left-4 right-4 flex justify-between items-center text-white/50 text-[10px] font-bold uppercase">
                    <span>Host: Robert Hill</span>
                    <span>The WIMPER Advantage</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Right Column: Registration Form -->
    <div class="mt-16 lg:mt-0 relative">
        <div class="bg-white p-8 md:p-10 rounded-3xl card-shadow border border-slate-100 relative z-10 w-full min-h-[500px] flex flex-col">
            <h3 class="text-2xl font-bold text-wimper-blueDark mb-2 text-center">Reserve Your Seat</h3>
            <p class="text-sm text-wimper-slate text-center mb-8">Limited to 100 attendees per session.</p>
            
            <!-- Replace with actual GHL form embed snippet -->
            <div class="flex-grow w-full border-2 border-dashed border-slate-200 rounded-xl flex items-center justify-center bg-slate-50 p-6">
                <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-slate-300 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <p class="text-sm font-medium text-slate-500">GoHighLevel Webinar Form Embed Area</p>
                    <p class="text-xs text-slate-400 mt-1">Paste your iframe snippet here in WP.</p>
                </div>
            </div>
        </div>
        
        <!-- Decorative subtle aura -->
        <div class="absolute -top-10 -right-10 w-48 h-48 bg-wimper-cyan rounded-full opacity-[0.05] blur-3xl -z-10"></div>
    </div>
    
</div>
</div>
</header>

<footer class="bg-wimper-blueDark text-slate-400 py-8 text-center text-sm border-t border-slate-800 mt-auto">
<div class="max-w-7xl mx-auto px-4">
<p>&copy; <?php echo date('Y'); ?> The WIMPER Program. All rights reserved.</p>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
