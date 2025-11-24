<?php
declare(strict_types=1);

/**
 * The template for displaying search results
 *
 * @package UVH_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="container search-results">
    <header class="page-header">
        <h1 class="page-title">
            <?php
            printf(
                esc_html__('Resultados de búsqueda para: %s', 'uvh-theme'),
                '<span>' . get_search_query() . '</span>'
            );
            ?>
        </h1>
    </header>

    <div class="content-area">
        <?php
        if (have_posts()) :
            ?>
            <div class="posts-grid">
                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content', 'search');
                endwhile;
                ?>
            </div>

            <?php
            the_posts_navigation([
                'prev_text' => __('&larr; Resultados anteriores', 'uvh-theme'),
                'next_text' => __('Más resultados &rarr;', 'uvh-theme'),
            ]);
        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>
    </div>
</div>

<?php
get_footer();
