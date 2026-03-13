<?php
/*
Template Name: WIMPER SPA Home
*/

get_header();
?>

<!-- ================================================================================= -->
<!-- VIEW 1: HOME (THE EXPERIENCE)                                                     -->
<!-- ================================================================================= -->
<!-- ================================================================================= -->
<!-- VIEW 1: HOME (THE EXPERIENCE)                                                     -->
<!-- ================================================================================= -->
<div id="home" class="page-view active flex-grow">
    <!-- Hero Section -->
    <section class="relative pt-20 pb-24 lg:pt-32 lg:pb-40 overflow-hidden gradient-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-bold uppercase tracking-wider mb-6">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        Optimized for $1M - $10M Revenue Teams
                    </div>
                    <h1 class="text-5xl lg:text-6xl font-extrabold text-white leading-[1.1] mb-6">
                        Turn Your Payroll Tax Into <span class="text-blue-500">Retained Profit.</span>
                    </h1>
                    <p class="text-xl text-slate-300 mb-10 leading-relaxed max-w-xl">
                        Wimper uses Section 125 & 105 protocols to save mid-market businesses an average of <strong>$900 per employee annually</strong> while increasing employee take-home pay.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button onclick="navigateTo('contact')" class="bg-brand text-white px-8 py-4 rounded-xl text-lg font-bold hover:bg-blue-900 transition-all shadow-xl hover:shadow-2xl text-center">
                            Get Your Custom Savings Quote
                        </button>
                        <div class="flex items-center gap-3 px-4">
                            <div class="flex -space-x-2">
                                <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=1" alt="">
                                <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=2" alt="">
                                <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=3" alt="">
                            </div>
                            <span class="text-sm text-slate-300 font-medium">Trusted by 200+ Growth CEOs</span>
                        </div>
                    </div>
                </div>
                <!-- Visual Savings Hook -->
                <div class="relative">
                    <div class="bg-slate-900/50 backdrop-blur-md rounded-3xl p-8 card-shadow border border-white/10">
                        <h3 class="text-lg font-bold mb-6 flex items-center gap-2 text-white">
                            <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Annual Impact for a 50-Person Team
                        </h3>
                        <div class="space-y-6">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm text-slate-300 font-medium">Estimated Payroll Tax Savings</span>
                                    <span class="text-sm font-bold text-green-400">+$45,000</span>
                                </div>
                                <div class="w-full bg-slate-100 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full w-full"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm text-slate-300 font-medium">Employee Benefit Value Added</span>
                                    <span class="text-sm font-bold text-blue-400">+$120,000</span>
                                </div>
                                <div class="w-full bg-slate-100 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full w-[85%]"></div>
                                </div>
                            </div>
                            <div class="pt-6 border-t border-slate-700 flex items-center justify-between">
                                <span class="text-white font-bold">Total Net Profit Increase</span>
                                <span class="text-2xl font-black text-blue-400">$45,000 /yr</span>
                            </div>
                        </div>
                    </div>
                    <!-- Absolute decorative badge -->
                    <div class="absolute -bottom-6 -right-6 bg-yellow-400 text-brand p-4 rounded-2xl shadow-lg font-bold transform rotate-3">
                        IRS Compliant
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- ================================================================================= -->
<!-- VIEW 2: LOGIC SECTION                                                             -->
<!-- ================================================================================= -->
<div id="logic" class="page-view flex-grow bg-white">
    <!-- The Logic Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white mb-4">How Wimper Unlocks Trapped Capital</h2>
                <p class="text-slate-300 max-w-2xl mx-auto">We leverage underutilized sections of the IRS tax code to create a self-funding benefit ecosystem.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 rounded-2xl bg-white/5 backdrop-blur-md border border-white/10">
                    <div class="text-blue-400 font-bold text-xl mb-4">01. Reallocation</div>
                    <h4 class="text-lg font-bold mb-3 text-white">Pre-Tax Shift</h4>
                    <p class="text-sm text-slate-300 leading-relaxed">Employees reallocate a portion of their gross salary into the Wimper Wellness program via a Section 125 Cafeteria Plan.</p>
                </div>
                <div class="p-8 rounded-2xl bg-white/5 backdrop-blur-md border border-white/10">
                    <div class="text-blue-400 font-bold text-xl mb-4">02. Tax Reduction</div>
                    <h4 class="text-lg font-bold mb-3 text-white">FICA Mitigation</h4>
                    <p class="text-sm text-slate-300 leading-relaxed">By reducing the taxable wage base, the employer saves 7.65% in FICA taxes on every dollar reallocated by the team.</p>
                </div>
                <div class="p-8 rounded-2xl bg-white/5 backdrop-blur-md border border-white/10">
                    <div class="text-blue-400 font-bold text-xl mb-4">03. Reimbursement</div>
                    <h4 class="text-lg font-bold mb-3 text-white">Tax-Free Payouts</h4>
                    <p class="text-sm text-slate-300 leading-relaxed">Under Section 105, employees receive tax-free reimbursements for wellness activities, resulting in a higher net take-home pay.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- ================================================================================= -->
