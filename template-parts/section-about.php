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
                
                <!-- Redes Sociales -->
                <div class="about__social">
                    <p class="about__social-label"><?php esc_html_e('Síguenos en:', 'uvh-theme'); ?></p>
                    <div class="about__social-links">
                        <?php
                        $social_links = [
                            'facebook' => [
                                'label' => 'Facebook',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>'
                            ],
                            'twitter' => [
                                'label' => 'Twitter/X',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4l11.733 16h4.267l-11.733 -16z"/><path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"/></svg>'
                            ],
                            'instagram' => [
                                'label' => 'Instagram',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>'
                            ],
                            'linkedin' => [
                                'label' => 'LinkedIn',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>'
                            ],
                            'youtube' => [
                                'label' => 'YouTube',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg>'
                            ],
                            'tiktok' => [
                                'label' => 'TikTok',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"/></svg>'
                            ],
                        ];

                        foreach ($social_links as $network => $data) {
                            $url = get_theme_mod("uvh_{$network}");
                            if ($url) {
                                printf(
                                    '<a href="%s" aria-label="%s" target="_blank" rel="noopener noreferrer" class="about__social-link about__social-link--%s">%s</a>',
                                    esc_url($url),
                                    esc_attr($data['label']),
                                    esc_attr($network),
                                    $data['icon']
                                );
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="about__image">
                <img src="<?php echo esc_url($about_image); ?>"
                     alt="<?php esc_attr_e('Instalaciones UVH', 'uvh-theme'); ?>">
            </div>
        </div>
    </div>
</section>
