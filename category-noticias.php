<?php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<!-- Hero Section -->
<section class="news-hero">
    <div class="container">
        <div class="news-hero__content">
            <h1 class="news-hero__title"><?php esc_html_e('Noticias UVH', 'uvh-theme'); ?></h1>
            <p class="news-hero__subtitle">
                <?php esc_html_e('Mantente al día con las últimas novedades, eventos y logros de la Universidad Venezolana de los Hidrocarburos', 'uvh-theme'); ?>
            </p>
        </div>
    </div>
</section>

<section class="news news--archive">
    <div class="container">

        <?php if (have_posts()) : ?>
            <div class="news-list">
                <?php while (have_posts()) : the_post(); ?>
                    <article <?php post_class('news-card news-card--list'); ?>>
                        <div class="news-card__image news-card__image--list">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('uvh-card'); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/news/noticia1.svg'); ?>" alt="">
                                <?php endif; ?>
                            </a>
                        </div>

                        <div class="news-card__content news-card__content--list">
                            <div class="news-card__meta">
                                <span class="news-card__date"><?php echo esc_html(get_the_date()); ?></span>
                                <span class="news-card__category"><?php esc_html_e('Noticias', 'uvh-theme'); ?></span>
                            </div>
                            <h2 class="news-card__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p class="news-card__excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 28)); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn--primary">
                                <?php esc_html_e('Leer más', 'uvh-theme'); ?>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="news-archive__pagination">
                <?php
                echo paginate_links([
                    'total'   => $GLOBALS['wp_query']->max_num_pages,
                    'current' => max(1, get_query_var('paged')),
                ]);
                ?>
            </div>
        <?php else : ?>
            <p class="news-archive__empty">
                <?php esc_html_e('Aún no hay noticias publicadas. Vuelve pronto.', 'uvh-theme'); ?>
            </p>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
