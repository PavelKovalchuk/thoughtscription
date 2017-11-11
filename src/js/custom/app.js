
//В этом фрагменте ваш код будет выполнен, когда страница полностью загрузится.
jQuery(document).ready(function($){
// Add your custom jQuery here
});

//Если нужно, чтобы код был выполнен сразу (без ожидания события «ready» в DOM)
(function($) {

    // внутри этой функции $ будет работать как jQuery

    getCallBackForm();

    enableLeftScrollNav();




    function enableLeftScrollNav(){
        $('[data-toggle="slide-collapse"]').on('click', function() {
            $navMenuCont = $($(this).data('target'));
            $navMenuCont.animate({'width':'toggle'}, 280);
        });
    }


    function getCallBackForm(){

        var btn = $("#js-btn-callback");

        if(btn.length > 0){

            btn.on('click', function(){
                __getConnectBox('callback');
            });

        }

    }

    //jQuery('.call-back-but').click(function(){getConnectBox('callback');});

    function __getConnectBox(act, target){
        var actMain = act || 'callback', targetMain = target || 'dialog';
        $.ajax({
             url: ['/dialogs', actMain, targetMain].filter(function(elem) {
                return !!elem;
            }).join('/'),
            async: true,
            type: 'GET',
            success: function(msg){
                $('#js-modal-form-content').html(msg);
                $('.connect-box-foot').append('<button class="btn btn-gm " id="js-btn-callback-send">Отправить</button>');
                $('#connect-box-inp table').addClass('table table-responsive-md');
                $('#js-modal-form').modal({
                    keyboard: true,
                    show: true
                });

                __getConnectBoxData(act);

            }
        });
    }

    function __getConnectBoxData(act){
        var btn = $("#js-btn-callback-send");

        if(btn.length > 0){

            btn.on('click', function(e){
                e.preventDefault();
               console.log('yep');
               __sendConnectBoxForm(act);
            });

        }
    }



    function __sendConnectBoxForm(action){

        var $boxForm = $('#connect-box-form'),
            fdata = $boxForm.serializeArray(),
            target = $boxForm.find('input[name="target"]').val();

            //reviewId = $boxForm.find('input[name="review_id"]').val(),
            //reviewAnswerId = $boxForm.find('input[name="answer_review_id"]').val(),

        action = action || '';

        $.ajax({
            //url: ['/dialogs', action, target, reviewId, reviewAnswerId].filter(function(elem) {
            url: ['/dialogs', action, target].filter(function(elem) {
                return !!elem;
            }).join('/'),
            async: true,
            data: fdata,
            type: 'POST',
            success: function(msg){
                console.log(msg);
                $('#js-modal-form-content').html(msg);
            }
        });

    }


})(jQuery);