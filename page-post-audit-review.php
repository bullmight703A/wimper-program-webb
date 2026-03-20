<?php
/**
 * Template Name: WIMPER - Post Audit Review (Vibrant)
 *
 * @package wimper
 */

// Disable default WP header/footer to allow for the custom Tailwind injection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Secured | WIMPER Business Program</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <?php wp_head(); ?>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #0f172a;
            color: #f8fafc;
            min-height: 100vh;
        }

        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .gradient-border {
            border: 1px solid transparent;
            background: linear-gradient(#0f172a, #0f172a) padding-box,
                        linear-gradient(90deg, #10b981, #3b82f6) border-box;
        }

        .gradient-text {
            background: linear-gradient(90deg, #10b981, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .status-badge {
            background: rgba(16, 185, 129, 0.1);
            color: #10b981;
            border: 1px solid rgba(16, 185, 129, 0.3);
        }

        .step-card:hover {
            border-color: #3b82f6;
            background: rgba(59, 130, 246, 0.05);
        }
    </style>
</head>
<body class="p-4 md:p-12 relative overflow-x-hidden">
    <!-- Vibrant Background Orbs -->
    <div class="absolute top-0 left-[20%] w-96 h-96 bg-emerald-500/20 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-0 right-[10%] w-96 h-96 bg-blue-500/20 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-6xl mx-auto space-y-12 relative z-10">
        
        <!-- Header / Hero Section -->
        <header class="text-center space-y-4 pt-8">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full status-badge text-xs font-bold tracking-widest uppercase">
                <i data-lucide="shield-check" class="w-4 h-4"></i> Enrollment Guaranteed
            </div>
            <h1 class="text-4xl md:text-6xl font-800 tracking-tight">
                Welcome to <span class="gradient-text">WIMPER</span>
            </h1>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto">
                Your journey to business financial mastery begins this Wednesday. Complete the steps below to finalize your audit preparation.
            </p>
        </header>

        <!-- Main Video Message Section -->
        <section class="grid lg:grid-cols-5 gap-8 items-center bg-slate-900/50 p-6 rounded-[2.5rem] border border-white/5 shadow-2xl backdrop-blur-sm">
            <div class="lg:col-span-3">
                <div class="rounded-2xl overflow-hidden shadow-2xl shadow-emerald-500/20 border border-white/10 aspect-w-16 aspect-h-9 bg-slate-950">
                    <video controls class="w-full h-full object-cover">
                        <source src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69bd99209d53bffde6b89e61.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="lg:col-span-2 space-y-6">
                <div class="glass p-8 rounded-3xl space-y-6">
                    <h3 class="text-2xl font-black tracking-tight text-white">
                        Executive Briefing
                    </h3>
                    <div class="flex items-center gap-4">
                        <img src="https://ui-avatars.com/api/?name=Robert+Hill&background=0D8B93&color=fff&size=128" alt="Robert Hill" class="w-16 h-16 rounded-2xl shadow-lg border border-slate-700">
                        <div>
                            <p class="font-bold text-white text-lg">Robert Hill</p>
                            <p class="text-xs font-bold uppercase tracking-widest text-emerald-400">Senior Financial Architect</p>
                        </div>
                    </div>
                    <hr class="border-white/10">
                    <p class="text-sm text-slate-300 leading-relaxed">
                        "Our goal is to identify your top 3 profit killers before we even start the live session. Watch the video to the left to see how to maximize our time together."
                    </p>
                    <a href="mailto:enrollment@thewimperprogram.com" class="inline-flex items-center gap-2 text-xs font-bold text-slate-400 hover:text-white transition-colors">
                        <i data-lucide="mail" class="w-4 h-4"></i> enrollment@thewimperprogram.com
                    </a>
                </div>
            </div>
        </section>

        <!-- Library Section (Videos 2 through 5) -->
        <section class="space-y-6 pt-8">
            <h2 class="text-2xl font-800 flex items-center justify-center md:justify-start gap-3">
                <i data-lucide="play-square" class="text-blue-400"></i> Corporate Resource Briefs
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Video v2 -->
                <div class="glass rounded-3xl overflow-hidden border border-white/5 hover:border-blue-500/30 transition-colors group">
                    <div class="aspect-w-16 aspect-h-9 bg-slate-900 relative">
                        <video controls class="w-full h-full object-cover">
                            <source src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69bd99200a14d53cdf024713.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="p-5">
                        <p class="text-xs font-bold text-blue-400 uppercase tracking-widest mb-1">Brief 01</p>
                        <h4 class="font-bold text-slate-200">The Section 125 Code</h4>
                    </div>
                </div>
                <!-- Video v3 -->
                <div class="glass rounded-3xl overflow-hidden border border-white/5 hover:border-blue-500/30 transition-colors group">
                    <div class="aspect-w-16 aspect-h-9 bg-slate-900 relative">
                        <video controls class="w-full h-full object-cover">
                            <source src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69bd9920b54f0d0fa851c4db.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="p-5">
                        <p class="text-xs font-bold text-emerald-400 uppercase tracking-widest mb-1">Brief 02</p>
                        <h4 class="font-bold text-slate-200">Corporate Audit Prep</h4>
                    </div>
                </div>
                <!-- Video v4 -->
                <div class="glass rounded-3xl overflow-hidden border border-white/5 hover:border-blue-500/30 transition-colors group">
                    <div class="aspect-w-16 aspect-h-9 bg-slate-900 relative">
                        <video controls class="w-full h-full object-cover">
                            <source src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69bd9920ad1400c52ba1e223.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="p-5">
                        <p class="text-xs font-bold text-purple-400 uppercase tracking-widest mb-1">Brief 03</p>
                        <h4 class="font-bold text-slate-200">FICA Leakage</h4>
                    </div>
                </div>
                <!-- Video v5 -->
                <div class="glass rounded-3xl overflow-hidden border border-white/5 hover:border-blue-500/30 transition-colors group">
                    <div class="aspect-w-16 aspect-h-9 bg-slate-900 relative">
                        <video controls class="w-full h-full object-cover">
                            <source src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69bd99209bd1392e2eb31ea6.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="p-5">
                        <p class="text-xs font-bold text-orange-400 uppercase tracking-widest mb-1">Brief 04</p>
                        <h4 class="font-bold text-slate-200">Retention & Growth</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- Schedule & CTA Section -->
        <section class="grid md:grid-cols-2 gap-6 pt-12 border-t border-white/5">
            <div class="glass p-8 rounded-3xl border-l-4 border-emerald-500">
                <h3 class="text-sm font-bold uppercase tracking-widest text-emerald-400 mb-6">Upcoming Webinar</h3>
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 text-emerald-500 flex items-center justify-center">
                            <i data-lucide="calendar"></i>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 font-bold uppercase">Webinar Day</p>
                            <p class="text-xl font-bold text-white" id="upcoming-wednesday">Wednesday, Oct 23rd</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-blue-500/10 text-blue-500 flex items-center justify-center">
                            <i data-lucide="clock"></i>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 font-bold uppercase">Time Slot</p>
                            <p class="text-xl font-bold text-white">7:00 PM EST / 4:00 PM PST</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="glass p-8 rounded-3xl border-l-4 border-blue-500 flex flex-col justify-between">
                <div>
                    <h3 class="text-sm font-bold uppercase tracking-widest text-blue-400 mb-6">Strategy Session</h3>
                    <p class="text-slate-300 mb-6 leading-relaxed text-sm">
                        Need immediate clarity? Book an **Individual Call** before the webinar to discuss your specific business structure.
                    </p>
                </div>
                <div class="space-y-4">
                    <!-- GHL Calendar Frame for direct booking if needed, or link -->
                    <a href="#" class="w-full gradient-border text-white font-800 py-4 rounded-2xl hover:bg-white/5 transition-all flex items-center justify-center gap-2">
                        <i data-lucide="phone-call"></i> Book 1:1 Individual Call
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="pt-24 pb-8 text-center space-y-4">
            <div class="flex justify-center gap-6 text-slate-500 text-sm">
                <a href="https://thewimperprogram.com" class="hover:text-white transition-colors">thewimperprogram.com</a>
                <span>•</span>
                <a href="mailto:enrollment@thewimperprogram.com" class="hover:text-white transition-colors">enrollment@thewimperprogram.com</a>
            </div>
            <p class="text-slate-600 text-xs">© <?php echo date('Y'); ?> WIMPER Business Program. All Rights Reserved.</p>
        </footer>
    </div>

    <?php wp_footer(); ?>
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Calculate Upcoming Wednesday
        function getNextWednesday() {
            const today = new Date();
            const dayOfWeek = today.getDay(); // 0 (Sun) to 6 (Sat)
            const daysUntilWednesday = (3 - dayOfWeek + 7) % 7 || 7;
            const nextWednesday = new Date(today);
            nextWednesday.setDate(today.getDate() + daysUntilWednesday);
            
            const options = { weekday: 'long', month: 'short', day: 'numeric' };
            return nextWednesday.toLocaleDateString('en-US', options);
        }

        document.getElementById('upcoming-wednesday').innerText = getNextWednesday();
    </script>
</body>
</html>
