<?php
/**
 * Template Name: Success Page
 * Description: Standalone WIMPER success page (prep room).
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Success | Your Feasibility Audit | WIMPER</title>
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
<body class="bg-slate-50 text-slate-900 border-t-4 border-wimper-cyan flex flex-col min-h-screen">

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
<span class="inline-flex items-center rounded-full bg-green-100 px-4 py-1.5 text-xs font-bold text-green-800 uppercase tracking-widest">
<svg class="w-3 h-3 mr-1.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
Success - You're All Set
</span>
</div>
</div>
</div>
</nav>

<!-- Main Content -->
<main class="flex-grow pb-24">
<!-- Header Section -->
<header class="py-16 md:py-24 bg-wimper-blueDark relative overflow-hidden">
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/black-linen.png')] opacity-30"></div>
<div class="absolute -top-24 -right-24 w-96 h-96 bg-wimper-cyan rounded-full blur-3xl opacity-20"></div>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
<h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">
Your Feasibility Audit <span class="text-wimper-cyan">Preparation</span>.
</h1>
<p class="text-lg md:text-xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
Watch this 2-minute mandatory briefing from Robert Hill before our call. We dive straight into your exact FICA tax reduction math so we don't waste time on the basics.
</p>
</div>
</header>

<!-- Video / Instructions Section -->
<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 relative z-20">
<div class="bg-white rounded-3xl card-shadow border border-slate-100 overflow-hidden">
<div class="grid lg:grid-cols-5 gap-0">
<!-- Video Column -->
<div class="lg:col-span-3 bg-slate-50 border-b lg:border-b-0 lg:border-r border-slate-200">
<div class="aspect-video bg-slate-800 flex items-center justify-center relative hover:bg-slate-700 transition cursor-pointer">
<div class="text-center p-8">
<div class="w-16 h-16 bg-wimper-cyan/90 rounded-full flex items-center justify-center mx-auto mb-4 hover:scale-105 transition-all shadow-xl">
    <svg class="h-6 w-6 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
        <path d="M8 5v14l11-7z" />
    </svg>
</div>
<p class="text-white/60 font-semibold text-xs tracking-wider uppercase drop-shadow-md">Play Robert's Briefing</p>
</div>
</div>
<!-- Video Transcription / Summary -->
<div class="p-8">
<h3 class="text-lg font-bold text-wimper-blueDark mb-3 border-l-4 border-wimper-cyan pl-4 py-1">Why this strategy works immediately</h3>
<p class="text-sm text-wimper-slate leading-relaxed mb-4">
We operate as a proactive capital shield. By integrating advanced ERISA frameworks directly into your payroll chassis, we trap capital leaking out to FICA taxes <em>before</em> it leaves your business.
</p>
<p class="text-sm font-semibold text-wimper-blueDark bg-sky-50 px-4 py-3 rounded-lg flex items-start">
<svg class="h-5 w-5 text-wimper-blue mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
This is immediate, legal EBITDA recapture happening on your very next payroll cycle.
</p>
</div>
</div>

<!-- Checklist Column -->
<div class="lg:col-span-2 p-8 lg:p-10 flex flex-col justify-center bg-white">
<div class="mb-8">
<h2 class="text-2xl font-extrabold text-wimper-blueDark mb-6">Before Our Call</h2>
<ul class="space-y-6">
<li class="flex items-start">
    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-slate-50 flex items-center justify-center border border-slate-200 mt-1">
        <span class="text-wimper-blue font-bold text-sm">1</span>
    </div>
    <div class="ml-4">
        <h4 class="text-base font-bold text-slate-800">Watch the Briefing</h4>
        <p class="text-xs text-wimper-slate leading-relaxed mt-1">Understand the fundamental mechanism of how we divert FICA dollars back to your LLC.</p>
    </div>
</li>
<li class="flex items-start">
    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-slate-50 flex items-center justify-center border border-slate-200 mt-1">
        <span class="text-wimper-blue font-bold text-sm">2</span>
    </div>
    <div class="ml-4">
        <h4 class="text-base font-bold text-slate-800">Pull Your Payroll Summary</h4>
        <p class="text-xs text-wimper-slate leading-relaxed mt-1">Have your most recent company-wide payroll summary in front of you. We need this for exact math.</p>
    </div>
</li>
<li class="flex items-start">
    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-slate-50 flex items-center justify-center border border-slate-200 mt-1">
        <span class="text-wimper-blue font-bold text-sm">3</span>
    </div>
    <div class="ml-4">
        <h4 class="text-base font-bold text-slate-800">Bring Your Leadership</h4>
        <p class="text-xs text-wimper-slate leading-relaxed mt-1">If your CFO or business partner needs to sign off, they must be on this 10-minute call.</p>
    </div>
</li>
</ul>
</div>
<a href="<?php echo esc_url(home_url('/')); ?>" class="block w-full py-4 text-center rounded-xl bg-wimper-blueDark text-white font-bold hover:bg-slate-800 transition-colors shadow-lg">
Return to Homepage
</a>
</div>
</div>
</div>
</section>
</main>

<footer class="bg-wimper-blueDark text-slate-400 py-10 mt-auto border-t border-slate-800">
<div class="max-w-7xl mx-auto px-4 text-center">
<p class="text-sm">&copy; <?php echo date('Y'); ?> The WIMPER Program. All rights reserved.</p>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
