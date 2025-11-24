<?php
declare(strict_types=1);

if (!defined('ABSPATH')) exit;

/**
 * Hero Slider Custom Post Type
 * 
 * @package UVH_Theme
 * @since 1.0.0
 */

/**
 * Register Hero Slides Custom Post Type
 */
function uvh_register_hero_slides_cpt(): void
{
    $labels = [
        'name'                  => __('Hero Slides', 'uvh-theme'),
        'singular_name'         => __('Hero Slide', 'uvh-theme'),
        'menu_name'             => __('Hero Slider', 'uvh-theme'),
        'add_new'               => __('Agregar Nuevo', 'uvh-theme'),
        'add_new_item'          => __('Agregar Nuevo Slide', 'uvh-theme'),
        'edit_item'             => __('Editar Slide', 'uvh-theme'),
        'new_item'              => __('Nuevo Slide', 'uvh-theme'),
        'view_item'             => __('Ver Slide', 'uvh-theme'),
        'search_items'          => __('Buscar Slides', 'uvh-theme'),
        'not_found'             => __('No se encontraron slides', 'uvh-theme'),
        'not_found_in_trash'    => __('No hay slides en la papelera', 'uvh-theme'),
        'all_items'             => __('Todos los Slides', 'uvh-theme'),
    ];

    $args = [
        'labels'              => $labels,
        'public'              => false,
        'publicly_queryable'  => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => false,
        'rewrite'             => false,
        'capability_type'     => 'post',
        'has_archive'         => false,
        'hierarchical'        => false,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-images-alt2',
        'supports'            => ['title', 'editor', 'thumbnail'],
        'show_in_rest'        => true,
    ];

    register_post_type('hero_slide', $args);
}
add_action('init', 'uvh_register_hero_slides_cpt');

/**
 * Add Meta Boxes for Hero Slides
 */
