<?php
/**
 * Template Name: WIMPER - Enrollment Pending
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
    <title>Enrollment Pending | WIMPER Business Program</title>
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
                        linear-gradient(90deg, #ef4444, #f59e0b) border-box;
        }

        .gradient-text {
            background: linear-gradient(90deg, #ef4444, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 1.5rem;
            background: #000;
        }

        .video-container video, .video-placeholder {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .small-video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 0.75rem;
            background: #1e293b;
        }

        .small-video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .status-badge-pending {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.3);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.7; }
            100% { opacity: 1; }
        }

        .step-card {
            transition: all 0.3s ease;
        }

        .step-card:hover {
            border-color: #3b82f6;
            background: rgba(59, 130, 246, 0.05);
            transform: translateY(-2px);
        }

        dialog::backdrop {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(8px);
        }
    </style>
</head>
<body class="p-4 md:p-12">
    <div class="max-w-6xl mx-auto space-y-8">
        
        <!-- Header / Hero Section -->
        <header class="text-center space-y-4 pt-8">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full status-badge-pending text-xs font-bold tracking-widest uppercase">
                <i data-lucide="alert-circle" class="w-4 h-4"></i> Enrollment Not Confirmed
            </div>
            <h1 class="text-4xl md:text-6xl font-800 tracking-tight">
                Welcome to <span class="gradient-text">WIMPER</span>
            </h1>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto">
                Your place is reserved, but your enrollment is <span class="text-white font-bold">pending</span>. Watch the message below and complete the required steps immediately.
            </p>
        </header>

        <!-- Video Message Section -->
        <section class="grid lg:grid-cols-5 gap-8 items-start">
            <div class="lg:col-span-3 space-y-6">
                <!-- Video 1 (Main Hero) -->
                <div class="video-container shadow-2xl shadow-red-500/10 border border-white/10 group">
                    <video controls class="w-full h-full object-cover">
                        <source src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69bd99209d53bffde6b89e61.mp4" type="video/mp4">
                    </video>
                </div>
                
                <!-- Watch Confirmation Button -->
                <button onclick="this.classList.add('bg-emerald-600', 'text-white'); this.innerHTML='<i data-lucide=\'check\'></i> Video Watched & Understood';" class="w-full bg-slate-800 hover:bg-slate-700 text-slate-200 font-800 py-5 rounded-2xl shadow-lg transition-all flex items-center justify-center gap-3 border border-white/10">
                    <i data-lucide="eye" class="w-6 h-6"></i> Click here. I have watched the video.
                </button>
            </div>
            
            <div class="lg:col-span-2 space-y-6">
                <div class="glass p-6 rounded-3xl space-y-4">
                    <h3 class="text-xl font-bold flex items-center gap-2">
                        <i data-lucide="user-check" class="text-blue-400"></i> Lead Consulting
                    </h3>
                    <div class="flex items-center gap-4">
                        <img src="https://ui-avatars.com/api/?name=Robert+Hill&background=0D8B93&color=fff&size=128" alt="Robert Hill" class="w-16 h-16 rounded-2xl shadow-inner border border-slate-700">
                        <div>
                            <p class="font-bold text-white">Robert Hill</p>
                            <p class="text-sm text-slate-400">Senior Financial Architect</p>
                            <a href="mailto:enrollment@thewimperprogram.com" class="text-xs text-blue-400 hover:underline">enrollment@thewimperprogram.com</a>
                        </div>
                    </div>
                    <hr class="border-white/5">
                    <p class="text-sm text-slate-400 leading-relaxed italic">
                        Securing your financial future requires immediate action. Follow the checklist below to transition from "Pending" to "Confirmed."
                    </p>
                </div>

                <!-- Schedule Sub-Card -->
                <div class="glass p-6 rounded-3xl border border-white/5">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-bold uppercase tracking-widest text-slate-400">Webinar</h3>
                        <span class="text-emerald-500 text-xs font-bold px-2 py-0.5 bg-emerald-500/10 rounded">LIVE SESSION</span>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <i data-lucide="calendar" class="text-emerald-500 w-5 h-5"></i>
                            <span class="text-white font-semibold" id="upcoming-wednesday">Wednesday, Oct 23rd</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="clock" class="text-emerald-500 w-5 h-5"></i>
                            <span class="text-white font-semibold">2:00 PM EST / 11:00 AM PST</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Strategy Session / Calendar Call-to-Action -->
        <section class="glass p-8 rounded-3xl bg-blue-500/5 border border-blue-500/20">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="text-center md:text-left">
                    <h3 class="text-xl font-bold text-white mb-2">Book Your Individual Strategy Call</h3>
                    <p class="text-slate-400 max-w-xl">
                        Schedule your 1:1 onboarding session immediately to ensure your business structure is correctly mapped before the live audit.
                    </p>
                </div>
                <button onclick="document.getElementById('calendarModal').showModal()" class="shrink-0 gradient-border text-white font-800 px-8 py-4 rounded-2xl hover:bg-white/5 transition-all flex items-center justify-center gap-2">
                    <i data-lucide="phone-call"></i> WIMPER Calendar
                </button>
            </div>
        </section>

        <!-- Critical Preparedness Section -->
        <section class="space-y-6">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-800 flex items-center gap-3">
                    <i data-lucide="clipboard-list" class="text-emerald-400"></i> Corporate Critical Preparedness
                </h2>
                <span class="text-sm text-red-500 font-bold uppercase tracking-tighter">Actions Required</span>
            </div>

            <!-- Row 1: Actions -->
            <div class="grid lg:grid-cols-3 gap-6">
                <!-- Task 1 -->
                <div class="glass p-6 rounded-3xl step-card border border-white/5 flex flex-col items-center text-center space-y-4 cursor-pointer">
                    <div class="w-12 h-12 bg-slate-800 rounded-2xl flex items-center justify-center font-bold text-emerald-400 shadow-lg">01</div>
                    <div>
                        <h4 class="font-bold text-lg">Financial Overview</h4>
                        <p class="text-sm text-slate-400 mt-2">A high-level view of your current position and audit objectives.</p>
                    </div>
                    <div class="pt-2">
                        <button class="text-xs font-bold text-emerald-400 bg-emerald-500/10 px-4 py-2 rounded-lg hover:bg-emerald-500/20">View Overview</button>
                    </div>
                </div>
                <!-- Task 2 -->
                <div class="glass p-6 rounded-3xl step-card border border-white/5 flex flex-col items-center text-center space-y-4 cursor-pointer">
                    <div class="w-12 h-12 bg-slate-800 rounded-2xl flex items-center justify-center font-bold text-blue-400 shadow-lg">02</div>
                    <div>
                        <h4 class="font-bold text-lg">Scalability Framework</h4>
                        <p class="text-sm text-slate-400 mt-2">The architecture we will use to scale your revenue while decreasing labor.</p>
                    </div>
                    <div class="pt-2">
                        <button class="text-xs font-bold text-blue-400 bg-blue-500/10 px-4 py-2 rounded-lg hover:bg-blue-500/20">Access Framework</button>
                    </div>
                </div>
                <!-- Task 3 -->
                <div class="glass p-6 rounded-3xl step-card border border-white/5 flex flex-col items-center text-center space-y-4 cursor-pointer">
                    <div class="w-12 h-12 bg-slate-800 rounded-2xl flex items-center justify-center font-bold text-purple-400 shadow-lg">03</div>
                    <div>
                        <h4 class="font-bold text-lg">Key Questions</h4>
                        <p class="text-sm text-slate-400 mt-2">Identify the #1 financial hurdle keeping you from scaling 2x next quarter.</p>
                    </div>
                    <div class="pt-2">
                        <button class="text-xs font-bold text-purple-400 bg-purple-500/10 px-4 py-2 rounded-lg hover:bg-purple-500/20">Submit Questions</button>
                    </div>
                </div>
            </div>

            <!-- Row 2: Secondary Video Explanations (v2, v3, v4, v5) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-6 border-t border-white/5">
                <!-- Video 2 -->
                <div class="glass p-4 rounded-3xl border border-white/5 space-y-4 hover:border-blue-500/30 transition-colors">
                    <div class="small-video-container">
                        <video controls preload="metadata">
                            <source src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69bd99200a14d53cdf024713.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="text-center px-2">
                        <h4 class="font-bold text-sm text-slate-200">The Section 125 Code</h4>
                    </div>
                </div>
                <!-- Video 3 -->
                <div class="glass p-4 rounded-3xl border border-white/5 space-y-4 hover:border-emerald-500/30 transition-colors">
                    <div class="small-video-container">
                        <video controls preload="metadata">
                            <source src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69bd9920b54f0d0fa851c4db.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="text-center px-2">
                        <h4 class="font-bold text-sm text-slate-200">Corporate Audit Prep</h4>
                    </div>
                </div>
                <!-- Video 4 -->
                <div class="glass p-4 rounded-3xl border border-white/5 space-y-4 hover:border-purple-500/30 transition-colors">
                    <div class="small-video-container">
                        <video controls preload="metadata">
                            <source src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69bd9920ad1400c52ba1e223.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="text-center px-2">
                        <h4 class="font-bold text-sm text-slate-200">FICA Leakage Details</h4>
                    </div>
                </div>
                <!-- Video 5 -->
                <div class="glass p-4 rounded-3xl border border-white/5 space-y-4 hover:border-orange-500/30 transition-colors">
                    <div class="small-video-container">
                        <video controls preload="metadata">
                            <source src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69bd99209bd1392e2eb31ea6.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="text-center px-2">
                        <h4 class="font-bold text-sm text-slate-200">Retention & Growth</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final Urgency Bar -->
        <section class="glass p-8 rounded-3xl bg-red-500/5 border border-red-500/20 text-center">
            <h3 class="text-xl font-bold mb-2">Final Step to Secure Enrollment</h3>
            <p class="text-slate-400 max-w-2xl mx-auto mb-6 italic">
                Enrollment is currently <span class="text-red-400 font-bold">UNCONFIRMED</span>. You must complete the Overview and submit your Key Questions to move into confirmed status for this Wednesday's session.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <div class="flex items-center gap-2 text-sm font-semibold px-4 py-2 bg-slate-800 rounded-full text-slate-500 hover:text-white transition-colors">
                    <i data-lucide="circle" class="w-4 h-4"></i> Overview Reviewed
                </div>
                <div class="flex items-center gap-2 text-sm font-semibold px-4 py-2 bg-slate-800 rounded-full text-slate-500 hover:text-white transition-colors">
                    <i data-lucide="circle" class="w-4 h-4"></i> Key Questions Submitted
                </div>
                <div class="flex items-center gap-2 text-sm font-semibold px-4 py-2 bg-slate-800 rounded-full text-slate-500 hover:text-white transition-colors">
                    <i data-lucide="lock" class="w-4 h-4"></i> Webinar Link (Locked)
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="pt-12 pb-24 text-center space-y-4">
            <div class="flex justify-center gap-6 text-slate-500 text-sm">
                <a href="https://thewimperprogram.com" class="hover:text-white transition-colors">thewimperprogram.com</a>
                <span>•</span>
                <a href="mailto:enrollment@thewimperprogram.com" class="hover:text-white transition-colors">enrollment@thewimperprogram.com</a>
            </div>
            <p class="text-slate-600 text-xs">© <?php echo date('Y'); ?> WIMPER Business Program. All Rights Reserved.</p>
        </footer>
    </div>

    <!-- CALENDAR MODAL (GHL IFRAME) -->
    <dialog id="calendarModal" class="bg-transparent m-auto p-0 w-full max-w-4xl">
        <div class="bg-slate-900 rounded-[2rem] shadow-2xl border border-slate-700 relative overflow-hidden">
            <!-- Close Button -->
            <button onclick="document.getElementById('calendarModal').close()" class="absolute top-4 right-4 z-50 text-slate-400 bg-slate-800 hover:text-white rounded-full p-2 hover:bg-slate-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
            
            <div class="p-4 md:p-8">
                <h2 class="text-2xl font-bold text-white mb-6">Strategy Session Calendar</h2>
                <div class="bg-white rounded-2xl overflow-hidden p-2 shadow-inner min-h-[600px]">
                    <iframe src="https://api.leadconnectorhq.com/widget/booking/VNIKFQp8UXtGVcCV3s7v" style="width: 100%;border:none;overflow: hidden; min-height:600px;" scrolling="no" id="VNIKFQp8UXtGVcCV3s7v"></iframe>
                    <script src="https://link.msgsndr.com/js/form_embed.js" type="text/javascript"></script>
                </div>
            </div>
        </div>
    </dialog>

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

        // Close modal on outside click
        const modal = document.getElementById('calendarModal');
        modal.addEventListener('click', (e) => {
            const dialogDimensions = modal.getBoundingClientRect();
            if (
                e.clientX < dialogDimensions.left ||
                e.clientX > dialogDimensions.right ||
                e.clientY < dialogDimensions.top ||
                e.clientY > dialogDimensions.bottom
            ) {
                modal.close();
            }
        });
    </script>
</body>
</html>
