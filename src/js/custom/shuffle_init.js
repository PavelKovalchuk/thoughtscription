(function($) {

var initShufflePlugin = function (shuffle_element){

    var Shuffle = window.Shuffle;
    var element = shuffle_element;
    var sizer = $('.shuffle_sizer');
    var options = $('.js-filter-option');

    var shuffleInstance = new Shuffle(element, {
        itemSelector: '.grid__brick',
        sizer: sizer // could also be a selector: '.my-sizer-element'
    });



    var eventFilter = function(){

        $(options).on('click', function(event){
            event.preventDefault();

            var $this = $(this),
                isActive = $this.hasClass( 'active' ),
                group = isActive ? 'all' : $this.data('group');

            // Hide current label, show current label in title
            if ( !isActive ) {
                $('#sorter li').removeClass('active');
            }

            $this.toggleClass('active');

            shuffleInstance.filter(group);
        });

    };

    eventFilter();


};

    var shuffle_element = $('#shuffle_grid_container');

    if(shuffle_element.length > 0){
        initShufflePlugin(shuffle_element);
    }



})(jQuery);