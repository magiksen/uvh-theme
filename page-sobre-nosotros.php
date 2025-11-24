<?php
declare(strict_types=1);

/**
 * Template Name: Sobre Nosotros
 * 
 * @package UVH_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="about-page">
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <div class="about-hero__content">
                <h1 class="about-hero__title">Sobre Nosotros</h1>
                <p class="about-hero__subtitle">
                    Universidad Venezolana de los Hidrocarburos
                </p>
            </div>
        </div>
    </section>

    <!-- Historia -->
    <section class="about-section">
        <div class="container">
            <div class="about-section__content">
                <h2 class="about-section__title">Nuestra Historia</h2>
                <p class="about-section__text">
                    La Universidad Venezolana de los Hidrocarburos (UVH) se crea en el marco de la Misión Alma Mater, 
                    el 11 de agosto de 2009, mediante decreto No. 6.864 publicado en la Gaceta Oficial No. 39.239, 
                    dirigida a impulsar la transformación de la educación universitaria venezolana y propulsar su 
                    articulación institucional y territorial, en función de las líneas estratégicas del Proyecto 
                    Nacional Simón Bolívar.
                </p>
                <p class="about-section__text">
                    Es una universidad nacional experimental, con personalidad jurídica y patrimonio propio, orientada 
                    a garantizar la formación técnica-científica, integral y permanente de profesionales, para el 
                    trabajo productivo en las diversas ramas relacionadas con la explotación de los hidrocarburos y 
                    la minería, de manera consustanciada en la investigación científica y tecnológica.
                </p>
            </div>
        </div>
    </section>

    <!-- Misión Alma Mater -->
    <section class="about-section about-section--alt">
        <div class="container">
            <div class="about-section__content">
                <h2 class="about-section__title">Misión Alma Mater</h2>
                <p class="about-section__text">
                    Transformación de la educación universitaria venezolana y propulsar su articulación institucional 
                    y territorial, garantizando el derecho de todas y todos a una educación universitaria de calidad. 
                    Cooperación solidaria: generación, transformación y socialización de conocimiento pertinente a 
                    nuestras realidades y retos culturales, ambientales, políticos, económicos y sociales. Favorecer 
                    el enraizamiento de la educación universitaria en todo el territorio nacional, comprometido con 
                    el desarrollo humano integral basado en las comunidades.
                </p>
            </div>
        </div>
    </section>

    <!-- Filosofía -->
    <section class="about-section">
        <div class="container">
            <div class="about-section__content">
                <h2 class="about-section__title">Filosofía de la UVH</h2>
                <p class="about-section__text">
                    Formar profesionales con profundas cualidades éticas y morales, y con amplios conocimientos 
                    técnicos, científicos y económicos, que permitan enfrentar los retos tecnológicos, operacionales, 
                    ambientales, gerenciales y sociales, que demanda la industria de los hidrocarburos y la minería.
                </p>
                
                <div class="about-pillars">
                    <div class="about-pillar">
                        <h3 class="about-pillar__title">Calidad</h3>
                        <p class="about-pillar__text">
                            Docentes e investigadores nacionales e internacionales con experiencia académica y 
                            operacional en hidrocarburos y minería.
                        </p>
                    </div>
                    <div class="about-pillar">
                        <h3 class="about-pillar__title">Pertinencia</h3>
                        <p class="about-pillar__text">
                            Orientación a la realidad del país en el área de hidrocarburos y minería, para el 
                            aprovechamiento de su potencial.
                        </p>
                    </div>
                    <div class="about-pillar">
                        <h3 class="about-pillar__title">Competencias</h3>
                        <p class="about-pillar__text">
                            Formar profesionales con competencias para el trabajo productivo en el sector de los 
                            hidrocarburos y minería.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visión -->
    <section class="about-section about-section--alt">
        <div class="container">
            <div class="about-section__content">
                <h2 class="about-section__title">Visión</h2>
                <p class="about-section__text">
                    Ser la universidad de referencia nacional e internacional en la generación, difusión y apropiación 
                    social del conocimiento técnico-científico y humanístico requerido por la industria de los 
                    hidrocarburos y minería, con excelencia académica, en la formación de profesionales éticos, 
                    críticos y conscientes de su protagonismo en el desarrollo integral de la nación.
                </p>
            </div>
        </div>
    </section>

    <!-- Objetivos -->
    <section class="about-section">
        <div class="container">
            <div class="about-section__content">
                <h2 class="about-section__title">Objetivos</h2>
                <ul class="about-objectives">
                    <li class="about-objectives__item">
                        Desarrollar proyectos de investigación y participar en procesos de innovación que respondan 
                        a las necesidades de la industria de los hidrocarburos y al desarrollo de Venezuela como 
                        potencia energética mundial.
                    </li>
                    <li class="about-objectives__item">
                        Lograr la calidad y pertinencia de los procesos de formación, a través de la vinculación 
                        permanente con las comunidades, la industria de los hidrocarburos y las políticas energéticas 
                        nacionales.
                    </li>
                    <li class="about-objectives__item">
                        Ejercer liderazgo académico y social en el desarrollo integral de las regiones y de los 
                        entornos comunitarios.
                    </li>
                    <li class="about-objectives__item">
                        Fortalecer canales permanentes de comunicación con la sociedad, a fin de contribuir a la 
                        formación de una ciudadanía capaz de participar activamente en la conducción de la industria 
                        nacional de los hidrocarburos.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Frases Célebres -->
    <section class="quotes-section">
        <div class="container">
            <div class="section-header section-header--center">
                <h2 class="section-header__title">Legado y Compromiso</h2>
                <p class="section-header__subtitle">
                    Inspirados por los líderes de nuestra patria
                </p>
            </div>

            <div class="quotes-grid">
                <!-- Hugo Chávez -->
                <div class="quote-card">
                    <div class="quote-card__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/leaders/chavez.svg'); ?>" 
                             alt="Hugo Chávez">
                    </div>
                    <div class="quote-card__content">
                        <p class="quote-card__text">
                            "El petróleo es de todos los venezolanos y debe ser utilizado para el desarrollo 
                            integral de nuestra nación y el bienestar de nuestro pueblo."
                        </p>
                        <div class="quote-card__author">
                            <h3 class="quote-card__name">Hugo Chávez</h3>
                            <p class="quote-card__title">Comandante Eterno de la Revolución Bolivariana</p>
                        </div>
                    </div>
                </div>

                <!-- Nicolás Maduro -->
                <div class="quote-card">
                    <div class="quote-card__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/leaders/maduro.svg'); ?>" 
                             alt="Nicolás Maduro">
                    </div>
                    <div class="quote-card__content">
                        <p class="quote-card__text">
                            "La educación universitaria en hidrocarburos es fundamental para garantizar la soberanía 
                            energética y el desarrollo tecnológico de nuestra patria."
                        </p>
                        <div class="quote-card__author">
                            <h3 class="quote-card__name">Nicolás Maduro</h3>
                            <p class="quote-card__title">Presidente de la República Bolivariana de Venezuela</p>
                        </div>
                    </div>
                </div>

                <!-- Delcy Rodríguez -->
                <div class="quote-card">
                    <div class="quote-card__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/leaders/vicepresidenta.webp'); ?>" 
                             alt="Delcy Rodríguez"
                             class="quote-card__photo">
                    </div>
                    <div class="quote-card__content">
                        <p class="quote-card__text">
                            "La formación de nuestros profesionales en el sector energético es la garantía de un 
                            futuro próspero y soberano para Venezuela."
                        </p>
                        <div class="quote-card__author">
                            <h3 class="quote-card__name">Delcy Rodríguez</h3>
                            <p class="quote-card__title">Vicepresidenta Ejecutiva de la República</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Potencialidades -->
    <section class="about-section about-section--alt">
        <div class="container">
            <div class="about-section__content">
                <h2 class="about-section__title">Potencialidades de la UVH</h2>
                
                <div class="potentials-grid">
                    <div class="potential-item">
                        <div class="potential-item__icon">🎓</div>
                        <h3 class="potential-item__title">Estudios de Pre-grado</h3>
                    </div>
                    <div class="potential-item">
                        <div class="potential-item__icon">📚</div>
                        <h3 class="potential-item__title">Estudios de 4to nivel</h3>
                        <p class="potential-item__text">Especialización, maestrías, doctorados</p>
                    </div>
                    <div class="potential-item">
                        <div class="potential-item__icon">📜</div>
                        <h3 class="potential-item__title">Diplomados</h3>
                    </div>
                    <div class="potential-item">
                        <div class="potential-item__icon">✓</div>
                        <h3 class="potential-item__title">Certificación de saberes</h3>
                    </div>
                    <div class="potential-item">
                        <div class="potential-item__icon">🔬</div>
                        <h3 class="potential-item__title">Líneas de Investigación</h3>
                        <p class="potential-item__text">Nacionales e internacionales</p>
                    </div>
                    <div class="potential-item">
                        <div class="potential-item__icon">🤝</div>
                        <h3 class="potential-item__title">Convenios</h3>
                        <p class="potential-item__text">Con universidades en docencia e investigación</p>
                    </div>
                    <div class="potential-item">
                        <div class="potential-item__icon">🏢</div>
                        <h3 class="potential-item__title">Certificación PDVSA</h3>
                        <p class="potential-item__text">Cursos de extensión de escuelas de formación</p>
                    </div>
                    <div class="potential-item">
                        <div class="potential-item__icon">👨‍💼</div>
                        <h3 class="potential-item__title">Cursos de extensión</h3>
                        <p class="potential-item__text">Para profesionales, técnicos y operadores</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
