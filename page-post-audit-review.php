<?php
/**
 * Template Name: Post Audit Review
 * Description: Standalone WIMPER Post Audit Review with Native Video integration and Auto-play Logic.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Custom Audit Review | WIMPER Program</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<script>
tailwind.config = {
    theme: {
        extend: {
            fontFamily: { sans: ['Outfit', 'sans-serif'] },
            colors: {
                wimper: {
                    blueDark: '#2F4858',
                    blue: '#3B82F6',
                    cyan: '#06B6D4',
                    slate: '#475569'
                }
            }
        }
    }
}
</script>
<style>
body { font-family: 'Outfit', sans-serif; scroll-behavior: smooth; margin: 0; padding: 0; }
.card-shadow { box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1); }
/* Custom hover handling that allows clicking gracefully */
.group:hover .max-h-0 { max-height: 80px; opacity: 1; }
</style>
<?php wp_head(); ?>
</head>
<body class="bg-slate-50 text-slate-900 border-t-4 border-wimper-blue flex flex-col min-h-screen">

<!-- Navigation -->
<nav class="w-full bg-white border-b border-slate-200 sticky top-0 z-50 shadow-sm">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between h-20 items-center">
<div class="flex items-center">
<a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-extrabold tracking-tight text-wimper-blueDark">
WIMP<span class="text-wimper-cyan">ER</span>
</a>
</div>
<div class="hidden sm:flex space-x-6 items-center">
<span class="text-xs uppercase font-bold tracking-widest text-slate-400">Step 3 of 3</span>
<span class="inline-flex rounded-full bg-wimper-blue/10 px-3 py-1 text-xs font-semibold text-wimper-blueDark uppercase">
Audit Complete
</span>
</div>
</div>
</div>
</nav>

<!-- Main Content -->
<main class="flex-grow pb-24">
<!-- Header Section -->
<header class="py-16 md:py-20 bg-wimper-blueDark relative overflow-hidden">
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/black-linen.png')] opacity-30"></div>
<div class="absolute -top-24 -right-24 w-96 h-96 bg-wimper-blue rounded-full blur-3xl opacity-20"></div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
<h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">
Your Custom FICA <span class="text-wimper-cyan">Audit Results</span>.
</h1>
<p class="text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
Review your calculated savings, deep-dive into the legal mechanism, and access your custom architectural blueprints below.
</p>
</div>
</header>

<!-- Core Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 relative z-20">

