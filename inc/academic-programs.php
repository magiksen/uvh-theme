<?php
declare(strict_types=1);

if (!defined('ABSPATH')) exit;

/**
 * Academic Programs Custom Post Type
 * 
 * @package UVH_Theme
 * @since 1.0.0
 */

/**
 * Register Academic Programs Custom Post Type
 */
function uvh_register_academic_programs_cpt(): void
{
    $labels = [
        'name'                  => __('Programas Académicos', 'uvh-theme'),
        'singular_name'         => __('Programa Académico', 'uvh-theme'),
        'menu_name'             => __('Oferta Académica', 'uvh-theme'),
        'add_new'               => __('Agregar Nuevo', 'uvh-theme'),
        'add_new_item'          => __('Agregar Nuevo Programa', 'uvh-theme'),
        'edit_item'             => __('Editar Programa', 'uvh-theme'),
        'new_item'              => __('Nuevo Programa', 'uvh-theme'),
        'view_item'             => __('Ver Programa', 'uvh-theme'),
        'search_items'          => __('Buscar Programas', 'uvh-theme'),
        'not_found'             => __('No se encontraron programas', 'uvh-theme'),
        'not_found_in_trash'    => __('No hay programas en la papelera', 'uvh-theme'),
        'all_items'             => __('Todos los Programas', 'uvh-theme'),
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
        'menu_icon'           => 'dashicons-welcome-learn-more',
        'supports'            => ['title'],
        'show_in_rest'        => true,
    ];

    register_post_type('academic_program', $args);
}
add_action('init', 'uvh_register_academic_programs_cpt');

/**
 * Add Meta Boxes for Academic Programs
 */
