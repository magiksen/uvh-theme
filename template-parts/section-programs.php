<?php
declare(strict_types=1);

/**
 * Template part for displaying Programs section
 *
 * @package UVH_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Programs Section -->
<section class="programs" id="oferta-academica">
    <div class="container">
        <div class="section-header section-header--center">
            <h2 class="section-header__title"><?php esc_html_e('Nuestra Oferta Académica', 'uvh-theme'); ?></h2>
            <p class="section-header__subtitle"><?php esc_html_e('Programas diseñados para formar líderes en el sector energético de Venezuela', 'uvh-theme'); ?></p>
        </div>
        <div class="programs__grid">
            <!-- PNF - Pregrado -->
            <div class="program-card">
                <div class="program-card__icon">
                    <span>🎓</span>
                </div>
                <h3 class="program-card__title"><?php esc_html_e('PROGRAMAS NACIONALES DE FORMACIÓN (PNF)', 'uvh-theme'); ?></h3>
                <p class="program-card__description">
                    <?php esc_html_e('5 programas de pregrado especializados en el sector energético venezolano.', 'uvh-theme'); ?>
                </p>
                <ul class="program-card__list">
                    <li><?php esc_html_e('Geofísica', 'uvh-theme'); ?></li>
                    <li><?php esc_html_e('Gestión Integral de Pozos', 'uvh-theme'); ?></li>
                    <li><?php esc_html_e('Petroquímica', 'uvh-theme'); ?></li>
                    <li><?php esc_html_e('Producción y Procesamiento de Gas', 'uvh-theme'); ?></li>
                    <li><?php esc_html_e('Yacimientos de Hidrocarburos', 'uvh-theme'); ?></li>
                </ul>
                <a href="<?php echo esc_url(home_url('/oferta-academica#pregrado')); ?>" class="program-card__link"><?php esc_html_e('Ver programas →', 'uvh-theme'); ?></a>
            </div>

            <!-- PNFA - Postgrado Avanzado -->
            <div class="program-card">
                <div class="program-card__icon">
                    <span>🎯</span>
                </div>
                <h3 class="program-card__title"><?php esc_html_e('PROGRAMAS DE FORMACIÓN AVANZADA (PNFA)', 'uvh-theme'); ?></h3>
                <p class="program-card__description">
                    <?php esc_html_e('Postgrados especializados en áreas estratégicas del sector energético y minero.', 'uvh-theme'); ?>
                </p>
                <ul class="program-card__list">
                    <li><?php esc_html_e('Salud de los Trabajadores', 'uvh-theme'); ?></li>
                    <li><?php esc_html_e('Comunicación Social Energética', 'uvh-theme'); ?></li>
                    <li><?php esc_html_e('Exploración y Extracción Minera', 'uvh-theme'); ?></li>
                </ul>
                <a href="<?php echo esc_url(home_url('/oferta-academica#postgrado')); ?>" class="program-card__link"><?php esc_html_e('Ver programas →', 'uvh-theme'); ?></a>
            </div>

            <!-- Maestrías -->
            <div class="program-card">
                <div class="program-card__icon">
                    <span>📚</span>
                </div>
                <h3 class="program-card__title"><?php esc_html_e('MAESTRÍAS', 'uvh-theme'); ?></h3>
                <p class="program-card__description">
                    <?php esc_html_e('Programas de postgrado tradicionales con formación avanzada y especializada.', 'uvh-theme'); ?>
                </p>
                <ul class="program-card__list">
                    <li><?php esc_html_e('Caracterización y Explotación de Yacimientos', 'uvh-theme'); ?></li>
                    <li><?php esc_html_e('Gestión de Datos de Producción', 'uvh-theme'); ?></li>
                    <li><?php esc_html_e('Ecología e Hidrocarburos', 'uvh-theme'); ?></li>
                </ul>
                <a href="<?php echo esc_url(home_url('/oferta-academica#postgrado')); ?>" class="program-card__link"><?php esc_html_e('Ver programas →', 'uvh-theme'); ?></a>
            </div>

            <!-- Estudios Internacionales -->
            <div class="program-card">
                <div class="program-card__icon">
                    <span>🌎</span>
                </div>
                <h3 class="program-card__title"><?php esc_html_e('ESTUDIOS INTERNACIONALES', 'uvh-theme'); ?></h3>
                <p class="program-card__description">
                    <?php esc_html_e('Convenios y programas de intercambio con universidades y centros de investigación internacionales.', 'uvh-theme'); ?>
                </p>
                <ul class="program-card__list">
                    <li><?php esc_html_e('Convenios Internacionales', 'uvh-theme'); ?></li>
                    <li><?php esc_html_e('Programas de Intercambio', 'uvh-theme'); ?></li>
                    <li><?php esc_html_e('Doble Titulación', 'uvh-theme'); ?></li>
                    <li><?php esc_html_e('Movilidad Estudiantil', 'uvh-theme'); ?></li>
                </ul>
                <!-- <a href="<?php echo esc_url(home_url('/oferta-academica')); ?>" class="program-card__link"><?php esc_html_e('Ver más →', 'uvh-theme'); ?></a> -->
            </div>
        </div>
    </div>
</section>