<!-- Top Row: Main Video & Docs -->
<div class="grid lg:grid-cols-3 gap-8 mb-8">
    
    <!-- Left Column: Main Video -->
    <div class="lg:col-span-2 h-full">
        <div class="bg-white rounded-3xl card-shadow border border-slate-100 overflow-hidden h-full flex flex-col">
            <div class="p-6 border-b border-slate-100 flex-shrink-0">
                <h2 class="text-xl font-extrabold text-wimper-blueDark">1. How The Mechanism Actually Works</h2>
                <p class="text-sm text-wimper-slate mt-1">"You know why you're here. Now let me show you how." — Watch Robert break down the exact tax laws shielding your capital.</p>
            </div>
            
            <div class="relative w-full aspect-video bg-slate-800 border-b-4 border-wimper-cyan flex-grow overflow-hidden group">
                <!-- Overlay Thumbnail -->
                <div id="mainVideoOverlay" onclick="playNativeVideo(this)" class="absolute inset-0 z-10 bg-wimper-blueDark flex flex-col items-center justify-center cursor-pointer transition-opacity duration-300 hover:bg-opacity-95 text-center">
                    <h2 class="text-4xl font-black tracking-tight text-white mb-2 shadow-sm">WIMP<span class="text-wimper-cyan">ER</span></h2>
                    <h3 class="text-white font-bold text-lg px-4">The WIMPER Program Overview</h3>
                    <div class="mt-6 w-16 h-16 bg-wimper-cyan/90 rounded-full flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform">
                        <svg class="h-8 w-8 text-white ml-2" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z" /></svg>
                    </div>
                </div>
                <!-- Actual Video Native HTML5 Element -->
                <video id="mainVideoPlayer" src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/69c94199cd5159f2a1478788.mp4" playsinline controls preload="auto" class="absolute inset-0 w-full h-full object-cover z-0 bg-black"></video>
            </div>
        </div>
    </div>
    
    <!-- Right Column: Extensible Documents -->
    <div class="lg:col-span-1 h-full">
        <div class="bg-white rounded-3xl p-8 card-shadow border border-slate-100 flex flex-col h-full">
            <h2 class="text-xl font-extrabold text-wimper-blueDark mb-2 flex-shrink-0">Documents for Understanding</h2>
            <div class="bg-slate-50 border-l-4 border-wimper-cyan py-3 px-4 mb-5 flex-shrink-0 rounded-r shadow-sm">
                <!-- Clickable Link opening the generated Document inside the Modal (Font size increased per request) -->
                <a href="javascript:void(0)" onclick="openModal('<?php echo esc_url(get_template_directory_uri()); ?>/assets/docs/Compliance-Framework.html', 'The WIMPER Program & IRC Tax Code')" class="text-sm font-extrabold text-wimper-blueDark uppercase tracking-wider hover:text-wimper-cyan transition-colors">The Wimper Program &amp; IRC Tax Code</a>
            </div>
            
            <div class="space-y-4 flex-grow flex flex-col justify-center">
                <!-- Dropdown Doc 1 -->
                <div class="group relative rounded-xl border border-slate-200 bg-white hover:border-wimper-cyan transition-all shadow-sm overflow-hidden">
                    <div class="flex items-center p-3 cursor-pointer bg-slate-50 relative z-10 hover:bg-white transition-colors">
                        <div class="flex-shrink-0 h-10 w-10 rounded bg-red-50 flex items-center justify-center text-red-500 font-bold text-xs border border-red-100">DOC</div>
                        <div class="ml-4">
                            <p class="text-sm font-bold text-wimper-blueDark group-hover:text-wimper-cyan transition-colors">EBITDA Projections</p>
                            <p class="text-[11px] text-wimper-slate">Hover for access options &darr;</p>
                        </div>
                    </div>
                    <div class="max-h-0 opacity-0 transition-all duration-300 ease-out bg-white border-t border-transparent group-hover:border-slate-100">
                        <div class="flex divide-x divide-slate-100">
                            <a href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/docs/EBITDA-Projections.pdf" target="_blank" class="flex-[1.2] py-3.5 text-center text-xs font-bold text-wimper-slate hover:text-wimper-cyan hover:bg-blue-50 transition">📄 Download PDF</a>
                            <a href="javascript:void(0)" onclick="openModal('<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/EBITDA_Projections.mp4', 'EBITDA Projections Flow')" class="flex-[0.8] py-3.5 text-center text-xs font-bold text-wimper-slate hover:text-wimper-cyan hover:bg-blue-50 transition cursor-pointer">▶️ Review Video</a>
                        </div>
                    </div>
                </div>
                
                <!-- Dropdown Doc 2 -->
                <div class="group relative rounded-xl border border-slate-200 bg-white hover:border-wimper-cyan transition-all shadow-sm overflow-hidden">
                    <div class="flex items-center p-3 cursor-pointer bg-slate-50 relative z-10 hover:bg-white transition-colors">
                        <div class="flex-shrink-0 h-10 w-10 rounded bg-red-50 flex items-center justify-center text-red-500 font-bold text-xs border border-red-100">DOC</div>
                        <div class="ml-4">
                            <p class="text-sm font-bold text-wimper-blueDark group-hover:text-wimper-cyan transition-colors">Compliance Framework</p>
                            <p class="text-[11px] text-wimper-slate">Hover for access options &darr;</p>
                        </div>
                    </div>
                    <div class="max-h-0 opacity-0 transition-all duration-300 ease-out bg-white border-t border-transparent group-hover:border-slate-100">
                        <div class="flex divide-x divide-slate-100">
                            <a href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/docs/Compliance-Framework.pdf" target="_blank" class="flex-[1.2] py-3.5 text-center text-xs font-bold text-wimper-slate hover:text-wimper-cyan hover:bg-blue-50 transition">📄 Download PDF</a>
                            <a href="javascript:void(0)" onclick="openModal('<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/Compliance_Framework.mp4', 'Compliance Framework Overview')" class="flex-[0.8] py-3.5 text-center text-xs font-bold text-wimper-slate hover:text-wimper-cyan hover:bg-blue-50 transition cursor-pointer">▶️ Review Video</a>
                        </div>
                    </div>
                </div>

                <!-- Dropdown Doc 3 -->
                <div class="group relative rounded-xl border border-slate-200 bg-white hover:border-wimper-cyan transition-all shadow-sm overflow-hidden">
                    <div class="flex items-center p-3 cursor-pointer bg-slate-50 relative z-10 hover:bg-white transition-colors">
                        <div class="flex-shrink-0 h-10 w-10 rounded bg-red-50 flex items-center justify-center text-red-500 font-bold text-xs border border-red-100">PDF</div>
                        <div class="ml-4">
                            <p class="text-sm font-bold text-wimper-blueDark group-hover:text-wimper-cyan transition-colors">Executive Summary</p>
                            <p class="text-[11px] text-wimper-slate">Hover for access options &darr;</p>
                        </div>
                    </div>
                    <div class="max-h-0 opacity-0 transition-all duration-300 ease-out bg-white border-t border-transparent group-hover:border-slate-100">
                        <div class="flex divide-x divide-slate-100">
                            <a href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/docs/Executive_Summary.pdf" target="_blank" class="flex-[1.2] py-3.5 text-center text-xs font-bold text-wimper-slate hover:text-wimper-cyan hover:bg-blue-50 transition">📄 Download PDF</a>
                            <a href="#" class="flex-[0.8] py-3.5 text-center text-xs font-bold text-wimper-slate hover:text-wimper-cyan hover:bg-blue-50 transition">▶️ Review Video</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- SHREMPA Info at bottom -->
            <div class="mt-5 pt-4 border-t border-slate-100 flex-shrink-0">
                <a href="javascript:void(0)" onclick="openModal('https://uscode.house.gov/view.xhtml?req=granuleid:USC-prelim-title26-section105&num=0&edition=prelim', 'IRC § 105 Overview')" class="block group cursor-pointer">
                    <h4 class="text-sm font-black text-wimper-blueDark group-hover:text-wimper-cyan transition-colors mb-1 leading-tight tracking-tight uppercase">Self-Insured Medical Reimbursement Plan (SIMRP)</h4>
                    <p class="text-[11px] text-wimper-slate group-hover:text-wimper-blue transition-colors flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Review US Code Structure
                    </p>
                </a>
            </div>

        </div>
    </div>