function uvh_add_academic_program_meta_boxes(): void
{
    add_meta_box(
        'uvh_academic_program_details',
        __('Detalles del Programa', 'uvh-theme'),
        'uvh_academic_program_meta_box_callback',
        'academic_program',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'uvh_add_academic_program_meta_boxes');

/**
 * Meta Box Callback
 */
function uvh_academic_program_meta_box_callback($post): void
{
    wp_nonce_field('uvh_save_academic_program_meta', 'uvh_academic_program_nonce');

    $active = get_post_meta($post->ID, '_uvh_program_active', true);
    $active = $active !== '' ? $active : '1';
    $subtitle = get_post_meta($post->ID, '_uvh_program_subtitle', true);
    $icon = get_post_meta($post->ID, '_uvh_program_icon', true);
    $button_url = get_post_meta($post->ID, '_uvh_program_button_url', true);
    $order = get_post_meta($post->ID, '_uvh_program_order', true);
    
    // Lista de características (hasta 6)
    $features = [];
    for ($i = 1; $i <= 6; $i++) {
        $features[$i] = get_post_meta($post->ID, "_uvh_program_feature_{$i}", true);
    }

    ?>
    <!-- Estado Activo/Inactivo -->
    <div style="margin-bottom: 20px; padding: 15px; background: #f0f0f1; border-left: 4px solid #2271b1;">
        <label style="display: flex; align-items: center; cursor: pointer;">
            <input 
                type="checkbox" 
                id="uvh_program_active" 
                name="uvh_program_active" 
                value="1"
                <?php checked($active, '1'); ?>
                style="margin-right: 8px; width: 20px; height: 20px;"
            >
            <span style="font-weight: bold; font-size: 16px;">
                <?php esc_html_e('Programa Activo', 'uvh-theme'); ?>
            </span>
        </label>
        <p class="description" style="margin: 8px 0 0 28px;">
            <?php esc_html_e('Desmarca para ocultar este programa sin eliminarlo.', 'uvh-theme'); ?>
        </p>
    </div>

    <!-- Subtítulo -->
    <div style="margin-bottom: 15px;">
        <label for="uvh_program_subtitle" style="display: block; margin-bottom: 5px; font-weight: bold;">
            <?php esc_html_e('Subtítulo / Descripción Corta:', 'uvh-theme'); ?>
        </label>
        <textarea 
            id="uvh_program_subtitle" 
            name="uvh_program_subtitle" 
            rows="2" 
            style="width: 100%;"
            placeholder="Ej: Forma profesionales en el área de..."
        ><?php echo esc_textarea($subtitle); ?></textarea>
    </div>

    <!-- Icono -->
    <div style="margin-bottom: 15px;">
        <label for="uvh_program_icon" style="display: block; margin-bottom: 5px; font-weight: bold;">
            <?php esc_html_e('Icono:', 'uvh-theme'); ?>
        </label>
        <select id="uvh_program_icon" name="uvh_program_icon" style="width: 100%;">
            <option value=""><?php esc_html_e('Seleccionar icono...', 'uvh-theme'); ?></option>
            <!-- Académicos / Universitarios -->
            <option value="🎓" <?php selected($icon, '🎓'); ?>>🎓 <?php esc_html_e('Birrete (Graduación)', 'uvh-theme'); ?></option>
            <option value="📚" <?php selected($icon, '📚'); ?>>📚 <?php esc_html_e('Libros (Biblioteca)', 'uvh-theme'); ?></option>
            <option value="📖" <?php selected($icon, '📖'); ?>>📖 <?php esc_html_e('Libro Abierto (Estudio)', 'uvh-theme'); ?></option>
            <option value="🏛️" <?php selected($icon, '🏛️'); ?>>🏛️ <?php esc_html_e('Universidad (Institución)', 'uvh-theme'); ?></option>
            <option value="�" <?php selected($icon, '�'); ?>>� <?php esc_html_e('Pergamino (Diploma)', 'uvh-theme'); ?></option>
            <option value="🎯" <?php selected($icon, '🎯'); ?>>🎯 <?php esc_html_e('Diana (Especialización)', 'uvh-theme'); ?></option>
            <option value="🏆" <?php selected($icon, '🏆'); ?>>🏆 <?php esc_html_e('Trofeo (Excelencia)', 'uvh-theme'); ?></option>
            <option value="⭐" <?php selected($icon, '⭐'); ?>>⭐ <?php esc_html_e('Estrella (Destacado)', 'uvh-theme'); ?></option>
            <!-- Ciencia e Investigación -->
            <option value="🔬" <?php selected($icon, '🔬'); ?>>🔬 <?php esc_html_e('Microscopio (Investigación)', 'uvh-theme'); ?></option>
            <option value="🧪" <?php selected($icon, '🧪'); ?>>🧪 <?php esc_html_e('Matraz (Laboratorio)', 'uvh-theme'); ?></option>
            <option value="⚗️" <?php selected($icon, '⚗️'); ?>>⚗️ <?php esc_html_e('Alambique (Química)', 'uvh-theme'); ?></option>
            <option value="🧬" <?php selected($icon, '🧬'); ?>>🧬 <?php esc_html_e('ADN (Biotecnología)', 'uvh-theme'); ?></option>
            <option value="🔭" <?php selected($icon, '🔭'); ?>>🔭 <?php esc_html_e('Telescopio (Astronomía)', 'uvh-theme'); ?></option>
            <!-- Energía e Hidrocarburos -->
            <option value="�️" <?php selected($icon, '�️'); ?>>�️ <?php esc_html_e('Barril (Petróleo)', 'uvh-theme'); ?></option>
            <option value="⛽" <?php selected($icon, '⛽'); ?>>⛽ <?php esc_html_e('Combustible (Gasolina)', 'uvh-theme'); ?></option>
            <option value="�" <?php selected($icon, '�'); ?>>� <?php esc_html_e('Gota (Líquidos)', 'uvh-theme'); ?></option>
            <option value="🔥" <?php selected($icon, '🔥'); ?>>🔥 <?php esc_html_e('Fuego (Gas/Energía)', 'uvh-theme'); ?></option>
            <option value="⚡" <?php selected($icon, '⚡'); ?>>⚡ <?php esc_html_e('Rayo (Electricidad)', 'uvh-theme'); ?></option>
            <option value="�" <?php selected($icon, '�'); ?>>� <?php esc_html_e('Bombilla (Innovación)', 'uvh-theme'); ?></option>
            <!-- Ingeniería y Tecnología -->
            <option value="⚙️" <?php selected($icon, '⚙️'); ?>>⚙️ <?php esc_html_e('Engranaje (Ingeniería)', 'uvh-theme'); ?></option>
            <option value="🔧" <?php selected($icon, '🔧'); ?>>🔧 <?php esc_html_e('Llave (Mecánica)', 'uvh-theme'); ?></option>
            <option value="🏗️" <?php selected($icon, '�️'); ?>>🏗️ <?php esc_html_e('Construcción (Obras)', 'uvh-theme'); ?></option>
            <option value="💻" <?php selected($icon, '💻'); ?>>💻 <?php esc_html_e('Computadora (Tecnología)', 'uvh-theme'); ?></option>
            <option value="📊" <?php selected($icon, '📊'); ?>>📊 <?php esc_html_e('Gráfico (Análisis)', 'uvh-theme'); ?></option>
            <!-- Geología y Medio Ambiente -->
            <option value="��" <?php selected($icon, '🌍'); ?>>🌍 <?php esc_html_e('Globo (Geofísica)', 'uvh-theme'); ?></option>
            <option value="🌎" <?php selected($icon, '🌎'); ?>>🌎 <?php esc_html_e('Tierra (Internacional)', 'uvh-theme'); ?></option>
            <option value="🏔️" <?php selected($icon, '🏔️'); ?>>🏔️ <?php esc_html_e('Montaña (Geología)', 'uvh-theme'); ?></option>
            <option value="🌿" <?php selected($icon, '🌿'); ?>>🌿 <?php esc_html_e('Planta (Ecología)', 'uvh-theme'); ?></option>
            <option value="🌊" <?php selected($icon, '🌊'); ?>>🌊 <?php esc_html_e('Ola (Oceanografía)', 'uvh-theme'); ?></option>
            <!-- Gestión y Negocios -->
            <option value="💼" <?php selected($icon, '💼'); ?>>💼 <?php esc_html_e('Maletín (Gestión)', 'uvh-theme'); ?></option>
            <option value="�" <?php selected($icon, '�'); ?>>� <?php esc_html_e('Tendencia (Economía)', 'uvh-theme'); ?></option>
            <option value="🤝" <?php selected($icon, '🤝'); ?>>🤝 <?php esc_html_e('Apretón (Convenios)', 'uvh-theme'); ?></option>
            <!-- Salud y Seguridad -->
            <option value="🏥" <?php selected($icon, '🏥'); ?>>🏥 <?php esc_html_e('Hospital (Salud)', 'uvh-theme'); ?></option>
            <option value="⚕️" <?php selected($icon, '⚕️'); ?>>⚕️ <?php esc_html_e('Caduceo (Medicina)', 'uvh-theme'); ?></option>
            <option value="🛡️" <?php selected($icon, '🛡️'); ?>>🛡️ <?php esc_html_e('Escudo (Seguridad)', 'uvh-theme'); ?></option>
            <option value="🦺" <?php selected($icon, '🦺'); ?>>🦺 <?php esc_html_e('Chaleco (Seguridad Industrial)', 'uvh-theme'); ?></option>
        </select>
        <p class="description"><?php esc_html_e('Selecciona el icono que mejor represente el programa.', 'uvh-theme'); ?></p>
    </div>

    <!-- Orden -->
    <div style="margin-bottom: 15px;">
        <label for="uvh_program_order" style="display: block; margin-bottom: 5px; font-weight: bold;">
            <?php esc_html_e('Orden:', 'uvh-theme'); ?>
        </label>
        <input 
            type="number" 
            id="uvh_program_order" 
            name="uvh_program_order" 
            value="<?php echo esc_attr($order ?: '0'); ?>" 
            min="0"
            style="width: 100px;"
        >
        <p class="description"><?php esc_html_e('Número menor aparece primero (0 = primero)', 'uvh-theme'); ?></p>
    </div>

    <hr style="margin: 20px 0;">

    <!-- Características del Programa -->
    <h3><?php esc_html_e('Características del Programa', 'uvh-theme'); ?></h3>
    <p class="description" style="margin-bottom: 15px;">
        <?php esc_html_e('Agrega hasta 6 características o puntos destacados del programa.', 'uvh-theme'); ?>
    </p>

    <?php for ($i = 1; $i <= 6; $i++) : ?>
    <div style="margin-bottom: 10px;">
        <label for="uvh_program_feature_<?php echo $i; ?>" style="display: block; margin-bottom: 5px; font-weight: bold;">
            <?php echo sprintf(esc_html__('Característica %d:', 'uvh-theme'), $i); ?>
        </label>
        <input 
            type="text" 
            id="uvh_program_feature_<?php echo $i; ?>" 
            name="uvh_program_feature_<?php echo $i; ?>" 
            value="<?php echo esc_attr($features[$i]); ?>" 
            style="width: 100%;"
            placeholder="<?php echo esc_attr(sprintf(__('Ej: %s', 'uvh-theme'), $i === 1 ? 'Duración: 4 años' : ($i === 2 ? 'Modalidad: Presencial' : 'Título: Licenciado(a)'))); ?>"
        >
    </div>
    <?php endfor; ?>

    <hr style="margin: 20px 0;">

    <!-- URL del Botón -->
    <div style="margin-bottom: 15px;">
        <label for="uvh_program_button_url" style="display: block; margin-bottom: 5px; font-weight: bold;">
            <?php esc_html_e('URL del Botón "Más información":', 'uvh-theme'); ?>
        </label>
        <input 
            type="text" 
            id="uvh_program_button_url" 
            name="uvh_program_button_url" 
            value="<?php echo esc_url($button_url); ?>" 
            style="width: 100%;"
            placeholder="https://ejemplo.com/programa-detalle"
        >
        <p class="description"><?php esc_html_e('Enlace al que llevará el botón del programa.', 'uvh-theme'); ?></p>
    </div>

    <hr style="margin: 20px 0;">

    <!-- Instrucciones -->
    <div style="background: #f0f0f1; padding: 15px; border-left: 4px solid #2271b1;">
        <h4 style="margin-top: 0;"><?php esc_html_e('Instrucciones:', 'uvh-theme'); ?></h4>
        <ul style="margin: 0;">
            <li><?php esc_html_e('El título del programa se configura en el campo "Título" arriba', 'uvh-theme'); ?></li>
            <li><?php esc_html_e('Selecciona un icono que represente visualmente el programa', 'uvh-theme'); ?></li>
            <li><?php esc_html_e('Las características aparecerán como lista con viñetas', 'uvh-theme'); ?></li>
            <li><?php esc_html_e('Puedes dejar características vacías si no las necesitas todas', 'uvh-theme'); ?></li>
            <li><?php esc_html_e('El orden determina la posición en la página', 'uvh-theme'); ?></li>
        </ul>
    </div>
    <?php
}

/**
 * Save Meta Box Data
 */
function uvh_save_academic_program_meta(int $post_id): void
{
    // Verify nonce
    if (!isset($_POST['uvh_academic_program_nonce']) || 
        !wp_verify_nonce($_POST['uvh_academic_program_nonce'], 'uvh_save_academic_program_meta')) {
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

    // Save active status
    $active = isset($_POST['uvh_program_active']) ? '1' : '0';
    update_post_meta($post_id, '_uvh_program_active', $active);

    // Save subtitle
    if (isset($_POST['uvh_program_subtitle'])) {
        update_post_meta($post_id, '_uvh_program_subtitle', sanitize_textarea_field($_POST['uvh_program_subtitle']));
    }

    // Save icon
    if (isset($_POST['uvh_program_icon'])) {
        update_post_meta($post_id, '_uvh_program_icon', sanitize_text_field($_POST['uvh_program_icon']));
    }

    // Save order
    if (isset($_POST['uvh_program_order'])) {
        update_post_meta($post_id, '_uvh_program_order', absint($_POST['uvh_program_order']));
    }

    // Save features
    for ($i = 1; $i <= 6; $i++) {
        if (isset($_POST["uvh_program_feature_{$i}"])) {
            update_post_meta($post_id, "_uvh_program_feature_{$i}", sanitize_text_field($_POST["uvh_program_feature_{$i}"]));
        }
    }

    // Save button URL
    if (isset($_POST['uvh_program_button_url'])) {
        update_post_meta($post_id, '_uvh_program_button_url', esc_url_raw($_POST['uvh_program_button_url']));
    }
}
add_action('save_post_academic_program', 'uvh_save_academic_program_meta');

/**
 * Customize Admin Columns
 */
function uvh_academic_program_columns(array $columns): array
{
    $new_columns = [];
    $new_columns['cb'] = $columns['cb'];
    $new_columns['title'] = $columns['title'];
    $new_columns['icon'] = __('Icono', 'uvh-theme');
    $new_columns['subtitle'] = __('Subtítulo', 'uvh-theme');
    $new_columns['order'] = __('Orden', 'uvh-theme');
    $new_columns['status'] = __('Estado', 'uvh-theme');
    $new_columns['date'] = $columns['date'];
    
    return $new_columns;
}
add_filter('manage_academic_program_posts_columns', 'uvh_academic_program_columns');

/**
 * Populate Custom Columns
 */
function uvh_academic_program_column_content(string $column, int $post_id): void
{
    switch ($column) {
        case 'icon':
            $icon = get_post_meta($post_id, '_uvh_program_icon', true);
            echo $icon ? esc_html(ucfirst($icon)) : '—';
            break;
        case 'subtitle':
            $subtitle = get_post_meta($post_id, '_uvh_program_subtitle', true);
            echo $subtitle ? esc_html(wp_trim_words($subtitle, 8)) : '—';
            break;
        case 'order':
            $order = get_post_meta($post_id, '_uvh_program_order', true);
            echo esc_html($order ?: '0');
            break;
        case 'status':
            $active = get_post_meta($post_id, '_uvh_program_active', true);
            $active = $active !== '' ? $active : '1';
            if ($active === '1') {
                echo '<span style="color: #46b450; font-weight: bold;">● ' . esc_html__('Activo', 'uvh-theme') . '</span>';
            } else {
                echo '<span style="color: #dc3232; font-weight: bold;">● ' . esc_html__('Inactivo', 'uvh-theme') . '</span>';
            }
            break;
    }
}
add_action('manage_academic_program_posts_custom_column', 'uvh_academic_program_column_content', 10, 2);

/**
 * Make Columns Sortable
 */
function uvh_academic_program_sortable_columns(array $columns): array
{
    $columns['order'] = 'program_order';
    return $columns;
}
add_filter('manage_edit-academic_program_sortable_columns', 'uvh_academic_program_sortable_columns');

/**
 * Get SVG Icon by Name
 */
function uvh_get_program_icon_svg(string $icon_name): string
{
    $icons = [
        'flask' => '<path d="M10 2v7.527a2 2 0 0 1-.211.896L4.72 20.55a1 1 0 0 0 .9 1.45h12.76a1 1 0 0 0 .9-1.45l-5.069-10.127A2 2 0 0 1 14 9.527V2"/><path d="M8.5 2h7"/><path d="M7 16h10"/>',
        'droplet' => '<path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>',
        'zap' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
        'activity' => '<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>',
        'layers' => '<polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>',
        'wind' => '<path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"/>',
        'cpu' => '<rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/>',
        'settings' => '<circle cx="12" cy="12" r="3"/><path d="M12 1v6m0 6v6m5.2-13.2l-4.2 4.2m-6 6l-4.2 4.2m13.2 0l-4.2-4.2m-6-6l-4.2-4.2"/>',
        'globe' => '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',
        'shield' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'briefcase' => '<rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>',
        'book' => '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>',
    ];

    $path = $icons[$icon_name] ?? $icons['book'];
    
    return sprintf(
        '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">%s</svg>',
        $path
    );
}
