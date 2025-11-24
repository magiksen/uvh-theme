<?php
declare(strict_types=1);

if (!defined('ABSPATH')) exit;
?>

<!-- Contact Section -->
<section class="contact" id="contacto">
    <div class="container">
        <div class="contact__grid">
            <div class="contact__info">
                <h2 class="contact__title">
                    <?php esc_html_e('¿Tienes Preguntas para la UVH?', 'uvh-theme'); ?><br>
                    <?php esc_html_e('¡CONTÁCTANOS!', 'uvh-theme'); ?>
                </h2>
                <p class="contact__text">
                    <?php esc_html_e('Estamos aquí para ayudarte en tu proceso de admisión y resolver todas tus dudas sobre nuestros programas académicos.', 'uvh-theme'); ?>
                </p>
                <div class="contact__details">
                    <div class="contact__detail">
                        <h4><?php esc_html_e('Dirección', 'uvh-theme'); ?></h4>
                        <p>
                            <?php echo esc_html(get_theme_mod('uvh_address', 'Caracas, Venezuela')); ?><br>
                            <?php esc_html_e('Baruta - El Hatillo con calle El Ángel de La Tahona, Municipio Baruta, Estado Bolivariano de Miranda', 'uvh-theme'); ?>
                        </p>
                    </div>
                    <div class="contact__detail">
                        <h4><?php esc_html_e('Teléfono', 'uvh-theme'); ?></h4>
                        <p><?php echo esc_html(get_theme_mod('uvh_contact_phone', '+58 212 XXX-XXXX')); ?></p>
                    </div>
                    <div class="contact__detail">
                        <h4><?php esc_html_e('Email', 'uvh-theme'); ?></h4>
                        <p><?php echo esc_html(get_theme_mod('uvh_contact_email', 'info@uvh.edu.ve')); ?></p>
                    </div>
                </div>
            </div>
            <div class="contact__form">
                <form id="contact-form" method="post">
                    <div class="form-group">
                        <label for="name"><?php esc_html_e('Nombre completo *', 'uvh-theme'); ?></label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><?php esc_html_e('Correo electrónico *', 'uvh-theme'); ?></label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone"><?php esc_html_e('Teléfono *', 'uvh-theme'); ?></label>
                        <input type="tel" id="phone" name="phone" required placeholder="Ej: 04121234567">
                    </div>
                    <div class="form-group">
                        <label for="subject"><?php esc_html_e('Asunto *', 'uvh-theme'); ?></label>
                        <select id="subject" name="subject" required>
                            <option value=""><?php esc_html_e('Selecciona un asunto', 'uvh-theme'); ?></option>
                            <option value="Información sobre programas"><?php esc_html_e('Información sobre programas', 'uvh-theme'); ?></option>
                            <option value="Proceso de admisión"><?php esc_html_e('Proceso de admisión', 'uvh-theme'); ?></option>
                            <option value="Costos y becas"><?php esc_html_e('Costos y becas', 'uvh-theme'); ?></option>
                            <option value="Horarios y modalidades"><?php esc_html_e('Horarios y modalidades', 'uvh-theme'); ?></option>
                            <option value="Instalaciones"><?php esc_html_e('Instalaciones', 'uvh-theme'); ?></option>
                            <option value="Otro"><?php esc_html_e('Otro', 'uvh-theme'); ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message"><?php esc_html_e('Mensaje *', 'uvh-theme'); ?></label>
                        <textarea id="message" name="message" rows="4" required placeholder="Escribe tu mensaje aquí..."></textarea>
                    </div>
                    
                    <div id="contact-message" class="contact-message" style="display: none;"></div>
                    
                    <button type="submit" class="btn btn--primary btn--full">
                        <?php esc_html_e('Enviar Mensaje', 'uvh-theme'); ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
