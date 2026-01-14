<?php
/**
 * Template Name: Resources Page
 *
 * @package kidazzle_Excellence
 */

get_header();
?>

<main id="view-resources" class="view-section active block">
    <!-- Hero Section -->
    <section class="py-20 bg-brand-ink text-white text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-kidazzle-purple/5 -z-10"></div>
        <div class="max-w-4xl mx-auto px-4 relative z-10">
            <div class="w-16 h-16 bg-kidazzle-purple/20 text-kidazzle-purple rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6">
                <i class="fa-solid fa-folder-open"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-serif font-bold mb-4">Family Resources</h1>
            <p class="text-lg text-white/60">Tools, documents, and guides to support your child's journey.</p>
        </div>
    </section>

    <!-- Resources Grid -->
    <section class="py-24 bg-brand-cream">
        <div class="max-w-7xl mx-auto px-4 lg:px-6">
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Enrollment Forms -->
                <a href="#" class="bg-white p-10 rounded-[3rem] shadow-soft border border-brand-ink/5 hover:-translate-y-2 transition-all group text-center">
                    <div class="w-20 h-20 bg-kidazzle-purple/10 text-kidazzle-purple rounded-[2rem] flex items-center justify-center text-4xl mb-8 mx-auto group-hover:bg-kidazzle-purple group-hover:text-white transition-all">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-brand-ink mb-3 group-hover:text-kidazzle-purple transition-colors">Enrollment Forms</h3>
                    <p class="text-brand-ink/70 mb-8 leading-relaxed">Download the necessary paperwork and state-required forms to get started with KIDazzle.</p>
                    <span class="inline-flex items-center gap-2 font-bold text-xs uppercase tracking-widest text-kidazzle-purple">Download Forms <i class="fa-solid fa-chevron-right"></i></span>
                </a>

                <!-- Academic Calendar -->
                <a href="#" class="bg-white p-10 rounded-[3rem] shadow-soft border border-brand-ink/5 hover:-translate-y-2 transition-all group text-center">
                    <div class="w-20 h-20 bg-kidazzle-blue/10 text-kidazzle-blue rounded-[2rem] flex items-center justify-center text-4xl mb-8 mx-auto group-hover:bg-kidazzle-blue group-hover:text-white transition-all">
                        <i class="fa-solid fa-calendar-alt"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-brand-ink mb-3 group-hover:text-kidazzle-blue transition-colors">Academic Calendar</h3>
                    <p class="text-brand-ink/70 mb-8 leading-relaxed">Stay updated on important dates, school closures, holiday events, and special celebrations.</p>
                    <span class="inline-flex items-center gap-2 font-bold text-xs uppercase tracking-widest text-kidazzle-blue">View Calendar <i class="fa-solid fa-chevron-right"></i></span>
                </a>

                <!-- Tuition Portal -->
                <a href="#" class="bg-white p-10 rounded-[3rem] shadow-soft border border-brand-ink/5 hover:-translate-y-2 transition-all group text-center">
                    <div class="w-20 h-20 bg-kidazzle-green/10 text-kidazzle-green rounded-[2rem] flex items-center justify-center text-4xl mb-8 mx-auto group-hover:bg-kidazzle-green group-hover:text-white transition-all">
                        <i class="fa-solid fa-credit-card"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-brand-ink mb-3 group-hover:text-kidazzle-green transition-colors">Pay Tuition</h3>
                    <p class="text-brand-ink/70 mb-8 leading-relaxed">Secure online portal for fast and easy tuition payments, statements, and financial tracking.</p>
                    <span class="inline-flex items-center gap-2 font-bold text-xs uppercase tracking-widest text-kidazzle-green">Access Portal <i class="fa-solid fa-chevron-right"></i></span>
                </a>
            </div>
        </div>
    </section>

    <!-- Support Section -->
    <section class="py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-serif font-bold text-brand-ink mb-6">Need additional documents?</h2>
            <p class="text-lg text-brand-ink/70 mb-10">If you can\'t find the form you\'re looking for, please reach out to your center director or our corporate office for assistance.</p>
            <a href="/contact" class="px-8 py-4 bg-kidazzle-blue text-white font-bold rounded-full uppercase tracking-widest text-xs hover:bg-brand-ink transition-all shadow-lg">Contact Us</a>
        </div>
    </section>
</main>

<?php
get_footer();
