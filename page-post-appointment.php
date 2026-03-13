<?php
/**
 * Template Name: Post Appointment Review
 *
 * @package wimper
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wimper Program - Post Appointment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        wimpy: {
                            50: '#f0f5ff',
                            100: '#e5edff',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e3a8a',
                            900: '#1e3a8a', // Dark navy from screenshot
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        .hero-gradient { background: linear-gradient(180deg, rgba(240,245,255,1) 0%, rgba(248,250,252,1) 100%); }
        .glass-card { background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); }
    </style>
</head>
<body class="text-slate-800 antialiased">

    <!-- Navigation -->
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-3" style="cursor: pointer;" onclick="window.location.href='/'">
                    <div class="w-10 h-10 bg-wimpy-900 rounded-lg flex items-center justify-center text-white font-bold text-xl shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <span class="font-bold text-2xl text-wimpy-900 tracking-tight">Wimper</span>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-slate-500 font-medium hover:text-wimpy-600 transition">Tax Logic</a>
                    <a href="/" class="text-slate-500 font-medium hover:text-wimpy-600 transition">ROI Calculator</a>
                    <a href="/" class="text-slate-500 font-medium hover:text-wimpy-600 transition">Compliance</a>
                    <a href="#onboarding" class="bg-wimpy-900 text-white px-6 py-2.5 rounded-full font-semibold hover:bg-blue-800 transition shadow-lg shadow-blue-900/20">Finalize Enrollment</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Video Section -->
    <section class="hero-gradient pt-16 pb-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-100 text-wimpy-600 font-semibold text-sm tracking-wide mb-8 border border-blue-200 uppercase">
                <span class="w-2 h-2 rounded-full bg-wimpy-600 animate-pulse"></span>
                Post-Appointment Review
            </div>
            
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight mb-6 leading-tight">
                Here's Exactly How We Turn Your Payroll Tax Into <span class="text-wimpy-600">Retained Profit.</span>
            </h1>
            
            <p class="text-lg md:text-xl text-slate-600 mb-12 max-w-3xl mx-auto leading-relaxed">
                Thank you for your time today. Watch this quick 4-minute recap detailing how the Wimper program utilizes Section 125 & 105 protocols to save you $900 per employee annually.
            </p>

            <!-- Video Player Placeholder -->
            <div class="relative bg-black rounded-2xl shadow-2xl overflow-hidden aspect-video border-4 border-white/50 ring-1 ring-black/5">
                <div class="absolute inset-0 flex flex-col items-center justify-center bg-slate-800/80 text-white z-10 transition hover:bg-slate-800/90 cursor-pointer group">
                    <div class="w-20 h-20 rounded-full bg-wimpy-600 flex items-center justify-center shadow-lg group-hover:scale-105 transition-transform duration-300">
                        <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                    </div>
                    <p class="mt-4 font-medium text-lg text-slate-200">Watch Your Strategic Review</p>
                </div>
                <!-- Thumbnail placeholder (replace src when Robert provides final video or thumbnail) -->
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="Video Thumbnail" class="w-full h-full object-cover opacity-50 grayscale mix-blend-overlay">
            </div>
            
            <div class="mt-6 text-left bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                <h3 class="font-bold text-slate-900 mb-2">In this video we cover:</h3>
                <ul class="text-slate-600 space-y-2 text-sm md:text-base">
                    <li class="flex items-start gap-2"><svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> The specific financial impact for a team of your size.</li>
                    <li class="flex items-start gap-2"><svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> How your employees receive additional take-home pay immediately.</li>
                    <li class="flex items-start gap-2"><svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> The required next steps regarding our onboarding portal and NDA.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Program Overview Grid -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">The Wimper Advantage Summary</h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">A quick recap of who we are, what we do, and why growth-focused CEOs partner with us.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Who We Are -->
                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-wimpy-600 mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Who We Are</h3>
                    <p class="text-slate-600 leading-relaxed">We are a specialized payroll tax optimization and compliance firm. We help mid-market companies structurally eliminate unnecessary tax burdens strictly within IRS guidelines.</p>
                </div>
                <!-- What It Is -->
                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-wimpy-600 mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">What The Program Is</h3>
                    <p class="text-slate-600 leading-relaxed">A fully managed implementation of Section 125 & 105 protocols. It creates a preventative wellness layer over your existing healthcare model without altering your current broker or benefits.</p>
                </div>
                <!-- Why It's Important -->
                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-wimpy-600 mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Why It's Important</h3>
                    <p class="text-slate-600 leading-relaxed">FICA taxes drain critical capital. Reducing this overhead immediately boosts your bottom line, while giving your employees a tangible raise—resulting in better retention and cash flow.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ & Objections Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Common Questions & Objections</h2>
                <p class="text-lg text-slate-600">Addressing the most common concerns growth CEOs have before proceeding.</p>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <details class="group" open>
                        <summary class="flex justify-between items-center font-bold text-lg text-slate-900 cursor-pointer list-none p-6">
                            <span>Is this too good to be true? Is it legally compliant?</span>
                            <span class="transition group-open:rotate-180">
                                <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </span>
                        </summary>
                        <div class="p-6 pt-0 text-slate-600 leading-relaxed border-t border-slate-100">
                            No. This is strictly based on the IRS tax code, specifically Section 125, 105, and 213(d). These regulations have been around for decades, largely utilized by Fortune 500 companies. Wimper brings the necessary administrative architecture to make this compliant and accessible for mid-market businesses.
                        </div>
                    </details>
                </div>
                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <details class="group">
                        <summary class="flex justify-between items-center font-bold text-lg text-slate-900 cursor-pointer list-none p-6">
                            <span>Will this disrupt our HR team or change our current benefits?</span>
                            <span class="transition group-open:rotate-180">
                                <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </span>
                        </summary>
                        <div class="p-6 pt-0 text-slate-600 leading-relaxed border-t border-slate-100">
                            Our process is completely "white-glove". Your existing broker, health insurance plan, and primary benefits remain 100% untouched. We manage the implementation directly with your payroll provider, requiring minimal hours from your HR staff.
                        </div>
                    </details>
                </div>
                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <details class="group">
                        <summary class="flex justify-between items-center font-bold text-lg text-slate-900 cursor-pointer list-none p-6">
                            <span>Does this cost our employees money?</span>
                            <span class="transition group-open:rotate-180">
                                <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </span>
                        </summary>
                        <div class="p-6 pt-0 text-slate-600 leading-relaxed border-t border-slate-100">
                            Absolutely not. In fact, due to the pre-tax nature of the Section 125 deductions offset by the non-taxable Section 105 reimbursements, employees actually see an increase in their net take-home pay every cycle.
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="onboarding" class="py-24 bg-wimpy-900 relative overflow-hidden">
        <!-- Abstract gradient background for premium B2B feel -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute -top-[50%] -right-[10%] w-[70%] h-[150%] rounded-full bg-gradient-to-l from-blue-400 to-transparent blur-3xl transform rotate-12"></div>
        </div>
        
        <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
            <h2 class="text-4xl font-extrabold text-white mb-6">Ready to Lock In Your Savings?</h2>
            <p class="text-blue-100 text-lg mb-10 max-w-2xl mx-auto">
                Please follow the link below to access your secure onboarding portal. You will need to sign the proposal and provide your initial census data so we can generate your exact, guaranteed savings amount.
            </p>
            <a href="#" class="inline-flex items-center justify-center bg-white text-wimpy-900 px-8 py-4 rounded-full font-bold text-lg shadow-xl shadow-black/20 hover:bg-blue-50 hover:scale-105 transition-all duration-300">
                Access Onboarding Portal
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <p class="text-blue-200 mt-6 text-sm">Need help? Email your account executive directly.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:text-left flex flex-col md:flex-row justify-between items-center text-slate-400 text-sm">
            <div class="mb-4 md:mb-0">
                <span class="font-bold text-white text-lg tracking-tight">Wimper</span>
                <p class="mt-2 text-slate-500 max-w-xs">Optimizing payroll efficiency and compliance for mid-market businesses.</p>
            </div>
            <div class="space-x-4">
                <a href="#" class="hover:text-white transition">Privacy Policy</a>
                <a href="#" class="hover:text-white transition">Terms of Service</a>
                <a href="#" class="hover:text-white transition">Contact</a>
            </div>
        </div>
    </footer>

</body>
</html>
