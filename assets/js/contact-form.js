/**
 * Contact Form Handler
 */
(function($) {
    'use strict';

    $(document).ready(function() {
        const $form = $('#contact-form');
        const $submitBtn = $form.find('button[type="submit"]');
        const $messageContainer = $('#contact-message');

        // Form submission
        $form.on('submit', function(e) {
            e.preventDefault();

            // Validate form
            if (!validateForm()) {
                return false;
            }

            // Disable submit button
            $submitBtn.prop('disabled', true).text('Enviando...');
            hideMessage();

            // Prepare data
            const formData = {
                action: 'uvh_submit_contact',
                nonce: uvhContact.nonce,
                name: $('#name').val().trim(),
                email: $('#email').val().trim(),
                phone: $('#phone').val().trim(),
                subject: $('#subject').val().trim(),
                message: $('#message').val().trim()
            };

            // Send AJAX request
            $.ajax({
                url: uvhContact.ajaxurl,
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response.success) {
                        showMessage(response.data.message, 'success');
                        
                        // Reset form after showing success message
                        setTimeout(function() {
                            $form[0].reset();
                            $('.form-group').removeClass('form-group--error');
                            $('.field-error').remove();
                        }, 100);
                        
                        // Scroll to message
                        $('html, body').animate({
                            scrollTop: $messageContainer.offset().top - 100
                        }, 500);
                    } else {
                        showMessage(response.data.message, 'error');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    console.error('Response:', xhr.responseText);
                    showMessage('Error al enviar el mensaje. Por favor, intenta nuevamente.', 'error');
                },
                complete: function() {
                    $submitBtn.prop('disabled', false).text('Enviar Mensaje');
                }
            });
        });

        /**
         * Validate form
         */
        function validateForm() {
            let isValid = true;
            const $requiredFields = $form.find('[required]');

            // Remove previous errors
            $('.form-group').removeClass('form-group--error');
            $('.field-error').remove();

            $requiredFields.each(function() {
                const $field = $(this);
                const value = $field.val().trim();

                if (!value) {
                    isValid = false;
                    showFieldError($field, 'Este campo es obligatorio');
                } else if ($field.attr('type') === 'email' && !isValidEmail(value)) {
                    isValid = false;
                    showFieldError($field, 'Por favor, ingresa un email válido');
                } else if ($field.attr('id') === 'message' && value.length < 10) {
                    isValid = false;
                    showFieldError($field, 'El mensaje debe tener al menos 10 caracteres');
                }
            });

            return isValid;
        }

        /**
         * Show field error
         */
        function showFieldError($field, message) {
            $field.closest('.form-group').addClass('form-group--error');
            $field.after('<span class="field-error">' + message + '</span>');
        }

        /**
         * Validate email format
         */
        function isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        /**
         * Show message
         */
        function showMessage(message, type) {
            $messageContainer.removeClass('contact-message--success contact-message--error');
            $messageContainer.addClass('contact-message--' + type);
            $messageContainer.html(message);
            $messageContainer.slideDown();
        }

        /**
         * Hide message
         */
        function hideMessage() {
            $messageContainer.slideUp();
        }

        // Real-time validation feedback
        $form.find('input, textarea, select').on('blur', function() {
            const $field = $(this);
            const value = $field.val().trim();

            if ($field.prop('required') && !value) {
                $field.closest('.form-group').addClass('form-group--error');
            } else {
                $field.closest('.form-group').removeClass('form-group--error');
                $field.siblings('.field-error').remove();
            }
        });

        // Remove error on input
        $form.find('input, textarea, select').on('input', function() {
            $(this).closest('.form-group').removeClass('form-group--error');
            $(this).siblings('.field-error').remove();
        });
    });

})(jQuery);
