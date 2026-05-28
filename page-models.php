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
    <section class="relative border-b border-border-subtle bg-root pt-12 pb-14 sm:pt-16 sm:pb-18 md:pt-20 md:pb-20 overflow-hidden">
        <div class="pointer-events-none absolute inset-0 opacity-[0.04] z-10" style="background-image: radial-gradient(circle, #a1a1aa 1px, transparent 1px); background-size: 26px 26px;"></div>
        <div class="pointer-events-none absolute top-0 right-0 h-80 w-80 rounded-full bg-accent-secondary/5 blur-[100px] z-10"></div>
        
        <!-- Absolute Background Image fading from right -->
        <div class="absolute inset-0 z-0 hidden lg:block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/placeholders/data_dashboard.png" alt="" class="absolute inset-y-0 right-0 w-[70%] h-full object-cover opacity-70" />
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
    <section class="py-12 sm:py-16 md:py-20">
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
