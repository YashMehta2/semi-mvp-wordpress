<?php
get_header();
?>
<main id="primary" class="site-main">
    <?php get_template_part( 'template-parts/hero' ); ?>
    <?php get_template_part( 'template-parts/stats' ); ?>
    <?php get_template_part( 'template-parts/models-section' ); ?>
    <?php get_template_part( 'template-parts/research-section' ); ?>
    <div id="premium">
        <?php get_template_part( 'template-parts/premium-layer' ); ?>
    </div>
    <?php get_template_part( 'template-parts/latest-feed' ); ?>
    <?php get_template_part( 'template-parts/categories' ); ?>
    <?php get_template_part( 'template-parts/footer-cta' ); ?>
</main>
<?php
get_footer();