<!-- VIEW 3: SAVINGS & ROI CALC                                                        -->
<!-- ================================================================================= -->
<div id="savings" class="page-view flex-grow bg-brand text-white">
    <!-- Mid-Market Specific Pain Points -->
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div>
                    <h2 class="text-4xl font-bold mb-8">Stop Overpaying for "Standard" Benefits</h2>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold mb-2">Recapture Lost Cash Flow</h4>
                                <p class="text-slate-300">For a $5M company with 40 employees, Wimper puts roughly $36,000 back into your operating budget every single year.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold mb-2">Compete with Giants</h4>
                                <p class="text-slate-300">Offer benefits usually reserved for Fortune 500 companies (Telemedicine, Mental Health, Accident coverage) at zero net-cost to you.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white/5 p-8 rounded-3xl border border-white/10 backdrop-blur-sm">
                    <h3 class="text-2xl font-bold mb-6">Request a Payout Report</h3>
                    <div class="space-y-4 text-slate-900">
                        <label class="block text-xs font-bold text-white uppercase tracking-widest mb-3">Total Participating Employees</label>
                        <input type="range" id="calcRange" min="10" max="500" value="50" class="w-full h-2 bg-white/20 rounded-lg appearance-none cursor-pointer accent-blue-500" oninput="updateHeroCalc()">
                        <div class="flex justify-between mt-6 pt-4 border-t border-white/10">
                            <div class="text-center text-white">
                                <span class="text-xs uppercase font-bold text-slate-300 block mb-1">Headcount</span>
                                <span class="text-3xl font-black" id="calcCount">50</span>
                            </div>
                            <div class="text-center text-white">
                                <span class="text-xs uppercase font-bold text-slate-300 block mb-1">Annual EBITDA Growth</span>
                                <span class="text-3xl font-black text-blue-400" id="calcSavings">$55,000</span>
                            </div>
                        </div>
                        <button onclick="navigateTo('contact')" class="mt-8 w-full bg-blue-600 text-white font-bold py-4 rounded-xl hover:bg-blue-500 transition-all shadow-lg">
                            Get Your Exact Savings Estimate
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- ================================================================================= -->
<!-- VIEW 4: COMPLIANCE                                                                -->
<!-- ================================================================================= -->
<div id="compliance" class="page-view flex-grow bg-slate-50">
    <!-- Compliance / Safety Section -->
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <div class="lg:w-1/2">
                    <h2 class="text-3xl font-bold mb-6 text-white">Total Compliance. Zero Headache.</h2>
                    <p class="text-slate-300 mb-8 leading-relaxed">
                        Wimper is not a "loophole." It is a strictly governed administration of existing Federal Tax Codes. We handle the paperwork, the enrollment, and the monthly auditing so your HR team stays focused on growth.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 text-green-400"><svg fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg></div>
                            <span class="text-sm font-semibold text-white">IRS Section 125</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 text-green-400"><svg fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg></div>
                            <span class="text-sm font-semibold text-white">ACA Compliant</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 text-green-400"><svg fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg></div>
                            <span class="text-sm font-semibold text-white">ERISA Wrap Docs</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 text-green-400"><svg fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg></div>
                            <span class="text-sm font-semibold text-white">HIPAA Secured</span>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 flex justify-center">
                    <div class="relative w-full max-w-md">
                        <div class="absolute inset-0 bg-blue-600/10 blur-3xl rounded-full"></div>
                        <div class="relative bg-slate-900/50 backdrop-blur-md p-6 rounded-2xl shadow-xl border border-white/10">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                </div>
                                <h4 class="font-bold text-white">Guaranteed Safe Harbor</h4>
                            </div>
                            <p class="text-sm text-slate-300 italic">"The Wimper implementation was the easiest benefits transition we've ever done. The payroll tax savings alone covered our entire Q4 marketing budget."</p>
                            <div class="mt-4 flex items-center gap-2">
                                <span class="text-xs font-bold text-slate-400">— CFO, Service Logistics Firm ($8.2M Rev)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- ================================================================================= -->