</div>

<!-- Bottom Row: Additional Videos + Private Call CTA -->
<div class="grid md:grid-cols-3 gap-6">
    
    <!-- Revive Health -->
    <div class="bg-white rounded-2xl p-5 card-shadow border border-slate-100 flex flex-col h-full">
        <h3 class="font-bold text-sm text-wimper-blueDark mb-3 flex-shrink-0">2. The Revive Health Component</h3>
        <div class="relative aspect-video border border-slate-200 rounded-xl overflow-hidden flex-grow shadow-sm group bg-black">
            <!-- Overlay Thumbnail -->
            <div onclick="playNativeVideo(this)" class="absolute inset-0 z-10 bg-wimper-blueDark flex flex-col items-center justify-center cursor-pointer transition-opacity duration-300 hover:bg-opacity-95 text-center">
                <h2 class="text-xl font-black tracking-tight text-white mb-1 shadow-sm">WIMP<span class="text-wimper-cyan">ER</span></h2>
                <h3 class="text-white font-bold text-[13px] px-4">Revive Health Component</h3>
                <div class="mt-3 w-10 h-10 bg-wimper-cyan/90 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                    <svg class="h-5 w-5 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z" /></svg>
                </div>
            </div>
            <!-- Native HTML5 Video Element utilizing user-provided direct CDN mp4 link -->
            <video src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/699484cdd614c95a5bf12280.mp4" playsinline controls preload="metadata" class="absolute inset-0 w-full h-full object-contain z-0"></video>
        </div>
    </div>
    
    <!-- Manhattan Life -->
    <div class="bg-white rounded-2xl p-5 card-shadow border border-slate-100 flex flex-col h-full">
        <h3 class="font-bold text-sm text-wimper-blueDark mb-3 flex-shrink-0">3. Manhattan Life Structure</h3>
        <div class="relative aspect-video border border-slate-200 rounded-xl overflow-hidden flex-grow shadow-sm group bg-black">
            <!-- Overlay Thumbnail -->
            <div onclick="playNativeVideo(this)" class="absolute inset-0 z-10 bg-wimper-blueDark flex flex-col items-center justify-center cursor-pointer transition-opacity duration-300 hover:bg-opacity-95 text-center">
                <h2 class="text-xl font-black tracking-tight text-white mb-1 shadow-sm">WIMP<span class="text-wimper-cyan">ER</span></h2>
                <h3 class="text-white font-bold text-[13px] px-4">Manhattan Life Structure</h3>
                <div class="mt-3 w-10 h-10 bg-wimper-cyan/90 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                    <svg class="h-5 w-5 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z" /></svg>
                </div>
            </div>
            <!-- Native HTML5 Video Element utilizing user-provided direct CDN mp4 link -->
            <video src="https://assets.cdn.filesafe.space/0EYrXwSAbw55Hpgu54CD/media/699484c96bac24f0990245e9.mp4" playsinline controls preload="metadata" class="absolute inset-0 w-full h-full object-contain z-0"></video>
        </div>
    </div>
    
    <!-- CTA to Open Modal -->
    <div class="bg-wimper-blueDark p-6 flex flex-col justify-center rounded-2xl card-shadow border border-wimper-blue text-center h-full relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/black-linen.png')] opacity-20"></div>
        <h3 class="relative z-10 text-white font-extrabold text-xl mb-1">Skip the reading?</h3>
        <p class="relative z-10 text-sky-100 text-xs mb-5 leading-relaxed px-2">Private walkthroughs can have this legally active in 30 days.</p>
        <!-- Clicking opens GHL booking calendar in modal, tailored with primaryColor parameter -->
        <a href="javascript:void(0)" onclick="openModal('https://api.leadconnectorhq.com/widget/booking/VNIKFQp8UXtGVcCV3s7v?primaryColor=%2306B6D4&backgroundColor=%23ffffff', 'Schedule Private Call')" class="relative z-10 block w-full py-3.5 text-center mt-auto rounded-xl bg-wimper-cyan text-white text-sm font-extrabold hover:bg-wimper-blue transition-colors shadow-lg cursor-pointer">
            Schedule Private Call
        </a>
    </div>

