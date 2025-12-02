<?php
declare(strict_types=1);
/**
 * Template Name: Programas Nacionales de Formación (PNF)
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
                    <span><?php esc_html_e('PNF', 'uvh-theme'); ?></span>
                </nav>
                <h1 class="programs-hero__title"><?php esc_html_e('Programas Nacionales de Formación (PNF)', 'uvh-theme'); ?></h1>
                <p class="programs-hero__subtitle"><?php esc_html_e('Pregrado especializado en el sector energético con salidas intermedias', 'uvh-theme'); ?></p>
            </div>
        </div>
    </section>

    <section class="programs-section" id="titulos">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Títulos y Grados Otorgados', 'uvh-theme'); ?></h2>
                <p class="section-header__subtitle"><?php esc_html_e('Nuestros PNF están diseñados con salidas intermedias que permiten la inserción laboral temprana', 'uvh-theme'); ?></p>
            </div>
            <div class="titulos-grid">
                <div class="titulo-card">
                    <div class="titulo-card__icon">📋</div>
                    <h3 class="titulo-card__title"><?php esc_html_e('Certificación de Competencias', 'uvh-theme'); ?></h3>
                    <p class="titulo-card__text"><?php esc_html_e('Al concluir el Trayecto I y demostrar las competencias prácticas', 'uvh-theme'); ?></p>
                </div>
                <div class="titulo-card">
                    <div class="titulo-card__icon">🎓</div>
                    <h3 class="titulo-card__title"><?php esc_html_e('Técnico Superior Universitario (TSU)', 'uvh-theme'); ?></h3>
                    <p class="titulo-card__text"><?php esc_html_e('Al completar el Trayecto II con prácticas profesionales', 'uvh-theme'); ?></p>
                </div>
                <div class="titulo-card">
                    <div class="titulo-card__icon">🏆</div>
                    <h3 class="titulo-card__title"><?php esc_html_e('Ingeniero/a', 'uvh-theme'); ?></h3>
                    <p class="titulo-card__text"><?php esc_html_e('Al completar el Trayecto IV con proyecto de grado', 'uvh-theme'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="programs-section programs-section--alt" id="programas">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Nuestros Programas', 'uvh-theme'); ?></h2>
                <p class="section-header__subtitle"><?php esc_html_e('5 programas especializados para la industria energética nacional', 'uvh-theme'); ?></p>
            </div>
            <div class="programs-grid">
                <!-- PNF Geofísica -->
                <div class="program-card-full" id="geofisica">
                    <div class="program-card-full__icon">🌍</div>
                    <div class="program-card-full__content">
                        <h3 class="program-card-full__title"><?php esc_html_e('PNF en Geofísica', 'uvh-theme'); ?></h3>
                        <p class="program-card-full__description"><?php esc_html_e('Formar el talento humano requerido por la industria petrolera nacional en Geofísica, para cumplir la política del Estado en caracterización y exploración de yacimientos.', 'uvh-theme'); ?></p>
                        <div class="program-card-full__perfiles">
                            <h4><?php esc_html_e('Perfiles de Egreso:', 'uvh-theme'); ?></h4>
                            <ul>
                                <li><strong><?php esc_html_e('Certificación (Asistente de Campo):', 'uvh-theme'); ?></strong> <?php esc_html_e('Preparación, instalación y configuración de equipos, recolección de datos y logística de campo.', 'uvh-theme'); ?></li>
                                <li><strong><?php esc_html_e('TSU:', 'uvh-theme'); ?></strong> <?php esc_html_e('Integra conocimientos de geología y física aplicados a yacimientos. Domina métodos sísmicos, gravimétricos y software especializado (SIG).', 'uvh-theme'); ?></li>
                                <li><strong><?php esc_html_e('Ingeniero/a:', 'uvh-theme'); ?></strong> <?php esc_html_e('Domina principios avanzados de la estructura terrestre. Gestiona proyectos de exploración y resuelve problemas complejos.', 'uvh-theme'); ?></li>
                            </ul>
                        </div>
                        <ul class="program-card-full__features">
                            <li><strong><?php esc_html_e('Título:', 'uvh-theme'); ?></strong> <?php esc_html_e('TSU/Ingeniero(a) en Geofísica', 'uvh-theme'); ?></li>
                            <li><strong><?php esc_html_e('Modalidad:', 'uvh-theme'); ?></strong> <?php esc_html_e('Presencial', 'uvh-theme'); ?></li>
                        </ul>
                        <?php get_template_part('template-parts/curriculum', 'geofisica'); ?>
                    </div>
                </div>

                <!-- PNF Gestión Integral de Pozos -->
                <div class="program-card-full" id="gestion-pozos">
                    <div class="program-card-full__icon">🛢️</div>
                    <div class="program-card-full__content">
                        <h3 class="program-card-full__title"><?php esc_html_e('PNF en Gestión Integral de Pozos de Hidrocarburos', 'uvh-theme'); ?></h3>
                        <p class="program-card-full__description"><?php esc_html_e('Formar el talento humano requerido por la industria petrolera nacional para cumplir la política de Estado en materia hidrocarburífera.', 'uvh-theme'); ?></p>
                        <div class="program-card-full__perfiles">
                            <h4><?php esc_html_e('Perfiles de Egreso:', 'uvh-theme'); ?></h4>
                            <ul>
                                <li><strong><?php esc_html_e('Certificación (Perforador/a):', 'uvh-theme'); ?></strong> <?php esc_html_e('Operación y mantenimiento de equipos de perforación y prevención de riesgos en taladro.', 'uvh-theme'); ?></li>
                                <li><strong><?php esc_html_e('TSU:', 'uvh-theme'); ?></strong> <?php esc_html_e('Domina procesos de perforación y terminación, fluidos y cementación. Elabora programas de costos y optimización.', 'uvh-theme'); ?></li>
                                <li><strong><?php esc_html_e('Ingeniero/a:', 'uvh-theme'); ?></strong> <?php esc_html_e('Diseña y optimiza fluidos, revestidores y trayectorias. Elabora modelos estáticos y programas de producción.', 'uvh-theme'); ?></li>
                            </ul>
                        </div>
                        <ul class="program-card-full__features">
                            <li><strong><?php esc_html_e('Título:', 'uvh-theme'); ?></strong> <?php esc_html_e('TSU/Ingeniero(a) en Gestión de Pozos', 'uvh-theme'); ?></li>
                            <li><strong><?php esc_html_e('Modalidad:', 'uvh-theme'); ?></strong> <?php esc_html_e('Presencial', 'uvh-theme'); ?></li>
                        </ul>
                        <?php get_template_part('template-parts/curriculum', 'gestion-pozos'); ?>
                    </div>
                </div>

                <!-- PNF Petroquímica -->
                <div class="program-card-full" id="petroquimica">
                    <div class="program-card-full__icon">⚗️</div>
                    <div class="program-card-full__content">
                        <h3 class="program-card-full__title"><?php esc_html_e('PNF en Petroquímica', 'uvh-theme'); ?></h3>
                        <p class="program-card-full__description"><?php esc_html_e('Formar profesionales con conocimientos para evaluar, mejorar y gestionar sistemas y procesos para la transformación de hidrocarburos en productos petroquímicos.', 'uvh-theme'); ?></p>
                        <div class="program-card-full__perfiles">
                            <h4><?php esc_html_e('Perfiles de Egreso:', 'uvh-theme'); ?></h4>
                            <ul>
                                <li><strong><?php esc_html_e('Certificación (Asistente de Procesos):', 'uvh-theme'); ?></strong> <?php esc_html_e('Operación de sistemas de control simples, mantenimiento básico y seguridad industrial.', 'uvh-theme'); ?></li>
                                <li><strong><?php esc_html_e('TSU:', 'uvh-theme'); ?></strong> <?php esc_html_e('Optimización de procesos industriales, instrumentación, control de variables y análisis de calidad.', 'uvh-theme'); ?></li>
                                <li><strong><?php esc_html_e('Ingeniero/a:', 'uvh-theme'); ?></strong> <?php esc_html_e('Diseño de reactores y operaciones unitarias. Gestión estratégica de la cadena de valor.', 'uvh-theme'); ?></li>
                            </ul>
                        </div>
                        <ul class="program-card-full__features">
                            <li><strong><?php esc_html_e('Título:', 'uvh-theme'); ?></strong> <?php esc_html_e('TSU/Ingeniero(a) en Petroquímica', 'uvh-theme'); ?></li>
                            <li><strong><?php esc_html_e('Modalidad:', 'uvh-theme'); ?></strong> <?php esc_html_e('Presencial', 'uvh-theme'); ?></li>
                        </ul>
                        <?php get_template_part('template-parts/curriculum', 'petroquimica'); ?>
                    </div>
                </div>

                <!-- PNF Producción y Procesamiento de Gas -->
                <div class="program-card-full" id="gas">
                    <div class="program-card-full__icon">🔥</div>
                    <div class="program-card-full__content">
                        <h3 class="program-card-full__title"><?php esc_html_e('PNF en Producción y Procesamiento de Gas', 'uvh-theme'); ?></h3>
                        <p class="program-card-full__description"><?php esc_html_e('Formar el talento humano requerido por la industria gasífera y petrolera nacional para cumplir la política de Estado en hidrocarburos gasíferos.', 'uvh-theme'); ?></p>
                        <div class="program-card-full__perfiles">
                            <h4><?php esc_html_e('Perfiles de Egreso:', 'uvh-theme'); ?></h4>
                            <ul>
                                <li><strong><?php esc_html_e('Certificación (Asistente de Producción):', 'uvh-theme'); ?></strong> <?php esc_html_e('Operación de equipos básicos en la cadena de valor del gas, toma de muestras y mantenimiento preventivo.', 'uvh-theme'); ?></li>
                                <li><strong><?php esc_html_e('TSU:', 'uvh-theme'); ?></strong> <?php esc_html_e('Manejo de equipos en toda la cadena de valor, optimización de producción y gestión de responsabilidad social.', 'uvh-theme'); ?></li>
                                <li><strong><?php esc_html_e('Ingeniero/a:', 'uvh-theme'); ?></strong> <?php esc_html_e('Diseño de redes de distribución y programas de mantenimiento. Innovación tecnológica para producción segura.', 'uvh-theme'); ?></li>
                            </ul>
                        </div>
                        <ul class="program-card-full__features">
                            <li><strong><?php esc_html_e('Título:', 'uvh-theme'); ?></strong> <?php esc_html_e('TSU/Ingeniero(a) en Gas', 'uvh-theme'); ?></li>
                            <li><strong><?php esc_html_e('Modalidad:', 'uvh-theme'); ?></strong> <?php esc_html_e('Presencial', 'uvh-theme'); ?></li>
                        </ul>
                        <?php get_template_part('template-parts/curriculum', 'gas'); ?>
                    </div>
                </div>

                <!-- PNF Yacimientos de Hidrocarburos -->
                <div class="program-card-full" id="yacimientos">
                    <div class="program-card-full__icon">⛏️</div>
                    <div class="program-card-full__content">
                        <h3 class="program-card-full__title"><?php esc_html_e('PNF en Yacimientos de Hidrocarburos', 'uvh-theme'); ?></h3>
                        <p class="program-card-full__description"><?php esc_html_e('Contribuir al desarrollo de PDVSA para cumplir la política del Estado en caracterización, exploración y explotación de yacimientos.', 'uvh-theme'); ?></p>
                        <div class="program-card-full__perfiles">
                            <h4><?php esc_html_e('Perfiles de Egreso:', 'uvh-theme'); ?></h4>
                            <ul>
                                <li><strong><?php esc_html_e('Certificación (Operador de Campo):', 'uvh-theme'); ?></strong> <?php esc_html_e('Funcionamiento diario de operaciones, inspección de equipos y registros de producción.', 'uvh-theme'); ?></li>
                                <li><strong><?php esc_html_e('TSU:', 'uvh-theme'); ?></strong> <?php esc_html_e('Caracterización de yacimientos (sistema roca-fluido), instrumentación y simulación básica.', 'uvh-theme'); ?></li>
                                <li><strong><?php esc_html_e('Ingeniero/a:', 'uvh-theme'); ?></strong> <?php esc_html_e('Métodos de recuperación mejorada (térmicos/químicos), modelado y simulación de reservas.', 'uvh-theme'); ?></li>
                            </ul>
                        </div>
                        <ul class="program-card-full__features">
                            <li><strong><?php esc_html_e('Título:', 'uvh-theme'); ?></strong> <?php esc_html_e('TSU/Ingeniero(a) en Yacimientos', 'uvh-theme'); ?></li>
                            <li><strong><?php esc_html_e('Modalidad:', 'uvh-theme'); ?></strong> <?php esc_html_e('Presencial', 'uvh-theme'); ?></li>
                        </ul>
                        <?php get_template_part('template-parts/curriculum', 'yacimientos'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="programs-cta">
        <div class="container">
            <div class="programs-cta__content">
                <h2 class="programs-cta__title"><?php esc_html_e('¿Listo para iniciar tu formación?', 'uvh-theme'); ?></h2>
                <p class="programs-cta__text"><?php esc_html_e('Inicia tu proceso de admisión y forma parte de la nueva generación de profesionales del sector energético', 'uvh-theme'); ?></p>
                <a href="<?php echo esc_url(home_url('/formulario-admision')); ?>" class="btn btn--primary btn--large"><?php esc_html_e('Iniciar Proceso de Admisión', 'uvh-theme'); ?></a>
            </div>
        </div>
    </section>
</div>
<?php get_footer();
