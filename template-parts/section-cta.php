<?php
declare(strict_types=1);

if (!defined('ABSPATH')) exit;
?>

<!-- CTA Section -->
<section class="cta">
    <div class="cta__overlay"></div>
    <div class="container">
        <div class="cta__content">
            <?php
            $cta_title       = get_theme_mod('uvh_cta_title', __('Únete a la comunidad UVH', 'uvh-theme'));
            $cta_subtitle    = get_theme_mod('uvh_cta_subtitle', __('Mantente informado sobre programas, eventos y oportunidades académicas de la UVH.', 'uvh-theme'));
            $cta_button_text = get_theme_mod('uvh_cta_button_text', __('Quiero unirme', 'uvh-theme'));
            $cta_button_link = get_theme_mod('uvh_cta_button_link', '#contacto');
            ?>

            <h2 class="cta__title"><?php echo esc_html($cta_title); ?></h2>
            <p class="cta__subtitle">
                <?php echo esc_html($cta_subtitle); ?>
            </p>

            <?php if (!empty($cta_button_text) && !empty($cta_button_link)) : ?>
                <a href="<?php echo esc_url($cta_button_link); ?>" class="btn btn--primary btn--large">
                    <?php echo esc_html($cta_button_text); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
