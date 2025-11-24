/**
 * Admission Form - Multi-step form handler
 */
(function($) {
    'use strict';

    let currentStep = 1;
    const totalSteps = 5;

    // Initialize
    $(document).ready(function() {
        showStep(currentStep);
        
        // Next button
        $('#nextBtn').on('click', function() {
            if (validateStep(currentStep)) {
                currentStep++;
                showStep(currentStep);
            }
        });

        // Previous button
        $('#prevBtn').on('click', function() {
            currentStep--;
            showStep(currentStep);
        });

        // Form submission
        $('#admission-form').on('submit', function(e) {
            e.preventDefault();
            
            if (!validateStep(currentStep)) {
                return false;
            }

            submitForm();
        });

        // Auto-calculate age from birth date
        $('#fecha_nacimiento').on('change', function() {
            const birthDate = new Date($(this).val());
            const today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            const monthDiff = today.getMonth() - birthDate.getMonth();
            
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            
            $('#edad').val(age);
        });
    });

    /**
     * Show specific step
     */
    function showStep(step) {
        // Hide all steps
        $('.form-step').removeClass('form-step--active');
        
        // Show current step
        $(`.form-step[data-step="${step}"]`).addClass('form-step--active');
        
        // Update progress
        $('.form-progress__step').removeClass('form-progress__step--active form-progress__step--completed');
        
        for (let i = 1; i <= totalSteps; i++) {
            if (i < step) {
                $(`.form-progress__step[data-step="${i}"]`).addClass('form-progress__step--completed');
            } else if (i === step) {
                $(`.form-progress__step[data-step="${i}"]`).addClass('form-progress__step--active');
            }
        }
        
        // Update buttons
        if (step === 1) {
            $('#prevBtn').hide();
        } else {
            $('#prevBtn').show();
        }
        
        if (step === totalSteps) {
            $('#nextBtn').hide();
            $('#submitBtn').show();
        } else {
            $('#nextBtn').show();
            $('#submitBtn').hide();
        }

        // Scroll to top of form
        $('html, body').animate({
            scrollTop: $('.admission-form-section').offset().top - 100
        }, 300);
    }

    /**
     * Validate current step
     */
    function validateStep(step) {
        const currentStepEl = $(`.form-step[data-step="${step}"]`);
        const requiredFields = currentStepEl.find('[required]');
        let isValid = true;
        let firstInvalidField = null;

        // Remove previous error states
        $('.form-group').removeClass('form-group--error');
        $('.field-error').remove();

        requiredFields.each(function() {
            const field = $(this);
            const value = field.val().trim();
            
            if (!value) {
                isValid = false;
                field.closest('.form-group').addClass('form-group--error');
                
                if (!firstInvalidField) {
                    firstInvalidField = field;
                }
                
                const errorMsg = $('<span class="field-error">Este campo es obligatorio</span>');
                field.after(errorMsg);
            } else if (field.attr('type') === 'email' && !isValidEmail(value)) {
                isValid = false;
                field.closest('.form-group').addClass('form-group--error');
                
                if (!firstInvalidField) {
                    firstInvalidField = field;
                }
                
                const errorMsg = $('<span class="field-error">Por favor, ingresa un email válido</span>');
                field.after(errorMsg);
            }
        });

        // Validate program selections are different
        if (step === 3) {
            const prog1 = $('#programa_opcion_1').val();
            const prog2 = $('#programa_opcion_2').val();
            const prog3 = $('#programa_opcion_3').val();

            if (prog1 && prog2 && prog1 === prog2) {
                isValid = false;
                showMessage('Las opciones de programa deben ser diferentes', 'error');
            }
            if (prog1 && prog3 && prog1 === prog3) {
                isValid = false;
                showMessage('Las opciones de programa deben ser diferentes', 'error');
            }
            if (prog2 && prog3 && prog2 === prog3) {
                isValid = false;
                showMessage('Las opciones de programa deben ser diferentes', 'error');
            }
        }

        if (!isValid && firstInvalidField) {
            $('html, body').animate({
                scrollTop: firstInvalidField.offset().top - 150
            }, 300);
        }

        return isValid;
    }

    /**
     * Validate email format
     */
    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    /**
     * Submit form via AJAX
     */
    function submitForm() {
        const formData = $('#admission-form').serialize();
        
        // Show loading
        $('#form-loading').show();
        $('#submitBtn').prop('disabled', true);
        hideMessage();

        $.ajax({
            url: uvhAdmission.ajaxurl,
            type: 'POST',
            data: {
                action: 'uvh_submit_admission',
                nonce: uvhAdmission.nonce,
                ...Object.fromEntries(new URLSearchParams(formData))
            },
            success: function(response) {
                $('#form-loading').hide();
                
                if (response.success) {
                    showMessage(response.data.message, 'success');
                    
                    // Reset form
                    $('#admission-form')[0].reset();
                    currentStep = 1;
                    showStep(currentStep);
                    
                    // Scroll to message
                    $('html, body').animate({
                        scrollTop: $('#form-message').offset().top - 100
                    }, 500);
                } else {
                    showMessage(response.data.message, 'error');
                    $('#submitBtn').prop('disabled', false);
                }
            },
            error: function() {
                $('#form-loading').hide();
                showMessage('Error al enviar el formulario. Por favor, intenta nuevamente.', 'error');
                $('#submitBtn').prop('disabled', false);
            }
        });
    }

    /**
     * Show message
     */
    function showMessage(message, type) {
        const messageEl = $('#form-message');
        messageEl.removeClass('form-message--success form-message--error');
        messageEl.addClass(`form-message--${type}`);
        messageEl.html(message);
        messageEl.slideDown();
    }

    /**
     * Hide message
     */
    function hideMessage() {
        $('#form-message').slideUp();
    }

})(jQuery);