</div>

</section>
</main>

<footer class="bg-wimper-blueDark text-slate-400 py-10 mt-auto border-t border-slate-800">
<div class="max-w-7xl mx-auto px-4 text-center">
<p class="text-sm">&copy; <?php echo date('Y'); ?> The WIMPER Program. All rights reserved.</p>
<p class="text-xs mt-3 text-slate-500 max-w-2xl mx-auto">Not a CPA or tax advisory firm. The WIMPER mechanism leverages Section 125 of the IRC governing cafeteria plans.</p>
</div>
</footer>

<!-- Universal Modal System -->
<div id="wimperAppModal" class="fixed inset-0 z-[100] flex items-center justify-center bg-wimper-blueDark/80 opacity-0 invisible transition-all duration-300 backdrop-blur-sm px-4">
    <div class="bg-white w-full max-w-4xl h-[85vh] rounded-3xl shadow-2xl flex flex-col overflow-hidden transform scale-95 transition-transform duration-300" id="wimperModalContent">
        <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center bg-slate-50">
            <h3 class="font-extrabold text-wimper-blueDark" id="wimperModalTitle">Information</h3>
            <button onclick="closeModal()" class="text-slate-400 hover:text-red-500 transition-colors focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        <div class="flex-grow w-full relative bg-slate-100/50">
            <div id="modalLoading" class="absolute inset-0 flex items-center justify-center">
                <div class="animate-spin rounded-full h-10 w-10 border-b-2 border-wimper-cyan"></div>
            </div>
            <iframe id="wimperModalIframe" src="" allow="autoplay" class="absolute inset-0 w-full h-full border-0 relative z-10 bg-black" onload="document.getElementById('modalLoading').style.display='none'"></iframe>
        </div>
    </div>
</div>

<script>
function openModal(url, title) {
    document.getElementById('wimperModalTitle').innerText = title;
    document.getElementById('modalLoading').style.display = 'flex';
    document.getElementById('wimperModalIframe').src = url;
    const modal = document.getElementById('wimperAppModal');
    modal.classList.remove('invisible', 'opacity-0');
    document.getElementById('wimperModalContent').classList.remove('scale-95');
}
function closeModal() {
    const modal = document.getElementById('wimperAppModal');
    modal.classList.add('opacity-0');
    document.getElementById('wimperModalContent').classList.add('scale-95');
    setTimeout(() => {
        modal.classList.add('invisible');
        document.getElementById('wimperModalIframe').src = '';
    }, 300);
}

// Native Video Play Handler to fix latency and double-clicks perfectly
function playNativeVideo(overlayDiv) {
    overlayDiv.style.opacity = '0';
    setTimeout(() => { overlayDiv.style.display = 'none'; }, 300);
    
    let video = overlayDiv.nextElementSibling;
    if (video && video.tagName === 'VIDEO') {
        video.muted = false; // ensure it's loud when clicked
        video.play().catch(function(error) {
            console.log("Play failed on click: ", error);
        });
    }
}

// Auto-play the main video on page load!
document.addEventListener('DOMContentLoaded', () => {
    let mainVid = document.getElementById('mainVideoPlayer');
    let overlay = document.getElementById('mainVideoOverlay');
    
    if(mainVid && mainVid.getAttribute('src')) {
        // Requested specifications: 50% volume
        mainVid.volume = 0.5;
        mainVid.muted = false;
        
        // Browsers aggressively block unmuted autoplay. We attempt unmuted first.
        let tryPlay = mainVid.play();
        if (tryPlay !== undefined) {
            tryPlay.then(() => {
                // Success: Unmuted Autoplay worked
                overlay.style.display = 'none';
            }).catch(error => {
                // Browser Blocked Unmuted Autoplay. Fallback to Muted Autoplay to at least get the motion.
                console.log("Unmuted autoplay blocked. Falling back to muted visual playback.", error);
                mainVid.muted = true;
                mainVid.play().then(() => {
                    overlay.style.display = 'none';
                }).catch(err2 => {
                    // Total block (Safari strict mode). Overlay remains for manual click.
                    console.log("Total autoplay strict block. Awaiting manual interaction.");
                });
            });
        }
    }
});
</script>

<?php wp_footer(); ?>
</body>
</html>
