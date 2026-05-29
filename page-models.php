<?php
/**
 * Template Name: Models Page
 */
require_once get_stylesheet_directory() . '/data.php';
$all_models = get_semi_models();

$visual_images = [
    'supply-chain'  => get_template_directory_uri() . '/assets/placeholders/supply-chain.png',
    'cloud'         => get_template_directory_uri() . '/assets/placeholders/data_dashboard.png',
    'architecture'  => get_template_directory_uri() . '/assets/placeholders/blueprint.png',
    'semiconductor' => get_template_directory_uri() . '/assets/placeholders/wafer.png',
];
$fallback_img = get_template_directory_uri() . '/assets/placeholders/data_dashboard.png';

get_header();
?>
<main class="min-h-screen bg-root">

    <!-- Page Hero -->
    <section class="relative border-b border-border-subtle bg-root pt-8 pb-10 md:pt-10 md:pb-12 lg:pt-12 lg:pb-14 overflow-hidden">
        <div class="pointer-events-none absolute inset-0 opacity-[0.04] z-10" style="background-image: radial-gradient(circle, #a1a1aa 1px, transparent 1px); background-size: 26px 26px;"></div>
        <div class="pointer-events-none absolute top-0 right-0 h-80 w-80 rounded-full bg-accent-secondary/5 blur-[100px] z-10"></div>

        <!-- Background Image fading from right -->
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
                <p class="text-xs font-bold uppercase tracking-[0.15em] text-accent-secondary mb-3">Research Frameworks</p>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[56px] font-extrabold tracking-tighter text-content-primary leading-[1.05] mb-6">
                    Enterprise Infrastructure Models
                </h1>
                <p class="text-[16px] sm:text-[17px] md:text-[18px] text-content-secondary leading-relaxed font-medium text-balance">
                    Proprietary bottom-up analytical models built by the SemiAnalysis team. We track fab capacity, compute supply, and hyperscaler deployments using deep supply chain intelligence to inform capacity planning, CapEx forecasting, and investment decisions.
                </p>
            </div>
        </div>
    </section>

    <!-- Model card grid -->
    <section class="py-12 md:py-16">
        <div class="container">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-px bg-border-subtle border border-border-subtle rounded-xl overflow-hidden mb-16">
                <?php $idx = 1; foreach ($all_models as $slug => $model):
                    $img = $visual_images[$model['visualType']] ?? $fallback_img;
                ?>
                <a href="/models/<?php echo esc_attr($slug); ?>" class="group block bg-surface hover:bg-surface-hover transition-colors duration-300">
                    <!-- Image panel -->
                    <div class="relative h-44 overflow-hidden">
                        <img src="<?php echo esc_url($img); ?>" alt=""
                             class="w-full h-full object-cover grayscale opacity-50 group-hover:opacity-70 group-hover:scale-105 transition-all duration-500 ease-out" />
                        <!-- Bottom fade -->
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/40 to-transparent"></div>
                        <!-- Index badge -->
                        <span class="absolute top-4 left-4 font-mono text-[10px] font-bold tracking-[0.2em] text-content-tertiary bg-root/70 backdrop-blur-sm px-2 py-1 rounded">
                            <?php echo str_pad($idx, 2, '0', STR_PAD_LEFT); ?>
                        </span>
                    </div>

                    <!-- Text content -->
                    <div class="p-6">
                        <!-- Amber accent line -->
                        <div class="w-6 h-[2px] bg-accent-secondary mb-4 group-hover:w-12 transition-all duration-300 ease-out"></div>

                        <h2 class="text-[17px] sm:text-[18px] font-extrabold tracking-tight text-content-primary group-hover:text-accent-secondary transition-colors duration-200 leading-snug mb-2">
                            <?php echo esc_html($model['title']); ?>
                        </h2>

                        <p class="text-[13px] text-content-tertiary leading-relaxed font-medium line-clamp-3 mb-5">
                            <?php echo esc_html($model['description']); ?>
                        </p>

                        <div class="flex items-center justify-between">
                            <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-content-tertiary">
                                <?php echo esc_html($model['category']); ?>
                            </span>
                            <span class="text-[11px] font-bold text-content-tertiary group-hover:text-accent-secondary group-hover:translate-x-1 inline-block transition-all duration-200">
                                &rarr;
                            </span>
                        </div>
                    </div>
                </a>
                <?php $idx++; endforeach; ?>
            </div>

            <!-- Delivery Formats Section -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center border-t border-border-subtle pt-16">
                <!-- Left Column -->
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

                <!-- Right Column -->
                <div class="lg:col-span-7 sa-card p-8 border border-border-strong bg-surface/50 shadow-2xl flex flex-col justify-center space-y-6 relative overflow-hidden">
                    <div class="absolute inset-0 opacity-[0.02] pointer-events-none" style="background-image: radial-gradient(circle, var(--color-content-secondary) 1px, transparent 1px); background-size: 16px 16px;"></div>
                    <div class="space-y-3">
                        <p class="text-[10px] font-bold uppercase tracking-[0.15em] text-accent-secondary">Institutional Verification Required</p>
                        <h3 class="text-xl font-extrabold text-content-primary tracking-tight leading-snug">Model Skeletons &amp; Schemas Available on Request</h3>
                        <p class="text-sm text-content-secondary leading-relaxed font-medium">Full mathematical structures, formula logic sheets, and data schemas are provided exclusively to verified institutional licensing clients.</p>
                    </div>
                    <div class="pt-2">
                        <button onclick="document.querySelector('form').scrollIntoView({ behavior: 'smooth' });"
                                class="inline-flex items-center justify-center px-6 h-12 rounded-lg bg-accent-secondary text-root text-xs font-bold hover:bg-accent-secondary-hover transition-all duration-200 cursor-pointer">
                            Request Sample Schema
                        </button>
                    </div>
                </div>
            </div>

            <!-- Institutional CTA -->
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
                        <p class="text-[15px] text-content-secondary leading-relaxed font-medium">Enterprise licensing includes access to all active models, weekly supply chain data feeds, API integrations, and direct analyst consultation.</p>
                    </div>
                    <form class="space-y-3 bg-root/60 backdrop-blur-md p-6 rounded-xl border border-border-subtle" onsubmit="event.preventDefault();">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <input type="email" placeholder="Work Email" required class="w-full h-10 px-3 rounded-lg bg-surface border border-border-strong text-xs font-semibold text-content-primary placeholder-content-tertiary focus:outline-none focus:border-accent-secondary/50 transition-colors" />
                            <input type="text" placeholder="Company" required class="w-full h-10 px-3 rounded-lg bg-surface border border-border-strong text-xs font-semibold text-content-primary placeholder-content-tertiary focus:outline-none focus:border-accent-secondary/50 transition-colors" />
                        </div>
                        <textarea placeholder="Describe your research focus or data requirements..." rows="3" required class="w-full p-3 rounded-lg bg-surface border border-border-strong text-xs font-semibold text-content-primary placeholder-content-tertiary focus:outline-none focus:border-accent-secondary/50 transition-colors resize-none"></textarea>
                        <button type="submit" class="w-full inline-flex items-center justify-center h-10 rounded-lg bg-accent-secondary text-root text-xs font-bold hover:bg-accent-secondary-hover active:scale-95 transition-all duration-200">Request Proposal</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
</main>
<?php get_footer(); ?>
