(function($) {

    var initFormHandler = function (form){

        var options = {
            'error': 'invalid',
            'valid': 'valid',
            'status': true,
            'messageClass': 'js_message_wrapper',
            'formMessageClass': 'js_message_holder',
            'btn': '#js-form-btn',
            'dataCaptcha': false,
            'finalMessageOuter': '#js-form_success_message_outer',
            'finalMessageContainer': '#js-form_success_message',

            messages: {
                'invalidEmail': 'Please, provide a valid email.',
                'required': 'This field is required.'
            }
        };

        var initSendEvent = function (form){

            var btn = $(options.btn);

            if(btn.length <= 0){
                return;
            }

            btn.on('click', function() {

                options.status = true;
                options.dataCaptcha = false;
                event.preventDefault();

                __delErrorMessage(form);

                var fdata = form.serializeArray();

                var nameField = fdata[0],
                    emailField = fdata[1],
                    messageField = fdata[2];

                if(typeof grecaptcha === 'object'){

                    var captchaResponse = grecaptcha.getResponse();

                    if(captchaResponse.length == 0){
                        options.dataCaptcha = false;
                    }else{
                        options.dataCaptcha = captchaResponse;
                    }
                }else{
                    options.dataCaptcha = 'none';
                }

                if(nameField.name == 'contact_name'){

                    if(nameField.value.length < 1){

                        __addErrorClass(false, nameField.name,  options.messages.required);

                    }else{
                        __addErrorClass(true, nameField.name,  false);
                    }

                }

                if(emailField.name == 'contact_email'){

                    if(emailField.value.length < 1){

                        __addErrorClass(false, emailField.name, options.messages.required);

                    }else{

                        var resultEmail = __checkEmail(emailField.value, emailField.name,  options.messages.invalidEmail);

                        __addErrorClass(resultEmail, emailField.name,  false);
                    }

                }

                //console.log('options.status', options.status);

                if(options.status == true && options.dataCaptcha.length > 0){
                    var data = {
                            action: 'ajax_contact',
                            name: nameField.value,
                            email: emailField.value,
                            message: messageField.value,
                            captcha: options.dataCaptcha

                    };

                    __performSend(data, form);
                }

            });

        };


        var __performSend = function(data, form){

            jQuery.ajax({
                url: SiteParams.ajaxurl,
                async: true,
                data: data,
                type: 'POST',
                success: function(response){

                    if(response.status == 'ok'){

                        __hideForm(form);

                        __delFormMessage();

                        __showSuccessMessage(response.message);
                    }

                    if(response.status == 'error' && response.message.length > 0){
                        __addFormMessage(response.message);
                    }

                }
            });

        };

        var __hideForm = function(form){

            if(form.length > 0){
                form.addClass('move_right_out');
            }

        };

        var __showSuccessMessage = function(message){

            if(message.length > 0){

                var block = $(options.finalMessageOuter);
                var textBlock = $(options.finalMessageContainer);

                textBlock.text(message);
                block.addClass('move_right_in');

            }

        };




        var __checkEmail = function(val, element, message){

            if(val.length > 0 ){
                var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,
                    is_email = re.test(val);
                __addErrorClass(is_email, element, message);

                return is_email;
            }

        };

        var __addErrorClass = function(is_val, name, message) {

            var element = $('[name = "' + name + '"]');

            if (!is_val ) {

                element.addClass(options.error);

                options.status = false;

                if(message){
                    __addErrorMessage(element, message);
                }

            } else {
                element.removeClass(options.error);



            }
        };

        var __addErrorMessage = function(element, message) {

            if (message) {

                var container = '<span class="' + options.messageClass + '" >' + message + '</span>';

                element.parent().append(container);
            }
        };

        var __delErrorMessage = function (form) {

            var errors = $(form).find('.' + options.messageClass);

            if(errors.length > 0){

                $.each( errors, function( key, element ) {

                    element.remove();

                });

            }

        };

        var __addFormMessage = function( message) {

            if (message) {

                var container = $('.' + options.formMessageClass);

                container.html(message);
            }
        };

        var __delFormMessage = function () {

            var container = $('.' + options.formMessageClass);

            container.html();

        };



        initSendEvent(form);

    };

    var form = $('#contact_form');

    if(form.length > 0){
        initFormHandler(form);
    }



})(jQuery);