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

    // Global Modal Logic
    function openGlobalCalendar() {
        const modal = document.getElementById('global-calendar-modal');
        if(modal) {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }
    }

    function closeGlobalCalendar() {
        const modal = document.getElementById('global-calendar-modal');
        if(modal) {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto'; // Restore background scrolling
        }
    }
</script>

<!-- Floating CTA Button -->
<button onclick="openGlobalCalendar()" class="fixed bottom-6 right-6 z-[90] bg-gold text-navy font-bold px-6 py-4 rounded-full shadow-2xl hover:scale-105 transition-transform flex items-center space-x-2 border-2 border-navy">
    <i class="fa-solid fa-calendar-check text-xl"></i>
    <span class="tracking-widest uppercase text-xs">Schedule Audit</span>
</button>

<!-- Full Screen Modal Overlay -->
<div id="global-calendar-modal" class="hidden fixed inset-0 z-[100] bg-navy/95 backdrop-blur-md flex items-center justify-center p-4 sm:p-6 transition-opacity">
    <div class="relative w-full max-w-5xl bg-white rounded-2xl shadow-2xl overflow-hidden h-[90vh] flex flex-col">
        
        <!-- Modal Header -->
        <div class="flex justify-between items-center p-4 border-b border-slate-100 bg-slate-50">
            <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-navy rounded-lg flex items-center justify-center text-white">
                    <i class="fas fa-shield-heart text-sm"></i>
                </div>
                <span class="font-black text-slate-900 tracking-tight">W.I.M.P.E.R. Scheduling</span>
            </div>
            <button onclick="closeGlobalCalendar()" class="text-slate-400 hover:text-red-500 transition-colors p-2 rounded-full hover:bg-slate-100">
                <i class="fa-solid fa-times text-2xl"></i>
            </button>
        </div>

        <!-- HighLevel Calendar Widget -->
        <div class="flex-grow overflow-y-auto w-full relative">
             <iframe src="https://api.leadconnectorhq.com/widget/booking/VNIKFQp8UXtGVcCV3s7v" 
                    style="width: 100%;height:100%;border:none;overflow: hidden;min-height: 600px; position:absolute; top:0; left:0; right:0; bottom:0;" scrolling="yes" 
                    id="VNIKFQp8UXtGVcCV3s7v_1709400000001"></iframe>
            <script src="https://api.leadconnectorhq.com/js/form_embed.js" type="text/javascript"></script>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>