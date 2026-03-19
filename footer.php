</main> <!-- Close Main -->

<!-- FOOTER -->
<footer class="bg-white border-t border-slate-100 py-20 mt-auto">
	<div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center text-sm">
		<div class="flex items-center space-x-3 mb-8 md:mb-0">
			<div class="w-8 h-8 bg-navy rounded-lg flex items-center justify-center text-white">
				<i class="fas fa-shield-heart text-sm"></i>
			</div>
			<span class="font-black text-slate-900 tracking-tight">W.I.M.P.E.R.</span>
		</div>
		<div class="flex space-x-8 text-slate-500 font-bold uppercase tracking-widest text-[10px]">
			<span onclick="navigateTo('method')" class="hover:text-accent cursor-pointer transition">Methodology</span>
			<span onclick="navigateTo('contact')" class="hover:text-accent cursor-pointer transition">Feasibility
				Audit</span>
			<span class="hover:text-accent cursor-pointer transition">Legal</span>
		</div>
		<div class="mt-8 md:mt-0 text-slate-400 text-xs uppercase tracking-widest">
			&copy; <?php echo date('Y'); ?> W.I.M.P.E.R. x Revive Health
		</div>
	</div>
</footer>

<!-- LOGIC -->
<script>
	function navigateTo(pageId) {
		document.querySelectorAll('.page-view').forEach(el => el.classList.remove('active'));
		document.getElementById(pageId).classList.add('active');
		document.querySelectorAll('.nav-link').forEach(el => el.classList.remove('active'));
		const activeLink = document.getElementById('nav-' + pageId);
		if (activeLink) activeLink.classList.add('active');
		window.scrollTo(0, 0);
		document.getElementById('mobile-menu').classList.add('hidden');
	}

	function scrollToId(elementId) {
		const element = document.getElementById(elementId);
		if (element) element.scrollIntoView({ behavior: 'smooth' });
	}

	function updateHeroCalc() {
		const calcRange = document.getElementById('calcRange');
		if (calcRange) {
			const count = calcRange.value;
			const savings = count * 1100;
			document.getElementById('calcCount').innerText = count;
			document.getElementById('calcSavings').innerText = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 }).format(savings);
		}
	}

	// Call conditionally if element exists
	if (document.getElementById('calcRange')) updateHeroCalc();
</script>

<!-- Universal Kidazzle/Wimper Tour Booking Modal -->
<div id="universal-tour-modal" class="fixed inset-0 z-[99999] hidden" role="dialog" aria-modal="true" style="pointer-events: auto;">
    <div class="absolute inset-0 bg-brand-ink/80 backdrop-blur-md transition-opacity" id="universal-tour-backdrop"></div>
    <div class="absolute inset-4 md:inset-10 bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col animate-fade-in-up">
        <!-- Header -->
        <div class="bg-slate-50 border-b border-brand-ink/5 px-6 py-4 flex items-center justify-between flex-shrink-0">
            <h3 class="font-serif text-xl font-bold text-slate-900">Schedule Your Visit</h3>
            <div class="flex items-center gap-4">
                <a href="#" id="universal-tour-external" target="_blank" class="text-xs font-bold uppercase tracking-wider text-slate-500 hover:text-blue-500 transition-colors hidden md:block">
                    Open in new tab <i class="fa-solid fa-external-link-alt ml-1"></i>
                </a>
                <button type="button" id="universal-tour-close" class="w-10 h-10 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 hover:bg-red-500 hover:text-white hover:border-red-500 transition-all cursor-pointer">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>
        </div>
        <!-- Iframe Container -->
        <div class="flex-grow relative bg-white">
            <div id="universal-tour-loader" class="absolute inset-0 flex flex-col items-center justify-center bg-white z-10">
                <div class="w-12 h-12 border-4 border-slate-200 border-t-slate-800 rounded-full animate-spin"></div>
                <p class="mt-4 text-xs font-bold uppercase tracking-widest text-slate-400">Loading Calendar...</p>
            </div>
            <iframe id="universal-tour-frame" src="" class="w-full h-full border-0 absolute inset-0 z-20" allow="camera; microphone; autoplay; encrypted-media;"></iframe>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('universal-tour-modal');
        const backdrop = document.getElementById('universal-tour-backdrop');
        const closeBtn = document.getElementById('universal-tour-close');
        const iframe = document.getElementById('universal-tour-frame');
        const externalLink = document.getElementById('universal-tour-external');
        const loader = document.getElementById('universal-tour-loader');

        function openModal(url) {
            if(!modal) return;
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            loader.classList.remove('hidden');
            
            // Set URL parameters strategically
            const finalUrl = new URL(url, window.location.origin);
            
            iframe.src = finalUrl.href;
            externalLink.href = finalUrl.href;
            
            iframe.onload = function () {
                loader.classList.add('hidden');
            };
        }

        function closeModal() {
            if(!modal) return;
            modal.classList.add('hidden');
            document.body.style.overflow = '';
            iframe.src = '';
        }

        const buttons = document.querySelectorAll('.booking-btn, a[href*="/contact-us/"], a[href*="/contact"]');
        buttons.forEach(btn => {
            btn.addEventListener('click', function (e) {
                let url = this.getAttribute('href');
                if (url && (url.startsWith('http') || url.startsWith('/'))) {
                    // Ignore internal empty hash anchors
                    if(url === '#' || url.includes('#tour')) return;
                    e.preventDefault();
                    if(url.startsWith('/')) url = window.location.origin + url;
                    console.log('Intercepting booking-btn opening:', url);
                    openModal(url);
                }
            });
        });

        if (closeBtn) closeBtn.addEventListener('click', closeModal);
        if (backdrop) backdrop.addEventListener('click', closeModal);
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && modal && !modal.classList.contains('hidden')) {
                closeModal();
            }
        });
    });
</script>

<?php wp_footer(); ?>
</body>

</html>