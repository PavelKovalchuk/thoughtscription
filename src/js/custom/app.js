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

    initPostCarousel();

    enableLeftScrollNav();







    //Base functions area




    function enableLeftScrollNav(){
        $('[data-toggle="slide-collapse"]').on('click', function() {

            $navMenuCont = $($(this).data('target'));
            $navMenuCont.animate({'width':'toggle'}, 280);


        });
    }

    function initPostCarousel(){

        $('#post_articles').owlCarousel({
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
                0:{
                    items:1

                },
                768:{
                    items:1

                },
                992:{
                    items:2

                }
            }
        });

    }

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
                0:{
                    items:1

                },
                768:{
                    items:1

                },
                992:{
                    items:2

                },
                1110:{
                    items:3

                },
                1300:{
                    items:4

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

        if( $(window).width() < 1025 ){
            return false;
        }

        var scrolled = $(window).scrollTop();

        var maxHeight = $('#js-header-hero-image').height();

        var helperHeight = 100;

        var btn = $('#hero_btn');

        if( !btn.length || maxHeight < 50){

            return false;
        }

        if(scrolled < (maxHeight - helperHeight)){
            btn.css('top', (scrolled * 1.6) + 'px');
        }else{
            btn.css('top', maxHeight - helperHeight + 'px');

            return false;
        }


    }


    function startStickyHeader(){

        var navOuter = $('.header_nav_part');

        if( !navOuter.length){
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


    }



})(jQuery);