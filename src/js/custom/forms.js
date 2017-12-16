(function($) {

    var initFormHandler = function (form){

        var options = {
            'error': 'invalid',
            'valid': 'valid',
            'status': false,
            'messageClass': 'js_message_wrapper',

            messages: {
                'invalidEmail': 'Please provide a valid email.',
                'required': 'This field id required'
            }
        };

        var initSendEvent = function (form){

            var btn = $('#js-form-btn');

            if(btn.length <= 0){
                return;
            }

            btn.on('click', function() {

                event.preventDefault();

                var fdata = form.serializeArray();
                console.log(fdata);
                var nameField = fdata[0],
                    emailField = fdata[1],
                    messageField = fdata[2],
                    recaptchaField = fdata[3];

                if(nameField.name == 'contact_name' && nameField.value.length < 1){

                    __addErrorClass(false, nameField.name,  options.messages.required);

                    options.status = false;
                }

                if(emailField.name == 'contact_email' && emailField.value.length < 1){
                    __addErrorClass(false, emailField.name, options.messages.required);

                    __checkEmail(emailField.value, emailField.name,  options.messages.invalidEmail);

                    options.status = false;
                }


            });


        };


        var __performSubscribe = function(formElement){

            var form = $(formElement);

            form.submit(function() {

                jQuery.ajax({
                    url: mainSiteBasePath + 'dialogs/subscribe' + '?blog=blog',
                    async: true,
                    data: fdata,
                    type: 'POST',
                    success: function(msg){

                        $('#js-modal-form-content').html(msg);
                        //$('.modal-body').append('<div class="btn-outer btn-outer-center"><button class="btn btn-gm " data-dismiss="modal" id="js-btn-callback-finish">Продолжить</button></div>');

                        $('#js-modal-form').modal({
                            keyboard: true,
                            show: true
                        });
                    }
                });


            });

        };




        var __checkEmail = function(val, element, message){

            if(val.length > 0 ){
                var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,
                    is_email = re.test(val);
                __addErrorClass(is_email, element, message);
            }

        };

        var __addErrorClass = function(is_val, name, message) {

            var element = $('[name = "' + name + '"]');

            if (!is_val) {
                element.addClass(options.error);

                if(message){ console.log('__addErrorClass:', element);
                    __addErrorMessage(element, message);
                }

            } else {
                element.removeClass(options.error);



            }
        };

        var __addErrorMessage = function(element, message) {

            if (message) {

                __delErrorMessage(element);

                var container = '<span class="' + options.messageClass + '" >' + message + '</span>';

                element.parent().append(container);
            }
        };

        var __delErrorMessage = function (element) {

            if(element){
                /**
                 * TODO: delete message
                 */
                var container = element.parent().find('span');
                console.log(container);
                container.remove();

            }

        };

        //Listen for click - More posts, makes ajax call,insert result to DOM
        var sendData = function(){



        };


        initSendEvent(form);

    };

    var form = $('#contact_form');

    if(form.length > 0){
        initFormHandler(form);
    }



})(jQuery);