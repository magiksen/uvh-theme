<?php
declare(strict_types=1);

if (!defined('ABSPATH')) exit;
?>

<!-- Testimonials Section -->
<section class="testimonials">
    <div class="container">
        <div class="section-header section-header--center">
            <h2 class="section-header__title"><?php esc_html_e('Testimonios de Nuestros Alumnos', 'uvh-theme'); ?></h2>
            <p class="section-header__subtitle"><?php esc_html_e('Voces que Impulsan: Experiencias de Nuestros Estudiantes en la UVH', 'uvh-theme'); ?></p>
        </div>

        <?php
        $testimonials_query = new WP_Query([
            'post_type'      => 'testimonial',
            'post_status'    => 'publish',
            'posts_per_page' => 2,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ]);
        ?>

        <div class="testimonials__grid">
            <?php if ($testimonials_query->have_posts()) : ?>
                <?php while ($testimonials_query->have_posts()) : $testimonials_query->the_post(); ?>
                    <?php
                    $role_program = get_post_meta(get_the_ID(), '_uvh_testimonial_role_program', true);
                    $rating       = (int) get_post_meta(get_the_ID(), '_uvh_testimonial_rating', true) ?: 5;
                    $rating_stars = str_repeat('★', max(1, min(5, $rating)));
                    ?>
                    <div class="testimonial-card">
                        <div class="testimonial-card__rating">
                            <?php echo esc_html($rating_stars); ?>
                        </div>
                        <p class="testimonial-card__text">
                            <?php echo esc_html(wp_strip_all_tags(get_the_content())); ?>
                        </p>
                        <div class="testimonial-card__author">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail([100, 100]); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/testimonials/estudiante1.svg'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                            <?php endif; ?>
                            <div>
                                <h4><?php the_title(); ?></h4>
                                <?php if (!empty($role_program)) : ?>
                                    <p><?php echo esc_html($role_program); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <!-- Fallback: testimonios estáticos si no hay CPT -->
                <div class="testimonial-card">
                    <div class="testimonial-card__rating">
                        ★★★★★
                    </div>
                    <p class="testimonial-card__text">
                        <?php esc_html_e('"La formación que recibí en la UVH me permitió desarrollarme profesionalmente en PDVSA. Los conocimientos técnicos y prácticos fueron fundamentales para mi carrera."', 'uvh-theme'); ?>
                    </p>
                    <div class="testimonial-card__author">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/testimonials/estudiante1.svg'); ?>" alt="María Rodríguez">
                        <div>
                            <h4><?php esc_html_e('María Rodríguez', 'uvh-theme'); ?></h4>
                            <p><?php esc_html_e('Ingeniera en Petróleo - Promoción 2020', 'uvh-theme'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-card__rating">
                        ★★★★★
                    </div>
                    <p class="testimonial-card__text">
                        <?php esc_html_e('"Excelente universidad con profesores altamente capacitados. Las prácticas en campo y los laboratorios modernos hacen la diferencia en nuestra formación."', 'uvh-theme'); ?>
                    </p>
                    <div class="testimonial-card__author">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/testimonials/estudiante2.svg'); ?>" alt="Carlos González">
                        <div>
                            <h4><?php esc_html_e('Carlos González', 'uvh-theme'); ?></h4>
                            <p><?php esc_html_e('Ingeniero en Gas - Promoción 2021', 'uvh-theme'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
