<?php
/**
 * Template part for displaying the Industry Models / Research Frameworks grid on the Front Page.
 */

$homepage_models = [
    [
        'id' => 'ai-compute-supply-model',
        'title' => 'AI Compute Supply Model',
        'description' => 'Tracks GPU wafer allocation, HBM supply, and CoWoS packaging capacity across TSMC and Samsung to forecast compute availability for AI training clusters.',
        'use_case' => 'TSMC CoWoS capacity tracking & NVIDIA wafer allocation forecasting.',
        'category' => 'AI Infrastructure',
        'access' => 'Institutional',
        'data_points' => '40+ variables',
        'icon_svg' => '<svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" /><path d="M8 21h8M12 17v4" stroke-linecap="round"/></svg>',
    ],
    [
        'id' => 'gpu-scaling-bottleneck-model',
        'title' => 'GPU Scaling & Bottleneck Model',
        'description' => 'Quantifies the performance ceiling of current GPU architectures — NVLink bandwidth, HBM3e limits, and rack-level thermal constraints on Blackwell and future systems.',
        'use_case' => 'Datacenter power planning, optical transceiver forecasting, & interconnect bandwidth limits.',
        'category' => 'GPUs',
        'access' => 'Pro',
        'data_points' => '25+ variables',
        'icon_svg' => '<svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l4-8 4 4 4-6 4 4" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 21h18" stroke-linecap="round"/></svg>',
    ],
    [
        'id' => 'semiconductor-capacity-tracker',
        'title' => 'Semiconductor Capacity Tracker',
        'description' => 'Maps leading-edge fab utilization at TSMC, Samsung, and Intel Foundry across N3, N2, and 18A nodes — including yield-adjusted wafer output and CapEx timelines.',
        'use_case' => 'Foundry utilization modeling & ASML EUV lithography equipment deployment.',
        'category' => 'Semiconductors',
        'access' => 'Institutional',
        'data_points' => '60+ variables',
        'icon_svg' => '<svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="5" width="14" height="14" rx="1"/><path d="M9 5v14M15 5v14M5 9h14M5 15h14" stroke-linecap="round"/></svg>',
    ],
    [
        'id' => 'cloud-infrastructure-growth-model',
        'title' => 'Cloud Infrastructure Growth Model',
        'description' => 'Projects hyperscaler CapEx deployment, GPU cluster buildout velocity, and power procurement timelines across AWS, Azure, Google, and Meta through 2027.',
        'use_case' => 'Hyperscaler GPU cluster velocity, energy procurement timelines, & datacenter buildouts.',
        'category' => 'Cloud Computing',
        'access' => 'Pro',
        'data_points' => '35+ variables',
        'icon_svg' => '<svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6.5 19a4.5 4.5 0 01-.9-8.9 6 6 0 0111.8 0A4.5 4.5 0 0117.5 19" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 19v-7M9 15l3-3 3 3" stroke-linecap="round" stroke-linejoin="round"/></svg>',
    ]
];
?>

