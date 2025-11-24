<?php
declare(strict_types=1);

/**
 * The template for displaying single posts
 *
 * @package UVH_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="container single-post">
    <div class="content-area">
        <?php
        while (have_posts()) :
            the_post();

            if (get_post_type() === 'post') :
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('single-news'); ?>>
                    <header class="single-news__header">
                        <div class="single-news__breadcrumbs">
                            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Inicio', 'uvh-theme'); ?></a>
                            <span>›</span>
                            <a href="<?php echo esc_url(home_url('/noticias')); ?>"><?php esc_html_e('Noticias', 'uvh-theme'); ?></a>
                        </div>

                        <h1 class="single-news__title"><?php the_title(); ?></h1>

                        <div class="single-news__meta">
                            <span class="single-news__date"><?php echo esc_html(get_the_date()); ?></span>
                            <span class="single-news__separator">•</span>
                            <span class="single-news__author"><?php uvh_posted_by(); ?></span>
                        </div>
                    </header>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="single-news__image">
                            <?php the_post_thumbnail('uvh-hero'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="single-news__content">
                        <?php
                        the_content();

                        wp_link_pages([
                            'before' => '<div class="page-links">' . esc_html__('Páginas:', 'uvh-theme'),
                            'after'  => '</div>',
                        ]);
                        ?>
                    </div>

                    <footer class="single-news__footer">
                        <?php uvh_entry_footer(); ?>
                    </footer>
                </article>

                <?php uvh_post_navigation(); ?>

                <?php
            else :
                get_template_part('template-parts/content', get_post_type());

                uvh_post_navigation();
            endif;
        endwhile;
        ?>
    </div>

</div>

<?php
get_footer();