<!-- VIEW 5: CONTACT (SCHEDULE)                                                        -->
<!-- ================================================================================= -->
<div id="method" class="page-view flex-grow bg-white">
    <section class="pt-40 pb-24">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h1 class="text-5xl font-black text-slate-900 mb-6">The W.I.M.P.E.R. Chassis</h1>
            <p class="text-xl text-slate-500 font-medium max-w-2xl mx-auto">
                The secret is in the automated "Claims Trigger." Our platform ensures compliance by verifying health
                activity daily.
            </p>
        </div>
    </section>

    <section class="pb-24">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="bg-soft-blue p-12 rounded-3xl border border-blue-100 shadow-sm">
                <h3 class="text-3xl font-black text-navy mb-8">Integrated Medical Access</h3>
                <p class="text-slate-600 mb-8">Powered by <strong>Revive Health</strong>, the chassis satisfies all IRS
                    bona-fide requirement triggers automatically.</p>
                <ul class="space-y-6">
                    <li class="flex items-center space-x-4">
                        <div
                            class="w-10 h-10 bg-white rounded-xl shadow-sm flex items-center justify-center text-accent">
                            <i class="fas fa-video"></i>
                        </div>
                        <span class="font-semibold text-slate-700">24/7 Virtual Urgent Care</span>
                    </li>
                    <li class="flex items-center space-x-4">
                        <div
                            class="w-10 h-10 bg-white rounded-xl shadow-sm flex items-center justify-center text-accent">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <span class="font-semibold text-slate-700">Virtual Primary Care</span>
                    </li>
                    <li class="flex items-center space-x-4">
                        <div
                            class="w-10 h-10 bg-white rounded-xl shadow-sm flex items-center justify-center text-accent">
                            <i class="fas fa-pills"></i>
                        </div>
                        <span class="font-semibold text-slate-700">Pharmacy Savings Benefit</span>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="text-4xl font-black text-slate-900 mb-6">Guaranteed Issue <br><span class="text-accent">No
                        Underwriting.</span></h2>
                <p class="text-lg text-slate-600 leading-relaxed mb-8">
                    Unlike traditional supplemental plans, W.I.M.P.E.R. is a guaranteed issue protocol. Your entire
                    workforce can join without medical exams or history checks.
                </p>
                <div class="bg-slate-50 border-l-4 border-accent p-8 rounded-r-xl mb-8">
                    <h4 class="font-bold text-slate-900 mb-2">Institutional Compliance</h4>
                    <p class="text-sm text-slate-500">Our plan documents and PHP triggers have been audited for over 20
                        years without a single adverse finding.</p>
                </div>
                <button onclick="navigateTo('contact')"
                    class="text-accent font-bold text-lg hover:text-navy transition">Get an Audit <i
                        class="fas fa-arrow-right ml-2"></i></button>
            </div>
        </div>
    </section>
</div>

<!-- ================================================================================= -->
<!-- VIEW 3: WEALTH STRATEGY (IUL)                                                     -->
<!-- ================================================================================= -->
<div id="iul" class="page-view flex-grow bg-white">
    <header class="pt-40 pb-20">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <span class="text-accent text-xs font-bold uppercase tracking-widest mb-4 block">Phase 2: Wealth
                Accumulation</span>
            <h1 class="text-5xl font-black text-slate-900 mb-6">The Zero-Cost Wealth Engine</h1>
            <p class="text-xl text-slate-600 font-medium leading-relaxed">
                You've reduced the tax surface area. Now, capture the surplus to secure the future.
            </p>
        </div>
    </header>

    <section class="py-24">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-4xl font-black text-slate-900 mb-8">Recaptured Savings <br>Meet Market Growth</h2>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    By utilizing the FICA recapture from the W.I.M.P.E.R. chassis, employees can fund a tax-free
                    **Indexed Universal Life (IUL)** policy. This creates a powerful retirement vehicle without
                    decreasing their net take-home pay.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-soft-blue p-6 rounded-2xl border border-blue-100">
                        <h4 class="font-bold text-accent mb-2">0% Market Floor</h4>
                        <p class="text-xs text-slate-500">Protect your principal. Participate in the gains, never the
                            losses.</p>
                    </div>
                    <div class="bg-soft-blue p-6 rounded-2xl border border-blue-100">
                        <h4 class="font-bold text-accent mb-2">Tax-Free Access</h4>
                        <p class="text-xs text-slate-500">Access your wealth through policy loans without IRS
                            intervention.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-navy p-12 rounded-3xl text-white shadow-2xl relative overflow-hidden">
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-accent rounded-full blur-3xl opacity-20"></div>
                    <h3 class="text-3xl font-black mb-6">Private Client Access</h3>
                    <p class="text-blue-100 mb-8 leading-relaxed text-sm">
                        Not in a corporate W.I.M.P.E.R. program? You can still structure an individual IUL policy
                        directly. We offer **Private Client** access to the same high-performance vehicles.
                    </p>
                    <a href="javascript:void(0)" onclick="navigateTo('contact')"
                        class="block w-full bg-accent text-white text-center py-4 rounded-xl font-bold hover:bg-white hover:text-navy transition shadow-lg">Schedule
                        Private Quote</a>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- ================================================================================= -->
