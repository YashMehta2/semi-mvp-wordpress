<?php
/**
 * Semi MVP functions and definitions
 */

if ( ! function_exists( 'semi_theme_setup' ) ) :
    function semi_theme_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Register navigation menus.
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary Menu', 'semi-theme' ),
                'footer' => esc_html__( 'Footer Menu', 'semi-theme' ),
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Add support for core custom logo.
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

/**
 * Enqueue scripts and styles.
 */
function semi_theme_scripts() {
    wp_enqueue_style( 'semi-theme-style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'semi_theme_scripts' );

// Custom Routing for Next.js MVP parity
function semi_mvp_custom_routing($template) {
    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    if ($path === 'models') {
        return get_stylesheet_directory() . '/page-models.php';
    }
    if ($path === 'research') {
        return get_stylesheet_directory() . '/page-research.php';
    }
    if (strpos($path, 'models/') === 0) {
        set_query_var('model_slug', str_replace('models/', '', $path));
        return get_stylesheet_directory() . '/single-model.php';
    }
    return $template;
}
add_filter('template_include', 'semi_mvp_custom_routing', 99);
// Fix 404 status and Title for Custom Routes
add_action('pre_get_posts', function($query) {
    if (!is_admin() && $query->is_main_query()) {
        $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        if ($path === 'models' || $path === 'research' || strpos($path, 'models/') === 0) {
            // Prevent WP from thinking this is a 404
            $query->set('is_404', false);
            status_header(200);
        }
    }
});

add_filter('document_title_parts', function($title) {
    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    if ($path === 'models') {
        $title['title'] = 'Industry Models';
    } elseif ($path === 'research') {
        $title['title'] = 'Research Archive';
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
