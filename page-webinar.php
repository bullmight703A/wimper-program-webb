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
tailwind.config = {
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
    
    <!-- Left Column: Content -->
    <div class="flex flex-col justify-center h-full pt-8">
        <div class="inline-flex items-center self-start px-4 py-1.5 rounded-full bg-blue-50 text-wimper-blue text-xs font-bold uppercase tracking-widest mb-6 border border-blue-100 shadow-sm">
            <span class="relative flex h-2 w-2 mr-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-wimper-blue opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-wimper-blue"></span>
            </span>
            Live Weekly Training
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-wimper-blueDark leading-[1.1] mb-6">
            The Blueprint to <span class="text-wimper-cyan text-transparent bg-clip-text bg-gradient-to-r from-wimper-cyan to-wimper-blue">Lowering FICA Taxes</span> on Auto-Pilot.
        </h1>
        <p class="text-lg md:text-xl text-wimper-slate mb-8 max-w-lg leading-relaxed font-medium">
            Join our exclusive live webinar to see exactly how Robert Hill helps business owners reclaim thousands in payroll taxes while enhancing employee health coverage.
        </p>
    </div>
    
    <!-- Right Column: Registration Form -->
    <div class="mt-16 lg:mt-0 relative">
        <div class="bg-white p-8 md:p-10 rounded-3xl card-shadow border border-slate-100 relative z-10 w-full min-h-[500px] flex flex-col">
            <h3 class="text-2xl font-bold text-wimper-blueDark mb-2 text-center">Reserve Your Seat</h3>
            <p class="text-sm text-wimper-slate text-center mb-8">Limited to 100 attendees per session.</p>
            
            <!-- Replace with actual GHL form embed snippet -->
            <div class="flex-grow w-full rounded-xl flex items-center justify-center p-2">
                <iframe
                    src="https://api.leadconnectorhq.com/widget/form/f7ZJkxPhHo9RsgaBkn7b"
                    style="width:100%;height:100%;min-height:550px;border:none;border-radius:12px"
                    id="inline-f7ZJkxPhHo9RsgaBkn7b" 
                    data-layout="{'id':'INLINE'}"
                    data-trigger-type="alwaysShow"
                    data-trigger-value=""
                    data-activation-type="alwaysActivated"
                    data-activation-value=""
                    data-deactivation-type="neverDeactivate"
                    data-deactivation-value=""
                    data-form-name="Robert X Wojo Media"
                    data-height="519"
                    data-layout-iframe-id="inline-f7ZJkxPhHo9RsgaBkn7b"
                    data-form-id="f7ZJkxPhHo9RsgaBkn7b"
                    title="Robert X Wojo Media"
                >
                </iframe>
                <script src="https://link.msgsndr.com/js/form_embed.js"></script>
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
