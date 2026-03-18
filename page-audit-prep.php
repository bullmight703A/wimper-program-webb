<?php
/**
 * Template Name: WIMPER Post-Booking (7-Step Framework)
 *
 * @package wimper
 */

get_header();
?>

<!-- WIMPER Dark Theme Background -->
<div class="bg-navy min-h-screen pt-32 pb-20 font-inter">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- 1. The Welcome Video -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">You're Locked In. Watch This First.</h1>
            <p class="text-lg text-gold font-bold uppercase tracking-widest mb-10">MANDATORY 3-MINUTE BRIEFING BEFORE OUR CALL</p>
            
            <div class="relative bg-slate-900 rounded-2xl shadow-2xl border border-slate-700 overflow-hidden mx-auto max-w-4xl" style="padding-top: 56.25%;">
                <!-- Replace src with Robert's intro video -->
                <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- Left Column: Meat & Potatoes -->
            <div class="lg:col-span-2 space-y-12">
                
                <!-- 2. Breakdown of the Mechanism -->
                <div class="bg-slate-900 p-8 rounded-[2rem] border border-slate-800 shadow-xl">
                    <h2 class="text-2xl font-bold text-white mb-4 font-playfair">How The WIMPER Shield Works</h2>
                    <p class="text-slate-400 mb-6 line-clamp-4">Unlike your standard CPA who acts reactively at the end of the year, we install a proactive chassis. By utilizing advanced Section 125 frameworks, we legally intercept capital that is currently leaking to FICA taxes *before* it leaves your business. This isn't a retroactive refund—it is immediate EBITDA recapture on your very next payroll run.</p>
                </div>

                <!-- 4. What it looks like to work with us (The Pathway) -->
                <div class="bg-slate-900 p-8 rounded-[2rem] border border-slate-800 shadow-xl">
                    <h2 class="text-2xl font-bold text-white mb-6 font-playfair">Our Implementation Process</h2>
                    <div class="border-l-2 border-gold pl-6 space-y-6">
                        <div>
                            <h3 class="text-white font-bold text-lg">Day 1: The Diagnostics</h3>
                            <p class="text-slate-400 text-sm">We ingest your census data and map the exact FICA leakage.</p>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-lg">Day 14: The Architecture</h3>
                            <p class="text-slate-400 text-sm">We restructure your payroll mechanisms using our proprietary compliance engines.</p>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-lg">Day 45: First Recapture</h3>
                            <p class="text-slate-400 text-sm">Savings are fully realized and added directly back to your bottom line.</p>
                        </div>
                    </div>
                </div>

                <!-- 7. Case Study Breakdown -->
                <div class="bg-slate-900 p-8 rounded-[2rem] border border-slate-800 shadow-xl">
                    <h2 class="text-2xl font-bold text-white mb-4 font-playfair">Case Study: 55-Employee Logistics Firm</h2>
                    <p class="text-slate-400 mb-4">See exactly how we plugged a $42,000 annual FICA leak without out-of-pocket costs.</p>
                    <a href="#" class="text-gold font-bold hover:text-white transition inline-flex items-center">
                        Read the Breakdown 
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>

            </div>

            <!-- Right Column: Verification & Trust -->
            <div class="space-y-12">
                
                <!-- 5. Reply Requirement (Forces them to confirm) -->
                <div class="bg-gradient-to-br from-gold to-yellow-600 p-8 rounded-[2rem] shadow-xl text-navy">
                    <h3 class="text-xl font-extrabold mb-4 uppercase tracking-wider">Confirm Your Slot</h3>
                    <p class="mb-6 font-medium">To keep your calendar spot, you must confirm you have watched the briefing video and gathered your recent payroll run.</p>
                    <a href="mailto:roberthill@kidazzle.com?subject=WATCHED" class="block text-center bg-navy text-white font-bold py-3 px-6 rounded-lg hover:bg-slate-800 transition">
                        I've Watched It
                    </a>
                </div>

                <!-- 3. Common Questions (Limiting Belief Breakers) -->
                <div class="bg-slate-900 p-8 rounded-[2rem] border border-slate-800 shadow-xl">
                    <h3 class="text-xl font-bold text-white mb-6 font-playfair">Frequently Asked Questions</h3>
                    <div class="space-y-4">
                        <details class="group">
                            <summary class="text-gold font-semibold cursor-pointer select-none">Are there upfront costs?</summary>
                            <p class="text-slate-400 text-sm mt-2">No. Our models are mathematically designed to be net-positive, paying for themselves immediately through captured tax savings.</p>
                        </details>
                        <details class="group mt-4">
                            <summary class="text-gold font-semibold cursor-pointer select-none">Why didn't my CPA do this?</summary>
                            <p class="text-slate-400 text-sm mt-2">CPAs file historical data. We engineer forward-looking operational architecture. It's an entirely different discipline.</p>
                        </details>
                    </div>
                </div>

                <!-- 6. Client Testimonials (iPhone placeholders) -->
                <div class="bg-slate-900 p-8 rounded-[2rem] border border-slate-800 shadow-xl">
                    <h3 class="text-xl font-bold text-white mb-6 font-playfair">From The Club</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-slate-800 h-32 rounded-lg flex items-center justify-center text-slate-500 border border-slate-700">Video 1</div>
                        <div class="bg-slate-800 h-32 rounded-lg flex items-center justify-center text-slate-500 border border-slate-700">Video 2</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
