<?php
declare(strict_types=1);

if (!defined('ABSPATH')) exit;
?>

<!-- Research & Innovation Section -->
<section class="research" id="investigacion">
    <div class="container">
        <!-- Header Section -->
        <div class="section-header section-header--center">
            <span class="section-header__label"><?php esc_html_e('Investigación e Innovación', 'uvh-theme'); ?></span>
            <h2 class="section-header__title">
                <?php esc_html_e('VANGUARDIA', 'uvh-theme'); ?><br>
                <?php esc_html_e('CIENTÍFICA', 'uvh-theme'); ?>
            </h2>
            <p class="section-header__subtitle">
                <?php esc_html_e('La UVH impulsa la investigación aplicada en el sector energético con proyectos de alto impacto y líneas estratégicas de desarrollo.', 'uvh-theme'); ?>
            </p>
        </div>

        <!-- Stats -->
        <div class="research__stats">
            <div class="research__stat">
                <div class="research__stat-number">26</div>
                <div class="research__stat-label"><?php esc_html_e('Líneas de Investigación', 'uvh-theme'); ?></div>
            </div>
            <div class="research__stat">
                <div class="research__stat-number">12</div>
                <div class="research__stat-label"><?php esc_html_e('Proyectos Activos', 'uvh-theme'); ?></div>
            </div>
            <div class="research__stat">
                <div class="research__stat-number">6</div>
                <div class="research__stat-label"><?php esc_html_e('Áreas Temáticas', 'uvh-theme'); ?></div>
            </div>
        </div>

        <!-- Research Lines Grid - Resumen -->
        <div class="research__lines">
            <h3 class="research__subtitle"><?php esc_html_e('Áreas de Investigación', 'uvh-theme'); ?></h3>
            <div class="research__grid research__grid--compact">
                <!-- Yacimientos y Geociencias -->
                <div class="research__card">
                    <div class="research__icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <h4 class="research__card-title"><?php esc_html_e('Yacimientos y Geociencias', 'uvh-theme'); ?></h4>
                    <p class="research__card-desc"><?php esc_html_e('4 líneas de investigación', 'uvh-theme'); ?></p>
                </div>

                <!-- Tecnología y Datos -->
                <div class="research__card">
                    <div class="research__icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                    </div>
                    <h4 class="research__card-title"><?php esc_html_e('Tecnología y Datos', 'uvh-theme'); ?></h4>
                    <p class="research__card-desc"><?php esc_html_e('4 líneas de investigación', 'uvh-theme'); ?></p>
                </div>

                <!-- Minero-Energético -->
                <div class="research__card">
                    <div class="research__icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 17 12 22 22 17"></polyline>
                            <polyline points="2 12 12 17 22 12"></polyline>
                        </svg>
                    </div>
                    <h4 class="research__card-title"><?php esc_html_e('Minero-Energético', 'uvh-theme'); ?></h4>
                    <p class="research__card-desc"><?php esc_html_e('3 líneas de investigación', 'uvh-theme'); ?></p>
                </div>

                <!-- Procesamiento e Industrialización -->
                <div class="research__card">
                    <div class="research__icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path d="M12 1v6m0 6v6m5.2-13.2l-4.2 4.2m0 6l4.2 4.2M23 12h-6m-6 0H1m18.2 5.2l-4.2-4.2m0-6l4.2-4.2"></path>
                        </svg>
                    </div>
                    <h4 class="research__card-title"><?php esc_html_e('Procesamiento e Industrialización', 'uvh-theme'); ?></h4>
                    <p class="research__card-desc"><?php esc_html_e('4 líneas de investigación', 'uvh-theme'); ?></p>
                </div>

                <!-- Ambiente y Seguridad -->
                <div class="research__card">
                    <div class="research__icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h4 class="research__card-title"><?php esc_html_e('Ambiente y Seguridad', 'uvh-theme'); ?></h4>
                    <p class="research__card-desc"><?php esc_html_e('4 líneas de investigación', 'uvh-theme'); ?></p>
                </div>

                <!-- Ciencias Sociales -->
                <div class="research__card">
                    <div class="research__icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h4 class="research__card-title"><?php esc_html_e('Ciencias Sociales', 'uvh-theme'); ?></h4>
                    <p class="research__card-desc"><?php esc_html_e('3 líneas de investigación', 'uvh-theme'); ?></p>
                </div>
            </div>
        </div>

        <!-- CTA Button -->
        <div class="research__cta">
            <a href="<?php echo esc_url(home_url('/investigacion')); ?>" class="btn btn--primary btn--large">
                <?php esc_html_e('Ver Todas las Líneas y Proyectos →', 'uvh-theme'); ?>
            </a>
        </div>
    </div>
</section>
