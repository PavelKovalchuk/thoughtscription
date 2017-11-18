<?php
/*
Template Name: Blog page
*/

/* variables of content */
 $data = get_fields();
 
 

get_header();

 ?>

<div class="wrapper" id="wrapper-bloh">
    
    

    <section class="container-fluid section_style blog_section ">


        <div class="container blog_top_block">

            <div class="row blog_top_title_outer">
                <div class="col-lg-12">
                    <h1 class="section_title blog_top_title"><?php echo $data['blog_page_title']; ?></h1>
                </div>
            </div>

            <div id="sorter" class="row justify-content-center blog_top_cat_outer">


                <div id="term_id_all"
                     data-group="all"
                     class="col-sm js-filter-option blog_top_cat_item active">

                    <h5 class="blog_top_cat_item_title">All</h5>

                </div>


                <?php foreach($data['blog_page_categories'] as $cat){ ?>

                    <div class="col-sm js-filter-option blog_top_cat_item"
                        data-group="<?php echo $cat->slug ?>"
                        id="term_id_<?php echo $cat->term_id; ?>" >

                        <h5 class="blog_top_cat_item_title"><?php echo $cat->name ?></h5>

                    </div>

                <?php } ?>


            </div>

            <div id="shuffle_grid_container" class="row shuffle">

                <?php

                $args = array(
	                'posts_per_page' => 10,
	                'orderby' => 'datet'
                );

                $query = new WP_Query( $args );

                $posts = $query->query($args);

                foreach( $posts as $article_post ){ ?>


                    <?php get_template_article_preview($article_post,
                                                        'grid__brick mt-3 col-6 col-md-4 col-xl-3 shuffle-item shuffle-item--visible'
                                                        ,'Read full post'
                    );
                    ?>


                <?php } ?>



	            <?php wp_reset_postdata(); ?>

            </div>



        </div>

        
    </section>

    <!--<section class="container section_style articles_block">



        <div id="shuffle_grid_container" class="row shuffle">

            <div data-groups='["best-practice"]' class="grid__brick mt-3 col-6 col-md-4 col-xl-3 shuffle-item shuffle-item--visible" >
                <div class="card card-primary card-inverse">
                    <div class="card-block">
                        Return on investment product management equity crowdfunding stock pivot innovator sales ownership.
                        Return on investment product management equity crowdfunding stock pivot innovator sales ownership.
                    </div>
                </div>
            </div>

            <div data-groups='["best-practice"]' class="grid__brick mt-3 col-6 col-md-4 col-xl-3 shuffle-item shuffle-item--visible" >
                <div class="card card-primary card-inverse">
                    <div class="card-block">
                        Return on investment product management equity crowdfunding stock pivot innovator sales ownership.
                        Return on investment product management equity crowdfunding stock pivot innovator sales ownership.
                        Return on investment product management equity crowdfunding stock pivot innovator sales ownership.
                    </div>
                </div>
            </div>

            <div data-groups='["video-lesson"]' class="grid__brick mt-3 col-6 col-md-4 col-xl-3 shuffle-item shuffle-item--visible" >
                <div class="card card-primary card-inverse">
                    <div class="card-block">
                        Return on investment product management equity crowdfunding stock pivot innovator sales ownership.
                    </div>
                </div>
            </div>



            <li class="grid__brick mt-3 col-6 col-md-4 col-xl-3 shuffle_sizer"></li>

        </div>



    </section>-->


</div><!-- Wrapper end -->

<?php get_footer(); ?>
