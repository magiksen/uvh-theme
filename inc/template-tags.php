<?php
declare(strict_types=1);

/**
 * Custom template tags for this theme
 *
 * @package UVH_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Display navigation to next/previous post
 */
function uvh_post_navigation(): void
{
    $prev_post = get_previous_post();
    $next_post = get_next_post();

    if (!$prev_post && !$next_post) {
        return;
    }

    ?>
    <nav class="post-navigation" aria-label="<?php esc_attr_e('Navegación de entradas', 'uvh-theme'); ?>">
        <div class="nav-links">
            <?php if ($prev_post) : ?>
                <div class="nav-previous">
                    <a href="<?php echo esc_url(get_permalink($prev_post)); ?>" rel="prev">
                        <span class="nav-subtitle"><?php esc_html_e('Anterior', 'uvh-theme'); ?></span>
                        <span class="nav-title"><?php echo esc_html(get_the_title($prev_post)); ?></span>
                    </a>
                </div>
            <?php endif; ?>

            <?php if ($next_post) : ?>
                <div class="nav-next">
                    <a href="<?php echo esc_url(get_permalink($next_post)); ?>" rel="next">
                        <span class="nav-subtitle"><?php esc_html_e('Siguiente', 'uvh-theme'); ?></span>
                        <span class="nav-title"><?php echo esc_html(get_the_title($next_post)); ?></span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </nav>
    <?php
}

/**
 * Display posted on date
 */
function uvh_posted_on(): void
{
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    
    if (get_the_time('U') !== get_the_modified_time('U')) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }

    $time_string = sprintf(
        $time_string,
        esc_attr(get_the_date(DATE_W3C)),
        esc_html(get_the_date()),
        esc_attr(get_the_modified_date(DATE_W3C)),
        esc_html(get_the_modified_date())
    );

    printf(
        '<span class="posted-on">%s</span>',
        $time_string
    );
}

/**
 * Display posted by author
 */
function uvh_posted_by(): void
{
    printf(
        '<span class="byline">%s <a class="url fn n" href="%s">%s</a></span>',
        esc_html__('por', 'uvh-theme'),
        esc_url(get_author_posts_url(get_the_author_meta('ID'))),
        esc_html(get_the_author())
    );
}

/**
 * Display entry footer
 */
function uvh_entry_footer(): void
{
    // Categories
    $categories_list = get_the_category_list('');
    if ($categories_list) {
        printf(
            '<div class="entry-meta-footer"><span class="meta-label">%s</span><div class="meta-items">%s</div></div>',
            esc_html__('Categorías:', 'uvh-theme'),
            $categories_list
        );
    }

    // Tags
    $tags_list = get_the_tag_list('', '');
    if ($tags_list) {
        printf(
            '<div class="entry-meta-footer"><span class="meta-label">%s</span><div class="meta-items">%s</div></div>',
            esc_html__('Etiquetas:', 'uvh-theme'),
            $tags_list
        );
    }
}
