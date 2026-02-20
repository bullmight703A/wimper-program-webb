<?php
/**
 * Template Name: Webinar Landing Page
 * Description: Standalone webinar registration page — no theme header/footer.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WIMPER | Live Weekly Webinar with Robert Hill</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; margin: 0; padding: 0; }
.btn-primary { background-color: #0284c7; transition: all 0.3s ease; }
.btn-primary:hover { background-color: #0369a1; transform: translateY(-1px); }
.card-shadow { box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1); }
.benefit-card { transition: transform 0.3s ease; }
.benefit-card:hover { transform: translateY(-5px); }
.mentor-gradient { background: linear-gradient(to bottom right, #f8fafc, #e0f2fe); }
.mentor-img-container { box-shadow: 0 20px 50px rgba(0,0,0,0.1); }
</style>
<?php wp_head(); ?>
</head>
<body class="bg-slate-50 text-slate-900">

<!-- Navigation -->
<nav class="fixed w-full z-50 bg-white/90 backdrop-blur-md border-b border-slate-200">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between h-20 items-center">
<div class="flex items-center">
<span class="text-2xl font-extrabold tracking-tight text-slate-900">WIMP<span class="text-sky-600">ER</span></span>
</div>
<div class="hidden md:flex items-center space-x-8">
<a href="#how-it-works" class="text-sm font-medium text-slate-600 hover:text-sky-600">The Process</a>
<a href="#mentor" class="text-sm font-medium text-slate-600 hover:text-sky-600">Meet Robert</a>
<a href="#benefits" class="text-sm font-medium text-slate-600 hover:text-sky-600">Benefits</a>
<a href="#contact" class="btn-primary text-white px-6 py-2.5 rounded-full text-sm font-semibold">Reserve My Seat</a>
</div>
</div>
</div>
</nav>

<!-- Hero Section -->
<header class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-white border-b border-slate-100">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center lg:text-left">
<div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
<div>
<div class="inline-flex items-center px-4 py-1.5 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-widest mb-6">
<span class="relative flex h-2 w-2 mr-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-sky-500"></span>
</span>
Live Weekly Training
</div>
<h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 leading-[1.1] mb-6">
The Blueprint to <span class="text-sky-600">Lowering FICA Taxes</span> on Auto-Pilot.
</h1>
<p class="text-lg md:text-xl text-slate-600 mb-10 max-w-lg leading-relaxed mx-auto lg:mx-0">
Join our exclusive live webinar to see exactly how Robert Hill helps business owners reclaim thousands in payroll taxes while enhancing employee health coverage.
</p>
<div class="flex flex-col items-center lg:items-start gap-4">
<a href="#contact" class="btn-primary text-white px-8 sm:px-24 py-5 rounded-2xl text-xl font-bold text-center shadow-xl shadow-sky-200 transition-all hover:scale-105 inline-block w-full sm:w-auto min-w-[320px]">
Attend the Live Webinar
</a>
<p class="text-sm text-slate-400 font-medium">Limited to 100 attendees per session to ensure Q&amp;A time.</p>
</div>
</div>
<div class="mt-16 lg:mt-0 relative">
<div class="relative rounded-3xl overflow-hidden card-shadow bg-slate-900 border-8 border-white">
<div class="aspect-video bg-slate-800 flex items-center justify-center relative">
<svg class="w-20 h-20 text-white opacity-20" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
<div class="absolute bottom-4 left-4 right-4 flex justify-between items-center text-white/60 text-xs font-bold uppercase">
<span>Host: Robert Hill</span>
<span>Topic: The WIMPER Advantage</span>
</div>
</div>
</div>
<div class="absolute -top-6 -right-6 w-24 h-24 bg-sky-400 rounded-full opacity-10"></div>
</div>
</div>
</div>
</header>

<!-- How It Works -->
<section id="how-it-works" class="py-24 bg-slate-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-16">
<h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 mb-4 text-center">What We'll Cover</h2>
<p class="text-slate-600 text-lg max-w-2xl mx-auto">A deep dive into the 3 pillars of payroll tax reduction.</p>
</div>
<div class="grid md:grid-cols-3 gap-8">
<div class="bg-white p-8 rounded-3xl card-shadow border border-slate-100 flex flex-col items-center text-center">
<div class="w-16 h-16 bg-sky-100 rounded-2xl flex items-center justify-center mb-6">
<svg class="w-8 h-8 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
</div>
<h3 class="text-xl font-bold mb-2">Legal Compliance</h3>
<p class="text-slate-600 text-sm">Understand the ERISA &amp; IRS frameworks that make WIMPER the gold standard in tax savings.</p>
</div>
<div class="bg-white p-8 rounded-3xl card-shadow border border-slate-100 flex flex-col items-center text-center">
<div class="w-16 h-16 bg-sky-100 rounded-2xl flex items-center justify-center mb-6">
<svg class="w-8 h-8 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
</div>
<h3 class="text-xl font-bold mb-2">ROI Analysis</h3>
<p class="text-slate-600 text-sm">We'll show you the math behind the $600-$1,200 annual savings per employee.</p>
</div>
<div class="bg-white p-8 rounded-3xl card-shadow border border-slate-100 flex flex-col items-center text-center">
<div class="w-16 h-16 bg-sky-100 rounded-2xl flex items-center justify-center mb-6">
<svg class="w-8 h-8 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
</div>
<h3 class="text-xl font-bold mb-2">Employee Buy-In</h3>
<p class="text-slate-600 text-sm">How we achieve 90%+ enrollment rates by putting more money in your employees' pockets.</p>
</div>
</div>
</div>
</section>

<!-- Meet the Mentor Section -->
<section id="mentor" class="py-24 bg-white mentor-gradient">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="lg:grid lg:grid-cols-2 lg:gap-20 items-center">
<div class="order-2 lg:order-1 flex justify-center">
<div class="relative inline-block group">
<div class="w-full h-full absolute -bottom-4 -right-4 bg-sky-600 rounded-[2.5rem] -z-10 group-hover:-bottom-6 group-hover:-right-6 transition-all duration-500"></div>
<div class="mentor-img-container rounded-[2.5rem] aspect-[4/5] w-full max-w-sm overflow-hidden border-8 border-white bg-slate-100">
<img src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/6904db086bade60f753ac8f9.png" alt="Robert Hill" class="w-full h-full object-cover grayscale-[20%] group-hover:grayscale-0 transition-all duration-700 hover:scale-105" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
<div class="hidden w-full h-full flex items-center justify-center text-slate-400 font-bold uppercase tracking-widest">Robert Hill</div>
</div>
</div>
</div>
<div class="order-1 lg:order-2 space-y-6 pt-12 lg:pt-0">
<div class="text-sky-600 font-bold uppercase tracking-widest text-sm">Meet Your Mentor</div>
<h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 leading-tight">Expert Guidance from Robert Hill</h2>
<p class="text-lg text-slate-600 leading-relaxed">
With over two decades of experience in specialized insurance and payroll tax strategies, Robert Hill has helped hundreds of business owners navigate complex IRS regulations to find significant savings.
</p>
<p class="text-slate-600">
In this weekly webinar, Robert pulls back the curtain on the "WIMPER" strategy, sharing the same frameworks used by forward-thinking companies to boost retention and cut overhead without reducing quality of care.
</p>
<div class="pt-6 flex flex-wrap gap-8">
<div>
<div class="text-2xl font-bold text-slate-900">20+ Years</div>
<div class="text-xs text-slate-400 uppercase font-bold tracking-widest">Experience</div>
</div>
<div>
<div class="text-2xl font-bold text-slate-900">500+</div>
<div class="text-xs text-slate-400 uppercase font-bold tracking-widest">Businesses Helped</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Benefits Section -->
<section id="benefits" class="py-24 bg-slate-50 border-y border-slate-200">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-16">
<h2 class="text-3xl font-extrabold text-slate-900 mb-4">Why Attend?</h2>
<p class="text-slate-600">Get the full breakdown of how WIMPER creates a win-win for everyone.</p>
</div>
<div class="grid lg:grid-cols-2 gap-12">
<div class="space-y-6">
<h3 class="text-xl font-bold text-sky-600">Employer Impact</h3>
<ul class="space-y-4">
<li class="flex items-start gap-3">
<svg class="w-5 h-5 text-sky-500 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
<span class="text-slate-700 font-medium">Lower matching FICA payroll tax contributions immediately.</span>
</li>
<li class="flex items-start gap-3">
<svg class="w-5 h-5 text-sky-500 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
<span class="text-slate-700 font-medium">Improve employee retention in high-turnover industries.</span>
</li>
</ul>
</div>
<div class="space-y-6">
<h3 class="text-xl font-bold text-slate-800">Employee Impact</h3>
<ul class="space-y-4">
<li class="flex items-start gap-3">
<svg class="w-5 h-5 text-slate-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
<span class="text-slate-700 font-medium">Increased take-home pay with no out-of-pocket cost.</span>
</li>
<li class="flex items-start gap-3">
<svg class="w-5 h-5 text-slate-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
<span class="text-slate-700 font-medium">Access to premium wellness and medical reimbursement tools.</span>
</li>
</ul>
</div>
</div>
</div>
</section>

<!-- Webinar Registration Form -->
<section id="contact" class="py-24 bg-white overflow-hidden">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="bg-slate-900 rounded-[3rem] overflow-hidden shadow-2xl flex flex-col lg:flex-row">
<div class="lg:w-1/2 p-12 lg:p-20 text-white flex flex-col justify-center">
<h2 class="text-3xl md:text-5xl font-bold mb-6 text-center lg:text-left">Reserve Your Seat</h2>
<p class="text-slate-400 text-lg mb-8 text-center lg:text-left leading-relaxed">
Please know this normally turns out to be a relatively intimate crowd, so come prepared with your questions. Secure your spot for the next live webinar session with Robert Hill.
</p>
<div class="flex items-center justify-center lg:justify-start gap-4 p-4 bg-white/5 rounded-2xl border border-white/10">
<div class="text-center border-r border-white/10 pr-6">
<div class="text-2xl font-bold text-sky-400">Next Live</div>
<div class="text-[10px] uppercase font-bold text-slate-400 tracking-widest">Webinar Session</div>
</div>
<div class="pl-2">
<div class="font-bold text-lg">Wednesday @ 7:00 PM EST</div>
<div class="text-sm text-slate-500">Online Event &#8226; Zoom Link Sent via Email</div>
</div>
</div>
</div>
<div class="lg:w-1/2 bg-white p-12 lg:p-20">
<form onsubmit="event.preventDefault(); document.getElementById('success-msg').classList.remove('hidden');" class="space-y-6">
<div class="grid md:grid-cols-2 gap-6">
<div>
<label class="block text-sm font-bold text-slate-700 mb-2">First Name *</label>
<input type="text" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-sky-500 outline-none">
</div>
<div>
<label class="block text-sm font-bold text-slate-700 mb-2">Last Name *</label>
<input type="text" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-sky-500 outline-none">
</div>
</div>
<div>
<label class="block text-sm font-bold text-slate-700 mb-2">Work Email *</label>
<input type="email" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-sky-500 outline-none">
</div>
<button type="submit" class="w-full btn-primary text-white font-bold py-5 rounded-xl text-xl shadow-lg transition-transform active:scale-95">
Register for Live Webinar
</button>
<p id="success-msg" class="hidden text-green-600 text-center font-bold mt-4 italic">Registration confirmed! Check your email for the link.</p>
<p class="text-center text-[10px] text-slate-400 uppercase font-bold tracking-widest">Secure &amp; Confidential &#8226; No SPAM</p>
</form>
</div>
</div>
</div>
</section>

<!-- Footer -->
<footer class="bg-white pt-20 pb-10 border-t border-slate-100">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid md:grid-cols-3 gap-12 mb-16 text-sm text-slate-500">
<div>
<span class="text-xl font-extrabold text-slate-900 block mb-6">WIMP<span class="text-sky-600">ER</span></span>
<p class="leading-relaxed">Educating business owners on compliant tax-advantaged health strategies.</p>
</div>
<div>
<h4 class="font-bold text-slate-900 mb-6">Resources</h4>
<ul class="space-y-3">
<li><a href="#" class="hover:text-sky-600 transition">Webinar FAQ</a></li>
<li><a href="#" class="hover:text-sky-600 transition">Case Studies</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-slate-900 mb-6">Company</h4>
<p>404-963-8278</p>
<p>Enroll@wimpfer.com</p>
</div>
</div>
<div class="text-center pt-8 border-t border-slate-100 text-xs text-slate-400">
&copy; <?php echo date('Y'); ?> WIMPFER. All rights reserved.
</div>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
