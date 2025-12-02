<?php
declare(strict_types=1);

/**
 * Template Name: Oferta Académica
 * 
 * Nueva página principal de oferta académica con modelo educativo
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
                <h1 class="programs-hero__title"><?php esc_html_e('Oferta Académica', 'uvh-theme'); ?></h1>
                <p class="programs-hero__subtitle">
                    <?php esc_html_e('Formación, Innovación y Vinculación para el Sector Energético', 'uvh-theme'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Visión General del Modelo Educativo -->
    <section class="programs-section" id="modelo-educativo">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Nuestro Modelo Educativo', 'uvh-theme'); ?></h2>
                <p class="section-header__subtitle">
                    <?php esc_html_e('Un enfoque innovador para la formación de profesionales del sector energético', 'uvh-theme'); ?>
                </p>
            </div>

            <div class="modelo-intro">
                <div class="modelo-intro__content">
                    <p class="modelo-intro__text">
                        <?php esc_html_e('La Universidad Venezolana de los Hidrocarburos (UVH) forma parte de las universidades especializadas creadas bajo la Misión Alma Mater. Nuestro modelo educativo innovador concibe la formación universitaria a través de tres funciones sustantivas fundamentales:', 'uvh-theme'); ?>
                    </p>
                    <div class="modelo-pillars">
                        <div class="modelo-pillar">
                            <div class="modelo-pillar__icon">🎓</div>
                            <h3 class="modelo-pillar__title"><?php esc_html_e('Formación Integral', 'uvh-theme'); ?></h3>
                            <p class="modelo-pillar__text"><?php esc_html_e('Desarrollo profesional y humano del estudiante', 'uvh-theme'); ?></p>
                        </div>
                        <div class="modelo-pillar">
                            <div class="modelo-pillar__icon">🔬</div>
                            <h3 class="modelo-pillar__title"><?php esc_html_e('Creación Intelectual', 'uvh-theme'); ?></h3>
                            <p class="modelo-pillar__text"><?php esc_html_e('Investigación e innovación como eje transversal', 'uvh-theme'); ?></p>
                        </div>
                        <div class="modelo-pillar">
                            <div class="modelo-pillar__icon">🤝</div>
                            <h3 class="modelo-pillar__title"><?php esc_html_e('Vinculación Social', 'uvh-theme'); ?></h3>
                            <p class="modelo-pillar__text"><?php esc_html_e('Conexión directa con comunidades y la industria', 'uvh-theme'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pilares del Saber -->
            <div class="saber-section">
                <h3 class="saber-section__title"><?php esc_html_e('Un Enfoque Verdaderamente Integral', 'uvh-theme'); ?></h3>
                <p class="saber-section__intro"><?php esc_html_e('Nuestros programas van más allá de lo académico; están dirigidos al desarrollo profesional y humano del estudiante. Esta formación se fundamenta en cuatro pilares del saber:', 'uvh-theme'); ?></p>
                <div class="saber-grid">
                    <div class="saber-item">
                        <span class="saber-item__icon">📖</span>
                        <span class="saber-item__text"><?php esc_html_e('El Saber', 'uvh-theme'); ?></span>
                    </div>
                    <div class="saber-item">
                        <span class="saber-item__icon">🧠</span>
                        <span class="saber-item__text"><?php esc_html_e('El Conocer', 'uvh-theme'); ?></span>
                    </div>
                    <div class="saber-item">
                        <span class="saber-item__icon">🛠️</span>
                        <span class="saber-item__text"><?php esc_html_e('El Saber Hacer', 'uvh-theme'); ?></span>
                    </div>
                    <div class="saber-item">
                        <span class="saber-item__icon">👥</span>
                        <span class="saber-item__text"><?php esc_html_e('El Saber Convivir', 'uvh-theme'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experiencia Práctica -->
    <section class="programs-section programs-section--alt" id="experiencia-practica">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Experiencia Práctica Inigualable', 'uvh-theme'); ?></h2>
                <p class="section-header__subtitle">
                    <?php esc_html_e('Formación con valor agregado mediante componente práctico intensivo en sitios reales', 'uvh-theme'); ?>
                </p>
            </div>

            <div class="practica-grid">
                <div class="practica-card">
                    <div class="practica-card__icon">📅</div>
                    <h3 class="practica-card__title"><?php esc_html_e('Momentos Clave', 'uvh-theme'); ?></h3>
                    <p class="practica-card__text"><?php esc_html_e('Se realizan al finalizar el 2do Trayecto y el 4to Trayecto', 'uvh-theme'); ?></p>
                </div>
                <div class="practica-card">
                    <div class="practica-card__icon">⏱️</div>
                    <h3 class="practica-card__title"><?php esc_html_e('Inmersión Total', 'uvh-theme'); ?></h3>
                    <p class="practica-card__text"><?php esc_html_e('8 semanas de dedicación exclusiva por período', 'uvh-theme'); ?></p>
                </div>
                <div class="practica-card">
                    <div class="practica-card__icon">🔧</div>
                    <h3 class="practica-card__title"><?php esc_html_e('Intensidad', 'uvh-theme'); ?></h3>
                    <p class="practica-card__text"><?php esc_html_e('240 horas de actividad práctica en campo', 'uvh-theme'); ?></p>
                </div>
                <div class="practica-card">
                    <div class="practica-card__icon">🏛️</div>
                    <h3 class="practica-card__title"><?php esc_html_e('Servicio Comunitario', 'uvh-theme'); ?></h3>
                    <p class="practica-card__text"><?php esc_html_e('120 horas adicionales según Ley de Servicio Comunitario', 'uvh-theme'); ?></p>
                </div>
            </div>

            <div class="proyecto-sociointegrador">
                <div class="proyecto-sociointegrador__icon">🔬</div>
                <div class="proyecto-sociointegrador__content">
                    <h3 class="proyecto-sociointegrador__title"><?php esc_html_e('Proyecto Sociointegrador', 'uvh-theme'); ?></h3>
                    <p class="proyecto-sociointegrador__text">
                        <?php esc_html_e('La investigación y la innovación son el eje transversal de los PNF. A través de la unidad curricular Proyecto Sociointegrador, nuestros estudiantes llevan a cabo investigaciones reales en vinculación directa con la gente y las comunidades a lo largo de todos sus trayectos de formación.', 'uvh-theme'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Niveles de Formación -->
    <section class="programs-section" id="niveles">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Niveles de Formación', 'uvh-theme'); ?></h2>
                <p class="section-header__subtitle">
                    <?php esc_html_e('Un itinerario formativo completo desde la certificación técnica hasta el doctorado', 'uvh-theme'); ?>
                </p>
            </div>

            <div class="niveles-grid">
                <!-- PNF -->
                <a href="<?php echo esc_url(home_url('/programas-nacionales-de-formacion')); ?>" class="nivel-card nivel-card--pregrado">
                    <div class="nivel-card__badge"><?php esc_html_e('Pregrado', 'uvh-theme'); ?></div>
                    <div class="nivel-card__icon">🎓</div>
                    <h3 class="nivel-card__title"><?php esc_html_e('Programas Nacionales de Formación (PNF)', 'uvh-theme'); ?></h3>
                    <p class="nivel-card__description">
                        <?php esc_html_e('Diseñados con salidas intermedias que permiten la inserción laboral temprana y la continuidad académica.', 'uvh-theme'); ?>
                    </p>
                    <div class="nivel-card__titles">
                        <span class="nivel-title-tag"><?php esc_html_e('Certificación', 'uvh-theme'); ?></span>
                        <span class="nivel-title-tag"><?php esc_html_e('TSU', 'uvh-theme'); ?></span>
                        <span class="nivel-title-tag"><?php esc_html_e('Ingeniero/a', 'uvh-theme'); ?></span>
                    </div>
                    <span class="nivel-card__link"><?php esc_html_e('Ver 5 programas disponibles', 'uvh-theme'); ?> →</span>
                </a>

                <!-- PNFA -->
                <a href="<?php echo esc_url(home_url('/programas-nacionales-de-formacion-avanzada')); ?>" class="nivel-card nivel-card--postgrado">
                    <div class="nivel-card__badge"><?php esc_html_e('Postgrado', 'uvh-theme'); ?></div>
                    <div class="nivel-card__icon">🔬</div>
                    <h3 class="nivel-card__title"><?php esc_html_e('Programas Nacionales de Formación Avanzada (PNFA)', 'uvh-theme'); ?></h3>
                    <p class="nivel-card__description">
                        <?php esc_html_e('Dirigidos a la especialización profesional con énfasis en investigación aplicada e innovación tecnológica.', 'uvh-theme'); ?>
                    </p>
                    <div class="nivel-card__titles">
                        <span class="nivel-title-tag"><?php esc_html_e('Especialista', 'uvh-theme'); ?></span>
                        <span class="nivel-title-tag"><?php esc_html_e('Magíster', 'uvh-theme'); ?></span>
                    </div>
                    <span class="nivel-card__link"><?php esc_html_e('Ver 3 programas disponibles', 'uvh-theme'); ?> →</span>
                </a>

                <!-- Maestrías -->
                <a href="<?php echo esc_url(home_url('/maestrias')); ?>" class="nivel-card nivel-card--maestria">
                    <div class="nivel-card__badge"><?php esc_html_e('Postgrado', 'uvh-theme'); ?></div>
                    <div class="nivel-card__icon">📚</div>
                    <h3 class="nivel-card__title"><?php esc_html_e('Maestrías Especializadas', 'uvh-theme'); ?></h3>
                    <p class="nivel-card__description">
                        <?php esc_html_e('Programas de postgrado tradicionales con formación avanzada en áreas estratégicas del sector energético.', 'uvh-theme'); ?>
                    </p>
                    <div class="nivel-card__titles">
                        <span class="nivel-title-tag"><?php esc_html_e('Magíster Scientiarum', 'uvh-theme'); ?></span>
                    </div>
                    <span class="nivel-card__link"><?php esc_html_e('Ver 3 maestrías disponibles', 'uvh-theme'); ?> →</span>
                </a>

                <!-- Diplomados -->
                <a href="<?php echo esc_url(home_url('/diplomados')); ?>" class="nivel-card nivel-card--diplomado">
                    <div class="nivel-card__badge"><?php esc_html_e('Educación Continua', 'uvh-theme'); ?></div>
                    <div class="nivel-card__icon">📜</div>
                    <h3 class="nivel-card__title"><?php esc_html_e('Diplomados', 'uvh-theme'); ?></h3>
                    <p class="nivel-card__description">
                        <?php esc_html_e('Programas cortos diseñados para la actualización profesional y técnica en áreas específicas.', 'uvh-theme'); ?>
                    </p>
                    <div class="nivel-card__titles">
                        <span class="nivel-title-tag"><?php esc_html_e('Certificado', 'uvh-theme'); ?></span>
                    </div>
                    <span class="nivel-card__link"><?php esc_html_e('Ver 6 diplomados disponibles', 'uvh-theme'); ?> →</span>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="programs-cta">
        <div class="container">
            <div class="programs-cta__content">
                <h2 class="programs-cta__title"><?php esc_html_e('¿Listo para formar parte de la UVH?', 'uvh-theme'); ?></h2>
                <p class="programs-cta__text">
                    <?php esc_html_e('Inicia tu proceso de admisión y únete a la comunidad de profesionales del sector energético', 'uvh-theme'); ?>
                </p>
                <a href="<?php echo esc_url(home_url('/formulario-admision')); ?>" class="btn btn--primary btn--large">
                    <?php esc_html_e('Iniciar Proceso de Admisión', 'uvh-theme'); ?>
                </a>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
