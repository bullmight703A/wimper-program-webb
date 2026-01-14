<?php
/**
 * Template Name: Teacher Portal Page
 *
 * @package kidazzle_Excellence
 */

get_header();
?>

<main id="view-teacher-portal" class="view-section active block">
    <!-- Hero Section -->
    <section class="py-20 bg-brand-ink text-white text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-kidazzle-blue/5 -z-10"></div>
        <div class="max-w-4xl mx-auto px-4 relative z-10">
            <div class="w-16 h-16 bg-kidazzle-yellow/20 text-kidazzle-yellow rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6">
                <i class="fa-solid fa-users"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-serif font-bold mb-4">Teacher Portal</h1>
            <p class="text-lg text-white/60">Classroom tools, resources, and daily workflows.</p>
        </div>
    </section>

    <!-- Content Grid -->
    <section class="py-16 bg-brand-cream">
        <div class="max-w-7xl mx-auto px-4 lg:px-6">
            <div class="grid lg:grid-cols-3 gap-8 items-start">
                
                <!-- Sidebar: Quick Actions -->
                <div class="lg:col-span-1 space-y-6">
                    <div class="bg-white p-8 rounded-[2rem] shadow-soft border border-brand-ink/5">
                        <h3 class="font-bold text-xl mb-6 text-brand-ink flex items-center gap-2">
                            Quick Actions
                        </h3>
                        <ul class="space-y-4">
                            <li>
                                <a href="#" class="flex items-center gap-3 p-3 rounded-xl hover:bg-brand-cream text-brand-ink/80 hover:text-kidazzle-blue transition-all group">
                                    <i class="fa-solid fa-check-double text-kidazzle-blue"></i>
                                    <span class="font-bold text-sm">Daily Checklist</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-3 p-3 rounded-xl hover:bg-brand-cream text-brand-ink/80 hover:text-kidazzle-red transition-all group">
                                    <i class="fa-solid fa-file-circle-exclamation text-kidazzle-red"></i>
                                    <span class="font-bold text-sm">Incident Report</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-3 p-3 rounded-xl hover:bg-brand-cream text-brand-ink/80 hover:text-kidazzle-green transition-all group">
                                    <i class="fa-solid fa-calendar-plus text-kidazzle-green"></i>
                                    <span class="font-bold text-sm">Time Off Request</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-kidazzle-blue p-8 rounded-[2rem] text-white shadow-lg">
                        <h4 class="font-bold mb-4">Need Help?</h4>
                        <p class="text-white/80 text-sm mb-6">If you\'re having trouble with the portal, contact IT Support or your Director directly.</p>
                        <a href="mailto:support@kidazzlechildcare.com" class="block text-center py-3 bg-white text-kidazzle-blue font-bold rounded-full text-xs uppercase tracking-widest hover:bg-brand-ink hover:text-white transition-all">Contact Support</a>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Daily Task Form -->
                    <div class="bg-white p-10 rounded-[3rem] shadow-soft border border-brand-ink/5">
                        <div class="flex items-center justify-between mb-10">
                            <div>
                                <h2 class="text-2xl font-serif font-bold text-brand-ink">Daily Classroom Tasks</h2>
                                <p class="text-sm text-brand-ink/60 mt-1">Submit your classroom checklist by 9:00 AM.</p>
                            </div>
                            <span class="px-4 py-1.5 bg-kidazzle-blue/10 text-kidazzle-blue text-[10px] font-bold uppercase tracking-widest rounded-full">Required Daily</span>
                        </div>
                        
                        <div class="bg-brand-cream border-2 border-dashed border-brand-ink/10 rounded-3xl p-16 text-center">
                            <i class="fa-solid fa-clipboard-list text-5xl text-brand-ink/10 mb-6"></i>
                            <p class="text-brand-ink/40 text-xs uppercase tracking-[0.2em] mb-4">Embed Code Placeholder</p>
                            <div class="font-bold text-brand-ink/80 text-lg">Daily Checklist Form Integration</div>
                        </div>
                    </div>

                    <!-- Weekly Task Form -->
                    <div class="bg-white p-10 rounded-[3rem] shadow-soft border border-brand-ink/5">
                        <div class="flex items-center justify-between mb-10">
                            <div>
                                <h2 class="text-2xl font-serif font-bold text-brand-ink">Weekly Task Automation</h2>
                                <p class="text-sm text-brand-ink/60 mt-1">Planning and resource requests for the upcoming week.</p>
                            </div>
                            <span class="px-4 py-1.5 bg-kidazzle-purple/10 text-kidazzle-purple text-[10px] font-bold uppercase tracking-widest rounded-full">Weekly</span>
                        </div>

                        <div class="bg-brand-cream border-2 border-dashed border-brand-ink/10 rounded-3xl p-16 text-center">
                            <i class="fa-solid fa-laptop-code text-5xl text-brand-ink/10 mb-6"></i>
                            <p class="text-brand-ink/40 text-xs uppercase tracking-[0.2em] mb-4">Embed Code Placeholder</p>
                            <div class="font-bold text-brand-ink/80 text-lg">Weekly Task Form Integration</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
