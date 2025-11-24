<?php
declare(strict_types=1);

/**
 * Handler para procesar formulario de contacto
 * 
 * @package UVH_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Procesar envío del formulario de contacto
 */
function uvh_process_contact_form(): void
{
    // Log para debugging
    error_log('Contact form submission received');
    error_log('POST data: ' . print_r($_POST, true));
    
    // Verificar nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'uvh_contact_form')) {
        error_log('Nonce verification failed');
        wp_send_json_error(['message' => 'Error de seguridad. Por favor, recarga la página.']);
        return;
    }
    
    error_log('Nonce verified successfully');

    // Validar campos requeridos
    $required_fields = ['name', 'email', 'phone', 'subject', 'message'];

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

    // Sanitizar datos
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validar longitud del mensaje
    if (strlen($message) < 10) {
        wp_send_json_error(['message' => 'El mensaje debe tener al menos 10 caracteres.']);
        return;
    }

    // Prevenir spam - verificar si hay muchos mensajes del mismo email en poco tiempo
    $recent_messages = get_posts([
        'post_type' => 'uvh_contact',
        'meta_key' => '_email',
        'meta_value' => $email,
        'date_query' => [
            [
                'after' => '1 hour ago'
            ]
        ],
        'posts_per_page' => 1,
    ]);

    if (!empty($recent_messages)) {
        wp_send_json_error(['message' => 'Ya has enviado un mensaje recientemente. Por favor, espera antes de enviar otro.']);
        return;
    }

    // Crear el post
    $post_data = [
        'post_type' => 'uvh_contact',
        'post_title' => $name . ' - ' . $subject,
        'post_status' => 'publish',
        'post_author' => 1,
    ];

    $post_id = wp_insert_post($post_data);

    if (is_wp_error($post_id)) {
        error_log('Error creating post: ' . $post_id->get_error_message());
        wp_send_json_error(['message' => 'Error al enviar el mensaje. Por favor, intenta nuevamente.']);
        return;
    }
    
    error_log('Post created successfully with ID: ' . $post_id);

    // Guardar meta datos
    update_post_meta($post_id, '_name', $name);
    update_post_meta($post_id, '_email', $email);
    update_post_meta($post_id, '_phone', $phone);
    update_post_meta($post_id, '_subject', $subject);
    update_post_meta($post_id, '_message', $message);
    update_post_meta($post_id, '_status', 'pending');
    update_post_meta($post_id, '_ip_address', uvh_get_user_ip());
    update_post_meta($post_id, '_user_agent', sanitize_text_field($_SERVER['HTTP_USER_AGENT'] ?? ''));

    // Enviar email de notificación al administrador
    $admin_email = get_option('admin_email');
    $site_name = get_bloginfo('name');
    
    $admin_subject = sprintf('[%s] Nuevo mensaje de contacto de %s', $site_name, $name);
    $admin_message = "Has recibido un nuevo mensaje de contacto:\n\n";
    $admin_message .= "Nombre: {$name}\n";
    $admin_message .= "Email: {$email}\n";
    $admin_message .= "Teléfono: {$phone}\n";
    $admin_message .= "Asunto: {$subject}\n\n";
    $admin_message .= "Mensaje:\n{$message}\n\n";
    $admin_message .= "---\n";
    $admin_message .= "Ver en admin: " . admin_url('post.php?post=' . $post_id . '&action=edit');
    
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>'
    ];
    
    wp_mail($admin_email, $admin_subject, $admin_message, $headers);

    // Enviar email de confirmación al usuario
    $user_subject = 'Hemos recibido tu mensaje - ' . $site_name;
    $user_message = "Estimado(a) {$name},\n\n";
    $user_message .= "Hemos recibido tu mensaje y nos pondremos en contacto contigo a la brevedad posible.\n\n";
    $user_message .= "Resumen de tu mensaje:\n";
    $user_message .= "Asunto: {$subject}\n";
    $user_message .= "Mensaje: {$message}\n\n";
    $user_message .= "Gracias por contactarnos.\n\n";
    $user_message .= "Saludos cordiales,\n";
    $user_message .= "Universidad Venezolana de los Hidrocarburos\n";
    $user_message .= "Email: inscripcionesuvh@gmail.com";
    
    $user_headers = ['Content-Type: text/plain; charset=UTF-8'];
    wp_mail($email, $user_subject, $user_message, $user_headers);

    wp_send_json_success([
        'message' => '¡Mensaje enviado exitosamente! Te responderemos pronto.',
        'post_id' => $post_id
    ]);
}
add_action('wp_ajax_uvh_submit_contact', 'uvh_process_contact_form');
add_action('wp_ajax_nopriv_uvh_submit_contact', 'uvh_process_contact_form');

/**
 * Obtener IP del usuario de forma segura
 */
function uvh_get_user_ip(): string
{
    $ip = '';
    
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'] ?? '';
    }
    
    return sanitize_text_field($ip);
}

/**
 * Enqueue scripts para el formulario de contacto
 */
function uvh_contact_scripts(): void
{
    // Cargar en front page y cualquier página que tenga el formulario
    wp_enqueue_script(
        'uvh-contact-form',
        get_template_directory_uri() . '/assets/js/contact-form.js',
        ['jquery'],
        '1.0.1',
        true
    );

    wp_localize_script('uvh-contact-form', 'uvhContact', [
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('uvh_contact_form'),
    ]);
}
add_action('wp_enqueue_scripts', 'uvh_contact_scripts');
