<?php
/**
 * Template Name: WIMPER Proposal Document
 */

// Bypass standard WordPress headers and footers to ensure pure rendering of the PDF aesthetic
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIMPER Program Proposal | Executive Summary</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f1f5f9;
            color: #1e293b;
        }

        .report-page {
            background: white;
            width: 100%;
            max-width: 850px;
            margin: 2rem auto;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
            padding: 4rem;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }

        .floating-action {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 100;
        }

        @media print {
            body { background: white; margin: 0; padding:0; }
            .report-page { margin: 0; box-shadow: none; width: 100%; max-width: 100%; border-radius: 0; padding: 2rem; page-break-after: always; }
            .no-print { display: none !important; }
        }

        .gradient-sidebar {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 8px;
            background: linear-gradient(to bottom, #10b981, #3b82f6);
        }

        .data-table tr:nth-child(even) { background-color: #f8fafc; }
        .highlight-row { background-color: #f0fdf4 !important; font-weight: 700; color: #166534; }
    </style>
</head>
<body>

    <!-- Print Action Button (Hidden during print) -->
    <div class="floating-action no-print">
        <button onclick="window.print()" class="bg-slate-900 hover:bg-emerald-600 text-white shadow-2xl rounded-full px-6 py-4 font-bold tracking-widest uppercase flex items-center gap-3 transition-colors border-2 border-slate-700 hover:border-emerald-500">
            <i data-lucide="download"></i> Download as PDF
        </button>
    </div>

    <!-- Cover Page -->
    <div class="report-page min-h-[1050px] flex flex-col justify-between">
        <div class="gradient-sidebar"></div>
        
        <div>
            <div class="flex justify-between items-start">
                <div class="space-y-2">
                    <h2 class="text-emerald-600 font-800 tracking-tighter text-xl">ESSENTIALS HEALTH PLAN</h2>
                    <div class="h-1 w-12 bg-emerald-500"></div>
                </div>
                <div class="text-right text-slate-400 text-sm font-medium">
                    CONFIDENTIAL PROPOSAL<br>RECOGNIZED ACA INCENTIVE
                </div>
            </div>

            <div class="mt-32">
                <h1 class="text-6xl font-800 text-slate-900 leading-none">
                    The <span class="text-emerald-600">W.I.M.P.E.R.</span><br>Program
                </h1>
                <p class="mt-6 text-2xl text-slate-500 max-w-xl font-light">
                    Wellness and Integrated Medical Plan Expense Reimbursement: <span class="text-slate-900 font-medium italic underline decoration-emerald-500/30">Optimization Strategy.</span>
                </p>
            </div>

            <div class="mt-20 grid grid-cols-2 gap-12">
                <div class="space-y-4">
                    <h3 class="text-xs font-bold uppercase tracking-widest text-emerald-600">Executive Overview</h3>
                    <p class="text-slate-600 leading-relaxed text-sm">
                        A proprietary participatory wellness program utilizing Section 125 tax law and Self-Insured Medical Reimbursement Plans (SIMRP) to generate immediate corporate tax savings while enhancing employee retention and financial protection.
                    </p>
                </div>
                <div class="space-y-4">
                    <h3 class="text-xs font-bold uppercase tracking-widest text-blue-600">Program Outcomes</h3>
                    <ul class="text-slate-600 space-y-2 text-sm">
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Net-Zero Employer Cost</li>
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Increased Employee Take-Home Pay</li>
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-emerald-500"></i> Seamless Payroll Integration</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="pt-20 border-t border-slate-100 flex justify-between items-end">
            <div>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Prepared By</p>
                <p class="text-lg font-bold text-slate-900">Robert Hill</p>
                <p class="text-slate-500 text-sm">Senior Broker & Financial Architect</p>
            </div>
            <div class="text-right">
                <p class="text-sm font-medium text-slate-900">404.312.2918</p>
                <p class="text-sm text-blue-600">enrollment@thewimperprogram.com</p>
            </div>
        </div>
    </div>

    <!-- Details Page -->
    <div class="report-page">
        <div class="gradient-sidebar"></div>
        
        <header class="mb-12">
            <h2 class="text-3xl font-800 text-slate-900">Program Benefits & Logistics</h2>
            <div class="h-1 w-20 bg-blue-500 mt-2"></div>
        </header>

        <div class="grid grid-cols-2 gap-12">
            <!-- Employer Side -->
            <section class="space-y-6">
                <div class="bg-emerald-50 p-6 rounded-2xl border border-emerald-100">
                    <h3 class="font-bold text-emerald-900 flex items-center gap-2 mb-4">
                        <i data-lucide="building-2"></i> Employer Advantages
                    </h3>
                    <ul class="space-y-3 text-sm text-emerald-800">
                        <li class="flex gap-3"><strong>$1,120/yr</strong> Average tax savings per employee.</li>
                        <li class="flex gap-3"><strong>No Disruption:</strong> Sits alongside current major medical/brokers.</li>
                        <li class="flex gap-3"><strong>Retention:</strong> High-value supplemental benefits at no net cost.</li>
                    </ul>
                </div>
            </section>

            <!-- Employee Side -->
            <section class="space-y-6">
                <div class="bg-blue-50 p-6 rounded-2xl border border-blue-100">
                    <h3 class="font-bold text-blue-900 flex items-center gap-2 mb-4">
                        <i data-lucide="user-check"></i> Employee Advantages
                    </h3>
                    <ul class="space-y-3 text-sm text-blue-800">
                        <li class="flex gap-3"><strong>$1,800/yr</strong> Average compensation increase.</li>
                        <li class="flex gap-3"><strong>$0 Cost:</strong> Zero copays/deductibles for 24/7 telehealth.</li>
                        <li class="flex gap-3"><strong>Family:</strong> Coverage extends to the entire household.</li>
                    </ul>
                </div>
            </section>
        </div>

        <div class="mt-12 space-y-6">
            <h3 class="text-sm font-bold uppercase tracking-widest text-slate-400">The Power of Choice: Integrated Partners</h3>
            <div class="grid grid-cols-2 gap-6">
                <div class="p-5 border border-slate-100 rounded-xl bg-slate-50">
                    <div class="font-bold text-slate-900 mb-2">Revive Health</div>
                    <p class="text-xs text-slate-500 leading-relaxed">Unlimited 24/7/365 access to Virtual ER, Urgent Care, and Mental Health support. Includes 1,000+ free prescriptions.</p>
                </div>
                <div class="p-5 border border-slate-100 rounded-xl bg-slate-50">
                    <div class="font-bold text-slate-900 mb-2">ManhattanLife</div>
                    <p class="text-xs text-slate-500 leading-relaxed">Cash benefits paid directly to employees for Accidents, Critical Illness, and Hospital Indemnity. Financial protection when it matters most.</p>
                </div>
            </div>
        </div>

        <footer class="mt-20 pt-8 border-t border-slate-100 text-xs text-slate-400 flex justify-between">
            <span>EHP PROGRAM SUMMARY | FOR INTERNAL USE ONLY</span>
            <span>PAGE 02</span>
        </footer>
    </div>

    <!-- Financial Loop Page -->
    <div class="report-page">
        <div class="gradient-sidebar"></div>
        
        <header class="mb-12">
            <h2 class="text-3xl font-800 text-slate-900">The Monthly Payroll Savings Loop</h2>
            <p class="text-slate-500 mt-1">A transparent look at how Section 125 transforms taxes into benefits.</p>
        </header>

        <div class="overflow-hidden rounded-2xl border border-slate-200">
            <table class="w-full text-left text-sm data-table">
                <thead class="bg-slate-900 text-white">
                    <tr>
                        <th class="p-4">Payroll Item</th>
                        <th class="p-4">Before WIMPER</th>
                        <th class="p-4 text-emerald-400">With WIMPER</th>
                    </tr>
                </thead>
                <tbody class="text-slate-700">
                    <tr>
                        <td class="p-4">Monthly Gross Income</td>
                        <td class="p-4">$3,288.46</td>
                        <td class="p-4">$3,288.46</td>
                    </tr>
                    <tr>
                        <td class="p-4">Standard Pre-Tax (Health/401k)</td>
                        <td class="p-4">($500.00)</td>
                        <td class="p-4">($500.00)</td>
                    </tr>
                    <tr>
                        <td class="p-4">WIMPER Premium (Revive Health)</td>
                        <td class="p-4">$0.00</td>
                        <td class="p-4 text-emerald-600">($1,220.00)</td>
                    </tr>
                    <tr class="font-semibold bg-slate-50">
                        <td class="p-4">Taxable Monthly Income</td>
                        <td class="p-4">$2,788.46</td>
                        <td class="p-4 text-blue-600">$1,568.46</td>
                    </tr>
                    <tr>
                        <td class="p-4">Fed/State/FICA Taxes</td>
                        <td class="p-4">($551.16)</td>
                        <td class="p-4 text-emerald-600 font-bold">($277.16)</td>
                    </tr>
                    <tr class="border-t border-slate-200">
                        <td class="p-4">Subtotal (Net Pay)</td>
                        <td class="p-4">$2,237.30</td>
                        <td class="p-4">$1,291.30</td>
                    </tr>
                    <tr>
                        <td class="p-4">SIMRP Tax-Free Reimbursement</td>
                        <td class="p-4">$0.00</td>
                        <td class="p-4 text-emerald-600">+$1,220.00</td>
                    </tr>
                    <tr>
                        <td class="p-4">Admin & Supplemental Fees</td>
                        <td class="p-4">$0.00</td>
                        <td class="p-4">($260.00)</td>
                    </tr>
                    <tr class="highlight-row">
                        <td class="p-4">Final Monthly Take-Home</td>
                        <td class="p-4">$2,237.30</td>
                        <td class="p-4">$2,251.30</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-12 bg-slate-900 p-8 rounded-3xl text-white">
            <h3 class="text-xl font-bold mb-4">Immediate Implementation Steps</h3>
            <div class="grid grid-cols-4 gap-4 text-center">
                <div class="space-y-2">
                    <div class="w-10 h-10 rounded-full bg-emerald-500 mx-auto flex items-center justify-center font-bold">1</div>
                    <p class="text-[10px] uppercase font-bold text-slate-400">Census</p>
                </div>
                <div class="space-y-2">
                    <div class="w-10 h-10 rounded-full bg-blue-500 mx-auto flex items-center justify-center font-bold">2</div>
                    <p class="text-[10px] uppercase font-bold text-slate-400">Proposal</p>
                </div>
                <div class="space-y-2">
                    <div class="w-10 h-10 rounded-full bg-purple-500 mx-auto flex items-center justify-center font-bold">3</div>
                    <p class="text-[10px] uppercase font-bold text-slate-400">Enroll</p>
                </div>
                <div class="space-y-2">
                    <div class="w-10 h-10 rounded-full bg-slate-700 mx-auto flex items-center justify-center font-bold">4</div>
                    <p class="text-[10px] uppercase font-bold text-slate-400">Setup</p>
                </div>
            </div>
            <p class="mt-8 text-center text-sm text-slate-400">
                Process timeline: 30-45 Days. | Zero interruption to existing payroll or health insurance brokers.
            </p>
        </div>

        <footer class="mt-20 pt-8 border-t border-slate-100 text-xs text-slate-400 flex justify-between">
            <span>© 2024 THE WIMPER PROGRAM</span>
            <span>PAGE 03</span>
        </footer>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
