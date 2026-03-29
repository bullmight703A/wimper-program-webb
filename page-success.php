<?php
/**
 * Template Name: Success Page
 * Description: Standalone WIMPER success page (post-webinar signup).
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Success | You're Scheduled | WIMPER</title>
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
Webinar Confirmed
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
<div class="inline-block bg-wimper-blue text-white px-4 py-1 rounded-full text-xs font-extrabold uppercase tracking-widest mb-6">Step 2 of 3</div>
<h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">
Congrats! You're Scheduled for the <span class="text-wimper-cyan">Webinar</span>.
</h1>
<p class="text-xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
But do you truly know why you are here? Please watch this quick mandatory briefing before continuing.
</p>
</div>
</header>

<!-- Video / Actions Section -->
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
<p class="text-white/60 font-semibold text-xs tracking-wider uppercase drop-shadow-md">Play "Why You're Here" Briefing</p>
</div>
</div>
<!-- Video Transcription / Summary -->
<div class="p-8">
<h3 class="text-lg font-bold text-wimper-blueDark mb-3 border-l-4 border-wimper-cyan pl-4 py-1">Why you are really here.</h3>
<p class="text-sm text-wimper-slate leading-relaxed mb-4">
You are here because you want to keep more of your money with less work, doing exactly what you already do. You employ W-2 staff, and we have a proven, legal system to significantly reduce what you owe.
</p>
<p class="text-sm font-semibold text-wimper-blueDark bg-sky-50 px-4 py-3 rounded-lg">
"My objective is simple: help your company retain capital and keep your employees happy." <br><span class="text-xs font-normal text-wimper-slate mt-1 block">— Robert Hill</span>
</p>
</div>
</div>

<!-- Options Column -->
<div class="lg:col-span-2 p-8 lg:p-10 flex flex-col justify-center bg-white">
<div class="mb-4">
<h2 class="text-2xl font-extrabold text-wimper-blueDark mb-3">Choose Your Next Step</h2>
<p class="text-sm text-wimper-slate mb-8 leading-relaxed">
If you have questions about how this is legally possible and want to skip the webinar, you have two options below.
</p>

<!-- Option 1 -->
<a href="#" class="group relative block mb-5">
    <div class="absolute inset-0 bg-wimper-blueDark rounded-2xl transition-transform transform group-hover:translate-y-1"></div>
    <div class="relative bg-wimper-blueDark border border-slate-700 text-white p-5 rounded-2xl transition-transform transform -translate-y-1 group-hover:-translate-y-0 text-center">
        <svg class="w-6 h-6 mx-auto mb-2 text-wimper-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
        <span class="block font-bold text-lg mb-1">Schedule Discovery Call</span>
        <span class="block text-xs text-sky-200">Get a private 1-on-1 explanation.</span>
    </div>
</a>

<!-- Option 2 -->
<a href="#" class="group relative block">
    <div class="absolute inset-0 bg-slate-200 rounded-2xl transition-transform transform group-hover:translate-y-1"></div>
    <div class="relative bg-white border-2 border-slate-200 text-slate-800 p-5 rounded-2xl transition-transform transform -translate-y-1 group-hover:-translate-y-0 text-center">
        <svg class="w-6 h-6 mx-auto mb-2 text-wimper-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
        <span class="block font-bold text-lg mb-1">View Information Hub</span>
        <span class="block text-xs text-wimper-slate">Access our documents & framework videos.</span>
    </div>
</a>

</div>

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
