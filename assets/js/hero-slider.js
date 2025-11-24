/**
 * Hero Slider
 * Slider automático con controles manuales y soporte táctil
 * 
 * @package UVH_Theme
 * @since 1.0.0
 */

(function() {
    'use strict';

    // Configuración
    const CONFIG = {
        autoplayDelay: 5000,      // 5 segundos entre slides
        transitionDuration: 800,   // Duración de la transición en ms
        pauseOnHover: true,        // Pausar al pasar el mouse
        swipeThreshold: 50,        // Píxeles mínimos para detectar swipe
    };

    // Inicializar cuando el DOM esté listo
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initSlider);
    } else {
        initSlider();
    }

    function initSlider() {
        const sliderContainer = document.querySelector('.hero__slider-container');
        if (!sliderContainer) return;

        const slides = Array.from(sliderContainer.querySelectorAll('.hero__slide'));
        const prevBtn = document.querySelector('.hero__nav--prev');
        const nextBtn = document.querySelector('.hero__nav--next');
        const indicators = Array.from(document.querySelectorAll('.hero__indicator'));

        // Si solo hay un slide, no inicializar el slider
        if (slides.length <= 1) {
            if (slides.length === 1) {
                slides[0].classList.add('active');
            }
            return;
        }

        let currentIndex = 0;
        let autoplayInterval = null;
        let isTransitioning = false;

        // Activar primer slide
        slides[0].classList.add('active');

        /**
         * Cambiar a un slide específico
         */
        function goToSlide(index) {
            if (isTransitioning || index === currentIndex) return;
            
            isTransitioning = true;
            
            // Remover clase active del slide actual
            slides[currentIndex].classList.remove('active');
            if (indicators[currentIndex]) {
                indicators[currentIndex].classList.remove('active');
            }

            // Actualizar índice
            currentIndex = index;

            // Activar nuevo slide
            slides[currentIndex].classList.add('active');
            if (indicators[currentIndex]) {
                indicators[currentIndex].classList.add('active');
            }

            // Permitir nueva transición después del delay
            setTimeout(() => {
                isTransitioning = false;
            }, CONFIG.transitionDuration);
        }

        /**
         * Ir al siguiente slide
         */
        function nextSlide() {
            const nextIndex = (currentIndex + 1) % slides.length;
            goToSlide(nextIndex);
        }

        /**
         * Ir al slide anterior
         */
        function prevSlide() {
            const prevIndex = (currentIndex - 1 + slides.length) % slides.length;
            goToSlide(prevIndex);
        }

        /**
         * Iniciar autoplay
         */
        function startAutoplay() {
            if (autoplayInterval) return;
            autoplayInterval = setInterval(nextSlide, CONFIG.autoplayDelay);
        }

        /**
         * Detener autoplay
         */
        function stopAutoplay() {
            if (autoplayInterval) {
                clearInterval(autoplayInterval);
                autoplayInterval = null;
            }
        }

        /**
         * Reiniciar autoplay
         */
        function resetAutoplay() {
            stopAutoplay();
            startAutoplay();
        }

        // Event Listeners para botones de navegación
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                resetAutoplay();
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                resetAutoplay();
            });
        }

        // Event Listeners para indicadores
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                goToSlide(index);
                resetAutoplay();
            });
        });

        // Pausar/reanudar en hover
        if (CONFIG.pauseOnHover) {
            sliderContainer.addEventListener('mouseenter', stopAutoplay);
            sliderContainer.addEventListener('mouseleave', startAutoplay);
        }

        // Soporte para teclado (accesibilidad)
        document.addEventListener('keydown', (e) => {
            if (!sliderContainer.matches(':hover')) return;
            
            if (e.key === 'ArrowLeft') {
                prevSlide();
                resetAutoplay();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
                resetAutoplay();
            }
        });

        // Soporte para gestos táctiles (swipe)
        let touchStartX = 0;
        let touchEndX = 0;

        sliderContainer.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        sliderContainer.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });

        function handleSwipe() {
            const swipeDistance = touchEndX - touchStartX;
            
            if (Math.abs(swipeDistance) < CONFIG.swipeThreshold) return;

            if (swipeDistance > 0) {
                // Swipe derecha -> slide anterior
                prevSlide();
            } else {
                // Swipe izquierda -> slide siguiente
                nextSlide();
            }
            
            resetAutoplay();
        }

        // Pausar cuando la pestaña no está visible
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                stopAutoplay();
            } else {
                startAutoplay();
            }
        });

        // Iniciar autoplay
        startAutoplay();

        // Precargar imágenes de los siguientes slides
        function preloadImages() {
            slides.forEach((slide, index) => {
                if (index === 0) return; // Ya está cargada
                
                const img = slide.querySelector('.hero__background img');
                if (img && img.dataset.src) {
                    img.src = img.dataset.src;
                }
            });
        }

        preloadImages();

        // Exponer API pública (opcional)
        window.uvhHeroSlider = {
            next: nextSlide,
            prev: prevSlide,
            goTo: goToSlide,
            stop: stopAutoplay,
            start: startAutoplay,
            getCurrentIndex: () => currentIndex,
            getSlidesCount: () => slides.length
        };
    }

})();
