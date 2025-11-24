<?php
declare(strict_types=1);

/**
 * UVH Theme Functions
 * 
 * @package UVH_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function uvh_theme_setup(): void
{
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Set post thumbnail size
    set_post_thumbnail_size(1200, 675, true);

    // Add custom image sizes
    add_image_size('uvh-hero', 1920, 1080, true);
    add_image_size('uvh-card', 600, 400, true);
    add_image_size('uvh-thumbnail', 300, 200, true);

    // Register navigation menus
    register_nav_menus([
        'primary' => __('Menú Principal', 'uvh-theme'),
        'footer' => __('Menú Footer', 'uvh-theme'),
    ]);

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for custom logo
    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Add support for editor styles
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'uvh_theme_setup');

/**
 * Set the content width in pixels
 */
function uvh_content_width(): void
{
    $GLOBALS['content_width'] = apply_filters('uvh_content_width', 1200);
}
add_action('after_setup_theme', 'uvh_content_width', 0);

/**
 * Enqueue scripts and styles
 */
function uvh_enqueue_scripts(): void
{
    // Google Fonts - Georama (tipografía oficial)
    wp_enqueue_style(
        'uvh-google-fonts',
        'https://fonts.googleapis.com/css2?family=Georama:wght@300;400;500;600;700;800&display=swap',
        [],
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'uvh-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );

    // Custom styles
    wp_enqueue_style(
        'uvh-custom-style',
        get_template_directory_uri() . '/assets/css/custom.css',
        ['uvh-style'],
        wp_get_theme()->get('Version')
    );

    // Hero Slider styles
    wp_enqueue_style(
        'uvh-hero-slider',
        get_template_directory_uri() . '/assets/css/hero-slider.css',
        ['uvh-custom-style'],
        wp_get_theme()->get('Version')
    );

    // 404 Page styles
    if (is_404()) {
        wp_enqueue_style(
            'uvh-404',
            get_template_directory_uri() . '/assets/css/404.css',
            ['uvh-custom-style'],
            wp_get_theme()->get('Version')
        );
    }

    // Main JavaScript
    wp_enqueue_script(
        'uvh-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );

    // Hero Slider JavaScript
    wp_enqueue_script(
        'uvh-hero-slider-js',
        get_template_directory_uri() . '/assets/js/hero-slider.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );

    // Add comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    // Localize script for AJAX
    wp_localize_script('uvh-main-js', 'uvhTheme', [
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('uvh-nonce'),
    ]);
}
add_action('wp_enqueue_scripts', 'uvh_enqueue_scripts');

/**
 * Register widget areas
 */
function uvh_widgets_init(): void
{
    register_sidebar([
        'name'          => __('Sidebar Principal', 'uvh-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Aparece en las páginas con sidebar.', 'uvh-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => __('Footer 1', 'uvh-theme'),
        'id'            => 'footer-1',
        'description'   => __('Primera columna del footer.', 'uvh-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ]);

    register_sidebar([
        'name'          => __('Footer 2', 'uvh-theme'),
        'id'            => 'footer-2',
        'description'   => __('Segunda columna del footer.', 'uvh-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ]);

    register_sidebar([
        'name'          => __('Footer 3', 'uvh-theme'),
        'id'            => 'footer-3',
        'description'   => __('Tercera columna del footer.', 'uvh-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ]);

    register_sidebar([
        'name'          => __('Footer 4', 'uvh-theme'),
        'id'            => 'footer-4',
        'description'   => __('Cuarta columna del footer.', 'uvh-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ]);
}
add_action('widgets_init', 'uvh_widgets_init');

/**
 * Custom excerpt length
 */
function uvh_excerpt_length(int $length): int
{
    return 30;
}
add_filter('excerpt_length', 'uvh_excerpt_length');

/**
 * Custom excerpt more
 */
function uvh_excerpt_more(string $more): string
{
    return '...';
}
add_filter('excerpt_more', 'uvh_excerpt_more');

/**
 * Add custom body classes
 */
function uvh_body_classes(array $classes): array
{
    // Add class if sidebar is active
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    // Add class for page template
    if (is_page_template()) {
        $classes[] = 'page-template';
    }

    return $classes;
}
add_filter('body_class', 'uvh_body_classes');

/**
 * Custom template tags for this theme
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions
 */
require_once get_template_directory() . '/inc/customizer.php';

/**
 * Hero slider
 */
require_once get_template_directory() . '/inc/hero-slider.php';

/**
 * Academic Programs CPT
 */
require_once get_template_directory() . '/inc/academic-programs.php';

/**
 * Testimonials CPT
 */
require_once get_template_directory() . '/inc/testimonials.php';

/**
 * Admission CPT
 */
require_once get_template_directory() . '/inc/admission-cpt.php';

/**
 * Admission Form Handler
 */
require_once get_template_directory() . '/inc/admission-handler.php';

/**
 * Contact CPT
 */
require_once get_template_directory() . '/inc/contact-cpt.php';

/**
 * Contact Form Handler
 */
require_once get_template_directory() . '/inc/contact-handler.php';

/**
 * Hide admin bar on frontend
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Remove /category/ prefix from category URLs
 */
function uvh_remove_category_prefix(): void
{
    add_rewrite_rule(
        '^noticias/?$',
        'index.php?category_name=noticias',
        'top'
    );
    
    add_rewrite_rule(
        '^noticias/page/([0-9]{1,})/?$',
        'index.php?category_name=noticias&paged=$matches[1]',
        'top'
    );
    
    add_rewrite_rule(
        '^noticias/([^/]+)/?$',
        'index.php?name=$matches[1]',
        'top'
    );
}
add_action('init', 'uvh_remove_category_prefix');

/**
 * Modify post permalink for posts in 'noticias' category
 */
function uvh_custom_post_link(string $permalink, WP_Post $post): string
{
    if ($post->post_type !== 'post' || $post->post_status !== 'publish') {
        return $permalink;
    }
    
    $categories = get_the_category($post->ID);
    
    foreach ($categories as $category) {
        if ($category->slug === 'noticias') {
            $permalink = home_url('/noticias/' . $post->post_name . '/');
            break;
        }
    }
    
    return $permalink;
}
add_filter('post_link', 'uvh_custom_post_link', 10, 2);
