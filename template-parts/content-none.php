<?php
declare(strict_types=1);

/**
 * Template part for displaying a message when no posts are found
 *
 * @package UVH_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e('No se encontró nada', 'uvh-theme'); ?></h1>
    </header>

    <div class="page-content">
        <?php
        if (is_home() && current_user_can('publish_posts')) :
            ?>
            <p>
                <?php
                printf(
                    wp_kses(
                        __('¿Listo para publicar tu primera entrada? <a href="%1$s">Comienza aquí</a>.', 'uvh-theme'),
                        ['a' => ['href' => []]]
                    ),
                    esc_url(admin_url('post-new.php'))
                );
                ?>
            </p>
        <?php elseif (is_search()) : ?>
            <p><?php esc_html_e('Lo sentimos, pero no se encontraron resultados para tu búsqueda. Por favor, intenta con otras palabras clave.', 'uvh-theme'); ?></p>
            <?php get_search_form(); ?>
        <?php else : ?>
            <p><?php esc_html_e('Parece que no podemos encontrar lo que estás buscando. Tal vez una búsqueda pueda ayudar.', 'uvh-theme'); ?></p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
</section>
