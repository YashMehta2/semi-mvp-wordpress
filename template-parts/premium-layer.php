<?php
/**
 * Template part — PremiumLayer: 3-column tier cards, tightened + hover lift animations
 */
$tiers = [
    [
        'id'          => 'free',
        'label'       => 'Free Briefings',
        'headline'    => 'Weekly Digest',
        'description' => 'Get our weekly digest of the most important AI infrastructure and semiconductor developments — free to every subscriber.',
        'includes'    => [
            'Weekly AI & semiconductor digest',
            'Summary of latest reports',
            'Market signal highlights',
            'Access to select open articles',
        ],
        'cta'         => 'Subscribe Free',
        'cta_href'    => '#newsletter',
        'accent'      => false,
    ],
    [
        'id'          => 'premium',
        'label'       => 'Professional Access',
        'headline'    => 'Full Research & Models',
        'description' => 'Unlock every deep-dive report, proprietary industry models, and structured data — the same intelligence used by leading hyperscalers and chip designers.',
        'includes'    => [
            '300+ full-length research reports',
            'AI Compute & GPU Scaling models',
            'Semiconductor capacity trackers',
            'Hyperscaler CapEx data & charts',
            'Priority access to new reports',
        ],
        'cta'         => 'Subscribe Pro',
        'cta_href'    => '#',
        'accent'      => true,
    ],
    [
        'id'          => 'enterprise',
        'label'       => 'Enterprise Licensing',
        'headline'    => 'Institutional Partnership',
        'description' => 'Custom research briefs, organization-wide access, and direct analyst consultation for companies making nine-figure infrastructure decisions.',
        'includes'    => [
            'Everything in Premium',
            'Custom research requests',
            'Team & org-wide access',
            'Analyst Q&A sessions',
            'API data access',
        ],
        'cta'         => null,
        'cta_href'    => null,
        'accent'      => false,
    ],
];
?>

<section id="premium" class="relative overflow-hidden py-8 md:py-10 bg-root border-y border-border-subtle">
    <!-- Dot-grid texture -->
    <div class="pointer-events-none absolute inset-0 opacity-[0.025]"
         style="background-image: radial-gradient(circle, var(--color-content-secondary) 1px, transparent 1px); background-size: 24px 24px;"></div>

    <div class="container relative z-10">

        <!-- Section header -->
        <div class="text-center max-w-lg mx-auto mb-8 sa-reveal">
            <p class="sa-eyebrow mb-2">Institutional Access</p>
            <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-content-primary mb-2">
                Institutional Intelligence Access
            </h2>
            <p class="text-[13px] text-content-secondary leading-relaxed">
                From weekly research digests to organization-wide platform licensing — access the intelligence that drives capacity and CapEx planning.
            </p>
        </div>

        <!-- Tier cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
            <?php $stagger = 1; foreach ( $tiers as $tier ) :
                $card_class = $tier['accent']
                    ? 'border-accent-primary/30 bg-surface shadow-xl'
                    : 'border-border-subtle bg-surface/50';
            ?>
            <div class="relative flex flex-col sa-card p-5 sa-reveal sa-stagger-<?php echo $stagger++; ?> <?php echo $card_class; ?> transition-all duration-300 hover:-translate-y-0.5 hover:shadow-2xl">
                <?php if ( $tier['accent'] ) : ?>
                <div class="absolute top-0 left-6 right-6 h-[2px] rounded-full"
                     style="background: linear-gradient(to right, transparent, rgba(var(--color-accent-primary-rgb, 229 154 53) / 0.6), transparent);"></div>
                <?php endif; ?>

                <!-- Badge row -->
                <div class="flex items-center justify-between mb-4">
                    <?php $badge_bg = $tier['accent'] ? 'bg-accent-primary/15 text-accent-primary' : 'bg-white/5 text-content-secondary'; ?>
                    <span class="text-[10px] font-bold uppercase tracking-widest px-2.5 py-1 rounded <?php echo $badge_bg; ?>">
                        <?php echo esc_html( $tier['label'] ); ?>
                    </span>
                    <?php if ( $tier['accent'] ) : ?>
                    <span class="text-[9px] font-bold uppercase tracking-widest" style="color:var(--color-accent-primary); opacity:.8;">Most popular</span>
                    <?php endif; ?>
                </div>

                <h3 class="text-[15px] font-extrabold text-content-primary mb-2 leading-snug">
                    <?php echo esc_html( $tier['headline'] ); ?>
                </h3>
                <p class="text-[12px] text-content-secondary leading-relaxed mb-5 flex-1">
                    <?php echo esc_html( $tier['description'] ); ?>
                </p>

                <!-- Feature list -->
                <ul class="space-y-2 mb-6">
                    <?php foreach ( $tier['includes'] as $item ) :
                        $check_color = $tier['accent'] ? 'color:var(--color-accent-primary)' : 'color:var(--color-content-tertiary)';
                    ?>
                    <li class="flex items-start gap-2.5 text-[12px] font-medium text-content-secondary">
                        <svg class="h-3.5 w-3.5 flex-shrink-0 mt-0.5" viewBox="0 0 14 14" fill="none" style="<?php echo $check_color; ?>">
                            <path d="M2.5 7l3 3L11.5 3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <?php echo esc_html( $item ); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <!-- CTA -->
                <?php if ( $tier['id'] === 'enterprise' ) : ?>
                <form class="mt-auto space-y-2 pt-4 border-t border-border-subtle" onsubmit="event.preventDefault();">
                    <input type="email" placeholder="Work Email" required
                           class="w-full h-8 px-3 rounded bg-root border border-border-strong text-[12px] font-medium text-content-primary placeholder-content-tertiary focus:outline-none focus:border-accent-secondary/50 transition-colors">
                    <input type="text" placeholder="Organization" required
                           class="w-full h-8 px-3 rounded bg-root border border-border-strong text-[12px] font-medium text-content-primary placeholder-content-tertiary focus:outline-none focus:border-accent-secondary/50 transition-colors">
                    <button type="submit"
                            class="w-full inline-flex items-center justify-center h-9 rounded bg-accent-secondary text-root text-[12px] font-bold hover:bg-accent-secondary-hover active:scale-95 transition-all duration-200">
                        Request Institutional Access
                    </button>
                </form>
                <?php else :
                    $btn_class = $tier['accent']
                        ? 'bg-accent-primary text-root hover:bg-accent-primary-hover'
                        : 'border border-border-strong text-content-secondary hover:border-accent-primary/30 hover:text-content-primary';
                ?>
                <a href="<?php echo esc_url( $tier['cta_href'] ); ?>"
                   class="mt-auto inline-flex items-center justify-center h-10 rounded-lg text-[13px] font-bold transition-all duration-200 active:scale-95 <?php echo $btn_class; ?>">
                    <?php echo esc_html( $tier['cta'] ); ?>
                </a>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Trust strip -->
        <div class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2 sa-reveal">
            <?php
            $proofs = [
                'AI infrastructure intelligence',
                'Semiconductor supply chain tracking',
                'Hyperscaler ecosystem research',
                'Enterprise research workflows',
                'Institutional-grade analysis',
            ];
            foreach ( $proofs as $proof ) {
                echo '<div class="flex items-center gap-2 text-[11px] font-bold text-content-tertiary">';
                echo '  <svg class="h-3 w-3" viewBox="0 0 12 12" fill="none" style="color:var(--color-accent-primary);opacity:.6;"><path d="M2 6l2.5 2.5L10 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                echo '  ' . esc_html( $proof );
                echo '</div>';
            }
            ?>
        </div>

    </div>
</section>
