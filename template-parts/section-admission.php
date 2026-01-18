<?php
declare(strict_types=1);

if (!defined('ABSPATH')) exit;
?>

<!-- Admission Process Section -->
<section class="admission-home" id="admision">
    <div class="container">
        <div class="section-header section-header--center">
            <h2 class="section-header__title"><?php esc_html_e('Proceso de Admisión', 'uvh-theme'); ?></h2>
            <p class="section-header__subtitle"><?php esc_html_e('Tu camino hacia una carrera exitosa en el sector energético comienza aquí', 'uvh-theme'); ?></p>
        </div>
        <div class="programs__grid">
            <div class="program-card">
                <div class="program-card__icon">
                    <span style="font-size: 3rem;">1️⃣</span>
                </div>
                <h3 class="program-card__title"><?php esc_html_e('REGISTRO EN LÍNEA', 'uvh-theme'); ?></h3>
                <p class="program-card__description">
                    <?php esc_html_e('Completa el formulario de preinscripción en nuestra plataforma digital con tus datos personales y académicos.', 'uvh-theme'); ?>
                </p>
                <div style="margin-top: auto;">
                    <a href="<?php echo esc_url(get_theme_mod('uvh_intranet_url', 'https://intranet.uvh.edu.ve')); ?>" class="btn btn--primary" target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e('Ir a preinscripción', 'uvh-theme'); ?>
                    </a>
                </div>
            </div>

            <div class="program-card">
                <div class="program-card__icon">
                    <span style="font-size: 3rem;">2️⃣</span>
                </div>
                <h3 class="program-card__title"><?php esc_html_e('DOCUMENTACIÓN', 'uvh-theme'); ?></h3>
                <p class="program-card__description">
                    <?php esc_html_e('Presenta copia de los documentos requeridos a vista del original:', 'uvh-theme'); ?>
                </p>
                <ul class="program-card__list">
                    <li><?php esc_html_e('Título de bachiller', 'uvh-theme'); ?></li>
                    <li><?php esc_html_e('Notas certificadas', 'uvh-theme'); ?></li>
                    <li><?php esc_html_e('Cédula de identidad', 'uvh-theme'); ?></li>
                    <li><?php esc_html_e('Partida de nacimiento', 'uvh-theme'); ?></li>
                    <li><?php esc_html_e('Sistema Nacional de Ingreso OPSU', 'uvh-theme'); ?></li>
                </ul>
            </div>

            <div class="program-card">
                <div class="program-card__icon">
                    <span style="font-size: 3rem;">3️⃣</span>
                </div>
                <h3 class="program-card__title"><?php esc_html_e('INSCRIPCIÓN', 'uvh-theme'); ?></h3>
                <p class="program-card__description">
                    <?php esc_html_e('Una vez aprobado, formaliza tu inscripción y comienza tu formación profesional en la UVH.', 'uvh-theme'); ?>
                </p>
                <div style="margin-top: auto;">
                    <div style="display: flex; flex-direction: column; gap: 12px;">
                        <a href="<?php echo esc_url(get_theme_mod('uvh_intranet_url', 'https://intranet.uvh.edu.ve')); ?>" class="btn btn--primary" target="_blank" rel="noopener noreferrer">
                            <?php esc_html_e('Trayecto Inicial', 'uvh-theme'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/formulario-admision')); ?>" class="btn btn--secondary">
                            <?php esc_html_e('Trayecto 1 en adelante', 'uvh-theme'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 48px;">
            <a href="#contacto" class="btn btn--primary btn--large">
                <?php esc_html_e('Solicitar más información', 'uvh-theme'); ?>
            </a>
        </div>
    </div>
</section>
