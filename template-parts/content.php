<?php
declare(strict_types=1);

/**
 * Template part for displaying posts
 *
 * @package UVH_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <div class="post-card__thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('uvh-card'); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="post-card__content">
        <header class="post-card__header">
            <?php
            if (is_singular()) :
                the_title('<h1 class="post-card__title">', '</h1>');
            else :
                the_title('<h2 class="post-card__title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            endif;
            ?>

            <div class="post-card__meta">
                <?php
                uvh_posted_on();
                uvh_posted_by();
                ?>
            </div>
        </header>

        <div class="post-card__excerpt">
            <?php
            if (is_singular()) {
                the_content();

                wp_link_pages([
                    'before' => '<div class="page-links">' . esc_html__('Páginas:', 'uvh-theme'),
                    'after'  => '</div>',
                ]);
            } else {
                the_excerpt();
                ?>
                <a href="<?php the_permalink(); ?>" class="btn btn--primary">
                    <?php esc_html_e('Leer más', 'uvh-theme'); ?>
                </a>
                <?php
            }
            ?>
        </div>

        <?php if (is_singular()) : ?>
            <footer class="post-card__footer">
                <?php uvh_entry_footer(); ?>
            </footer>
        <?php endif; ?>
    </div>
</article>
