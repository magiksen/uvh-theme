<?php
declare(strict_types=1);
/**
 * Template Name: Cursos (AAP)
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
                    <span><?php esc_html_e('Cursos (AAP)', 'uvh-theme'); ?></span>
                </nav>
                <h1 class="programs-hero__title"><?php esc_html_e('Oferta de Cursos: Ampliación y Adiestramiento Profesional (AAP)', 'uvh-theme'); ?></h1>
                <p class="programs-hero__subtitle"><?php esc_html_e('Cursos cortos y talleres para la actualización continua y el fortalecimiento de competencias técnicas y conductuales', 'uvh-theme'); ?></p>
            </div>
        </div>
    </section>

    <section class="programs-section" id="descripcion">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Descripción General', 'uvh-theme'); ?></h2>
            </div>
            <div class="courses-intro">
                <p class="courses-intro__text">
                    <?php esc_html_e('La Universidad Venezolana de los Hidrocarburos ofrece un programa de cursos cortos y talleres diseñados para la actualización continua y el fortalecimiento de competencias técnicas y conductuales. Estos cursos están validados y dirigidos a profesionales del sector energético y público en general.', 'uvh-theme'); ?>
                </p>
            </div>
        </div>
    </section>

    <section class="programs-section programs-section--alt" id="area-tecnica">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Área: Técnica y Operacional', 'uvh-theme'); ?> 🛠️</h2>
                <p class="section-header__subtitle"><?php esc_html_e('Competencias duras para la industria de los hidrocarburos y la seguridad industrial', 'uvh-theme'); ?></p>
            </div>
            <div class="courses-table-wrapper">
                <table class="courses-table">
                    <thead>
                        <tr>
                            <th><?php esc_html_e('Acción de Formación', 'uvh-theme'); ?></th>
                            <th><?php esc_html_e('Duración', 'uvh-theme'); ?></th>
                            <th><?php esc_html_e('Modalidad', 'uvh-theme'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php esc_html_e('Introducción a la Industria de los Hidrocarburos', 'uvh-theme'); ?></td>
                            <td>16 h</td>
                            <td><?php esc_html_e('Presencial / Híbrido', 'uvh-theme'); ?></td>
                        </tr>
                        <tr>
                            <td><?php esc_html_e('Fundamentos de Seguridad, Salud y Ambiente (SSA)', 'uvh-theme'); ?></td>
                            <td>16 h</td>
                            <td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td>
                        </tr>
                        <tr>
                            <td><?php esc_html_e('Prevención y Control de Incendios', 'uvh-theme'); ?></td>
                            <td>16 h</td>
                            <td><?php esc_html_e('Práctico', 'uvh-theme'); ?></td>
                        </tr>
                        <tr>
                            <td><?php esc_html_e('Primeros Auxilios Básicos', 'uvh-theme'); ?></td>
                            <td>8 h</td>
                            <td><?php esc_html_e('Práctico', 'uvh-theme'); ?></td>
                        </tr>
                        <tr>
                            <td><?php esc_html_e('Análisis de Riesgos en el Trabajo (ART)', 'uvh-theme'); ?></td>
                            <td>16 h</td>
                            <td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td>
                        </tr>
                        <tr>
                            <td><?php esc_html_e('Manejo Defensivo', 'uvh-theme'); ?></td>
                            <td>8 h</td>
                            <td><?php esc_html_e('Teórico-Práctico', 'uvh-theme'); ?></td>
                        </tr>
                        <tr>
                            <td><?php esc_html_e('Legislación en Hidrocarburos (LOE)', 'uvh-theme'); ?></td>
                            <td>16 h</td>
                            <td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td>
                        </tr>
                        <tr>
                            <td><?php esc_html_e('Gestión Ambiental en la Industria Petrolera', 'uvh-theme'); ?></td>
                            <td>24 h</td>
                            <td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td>
                        </tr>
                        <tr>
                            <td><?php esc_html_e('Control de Sólidos y Fluidos de Perforación', 'uvh-theme'); ?></td>
                            <td>32 h</td>
                            <td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="programs-section" id="area-gerencia">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Área: Gerencia y Administrativa', 'uvh-theme'); ?> 💼</h2>
                <p class="section-header__subtitle"><?php esc_html_e('Optimización de la gestión administrativa, financiera y planificación estratégica', 'uvh-theme'); ?></p>
            </div>
            <div class="courses-table-wrapper">
                <table class="courses-table">
                    <thead>
                        <tr>
                            <th><?php esc_html_e('Acción de Formación', 'uvh-theme'); ?></th>
                            <th><?php esc_html_e('Duración', 'uvh-theme'); ?></th>
                            <th><?php esc_html_e('Modalidad', 'uvh-theme'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td><?php esc_html_e('Planificación Estratégica Situacional', 'uvh-theme'); ?></td><td>24 h</td><td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Indicadores de Gestión', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Gestión de Proyectos', 'uvh-theme'); ?></td><td>24 h</td><td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Análisis y Descripción de Cargos', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Legislación Laboral (LOTTT)', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Administración de Contratos', 'uvh-theme'); ?></td><td>24 h</td><td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Contrataciones Públicas', 'uvh-theme'); ?></td><td>24 h</td><td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Redacción de Informes Técnicos y Administrativos', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Taller', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Ortografía y Redacción Eficaz', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Taller', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Archivo y Gestión Documental', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="programs-section programs-section--alt" id="area-habilidades">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Área: Habilidades Blandas y Desarrollo Humano', 'uvh-theme'); ?> 🧠</h2>
                <p class="section-header__subtitle"><?php esc_html_e('Crecimiento personal, liderazgo y mejora del clima organizacional', 'uvh-theme'); ?></p>
            </div>
            <div class="courses-table-wrapper">
                <table class="courses-table">
                    <thead>
                        <tr>
                            <th><?php esc_html_e('Acción de Formación', 'uvh-theme'); ?></th>
                            <th><?php esc_html_e('Duración', 'uvh-theme'); ?></th>
                            <th><?php esc_html_e('Modalidad', 'uvh-theme'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td><?php esc_html_e('Liderazgo Transformador', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Taller', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Inteligencia Emocional en el Trabajo', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Taller', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Comunicación Asertiva y Efectiva', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Taller', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Trabajo en Equipo de Alto Desempeño', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Dinámico', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Manejo del Estrés Laboral', 'uvh-theme'); ?></td><td>8 h</td><td><?php esc_html_e('Taller', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Atención al Ciudadano y Calidad de Servicio', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Programación Neurolingüística (PNL) Básica', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Oratoria y Presentaciones Eficaces', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Práctico', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Ética y Valores en la Función Pública', 'uvh-theme'); ?></td><td>8 h</td><td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Resolución de Conflictos y Negociación', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Taller', 'uvh-theme'); ?></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="programs-section" id="area-informatica">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Área: Informática y Tecnología (Ofimática)', 'uvh-theme'); ?> 💻</h2>
                <p class="section-header__subtitle"><?php esc_html_e('Herramientas digitales para la productividad en el entorno laboral', 'uvh-theme'); ?></p>
            </div>
            <div class="courses-table-wrapper">
                <table class="courses-table">
                    <thead>
                        <tr>
                            <th><?php esc_html_e('Acción de Formación', 'uvh-theme'); ?></th>
                            <th><?php esc_html_e('Duración', 'uvh-theme'); ?></th>
                            <th><?php esc_html_e('Nivel', 'uvh-theme'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td><?php esc_html_e('Microsoft Excel (Básico)', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Básico', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Microsoft Excel (Intermedio)', 'uvh-theme'); ?></td><td>24 h</td><td><?php esc_html_e('Intermedio', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Microsoft Excel (Avanzado)', 'uvh-theme'); ?></td><td>24 h</td><td><?php esc_html_e('Avanzado', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Microsoft Word (Procesamiento de Textos)', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Intermedio', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Microsoft PowerPoint (Presentaciones)', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Intermedio', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Herramientas Colaborativas (Google/Office 365)', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Básico', 'uvh-theme'); ?></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="programs-section programs-section--alt" id="area-sociopolitica">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title"><?php esc_html_e('Área: Formación Sociopolítica e Idiomas', 'uvh-theme'); ?> 🌍</h2>
                <p class="section-header__subtitle"><?php esc_html_e('Cursos complementarios para la formación integral', 'uvh-theme'); ?></p>
            </div>
            <div class="courses-table-wrapper">
                <table class="courses-table">
                    <thead>
                        <tr>
                            <th><?php esc_html_e('Acción de Formación', 'uvh-theme'); ?></th>
                            <th><?php esc_html_e('Duración', 'uvh-theme'); ?></th>
                            <th><?php esc_html_e('Modalidad', 'uvh-theme'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td><?php esc_html_e('Geopolítica de los Recursos Energéticos', 'uvh-theme'); ?></td><td>16 h</td><td><?php esc_html_e('Seminario', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Identidad Nacional y Soberanía', 'uvh-theme'); ?></td><td>8 h</td><td><?php esc_html_e('Conversatorio', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Inglés Técnico (Módulo I)', 'uvh-theme'); ?></td><td>32 h</td><td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td></tr>
                        <tr><td><?php esc_html_e('Inglés Técnico (Módulo II)', 'uvh-theme'); ?></td><td>32 h</td><td><?php esc_html_e('Presencial', 'uvh-theme'); ?></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="programs-cta">
        <div class="container">
            <div class="programs-cta__content">
                <h2 class="programs-cta__title"><?php esc_html_e('¿Interesado en nuestros cursos AAP?', 'uvh-theme'); ?></h2>
                <p class="programs-cta__text"><?php esc_html_e('Contáctanos para más información sobre fechas de inicio, requisitos y modalidades corporativas', 'uvh-theme'); ?></p>
                <a href="<?php echo esc_url(home_url('/formulario-admision')); ?>" class="btn btn--primary btn--large"><?php esc_html_e('Solicitar Información', 'uvh-theme'); ?></a>
            </div>
        </div>
    </section>
</div>
<?php get_footer();
