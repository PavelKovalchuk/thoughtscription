<?php


function get_template_hero_section($show_btn, $main_img){
    ?>
    <div class="container-fluid hero_container">
    <div class="row no-gutters">
        <div class="col-lg-12">
                    
            <a class="btn hero_btn" id="hero_btn" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/build/img/btn_read_blog.jpg" class="hero_btn_img" alt="Read blog">
            </a>

            <div id="js-header-hero-image" class="header_hero_image_outer " data-wow-duration="2s" >
                <img src="<?php echo get_stylesheet_directory_uri() . '/build/img/bg_home.jpg'; ?>" class="header_hero_image header_hero_image_main wow fadeInLeft  "/>
            </div>

        </div>
    </div>

           
</div>
    
<?php 

}

function get_template_home_carousel($title, $text, $items, $btn){
    ?>
    <section class="container-fluid section_style ">

        <div class="container carousel_container">

            <div class="row">
                <div class="col-lg-12">

                    <h2 class="section_title carousel_block_title"><?php echo $title; ?></h2>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                    <p class="carousel_block_text"><?php echo $text; ?></p>

                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-lg-12">

                    <div class="owl-carousel owl-theme" id="home_articles">

				        <?php foreach ($items as $item) { ?>

                            <div class="carousel_item">

                                    <figure class="h-100 w-100 imghvr-slide-down carousel_item_inner">

                                        <?php
                                        $img = get_the_post_thumbnail_url( $item['item_post'], 'large' );

                                        if(!$img){
                                            $default_img = get_field('slider_default_image');
	                                        $img = wp_get_attachment_image_url( $default_img, 'large' );
                                        }
                                        ?>

                                        <div class="carousel_item_img_outer " style="background-image:url(<?php echo $img; ?>)"></div>

                                        <div class="d-flex align-items-center carousel_item_title_outer ">
                                            <h5 class="carousel_item_title"><?php echo $item['item_title'] ? $item['item_title'] : get_the_title( $item['item_post']); ?></h5>
                                        </div>

                                        <figcaption class="d-flex flex-column carousel_item_text">

                                            <div class="carousel_post_cat_outer">
                                                <h4 class="carousel_post_cat">
			                                        <?php echo get_the_category( $item['item_post'] )[0]->cat_name; ?>
                                                </h4>
                                            </div>

                                            <div class="carousel_post_title_outer">
                                                <h5 class="carousel_post_title">
			                                        <?php echo get_the_title( $item['item_post'] ); ?>
                                                </h5>
                                            </div>

	                                        <?php if( has_excerpt($item['item_post']) ){ ?>

                                            <div class="carousel_post_excerpt_outer">
                                                <p class="carousel_post_excerpt">
			                                        <?php the_excerpt_max_charlength( 220 , $item['item_post']); ?>
                                                </p>
                                            </div>
                                            <?php } ?>

                                            <div class="d-flex align-items-end h-100 animate_link_outer carousel_post_link_outer">
                                                <a href="<?php echo get_permalink($item['item_post']); ?>" class="btn animate_link carousel_post_link">

                                                    <span class="animate_link_text carousel_post_link_text">
                                                        <?php
                                                        if($btn){
	                                                        echo $btn;
                                                        }else{
	                                                        echo 'Read full post';
                                                        } ?>
                                                    </span>


                                                </a>
                                            </div>


                                        </figcaption>
                                    </figure>

                            </div>

				        <?php } ?>

                    </div>

                </div>
            </div>

        </div>

    </section>
    
<?php 

}



function get_template_article_preview($post_item, $classes, $btn){

	$cat_data = get_the_category( $post_item->ID );

    ?>

    <?php //var_dump($post_item); ?>

    <div data-groups='["<?php echo $cat_data[0]->slug; ?>"]'
         class="<?php echo $classes; ?>" >

        <figure class="h-100 w-100 imghvr-slide-down blog_item_inner">

            <div class="row no-gutters">


                 <div class="col-lg-12 blog_item_img_outer">

		            <?php

		            $img = get_the_post_thumbnail_url( $post_item->ID, 'category-post-image' );

		            if($img){ ?>

                    <img class="blog_item_img" src="<?php echo $img; ?>" alt="<?php echo $post_item->post_title; ?>"/>

		            <?php } ?>

                 </div>


                <div class="col-lg-12">

                    <div class="row no-gutters blog_item_info_block">

                        <div class="col-lg-12 blog_item_cat_outer">
                            <h4 class="blog_item_cat">
                                <?php echo $cat_data[0]->cat_name; ?>
                            </h4>
                        </div>

                        <div class="col-lg-12 blog_item_title_outer">
                            <h5 class="blog_item_title">
                                <?php echo $post_item->post_title; ?>
                            </h5>
                        </div>

                        <?php if( $post_item->post_excerpt ){ ?>

                        <div class="col-lg-12 blog_item_excerpt_outer">
                            <p class="blog_item_excerpt">
                                <?php echo $post_item->post_excerpt; ?>
                            </p>
                        </div>

                        <?php } ?>

                         <div class="d-flex col-lg-12 align-items-end h-100 animate_link_outer blog_item_link_outer">
                                <a href="<?php echo get_permalink($post_item->ID); ?>" class="btn animate_link blog_item_link">

                                     <span class="animate_link_text blog_item_link_text">
                                         <?php   if($btn){	echo $btn;
                                                }else{
                                                    echo 'Read full post'; } ?>
                                     </span>


                                </a>
                         </div>

                    </div>

                </div>

            </div>

            <figcaption class="d-flex flex-column blog_item_bg">

            </figcaption>

        </figure>


    </div>


	<?php

}

