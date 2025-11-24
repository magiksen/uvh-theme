<?php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Testimonials Custom Post Type
 *
 * @package UVH_Theme
 */

/**
 * Register Testimonials CPT
 */
function uvh_register_testimonials_cpt(): void
{
    $labels = [
        'name'                  => __('Testimonios', 'uvh-theme'),
        'singular_name'         => __('Testimonio', 'uvh-theme'),
        'menu_name'             => __('Testimonios UVH', 'uvh-theme'),
        'add_new'               => __('Agregar Nuevo', 'uvh-theme'),
        'add_new_item'          => __('Agregar Nuevo Testimonio', 'uvh-theme'),
        'edit_item'             => __('Editar Testimonio', 'uvh-theme'),
        'new_item'              => __('Nuevo Testimonio', 'uvh-theme'),
        'view_item'             => __('Ver Testimonio', 'uvh-theme'),
        'search_items'          => __('Buscar Testimonios', 'uvh-theme'),
        'not_found'             => __('No se encontraron testimonios', 'uvh-theme'),
        'not_found_in_trash'    => __('No hay testimonios en la papelera', 'uvh-theme'),
        'all_items'             => __('Todos los Testimonios', 'uvh-theme'),
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
        'menu_position'       => 21,
        'menu_icon'           => 'dashicons-format-quote',
        'supports'            => ['title', 'editor', 'thumbnail'],
        'show_in_rest'        => true,
    ];

    register_post_type('testimonial', $args);
}
add_action('init', 'uvh_register_testimonials_cpt');

/**
 * Add Meta Box for Testimonials
 */
function uvh_add_testimonial_meta_box(): void
{
    add_meta_box(
        'uvh_testimonial_details',
        __('Detalles del Testimonio', 'uvh-theme'),
        'uvh_testimonial_meta_box_callback',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'uvh_add_testimonial_meta_box');

/**
 * Meta Box Callback
 */
function uvh_testimonial_meta_box_callback($post): void
{
    wp_nonce_field('uvh_save_testimonial_meta', 'uvh_testimonial_nonce');

    $role_program = get_post_meta($post->ID, '_uvh_testimonial_role_program', true);
    $rating       = get_post_meta($post->ID, '_uvh_testimonial_rating', true);

    ?>
    <div style="margin-bottom: 15px;">
        <label for="uvh_testimonial_role_program" style="display:block;margin-bottom:5px;font-weight:bold;">
            <?php esc_html_e('Programa / Rol del estudiante', 'uvh-theme'); ?>
        </label>
        <input
            type="text"
            id="uvh_testimonial_role_program"
            name="uvh_testimonial_role_program"
            value="<?php echo esc_attr($role_program); ?>"
            style="width:100%;"
        >
        <p class="description"><?php esc_html_e('Ejemplo: Ingeniera en Petróleo - Promoción 2020', 'uvh-theme'); ?></p>
    </div>

    <div style="margin-bottom: 15px;">
        <label for="uvh_testimonial_rating" style="display:block;margin-bottom:5px;font-weight:bold;">
            <?php esc_html_e('Rating (1-5 estrellas)', 'uvh-theme'); ?>
        </label>
        <input
            type="number"
            id="uvh_testimonial_rating"
            name="uvh_testimonial_rating"
            value="<?php echo esc_attr($rating ?: '5'); ?>"
            min="1"
            max="5"
            style="width:100px;"
        >
        <p class="description"><?php esc_html_e('Se mostrará como ★★★★★ según el valor indicado.', 'uvh-theme'); ?></p>
    </div>

    <hr style="margin:20px 0;">

    <div style="background:#f0f0f1;padding:15px;border-left:4px solid #2271b1;">
        <h4 style="margin-top:0;"><?php esc_html_e('Instrucciones:', 'uvh-theme'); ?></h4>
        <ul style="margin:0;">
            <li><?php esc_html_e('El título del testimonio debe ser el nombre del estudiante.', 'uvh-theme'); ?></li>
            <li><?php esc_html_e('El contenido (editor) debe contener el texto del testimonio.', 'uvh-theme'); ?></li>
            <li><?php esc_html_e('La imagen del estudiante se configura como Imagen destacada (recomendado 100x100 SVG).', 'uvh-theme'); ?></li>
        </ul>
    </div>
    <?php
}

/**
 * Save Testimonial Meta
 */
function uvh_save_testimonial_meta(int $post_id): void
{
    if (!isset($_POST['uvh_testimonial_nonce']) ||
        !wp_verify_nonce($_POST['uvh_testimonial_nonce'], 'uvh_save_testimonial_meta')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['uvh_testimonial_role_program'])) {
        update_post_meta(
            $post_id,
            '_uvh_testimonial_role_program',
            sanitize_text_field($_POST['uvh_testimonial_role_program'])
        );
    }

    if (isset($_POST['uvh_testimonial_rating'])) {
        $rating = (int) $_POST['uvh_testimonial_rating'];
        $rating = max(1, min(5, $rating));
        update_post_meta($post_id, '_uvh_testimonial_rating', $rating);
    }
}
add_action('save_post_testimonial', 'uvh_save_testimonial_meta');

/**
 * Admin Columns
 */
function uvh_testimonial_columns(array $columns): array
{
    $new_columns = [];
    $new_columns['cb']      = $columns['cb'];
    $new_columns['avatar']  = __('Avatar', 'uvh-theme');
    $new_columns['title']   = $columns['title'];
    $new_columns['rating']  = __('Rating', 'uvh-theme');
    $new_columns['date']    = $columns['date'];

    return $new_columns;
}
add_filter('manage_testimonial_posts_columns', 'uvh_testimonial_columns');

function uvh_testimonial_column_content(string $column, int $post_id): void
{
    switch ($column) {
        case 'avatar':
            if (has_post_thumbnail($post_id)) {
                echo get_the_post_thumbnail($post_id, [60, 60]);
            } else {
                echo '—';
            }
            break;
        case 'rating':
            $rating = (int) get_post_meta($post_id, '_uvh_testimonial_rating', true) ?: 5;
            echo str_repeat('★', $rating);
            break;
    }
}
add_action('manage_testimonial_posts_custom_column', 'uvh_testimonial_column_content', 10, 2);
