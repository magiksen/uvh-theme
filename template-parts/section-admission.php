<?php
declare(strict_types=1);

if (!defined('ABSPATH')) exit;
?>

<!-- Admission Process Section -->
<section class="programs" id="admision">
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
            </div>

            <div class="program-card">
                <div class="program-card__icon">
                    <span style="font-size: 3rem;">2️⃣</span>
                </div>
                <h3 class="program-card__title"><?php esc_html_e('DOCUMENTACIÓN', 'uvh-theme'); ?></h3>
                <p class="program-card__description">
                    <?php esc_html_e('Presenta los documentos requeridos: título de bachiller, notas certificadas, cédula de identidad y partida de nacimiento.', 'uvh-theme'); ?>
                </p>
            </div>

            <div class="program-card">
                <div class="program-card__icon">
                    <span style="font-size: 3rem;">3️⃣</span>
                </div>
                <h3 class="program-card__title"><?php esc_html_e('INSCRIPCIÓN', 'uvh-theme'); ?></h3>
                <p class="program-card__description">
                    <?php esc_html_e('Una vez aprobado, formaliza tu inscripción y comienza tu formación profesional en la UVH.', 'uvh-theme'); ?>
                </p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 48px;">
            <a href="<?php echo esc_url(home_url('/formulario-admision')); ?>" class="btn btn--primary btn--large">
                <?php esc_html_e('Iniciar proceso de admisión', 'uvh-theme'); ?>
            </a>
        </div>
    </div>
</section>
