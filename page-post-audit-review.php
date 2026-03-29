<?php
/**
 * Template Name: Post Audit Review
 * Description: Standalone WIMPER Post Audit Review with Hover PDFs and Bottom CTA Row.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Custom Audit Review | WIMPER Program</title>
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
/* Custom hover handling that allows clicking gracefully */
.group:hover .max-h-0 { max-height: 80px; opacity: 1; }
</style>
<?php wp_head(); ?>
</head>
<body class="bg-slate-50 text-slate-900 border-t-4 border-wimper-blue flex flex-col min-h-screen">

<!-- Navigation -->
<nav class="w-full bg-white border-b border-slate-200 sticky top-0 z-50 shadow-sm">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between h-20 items-center">
<div class="flex items-center">
<a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-extrabold tracking-tight text-wimper-blueDark">
WIMP<span class="text-wimper-cyan">ER</span>
</a>
</div>
<div class="hidden sm:flex space-x-6 items-center">
<span class="text-xs uppercase font-bold tracking-widest text-slate-400">Step 3 of 3</span>
<span class="inline-flex rounded-full bg-wimper-blue/10 px-3 py-1 text-xs font-semibold text-wimper-blueDark uppercase">
Audit Complete
</span>
</div>
</div>
</div>
</nav>

<!-- Main Content -->
<main class="flex-grow pb-24">
<!-- Header Section -->
<header class="py-16 md:py-20 bg-wimper-blueDark relative overflow-hidden">
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/black-linen.png')] opacity-30"></div>
<div class="absolute -top-24 -right-24 w-96 h-96 bg-wimper-blue rounded-full blur-3xl opacity-20"></div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
<h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">
Your Custom FICA <span class="text-wimper-cyan">Audit Results</span>.
</h1>
<p class="text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
Review your calculated savings, deep-dive into the legal mechanism, and access your custom architectural blueprints below.
</p>
</div>
</header>

<!-- Core Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 relative z-20">

<!-- Top Row: Main Video & Docs -->
<div class="grid lg:grid-cols-3 gap-8 mb-8">
    
    <!-- Left Column: Main Video -->
    <div class="lg:col-span-2 h-full">
        <div class="bg-white rounded-3xl card-shadow border border-slate-100 overflow-hidden h-full flex flex-col">
            <div class="p-6 border-b border-slate-100 flex-shrink-0">
                <h2 class="text-xl font-extrabold text-wimper-blueDark">1. How The Mechanism Actually Works</h2>
                <p class="text-sm text-wimper-slate mt-1">"You know why you're here. Now let me show you how." — Watch Robert break down the exact tax laws shielding your capital.</p>
            </div>
            <div class="aspect-video bg-slate-800 flex items-center justify-center relative hover:bg-slate-700 transition cursor-pointer border-b-4 border-wimper-cyan flex-grow min-h-[250px]">
                <div class="text-center">
                    <div class="w-16 h-16 bg-wimper-cyan/90 rounded-full flex items-center justify-center mx-auto mb-3 shadow-lg shadow-wimper-cyan/30">
                        <svg class="h-6 w-6 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z" /></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Right Column: Extensible Documents -->
    <div class="lg:col-span-1 h-full">
        <div class="bg-white rounded-3xl p-8 card-shadow border border-slate-100 flex flex-col h-full">
            <h2 class="text-xl font-extrabold text-wimper-blueDark mb-6 flex-shrink-0">Your Audit Documents</h2>
            
            <div class="space-y-4 flex-grow flex flex-col justify-center">
                <!-- Dropdown Doc 1 -->
                <div class="group relative rounded-xl border border-slate-200 bg-white hover:border-wimper-cyan transition-all shadow-sm overflow-hidden">
                    <div class="flex items-center p-3 cursor-pointer bg-slate-50 relative z-10 hover:bg-white transition-colors">
                        <div class="flex-shrink-0 h-10 w-10 rounded bg-red-50 flex items-center justify-center text-red-500 font-bold">PDF</div>
                        <div class="ml-4">
                            <p class="text-sm font-bold text-wimper-blueDark group-hover:text-wimper-cyan transition-colors">EBITDA Projections</p>
                            <p class="text-[11px] text-wimper-slate">Hover for access options &darr;</p>
                        </div>
                    </div>
                    <div class="max-h-0 opacity-0 transition-all duration-300 ease-out bg-white border-t border-transparent group-hover:border-slate-100">
                        <div class="flex divide-x divide-slate-100">
                            <a href="#" class="flex-[1.2] py-3.5 text-center text-xs font-bold text-wimper-slate hover:text-wimper-cyan hover:bg-blue-50 transition">📄 Download PDF</a>
                            <a href="#" class="flex-[0.8] py-3.5 text-center text-xs font-bold text-wimper-slate hover:text-wimper-cyan hover:bg-blue-50 transition">▶️ Review Video</a>
                        </div>
                    </div>
                </div>
                
                <!-- Dropdown Doc 2 -->
                <div class="group relative rounded-xl border border-slate-200 bg-white hover:border-wimper-cyan transition-all shadow-sm overflow-hidden">
                    <div class="flex items-center p-3 cursor-pointer bg-slate-50 relative z-10 hover:bg-white transition-colors">
                        <div class="flex-shrink-0 h-10 w-10 rounded bg-red-50 flex items-center justify-center text-red-500 font-bold">PDF</div>
                        <div class="ml-4">
                            <p class="text-sm font-bold text-wimper-blueDark group-hover:text-wimper-cyan transition-colors">Compliance Framework</p>
                            <p class="text-[11px] text-wimper-slate">Hover for access options &darr;</p>
                        </div>
                    </div>
                    <div class="max-h-0 opacity-0 transition-all duration-300 ease-out bg-white border-t border-transparent group-hover:border-slate-100">
                        <div class="flex divide-x divide-slate-100">
                            <a href="#" class="flex-[1.2] py-3.5 text-center text-xs font-bold text-wimper-slate hover:text-wimper-cyan hover:bg-blue-50 transition">📄 Download PDF</a>
                            <a href="#" class="flex-[0.8] py-3.5 text-center text-xs font-bold text-wimper-slate hover:text-wimper-cyan hover:bg-blue-50 transition">▶️ Review Video</a>
                        </div>
                    </div>
                </div>

                <!-- Dropdown Doc 3 -->
                <div class="group relative rounded-xl border border-slate-200 bg-white hover:border-wimper-cyan transition-all shadow-sm overflow-hidden">
                    <div class="flex items-center p-3 cursor-pointer bg-slate-50 relative z-10 hover:bg-white transition-colors">
                        <div class="flex-shrink-0 h-10 w-10 rounded bg-red-50 flex items-center justify-center text-red-500 font-bold">PDF</div>
                        <div class="ml-4">
                            <p class="text-sm font-bold text-wimper-blueDark group-hover:text-wimper-cyan transition-colors">Executive Summary</p>
                            <p class="text-[11px] text-wimper-slate">Hover for access options &darr;</p>
                        </div>
                    </div>
                    <div class="max-h-0 opacity-0 transition-all duration-300 ease-out bg-white border-t border-transparent group-hover:border-slate-100">
                        <div class="flex divide-x divide-slate-100">
                            <a href="#" class="flex-[1.2] py-3.5 text-center text-xs font-bold text-wimper-slate hover:text-wimper-cyan hover:bg-blue-50 transition">📄 Download PDF</a>
                            <a href="#" class="flex-[0.8] py-3.5 text-center text-xs font-bold text-wimper-slate hover:text-wimper-cyan hover:bg-blue-50 transition">▶️ Review Video</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- Bottom Row: Additional Videos + Private Call CTA -->
