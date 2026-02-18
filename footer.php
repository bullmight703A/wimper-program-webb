<!-- FOOTER -->
<footer class="bg-navy text-slate-400 py-20 border-t border-slate-800 mt-auto">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center text-xs">
		<div class="mb-8 md:mb-0 text-center md:text-left">
			<span class="text-white font-serif text-xl tracking-wide block mb-2">W.I.M.P.E.R.</span>
			<span class="text-slate-500 uppercase tracking-widest text-[10px]">Copyright &copy;
				<?php echo date('Y'); ?></span>
		</div>
		<div class="flex space-x-10">
			<span onclick="navigateTo('method')"
				class="hover:text-white transition uppercase tracking-widest text-[10px] cursor-pointer">Methodology</span>
			<span onclick="navigateTo('contact')"
				class="hover:text-white transition uppercase tracking-widest text-[10px] cursor-pointer">Feasibility
				Audit</span>
			<span class="hover:text-white transition uppercase tracking-widest text-[10px] cursor-pointer">Legal</span>
		</div>
	</div>
</footer>

<!-- Sticky CTA (Mobile Only) -->
<div
	class="fixed bottom-0 left-0 right-0 bg-white border-t border-slate-200 p-4 md:hidden z-50 flex justify-between items-center shadow-[0_-10px_40px_rgba(0,0,0,0.1)]">
	<div class="flex flex-col">
		<span class="text-[10px] uppercase tracking-wider text-slate-500 font-bold">Est. Savings</span>
		<span class="text-lg font-serif text-navy font-bold">$1,100/mo</span>
	</div>
	<button onclick="navigateTo('contact')"
		class="bg-navy text-white px-6 py-3 rounded-sm text-[10px] font-bold uppercase tracking-[0.2em]">Verify</button>
</div>

<!-- Scripts -->
<script>
	// ROUTING
	function navigateTo(pageId) {
		// Update View
		document.querySelectorAll('.page-view').forEach(el => el.classList.remove('active'));
		// Hide all first to ensure clean switch
		document.querySelectorAll('.page-view').forEach(el => el.style.display = 'none');

		const target = document.getElementById(pageId);
		if (target) {
			target.style.display = 'block';
			setTimeout(() => target.classList.add('active'), 10);
		}

		// Update Nav State
		document.querySelectorAll('.nav-link').forEach(el => el.classList.remove('active'));
		const activeLink = document.getElementById('nav-' + pageId);
		if (activeLink) activeLink.classList.add('active');

		// Scroll Top
		window.scrollTo(0, 0);

		// Close Mobile Menu if open
		const mobileMenu = document.getElementById('mobile-menu');
		if (mobileMenu) mobileMenu.classList.add('hidden');
	}

	function scrollToId(elementId) {
		const element = document.getElementById(elementId);
		if (element) element.scrollIntoView({ behavior: 'smooth' });
	}

	// CALCULATOR LOGIC
	const formatter = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 2 });
	const roundFormatter = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 });

	function getEstimatedTaxRate(salary) {
		if (salary < 15000) return 0.0765;
		if (salary < 25000) return 0.20;
		if (salary < 40000) return 0.23;
		if (salary < 60000) return 0.28;
		if (salary < 85000) return 0.32;
		if (salary < 120000) return 0.34;
		if (salary < 160000) return 0.36;
		if (salary >= 168000 && salary < 190000) return 0.32;
		if (salary >= 190000 && salary < 250000) return 0.35;
		if (salary >= 250000) return 0.37;
		return 0.30;
	}

	function calculateBoth() {
		// Employer
		const countInput = document.getElementById('employeeCount');
		if (countInput) {
			let count = parseInt(countInput.value) || 0;
			if (count < 0) count = 0;
			const savingsPerEmployee = 1100;
			const totalEmployerSavings = count * savingsPerEmployee;
			const employerEl = document.getElementById('employerSavings');
			if (employerEl) employerEl.innerText = roundFormatter.format(totalEmployerSavings);
		}

		// Employee
		const salaryInput = document.getElementById('annualSalary');
		if (salaryInput) {
			let salary = parseFloat(salaryInput.value) || 0;
			const freqInput = document.getElementById('payFrequency');
			let payPeriods = parseInt(freqInput.value) || 26;

			const monthlyPremium = 1200;
			const estTaxRate = getEstimatedTaxRate(salary);
			const monthlyTaxSavings = monthlyPremium * estTaxRate;
			const monthlyDeduction = 129;
			const monthlyNetIncrease = monthlyTaxSavings - monthlyDeduction;

			const taxSavingsPerCheck = (monthlyTaxSavings * 12) / payPeriods;
			const deductionPerCheck = (monthlyDeduction * 12) / payPeriods;
			const netIncreasePerCheck = (monthlyNetIncrease * 12) / payPeriods;

			document.getElementById('employeeSavings').innerText = formatter.format(netIncreasePerCheck);
			document.getElementById('taxSavingsDisplay').innerText = "+" + formatter.format(taxSavingsPerCheck);
			document.getElementById('deductionDisplay').innerText = "-" + formatter.format(deductionPerCheck);
			document.getElementById('taxRateDisplay').innerText = (estTaxRate * 100).toFixed(1) + "%";

			const freqText = freqInput.options[freqInput.selectedIndex].text;
			document.getElementById('freqLabel').innerText = "Per " + freqText + " Paycheck";
		}
	}

	// Init
	document.addEventListener('DOMContentLoaded', function () {
		calculateBoth();

		// Initial Route
		const hash = window.location.hash.replace('#', '');
		if (hash && document.getElementById(hash)) {
			navigateTo(hash);
		} else {
			navigateTo('home');
		}
	});
</script>
<?php wp_footer(); ?>
</body>

</html>