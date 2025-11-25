<?php
declare(strict_types=1);

/**
 * Template Name: Oferta Académica
 * 
 * @package UVH_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="programs-page">
    <!-- Hero Section -->
    <section class="programs-hero">
        <div class="container">
            <div class="programs-hero__content">
                <h1 class="programs-hero__title">Oferta Académica</h1>
                <p class="programs-hero__subtitle">
                    Programas de formación especializada en el sector energético
                </p>
            </div>
        </div>
    </section>

    <!-- Programas Nacionales de Formación (PNF) - Pregrado -->
    <section class="programs-section" id="pregrado">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title">Programas Nacionales de Formación (PNF)</h2>
                <p class="section-header__subtitle">
                    Programas de pregrado especializados en el sector energético
                </p>
            </div>

            <div class="programs-grid">
                <!-- PNF Geofísica -->
                <div class="program-card-full">
                    <div class="program-card-full__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                        </svg>
                    </div>
                    <div class="program-card-full__content">
                        <h3 class="program-card-full__title">PNF en Geofísica</h3>
                        <p class="program-card-full__description">
                            Formar el talento humano requerido por la industria petrolera nacional en Geofísica, para cumplir la política del Estado en caracterización y exploración de yacimientos, desarrollando profesionales integrales con una nueva ética.
                        </p>
                        <ul class="program-card-full__features">
                            <li><strong>Tipo:</strong> Programa Nacional de Formación</li>
                            <li><strong>Título:</strong> TSU/Ingeniero(a) en Geofísica</li>
                            <li><strong>Modalidad:</strong> Presencial</li>
                        </ul>
                        <div class="program-card-full__topics">
                            <span class="topic-tag">Geofísica de Exploración</span>
                            <span class="topic-tag">Geofísica Ambiental</span>
                            <span class="topic-tag">Clima</span>
                        </div>
                        
                        <?php get_template_part('template-parts/curriculum', 'geofisica'); ?>
                    </div>
                </div>

                <!-- PNF Gestión Integral de Pozos -->
                <div class="program-card-full">
                    <div class="program-card-full__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20M2 12h20M6 6l12 12M6 18L18 6"/>
                        </svg>
                    </div>
                    <div class="program-card-full__content">
                        <h3 class="program-card-full__title">PNF en Gestión Integral de Pozos de Hidrocarburos</h3>
                        <p class="program-card-full__description">
                            Formar el talento humano requerido por la industria petrolera nacional para cumplir la política de Estado en materia hidrocarburífera, desarrollando profesionales integrales, creativos e innovadores.
                        </p>
                        <ul class="program-card-full__features">
                            <li><strong>Tipo:</strong> Programa Nacional de Formación</li>
                            <li><strong>Título:</strong> TSU/Ingeniero(a) en Gestión de Pozos</li>
                            <li><strong>Modalidad:</strong> Presencial</li>
                        </ul>
                        <div class="program-card-full__topics">
                            <span class="topic-tag">Recuperación Mejorada (EOR)</span>
                            <span class="topic-tag">Sistemas de Producción</span>
                            <span class="topic-tag">Monitoreo Avanzado</span>
                        </div>

                        <?php get_template_part('template-parts/curriculum', 'gestion-pozos'); ?>
                    </div>
                </div>

                <!-- PNF Petroquímica -->
                <div class="program-card-full">
                    <div class="program-card-full__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 2v6h6V2M9 8v6h6V8M9 14v6h6v-6"/>
                        </svg>
                    </div>
                    <div class="program-card-full__content">
                        <h3 class="program-card-full__title">PNF en Petroquímica</h3>
                        <p class="program-card-full__description">
                            Formar profesionales con conocimientos para evaluar, mejorar y gestionar sistemas y procesos para la transformación de hidrocarburos en productos petroquímicos, desarrollando profesionales integrales con una nueva ética.
                        </p>
                        <ul class="program-card-full__features">
                            <li><strong>Tipo:</strong> Programa Nacional de Formación</li>
                            <li><strong>Título:</strong> TSU/Ingeniero(a) en Petroquímica</li>
                            <li><strong>Modalidad:</strong> Presencial</li>
                        </ul>
                        <div class="program-card-full__topics">
                            <span class="topic-tag">Transformación de Hidrocarburos</span>
                            <span class="topic-tag">Catalizadores</span>
                            <span class="topic-tag">Sostenibilidad</span>
                        </div>

                        <?php get_template_part('template-parts/curriculum', 'petroquimica'); ?>
                    </div>
                </div>

                <!-- PNF Producción y Procesamiento de Gas -->
                <div class="program-card-full">
                    <div class="program-card-full__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 6v6l4 2"/>
                        </svg>
                    </div>
                    <div class="program-card-full__content">
                        <h3 class="program-card-full__title">PNF en Producción y Procesamiento de Gas</h3>
                        <p class="program-card-full__description">
                            Formar el talento humano requerido por la industria gasífera y petrolera nacional para cumplir la política de Estado en hidrocarburos gasíferos, desarrollando profesionales integrales en Ingeniería de Producción y Procesamiento del Gas.
                        </p>
                        <ul class="program-card-full__features">
                            <li><strong>Tipo:</strong> Programa Nacional de Formación</li>
                            <li><strong>Título:</strong> TSU/Ingeniero(a) en Gas</li>
                            <li><strong>Modalidad:</strong> Presencial</li>
                        </ul>
                        <div class="program-card-full__topics">
                            <span class="topic-tag">Yacimientos Gasíferos</span>
                            <span class="topic-tag">Cadena de Valor</span>
                            <span class="topic-tag">Transición Energética</span>
                            <span class="topic-tag">Industrialización</span>
                        </div>

                        <?php get_template_part('template-parts/curriculum', 'gas'); ?>
                    </div>
                </div>

                <!-- PNF Yacimientos de Hidrocarburos -->
                <div class="program-card-full">
                    <div class="program-card-full__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 20h18M5 20V10l7-7 7 7v10"/>
                        </svg>
                    </div>
                    <div class="program-card-full__content">
                        <h3 class="program-card-full__title">PNF en Yacimientos de Hidrocarburos</h3>
                        <p class="program-card-full__description">
                            Contribuir al desarrollo de PDVSA para cumplir la política del Estado en caracterización, exploración y explotación de yacimientos, formando profesionales creativos e innovadores.
                        </p>
                        <ul class="program-card-full__features">
                            <li><strong>Tipo:</strong> Programa Nacional de Formación</li>
                            <li><strong>Título:</strong> TSU/Ingeniero(a) en Yacimientos</li>
                            <li><strong>Modalidad:</strong> Presencial</li>
                        </ul>
                        <div class="program-card-full__topics">
                            <span class="topic-tag">Caracterización</span>
                            <span class="topic-tag">Modelado</span>
                            <span class="topic-tag">Recuperación Mejorada</span>
                            <span class="topic-tag">Monitoreo</span>
                        </div>

                        <?php get_template_part('template-parts/curriculum', 'yacimientos'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programas Nacionales de Formación Avanzada (PNFA) -->
    <section class="programs-section programs-section--alt" id="postgrado">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title">Programas Nacionales de Formación Avanzada (PNFA)</h2>
                <p class="section-header__subtitle">
                    Programas de postgrado especializados en áreas estratégicas
                </p>
            </div>

            <div class="programs-grid programs-grid--compact">
                <!-- PNFA Salud de los Trabajadores -->
                <div class="program-card-compact">
                    <div class="program-card-compact__header">
                        <span class="program-card-compact__level">PNFA</span>
                        <h3 class="program-card-compact__title">Salud de los Trabajadores en el Sector Hidrocarburos y Minería</h3>
                    </div>
                    <p class="program-card-compact__description">
                        Formar cuadros profesionales con cualidades éticas y amplios conocimientos técnico-científicos para abordar la prevención, promoción, cuidado y protección de la salud de los trabajadores en el sector.
                    </p>
                    <div class="program-card-compact__meta">
                        <span>Postgrado Avanzado</span>
                        <span>•</span>
                        <span>Presencial</span>
                    </div>
                </div>

                <!-- PNFA Comunicación Social -->
                <div class="program-card-compact">
                    <div class="program-card-compact__header">
                        <span class="program-card-compact__level">PNFA</span>
                        <h3 class="program-card-compact__title">Comunicación Social en Asuntos Energéticos</h3>
                    </div>
                    <p class="program-card-compact__description">
                        Formar comunicadores sociales especializados en hidrocarburos para atender las directrices de la política comunicacional energética de Venezuela y potenciar el sentido de pertenencia.
                    </p>
                    <div class="program-card-compact__meta">
                        <span>Postgrado Avanzado</span>
                        <span>•</span>
                        <span>Presencial</span>
                    </div>
                </div>

                <!-- PNFA Exploración y Extracción Minera -->
                <div class="program-card-compact">
                    <div class="program-card-compact__header">
                        <span class="program-card-compact__level">PNFA</span>
                        <h3 class="program-card-compact__title">Exploración y Extracción Minera</h3>
                    </div>
                    <p class="program-card-compact__description">
                        Formar los cuadros necesarios en áreas de exploración y extracción minera para atender las necesidades de instituciones y empresas del sector público, con énfasis en el Arco Minero del Orinoco.
                    </p>
                    <div class="program-card-compact__meta">
                        <span>Postgrado Avanzado</span>
                        <span>•</span>
                        <span>Presencial</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Maestrías -->
    <section class="programs-section">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title">Maestrías</h2>
                <p class="section-header__subtitle">
                    Programas de postgrado tradicionales con formación avanzada
                </p>
            </div>

            <div class="programs-grid programs-grid--compact">
                <!-- Maestría en Caracterización y Explotación de Yacimientos -->
                <div class="program-card-compact">
                    <div class="program-card-compact__header">
                        <span class="program-card-compact__level">Maestría</span>
                        <h3 class="program-card-compact__title">Caracterización y Explotación de Yacimientos</h3>
                    </div>
                    <p class="program-card-compact__description">
                        Formar profesionales especializados con formación avanzada y conocimientos técnicos, científicos y económicos, enfocados en seleccionar los mejores esquemas de explotación de yacimientos e incrementar la producción.
                    </p>
                    <div class="program-card-compact__meta">
                        <span>2 años</span>
                        <span>•</span>
                        <span>Presencial</span>
                    </div>
                </div>

                <!-- Maestría en Gestión de Datos -->
                <div class="program-card-compact">
                    <div class="program-card-compact__header">
                        <span class="program-card-compact__level">Maestría</span>
                        <h3 class="program-card-compact__title">Gestión de Datos de Producción de Hidrocarburos</h3>
                    </div>
                    <p class="program-card-compact__description">
                        Formar profesionales especializados que contribuyan a superar los retos de la industria en gestión de datos de exploración y producción para alcanzar las metas de producción.
                    </p>
                    <div class="program-card-compact__meta">
                        <span>2 años</span>
                        <span>•</span>
                        <span>Presencial</span>
                    </div>
                </div>

                <!-- Maestría en Ecología e Hidrocarburos -->
                <div class="program-card-compact">
                    <div class="program-card-compact__header">
                        <span class="program-card-compact__level">Maestría</span>
                        <h3 class="program-card-compact__title">Ecología e Hidrocarburos</h3>
                    </div>
                    <p class="program-card-compact__description">
                        Formar profesionales especializados en el entendimiento de sistemas ecológicos, el reconocimiento de la biodiversidad venezolana, la comprensión de los impactos de la actividad petrolera y la orientación de proyectos hacia la sustentabilidad.
                    </p>
                    <div class="program-card-compact__meta">
                        <span>2 años</span>
                        <span>•</span>
                        <span>Presencial</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="programs-cta">
        <div class="container">
            <div class="programs-cta__content">
                <h2 class="programs-cta__title">¿Listo para formar parte de la UVH?</h2>
                <p class="programs-cta__text">
                    Inicia tu proceso de admisión y únete a la comunidad de profesionales del sector energético
                </p>
                <a href="<?php echo esc_url(home_url('/#admision')); ?>" class="btn btn--primary btn--large">
                    Ver Proceso de Admisión
                </a>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
