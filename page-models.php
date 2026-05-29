<?php
/**
 * Template Name: Models Page
 */
require_once get_stylesheet_directory() . '/data.php';
$all_models = get_semi_models();
$free_models = array_filter($all_models, function($m) { return !$m['memberOnly']; });
$pro_models = array_filter($all_models, function($m) { return $m['memberOnly']; });

$use_cases = [
    'ai-compute-supply' => 'TSMC CoWoS capacity tracking & NVIDIA wafer allocation forecasting.',
    'gpu-scaling-bottleneck' => 'Datacenter power planning, optical transceiver forecasting, & interconnect bandwidth limits.',
    'semiconductor-capacity' => 'Foundry utilization modeling & ASML EUV lithography equipment deployment.',
    'cloud-infra-growth' => 'Hyperscaler GPU cluster velocity, energy procurement timelines, & datacenter buildouts.',
    'memory-supply' => 'High Bandwidth Memory (HBM) wafer allocation & allocation-adjusted chip cost modeling.',
    'data-center-power' => 'Interconnection queue forecasting, utility PPA modeling, & grid capacity bottleneck mapping.'
];

get_header();
?>
<main class="min-h-screen bg-root">
    <section class="relative border-b border-border-subtle bg-root pt-8 pb-10 md:pt-10 md:pb-12 lg:pt-12 lg:pb-14 overflow-hidden">
        <div class="pointer-events-none absolute inset-0 opacity-[0.04] z-10" style="background-image: radial-gradient(circle, #a1a1aa 1px, transparent 1px); background-size: 26px 26px;"></div>
        <div class="pointer-events-none absolute top-0 right-0 h-80 w-80 rounded-full bg-accent-secondary/5 blur-[100px] z-10"></div>
        
        <!-- Absolute Background Image fading from right -->
        <div class="absolute inset-0 z-0 hidden lg:block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/placeholders/data_dashboard.png" alt="" class="absolute inset-y-0 right-0 w-[70%] h-full object-cover opacity-70 grayscale contrast-125 brightness-90" />
            <div class="absolute inset-0 bg-gradient-to-r from-root via-root/90 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-root via-transparent to-transparent"></div>
        </div>

        <div class="container relative z-10">
            <nav class="flex items-center gap-2 text-xs text-content-tertiary mb-6 sm:mb-8 font-bold tracking-widest uppercase" aria-label="Breadcrumb">
                <a href="/" class="hover:text-accent-secondary transition-colors">Home</a>
                <span>/</span>
                <span class="text-content-secondary">Industry Models &amp; Research</span>
            </nav>
            <div class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.15em] text-accent-secondary mb-3">
                    Research Frameworks
                </p>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[56px] font-extrabold tracking-tighter text-content-primary leading-[1.05] mb-6">
                    Enterprise Infrastructure Models
                </h1>
                <p class="text-[16px] sm:text-[17px] md:text-[18px] text-content-secondary leading-relaxed font-medium mb-10 text-balance">
                    Proprietary bottom-up analytical models built by the SemiAnalysis team. We track fab capacity, compute supply, and hyperscaler deployments using deep supply chain intelligence to inform capacity planning, CapEx forecasting, and investment decisions.
                </p>
                <div class="flex flex-wrap gap-8 sm:gap-12">
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-accent-secondary tracking-tighter">10+</div>
                        <div class="text-[11px] font-bold uppercase tracking-widest text-content-tertiary mt-1.5">Active models</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-accent-secondary tracking-tighter">Monthly</div>
                        <div class="text-[11px] font-bold uppercase tracking-widest text-content-tertiary mt-1.5">Update cadence</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-accent-secondary tracking-tighter">200+</div>
                        <div class="text-[11px] font-bold uppercase tracking-widest text-content-tertiary mt-1.5">Tracked variables</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 md:py-10">
        <div class="container">
            <div class="flex flex-wrap items-center gap-2 mb-10 sm:mb-12">
                <span class="text-[11px] font-bold uppercase tracking-widest text-content-tertiary mr-2">Filter:</span>
                <button class="text-xs font-bold px-4 py-1.5 rounded-full border border-border-subtle text-content-secondary hover:border-accent-secondary/30 hover:text-accent-secondary transition-all duration-200 bg-accent-secondary/10 border-accent-secondary/30 text-accent-secondary">All</button>
                <button class="text-xs font-bold px-4 py-1.5 rounded-full border border-border-subtle text-content-secondary hover:border-accent-secondary/30 hover:text-accent-secondary transition-all duration-200">AI Infrastructure</button>
                <button class="text-xs font-bold px-4 py-1.5 rounded-full border border-border-subtle text-content-secondary hover:border-accent-secondary/30 hover:text-accent-secondary transition-all duration-200">Semiconductors</button>
                <button class="text-xs font-bold px-4 py-1.5 rounded-full border border-border-subtle text-content-secondary hover:border-accent-secondary/30 hover:text-accent-secondary transition-all duration-200">GPUs</button>
                <button class="text-xs font-bold px-4 py-1.5 rounded-full border border-border-subtle text-content-secondary hover:border-accent-secondary/30 hover:text-accent-secondary transition-all duration-200">Cloud Computing</button>
                <button class="text-xs font-bold px-4 py-1.5 rounded-full border border-border-subtle text-content-secondary hover:border-accent-secondary/30 hover:text-accent-secondary transition-all duration-200">Data Centers</button>
                <button class="text-xs font-bold px-4 py-1.5 rounded-full border border-border-subtle text-content-secondary hover:border-accent-secondary/30 hover:text-accent-secondary transition-all duration-200">Markets</button>
            </div>
            <?php if(count($free_models) > 0): ?>
            <div class="mb-12">
                <p class="text-[11px] font-bold uppercase tracking-widest text-content-tertiary mb-5">Free preview</p>
                <div class="flex flex-col gap-6">
                    <?php foreach($free_models as $slug => $model): ?>
                    <a href="/models/<?php echo esc_attr($slug); ?>" class="group block">
                        <div class="flex flex-col md:flex-row gap-6 p-6 md:p-8 rounded-xl border border-border-strong bg-surface hover:border-accent-secondary/50 transition-all duration-300 hover:shadow-2xl">
                            <div class="md:w-5/12 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center gap-3 mb-4">
                                        <div class="w-10 h-10 rounded-lg bg-surface-hover border border-border-strong flex items-center justify-center text-content-secondary group-hover:text-accent-secondary group-hover:border-accent-secondary/50 transition-colors flex-shrink-0">
                                            <?php echo $model['icon']; ?>
                                        </div>
                                        <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-[11px] font-semibold uppercase tracking-widest border border-accent-secondary/20 bg-accent-secondary/10 text-accent-secondary transition-colors"><?php echo esc_html($model['category']); ?></span>
                                    </div>
                                    <h3 class="text-[18px] sm:text-[20px] font-extrabold text-content-primary group-hover:text-accent-secondary transition-colors duration-200 leading-tight tracking-tight mb-3">
                                        <?php echo esc_html($model['title']); ?>
                                    </h3>
                                    <p class="text-[14px] text-content-secondary leading-relaxed font-medium line-clamp-3 mb-4">
                                        <?php echo esc_html($model['description']); ?>
                                    </p>
                                    <?php if (isset($use_cases[$slug])): ?>
                                    <div class="mt-4 pt-3 border-t border-border-subtle/50">
                                        <p class="text-[10px] uppercase font-bold tracking-wider text-content-tertiary mb-1">Enterprise Use Case</p>
                                        <p class="text-[12px] font-semibold text-content-secondary leading-normal"><?php echo esc_html($use_cases[$slug]); ?></p>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="md:w-7/12 flex flex-col justify-between border-t md:border-t-0 md:border-l border-border-strong pt-5 md:pt-0 md:pl-8">
                                <div class="grid grid-cols-2 gap-6 mb-6">
                                    <div>
                                        <p class="text-[10px] uppercase tracking-widest text-content-tertiary mb-1 font-bold">Access Level</p>
                                        <span class="text-[11px] font-bold uppercase tracking-widest px-2.5 py-1 rounded bg-accent-tertiary/10 border border-accent-tertiary/20 text-accent-tertiary mt-1 inline-block">Free Preview</span>
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase tracking-widest text-content-tertiary mb-1 font-bold">Data Coverage</p>
                                        <p class="text-[14px] font-bold text-accent-secondary"><?php echo esc_html($model['dataPoints']); ?></p>
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase tracking-widest text-content-tertiary mb-1 font-bold">Last Updated</p>
                                        <p class="text-[14px] font-bold text-content-primary"><?php echo esc_html($model['lastUpdated']); ?></p>
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase tracking-widest text-content-tertiary mb-1 font-bold">Update Cadence</p>
                                        <p class="text-[14px] font-bold text-content-primary">Monthly</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between pt-4 border-t border-border-subtle mt-auto">
                                    <span class="text-[11px] font-bold text-content-tertiary uppercase tracking-widest flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-accent-secondary animate-pulse"></span>
                                        Live Data
                                    </span>
                                    <span class="text-[12px] font-bold uppercase tracking-widest text-accent-secondary group-hover:translate-x-1 transition-transform">
                                        View Free Preview &rarr;
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if(count($pro_models) > 0): ?>
            <div>
                <p class="text-[11px] font-bold uppercase tracking-widest text-content-tertiary mb-5">Member access</p>
                <div class="flex flex-col gap-6">
                    <?php foreach($pro_models as $slug => $model): ?>
                    <a href="/models/<?php echo esc_attr($slug); ?>" class="group block">
                        <div class="flex flex-col md:flex-row gap-6 p-6 md:p-8 rounded-xl border border-border-strong bg-surface hover:border-accent-secondary/50 transition-all duration-300 hover:shadow-2xl">
                            <div class="md:w-5/12 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center gap-3 mb-4">
                                        <div class="w-10 h-10 rounded-lg bg-surface-hover border border-border-strong flex items-center justify-center text-content-secondary group-hover:text-accent-secondary group-hover:border-accent-secondary/50 transition-colors flex-shrink-0">
                                            <?php echo $model['icon']; ?>
                                        </div>
                                        <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-[11px] font-semibold uppercase tracking-widest border border-accent-secondary/20 bg-accent-secondary/10 text-accent-secondary transition-colors"><?php echo esc_html($model['category']); ?></span>
                                    </div>
                                    <h3 class="text-[18px] sm:text-[20px] font-extrabold text-content-primary group-hover:text-accent-secondary transition-colors duration-200 leading-tight tracking-tight mb-3">
                                        <?php echo esc_html($model['title']); ?>
                                    </h3>
                                    <p class="text-[14px] text-content-secondary leading-relaxed font-medium line-clamp-3 mb-4">
                                        <?php echo esc_html($model['description']); ?>
                                    </p>
                                    <?php if (isset($use_cases[$slug])): ?>
                                    <div class="mt-4 pt-3 border-t border-border-subtle/50">
                                        <p class="text-[10px] uppercase font-bold tracking-wider text-content-tertiary mb-1">Enterprise Use Case</p>
                                        <p class="text-[12px] font-semibold text-content-secondary leading-normal"><?php echo esc_html($use_cases[$slug]); ?></p>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="md:w-7/12 flex flex-col justify-between border-t md:border-t-0 md:border-l border-border-strong pt-5 md:pt-0 md:pl-8">
                                <div class="grid grid-cols-2 gap-6 mb-6">
                                    <div>
                                        <p class="text-[10px] uppercase tracking-widest text-content-tertiary mb-1 font-bold">Access Level</p>
                                        <div class="flex items-center gap-1.5">
                                            <span class="inline-flex items-center gap-1.5 text-[10px] font-bold uppercase tracking-[0.15em] px-2.5 py-0.5 rounded-md bg-accent-primary/10 border border-accent-primary/20 text-accent-primary mt-1">
                                                <svg class="h-2.5 w-2.5" viewBox="0 0 12 12" fill="none"><rect x="2" y="5" width="8" height="6" rx="1" stroke="currentColor" stroke-width="1.2" /><path d="M4 5V3.5a2 2 0 114 0V5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" /></svg>
                                                Member
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase tracking-widest text-content-tertiary mb-1 font-bold">Data Coverage</p>
                                        <p class="text-[14px] font-bold text-accent-secondary"><?php echo esc_html($model['dataPoints']); ?></p>
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase tracking-widest text-content-tertiary mb-1 font-bold">Last Updated</p>
                                        <p class="text-[14px] font-bold text-content-primary"><?php echo esc_html($model['lastUpdated']); ?></p>
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase tracking-widest text-content-tertiary mb-1 font-bold">Update Cadence</p>
                                        <p class="text-[14px] font-bold text-content-primary">Monthly</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between pt-4 border-t border-border-subtle mt-auto">
                                    <span class="text-[11px] font-bold text-content-tertiary uppercase tracking-widest flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-accent-secondary animate-pulse"></span>
                                        Live Data
                                    </span>
                                    <span class="text-[12px] font-bold uppercase tracking-widest text-accent-secondary group-hover:translate-x-1 transition-transform">
                                        Request Access &rarr;
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- Delivery Formats Section -->
            <div class="mt-16 sm:mt-20 grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center border-t border-border-subtle pt-16">
                <!-- Left Column: Copywriting & Value Prop -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="space-y-2">
                        <p class="text-[11px] font-bold uppercase tracking-[0.15em] text-accent-secondary flex items-center gap-2">
                            <span class="w-6 h-[1.5px] bg-accent-secondary"></span>
                            Data System Integration
                        </p>
                        <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-content-primary leading-tight">
                            Institutional-Grade Datasets. <br />
                            Built for Internal Workflows.
                        </h2>
                    </div>
                    <p class="text-sm text-content-secondary leading-relaxed font-medium">
                        Our capacity and supply chain models are delivered as clean, formula-intact datasets designed to integrate directly into your proprietary valuation models, internal databases, and research pipelines.
                    </p>

                    <!-- Feature List -->
                    <div class="space-y-4 pt-2">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-500">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-content-primary uppercase tracking-wider mb-1">Clean Excel (.xlsx) Delivery</h4>
                                <p class="text-xs text-content-secondary leading-normal">Fully unlocked mathematical models with historical data, forward projections, and user-adjustable cost variables.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-accent-secondary/10 border border-accent-secondary/20 flex items-center justify-center text-accent-secondary">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 17 10 11 4 5"/><line x1="12" y1="19" x2="20" y2="19"/></svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-content-primary uppercase tracking-wider mb-1">REST API &amp; JSON Endpoints</h4>
                                <p class="text-xs text-content-secondary leading-normal">Structured API data feeds for direct ingestion into proprietary database pipelines and custom BI dashboards.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-500">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/></svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-content-primary uppercase tracking-wider mb-1">Weekly Feed Refreshes</h4>
                                <p class="text-xs text-content-secondary leading-normal">Stay aligned with wafer starts and packaging allocations through direct weekly CSV/spreadsheet delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Interactive Glassmorphic Spreadsheet Mockup -->
                <div class="lg:col-span-7 sa-card overflow-hidden border border-border-strong bg-surface shadow-2xl relative">
                    <!-- Spreadsheet Header / Menu Bar -->
                    <div class="bg-surface-hover/80 border-b border-border-strong px-4 py-3 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-red-500/60"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-yellow-500/60"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-green-500/60"></span>
                            <span class="text-[11px] font-semibold text-content-tertiary ml-2 font-mono uppercase">TSMC_CoWoS_Allocation_2026.xlsx</span>
                        </div>
                        <div class="flex items-center gap-1.5 bg-root border border-border-strong px-2 py-0.5 rounded text-[10px] font-bold text-emerald-500">
                            <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                            <span>EXCEL ACTIVE</span>
                        </div>
                    </div>

                    <!-- Spreadsheet Grid Mockup -->
                    <div class="overflow-x-auto p-4">
                        <table class="w-full text-left font-mono text-[11px] border-collapse">
                            <thead>
                                <tr class="border-b border-border-strong text-content-tertiary">
                                    <th class="py-2 px-3 bg-root border-r border-border-strong font-bold">Node / Product</th>
                                    <th class="py-2 px-3 bg-root border-r border-border-strong font-bold">Variable</th>
                                    <th class="py-2 px-3 bg-root border-r border-border-strong font-bold">Q1 2026</th>
                                    <th class="py-2 px-3 bg-root border-r border-border-strong font-bold">Q2 2026 (F)</th>
                                    <th class="py-2 px-3 bg-root border-r border-border-strong font-bold">Q3 2026 (F)</th>
                                    <th class="py-2 px-3 bg-root font-bold text-accent-secondary">Formula Logic</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Row 1 -->
                                <tr class="border-b border-border-subtle text-content-primary hover:bg-surface-hover/40 transition-colors">
                                    <td class="py-2.5 px-3 border-r border-border-subtle font-bold">TSMC N3B</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle text-content-secondary">Wafer Starts / Mo</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">55,000</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">60,000</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">62,500</td>
                                    <td class="py-2.5 px-3 text-emerald-500 font-semibold">=SUM(Fabs[N3B_Cap])</td>
                                </tr>
                                <!-- Row 2 -->
                                <tr class="border-b border-border-subtle text-content-primary hover:bg-surface-hover/40 transition-colors">
                                    <td class="py-2.5 px-3 border-r border-border-subtle font-bold">TSMC CoWoS-L</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle text-content-secondary">Yield Projection</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">92.5%</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">94.0%</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">95.2%</td>
                                    <td class="py-2.5 px-3 text-emerald-500 font-semibold">=AVERAGE(YieldCurve)</td>
                                </tr>
                                <!-- Row 3 -->
                                <tr class="border-b border-border-subtle text-content-primary hover:bg-surface-hover/40 transition-colors">
                                    <td class="py-2.5 px-3 border-r border-border-subtle font-bold">NVIDIA B200</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle text-content-secondary">CoWoS Allocation</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">12,500</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">18,200</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">22,000</td>
                                    <td class="py-2.5 px-3 text-emerald-500 font-semibold">=Alloc[NvidiaB200]</td>
                                </tr>
                                <!-- Row 4 (Blurred / Locked) -->
                                <tr class="border-b border-border-subtle text-content-tertiary select-none opacity-40 blur-[1px]">
                                    <td class="py-2.5 px-3 border-r border-border-subtle font-bold">TSMC N2 (GAA)</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">Wafer Starts / Mo</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">2,500</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">4,800</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">8,500</td>
                                    <td class="py-2.5 px-3 text-content-tertiary">=LockedFormula</td>
                                </tr>
                                <!-- Row 5 (More Blurred / Locked) -->
                                <tr class="border-b border-border-subtle text-content-tertiary select-none opacity-20 blur-[2px]">
                                    <td class="py-2.5 px-3 border-r border-border-subtle font-bold">Blackwell-Ultra</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">Total Wafer Starts</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">-</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">-</td>
                                    <td class="py-2.5 px-3 border-r border-border-subtle">6,200</td>
                                    <td class="py-2.5 px-3 text-content-tertiary">=LockedFormula</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Lock Overlay -->
                    <div class="absolute bottom-0 left-0 right-0 h-28 bg-gradient-to-t from-surface via-surface/90 to-transparent flex items-end justify-center pb-6">
                        <div class="flex items-center gap-2 bg-root border border-border-strong px-4 py-2 rounded-xl shadow-2xl backdrop-blur-md">
                            <svg class="w-3.5 h-3.5 text-accent-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                            <span class="text-[10px] sm:text-xs font-bold uppercase tracking-widest text-content-primary">
                                Institutional Access Required to View Remaining Schema
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-16 sm:mt-20 rounded-2xl border border-border-strong bg-surface p-8 sm:p-10 md:p-12 shadow-2xl relative overflow-hidden">
                <div class="absolute inset-0 z-0 pointer-events-none">
                  <div class="absolute inset-0 bg-surface/30 z-10"></div>
                  <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/80 to-transparent z-10"></div>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/placeholders/wafer.png" alt="" class="w-full h-full object-cover opacity-50 mix-blend-plus-lighter" />
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center relative z-10">
                    <div>
                        <p class="text-[11px] font-bold uppercase tracking-widest text-accent-secondary mb-3">Institutional Access</p>
                        <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-content-primary mb-4 leading-snug">Request Enterprise Licensing</h2>
                        <p class="text-[15px] text-content-secondary leading-relaxed font-medium">Enterprise licensing includes access to all active models, weekly supply chain data feeds, API integrations, and direct analyst consultation. Submit your inquiry to request a platform demonstration and pricing proposal.</p>
                    </div>
                    <form class="space-y-3 bg-root/60 backdrop-blur-md p-6 rounded-xl border border-border-subtle" onsubmit="event.preventDefault();">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div>
                                <input
                                    type="email"
                                    placeholder="Work Email"
                                    required
                                    class="w-full h-10 px-3 rounded-lg bg-surface border border-border-strong text-xs font-semibold text-content-primary placeholder-content-tertiary focus:outline-none focus:border-accent-secondary/50 transition-colors"
                                />
                            </div>
                            <div>
                                <input
                                    type="text"
                                    placeholder="Company"
                                    required
                                    class="w-full h-10 px-3 rounded-lg bg-surface border border-border-strong text-xs font-semibold text-content-primary placeholder-content-tertiary focus:outline-none focus:border-accent-secondary/50 transition-colors"
                                />
                            </div>
                        </div>
                        <div>
                            <textarea
                                placeholder="Describe your research focus or data requirements..."
                                rows="3"
                                required
                                class="w-full p-3 rounded-lg bg-surface border border-border-strong text-xs font-semibold text-content-primary placeholder-content-tertiary focus:outline-none focus:border-accent-secondary/50 transition-colors resize-none"
                            ></textarea>
                        </div>
                        <button
                            type="submit"
                            class="w-full inline-flex items-center justify-center h-10 rounded-lg bg-accent-secondary text-root text-xs font-bold hover:bg-accent-secondary-hover active:scale-95 transition-all duration-200"
                        >
                            Request Proposal
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
