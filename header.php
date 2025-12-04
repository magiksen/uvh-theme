<?php
declare(strict_types=1);

/**
 * The header for UVH theme
 *
 * @package UVH_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary">
        <?php esc_html_e('Saltar al contenido', 'uvh-theme'); ?>
    </a>

    <!-- Header -->
    <header id="masthead" class="header site-header">
        <div class="container">
            <nav class="navbar">
                <div class="navbar__logo">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.svg'); ?>" 
                                 alt="<?php bloginfo('name'); ?>">
                        </a>
                        <?php
                    }
                    ?>
                </div>

                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'menu_class'     => 'navbar__menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ]);
                } else {
                    ?>
                    <ul class="navbar__menu">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Inicio', 'uvh-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/sobre-nosotros')); ?>"><?php esc_html_e('Sobre Nosotros', 'uvh-theme'); ?></a></li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo esc_url(home_url('/oferta-academica')); ?>"><?php esc_html_e('Oferta Académica', 'uvh-theme'); ?></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo esc_url(home_url('/programas-nacionales-de-formacion')); ?>"><?php esc_html_e('Programas Nacionales de Formación (PNF)', 'uvh-theme'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/programas-nacionales-de-formacion-avanzada')); ?>"><?php esc_html_e('Programas de Formación Avanzada (PNFA)', 'uvh-theme'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/maestrias')); ?>"><?php esc_html_e('Maestrías Especializadas', 'uvh-theme'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/diplomados')); ?>"><?php esc_html_e('Diplomados', 'uvh-theme'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/cursos')); ?>"><?php esc_html_e('Cursos Especializados', 'uvh-theme'); ?></a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/investigacion')); ?>"><?php esc_html_e('Investigación', 'uvh-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/estudios-internacionales')); ?>"><?php esc_html_e('Cooperación', 'uvh-theme'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/#admision')); ?>"><?php esc_html_e('Admisión', 'uvh-theme'); ?></a></li>
                    </ul>
                    <?php
                }
                ?>

                <div class="navbar__actions">
                    <a href="#" class="btn btn--secondary"><?php esc_html_e('Intranet', 'uvh-theme'); ?></a>
                    <?php echo do_shortcode('[gtranslate]'); ?>
                    <button class="hamburger" aria-label="<?php esc_attr_e('Menú', 'uvh-theme'); ?>" aria-expanded="false">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </nav>
        </div>
    </header>

    <main id="primary" class="site-main">