<!-- VIEW 4: TIMELINE (IMPLEMENTATION)                                                 -->
<!-- ================================================================================= -->
<div id="timeline" class="page-view flex-grow bg-slate-50">
    <header class="pt-40 pb-20">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h1 class="text-5xl font-black text-slate-900 mb-6">Execution Protocol</h1>
            <p class="text-xl text-slate-500 font-medium">Simple deployment. Zero disruption. Savings realized in 45
                days.</p>
        </div>
    </header>

    <div class="max-w-3xl mx-auto px-4 py-20">
        <div class="flex items-start mb-16 relative">
            <div
                class="w-12 h-12 bg-navy text-white rounded-full flex items-center justify-center font-bold z-10 shrink-0">
                1</div>
            <div class="ml-8">
                <h3 class="text-2xl font-bold text-slate-900 mb-2">Weekly Briefing & Fit Check</h3>
                <p class="text-slate-600">Join our weekly info session to determine if the program is a good fit for
                    your corporate structure. We verify feasibility and estimate savings.</p>
            </div>
        </div>
        <div class="flex items-start mb-16 relative">
            <div
                class="w-12 h-12 bg-accent text-white rounded-full flex items-center justify-center font-bold z-10 shrink-0">
                2</div>
            <div class="ml-8">
                <h3 class="text-2xl font-bold text-slate-900 mb-2">Guaranteed Issue Enrollment</h3>
                <p class="text-slate-600">We launch your custom Revive Health portal. Employees enroll paperlessly.
                    Since it is guaranteed issue, there are no medical underwriting barriers.</p>
            </div>
        </div>
        <div class="flex items-start relative">
            <div
                class="w-12 h-12 bg-green-500 text-white rounded-full flex items-center justify-center font-bold z-10 shrink-0">
                <i class="fas fa-check"></i>
            </div>
            <div class="ml-8">
                <h3 class="text-2xl font-bold text-slate-900 mb-2">Activation & Recapture</h3>
                <p class="text-slate-600">Go live. Employees access virtual care instantly. The business receives FICA
                    savings back, often offsetting the entire benefits cost.</p>
            </div>
        </div>

        <div class="mt-20 p-12 bg-white rounded-3xl text-center border border-slate-200">
            <h3 class="text-2xl font-bold text-slate-900 mb-4">Ready for the Mock Run?</h3>
            <button onclick="navigateTo('contact')"
                class="bg-navy text-white px-10 py-4 rounded-xl font-bold hover:bg-accent transition shadow-xl">Get
                Started</button>
        </div>
    </div>
</div>

<!-- VIEW 5: INSIGHTS & VIEW 6: CONTACT -->
<div id="blog" class="page-view flex-grow bg-white">
    <header class="pt-40 pb-20 bg-slate-900 text-white text-center">
        <h1 class="text-5xl font-black mb-6">The Executive Digest</h1>
        <p class="text-xl text-slate-400">Tax code updates and EBITDA strategy briefings.</p>
    </header>
    <div class="max-w-5xl mx-auto px-4 py-24 space-y-12">
        <article
            class="flex flex-col md:flex-row bg-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer">
            <div class="md:w-1/3 bg-slate-100 h-48 md:h-auto"></div>
            <div class="p-8 md:w-2/3">
                <span class="text-accent text-xs font-bold uppercase tracking-widest mb-2 block">Tax Strategy</span>
                <h3 class="text-2xl font-black text-slate-900 mb-4">Why the CFO is the New Chief Wellness Officer</h3>
                <p class="text-slate-500 mb-6">How Section 125 compliance is redefining boardroom priorities for EBITDA
                    growth in 2025.</p>
                <button class="text-navy font-bold text-sm uppercase tracking-widest hover:text-accent">Read Briefing <i
                        class="fas fa-arrow-right ml-2"></i></button>
            </div>
        </article>
    </div>
</div>

<div id="contact" class="page-view flex-grow bg-soft-blue">
    <header class="pt-40 pb-20 text-center">
        <h1 class="text-5xl font-black text-slate-900">Verify Eligibility.</h1>
        <p class="text-xl text-slate-500 mt-4 leading-relaxed max-w-2xl mx-auto">Submit your headcount for a preliminary FICA recapture audit and implement a zero net-cost wellness expansion.</p>
    </header>
    <div class="max-w-4xl mx-auto px-4 pb-32">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-slate-100 p-4">
            <!-- HighLevel Calendar Widget -->
            <iframe src="https://api.leadconnectorhq.com/widget/booking/VNIKFQp8UXtGVcCV3s7v" 
                    style="width: 100%;border:none;overflow: hidden;min-height: 800px;" scrolling="no" 
                    id="VNIKFQp8UXtGVcCV3s7v_1709400000000"></iframe>
            <script src="https://api.leadconnectorhq.com/js/form_embed.js" type="text/javascript"></script>
        </div>
    </div>
</div>

<?php get_footer(); ?>