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
                    <h1 class="section_title section_title_playfair_grey blog_top_title"><?php echo $data['blog_page_title']; ?></h1>
                </div>
            </div>

                <nav class="navbar navbar-toggleable-md navbar-expand-md navbar-light blog_top_cat_nav ">

                    <button class="navbar-toggler align-self-center w-100 navbar_toggler_cat" type="button" data-toggle="collapse"
                            data-target="#navbarNavCat" aria-controls="navbarNavCat"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar_cat_mobile">Categories</span>
                    </button>


                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavCat">

                        <div class="navbar-nav blog_top_cat_outer" id="sorter">

                            <button type="button"
                                    id="term_id_all"
                                    data-group="all"
                                    class="btn btn-link js-filter-option blog_top_cat_item">
                                All
                            </button>

	                        <?php foreach($data['blog_page_categories'] as $cat){ ?>

                                <button type="button"
                                        id="term_id_<?php echo $cat->term_id; ?>"
                                        data-group="<?php echo $cat->slug ?>"
                                        class="btn btn-link js-filter-option blog_top_cat_item ">
	                                <?php echo $cat->name; ?>
                                </button>

	                        <?php } ?>

                        </div>

                    </div>


                </nav>



            <div id="shuffle_grid_container" class="row shuffle_container">

                <?php

                $args = array(
	                'posts_per_page' => 20,
	                'orderby' => 'datet'
                );

                $query = new WP_Query( $args );

                $posts = $query->query($args);

                foreach( $posts as $article_post ){ ?>


                    <?php get_template_article_preview($article_post,
                                                        'grid__brick mt-3 col-sm-12 col-md-6 col-lg-4 col-xl-3 shuffle-item shuffle-item--visible'
                                                        ,$data['blog_button_text']
                    );
                    ?>


                <?php } ?>



	            <?php wp_reset_postdata(); ?>

            </div>



        </div>

        
    </section>


</div><!-- Wrapper end -->

<?php get_footer(); ?>
