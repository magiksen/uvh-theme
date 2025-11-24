<?php
declare(strict_types=1);

if (!defined('ABSPATH')) exit;
?>

<!-- News Section -->
<section class="news" id="noticias">
    <div class="container">
        <div class="section-header">
            <h2 class="section-header__title"><?php esc_html_e('Últimas Noticias UVH', 'uvh-theme'); ?></h2>
        </div>
        <div class="news__grid">
            <?php
            $news_query = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'category_name'  => 'noticias',
            ]);

            if ($news_query->have_posts()) :
                $news_index = 1;
                while ($news_query->have_posts()) : $news_query->the_post();
                    ?>
                    <article class="news-card">
                        <div class="news-card__image">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('uvh-card'); ?>
                                <?php else : ?>
                                    <?php
                                    $fallback_index = $news_index;
                                    if ($fallback_index < 1 || $fallback_index > 3) {
                                        $fallback_index = (($fallback_index - 1) % 3) + 1;
                                    }
                                    ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/news/noticia' . $fallback_index . '.svg'); ?>" alt="">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="news-card__content">
                            <div class="news-card__meta">
                                <span class="news-card__date"><?php echo esc_html(get_the_date()); ?></span>
                                <span class="news-card__category"><?php esc_html_e('Noticias', 'uvh-theme'); ?></span>
                            </div>
                            <h3 class="news-card__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="news-card__excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 22)); ?></p>
                            <a href="<?php the_permalink(); ?>" class="news-card__link">
                                <?php esc_html_e('Leer más →', 'uvh-theme'); ?>
                            </a>
                        </div>
                    </article>
                    <?php
                    $news_index++;
                endwhile;
                wp_reset_postdata();

                // Rellenar hasta 3 cards con contenido de ejemplo si hay menos noticias reales
                if ($news_index <= 3) :
                    for ($i = $news_index; $i <= 3; $i++) :
                        ?>
                        <article class="news-card">
                            <div class="news-card__image">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/news/noticia' . $i . '.svg'); ?>" alt="">
                            </div>
                            <div class="news-card__content">
                                <div class="news-card__meta">
                                    <span class="news-card__date"><?php echo date('d/m/Y'); ?></span>
                                    <span class="news-card__category"><?php esc_html_e('Noticias', 'uvh-theme'); ?></span>
                                </div>
                                <h3 class="news-card__title">
                                    <a href="#"><?php printf(esc_html__('Noticia de ejemplo %d', 'uvh-theme'), $i); ?></a>
                                </h3>
                                <p class="news-card__excerpt"><?php esc_html_e('Descripción de la noticia. Agrega contenido desde el panel de WordPress.', 'uvh-theme'); ?></p>
                                <a href="#" class="news-card__link"><?php esc_html_e('Leer más →', 'uvh-theme'); ?></a>
                            </div>
                        </article>
                        <?php
                    endfor;
                endif;
            else :
                // Fallback cuando no hay noticias en absoluto
                for ($i = 1; $i <= 3; $i++) :
                    ?>
                    <article class="news-card">
                        <div class="news-card__image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/news/noticia' . $i . '.svg'); ?>" alt="">
                        </div>
                        <div class="news-card__content">
                            <div class="news-card__meta">
                                <span class="news-card__date"><?php echo date('d/m/Y'); ?></span>
                                <span class="news-card__category"><?php esc_html_e('Noticias', 'uvh-theme'); ?></span>
                            </div>
                            <h3 class="news-card__title">
                                <a href="#"><?php printf(esc_html__('Noticia de ejemplo %d', 'uvh-theme'), $i); ?></a>
                            </h3>
                            <p class="news-card__excerpt"><?php esc_html_e('Descripción de la noticia. Agrega contenido desde el panel de WordPress.', 'uvh-theme'); ?></p>
                            <a href="#" class="news-card__link"><?php esc_html_e('Leer más →', 'uvh-theme'); ?></a>
                        </div>
                    </article>
                    <?php
                endfor;
            endif;
            ?>
        </div>
        <div class="news__cta">
            <a href="<?php echo esc_url(home_url('/noticias')); ?>" class="btn btn--secondary">
                <?php esc_html_e('Ver todas las noticias', 'uvh-theme'); ?>
            </a>
        </div>
    </div>
</section>
