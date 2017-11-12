
//В этом фрагменте ваш код будет выполнен, когда страница полностью загрузится.
jQuery(document).ready(function($){
// Add your custom jQuery here
});

//Если нужно, чтобы код был выполнен сразу (без ожидания события «ready» в DOM)
(function($) {

    // внутри этой функции $ будет работать как jQuery
    
    startStickyHeader();
    
    $(window).scroll(function(e){
        parallaxHeroButton();
    });
    
    initWOW();
    
    initHomeCarousel();
    
    
    
    //Base functions area
    
    function initHomeCarousel(){
        
        $('#home_articles').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            nav: false,
            dots: true,
            lazyLoad: true,
            autoplay: false,
            autoplayHoverPause: true,
            animateOut: false,
            animateIn: false,
            
            responsive:{
                576:{
                    items:1
                    
                },
                768:{
                    items:2
                    
                },
                992:{
                    items:3
                    
                }
            }
        });
        
    }
    
    function initWOW(){
        
        wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    );
        wow.init();
        
    }
    
    function parallaxHeroButton(){
        var scrolled = $(window).scrollTop();
        
        var btn = $('#hero_btn');
        
        if( !btn.length ){
            
            return false;
        }
        
        btn.css('top', (scrolled * 1.4) + 'px');
    }
    
        
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