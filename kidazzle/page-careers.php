<?php
/**
 * Template Name: Careers Page
 *
 * @package kidazzle_Excellence
 */

get_header();
?>

<!-- 6. CAREERS VIEW -->
<main id="view-careers" class="view-section active block">
    <!-- Hero Section -->
    <section class="py-24 bg-white text-center relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 relative z-10">
            <span class="text-kidazzle-red font-bold tracking-[0.2em] text-xs uppercase mb-4 block">
                Join Our Team
            </span>
            <h1 class="font-serif text-5xl md:text-6xl text-brand-ink mb-6">
                Shape the future. <br><span class="italic text-kidazzle-red">Love your work.</span>
            </h1>
            <p class="text-lg text-brand-ink/90 max-w-2xl mx-auto mb-10">
                We don't just hire staff; we invest in educators. At KIDazzle, you'll find a supportive community, career pathways, and the resources you need to change lives.
            </p>
            <a href="#openings" class="px-8 py-4 bg-kidazzle-red text-white font-bold rounded-full uppercase tracking-[0.2em] text-xs hover:bg-brand-ink transition-colors shadow-lg">
                View Current Openings
            </a>
        </div>
    </section>

    <!-- Culture & Benefits -->
    <section id="culture" class="py-24 bg-brand-cream border-t border-brand-ink/5">
        <div class="max-w-7xl mx-auto px-4 lg:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-brand-ink">
                    Why KIDazzle?
                </h2>
                <p class="text-brand-ink/90 mt-4">
                    We take care of you, so you can take care of them.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div class="bg-white p-8 rounded-[2rem] shadow-soft text-center group hover:-translate-y-1 transition-transform">
                    <div class="w-16 h-16 mx-auto bg-kidazzle-green/10 rounded-full flex items-center justify-center text-2xl text-kidazzle-green mb-6 group-hover:bg-kidazzle-green group-hover:text-white transition-colors">
                        <i class="fa-solid fa-smile"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Supportive Culture</h3>
                    <p class="text-sm text-brand-ink/90">We treat our staff like family. Ask about our tenure bonuses!</p>
                </div>
                <!-- Benefit 2 -->
                <div class="bg-white p-8 rounded-[2rem] shadow-soft text-center group hover:-translate-y-1 transition-transform">
                    <div class="w-16 h-16 mx-auto bg-kidazzle-blue/10 rounded-full flex items-center justify-center text-2xl text-kidazzle-blue mb-6 group-hover:bg-kidazzle-blue group-hover:text-white transition-colors">
                        <i class="fa-solid fa-trending-up"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Growth Opportunities</h3>
                    <p class="text-sm text-brand-ink/90">Paid training and CDA certification assistance.</p>
                </div>
                <!-- Benefit 3 -->
                <div class="bg-white p-8 rounded-[2rem] shadow-soft text-center group hover:-translate-y-1 transition-transform">
                    <div class="w-16 h-16 mx-auto bg-kidazzle-red/10 rounded-full flex items-center justify-center text-2xl text-kidazzle-red mb-6 group-hover:bg-kidazzle-red group-hover:text-white transition-colors">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Competitive Benefits</h3>
                    <p class="text-sm text-brand-ink/90">Health, dental, and vision options available.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Openings -->
    <section id="openings" class="py-24 bg-white">
        <div class="max-w-5xl mx-auto px-4 lg:px-6 text-center">
            <h2 class="text-3xl font-serif font-bold text-brand-ink mb-8">
                Current Opportunities
            </h2>

            <div class="space-y-4 max-w-3xl mx-auto">
                <div class="border border-brand-ink/10 rounded-2xl p-6 flex justify-between items-center bg-white shadow-sm">
                    <div class="text-left">
                        <h4 class="font-bold text-slate-900">Lead Teacher (Preschool)</h4>
                        <p class="text-sm text-slate-500">Riverdale, GA • Full-Time</p>
                    </div>
                    <a href="mailto:careers@kidazzlechildcare.com" class="px-6 py-3 bg-brand-ink text-white rounded-full text-xs font-bold uppercase tracking-wider hover:bg-kidazzle-red transition-colors">Apply</a>
                </div>
                <div class="border border-brand-ink/10 rounded-2xl p-6 flex justify-between items-center bg-white shadow-sm">
                    <div class="text-left">
                        <h4 class="font-bold text-slate-900">Assistant Director</h4>
                        <p class="text-sm text-slate-500">Fairburn, GA • Full-Time</p>
                    </div>
                    <a href="mailto:careers@kidazzlechildcare.com" class="px-6 py-3 bg-brand-ink text-white rounded-full text-xs font-bold uppercase tracking-wider hover:bg-kidazzle-red transition-colors">Apply</a>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <p class="text-slate-600 mb-6">Don't see your role? Send us your resume!</p>
                <a href="mailto:careers@kidazzlechildcare.com" class="inline-block px-10 py-5 bg-brand-ink text-white font-bold rounded-full uppercase tracking-widest text-xs hover:bg-kidazzle-red hover:scale-105 transition-all shadow-xl">
                    Email Recruiting
                </a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
