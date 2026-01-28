<?php
/**
 * The template for displaying the footer
 *
 * @package kidazzle_Excellence
 */

// Get Footer Customizer Settings
$footer_phone = get_theme_mod('kidazzle_footer_phone', '1 678-940-6099');
$footer_email = get_theme_mod('kidazzle_footer_email', 'info@thewimperprogram.com');
$footer_address = get_theme_mod('kidazzle_footer_address', '');

// Social Links
$footer_facebook = get_theme_mod('kidazzle_footer_facebook', '');
$footer_instagram = get_theme_mod('kidazzle_footer_instagram', '');
$footer_linkedin = get_theme_mod('kidazzle_footer_linkedin', '');
$footer_twitter = get_theme_mod('kidazzle_footer_twitter', '');
$footer_youtube = get_theme_mod('kidazzle_footer_youtube', '');

$has_social = $footer_facebook || $footer_instagram || $footer_linkedin || $footer_twitter || $footer_youtube;
?>
</main>

<!-- FOOTER -->
<footer class="bg-navy text-white py-24 border-t border-white/5">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 md:grid-cols-4 gap-16 mb-20">
			<div class="col-span-1 md:col-span-1">
				<div class="flex flex-col border-l-4 border-gold pl-4 mb-8">
					<span
						class="text-xl font-bold text-white tracking-tight font-serif leading-none">W.I.M.P.E.R.</span>
					<span class="text-[9px] uppercase tracking-[0.1em] text-slate-500 font-semibold mt-1">Wellness &
						Integrated Medical Plan Expense Reimbursement</span>
				</div>
				<p class="text-slate-500 text-xs leading-relaxed font-light">
					The proprietary financial chassis for self-funded EBITDA expansion and payroll tax optimization.
				</p>
			</div>
			<div>
				<h4 class="text-white text-xs font-bold uppercase tracking-[0.2em] mb-8">Navigation</h4>
				<ul class="space-y-4 text-slate-500 text-xs font-bold uppercase tracking-widest">
					<li><span onclick="navigateTo('home')" class="hover:text-gold transition cursor-pointer">The
							Vision</span></li>
					<li><span onclick="navigateTo('method')" class="hover:text-gold transition cursor-pointer">The
							Chassis</span></li>
					<li><span onclick="navigateTo('iul')" class="hover:text-gold transition cursor-pointer">Wealth
							Strategy</span></li>
					<li><span onclick="navigateTo('blog')"
							class="hover:text-gold transition cursor-pointer">Insights</span></li>
				</ul>
			</div>
			<div>
				<h4 class="text-white text-xs font-bold uppercase tracking-[0.2em] mb-8">Legal</h4>
				<ul class="space-y-4 text-slate-500 text-xs font-bold uppercase tracking-widest">
					<li><a href="#" class="hover:text-gold transition">Privacy Protocol</a></li>
					<li><a href="#" class="hover:text-gold transition">Compliance Shield</a></li>
					<li><a href="#" class="hover:text-gold transition">Terms of Service</a></li>
				</ul>
			</div>
			<div>
				<h4 class="text-white text-xs font-bold uppercase tracking-[0.2em] mb-8">Connection</h4>
				<div class="flex space-x-6 text-slate-500">
					<a href="#" class="hover:text-gold transition"><i class="fab fa-linkedin-in text-xl"></i></a>
					<a href="#" class="hover:text-gold transition"><i class="fab fa-twitter text-xl"></i></a>
				</div>
			</div>
		</div>
		<div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
			<p class="text-[10px] text-slate-600 uppercase tracking-widest">© 2026 W.I.M.P.E.R. Program Inc. All rights
				reserved.</p>
			<p class="text-[10px] text-slate-600 uppercase tracking-widest">Proprietary Financial Architecture</p>
		</div>
	</div>
</footer>


<!-- Global Sticky CTA -->
<?php
$show_sticky_cta = true;
$sticky_text = __('Ready to experience the KIDAZZLE difference?', 'kidazzle-theme');
$sticky_btn_text = __('Schedule a Tour', 'kidazzle-theme');
$sticky_url = home_url('/contact');

