<?php
declare(strict_types=1);

/**
 * Front Page Template
 * Página principal con todas las secciones de la UVH
 *
 * @package UVH_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<!-- Hero Slider Section -->
<?php get_template_part('template-parts/section', 'hero-slider'); ?>

<!-- Sobre Nosotros Section -->
<?php get_template_part('template-parts/section', 'about'); ?>

<!-- Oferta Académica Section -->
<?php get_template_part('template-parts/section', 'programs'); ?>

<!-- Investigación e Innovación Section -->
<?php get_template_part('template-parts/section', 'research'); ?>

<!-- Proceso de Admisión Section -->
<?php get_template_part('template-parts/section', 'admission'); ?>

<!-- Estadísticas Section -->
<?php get_template_part('template-parts/section', 'stats'); ?>

<!-- CTA Section -->
<?php get_template_part('template-parts/section', 'cta'); ?>

<!-- Testimonios Section -->
<?php get_template_part('template-parts/section', 'testimonials'); ?>

<!-- Noticias Section -->
<?php get_template_part('template-parts/section', 'news'); ?>

<!-- Contacto Section -->
<?php get_template_part('template-parts/section', 'contact'); ?>

<?php
get_footer();
