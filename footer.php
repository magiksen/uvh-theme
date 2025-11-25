<?php
declare(strict_types=1);

/**
 * The footer for UVH theme
 *
 * @package UVH_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

    </main><!-- #primary -->

    <!-- Footer -->
    <footer id="colophon" class="footer site-footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__column footer__column--main">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        ?>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.svg'); ?>" 
                             alt="<?php bloginfo('name'); ?>" 
                             class="footer__logo">
                        <?php
                    }
                    ?>
                    <p class="footer__description">
                        <?php
                        $description = get_bloginfo('description');
                        if ($description) {
                            echo esc_html($description);
                        } else {
                            esc_html_e('Formando profesionales de excelencia para el desarrollo sostenible del sector energético venezolano.', 'uvh-theme');
                        }
                        ?>
                    </p>
                    
                    <!-- Cita de Simón Bolívar -->
                    <blockquote class="footer__quote">
                        <p class="footer__quote-text">
                            <?php esc_html_e('"Un ser sin estudio es un ser incompleto"', 'uvh-theme'); ?>
                        </p>
                        <cite class="footer__quote-author">— Simón Bolívar</cite>
                    </blockquote>
                    
                    <div class="footer__social">
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
                                    '<a href="%s" aria-label="%s" target="_blank" rel="noopener noreferrer" class="footer__social-link footer__social-link--%s">%s</a>',
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

                <?php if (is_active_sidebar('footer-1')) : ?>
                    <div class="footer__column">
                        <?php dynamic_sidebar('footer-1'); ?>
                    </div>
                <?php else : ?>
                    <div class="footer__column">
                        <h4 class="footer__title"><?php esc_html_e('Enlaces Rápidos', 'uvh-theme'); ?></h4>
                        <ul class="footer__links">
                            <li><a href="<?php echo esc_url(home_url('/sobre-nosotros')); ?>"><?php esc_html_e('Sobre Nosotros', 'uvh-theme'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/oferta-academica')); ?>"><?php esc_html_e('Programas Académicos', 'uvh-theme'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/formulario-admision')); ?>"><?php esc_html_e('Proceso de Admisión', 'uvh-theme'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/noticias')); ?>"><?php esc_html_e('Noticias', 'uvh-theme'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/estudios-internacionales')); ?>"><?php esc_html_e('Cooperación Nacional e Internacional', 'uvh-theme'); ?></a></li>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-2')) : ?>
                    <div class="footer__column">
                        <?php dynamic_sidebar('footer-2'); ?>
                    </div>
                <?php else : ?>
                    <div class="footer__column">
                        <h4 class="footer__title"><?php esc_html_e('Servicios', 'uvh-theme'); ?></h4>
                        <ul class="footer__links">
                            <li><a href="#"><?php esc_html_e('Intranet Estudiantil', 'uvh-theme'); ?></a></li>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-3')) : ?>
                    <div class="footer__column">
                        <?php dynamic_sidebar('footer-3'); ?>
                    </div>
                <?php else : ?>
                    <div class="footer__column">
                        <h4 class="footer__title"><?php esc_html_e('Contacto', 'uvh-theme'); ?></h4>
                        <ul class="footer__contact">
                            <li><?php echo esc_html(get_theme_mod('uvh_address', 'Caracas, Venezuela')); ?></li>
                            <li><?php echo esc_html(get_theme_mod('uvh_contact_phone', '+58 212 XXX-XXXX')); ?></li>
                            <li><a href="mailto:<?php echo esc_attr(get_theme_mod('uvh_contact_email', 'info@uvh.edu.ve')); ?>">
                                <?php echo esc_html(get_theme_mod('uvh_contact_email', 'info@uvh.edu.ve')); ?>
                            </a></li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>

            <div class="footer__bottom">
                <p>
                    <?php
                    printf(
                        esc_html__('&copy; %s %s. Todos los derechos reservados.', 'uvh-theme'),
                        date('Y'),
                        get_bloginfo('name')
                    );
                    ?>
                </p>
                <div class="footer__legal">
                    <!-- <a href="#"><?php esc_html_e('Política de Privacidad', 'uvh-theme'); ?></a>
                    <a href="#"><?php esc_html_e('Términos y Condiciones', 'uvh-theme'); ?></a> -->
                </div>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
