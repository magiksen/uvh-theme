<?php
declare(strict_types=1);
/**
 * Template Name: Programas Nacionales de Formación Avanzada (PNFA)
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
                    <span><?php esc_html_e('PNFA', 'uvh-theme'); ?></span>
                </nav>
                <h1 class="programs-hero__title"><?php esc_html_e('Programas Nacionales de Formación Avanzada (PNFA)', 'uvh-theme'); ?></h1>
                <p class="programs-hero__subtitle"><?php esc_html_e('Postgrado especializado con énfasis en investigación aplicada e innovación tecnológica', 'uvh-theme'); ?></p>
            </div>
        </div>
    </section>

    <section class="programs-section" id="grados">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Grados Académicos', 'uvh-theme'); ?></h2>
                <p class="section-header__subtitle"><?php esc_html_e('Dirigidos a la especialización profesional en el sector energético', 'uvh-theme'); ?></p>
            </div>
            <div class="titulos-grid">
                <div class="titulo-card">
                    <div class="titulo-card__icon">🎖️</div>
                    <h3 class="titulo-card__title"><?php esc_html_e('Especialista', 'uvh-theme'); ?></h3>
                    <p class="titulo-card__text"><?php esc_html_e('Formación avanzada en áreas específicas del sector energético', 'uvh-theme'); ?></p>
                </div>
                <div class="titulo-card">
                    <div class="titulo-card__icon">🔬</div>
                    <h3 class="titulo-card__title"><?php esc_html_e('Magíster Scientiarum', 'uvh-theme'); ?></h3>
                    <p class="titulo-card__text"><?php esc_html_e('Investigación aplicada y desarrollo de conocimiento especializado', 'uvh-theme'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="programs-section programs-section--alt" id="programas">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Nuestros Programas', 'uvh-theme'); ?></h2>
                <p class="section-header__subtitle"><?php esc_html_e('3 programas de formación avanzada para profesionales del sector', 'uvh-theme'); ?></p>
            </div>
            <div class="programs-grid">
                <!-- PNFA Salud de los Trabajadores -->
                <div class="program-card-full" id="salud-trabajadores">
                    <div class="program-card-full__icon">🏥</div>
                    <div class="program-card-full__content">
                        <h3 class="program-card-full__title"><?php esc_html_e('PNFA en Salud de los Trabajadores en el Sector Hidrocarburos y Minería', 'uvh-theme'); ?></h3>
                        <p class="program-card-full__description"><?php esc_html_e('Formar cuadros profesionales con cualidades éticas y amplios conocimientos técnico-científicos para abordar la prevención, promoción, cuidado y protección de la salud de los trabajadores en el sector.', 'uvh-theme'); ?></p>
                        <div class="program-card-full__perfiles">
                            <h4><?php esc_html_e('Perfiles de Egreso:', 'uvh-theme'); ?></h4>
                            <ul>
                                <li><strong><?php esc_html_e('Especialista:', 'uvh-theme'); ?></strong> <?php esc_html_e('Vigilancia y monitoreo de salud, identificación de agentes tóxicos, prevención de riesgos y diseño de programas de contingencia.', 'uvh-theme'); ?></li>
                                <li><strong><?php esc_html_e('Magíster Scientiarum:', 'uvh-theme'); ?></strong> <?php esc_html_e('Gestión organizacional y talento humano. Diseño de cuadros de mando, auditorías ocupacionales y estrategias de intervención en clima laboral.', 'uvh-theme'); ?></li>
                            </ul>
                        </div>
                        <ul class="program-card-full__features">
                            <li><strong><?php esc_html_e('Nivel:', 'uvh-theme'); ?></strong> <?php esc_html_e('Postgrado Avanzado', 'uvh-theme'); ?></li>
                            <li><strong><?php esc_html_e('Modalidad:', 'uvh-theme'); ?></strong> <?php esc_html_e('Presencial', 'uvh-theme'); ?></li>
                        </ul>
                    </div>
                </div>

                <!-- PNFA Comunicación Social -->
                <div class="program-card-full" id="comunicacion-social">
                    <div class="program-card-full__icon">📡</div>
                    <div class="program-card-full__content">
                        <h3 class="program-card-full__title"><?php esc_html_e('PNFA en Comunicación Social en Asuntos Energéticos', 'uvh-theme'); ?></h3>
                        <p class="program-card-full__description"><?php esc_html_e('Formar comunicadores sociales especializados en hidrocarburos para atender las directrices de la política comunicacional energética de Venezuela y potenciar el sentido de pertenencia.', 'uvh-theme'); ?></p>
                        <div class="program-card-full__perfiles">
                            <h4><?php esc_html_e('Perfiles de Egreso:', 'uvh-theme'); ?></h4>
                            <ul>
                                <li><strong><?php esc_html_e('Especialista:', 'uvh-theme'); ?></strong> <?php esc_html_e('Interpretación del impacto geopolítico de los hidrocarburos, producción multimedia y análisis de escenarios comunicacionales.', 'uvh-theme'); ?></li>
                                <li><strong><?php esc_html_e('Magíster Scientiarum:', 'uvh-theme'); ?></strong> <?php esc_html_e('Investigación teórica-metodológica con énfasis en medios alternativos. Análisis geopolítico mundial y construcción de discursos para un mundo pluripolar.', 'uvh-theme'); ?></li>
                            </ul>
                        </div>
                        <ul class="program-card-full__features">
                            <li><strong><?php esc_html_e('Nivel:', 'uvh-theme'); ?></strong> <?php esc_html_e('Postgrado Avanzado', 'uvh-theme'); ?></li>
                            <li><strong><?php esc_html_e('Modalidad:', 'uvh-theme'); ?></strong> <?php esc_html_e('Presencial', 'uvh-theme'); ?></li>
                        </ul>
                    </div>
                </div>

                <!-- PNFA Exploración y Extracción Minera -->
                <div class="program-card-full" id="mineria">
                    <div class="program-card-full__icon">⛏️</div>
                    <div class="program-card-full__content">
                        <h3 class="program-card-full__title"><?php esc_html_e('PNFA en Exploración y Extracción Minera', 'uvh-theme'); ?></h3>
                        <p class="program-card-full__description"><?php esc_html_e('Formar los cuadros necesarios en áreas de exploración y extracción minera para atender las necesidades de instituciones y empresas del sector público, con énfasis en el Arco Minero del Orinoco.', 'uvh-theme'); ?></p>
                        <div class="program-card-full__perfiles">
                            <h4><?php esc_html_e('Perfiles de Egreso:', 'uvh-theme'); ?></h4>
                            <ul>
                                <li><strong><?php esc_html_e('Especialista:', 'uvh-theme'); ?></strong> <?php esc_html_e('Evaluación de recursos y yacimientos estratégicos. Planificación de minas (subterráneas/cielo abierto) y gestión ambiental.', 'uvh-theme'); ?></li>
                                <li><strong><?php esc_html_e('Magíster Scientiarum:', 'uvh-theme'); ?></strong> <?php esc_html_e('Estrategias para la comercialización de minerales, análisis geopolítico de recursos estratégicos y gestión estatal/no estatal.', 'uvh-theme'); ?></li>
                            </ul>
                        </div>
                        <ul class="program-card-full__features">
                            <li><strong><?php esc_html_e('Nivel:', 'uvh-theme'); ?></strong> <?php esc_html_e('Postgrado Avanzado', 'uvh-theme'); ?></li>
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
                <h2 class="programs-cta__title"><?php esc_html_e('¿Listo para avanzar en tu carrera profesional?', 'uvh-theme'); ?></h2>
                <p class="programs-cta__text"><?php esc_html_e('Inicia tu proceso de admisión a nuestros programas de postgrado', 'uvh-theme'); ?></p>
                <a href="<?php echo esc_url(home_url('/formulario-admision')); ?>" class="btn btn--primary btn--large"><?php esc_html_e('Iniciar Proceso de Admisión', 'uvh-theme'); ?></a>
            </div>
        </div>
    </section>
</div>
<?php get_footer();
