<?php
/**
 * Template Name: Models Page
 */
require_once get_stylesheet_directory() . '/data.php';
$all_models = get_semi_models();
$free_models = array_filter($all_models, function($m) { return !$m['memberOnly']; });
$pro_models = array_filter($all_models, function($m) { return $m['memberOnly']; });

// Use cases are loaded dynamically from data.php

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
                                    <?php if (isset($model['useCase'])): ?>
                                    <div class="mt-4 pt-3 border-t border-border-subtle/50">
                                        <p class="text-[10px] uppercase font-bold tracking-wider text-content-tertiary mb-1">Enterprise Use Case</p>
                                        <p class="text-[12px] font-semibold text-content-secondary leading-normal"><?php echo esc_html($model['useCase']); ?></p>
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
                                    <?php if (isset($model['useCase'])): ?>
                                    <div class="mt-4 pt-3 border-t border-border-subtle/50">
                                        <p class="text-[10px] uppercase font-bold tracking-wider text-content-tertiary mb-1">Enterprise Use Case</p>
                                        <p class="text-[12px] font-semibold text-content-secondary leading-normal"><?php echo esc_html($model['useCase']); ?></p>
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

                <!-- Right Column: Institutional Request Card -->
                <div class="lg:col-span-7 sa-card p-8 border border-border-strong bg-surface/50 shadow-2xl flex flex-col justify-center space-y-6 relative overflow-hidden">
                    <div class="absolute inset-0 opacity-[0.02] pointer-events-none" style="background-image: radial-gradient(circle, var(--color-content-secondary) 1px, transparent 1px); background-size: 16px 16px;"></div>
                    <div class="space-y-3">
                        <p class="text-[10px] font-bold uppercase tracking-[0.15em] text-accent-secondary">
                            Institutional Verification Required
                        </p>
                        <h3 class="text-xl font-extrabold text-content-primary tracking-tight leading-snug">
                            Model Skeletons &amp; Schemas Available on Request
                        </h3>
                        <p class="text-sm text-content-secondary leading-relaxed font-medium">
                            Full mathematical structures, formula logic sheets, and data schemas are provided exclusively to verified institutional licensing clients. Contact our analyst team to request a sample model package.
                        </p>
                    </div>
                    <div class="pt-2">
                        <button 
                            onclick="document.querySelector('form').scrollIntoView({ behavior: 'smooth' });"
                            class="inline-flex items-center justify-center px-6 h-12 rounded-lg bg-accent-secondary text-root text-xs font-bold hover:bg-accent-secondary-hover transition-all duration-200 cursor-pointer"
                        >
                            Request Sample Schema
                        </button>
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
