<?php
declare(strict_types=1);

/**
 * Custom Post Type para Solicitudes de Admisión
 * 
 * @package UVH_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Registrar Custom Post Type para Admisiones
 */
function uvh_register_admission_cpt(): void
{
    $labels = [
        'name'                  => __('Solicitudes de Admisión', 'uvh-theme'),
        'singular_name'         => __('Solicitud de Admisión', 'uvh-theme'),
        'menu_name'             => __('Admisiones', 'uvh-theme'),
        'name_admin_bar'        => __('Solicitud', 'uvh-theme'),
        'add_new'               => __('Añadir Nueva', 'uvh-theme'),
        'add_new_item'          => __('Añadir Nueva Solicitud', 'uvh-theme'),
        'new_item'              => __('Nueva Solicitud', 'uvh-theme'),
        'edit_item'             => __('Editar Solicitud', 'uvh-theme'),
        'view_item'             => __('Ver Solicitud', 'uvh-theme'),
        'all_items'             => __('Todas las Solicitudes', 'uvh-theme'),
        'search_items'          => __('Buscar Solicitudes', 'uvh-theme'),
        'not_found'             => __('No se encontraron solicitudes', 'uvh-theme'),
        'not_found_in_trash'    => __('No hay solicitudes en la papelera', 'uvh-theme'),
    ];

    $args = [
        'labels'              => $labels,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-welcome-learn-more',
        'menu_position'       => 5,
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

    register_post_type('uvh_admission', $args);
}
add_action('init', 'uvh_register_admission_cpt');

/**
 * Personalizar columnas en el listado de admisiones
 */
function uvh_admission_columns(array $columns): array
{
    return [
        'cb'              => $columns['cb'],
        'title'           => __('Nombre Completo', 'uvh-theme'),
        'cedula'          => __('Cédula', 'uvh-theme'),
        'email'           => __('Email', 'uvh-theme'),
        'programa_1'      => __('1ra Opción', 'uvh-theme'),
        'fecha_registro'  => __('Fecha de Registro', 'uvh-theme'),
    ];
}
add_filter('manage_uvh_admission_posts_columns', 'uvh_admission_columns');

/**
 * Rellenar columnas personalizadas
 */
function uvh_admission_custom_column(string $column, int $post_id): void
{
    switch ($column) {
        case 'cedula':
            echo esc_html(get_post_meta($post_id, '_cedula', true));
            break;
        case 'email':
            echo esc_html(get_post_meta($post_id, '_email', true));
            break;
        case 'programa_1':
            echo esc_html(get_post_meta($post_id, '_programa_opcion_1', true));
            break;
        case 'fecha_registro':
            echo esc_html(get_the_date('d/m/Y H:i', $post_id));
            break;
    }
}
add_action('manage_uvh_admission_posts_custom_column', 'uvh_admission_custom_column', 10, 2);

/**
 * Hacer columnas ordenables
 */
function uvh_admission_sortable_columns(array $columns): array
{
    $columns['cedula'] = 'cedula';
    $columns['fecha_registro'] = 'date';
    return $columns;
}
add_filter('manage_edit-uvh_admission_sortable_columns', 'uvh_admission_sortable_columns');

/**
 * Agregar meta boxes personalizados
 */
function uvh_admission_meta_boxes(): void
{
    add_meta_box(
        'uvh_admission_personal',
        __('Datos Personales', 'uvh-theme'),
        'uvh_admission_personal_meta_box',
        'uvh_admission',
        'normal',
        'high'
    );

    add_meta_box(
        'uvh_admission_academic',
        __('Datos Académicos', 'uvh-theme'),
        'uvh_admission_academic_meta_box',
        'uvh_admission',
        'normal',
        'high'
    );

    add_meta_box(
        'uvh_admission_programs',
        __('Preferencias de Programa', 'uvh-theme'),
        'uvh_admission_programs_meta_box',
        'uvh_admission',
        'normal',
        'high'
    );

    add_meta_box(
        'uvh_admission_activities',
        __('Actividades e Información Adicional', 'uvh-theme'),
        'uvh_admission_activities_meta_box',
        'uvh_admission',
        'normal',
        'default'
    );

    add_meta_box(
        'uvh_admission_work',
        __('Información Laboral', 'uvh-theme'),
        'uvh_admission_work_meta_box',
        'uvh_admission',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'uvh_admission_meta_boxes');

/**
 * Meta box: Datos Personales
 */
function uvh_admission_personal_meta_box(WP_Post $post): void
{
    $fields = [
        '_cedula' => 'Cédula',
        '_apellidos' => 'Apellidos',
        '_nombres' => 'Nombres',
        '_genero' => 'Género',
        '_fecha_nacimiento' => 'Fecha de Nacimiento',
        '_edad' => 'Edad',
        '_estado_civil' => 'Estado Civil',
        '_telefono_personal' => 'Teléfono Personal',
        '_telefono_emergencia' => 'Teléfono de Emergencia',
        '_telefono_representante' => 'Teléfono Representante',
        '_email' => 'Email',
        '_direccion' => 'Dirección',
    ];

    echo '<table class="form-table"><tbody>';
    foreach ($fields as $key => $label) {
        $value = get_post_meta($post->ID, $key, true);
        echo '<tr>';
        echo '<th><strong>' . esc_html($label) . ':</strong></th>';
        echo '<td>' . esc_html($value) . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
}

/**
 * Meta box: Datos Académicos
 */
function uvh_admission_academic_meta_box(WP_Post $post): void
{
    $fields = [
        '_liceo_nombre' => 'Nombre del Liceo',
        '_liceo_tipo' => 'Tipo de Liceo',
        '_titulo_bachiller' => 'Título de Bachiller',
        '_promedio_academico' => 'Promedio Académico',
        '_fecha_graduacion' => 'Fecha de Graduación',
    ];

    echo '<table class="form-table"><tbody>';
    foreach ($fields as $key => $label) {
        $value = get_post_meta($post->ID, $key, true);
        echo '<tr>';
        echo '<th><strong>' . esc_html($label) . ':</strong></th>';
        echo '<td>' . esc_html($value) . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
}

/**
 * Meta box: Preferencias de Programa
 */
function uvh_admission_programs_meta_box(WP_Post $post): void
{
    $fields = [
        '_programa_opcion_1' => '1ra Opción',
        '_programa_opcion_2' => '2da Opción',
        '_programa_opcion_3' => '3ra Opción',
        '_turno_preferido' => 'Turno Preferido',
    ];

    echo '<table class="form-table"><tbody>';
    foreach ($fields as $key => $label) {
        $value = get_post_meta($post->ID, $key, true);
        echo '<tr>';
        echo '<th><strong>' . esc_html($label) . ':</strong></th>';
        echo '<td>' . esc_html($value) . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
}

/**
 * Meta box: Actividades
 */
function uvh_admission_activities_meta_box(WP_Post $post): void
{
    $fields = [
        '_actividad_deportiva' => 'Actividad Deportiva',
        '_actividad_artistica' => 'Actividad Artística/Social',
        '_tiene_discapacidad' => 'Presenta Discapacidad',
        '_tipo_discapacidad' => 'Tipo de Discapacidad',
    ];

    echo '<table class="form-table"><tbody>';
    foreach ($fields as $key => $label) {
        $value = get_post_meta($post->ID, $key, true);
        echo '<tr>';
        echo '<th><strong>' . esc_html($label) . ':</strong></th>';
        echo '<td>' . esc_html($value) . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
}

/**
 * Meta box: Información Laboral
 */
function uvh_admission_work_meta_box(WP_Post $post): void
{
    $fields = [
        '_empresa_nombre' => 'Nombre de la Empresa',
        '_relacion_sector' => 'Relación con el Sector',
        '_empresa_localidad' => 'Localidad de la Empresa',
        '_departamento' => 'Departamento de Adscripción',
        '_cargo' => 'Cargo',
        '_supervisor' => 'Nombre y Teléfono del Supervisor',
    ];

    echo '<table class="form-table"><tbody>';
    foreach ($fields as $key => $label) {
        $value = get_post_meta($post->ID, $key, true);
        echo '<tr>';
        echo '<th><strong>' . esc_html($label) . ':</strong></th>';
        echo '<td>' . esc_html($value) . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
}

/**
 * Cambiar el título del post
 */
function uvh_admission_title(string $title, int $id): string
{
    if (get_post_type($id) === 'uvh_admission') {
        $nombres = get_post_meta($id, '_nombres', true);
        $apellidos = get_post_meta($id, '_apellidos', true);
        if ($nombres && $apellidos) {
            return $apellidos . ', ' . $nombres;
        }
    }
    return $title;
}
add_filter('the_title', 'uvh_admission_title', 10, 2);
