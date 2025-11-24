<?php
declare(strict_types=1);

/**
 * The main template file
 *
 * @package UVH_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="container">
    <div class="content-area">
        <?php
        if (have_posts()) :
            ?>
            <div class="posts-grid">
                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content', get_post_type());
                endwhile;
                ?>
            </div>

            <?php
            the_posts_navigation([
                'prev_text' => __('&larr; Entradas anteriores', 'uvh-theme'),
                'next_text' => __('Entradas siguientes &rarr;', 'uvh-theme'),
            ]);
        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>
    </div>

    <?php
    if (is_active_sidebar('sidebar-1')) :
        ?>
        <aside id="secondary" class="widget-area">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </aside>
        <?php
    endif;
    ?>
</div>

<?php
get_footer();
