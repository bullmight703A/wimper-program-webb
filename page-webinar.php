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
<body class="bg-slate-50 text-slate-900 border-t-4 border-wimper-cyan flex flex-col min-h-screen">

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

<!-- Hero / Webinar Section -->
<header class="pt-16 pb-24 lg:pt-20 lg:pb-32 bg-slate-50 flex-grow relative overflow-hidden">
<!-- Background decor -->
<div class="absolute top-0 right-0 w-[500px] h-[500px] bg-wimper-cyan/5 rounded-full blur-3xl -z-10 translate-x-1/2 -translate-y-1/2"></div>
<div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-wimper-blue/5 rounded-full blur-3xl -z-10 -translate-x-1/2 translate-y-1/2"></div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Top Centered Header -->
    <div class="text-center max-w-4xl mx-auto mb-16">
        <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-white text-wimper-blue text-xs font-bold uppercase tracking-widest mb-6 border border-slate-200 shadow-sm">
            <span class="relative flex h-2 w-2 mr-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-wimper-blue opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-wimper-blue"></span>
            </span>
            Live Weekly Training
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-wimper-blueDark leading-[1.1]">
            The Blueprint to <span class="text-transparent bg-clip-text bg-gradient-to-r from-wimper-cyan to-wimper-blue">Keeping More Of Your Money.</span>
        </h1>
        <p class="mt-6 text-lg md:text-xl text-wimper-slate max-w-2xl mx-auto leading-relaxed font-medium">
            Join our exclusive live webinar to see exactly how Robert Hill helps business owners reclaim thousands in capital while enhancing employee health coverage.
        </p>
    </div>

    <!-- 2-Column Content Grid -->
    <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-start">
        
        <!-- Left Column: Presenter & Credibility -->
        <div class="lg:col-span-5 flex flex-col">
            <!-- Image Frame -->
            <div class="rounded-3xl overflow-hidden shadow-xl mb-8 border-4 border-white bg-slate-200 relative aspect-[4/3] group">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/robert-hill.jpg" alt="Robert Hill" class="w-full h-full object-cover object-top transition duration-700 group-hover:scale-105">
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-wimper-blueDark/90 to-transparent p-6 pt-12">
                    <h3 class="text-white font-bold text-xl">Robert Hill</h3>
                    <p class="text-sky-200 text-sm font-medium">Organizer, The WIMPER Program</p>
                </div>
            </div>
            
            <div class="bg-white p-8 rounded-3xl card-shadow border border-slate-100">
                <h3 class="text-xl font-extrabold text-wimper-blueDark mb-6 border-b border-slate-100 pb-4">Who This Is For</h3>
                <ul class="space-y-5">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-wimper-cyan mr-3 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-sm font-medium text-wimper-slate leading-relaxed">Business owners currently managing 10+ W-2 employees.</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-wimper-cyan mr-3 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-sm font-medium text-wimper-slate leading-relaxed">Companies looking to legally offset their excessive payroll tax burden.</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-wimper-cyan mr-3 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-sm font-medium text-wimper-slate leading-relaxed">Leaders who want to provide elite health benefits at zero net-cost.</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Right Column: Registration Form -->
        <div class="lg:col-span-7 mt-12 lg:mt-0 relative">
            <div class="bg-white p-8 md:p-10 rounded-3xl card-shadow border-2 border-slate-50 relative z-10 w-full flex flex-col">
                <h3 class="text-2xl font-bold text-wimper-blueDark mb-2 text-center">Reserve Your Seat</h3>
                <p class="text-sm text-wimper-slate text-center mb-6">Limited to 7 attendees per session.</p>
                
                <!-- GHL Form Embed -->
                <div class="flex-grow w-full rounded-xl flex items-center justify-center p-2 bg-slate-50/50">
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
            
            <!-- Form backdrop accent -->
            <div class="absolute top-10 -right-10 w-full h-full bg-wimper-blueDark rounded-3xl -z-10 opacity-5"></div>
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
