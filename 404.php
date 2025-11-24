<?php
declare(strict_types=1);

/**
 * The template for displaying 404 pages (not found)
 *
 * @package UVH_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<section class="error-404-section">
    <div class="error-404-background">
        <div class="error-404-overlay"></div>
    </div>
    
    <div class="container">
        <div class="error-404-content">
            <div class="error-404-number">404</div>
            
            <h1 class="error-404-title">
                Página no encontrada
            </h1>
            
            <p class="error-404-text">
                Lo sentimos, la página que buscas no existe o ha sido movida. 
                <br>Te invitamos a explorar nuestro sitio desde el inicio.
            </p>
            
            <div class="error-404-actions">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    Volver al inicio
                </a>
            </div>
            
            <div class="error-404-links">
                <h3 class="error-404-links-title">Enlaces útiles</h3>
                <div class="error-404-links-grid">
                    <a href="<?php echo esc_url(home_url('/#nosotros')); ?>" class="error-404-link-card">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span>Sobre Nosotros</span>
                    </a>
                    
                    <a href="<?php echo esc_url(home_url('/#oferta-academica')); ?>" class="error-404-link-card">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                            <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                        </svg>
                        <span>Programas</span>
                    </a>
                    
                    <a href="<?php echo esc_url(home_url('/#admision')); ?>" class="error-404-link-card">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        <span>Admisión</span>
                    </a>
                    
                    <a href="<?php echo esc_url(home_url('/#contacto')); ?>" class="error-404-link-card">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <span>Contacto</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