function uvh_add_hero_slide_meta_boxes(): void
{
    add_meta_box(
        'uvh_hero_slide_details',
        __('Detalles del Slide', 'uvh-theme'),
        'uvh_hero_slide_meta_box_callback',
        'hero_slide',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'uvh_add_hero_slide_meta_boxes');

/**
 * Meta Box Callback
 */
function uvh_hero_slide_meta_box_callback($post): void
{
    wp_nonce_field('uvh_save_hero_slide_meta', 'uvh_hero_slide_nonce');

    $subtitle = get_post_meta($post->ID, '_uvh_slide_subtitle', true);
    $button1_text = get_post_meta($post->ID, '_uvh_slide_button1_text', true);
    $button1_link = get_post_meta($post->ID, '_uvh_slide_button1_link', true);
    $button2_text = get_post_meta($post->ID, '_uvh_slide_button2_text', true);
    $button2_link = get_post_meta($post->ID, '_uvh_slide_button2_link', true);
    $slide_order = get_post_meta($post->ID, '_uvh_slide_order', true);

    ?>
    <div style="margin-bottom: 15px;">
        <label for="uvh_slide_subtitle" style="display: block; margin-bottom: 5px; font-weight: bold;">
            <?php esc_html_e('Subtítulo:', 'uvh-theme'); ?>
        </label>
        <textarea 
            id="uvh_slide_subtitle" 
            name="uvh_slide_subtitle" 
            rows="3" 
            style="width: 100%;"
        ><?php echo esc_textarea($subtitle); ?></textarea>
        <p class="description"><?php esc_html_e('Texto descriptivo que aparece debajo del título', 'uvh-theme'); ?></p>
    </div>

    <div style="margin-bottom: 15px;">
        <label for="uvh_slide_order" style="display: block; margin-bottom: 5px; font-weight: bold;">
            <?php esc_html_e('Orden:', 'uvh-theme'); ?>
        </label>
        <input 
            type="number" 
            id="uvh_slide_order" 
            name="uvh_slide_order" 
            value="<?php echo esc_attr($slide_order ?: '0'); ?>" 
            min="0"
            style="width: 100px;"
        >
        <p class="description"><?php esc_html_e('Número menor aparece primero (0 = primero)', 'uvh-theme'); ?></p>
    </div>

    <hr style="margin: 20px 0;">

    <h3><?php esc_html_e('Botón 1 (Primario)', 'uvh-theme'); ?></h3>
    <div style="margin-bottom: 15px;">
        <label for="uvh_slide_button1_text" style="display: block; margin-bottom: 5px; font-weight: bold;">
            <?php esc_html_e('Texto del Botón 1:', 'uvh-theme'); ?>
        </label>
        <input 
            type="text" 
            id="uvh_slide_button1_text" 
            name="uvh_slide_button1_text" 
            value="<?php echo esc_attr($button1_text); ?>" 
            style="width: 100%;"
        >
    </div>

    <div style="margin-bottom: 15px;">
        <label for="uvh_slide_button1_link" style="display: block; margin-bottom: 5px; font-weight: bold;">
            <?php esc_html_e('Enlace del Botón 1:', 'uvh-theme'); ?>
        </label>
        <input 
            type="url" 
            id="uvh_slide_button1_link" 
            name="uvh_slide_button1_link" 
            value="<?php echo esc_url($button1_link); ?>" 
            style="width: 100%;"
            placeholder="https://"
        >
    </div>

    <hr style="margin: 20px 0;">

    <h3><?php esc_html_e('Botón 2 (Secundario)', 'uvh-theme'); ?></h3>
    <div style="margin-bottom: 15px;">
        <label for="uvh_slide_button2_text" style="display: block; margin-bottom: 5px; font-weight: bold;">
            <?php esc_html_e('Texto del Botón 2:', 'uvh-theme'); ?>
        </label>
        <input 
            type="text" 
            id="uvh_slide_button2_text" 
            name="uvh_slide_button2_text" 
            value="<?php echo esc_attr($button2_text); ?>" 
            style="width: 100%;"
        >
    </div>

    <div style="margin-bottom: 15px;">
        <label for="uvh_slide_button2_link" style="display: block; margin-bottom: 5px; font-weight: bold;">
            <?php esc_html_e('Enlace del Botón 2:', 'uvh-theme'); ?>
        </label>
        <input 
            type="url" 
            id="uvh_slide_button2_link" 
            name="uvh_slide_button2_link" 
            value="<?php echo esc_url($button2_link); ?>" 
            style="width: 100%;"
            placeholder="https://"
        >
    </div>

    <hr style="margin: 20px 0;">

    <div style="background: #f0f0f1; padding: 15px; border-left: 4px solid #2271b1;">
        <h4 style="margin-top: 0;"><?php esc_html_e('Instrucciones:', 'uvh-theme'); ?></h4>
        <ul style="margin: 0;">
            <li><?php esc_html_e('El título se configura en el campo "Título" arriba', 'uvh-theme'); ?></li>
            <li><?php esc_html_e('La imagen de fondo se configura en "Imagen destacada" (recomendado: 1920x1080px)', 'uvh-theme'); ?></li>
            <li><?php esc_html_e('Puedes dejar los botones vacíos si no los necesitas', 'uvh-theme'); ?></li>
            <li><?php esc_html_e('El orden determina la secuencia de aparición en el slider', 'uvh-theme'); ?></li>
        </ul>
    </div>
    <?php
}

/**
 * Save Meta Box Data
 */
function uvh_save_hero_slide_meta(int $post_id): void
{
    // Verify nonce
    if (!isset($_POST['uvh_hero_slide_nonce']) || 
        !wp_verify_nonce($_POST['uvh_hero_slide_nonce'], 'uvh_save_hero_slide_meta')) {
        return;
    }

    // Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save subtitle
    if (isset($_POST['uvh_slide_subtitle'])) {
        update_post_meta($post_id, '_uvh_slide_subtitle', sanitize_textarea_field($_POST['uvh_slide_subtitle']));
    }

    // Save order
    if (isset($_POST['uvh_slide_order'])) {
        update_post_meta($post_id, '_uvh_slide_order', absint($_POST['uvh_slide_order']));
    }

    // Save button 1
    if (isset($_POST['uvh_slide_button1_text'])) {
        update_post_meta($post_id, '_uvh_slide_button1_text', sanitize_text_field($_POST['uvh_slide_button1_text']));
    }
    if (isset($_POST['uvh_slide_button1_link'])) {
        update_post_meta($post_id, '_uvh_slide_button1_link', esc_url_raw($_POST['uvh_slide_button1_link']));
    }

    // Save button 2
    if (isset($_POST['uvh_slide_button2_text'])) {
        update_post_meta($post_id, '_uvh_slide_button2_text', sanitize_text_field($_POST['uvh_slide_button2_text']));
    }
    if (isset($_POST['uvh_slide_button2_link'])) {
        update_post_meta($post_id, '_uvh_slide_button2_link', esc_url_raw($_POST['uvh_slide_button2_link']));
    }
}
add_action('save_post_hero_slide', 'uvh_save_hero_slide_meta');

/**
 * Customize Admin Columns
 */
function uvh_hero_slide_columns(array $columns): array
{
    $new_columns = [];
    $new_columns['cb'] = $columns['cb'];
    $new_columns['featured_image'] = __('Imagen', 'uvh-theme');
    $new_columns['title'] = $columns['title'];
    $new_columns['subtitle'] = __('Subtítulo', 'uvh-theme');
    $new_columns['order'] = __('Orden', 'uvh-theme');
    $new_columns['date'] = $columns['date'];
    
    return $new_columns;
}
add_filter('manage_hero_slide_posts_columns', 'uvh_hero_slide_columns');

/**
 * Populate Custom Columns
 */
function uvh_hero_slide_column_content(string $column, int $post_id): void
{
    switch ($column) {
        case 'featured_image':
            if (has_post_thumbnail($post_id)) {
                echo get_the_post_thumbnail($post_id, [80, 80]);
            } else {
                echo '—';
            }
            break;
        case 'subtitle':
            $subtitle = get_post_meta($post_id, '_uvh_slide_subtitle', true);
            echo $subtitle ? esc_html(wp_trim_words($subtitle, 10)) : '—';
            break;
        case 'order':
            $order = get_post_meta($post_id, '_uvh_slide_order', true);
            echo esc_html($order ?: '0');
            break;
    }
}
add_action('manage_hero_slide_posts_custom_column', 'uvh_hero_slide_column_content', 10, 2);

/**
 * Make Order Column Sortable
 */
function uvh_hero_slide_sortable_columns(array $columns): array
{
    $columns['order'] = 'slide_order';
    return $columns;
}
add_filter('manage_edit-hero_slide_sortable_columns', 'uvh_hero_slide_sortable_columns');

/**
 * Admin Notice for Hero Slider
 */
function uvh_hero_slider_admin_notice(): void
{
    $screen = get_current_screen();
    if ($screen && $screen->post_type === 'hero_slide') {
        $slides_count = wp_count_posts('hero_slide');
        if ($slides_count->publish < 1) {
            ?>
            <div class="notice notice-info">
                <p>
                    <strong><?php esc_html_e('¡Bienvenido al Hero Slider!', 'uvh-theme'); ?></strong><br>
                    <?php esc_html_e('Crea tu primer slide para que aparezca en la página de inicio. Recomendamos tener entre 3-5 slides.', 'uvh-theme'); ?>
                </p>
            </div>
            <?php
        }
    }
}
add_action('admin_notices', 'uvh_hero_slider_admin_notice');
