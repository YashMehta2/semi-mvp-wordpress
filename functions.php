<?php
if ( ! function_exists( 'semi_theme_setup' ) ) :
    function semi_theme_setup() {
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary Menu', 'semi-theme' ),
                'footer' => esc_html__( 'Footer Menu', 'semi-theme' ),
            )
        );
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'semi_theme_setup' );
function semi_theme_scripts() {
    wp_enqueue_style( 'semi-theme-style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'semi_theme_scripts' );
function semi_mvp_custom_routing($template) {
    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    if ($path === 'models') {
        return get_stylesheet_directory() . '/page-models.php';
    }
    if ($path === 'research') {
        return get_stylesheet_directory() . '/page-research.php';
    }
    if ($path === 'products') {
        return get_stylesheet_directory() . '/page-products.php';
    }
    if ($path === 'products/preview') {
        return get_stylesheet_directory() . '/page-products-preview.php';
    }
    if (strpos($path, 'models/') === 0) {
        set_query_var('model_slug', str_replace('models/', '', $path));
        return get_stylesheet_directory() . '/single-model.php';
    }
    return $template;
}
add_filter('template_include', 'semi_mvp_custom_routing', 99);
add_action('pre_get_posts', function($query) {
    if (!is_admin() && $query->is_main_query()) {
        $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        if ($path === 'models' || $path === 'research' || $path === 'products' || $path === 'products/preview' || strpos($path, 'models/') === 0) {
            $query->set('is_404', false);
            status_header(200);
        }
    }
});
add_action('template_redirect', function() {
    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    if ($path === 'models' || $path === 'research' || $path === 'products' || $path === 'products/preview' || strpos($path, 'models/') === 0) {
        global $wp_query;
        $wp_query->is_404 = false;
        status_header(200);
    }
});
add_filter('document_title_parts', function($title) {
    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    if ($path === 'models') {
        $title['title'] = 'Industry Models';
    } elseif ($path === 'research') {
        $title['title'] = 'Research Archive';
    } elseif ($path === 'products') {
        $title['title'] = 'AI Infrastructure Data Products & Models';
    } elseif ($path === 'products/preview') {
        $title['title'] = 'Data Products Schema Explorer';
    } elseif (strpos($path, 'models/') === 0) {
        require_once get_stylesheet_directory() . '/data.php';
        $slug = str_replace('models/', '', $path);
        $models = get_semi_models();
        if (isset($models[$slug])) {
            $title['title'] = $models[$slug]['title'];
        }
    }
    return $title;
});
function semi_add_favicon() {
    echo '<link rel="icon" href="/favicon.png" type="image/png">';
    echo '<link rel="apple-touch-icon" href="/favicon.png">';
}
add_action('wp_head', 'semi_add_favicon');