if (is_page('contact') || is_page('careers')) {
	$show_sticky_cta = false;
} elseif (is_singular('program')) {
	$sticky_text = sprintf(__('Ready to enroll in <strong>%s</strong>?', 'kidazzle-theme'), get_the_title());
} elseif (is_singular('location')) {
	$sticky_text = sprintf(__('Ready to visit our <strong>%s</strong> campus?', 'kidazzle-theme'), get_the_title());
}

if ($show_sticky_cta):
	?>
	<div id="sticky-cta"
		class="md:hidden will-change-transform transform translate-y-full fixed bottom-0 left-0 right-0 bg-slate-900/95 backdrop-blur-md text-white py-4 px-6 z-50 shadow-[0_-5px_20px_rgba(0,0,0,0.1)] border-t border-white/10 transition-transform duration-500 ease-out">
		<div class="max-w-7xl mx-auto flex flex-col items-center justify-between gap-4 text-center">
			<span class="text-sm font-medium tracking-wide">
				Ready to recaptue your EBITDA?
			</span>
			<button onclick="openContactModal()"
				class="inline-block bg-orange-500 text-white text-xs font-bold uppercase tracking-wider px-8 py-3 rounded-full hover:bg-white hover:text-orange-500 transition-all shadow-md">
				Verify Eligibility
			</button>
		</div>
	</div>
<?php endif; ?>

<!-- Contact Modal (Global) - Hidden by default -->
<div id="contact-modal"
	class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/80 backdrop-blur-sm animate-fade-in">
	<div class="relative w-full max-w-3xl bg-white rounded-3xl shadow-2xl max-h-[90vh] overflow-y-auto p-8">
		<button onclick="closeContactModal()"
			class="absolute top-4 right-4 p-2 bg-slate-100 rounded-full hover:bg-slate-200 transition">
			<i class="fa-solid fa-xmark text-slate-600"></i>
		</button>
		<div class="text-center mb-8">
			<h3 class="text-2xl font-bold text-slate-900">How Can We Help?</h3>
			<p class="text-slate-500">Select an option below.</p>
		</div>
		<div
			class="bg-slate-50 border-2 border-dashed border-slate-300 rounded-[2rem] p-4 text-center h-[600px] overflow-hidden">
			<iframe src="https://api.leadconnectorhq.com/widget/form/N8RYaUY1SuORexcyA6la"
				style="width:100%;height:100%;border:none;border-radius:20px" id="inline-N8RYaUY1SuORexcyA6la"
				data-layout="{'id':'INLINE'}" data-trigger-type="alwaysShow" data-trigger-value=""
				data-activation-type="alwaysActivated" data-activation-value="" data-deactivation-type="neverDeactivate"
				data-deactivation-value="" data-form-name="2023 New KIDazzel website contact " data-height="870"
				data-layout-iframe-id="inline-N8RYaUY1SuORexcyA6la" data-form-id="N8RYaUY1SuORexcyA6la"
				title="2023 New KIDazzel website contact ">
			</iframe>
			<script src="https://link.msgsndr.com/js/form_embed.js" async></script>
		</div>
	</div>
</div>

<!-- Scripts -->
<script>
	// Modal Logic
	const contactModal = document.getElementById('contact-modal');
	function openContactModal() { if (contactModal) contactModal.classList.remove('hidden'); }
	function closeContactModal() { if (contactModal) contactModal.classList.add('hidden'); }

	// Sticky CTA Scroll Logic
	window.addEventListener('scroll', function () {
		const cta = document.getElementById('sticky-cta');
		if (!cta) return;
		if (window.scrollY > 300) {
			cta.classList.remove('translate-y-full');
		} else {
			cta.classList.add('translate-y-full');
		}
	}, { passive: true });

	// Initialize Lucide Icons
	if (typeof lucide !== 'undefined') {
		lucide.createIcons();
	}
</script>

<?php wp_footer(); ?>
<?php
// Footer scripts from Customizer
$footer_scripts = get_theme_mod('kidazzle_footer_scripts');
if ($footer_scripts) {
	if (current_user_can('unfiltered_html')) {
		echo $footer_scripts;
	} else {
		echo wp_kses($footer_scripts, array(
			'script' => array(
				'src' => true,
				'async' => true,
				'defer' => true,
				'type' => true,
				'id' => true,
			),
			'noscript' => array(),
		));
	}
}
?>
</body>

</html>