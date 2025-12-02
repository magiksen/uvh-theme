<?php
declare(strict_types=1);
/**
 * Template Name: Maestrías Especializadas
 * @package UVH_Theme
 */
if (!defined('ABSPATH')) { exit; }
get_header();
?>
<div class="programs-page">
    <section class="programs-hero">
        <div class="container">
            <div class="programs-hero__content">
                <nav class="breadcrumb">
                    <a href="<?php echo esc_url(home_url('/oferta-academica')); ?>"><?php esc_html_e('Oferta Académica', 'uvh-theme'); ?></a>
                    <span>›</span>
                    <span><?php esc_html_e('Maestrías', 'uvh-theme'); ?></span>
                </nav>
                <h1 class="programs-hero__title"><?php esc_html_e('Maestrías Especializadas', 'uvh-theme'); ?></h1>
                <p class="programs-hero__subtitle"><?php esc_html_e('Programas de postgrado tradicionales con formación avanzada en áreas estratégicas', 'uvh-theme'); ?></p>
            </div>
        </div>
    </section>

    <section class="programs-section" id="grado">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Grado Académico', 'uvh-theme'); ?></h2>
                <p class="section-header__subtitle"><?php esc_html_e('Formación de alto nivel para profesionales del sector energético', 'uvh-theme'); ?></p>
            </div>
            <div class="titulos-grid titulos-grid--single">
                <div class="titulo-card titulo-card--large">
                    <div class="titulo-card__icon">📚</div>
                    <h3 class="titulo-card__title"><?php esc_html_e('Magíster Scientiarum', 'uvh-theme'); ?></h3>
                    <p class="titulo-card__text"><?php esc_html_e('Grado académico de postgrado que certifica la formación avanzada en investigación y conocimiento especializado en el área de estudio.', 'uvh-theme'); ?></p>
                    <div class="titulo-card__duration">
                        <span class="titulo-card__duration-icon">⏱️</span>
                        <span><?php esc_html_e('Duración: 2 años', 'uvh-theme'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="programs-section programs-section--alt" id="programas">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Nuestras Maestrías', 'uvh-theme'); ?></h2>
                <p class="section-header__subtitle"><?php esc_html_e('3 maestrías especializadas en áreas estratégicas del sector energético', 'uvh-theme'); ?></p>
            </div>
            <div class="programs-grid">
                <!-- Maestría en Caracterización y Explotación de Yacimientos -->
                <div class="program-card-full" id="yacimientos">
                    <div class="program-card-full__icon">🛢️</div>
                    <div class="program-card-full__content">
                        <h3 class="program-card-full__title"><?php esc_html_e('Maestría en Caracterización y Explotación de Yacimientos', 'uvh-theme'); ?></h3>
                        <p class="program-card-full__description"><?php esc_html_e('Formar profesionales especializados con formación avanzada y conocimientos técnicos, científicos y económicos, enfocados en seleccionar los mejores esquemas de explotación de yacimientos e incrementar la producción.', 'uvh-theme'); ?></p>
                        <div class="program-card-full__perfiles">
                            <h4><?php esc_html_e('Perfil del Egresado:', 'uvh-theme'); ?></h4>
                            <ul>
                                <li><?php esc_html_e('Dominio de caracterización integrada (crudos livianos a pesados)', 'uvh-theme'); ?></li>
                                <li><?php esc_html_e('Simulación avanzada y recuperación mejorada', 'uvh-theme'); ?></li>
                                <li><?php esc_html_e('Maximizar productividad con rentabilidad óptima y sostenibilidad ambiental', 'uvh-theme'); ?></li>
                            </ul>
                        </div>
                        <ul class="program-card-full__features">
                            <li><strong><?php esc_html_e('Duración:', 'uvh-theme'); ?></strong> <?php esc_html_e('2 años', 'uvh-theme'); ?></li>
                            <li><strong><?php esc_html_e('Modalidad:', 'uvh-theme'); ?></strong> <?php esc_html_e('Presencial', 'uvh-theme'); ?></li>
                        </ul>
                    </div>
                </div>

                <!-- Maestría en Gestión de Datos -->
                <div class="program-card-full" id="gestion-datos">
                    <div class="program-card-full__icon">💻</div>
                    <div class="program-card-full__content">
                        <h3 class="program-card-full__title"><?php esc_html_e('Maestría en Gestión de Datos de Producción de Hidrocarburos', 'uvh-theme'); ?></h3>
                        <p class="program-card-full__description"><?php esc_html_e('Formar profesionales especializados que contribuyan a superar los retos de la industria en gestión de datos de exploración y producción para alcanzar las metas de producción.', 'uvh-theme'); ?></p>
                        <div class="program-card-full__perfiles">
                            <h4><?php esc_html_e('Perfil del Egresado:', 'uvh-theme'); ?></h4>
                            <ul>
                                <li><?php esc_html_e('Optimización del ciclo de vida de la información (Geociencias + Ingeniería + TIC)', 'uvh-theme'); ?></li>
                                <li><?php esc_html_e('Soluciones innovadoras para la transformación digital de la industria', 'uvh-theme'); ?></li>
                                <li><?php esc_html_e('Gestión estratégica de datos para la toma de decisiones', 'uvh-theme'); ?></li>
                            </ul>
                        </div>
                        <ul class="program-card-full__features">
                            <li><strong><?php esc_html_e('Duración:', 'uvh-theme'); ?></strong> <?php esc_html_e('2 años', 'uvh-theme'); ?></li>
                            <li><strong><?php esc_html_e('Modalidad:', 'uvh-theme'); ?></strong> <?php esc_html_e('Presencial', 'uvh-theme'); ?></li>
                        </ul>
                    </div>
                </div>

                <!-- Maestría en Ecología e Hidrocarburos -->
                <div class="program-card-full" id="ecologia">
                    <div class="program-card-full__icon">🌿</div>
                    <div class="program-card-full__content">
                        <h3 class="program-card-full__title"><?php esc_html_e('Maestría en Ecología e Hidrocarburos', 'uvh-theme'); ?></h3>
                        <p class="program-card-full__description"><?php esc_html_e('Formar profesionales especializados en el entendimiento de sistemas ecológicos, el reconocimiento de la biodiversidad venezolana, la comprensión de los impactos de la actividad petrolera y la orientación de proyectos hacia la sustentabilidad.', 'uvh-theme'); ?></p>
                        <div class="program-card-full__perfiles">
                            <h4><?php esc_html_e('Perfil del Egresado:', 'uvh-theme'); ?></h4>
                            <ul>
                                <li><?php esc_html_e('Conservación de sistemas ecológicos frente a la actividad petrolera', 'uvh-theme'); ?></li>
                                <li><?php esc_html_e('Saneamiento y restauración ambiental', 'uvh-theme'); ?></li>
                                <li><?php esc_html_e('Protección del ambiente y bienestar colectivo desde una perspectiva ética y legal', 'uvh-theme'); ?></li>
                            </ul>
                        </div>
                        <ul class="program-card-full__features">
                            <li><strong><?php esc_html_e('Duración:', 'uvh-theme'); ?></strong> <?php esc_html_e('2 años', 'uvh-theme'); ?></li>
                            <li><strong><?php esc_html_e('Modalidad:', 'uvh-theme'); ?></strong> <?php esc_html_e('Presencial', 'uvh-theme'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="programs-cta">
        <div class="container">
            <div class="programs-cta__content">
                <h2 class="programs-cta__title"><?php esc_html_e('¿Listo para especializarte?', 'uvh-theme'); ?></h2>
                <p class="programs-cta__text"><?php esc_html_e('Inicia tu proceso de admisión a nuestras maestrías especializadas', 'uvh-theme'); ?></p>
                <a href="<?php echo esc_url(home_url('/formulario-admision')); ?>" class="btn btn--primary btn--large"><?php esc_html_e('Iniciar Proceso de Admisión', 'uvh-theme'); ?></a>
            </div>
        </div>
    </section>
</div>
<?php get_footer();