<section class="py-10 sm:py-12 border-b border-border-subtle bg-surface">
    <div class="container max-w-[1100px]">
        
        <!-- Section Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 lg:gap-8 mb-8 sm:mb-10 sa-reveal">
            <div class="lg:w-1/2 space-y-4">
                <p class="text-[12px] font-bold uppercase tracking-[0.15em] text-accent-secondary flex items-center gap-2">
                    <span class="w-8 h-[2px] bg-accent-secondary"></span>
                    Proprietary Data Systems
                </p>
                <h2 class="text-3xl sm:text-4xl md:text-[42px] font-extrabold tracking-tighter text-content-primary leading-[1.1]">
                    Enterprise Infrastructure Models
                </h2>
            </div>
            <div class="lg:w-1/2 flex flex-col items-start lg:items-end text-left lg:text-right gap-5">
                <p class="text-[15px] sm:text-[16px] text-content-secondary leading-relaxed font-medium max-w-md">
                    Direct access to our proprietary, yield-adjusted wafer models, HBM supply chains, and power procurement trackers. Designed for capacity planning, equity research, and CapEx forecasting.
                </p>
                <a href="<?php echo esc_url(home_url('/models')); ?>" class="text-[13px] font-bold text-root bg-accent-secondary px-6 py-3 rounded-lg hover:bg-accent-secondary-hover transition-colors flex items-center gap-2 whitespace-nowrap">
                    Explore all models <span class="text-lg leading-none">&rarr;</span>
                </a>
            </div>
        </div>

        <!-- Model cards grid - Balanced 2x2 grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php 
            $stagger_index = 1;
            foreach ($homepage_models as $model): 
            ?>
                <a href="<?php echo esc_url(home_url('/models/' . $model['id'])); ?>" class="group block sa-reveal sa-stagger-<?php echo $stagger_index++; ?> text-left h-full">
                    <div class="flex flex-col bg-root rounded-xl overflow-hidden border border-border-strong hover:border-accent-secondary/50 transition-all duration-300 hover:shadow-2xl h-full p-6 sm:p-7 relative">
                        
                        <!-- Card Header: Category & Access Level -->
                        <div class="flex items-center justify-between mb-5">
                            <span class="text-[10px] font-bold text-content-primary bg-surface border border-border-strong px-2 py-1 rounded-md uppercase tracking-widest shadow-sm"><?php echo esc_html($model['category']); ?></span>
                            <div class="flex items-center gap-1.5 px-2.5 py-1 rounded bg-surface border border-border-strong shadow-sm">
                                <svg class="w-3.5 h-3.5 text-accent-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <span class="text-[9px] font-bold uppercase tracking-widest text-content-primary">
                                    <?php echo esc_html($model['access']); ?>
                                </span>
                            </div>
                        </div>

                        <!-- Card Title & Icon -->
                        <div class="flex items-start gap-3.5 mb-4">
                            <div class="flex-shrink-0 h-10 w-10 rounded-xl border border-accent-secondary/20 bg-accent-secondary/10 flex items-center justify-center text-accent-secondary">
                                <?php echo $model['icon_svg']; ?>
                            </div>
                            <h3 class="font-extrabold text-content-primary tracking-tight group-hover:text-accent-secondary transition-colors duration-200 text-lg sm:text-xl leading-tight">
                                <?php echo esc_html($model['title']); ?>
                            </h3>
                        </div>

                        <!-- Card Description -->
                        <p class="text-content-secondary leading-relaxed font-medium text-[13px] mb-5 flex-grow">
                            <?php echo esc_html($model['description']); ?>
                        </p>

                        <!-- Enterprise Use Case Section -->
                        <div class="mb-5 p-3.5 bg-surface-hover/30 rounded-lg border border-border-subtle/30">
                            <p class="text-[9px] uppercase font-extrabold tracking-wider text-content-tertiary mb-1">Enterprise Use Case</p>
                            <p class="text-[12px] font-semibold text-content-secondary leading-normal"><?php echo esc_html($model['use_case']); ?></p>
                        </div>

                        <!-- Card Metadata Grid (Data Points & Cadence) -->
                        <div class="grid grid-cols-2 gap-4 pt-4 border-t border-border-subtle/50 mb-5">
                            <div>
                                <p class="text-[9px] uppercase tracking-widest text-content-tertiary mb-0.5 font-bold">Data Coverage</p>
                                <p class="text-[13px] font-bold text-accent-secondary"><?php echo esc_html($model['data_points']); ?></p>
                            </div>
                            <div>
                                <p class="text-[9px] uppercase tracking-widest text-content-tertiary mb-0.5 font-bold">Update Cadence</p>
                                <p class="text-[13px] font-bold text-content-primary">Monthly</p>
                            </div>
                        </div>

                        <!-- Card Footer: Live indicator & Call to Action -->
                        <div class="flex items-center justify-between pt-4 border-t border-border-subtle mt-auto">
                            <span class="text-[10px] font-bold text-content-tertiary uppercase tracking-widest flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-accent-secondary animate-pulse"></span>
                                Live Data
                            </span>
                            <span class="text-[12px] font-bold text-content-primary group-hover:translate-x-1 transition-transform duration-200 flex items-center gap-1">
                                Request Access <span class="text-accent-secondary">&rarr;</span>
                            </span>
                        </div>

                    </div>
                </a>
            <?php endforeach; ?>
        </div>

    </div>
</section>
