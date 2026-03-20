<?php
/**
 * Template Name: WIMPER - Success / Next Steps
 *
 * @package wimper
 */

get_header();
?>

<!-- SUCCESS PAGE HEADER -->
<section class="h-screen flex items-center justify-center relative bg-slate-50 overflow-hidden">
    <!-- Abstract Background Elements -->
    <div
        class="absolute top-[-10%] right-[-5%] w-96 h-96 bg-kidazzle-orangeLight rounded-full mix-blend-multiply filter blur-3xl opacity-70">
    </div>
    <div
        class="absolute bottom-[-10%] left-[-5%] w-96 h-96 bg-kidazzle-tealLight rounded-full mix-blend-multiply filter blur-3xl opacity-70">
    </div>

    <div class="max-w-3xl mx-auto px-6 text-center relative z-10 w-full">
        <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-green-100 mb-8 mx-auto shadow-sm">
            <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>

        <h1 class="text-5xl md:text-6xl font-serif text-[#2F4858] mb-6 tracking-tight">Application Received</h1>
        <p class="text-xl text-slate-600 font-light mb-12">
            Your inquiry for the WIMPER Guaranteed Issue Enrollment protocol has been securely logged.
        </p>

        <!-- Premium Video Container for HeyGen/Walkthrough -->
        <div class="relative w-full max-w-4xl mx-auto rounded-3xl overflow-hidden shadow-2xl border-4 border-white mb-16 bg-slate-900 group">
            <div class="aspect-w-16 aspect-h-9 relative pb-[56.25%]">
                <!-- VIDEO EMBED HUB -->
                <!-- Robert: This is where you will add the URL to the downloaded HeyGen video or Walkthrough Video -->
                <div class="absolute inset-0 flex flex-col items-center justify-center bg-navy/90 text-white z-10 transition-opacity">
                    <i class="fas fa-play-circle text-6xl text-accent mb-4 cursor-pointer hover:scale-110 transition-transform"></i>
                    <p class="font-bold tracking-widest uppercase text-sm">Play Executive Briefing</p>
                    <p class="text-xs text-blue-200 mt-2 font-light">Duration: 2:45</p>
                </div>
                <!-- Placeholder Image or Video Element -->
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2000&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-50" />
            </div>
        </div>

        <!-- Dynamic Success Timeline / Pop-Up Trigger -->
        <div
            class="bg-white p-8 md:p-10 rounded-2xl shadow-xl border border-slate-100 relative group overflow-hidden text-left">
            <div class="absolute top-0 left-0 w-2 h-full bg-[#E89654]"></div>

            <h3 class="text-2xl font-bold text-[#2F4858] mb-4">Immediate Next Steps</h3>

            <ul class="space-y-6 relative border-l border-slate-200 ml-3">
                <li class="pl-6 relative">
                    <span class="absolute -left-[5px] top-1 w-3 h-3 bg-[#E89654] rounded-full ring-4 ring-white"></span>
                    <h4 class="font-bold text-[#2F4858]">1. Activation & Recapture Audit</h4>
                    <p class="text-sm text-slate-500 mt-1">Our analysts immediately review your corporate data profiles
                        against federal compliance frameworks.</p>
                </li>
                <li class="pl-6 relative">
                    <span
                        class="absolute -left-[5px] top-1 w-3 h-3 bg-slate-300 rounded-full ring-4 ring-white group-hover:bg-[#4A6C7C] transition-colors"></span>
                    <h4 class="font-bold text-[#2F4858]">2. Strategy Briefing (48 Hours)</h4>
                    <p class="text-sm text-slate-500 mt-1">You will receive an automated SMS from our GoHighLevel
                        concierge to schedule your definitive strategic meeting.</p>
                </li>
                <li class="pl-6 relative">
                    <span class="absolute -left-[5px] top-1 w-3 h-3 bg-slate-300 rounded-full ring-4 ring-white"></span>
                    <h4 class="font-bold text-[#2F4858]">3. Guaranteed Issue Go-Live</h4>
                    <p class="text-sm text-slate-500 mt-1">Full portal access and tax credit recapturing activation.</p>
                </li>
            </ul>

            <div class="mt-8 text-center md:text-left">
                <!-- Button triggers an integrated modal if preferred, or returns to home -->
                <a href="/"
                    class="inline-block bg-[#2F4858] text-white px-8 py-4 rounded-md font-bold text-sm tracking-widest uppercase hover:bg-slate-900 transition-colors shadow-md">
                    Return to Home
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>