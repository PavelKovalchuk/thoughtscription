
//В этом фрагменте ваш код будет выполнен, когда страница полностью загрузится.
jQuery(document).ready(function($){
// Add your custom jQuery here
});

//Если нужно, чтобы код был выполнен сразу (без ожидания события «ready» в DOM)
(function($) {

    // внутри этой функции $ будет работать как jQuery
    
    startStickyHeader();
    
    
    //Base functions area
    
    function startStickyHeader(){
        
        var navOuter = $('.header_nav_part');
        
        if( !navOuter.length ){
            console.log("No element header_nav_part");
            return false;
        }
        
        
        // Sticky Header
        $(window).scroll(function() {

            if ($(window).scrollTop() > 30) {
                $('.header_nav_part').addClass('sticky');
            } else {
                $('.header_nav_part').removeClass('sticky');
            }
        });

        // Mobile Navigation
        $('.mobile-toggle').click(function() {
            if ($('.main_header').hasClass('open-nav')) {
                $('.main_header').removeClass('open-nav');
            } else {
                $('.main_header').addClass('open-nav');
            }
        });

        
        
    }



})(jQuery);