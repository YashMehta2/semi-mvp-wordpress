<?php
/**
 * Template part — Stats: compact monospace credibility strip with hover animations
 */
$stats = [
    [ 'index' => '01', 'value' => 'Compute',  'label' => 'AI Infrastructure & GPU Supply' ],
    [ 'index' => '02', 'value' => 'Capacity', 'label' => 'Semiconductor Supply Chain' ],
    [ 'index' => '03', 'value' => 'CapEx',    'label' => 'Hyperscaler Research' ],
    [ 'index' => '04', 'value' => 'Analysis', 'label' => 'Institutional Workflows' ],
];
?>
<section class="border-b border-border-subtle bg-root">
    <div class="container">
        <div class="grid grid-cols-2 md:grid-cols-4">
            <?php foreach ( $stats as $i => $stat ) :
                $classes  = 'relative py-4 px-5 group cursor-default overflow-hidden sa-reveal sa-stagger-' . ( $i + 1 );
                $classes .= ( $i % 2 === 0 ) ? ' border-r border-border-subtle' : '';
                $classes .= ( $i < 3 )        ? ' md:border-r md:border-border-subtle' : '';
                $classes .= ( $i >= 2 )        ? ' border-t border-border-subtle md:border-t-0' : '';
            ?>
            <div class="<?php echo $classes; ?>">
                <!-- Hover bg fill -->
                <div class="absolute inset-0 bg-surface opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                <div class="relative z-10">
                    <span class="font-mono text-[9px] font-bold tracking-[0.15em] text-content-tertiary select-none">
                        <?php echo esc_html( $stat['index'] ); ?>
                    </span>
                    <div class="text-xl sm:text-2xl md:text-[26px] font-extrabold text-accent-secondary tracking-tight mt-0.5 group-hover:text-content-primary transition-colors duration-200">
                        <?php echo esc_html( $stat['value'] ); ?>
                    </div>
                    <div class="text-[10px] text-content-tertiary mt-1 font-bold tracking-[0.1em] uppercase">
                        <?php echo esc_html( $stat['label'] ); ?>
                    </div>
                </div>

                <!-- Bottom accent bar -->
                <div class="absolute bottom-0 left-0 h-[2px] w-full bg-accent-secondary scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