<div class="grid md:grid-cols-3 gap-6">
    
    <!-- Revive Health -->
    <div class="bg-white rounded-2xl p-5 card-shadow border border-slate-100 flex flex-col h-full">
        <h3 class="font-bold text-sm text-wimper-blueDark mb-3 flex-shrink-0">2. The Revive Health Component</h3>
        <div class="aspect-video bg-slate-100 border border-slate-200 rounded-xl flex items-center justify-center cursor-pointer group flex-grow">
            <svg class="h-10 w-10 text-slate-300 group-hover:text-wimper-blue transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z" /></svg>
        </div>
    </div>
    
    <!-- Manhattan Life -->
    <div class="bg-white rounded-2xl p-5 card-shadow border border-slate-100 flex flex-col h-full">
        <h3 class="font-bold text-sm text-wimper-blueDark mb-3 flex-shrink-0">3. Manhattan Life Structure</h3>
        <div class="aspect-video bg-slate-100 border border-slate-200 rounded-xl flex items-center justify-center cursor-pointer group flex-grow">
            <svg class="h-10 w-10 text-slate-300 group-hover:text-wimper-blue transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z" /></svg>
        </div>
    </div>
    
    <!-- Removed from Right Col -> Pushed to Bottom Row -->
    <div class="bg-wimper-blueDark p-6 flex flex-col justify-center rounded-2xl card-shadow border border-wimper-blue text-center h-full">
        <h3 class="text-white font-extrabold text-xl mb-1">Skip the reading?</h3>
        <p class="text-sky-100 text-xs mb-5 leading-relaxed px-2">Private walkthroughs can have this legally active in 30 days.</p>
        <a href="#" class="block w-full py-3.5 text-center mt-auto rounded-xl bg-wimper-cyan text-white text-sm font-extrabold hover:bg-wimper-blue transition-colors shadow-lg">
            Schedule Private Call
        </a>
    </div>

</div>

</section>
</main>

<footer class="bg-wimper-blueDark text-slate-400 py-10 mt-auto border-t border-slate-800">
<div class="max-w-7xl mx-auto px-4 text-center">
<p class="text-sm">&copy; <?php echo date('Y'); ?> The WIMPER Program. All rights reserved.</p>
<p class="text-xs mt-3 text-slate-500 max-w-2xl mx-auto">Not a CPA or tax advisory firm. The WIMPER mechanism leverages Section 125 of the IRC governing cafeteria plans.</p>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
