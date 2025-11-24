<?php
declare(strict_types=1);

/**
 * Template part for displaying About section
 *
 * @package UVH_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- About Section -->
<section class="about" id="nosotros">
    <div class="container">
        <div class="about__grid">
            <div class="about__content">
                <?php
                $about_label        = get_theme_mod('uvh_about_label', __('Conoce más', 'uvh-theme'));
                $about_title_line1  = get_theme_mod('uvh_about_title_line1', __('ÚNETE A NUESTRA', 'uvh-theme'));
                $about_title_line2  = get_theme_mod('uvh_about_title_line2', __('COMUNIDAD', 'uvh-theme'));
                $about_paragraph1   = get_theme_mod('uvh_about_paragraph1', __('La Universidad Venezolana de los Hidrocarburos es una institución de educación superior comprometida con la formación de profesionales altamente capacitados en el sector energético.', 'uvh-theme'));
                $about_paragraph2   = get_theme_mod('uvh_about_paragraph2', __('Ofrecemos programas académicos de pregrado y postgrado diseñados para responder a las necesidades del desarrollo sostenible de la industria petrolera y gasífera nacional.', 'uvh-theme'));
                $about_bullet1      = get_theme_mod('uvh_about_bullet1', __('Programas académicos especializados', 'uvh-theme'));
                $about_bullet2      = get_theme_mod('uvh_about_bullet2', __('Infraestructura moderna y laboratorios equipados', 'uvh-theme'));
                $about_bullet3      = get_theme_mod('uvh_about_bullet3', __('Convenios con empresas del sector energético', 'uvh-theme'));
                $about_bullet4      = get_theme_mod('uvh_about_bullet4', __('Docentes con amplia experiencia profesional', 'uvh-theme'));
                $about_button_text  = get_theme_mod('uvh_about_button_text', __('Más información', 'uvh-theme'));
                $about_button_link  = get_theme_mod('uvh_about_button_link', '#oferta-academica');
                $about_image        = get_theme_mod('uvh_about_image', get_template_directory_uri() . '/assets/img/programs/campus.svg');
                ?>

                <span class="about__label"><?php echo esc_html($about_label); ?></span>
                <h2 class="about__title">
                    <?php echo esc_html($about_title_line1); ?><br>
                    <?php echo esc_html($about_title_line2); ?>
                </h2>
                <p class="about__text">
                    <?php echo esc_html($about_paragraph1); ?>
                </p>
                <p class="about__text">
                    <?php echo esc_html($about_paragraph2); ?>
                </p>
                <ul class="about__list">
                    <?php if (!empty($about_bullet1)) : ?>
                        <li><?php echo esc_html($about_bullet1); ?></li>
                    <?php endif; ?>
                    <?php if (!empty($about_bullet2)) : ?>
                        <li><?php echo esc_html($about_bullet2); ?></li>
                    <?php endif; ?>
                    <?php if (!empty($about_bullet3)) : ?>
                        <li><?php echo esc_html($about_bullet3); ?></li>
                    <?php endif; ?>
                    <?php if (!empty($about_bullet4)) : ?>
                        <li><?php echo esc_html($about_bullet4); ?></li>
                    <?php endif; ?>
                </ul>
                <?php if (!empty($about_button_text) && !empty($about_button_link)) : ?>
                    <a href="<?php echo esc_url($about_button_link); ?>" class="btn btn--primary">
                        <?php echo esc_html($about_button_text); ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="about__image">
                <img src="<?php echo esc_url($about_image); ?>"
                     alt="<?php esc_attr_e('Instalaciones UVH', 'uvh-theme'); ?>">
            </div>
        </div>
    </div>
</section>
