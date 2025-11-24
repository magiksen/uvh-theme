<?php
declare(strict_types=1);

/**
 * Theme Customizer
 *
 * @package UVH_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add customizer settings
 */
function uvh_customize_register(WP_Customize_Manager $wp_customize): void
{
    // Add UVH Settings Section
    $wp_customize->add_section('uvh_settings', [
        'title'    => __('Configuración UVH', 'uvh-theme'),
        'priority' => 30,
    ]);

    // Contact Phone
    $wp_customize->add_setting('uvh_contact_phone', [
        'default'           => '+58 212 XXX-XXXX',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('uvh_contact_phone', [
        'label'    => __('Teléfono de Contacto', 'uvh-theme'),
        'section'  => 'uvh_settings',
        'type'     => 'text',
    ]);

    // Contact Email
    $wp_customize->add_setting('uvh_contact_email', [
        'default'           => 'info@uvh.edu.ve',
        'sanitize_callback' => 'sanitize_email',
    ]);

    $wp_customize->add_control('uvh_contact_email', [
        'label'    => __('Email de Contacto', 'uvh-theme'),
        'section'  => 'uvh_settings',
        'type'     => 'email',
    ]);

    // Address
    $wp_customize->add_setting('uvh_address', [
        'default'           => 'Caracas, Venezuela',
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);

    $wp_customize->add_control('uvh_address', [
        'label'    => __('Dirección', 'uvh-theme'),
        'section'  => 'uvh_settings',
        'type'     => 'textarea',
    ]);

    // ================================
    // About Section (Conoce más)
    // ================================
    $wp_customize->add_section('uvh_about_section', [
        'title'       => __('Sección "Conoce más"', 'uvh-theme'),
        'priority'    => 31,
        'description' => __('Configura los textos, botón e imagen de la sección Sobre Nosotros.', 'uvh-theme'),
    ]);

    // About label
    $wp_customize->add_setting('uvh_about_label', [
        'default'           => __('Conoce más', 'uvh-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('uvh_about_label', [
        'label'   => __('Etiqueta pequeña (sobre el título)', 'uvh-theme'),
        'section' => 'uvh_about_section',
        'type'    => 'text',
    ]);

    // About title line 1
    $wp_customize->add_setting('uvh_about_title_line1', [
        'default'           => __('ÚNETE A NUESTRA', 'uvh-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('uvh_about_title_line1', [
        'label'   => __('Título - línea 1', 'uvh-theme'),
        'section' => 'uvh_about_section',
        'type'    => 'text',
    ]);

    // About title line 2
    $wp_customize->add_setting('uvh_about_title_line2', [
        'default'           => __('COMUNIDAD', 'uvh-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('uvh_about_title_line2', [
        'label'   => __('Título - línea 2', 'uvh-theme'),
        'section' => 'uvh_about_section',
        'type'    => 'text',
    ]);

    // About paragraph 1
    $wp_customize->add_setting('uvh_about_paragraph1', [
        'default'           => __('La Universidad Venezolana de los Hidrocarburos es una institución de educación superior comprometida con la formación de profesionales altamente capacitados en el sector energético.', 'uvh-theme'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);

    $wp_customize->add_control('uvh_about_paragraph1', [
        'label'   => __('Párrafo 1', 'uvh-theme'),
        'section' => 'uvh_about_section',
        'type'    => 'textarea',
    ]);

    // About paragraph 2
    $wp_customize->add_setting('uvh_about_paragraph2', [
        'default'           => __('Ofrecemos programas académicos de pregrado y postgrado diseñados para responder a las necesidades del desarrollo sostenible de la industria petrolera y gasífera nacional.', 'uvh-theme'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);

    $wp_customize->add_control('uvh_about_paragraph2', [
        'label'   => __('Párrafo 2', 'uvh-theme'),
        'section' => 'uvh_about_section',
        'type'    => 'textarea',
    ]);

    // About bullet points
    $wp_customize->add_setting('uvh_about_bullet1', [
        'default'           => __('Programas académicos especializados', 'uvh-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('uvh_about_bullet1', [
        'label'   => __('Elemento de lista 1', 'uvh-theme'),
        'section' => 'uvh_about_section',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('uvh_about_bullet2', [
        'default'           => __('Infraestructura moderna y laboratorios equipados', 'uvh-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('uvh_about_bullet2', [
        'label'   => __('Elemento de lista 2', 'uvh-theme'),
        'section' => 'uvh_about_section',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('uvh_about_bullet3', [
        'default'           => __('Convenios con empresas del sector energético', 'uvh-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('uvh_about_bullet3', [
        'label'   => __('Elemento de lista 3', 'uvh-theme'),
        'section' => 'uvh_about_section',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('uvh_about_bullet4', [
        'default'           => __('Docentes con amplia experiencia profesional', 'uvh-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('uvh_about_bullet4', [
        'label'   => __('Elemento de lista 4', 'uvh-theme'),
        'section' => 'uvh_about_section',
        'type'    => 'text',
    ]);

    // About button text
    $wp_customize->add_setting('uvh_about_button_text', [
        'default'           => __('Más información', 'uvh-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('uvh_about_button_text', [
        'label'   => __('Texto del botón', 'uvh-theme'),
        'section' => 'uvh_about_section',
        'type'    => 'text',
    ]);

    // About button link
    $wp_customize->add_setting('uvh_about_button_link', [
        'default'           => home_url('/sobre-nosotros'),
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control('uvh_about_button_link', [
        'label'   => __('Enlace del botón', 'uvh-theme'),
        'section' => 'uvh_about_section',
        'type'    => 'text',
    ]);

    // About image (800x600)
    $wp_customize->add_setting('uvh_about_image', [
        'default'           => get_template_directory_uri() . '/assets/img/programs/campus.svg',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'uvh_about_image', [
        'label'       => __('Imagen de la sección (recomendada 800x600)', 'uvh-theme'),
        'section'     => 'uvh_about_section',
        'settings'    => 'uvh_about_image',
    ]));

    // ================================
    // NOTA: La sección de Investigación ahora tiene contenido fijo
    // basado en las 26 líneas de investigación y 12 proyectos activos.
    // Ya no es editable desde el Customizer.
    // ================================
    // CTA Section (Únete a la comunidad UVH)
    // ================================
    $wp_customize->add_section('uvh_cta_section', [
        'title'       => __('Sección CTA (Únete a la comunidad UVH)', 'uvh-theme'),
        'priority'    => 33,
        'description' => __('Configura el bloque de llamado a la acción para invitar a unirse a la comunidad UVH.', 'uvh-theme'),
    ]);

    // CTA title
    $wp_customize->add_setting('uvh_cta_title', [
        'default'           => __('Únete a la comunidad UVH', 'uvh-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('uvh_cta_title', [
        'label'   => __('Título CTA', 'uvh-theme'),
        'section' => 'uvh_cta_section',
        'type'    => 'text',
    ]);

    // CTA subtitle
    $wp_customize->add_setting('uvh_cta_subtitle', [
        'default'           => __('Mantente informado sobre programas, eventos y oportunidades académicas de la UVH.', 'uvh-theme'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);

    $wp_customize->add_control('uvh_cta_subtitle', [
        'label'   => __('Subtítulo CTA', 'uvh-theme'),
        'section' => 'uvh_cta_section',
        'type'    => 'textarea',
    ]);

    // CTA button text
    $wp_customize->add_setting('uvh_cta_button_text', [
        'default'           => __('Quiero unirme', 'uvh-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('uvh_cta_button_text', [
        'label'   => __('Texto del botón', 'uvh-theme'),
        'section' => 'uvh_cta_section',
        'type'    => 'text',
    ]);

    // CTA button link
    $wp_customize->add_setting('uvh_cta_button_link', [
        'default'           => '#contacto',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('uvh_cta_button_link', [
        'label'   => __('Enlace del botón', 'uvh-theme'),
        'section' => 'uvh_cta_section',
        'type'    => 'text',
    ]);

    // Social Media Section
    $wp_customize->add_section('uvh_social_media', [
        'title'    => __('Redes Sociales', 'uvh-theme'),
        'priority' => 34,
    ]);

    // Facebook
    $wp_customize->add_setting('uvh_facebook', [
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control('uvh_facebook', [
        'label'    => __('Facebook URL', 'uvh-theme'),
        'section'  => 'uvh_social_media',
        'type'     => 'url',
    ]);

    // Twitter
    $wp_customize->add_setting('uvh_twitter', [
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control('uvh_twitter', [
        'label'    => __('Twitter URL', 'uvh-theme'),
        'section'  => 'uvh_social_media',
        'type'     => 'url',
    ]);

    // Instagram
    $wp_customize->add_setting('uvh_instagram', [
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control('uvh_instagram', [
        'label'    => __('Instagram URL', 'uvh-theme'),
        'section'  => 'uvh_social_media',
        'type'     => 'url',
    ]);

    // LinkedIn
    $wp_customize->add_setting('uvh_linkedin', [
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control('uvh_linkedin', [
        'label'    => __('LinkedIn URL', 'uvh-theme'),
        'section'  => 'uvh_social_media',
        'type'     => 'url',
    ]);

    // YouTube
    $wp_customize->add_setting('uvh_youtube', [
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control('uvh_youtube', [
        'label'    => __('YouTube URL', 'uvh-theme'),
        'section'  => 'uvh_social_media',
        'type'     => 'url',
    ]);
}
add_action('customize_register', 'uvh_customize_register');
