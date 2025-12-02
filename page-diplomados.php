<?php
declare(strict_types=1);
/**
 * Template Name: Diplomados
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
                    <span><?php esc_html_e('Diplomados', 'uvh-theme'); ?></span>
                </nav>
                <h1 class="programs-hero__title"><?php esc_html_e('Diplomados', 'uvh-theme'); ?></h1>
                <p class="programs-hero__subtitle"><?php esc_html_e('Educación Continua: Programas cortos para la actualización profesional y técnica', 'uvh-theme'); ?></p>
            </div>
        </div>
    </section>

    <section class="programs-section" id="info">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Formación Especializada', 'uvh-theme'); ?></h2>
                <p class="section-header__subtitle"><?php esc_html_e('Programas diseñados para profesionales que buscan actualizar y profundizar sus conocimientos', 'uvh-theme'); ?></p>
            </div>
            <div class="diplomado-info">
                <div class="diplomado-info__item">
                    <span class="diplomado-info__icon">📜</span>
                    <span class="diplomado-info__text"><?php esc_html_e('Certificado de Diplomado', 'uvh-theme'); ?></span>
                </div>
                <div class="diplomado-info__item">
                    <span class="diplomado-info__icon">⏱️</span>
                    <span class="diplomado-info__text"><?php esc_html_e('Programas cortos e intensivos', 'uvh-theme'); ?></span>
                </div>
                <div class="diplomado-info__item">
                    <span class="diplomado-info__icon">🎯</span>
                    <span class="diplomado-info__text"><?php esc_html_e('Enfoque práctico y aplicado', 'uvh-theme'); ?></span>
                </div>
            </div>
        </div>
    </section>

    <section class="programs-section programs-section--alt" id="programas">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Nuestros Diplomados', 'uvh-theme'); ?></h2>
                <p class="section-header__subtitle"><?php esc_html_e('6 diplomados especializados en áreas estratégicas del sector energético', 'uvh-theme'); ?></p>
            </div>
            <div class="diplomados-grid">
                <!-- Diplomado en Derecho de los Hidrocarburos -->
                <div class="diplomado-card" id="derecho">
                    <div class="diplomado-card__header">
                        <div class="diplomado-card__icon">⚖️</div>
                        <h3 class="diplomado-card__title"><?php esc_html_e('Derecho de los Hidrocarburos', 'uvh-theme'); ?></h3>
                    </div>
                    <p class="diplomado-card__objective">
                        <strong><?php esc_html_e('Objetivo:', 'uvh-theme'); ?></strong> 
                        <?php esc_html_e('Formar en el marco del derecho público, interpretación legal y gestión de proyectos de explotación.', 'uvh-theme'); ?>
                    </p>
                    <div class="diplomado-card__modules">
                        <h4><?php esc_html_e('Módulos:', 'uvh-theme'); ?></h4>
                        <ol>
                            <li><?php esc_html_e('Marco legal nacional e internacional', 'uvh-theme'); ?></li>
                            <li><?php esc_html_e('Política petrolera', 'uvh-theme'); ?></li>
                            <li><?php esc_html_e('Contratos y negociaciones', 'uvh-theme'); ?></li>
                            <li><?php esc_html_e('Derecho corporativo y régimen fiscal', 'uvh-theme'); ?></li>
                        </ol>
                    </div>
                </div>

                <!-- Diplomado en Contrataciones Públicas -->
                <div class="diplomado-card" id="contrataciones">
                    <div class="diplomado-card__header">
                        <div class="diplomado-card__icon">📋</div>
                        <h3 class="diplomado-card__title"><?php esc_html_e('Contrataciones Públicas', 'uvh-theme'); ?></h3>
                    </div>
                    <p class="diplomado-card__objective">
                        <strong><?php esc_html_e('Objetivo:', 'uvh-theme'); ?></strong> 
                        <?php esc_html_e('Especialización en selección de contratistas, administración de contratos y transparencia administrativa.', 'uvh-theme'); ?>
                    </p>
                    <div class="diplomado-card__modules">
                        <h4><?php esc_html_e('Módulos:', 'uvh-theme'); ?></h4>
                        <ol>
                            <li><?php esc_html_e('Fundamentos generales y Proceso de selección', 'uvh-theme'); ?></li>
                            <li><?php esc_html_e('Administración del contrato', 'uvh-theme'); ?></li>
                            <li><?php esc_html_e('Elementos económico-financieros', 'uvh-theme'); ?></li>
                            <li><?php esc_html_e('Herramientas de apoyo', 'uvh-theme'); ?></li>
                        </ol>
                    </div>
                </div>

                <!-- Diplomado en Geopolítica Energética y Minera -->
                <div class="diplomado-card" id="geopolitica">
                    <div class="diplomado-card__header">
                        <div class="diplomado-card__icon">🌍</div>
                        <h3 class="diplomado-card__title"><?php esc_html_e('Geopolítica Energética y Minera', 'uvh-theme'); ?></h3>
                    </div>
                    <p class="diplomado-card__objective">
                        <strong><?php esc_html_e('Objetivo:', 'uvh-theme'); ?></strong> 
                        <?php esc_html_e('Análisis de desafíos regionales y globales en la comercialización de recursos estratégicos.', 'uvh-theme'); ?>
                    </p>
                    <div class="diplomado-card__modules">
                        <h4><?php esc_html_e('Módulos:', 'uvh-theme'); ?></h4>
                        <ol>
                            <li><?php esc_html_e('Geopolítica y Planificación energética', 'uvh-theme'); ?></li>
                            <li><?php esc_html_e('Aspectos jurídicos', 'uvh-theme'); ?></li>
                            <li><?php esc_html_e('Economía de los hidrocarburos y minerales', 'uvh-theme'); ?></li>
                        </ol>
                    </div>
                </div>

                <!-- Diplomado en Medidas Coercitivas Unilaterales -->
                <div class="diplomado-card" id="medidas-coercitivas">
                    <div class="diplomado-card__header">
                        <div class="diplomado-card__icon">🛡️</div>
                        <h3 class="diplomado-card__title"><?php esc_html_e('Medidas Coercitivas Unilaterales', 'uvh-theme'); ?></h3>
                    </div>
                    <p class="diplomado-card__objective">
                        <strong><?php esc_html_e('Objetivo:', 'uvh-theme'); ?></strong> 
                        <?php esc_html_e('Análisis del impacto político/económico de las sanciones y estrategias de resistencia.', 'uvh-theme'); ?>
                    </p>
                    <div class="diplomado-card__modules">
                        <h4><?php esc_html_e('Módulos:', 'uvh-theme'); ?></h4>
                        <ol>
                            <li><?php esc_html_e('Motor hidrocarburos y procesos históricos', 'uvh-theme'); ?></li>
                            <li><?php esc_html_e('Geopolítica y factores económicos de las medidas', 'uvh-theme'); ?></li>
                            <li><?php esc_html_e('Soberanía y organización popular', 'uvh-theme'); ?></li>
                        </ol>
                    </div>
                </div>

                <!-- Diplomado en Finanzas de los Hidrocarburos -->
                <div class="diplomado-card" id="finanzas">
                    <div class="diplomado-card__header">
                        <div class="diplomado-card__icon">💰</div>
                        <h3 class="diplomado-card__title"><?php esc_html_e('Finanzas de los Hidrocarburos', 'uvh-theme'); ?></h3>
                    </div>
                    <p class="diplomado-card__objective">
                        <strong><?php esc_html_e('Objetivo:', 'uvh-theme'); ?></strong> 
                        <?php esc_html_e('Comprensión financiera del sector: financiamiento, riesgo, tributación y control presupuestario.', 'uvh-theme'); ?>
                    </p>
                    <div class="diplomado-card__modules">
                        <h4><?php esc_html_e('Módulos:', 'uvh-theme'); ?></h4>
                        <ol>
                            <li><?php esc_html_e('Finanzas corporativas y contabilidad en hidrocarburos', 'uvh-theme'); ?></li>
                            <li><?php esc_html_e('Tributación y control de gestión', 'uvh-theme'); ?></li>
                            <li><?php esc_html_e('Gerencia y herramientas comunicacionales', 'uvh-theme'); ?></li>
                        </ol>
                    </div>
                </div>

                <!-- Diplomado en Seguridad y Salud en el Trabajo -->
                <div class="diplomado-card" id="seguridad">
                    <div class="diplomado-card__header">
                        <div class="diplomado-card__icon">🦺</div>
                        <h3 class="diplomado-card__title"><?php esc_html_e('Seguridad y Salud en el Trabajo', 'uvh-theme'); ?></h3>
                    </div>
                    <p class="diplomado-card__objective">
                        <strong><?php esc_html_e('Objetivo:', 'uvh-theme'); ?></strong> 
                        <?php esc_html_e('Formación holística para garantizar ambientes seguros y minimizar riesgos en la industria.', 'uvh-theme'); ?>
                    </p>
                    <div class="diplomado-card__modules">
                        <h4><?php esc_html_e('Módulos:', 'uvh-theme'); ?></h4>
                        <ol>
                            <li><?php esc_html_e('Fundamentos de Seguridad Industrial e Higiene Ocupacional', 'uvh-theme'); ?></li>
                            <li><?php esc_html_e('Prevención y control de eventos', 'uvh-theme'); ?></li>
                            <li><?php esc_html_e('Investigación de eventos con lesiones', 'uvh-theme'); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="programs-cta">
        <div class="container">
            <div class="programs-cta__content">
                <h2 class="programs-cta__title"><?php esc_html_e('¿Interesado en nuestros diplomados?', 'uvh-theme'); ?></h2>
                <p class="programs-cta__text"><?php esc_html_e('Contáctanos para más información sobre fechas de inicio y requisitos', 'uvh-theme'); ?></p>
                <a href="<?php echo esc_url(home_url('/formulario-admision')); ?>" class="btn btn--primary btn--large"><?php esc_html_e('Solicitar Información', 'uvh-theme'); ?></a>
            </div>
        </div>
    </section>
</div>
<?php get_footer();
