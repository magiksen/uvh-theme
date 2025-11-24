<?php
declare(strict_types=1);

/**
 * Custom Post Type para Mensajes de Contacto
 * 
 * @package UVH_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Registrar Custom Post Type para Contacto
 */
function uvh_register_contact_cpt(): void
{
    $labels = [
        'name'                  => __('Mensajes de Contacto', 'uvh-theme'),
        'singular_name'         => __('Mensaje de Contacto', 'uvh-theme'),
        'menu_name'             => __('Contacto', 'uvh-theme'),
        'name_admin_bar'        => __('Mensaje', 'uvh-theme'),
        'add_new'               => __('Añadir Nuevo', 'uvh-theme'),
        'add_new_item'          => __('Añadir Nuevo Mensaje', 'uvh-theme'),
        'new_item'              => __('Nuevo Mensaje', 'uvh-theme'),
        'edit_item'             => __('Ver Mensaje', 'uvh-theme'),
        'view_item'             => __('Ver Mensaje', 'uvh-theme'),
        'all_items'             => __('Todos los Mensajes', 'uvh-theme'),
        'search_items'          => __('Buscar Mensajes', 'uvh-theme'),
        'not_found'             => __('No se encontraron mensajes', 'uvh-theme'),
        'not_found_in_trash'    => __('No hay mensajes en la papelera', 'uvh-theme'),
    ];

    $args = [
        'labels'              => $labels,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-email-alt',
        'menu_position'       => 26,
        'capability_type'     => 'post',
        'capabilities'        => [
            'create_posts' => 'do_not_allow',
        ],
        'map_meta_cap'        => true,
        'hierarchical'        => false,
        'supports'            => ['title'],
        'has_archive'         => false,
        'rewrite'             => false,
        'query_var'           => false,
        'show_in_rest'        => false,
    ];

    register_post_type('uvh_contact', $args);
}
add_action('init', 'uvh_register_contact_cpt');

/**
 * Personalizar columnas en el listado de mensajes
 */
function uvh_contact_columns(array $columns): array
{
    return [
        'cb'              => $columns['cb'],
        'title'           => __('Nombre', 'uvh-theme'),
        'email'           => __('Email', 'uvh-theme'),
        'phone'           => __('Teléfono', 'uvh-theme'),
        'subject'         => __('Asunto', 'uvh-theme'),
        'status'          => __('Estado', 'uvh-theme'),
        'date'            => __('Fecha', 'uvh-theme'),
    ];
}
add_filter('manage_uvh_contact_posts_columns', 'uvh_contact_columns');

/**
 * Rellenar columnas personalizadas
 */
function uvh_contact_custom_column(string $column, int $post_id): void
{
    switch ($column) {
        case 'email':
            $email = get_post_meta($post_id, '_email', true);
            echo '<a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a>';
            break;
        case 'phone':
            echo esc_html(get_post_meta($post_id, '_phone', true));
            break;
        case 'subject':
            echo esc_html(get_post_meta($post_id, '_subject', true));
            break;
        case 'status':
            $status = get_post_meta($post_id, '_status', true);
            $status = $status ?: 'pending';
            $status_labels = [
                'pending' => '<span style="color: #f0ad4e;">⏳ Pendiente</span>',
                'read' => '<span style="color: #5bc0de;">👁️ Leído</span>',
                'replied' => '<span style="color: #5cb85c;">✓ Respondido</span>',
            ];
            echo $status_labels[$status] ?? $status_labels['pending'];
            break;
    }
}
add_action('manage_uvh_contact_posts_custom_column', 'uvh_contact_custom_column', 10, 2);

/**
 * Hacer columnas ordenables
 */
function uvh_contact_sortable_columns(array $columns): array
{
    $columns['email'] = 'email';
    $columns['subject'] = 'subject';
    $columns['status'] = 'status';
    return $columns;
}
add_filter('manage_edit-uvh_contact_sortable_columns', 'uvh_contact_sortable_columns');

/**
 * Agregar meta boxes personalizados
 */
