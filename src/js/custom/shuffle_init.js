(function($) {

var initShufflePlugin = function (shuffle_element){

    var Shuffle = window.Shuffle;
    var element = shuffle_element;
    var sizer = $('.shuffle_sizer');
    var options = $('.js-filter-option');

    var btnMore = $('#js_more_posts');
    var btnMoreText = btnMore.text();

    var shuffleInstance = new Shuffle(element, {
        itemSelector: '.grid__brick',
        sizer: sizer // could also be a selector: '.my-sizer-element'
        ,useTransforms: true
    });

    var __getArrayOfElementsToAdd = function(data){

        if(!data.length > 0){
            return false;
        }

        var response = [];

        data.forEach(function(element) {

            var block = document.createElement('div');
            block.className = element.classes;
            block.innerHTML = element.html;
            block.setAttribute("data-groups", '["' + element.data_groups + '"]');

            response.push(block);

        });

        return response;

    };





    var eventMorePosts = function(){

        $(btnMore).on('click', function(event){

            var button = $(this),
                data = {
                    'action': 'loadmore',
                    //'query': blog_loadmore_params.posts, // that's how we get params from wp_localize_script() function
                    'paged' : blog_loadmore_params.current_page
                };

            $.ajax({
                url : blog_loadmore_params.ajaxurl, // AJAX handler
                data : data,
                type : 'POST',
                beforeSend : function ( xhr ) {
                    button.text('Loading...'); // change the button text, you can also add a preloader image
                },
                success : function( data ){
                    if( data) {


                        try {
                            JSON.parse(data);
                        } catch (e) {
                            return false;
                        }

                        button.text( btnMoreText );

                        var response = JSON.parse(data);

                        //console.log(response);

                        if(response.answer === 'end'){
                            return false;
                        }

                        var elements = __getArrayOfElementsToAdd(response);

                        //console.log(elements);

                        elements.forEach(function (element) {
                            shuffleInstance.element.appendChild(element);
                        }, this);

                        shuffleInstance.add(elements);

                        blog_loadmore_params.current_page++;

                        console.log(blog_loadmore_params.current_page);

                        if ( blog_loadmore_params.current_page == blog_loadmore_params.max_page ){
                            button.remove(); // if last page, remove the button
                        }

                    } else {
                        button.remove(); // if no data, remove the button as well
                    }
                }
            });

        });

    };



    var eventFilter = function(){

        $(options).on('click', function(event){
            event.preventDefault();

            var $this = $(this),
                isActive = $this.hasClass( 'active' ),
                group = isActive ? 'all' : $this.data('group');

            // Hide current label, show current label in title
            if ( !isActive ) {
                $('#sorter .js-filter-option').removeClass('active');

            }

            $this.toggleClass('active');

            shuffleInstance.filter(group);
        });

    };

    eventFilter();

    eventMorePosts();


};

    var shuffle_element = $('#shuffle_grid_container');

    if(shuffle_element.length > 0){
        initShufflePlugin(shuffle_element);
    }



})(jQuery);