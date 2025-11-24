<?php
declare(strict_types=1);

if (!defined('ABSPATH')) exit;

// Query hero slides (solo activos)
$hero_slides = new WP_Query([
    'post_type' => 'hero_slide',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'meta_query' => [
        'relation' => 'OR',
        [
            'key' => '_uvh_slide_active',
            'value' => '1',
            'compare' => '='
        ],
        [
            'key' => '_uvh_slide_active',
            'compare' => 'NOT EXISTS'
        ]
    ],
    'meta_key' => '_uvh_slide_order',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
]);

$has_custom_slides = $hero_slides->have_posts();
?>

<!-- Hero Section with Slider -->
<section class="hero" id="inicio">
    <div class="hero__slider-container">
        <?php if ($has_custom_slides) : ?>
            <?php while ($hero_slides->have_posts()) : $hero_slides->the_post(); 
            $subtitle = get_post_meta(get_the_ID(), '_uvh_slide_subtitle', true);
            $button1_text = get_post_meta(get_the_ID(), '_uvh_slide_button1_text', true);
            $button1_link = get_post_meta(get_the_ID(), '_uvh_slide_button1_link', true);
            $button2_text = get_post_meta(get_the_ID(), '_uvh_slide_button2_text', true);
            $button2_link = get_post_meta(get_the_ID(), '_uvh_slide_button2_link', true);
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
        ?>
        
        <div class="hero__slide">
            <div class="hero__overlay"></div>
            <div class="hero__background">
                <?php if ($image_url) : ?>
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                <?php else : ?>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hero/estudiantes.svg'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="hero__content">
                    <h1 class="hero__title">
                        <?php 
                        // Convertir el título en líneas separadas por <br>
                        $title = get_the_title();
                        $title_words = explode(' ', $title);
                        $lines = [];
                        $current_line = '';
                        
                        foreach ($title_words as $word) {
                            if (strlen($current_line . ' ' . $word) > 20 && !empty($current_line)) {
                                $lines[] = $current_line;
                                $current_line = $word;
                            } else {
                                $current_line .= (empty($current_line) ? '' : ' ') . $word;
                            }
                        }
                        if (!empty($current_line)) {
                            $lines[] = $current_line;
                        }
                        
                        echo implode('<br>', array_map('esc_html', $lines));
                        ?>
                    </h1>
                    
                    <?php if ($subtitle) : ?>
                        <p class="hero__subtitle">
                            <?php echo esc_html($subtitle); ?>
                        </p>
                    <?php endif; ?>
                    
                    <?php if ($button1_text || $button2_text) : ?>
                        <div class="hero__actions">
                            <?php if ($button1_text && $button1_link) : ?>
                                <a href="<?php echo esc_url($button1_link); ?>" class="btn btn--primary">
                                    <?php echo esc_html($button1_text); ?>
                                </a>
                            <?php endif; ?>
                            
                            <?php if ($button2_text && $button2_link) : ?>
                                <a href="<?php echo esc_url($button2_link); ?>" class="btn btn--outline">
                                    <?php echo esc_html($button2_text); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
        <?php endwhile; wp_reset_postdata(); ?>
        
        <!-- Slide de Noticia Destacada -->
        <?php
        // Obtener la noticia destacada (la más reciente con categoría "noticias")
        $featured_news = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 1,
            'post_status' => 'publish',
            'category_name' => 'noticias',
            'orderby' => 'date',
            'order' => 'DESC',
        ]);
        
        if ($featured_news->have_posts()) :
            while ($featured_news->have_posts()) : $featured_news->the_post();
                $news_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                $news_excerpt = wp_trim_words(get_the_excerpt(), 30, '...');
        ?>
        
        <div class="hero__slide hero__slide--news">
            <div class="hero__overlay"></div>
            <div class="hero__background">
                <?php if ($news_image) : ?>
                    <img src="<?php echo esc_url($news_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                <?php else : ?>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hero/estudiantes.svg'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="hero__content hero__content--news">
                    <span class="hero__news-badge">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/>
                            <path d="M18 14h-8"/>
                            <path d="M15 18h-5"/>
                            <path d="M10 6h8v4h-8z"/>
                        </svg>
                        <?php esc_html_e('Noticia Destacada', 'uvh-theme'); ?>
                    </span>
                    <h1 class="hero__title hero__title--news">
                        <?php echo esc_html(get_the_title()); ?>
                    </h1>
                    <p class="hero__subtitle hero__subtitle--news">
                        <?php echo esc_html($news_excerpt); ?>
                    </p>
                    <div class="hero__actions">
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn--primary">
                            <?php esc_html_e('Ver noticia', 'uvh-theme'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/noticias')); ?>" class="btn btn--outline">
                            <?php esc_html_e('Ver más noticias', 'uvh-theme'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
        
        <?php else : ?>
            <!-- Slide por defecto cuando no hay slides personalizados -->
            <div class="hero__slide active">
                <div class="hero__overlay"></div>
                <div class="hero__background">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hero/estudiantes.svg'); ?>" alt="<?php esc_attr_e('Campus UVH', 'uvh-theme'); ?>">
                </div>
                <div class="container">
                    <div class="hero__content">
                        <h1 class="hero__title">
                            <?php esc_html_e('UNIVERSIDAD', 'uvh-theme'); ?><br>
                            <?php esc_html_e('VENEZOLANA DE', 'uvh-theme'); ?><br>
                            <?php esc_html_e('LOS', 'uvh-theme'); ?><br>
                            <?php esc_html_e('HIDROCARBUROS', 'uvh-theme'); ?>
                        </h1>
                        <p class="hero__subtitle">
                            <?php esc_html_e('Formando profesionales de excelencia para el desarrollo del sector energético venezolano', 'uvh-theme'); ?>
                        </p>
                        <div class="hero__actions">
                            <a href="#nosotros" class="btn btn--primary"><?php esc_html_e('Conoce más', 'uvh-theme'); ?></a>
                            <a href="#oferta-academica" class="btn btn--outline"><?php esc_html_e('Programas académicos', 'uvh-theme'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    
    <?php 
    // Calcular el total de slides (custom slides + slide de noticias si existe)
    $total_slides = $has_custom_slides ? $hero_slides->post_count : 0;
    if ($featured_news && $featured_news->have_posts()) {
        $total_slides++;
    }
    
    if ($total_slides > 1) : 
    ?>
        <!-- Slider Controls -->
        <button class="hero__nav hero__nav--prev" aria-label="<?php esc_attr_e('Slide anterior', 'uvh-theme'); ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
        </button>
        <button class="hero__nav hero__nav--next" aria-label="<?php esc_attr_e('Siguiente slide', 'uvh-theme'); ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </button>
        
        <!-- Slider Indicators -->
        <div class="hero__indicators">
            <?php for ($i = 0; $i < $total_slides; $i++) : ?>
                <button 
                    class="hero__indicator <?php echo $i === 0 ? 'active' : ''; ?>" 
                    data-slide="<?php echo esc_attr($i); ?>"
                    aria-label="<?php echo esc_attr(sprintf(__('Ir al slide %d', 'uvh-theme'), $i + 1)); ?>"
                ></button>
            <?php endfor; ?>
        </div>
    <?php endif; ?>

</section>
