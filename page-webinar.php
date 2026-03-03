<?php
/**
 * Template Name: Webinar Blank Canvas
 *
 * @package wimper
 */

get_header();
?>

<div class="bg-slate-50 min-h-screen pt-32 pb-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white p-8 md:p-12 rounded-[2rem] shadow-2xl border border-slate-100'); ?>>
                    <!-- Header -->
                    <div class="text-center mb-10 border-b border-slate-100 pb-8">
                        <div
                            class="inline-flex items-center px-4 py-1.5 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-widest mb-6">
                            <span class="relative flex h-2 w-2 mr-2">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-sky-500"></span>
                            </span>
                            Live Weekly Training
                        </div>
                        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                            <?php the_title(); ?>
                        </h1>
                    </div>

                    <!-- Genuine DB Content (HeyGen + GHL Form) -->
                    <div class="prose prose-slate max-w-none">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
