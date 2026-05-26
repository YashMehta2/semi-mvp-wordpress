<?php
/**
 * The front page template file
 */

get_header();
?>

<main id="primary" class="site-main">
    
    <!-- Layer 1 — Awareness -->
    <?php get_template_part( 'template-parts/hero' ); ?>
    
    <!-- Layer 2 — Credibility -->
    <?php get_template_part( 'template-parts/stats' ); ?>
    
    <!-- Layer 3 — Authority (Intelligence Models First) -->
    <?php get_template_part( 'template-parts/models-section' ); ?>
    
    <!-- Layer 4 — Content Discovery (Deep Dives) -->
    <?php get_template_part( 'template-parts/research-section' ); ?>
    
    <!-- Layer 5 — Product / Subscription Funnel -->
    <div id="premium">
        <?php get_template_part( 'template-parts/premium-layer' ); ?>
    </div>
    
    <!-- Layer 6 — Recent Publications -->
    <?php get_template_part( 'template-parts/latest-feed' ); ?>
    
    <!-- Layer 7 — Topic Browse -->
    <?php get_template_part( 'template-parts/categories' ); ?>
    
    <!-- Layer 8 — Conversion -->
    <?php get_template_part( 'template-parts/footer-cta' ); ?>

</main>

<?php
get_footer();
