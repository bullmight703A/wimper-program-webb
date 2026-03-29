<?php
/**
 * Template Name: Success Page
 * Description: Standalone success page for form submissions and bookings.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Success | WIMPER Program</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; margin: 0; padding: 0; }
.btn-primary { background-color: #0284c7; transition: all 0.3s ease; }
.btn-primary:hover { background-color: #0369a1; transform: translateY(-1px); }
.card-shadow { box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1); }
</style>
<?php wp_head(); ?>
</head>
<body class="bg-slate-50 text-slate-900 min-h-screen flex flex-col">

<!-- Navigation -->
<nav class="w-full bg-white border-b border-slate-200">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-center h-20 items-center">
<div class="flex items-center text-center">
<a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-extrabold tracking-tight text-slate-900">
WIMP<span class="text-sky-600">ER</span>
</a>
</div>
</div>
</div>
</nav>

<!-- Success Content -->
<main class="flex-grow flex items-center justify-center p-6">
<div class="max-w-2xl w-full text-center bg-white p-12 rounded-3xl card-shadow border border-slate-100">
    <div class="mx-auto flex items-center justify-center h-24 w-24 rounded-full bg-green-100 mb-8">
        <svg class="h-12 w-12 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
    </div>
    
    <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 mb-4">You're All Set.</h1>
    <p class="text-lg text-slate-600 mb-8 leading-relaxed max-w-xl mx-auto">
        Your information has been successfully securely submitted. Have your recent payroll numbers ready for our team. We've sent a calendar invitation and a brief preparation checklist to your email.
    </p>
    
    <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary text-white px-8 py-4 rounded-xl text-lg font-bold shadow-lg shadow-sky-200 inline-block w-full sm:w-auto">
            Return to Homepage
        </a>
    </div>
</div>
</main>

<footer class="bg-slate-900 text-slate-400 py-8 text-center text-sm border-t border-slate-800 mt-auto">
<div class="max-w-7xl mx-auto px-4">
<p>&copy; <?php echo date('Y'); ?> WIMPER. All rights reserved.</p>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
