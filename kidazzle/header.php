</nav>

<!-- MAIN CONTENT AREA START -->
<main class="mt-20 min-h-screen">
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const menuBtn = document.getElementById('mobile-menu-btn');
			const closeBtn = document.getElementById('close-menu-btn');
			const mobileMenu = document.getElementById('mobile-menu');

			if (menuBtn && mobileMenu) {
				menuBtn.addEventListener('click', () => {
					mobileMenu.classList.remove('hidden');
				});
			}
			if (closeBtn && mobileMenu) {
				closeBtn.addEventListener('click', () => {
					mobileMenu.classList.add('hidden');
				});
			}
		});
	</script>