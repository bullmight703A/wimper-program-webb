<?php
/**
 * Template Name: Post Audit Review
 * Description: Standalone WIMPER prep room/audit review page.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Feasibility Audit | WIMPER Program</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; margin: 0; padding: 0; }
.btn-primary { background-color: #0284c7; transition: all 0.3s ease; }
.btn-primary:hover { background-color: #0369a1; transform: translateY(-1px); }
.card-shadow { box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1); }
.wimper-gradient { background: linear-gradient(to right, #0ea5e9, #0284c7); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
</style>
<?php wp_head(); ?>
</head>
<body class="bg-slate-50 text-slate-900 min-h-screen flex flex-col">

<!-- Navigation -->
<nav class="w-full bg-white border-b border-slate-200 sticky top-0 z-50 shadow-sm">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between h-20 items-center">
<div class="flex items-center">
<a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-extrabold tracking-tight text-slate-900">
WIMP<span class="text-sky-600">ER</span>
</a>
</div>
<div class="hidden sm:flex space-x-6 items-center">
<span class="text-xs uppercase font-bold tracking-widest text-slate-400">Step 2 of 3</span>
<span class="inline-flex rounded-full bg-sky-100 px-3 py-1 text-xs font-semibold text-sky-800">
Audit Scheduled
</span>
</div>
</div>
</div>
</nav>

<!-- Main Content -->
<main class="flex-grow pb-24">
<!-- Header Section -->
<header class="py-16 md:py-24 bg-slate-900 relative overflow-hidden">
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/black-linen.png')] opacity-30"></div>
<div class="absolute -top-24 -right-24 w-96 h-96 bg-sky-600 rounded-full blur-3xl opacity-20"></div>
<div class="absolute -bottom-24 -left-24 w-72 h-72 bg-blue-500 rounded-full blur-3xl opacity-20"></div>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
<h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight mb-6">
Your Feasibility Audit <span class="text-sky-400">Preparation</span>.
</h1>
<p class="text-lg md:text-xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
Watch this 2-minute mandatory briefing from Robert Hill before our call to ensure we don't waste time on the basics and dive straight into your exact FICA tax reduction math.
</p>
</div>
</header>

<!-- Video / Instructions Section -->
<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10 relative z-20">
<div class="bg-white rounded-3xl card-shadow border border-slate-100 overflow-hidden">
<div class="grid lg:grid-cols-5 gap-0">
<!-- Video Column -->
<div class="lg:col-span-3 bg-slate-50 border-b lg:border-b-0 lg:border-r border-slate-200">
<div class="aspect-video bg-slate-800 flex items-center justify-center relative over group">
<!-- Placeholder for HeyGen/Real Video Embed -->
<div class="text-center p-8">
<div class="w-20 h-20 bg-sky-600/90 rounded-full flex items-center justify-center mx-auto mb-4 cursor-pointer hover:scale-105 transition-all border-4 border-slate-800 shadow-xl shadow-slate-900/50">
    <svg class="h-8 w-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
        <path d="M8 5v14l11-7z" />
    </svg>
</div>
<p class="text-white/60 font-semibold text-xs tracking-wider uppercase drop-shadow-md">Play Robert's Briefing</p>
</div>
</div>
<!-- Video Transcription / Summary -->
<div class="p-8">
<h3 class="text-lg font-bold text-slate-800 mb-3 border-l-4 border-sky-500 pl-4 py-1">Why this strategy works immediately</h3>
<p class="text-sm text-slate-600 leading-relaxed mb-4">
Standard accountants view taxes reactively. We operate as a proactive capital shield. By integrating advanced ERISA frameworks directly into your payroll chassis, we trap capital leaking out to FICA taxes <em>before</em> it leaves your business.
</p>
<p class="text-sm font-semibold text-slate-700 bg-sky-50 px-4 py-3 rounded-lg flex items-start">
<svg class="h-5 w-5 text-sky-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
This is immediate, legal EBITDA recapture happening on your very next payroll cycle.
</p>
</div>
</div>

<!-- Checklist Column -->
<div class="lg:col-span-2 p-8 lg:p-10 flex flex-col justify-center bg-white">
<div class="mb-8">
<h2 class="text-2xl font-extrabold text-slate-900 mb-6">Before Our Call</h2>
<ul class="space-y-6">
<li class="flex items-start">
    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-slate-100 flex items-center justify-center border border-slate-200 mt-1">
        <span class="text-slate-600 font-bold text-sm">1</span>
    </div>
    <div class="ml-4">
        <h4 class="text-base font-bold text-slate-800">Watch the Briefing</h4>
        <p class="text-xs text-slate-500 leading-relaxed mt-1">Understand the fundamental mechanism of how we divert FICA dollars back to your LLC.</p>
    </div>
</li>
<li class="flex items-start">
    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-slate-100 flex items-center justify-center border border-slate-200 mt-1">
        <span class="text-slate-600 font-bold text-sm">2</span>
    </div>
    <div class="ml-4">
        <h4 class="text-base font-bold text-slate-800">Pull Your Payroll Summary</h4>
        <p class="text-xs text-slate-500 leading-relaxed mt-1">Have your most recent company-wide payroll summary in front of you. We need this for exact math.</p>
    </div>
</li>
<li class="flex items-start">
    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-slate-100 flex items-center justify-center border border-slate-200 mt-1">
        <span class="text-slate-600 font-bold text-sm">3</span>
    </div>
    <div class="ml-4">
        <h4 class="text-base font-bold text-slate-800">Bring Your Leadership</h4>
        <p class="text-xs text-slate-500 leading-relaxed mt-1">If your CFO, head of HR, or business partner needs to sign off, they must be on this 10-minute call.</p>
    </div>
</li>
</ul>
</div>

<a href="#" class="btn-primary block w-full text-center text-white py-4 rounded-xl font-bold shadow-lg shadow-sky-100 transition-transform">
I'm Ready For My Audit
</a>
<p class="text-center text-xs text-slate-400 mt-4 leading-snug">Requires 10 minutes minimum. <br>Please join from a quiet location via Zoom.</p>

</div>
</div>
</div>
</section>
</main>

<footer class="bg-slate-900 text-slate-400 py-10 mt-auto border-t border-slate-800">
<div class="max-w-7xl mx-auto px-4 text-center">
<p class="text-sm">&copy; <?php echo date('Y'); ?> The WIMPER Program. All rights reserved.</p>
<p class="text-xs mt-3 text-slate-500 max-w-2xl mx-auto">Not a CPA or tax advisory firm. The WIMPER mechanism leverages Section 125 of the IRC governing cafeteria plans. Calculations shown are based on legal limits and historical averages.</p>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
