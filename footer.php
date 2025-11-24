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
                            'facebook' => ['label' => 'Facebook', 'icon' => 'FB'],
                            'twitter' => ['label' => 'Twitter', 'icon' => 'TW'],
                            'instagram' => ['label' => 'Instagram', 'icon' => 'IG'],
                            'linkedin' => ['label' => 'LinkedIn', 'icon' => 'IN'],
                            'youtube' => ['label' => 'YouTube', 'icon' => 'YT'],
                        ];

                        foreach ($social_links as $network => $data) {
                            $url = get_theme_mod("uvh_{$network}");
                            if ($url) {
                                printf(
                                    '<a href="%s" aria-label="%s" target="_blank" rel="noopener noreferrer">%s</a>',
                                    esc_url($url),
                                    esc_attr($data['label']),
                                    esc_html($data['icon'])
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
                            <li><a href="#programas"><?php esc_html_e('Programas Académicos', 'uvh-theme'); ?></a></li>
                            <li><a href="#admision"><?php esc_html_e('Proceso de Admisión', 'uvh-theme'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/noticias')); ?>"><?php esc_html_e('Noticias', 'uvh-theme'); ?></a></li>
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
