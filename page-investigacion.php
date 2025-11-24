<?php
declare(strict_types=1);

/**
 * Template Name: Investigación e Innovación
 * 
 * @package UVH_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="research-page">
    <!-- Hero Section -->
    <section class="research-hero">
        <div class="container">
            <div class="research-hero__content">
                <h1 class="research-hero__title">Investigación e Innovación</h1>
                <p class="research-hero__subtitle">
                    Vanguardia científica y tecnológica en el sector energético venezolano
                </p>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="research-stats-banner">
        <div class="container">
            <div class="research-stats-grid">
                <div class="research-stat-box">
                    <div class="research-stat-box__number">26</div>
                    <div class="research-stat-box__label">Líneas de Investigación Estratégicas</div>
                </div>
                <div class="research-stat-box">
                    <div class="research-stat-box__number">12</div>
                    <div class="research-stat-box__label">Proyectos Activos de Investigación Aplicada</div>
                </div>
                <div class="research-stat-box">
                    <div class="research-stat-box__number">6</div>
                    <div class="research-stat-box__label">Áreas Temáticas Estratégicas</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Lines Section -->
    <section class="research-lines-full">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title">Líneas de Investigación</h2>
                <p class="section-header__subtitle">
                    26 líneas estratégicas organizadas en 6 áreas temáticas clave para el desarrollo del sector energético
                </p>
            </div>

            <div class="research-areas">
                <!-- Yacimientos y Geociencias -->
                <div class="research-area">
                    <div class="research-area__header">
                        <div class="research-area__icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <h3 class="research-area__title">Yacimientos y Geociencias</h3>
                        <span class="research-area__count">4 líneas de investigación</span>
                    </div>
                    <div class="research-area__content">
                        <ul class="research-area__list">
                            <li>
                                <strong>Caracterización y Explotación de Yacimientos</strong>
                                <p>Estudios avanzados para la caracterización detallada y optimización de la explotación de yacimientos petroleros.</p>
                            </li>
                            <li>
                                <strong>Factor de Recobro</strong>
                                <p>Investigación en técnicas y metodologías para incrementar el factor de recobro en yacimientos maduros.</p>
                            </li>
                            <li>
                                <strong>Marco Tectono-Estratigráfico</strong>
                                <p>Análisis del marco tectónico y estratigráfico para la exploración y caracterización de yacimientos.</p>
                            </li>
                            <li>
                                <strong>Génesis y Evolución de Yacimientos Fracturados</strong>
                                <p>Estudio de la formación y desarrollo de yacimientos naturalmente fracturados.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Tecnología y Datos -->
                <div class="research-area">
                    <div class="research-area__header">
                        <div class="research-area__icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                <line x1="8" y1="21" x2="16" y2="21"></line>
                                <line x1="12" y1="17" x2="12" y2="21"></line>
                            </svg>
                        </div>
                        <h3 class="research-area__title">Tecnología y Datos</h3>
                        <span class="research-area__count">4 líneas de investigación</span>
                    </div>
                    <div class="research-area__content">
                        <ul class="research-area__list">
                            <li>
                                <strong>Gestión de Datos en Exploración y Producción</strong>
                                <p>Sistemas avanzados para la gestión, análisis y visualización de datos de E&P.</p>
                            </li>
                            <li>
                                <strong>Inteligencia Artificial y Desarrollo de Software</strong>
                                <p>Aplicación de IA y machine learning en procesos de la industria petrolera.</p>
                            </li>
                            <li>
                                <strong>Automatización Industrial y TIC</strong>
                                <p>Desarrollo de soluciones de automatización y tecnologías de información para la industria.</p>
                            </li>
                            <li>
                                <strong>Geomática y Análisis de Negocio</strong>
                                <p>Aplicación de tecnologías geoespaciales y análisis de datos para la toma de decisiones.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Minero-Energético -->
                <div class="research-area">
                    <div class="research-area__header">
                        <div class="research-area__icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                <polyline points="2 17 12 22 22 17"></polyline>
                                <polyline points="2 12 12 17 22 12"></polyline>
                            </svg>
                        </div>
                        <h3 class="research-area__title">Minero-Energético</h3>
                        <span class="research-area__count">3 líneas de investigación</span>
                    </div>
                    <div class="research-area__content">
                        <ul class="research-area__list">
                            <li>
                                <strong>Exploración y Extracción Minera</strong>
                                <p>Técnicas avanzadas de exploración y extracción de recursos minerales, con énfasis en el Arco Minero del Orinoco.</p>
                            </li>
                            <li>
                                <strong>Gestión de Políticas Públicas en Minería</strong>
                                <p>Análisis y desarrollo de políticas públicas para el sector minero nacional.</p>
                            </li>
                            <li>
                                <strong>Geopolítica Minera</strong>
                                <p>Estudio de los aspectos geopolíticos del sector minero a nivel nacional e internacional.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Procesamiento e Industrialización -->
                <div class="research-area">
                    <div class="research-area__header">
                        <div class="research-area__icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M12 1v6m0 6v6m5.2-13.2l-4.2 4.2m0 6l4.2 4.2M23 12h-6m-6 0H1m18.2 5.2l-4.2-4.2m0-6l4.2-4.2"></path>
                            </svg>
                        </div>
                        <h3 class="research-area__title">Procesamiento e Industrialización</h3>
                        <span class="research-area__count">4 líneas de investigación</span>
                    </div>
                    <div class="research-area__content">
                        <ul class="research-area__list">
                            <li>
                                <strong>Acondicionamiento y Procesamiento de Crudos</strong>
                                <p>Técnicas de mejoramiento y procesamiento de crudos pesados y extrapesados.</p>
                            </li>
                            <li>
                                <strong>Transformación y Valorización de Hidrocarburos</strong>
                                <p>Procesos de transformación de hidrocarburos en productos de mayor valor agregado.</p>
                            </li>
                            <li>
                                <strong>Optimización de Operaciones</strong>
                                <p>Mejora continua de procesos operacionales en refinación y petroquímica.</p>
                            </li>
                            <li>
                                <strong>Catalizadores y Refinación de Minerales</strong>
                                <p>Desarrollo de catalizadores avanzados y procesos de refinación mineral.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Ambiente y Seguridad -->
                <div class="research-area">
                    <div class="research-area__header">
                        <div class="research-area__icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <h3 class="research-area__title">Ambiente y Seguridad</h3>
                        <span class="research-area__count">4 líneas de investigación</span>
                    </div>
                    <div class="research-area__content">
                        <ul class="research-area__list">
                            <li>
                                <strong>Salud Ocupacional y Calidad de Vida</strong>
                                <p>Investigación en prevención, promoción y protección de la salud de los trabajadores del sector.</p>
                            </li>
                            <li>
                                <strong>Evaluaciones Socioambientales</strong>
                                <p>Estudios de impacto ambiental y social de las operaciones petroleras y mineras.</p>
                            </li>
                            <li>
                                <strong>Restauración Ambiental</strong>
                                <p>Técnicas y metodologías para la restauración de áreas afectadas por actividades industriales.</p>
                            </li>
                            <li>
                                <strong>Evaluación de Gases Efecto Invernadero</strong>
                                <p>Medición y mitigación de emisiones de gases de efecto invernadero en la industria.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Ciencias Sociales -->
                <div class="research-area">
                    <div class="research-area__header">
                        <div class="research-area__icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h3 class="research-area__title">Ciencias Sociales</h3>
                        <span class="research-area__count">3 líneas de investigación</span>
                    </div>
                    <div class="research-area__content">
                        <ul class="research-area__list">
                            <li>
                                <strong>Geopolítica</strong>
                                <p>Análisis geopolítico del sector energético y su impacto en las relaciones internacionales.</p>
                            </li>
                            <li>
                                <strong>Derecho de los Hidrocarburos</strong>
                                <p>Estudio del marco legal y regulatorio del sector petrolero y gasífero.</p>
                            </li>
                            <li>
                                <strong>Finanzas y Contrataciones Públicas</strong>
                                <p>Gestión financiera y procesos de contratación en el sector público energético.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Active Projects Section -->
    <section class="research-projects-full">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title">Proyectos de Investigación Activos</h2>
                <p class="section-header__subtitle">
                    12 proyectos de investigación aplicada con estructura metodológica y responsables técnicos
                </p>
            </div>

            <div class="projects-categories">
                <!-- Ambientales -->
                <div class="project-category">
                    <div class="project-category__header">
                        <span class="project-category__emoji">🌿</span>
                        <h3 class="project-category__title">Proyectos Ambientales</h3>
                        <span class="project-category__count">3 proyectos</span>
                    </div>
                    <div class="project-category__content">
                        <div class="project-item">
                            <h4 class="project-item__title">Estrategias de Sostenibilidad en Bahía Carenero</h4>
                            <p class="project-item__description">
                                Desarrollo e implementación de estrategias integrales para la sostenibilidad ambiental en las operaciones petroleras ubicadas en la zona de Bahía Carenero, incluyendo monitoreo de ecosistemas marinos y costeros.
                            </p>
                        </div>
                        <div class="project-item">
                            <h4 class="project-item__title">Monitoreo de Contaminación Hídrica en Plataforma Deltana</h4>
                            <p class="project-item__description">
                                Sistema integral de monitoreo continuo de la calidad del agua y evaluación de contaminación hídrica en las operaciones de la Plataforma Deltana, con énfasis en la protección de ecosistemas acuáticos.
                            </p>
                        </div>
                        <div class="project-item">
                            <h4 class="project-item__title">Restauración Ambiental</h4>
                            <p class="project-item__description">
                                Aplicación de técnicas avanzadas de restauración ambiental en áreas afectadas por actividades petroleras, incluyendo remediación de suelos y recuperación de ecosistemas.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tecnológicos/Ingeniería -->
                <div class="project-category">
                    <div class="project-category__header">
                        <span class="project-category__emoji">⚙️</span>
                        <h3 class="project-category__title">Proyectos Tecnológicos/Ingeniería</h3>
                        <span class="project-category__count">4 proyectos</span>
                    </div>
                    <div class="project-category__content">
                        <div class="project-item">
                            <h4 class="project-item__title">Aprovechamiento de Gas de Quema para Autogeneración Eléctrica</h4>
                            <p class="project-item__description">
                                Desarrollo de sistemas para el aprovechamiento del gas de quema en instalaciones petroleras, convirtiéndolo en energía eléctrica para autoconsumo y reducción de emisiones.
                            </p>
                        </div>
                        <div class="project-item">
                            <h4 class="project-item__title">Modelo de Gestión Descentralizado con Blockchain, IoT e IA</h4>
                            <p class="project-item__description">
                                Implementación de un modelo innovador de gestión descentralizado que integra tecnologías Blockchain para trazabilidad, Internet de las Cosas (IoT) para monitoreo en tiempo real, e Inteligencia Artificial para optimización de procesos.
                            </p>
                        </div>
                        <div class="project-item">
                            <h4 class="project-item__title">Especialización de Modelo de Lenguaje de IA para el Sector Petrolero</h4>
                            <p class="project-item__description">
                                Desarrollo y entrenamiento de modelos de lenguaje de inteligencia artificial especializados en terminología, procesos y aplicaciones específicas del sector petrolero venezolano.
                            </p>
                        </div>
                        <div class="project-item">
                            <h4 class="project-item__title">Arquitectura Soberana para Supervisión y Control de Pozos</h4>
                            <p class="project-item__description">
                                Diseño e implementación de una arquitectura tecnológica soberana para la supervisión, control y optimización de operaciones en pozos petroleros, garantizando independencia tecnológica.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Geociencias/Química -->
                <div class="project-category">
                    <div class="project-category__header">
                        <span class="project-category__emoji">🔬</span>
                        <h3 class="project-category__title">Proyectos Geociencias/Química</h3>
                        <span class="project-category__count">3 proyectos</span>
                    </div>
                    <div class="project-category__content">
                        <div class="project-item">
                            <h4 class="project-item__title">Generación de Crudo y Gas Sintético a partir de Roca Madre</h4>
                            <p class="project-item__description">
                                Investigación en procesos de generación de hidrocarburos sintéticos a partir de roca madre, evaluando potencial de yacimientos no convencionales.
                            </p>
                        </div>
                        <div class="project-item">
                            <h4 class="project-item__title">Cuantificación de Metales Pesados en Crudos Extrapesados</h4>
                            <p class="project-item__description">
                                Desarrollo de metodologías analíticas para la cuantificación precisa de metales pesados en crudos extrapesados de la Faja Petrolífera del Orinoco.
                            </p>
                        </div>
                        <div class="project-item">
                            <h4 class="project-item__title">Software para Inversión Sísmica con Deep Learning</h4>
                            <p class="project-item__description">
                                Desarrollo de software avanzado que utiliza técnicas de deep learning para la inversión sísmica y caracterización de yacimientos.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Ciencias Sociales -->
                <div class="project-category">
                    <div class="project-category__header">
                        <span class="project-category__emoji">📚</span>
                        <h3 class="project-category__title">Proyectos Ciencias Sociales</h3>
                        <span class="project-category__count">1 proyecto</span>
                    </div>
                    <div class="project-category__content">
                        <div class="project-item">
                            <h4 class="project-item__title">Investigación y Conservación del Legado Histórico Petrolero</h4>
                            <p class="project-item__description">
                                Investigación histórica y desarrollo de estrategias para la conservación del legado cultural y patrimonial de la industria petrolera venezolana.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="research-cta-section">
        <div class="container">
            <div class="research-cta-box">
                <h2 class="research-cta-box__title">¿Interesado en Colaborar?</h2>
                <p class="research-cta-box__text">
                    Si deseas conocer más sobre nuestras líneas de investigación o explorar oportunidades de colaboración, contáctanos.
                </p>
                <a href="<?php echo esc_url(home_url('/#contacto')); ?>" class="btn btn--primary btn--large">
                    Contactar
                </a>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
