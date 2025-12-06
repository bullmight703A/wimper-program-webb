<?php
/**
 * Template Name: Teacher Portal Page
 *
 * @package kidazzle_Excellence
 */

get_header();
?>

<!-- 7. TEACHER PORTAL VIEW -->
<div id="view-teacher-portal" class="view-section active block">
    <div class="bg-orange-500 py-20 text-white text-center">
        <h1 class="text-5xl font-extrabold mb-4">Teacher Portal</h1>
        <p class="text-xl text-orange-200">Resources for our dedicated educators.</p>
    </div>

    <div class="container mx-auto px-4 py-16 text-center">
        <div class="max-w-md mx-auto bg-white p-10 rounded-3xl shadow-2xl border-t-8 border-orange-500">
            <h2 class="text-2xl font-bold text-slate-900 mb-6">Staff Login</h2>
            <form class="space-y-4">
                <div>
                    <label class="block text-left text-sm font-bold text-slate-700 mb-1">Email</label>
                    <input type="email"
                        class="w-full bg-slate-50 border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-orange-500"
                        placeholder="name@kidazzle.com">
                </div>
                <div>
                    <label class="block text-left text-sm font-bold text-slate-700 mb-1">Password</label>
                    <input type="password"
                        class="w-full bg-slate-50 border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-orange-500"
                        placeholder="••••••••">
                </div>
                <button type="button"
                    class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 rounded-xl transition shadow-lg mt-2">
                    Access Portal
                </button>
            </form>
            <p class="mt-6 text-sm text-slate-400">
                Authorized personnel only. <br>Contact IT for password resets.
            </p>
        </div>
    </div>
</div>

<?php
get_footer();