function uvh_contact_meta_boxes(): void
{
    add_meta_box(
        'uvh_contact_details',
        __('Detalles del Mensaje', 'uvh-theme'),
        'uvh_contact_details_meta_box',
        'uvh_contact',
        'normal',
        'high'
    );

    add_meta_box(
        'uvh_contact_actions',
        __('Acciones', 'uvh-theme'),
        'uvh_contact_actions_meta_box',
        'uvh_contact',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'uvh_contact_meta_boxes');

/**
 * Meta box: Detalles del Mensaje
 */
function uvh_contact_details_meta_box(WP_Post $post): void
{
    $name = get_post_meta($post->ID, '_name', true);
    $email = get_post_meta($post->ID, '_email', true);
    $phone = get_post_meta($post->ID, '_phone', true);
    $subject = get_post_meta($post->ID, '_subject', true);
    $message = get_post_meta($post->ID, '_message', true);
    $ip = get_post_meta($post->ID, '_ip_address', true);
    $user_agent = get_post_meta($post->ID, '_user_agent', true);

    ?>
    <div style="padding: 15px;">
        <table class="form-table">
            <tbody>
                <tr>
                    <th style="width: 150px;"><strong>Nombre:</strong></th>
                    <td><?php echo esc_html($name); ?></td>
                </tr>
                <tr>
                    <th><strong>Email:</strong></th>
                    <td><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></td>
                </tr>
                <tr>
                    <th><strong>Teléfono:</strong></th>
                    <td><a href="tel:<?php echo esc_attr($phone); ?>"><?php echo esc_html($phone); ?></a></td>
                </tr>
                <tr>
                    <th><strong>Asunto:</strong></th>
                    <td><?php echo esc_html($subject); ?></td>
                </tr>
                <tr>
                    <th><strong>Mensaje:</strong></th>
                    <td>
                        <div style="background: #f5f5f5; padding: 15px; border-radius: 5px; border-left: 4px solid #CC0033;">
                            <?php echo nl2br(esc_html($message)); ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th><strong>IP:</strong></th>
                    <td><code><?php echo esc_html($ip); ?></code></td>
                </tr>
                <tr>
                    <th><strong>Navegador:</strong></th>
                    <td><small><?php echo esc_html($user_agent); ?></small></td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
}

/**
 * Meta box: Acciones
 */
function uvh_contact_actions_meta_box(WP_Post $post): void
{
    $status = get_post_meta($post->ID, '_status', true);
    $status = $status ?: 'pending';
    $email = get_post_meta($post->ID, '_email', true);
    $subject = get_post_meta($post->ID, '_subject', true);

    wp_nonce_field('uvh_contact_status_nonce', 'uvh_contact_status_nonce');
    ?>
    <div style="padding: 10px;">
        <p><strong>Estado del mensaje:</strong></p>
        <select name="uvh_contact_status" id="uvh_contact_status" style="width: 100%; padding: 8px; margin-bottom: 15px;">
            <option value="pending" <?php selected($status, 'pending'); ?>>⏳ Pendiente</option>
            <option value="read" <?php selected($status, 'read'); ?>>👁️ Leído</option>
            <option value="replied" <?php selected($status, 'replied'); ?>>✓ Respondido</option>
        </select>

        <p><strong>Acciones rápidas:</strong></p>
        <a href="mailto:<?php echo esc_attr($email); ?>?subject=Re: <?php echo esc_attr($subject); ?>" 
           class="button button-primary" style="width: 100%; text-align: center; margin-bottom: 8px;">
            📧 Responder por Email
        </a>
        
        <a href="mailto:<?php echo esc_attr($email); ?>" 
           class="button" style="width: 100%; text-align: center;">
            ✉️ Enviar Email
        </a>
    </div>
    <?php
}

/**
 * Guardar el estado del mensaje
 */
function uvh_save_contact_status(int $post_id): void
{
    // Verificar nonce
    if (!isset($_POST['uvh_contact_status_nonce']) || 
        !wp_verify_nonce($_POST['uvh_contact_status_nonce'], 'uvh_contact_status_nonce')) {
        return;
    }

    // Verificar autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Verificar permisos
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Guardar estado
    if (isset($_POST['uvh_contact_status'])) {
        update_post_meta($post_id, '_status', sanitize_text_field($_POST['uvh_contact_status']));
    }
}
add_action('save_post_uvh_contact', 'uvh_save_contact_status');

/**
 * Cambiar el título del post
 */
function uvh_contact_title(string $title, int $id): string
{
    if (get_post_type($id) === 'uvh_contact') {
        $name = get_post_meta($id, '_name', true);
        if ($name) {
            return $name;
        }
    }
    return $title;
}
add_filter('the_title', 'uvh_contact_title', 10, 2);

/**
 * Agregar contador de mensajes pendientes en el menú
 */
function uvh_contact_menu_badge(): void
{
    global $menu;
    
    $pending_count = wp_count_posts('uvh_contact');
    $pending = 0;
    
    if (isset($pending_count->publish)) {
        $args = [
            'post_type' => 'uvh_contact',
            'posts_per_page' => -1,
            'meta_query' => [
                'relation' => 'OR',
                [
                    'key' => '_status',
                    'value' => 'pending',
                    'compare' => '='
                ],
                [
                    'key' => '_status',
                    'compare' => 'NOT EXISTS'
                ]
            ]
        ];
        
        $query = new WP_Query($args);
        $pending = $query->found_posts;
    }
    
    if ($pending > 0) {
        foreach ($menu as $key => $value) {
            if ($menu[$key][2] === 'edit.php?post_type=uvh_contact') {
                $menu[$key][0] .= sprintf(
                    ' <span class="awaiting-mod count-%d"><span class="pending-count">%d</span></span>',
                    $pending,
                    $pending
                );
                break;
            }
        }
    }
}
add_action('admin_menu', 'uvh_contact_menu_badge', 999);
