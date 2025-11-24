<?php
declare(strict_types=1);

/**
 * Handler para procesar formulario de admisión
 * 
 * @package UVH_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Procesar envío del formulario de admisión
 */
function uvh_process_admission_form(): void
{
    // Verificar nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'uvh_admission_form')) {
        wp_send_json_error(['message' => 'Error de seguridad. Por favor, recarga la página.']);
        return;
    }

    // Validar campos requeridos
    $required_fields = [
        'cedula', 'apellidos', 'nombres', 'genero', 'fecha_nacimiento',
        'edad', 'estado_civil', 'telefono_personal', 'telefono_emergencia',
        'email', 'direccion', 'liceo_nombre', 'liceo_tipo', 'titulo_bachiller',
        'promedio_academico', 'fecha_graduacion', 'programa_opcion_1',
        'programa_opcion_2', 'programa_opcion_3', 'turno_preferido',
        'tiene_discapacidad', 'empresa_nombre', 'relacion_sector',
        'empresa_localidad', 'departamento'
    ];

    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            wp_send_json_error(['message' => 'Por favor, completa todos los campos obligatorios.']);
            return;
        }
    }

    // Validar email
    $email = sanitize_email($_POST['email']);
    if (!is_email($email)) {
        wp_send_json_error(['message' => 'Por favor, ingresa un email válido.']);
        return;
    }

    // Verificar si ya existe una solicitud con esta cédula
    $existing = get_posts([
        'post_type' => 'uvh_admission',
        'meta_key' => '_cedula',
        'meta_value' => sanitize_text_field($_POST['cedula']),
        'posts_per_page' => 1,
    ]);

    if (!empty($existing)) {
        wp_send_json_error(['message' => 'Ya existe una solicitud registrada con esta cédula.']);
        return;
    }

    // Crear el post
    $nombres = sanitize_text_field($_POST['nombres']);
    $apellidos = sanitize_text_field($_POST['apellidos']);
    
    $post_data = [
        'post_type' => 'uvh_admission',
        'post_title' => $apellidos . ', ' . $nombres,
        'post_status' => 'publish',
        'post_author' => 1,
    ];

    $post_id = wp_insert_post($post_data);

    if (is_wp_error($post_id)) {
        wp_send_json_error(['message' => 'Error al guardar la solicitud. Por favor, intenta nuevamente.']);
        return;
    }

    // Guardar meta datos - Datos Personales
    update_post_meta($post_id, '_cedula', sanitize_text_field($_POST['cedula']));
    update_post_meta($post_id, '_apellidos', sanitize_text_field($_POST['apellidos']));
    update_post_meta($post_id, '_nombres', sanitize_text_field($_POST['nombres']));
    update_post_meta($post_id, '_genero', sanitize_text_field($_POST['genero']));
    update_post_meta($post_id, '_fecha_nacimiento', sanitize_text_field($_POST['fecha_nacimiento']));
    update_post_meta($post_id, '_edad', absint($_POST['edad']));
    update_post_meta($post_id, '_estado_civil', sanitize_text_field($_POST['estado_civil']));
    update_post_meta($post_id, '_telefono_personal', sanitize_text_field($_POST['telefono_personal']));
    update_post_meta($post_id, '_telefono_emergencia', sanitize_text_field($_POST['telefono_emergencia']));
    update_post_meta($post_id, '_telefono_representante', sanitize_text_field($_POST['telefono_representante'] ?? ''));
    update_post_meta($post_id, '_email', $email);
    update_post_meta($post_id, '_direccion', sanitize_textarea_field($_POST['direccion']));

    // Datos Académicos
    update_post_meta($post_id, '_liceo_nombre', sanitize_text_field($_POST['liceo_nombre']));
    update_post_meta($post_id, '_liceo_tipo', sanitize_text_field($_POST['liceo_tipo']));
    update_post_meta($post_id, '_titulo_bachiller', sanitize_text_field($_POST['titulo_bachiller']));
    update_post_meta($post_id, '_promedio_academico', sanitize_text_field($_POST['promedio_academico']));
    update_post_meta($post_id, '_fecha_graduacion', sanitize_text_field($_POST['fecha_graduacion']));

    // Preferencias de Programa
    update_post_meta($post_id, '_programa_opcion_1', sanitize_text_field($_POST['programa_opcion_1']));
    update_post_meta($post_id, '_programa_opcion_2', sanitize_text_field($_POST['programa_opcion_2']));
    update_post_meta($post_id, '_programa_opcion_3', sanitize_text_field($_POST['programa_opcion_3']));
    update_post_meta($post_id, '_turno_preferido', sanitize_text_field($_POST['turno_preferido']));

    // Actividades
    update_post_meta($post_id, '_actividad_deportiva', sanitize_text_field($_POST['actividad_deportiva'] ?? ''));
    update_post_meta($post_id, '_actividad_artistica', sanitize_text_field($_POST['actividad_artistica'] ?? ''));
    update_post_meta($post_id, '_tiene_discapacidad', sanitize_text_field($_POST['tiene_discapacidad']));
    update_post_meta($post_id, '_tipo_discapacidad', sanitize_text_field($_POST['tipo_discapacidad'] ?? ''));

    // Información Laboral
    update_post_meta($post_id, '_empresa_nombre', sanitize_text_field($_POST['empresa_nombre']));
    update_post_meta($post_id, '_relacion_sector', sanitize_text_field($_POST['relacion_sector']));
    update_post_meta($post_id, '_empresa_localidad', sanitize_text_field($_POST['empresa_localidad']));
    update_post_meta($post_id, '_departamento', sanitize_text_field($_POST['departamento']));
    update_post_meta($post_id, '_cargo', sanitize_text_field($_POST['cargo'] ?? ''));
    update_post_meta($post_id, '_supervisor', sanitize_text_field($_POST['supervisor'] ?? ''));

    // Enviar email de confirmación (opcional)
    $to = $email;
    $subject = 'Solicitud de Admisión Recibida - UVH';
    $message = "Estimado(a) {$nombres} {$apellidos},\n\n";
    $message .= "Hemos recibido tu solicitud de admisión para el Trayecto Inicial periodo II-2025.\n\n";
    $message .= "Una vez culminado el lapso de consulta, te informaremos vía email sobre los recaudos a consignar, fecha de entrevistas y otros pasos.\n\n";
    $message .= "Para más información, puedes contactarnos en: inscripcionesuvh@gmail.com\n\n";
    $message .= "Saludos cordiales,\n";
    $message .= "Universidad Venezolana de los Hidrocarburos";
    
    $headers = ['Content-Type: text/plain; charset=UTF-8'];
    wp_mail($to, $subject, $message, $headers);

    wp_send_json_success([
        'message' => '¡Solicitud enviada exitosamente! Recibirás un email de confirmación.',
        'post_id' => $post_id
    ]);
}
add_action('wp_ajax_uvh_submit_admission', 'uvh_process_admission_form');
add_action('wp_ajax_nopriv_uvh_submit_admission', 'uvh_process_admission_form');

/**
 * Enqueue scripts para el formulario
 */
function uvh_admission_scripts(): void
{
    if (is_page_template('page-admision.php')) {
        wp_enqueue_script(
            'uvh-admission-form',
            get_template_directory_uri() . '/assets/js/admission-form.js',
            ['jquery'],
            '1.0.0',
            true
        );

        wp_localize_script('uvh-admission-form', 'uvhAdmission', [
            'ajaxurl' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('uvh_admission_form'),
        ]);
    }
}
add_action('wp_enqueue_scripts', 'uvh_admission_scripts');
