<?php
declare(strict_types=1);

/**
 * Template part for displaying Academic Programs (Dynamic from DB)
 *
 * @package UVH_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

// Query academic programs (solo activos)
$programs_query = new WP_Query([
    'post_type' => 'academic_program',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'meta_query' => [
        'relation' => 'OR',
        [
            'key' => '_uvh_program_active',
            'value' => '1',
            'compare' => '='
        ],
        [
            'key' => '_uvh_program_active',
            'compare' => 'NOT EXISTS'
        ]
    ],
    'meta_key' => '_uvh_program_order',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
]);

if (!$programs_query->have_posts()) {
    return; // No mostrar la sección si no hay programas
}
?>

<!-- Programs Section -->
<section class="programs" id="oferta-academica">
    <div class="container">
        <div class="section-header section-header--center">
            <h2 class="section-header__title"><?php esc_html_e('Nuestra Oferta Académica', 'uvh-theme'); ?></h2>
            <p class="section-header__subtitle"><?php esc_html_e('Programas diseñados para formar líderes en el sector energético de Venezuela', 'uvh-theme'); ?></p>
        </div>
        <div class="programs__grid">
            <?php while ($programs_query->have_posts()) : $programs_query->the_post(); 
                $program_id = get_the_ID();
                $subtitle = get_post_meta($program_id, '_uvh_program_subtitle', true);
                $icon = get_post_meta($program_id, '_uvh_program_icon', true);
                $button_url = get_post_meta($program_id, '_uvh_program_button_url', true);
                
                // Obtener características
                $features = [];
                for ($i = 1; $i <= 6; $i++) {
                    $feature = get_post_meta($program_id, "_uvh_program_feature_{$i}", true);
                    if (!empty($feature)) {
                        $features[] = $feature;
                    }
                }
            ?>
            
            <div class="program-card">
                <div class="program-card__icon">
                    <span><?php echo $icon ?: '📖'; ?></span>
                </div>
                <h3 class="program-card__title"><?php echo esc_html(get_the_title()); ?></h3>
                <?php if ($subtitle) : ?>
                <p class="program-card__description">
                    <?php echo esc_html($subtitle); ?>
                </p>
                <?php endif; ?>
                <?php if (!empty($features)) : ?>
                <ul class="program-card__list">
                    <?php foreach ($features as $feature) : ?>
                    <li><?php echo esc_html($feature); ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                <?php if ($button_url) : ?>
                <a href="<?php echo esc_url($button_url); ?>" class="program-card__link"><?php esc_html_e('Ver programas →', 'uvh-theme'); ?></a>
                <?php endif; ?>
            </div>
            
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
