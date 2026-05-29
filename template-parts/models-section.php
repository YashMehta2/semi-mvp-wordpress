<?php
/**
 * Template part — Industry Models: 2x2 card grid, tighter, with hover animations
 */
$homepage_models = [
    [
        'id'          => 'ai-compute-supply-model',
        'title'       => 'AI Compute Supply Model',
        'description' => 'Tracks GPU wafer allocation, HBM supply, and CoWoS packaging capacity across TSMC and Samsung to forecast compute availability for AI training clusters.',
        'use_case'    => 'TSMC CoWoS capacity tracking & NVIDIA wafer allocation forecasting.',
        'category'    => 'AI Infrastructure',
        'access'      => 'Institutional',
        'data_points' => '40+ variables',
        'accent'      => 'accent-secondary',
        'icon_svg'    => '<svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4" stroke-linecap="round"/></svg>',
    ],
    [
        'id'          => 'gpu-scaling-bottleneck-model',
        'title'       => 'GPU Scaling & Bottleneck Model',
        'description' => 'Quantifies the performance ceiling of current GPU architectures — NVLink bandwidth, HBM3e limits, and rack-level thermal constraints on Blackwell and future systems.',
        'use_case'    => 'Datacenter power planning, optical transceiver forecasting, & interconnect bandwidth limits.',
        'category'    => 'GPUs',
        'access'      => 'Pro',
        'data_points' => '25+ variables',
        'accent'      => 'accent-primary',
        'icon_svg'    => '<svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l4-8 4 4 4-6 4 4" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 21h18" stroke-linecap="round"/></svg>',
    ],
    [
        'id'          => 'semiconductor-capacity-tracker',
        'title'       => 'Semiconductor Capacity Tracker',
        'description' => 'Maps leading-edge fab utilization at TSMC, Samsung, and Intel Foundry across N3, N2, and 18A nodes — including yield-adjusted wafer output and CapEx timelines.',
        'use_case'    => 'Foundry utilization modeling & ASML EUV lithography equipment deployment.',
        'category'    => 'Semiconductors',
        'access'      => 'Institutional',
        'data_points' => '60+ variables',
        'accent'      => 'accent-secondary',
        'icon_svg'    => '<svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="5" width="14" height="14" rx="1"/><path d="M9 5v14M15 5v14M5 9h14M5 15h14" stroke-linecap="round"/></svg>',
    ],
    [
        'id'          => 'cloud-infrastructure-growth-model',
        'title'       => 'Cloud Infrastructure Growth Model',
        'description' => 'Projects hyperscaler CapEx deployment, GPU cluster buildout velocity, and power procurement timelines across AWS, Azure, Google, and Meta through 2027.',
        'use_case'    => 'Hyperscaler GPU cluster velocity, energy procurement timelines, & datacenter buildouts.',
        'category'    => 'Cloud Computing',
        'access'      => 'Pro',
        'data_points' => '35+ variables',
        'accent'      => 'accent-primary',
        'icon_svg'    => '<svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6.5 19a4.5 4.5 0 01-.9-8.9 6 6 0 0111.8 0A4.5 4.5 0 0117.5 19" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 19v-7M9 15l3-3 3 3" stroke-linecap="round" stroke-linejoin="round"/></svg>',
    ]
];
?>

<section class="py-8 md:py-10 border-b border-border-subtle bg-surface">
    <div class="container" style="max-width:1100px;">

        <!-- Section Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4 mb-6 sa-reveal">
            <div>
                <p class="sa-eyebrow mb-2">Proprietary Data Systems</p>
                <h2 class="text-2xl sm:text-3xl md:text-[36px] font-extrabold tracking-tighter text-content-primary leading-[1.1]">
                    Enterprise Infrastructure Models
                </h2>
            </div>
            <div class="flex flex-col items-start lg:items-end gap-3 lg:text-right">
                <p class="text-[13px] text-content-secondary leading-relaxed max-w-sm">
                    Direct access to our proprietary, yield-adjusted wafer models, HBM supply chains, and power procurement trackers.
                </p>
                <a href="<?php echo esc_url( home_url( '/models' ) ); ?>"
                   class="group inline-flex items-center gap-1.5 text-[12px] font-bold text-accent-secondary hover:text-content-primary transition-colors duration-150">
                    Explore all models <span>→</span>
                </a>
            </div>
        </div>

        <!-- Model cards — 2x2 grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <?php $stagger = 1; foreach ( $homepage_models as $model ) :
                $accent = $model['accent'];
            ?>
            <a href="<?php echo esc_url( home_url( '/models/' . $model['id'] ) ); ?>"
               class="group block sa-reveal sa-stagger-<?php echo $stagger++; ?> text-left"
               style="text-decoration:none;">
                <div class="flex flex-col bg-root rounded-xl border border-border-strong h-full p-5 relative overflow-hidden transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg">
                    <!-- Animated top accent bar -->
                    <div class="absolute top-0 left-0 right-0 h-[2px] bg-<?php echo $accent; ?> scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>

                    <!-- Header: Category + Access badge -->
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[9px] font-bold uppercase tracking-widest text-content-primary bg-surface border border-border-strong px-2 py-0.5 rounded">
                            <?php echo esc_html( $model['category'] ); ?>
                        </span>
                        <div class="flex items-center gap-1 px-2 py-0.5 rounded bg-surface border border-border-strong">
                            <svg class="w-2.5 h-2.5 text-accent-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                            <span class="text-[9px] font-bold uppercase tracking-widest text-content-secondary">
                                <?php echo esc_html( $model['access'] ); ?>
                            </span>
                        </div>
                    </div>

                    <!-- Icon + Title -->
                    <div class="flex items-start gap-3 mb-3">
                        <div class="flex-shrink-0 h-8 w-8 rounded-lg border border-<?php echo $accent; ?>/20 bg-<?php echo $accent; ?>/10 flex items-center justify-center text-<?php echo $accent; ?>">
                            <?php echo $model['icon_svg']; ?>
                        </div>
                        <h3 class="font-extrabold text-content-primary tracking-tight group-hover:text-<?php echo $accent; ?> transition-colors duration-200 text-[15px] sm:text-[16px] leading-snug">
                            <?php echo esc_html( $model['title'] ); ?>
                        </h3>
                    </div>

                    <!-- Description -->
                    <p class="text-content-secondary leading-relaxed text-[12px] mb-4 flex-grow">
                        <?php echo esc_html( $model['description'] ); ?>
                    </p>

                    <!-- Use case -->
                    <div class="mb-4 px-3 py-2 bg-surface rounded-lg border border-border-subtle/40">
                        <p class="text-[9px] uppercase font-extrabold tracking-wider text-content-tertiary mb-0.5">Enterprise Use Case</p>
                        <p class="text-[11px] font-medium text-content-secondary leading-normal">
                            <?php echo esc_html( $model['use_case'] ); ?>
                        </p>
                    </div>

                    <!-- Metadata row -->
                    <div class="flex items-center justify-between pt-3 border-t border-border-subtle">
                        <div>
                            <p class="text-[9px] uppercase tracking-widest text-content-tertiary font-bold">Coverage</p>
                            <p class="text-[12px] font-bold text-<?php echo $accent; ?>"><?php echo esc_html( $model['data_points'] ); ?></p>
                        </div>
                        <div class="text-right">
                            <p class="text-[9px] uppercase tracking-widest text-content-tertiary font-bold">Cadence</p>
                            <p class="text-[12px] font-bold text-content-primary">Monthly</p>
                        </div>
                        <span class="text-[11px] font-bold text-<?php echo $accent; ?>">
                            Request Access →
                        </span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

    </div>
</section>
