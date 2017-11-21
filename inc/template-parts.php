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

function get_template_home_carousel($title, $text, $items, $btn = false){
	$btn = ( $btn ) ? $btn :  get_option( '_thoughtscription_option_page_options' )['read_more_text'];
    ?>
    <section class="container-fluid section_style ">

        <div class="container carousel_container">

            <div class="row">
                <div class="col-lg-12">

                    <h2 class="section_title section_title_playfair_grey carousel_block_title"><?php echo $title; ?></h2>

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
                                                <a href="<?php echo get_permalink($item['item_post']); ?>" class="btn animate_link_white carousel_post_link">

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


            <div class="row no-gutters blog_item">


                 <div class="col-lg-12 blog_item_img_outer">

		            <?php

		            $img = get_the_post_thumbnail_url( $post_item->ID, 'category-post-image' );

		            if($img){ ?>

                    <img class="blog_item_img" src="<?php echo $img; ?>" alt="<?php echo $post_item->post_title; ?>"/>

		            <?php } ?>

                 </div>


                <div class="col-lg-12 ">

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
                                <a href="<?php echo get_permalink($post_item->ID); ?>" class="btn animate_link animate_link_blue blog_item_link">

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

    </div>


	<?php

}


function get_template_article_preview_string($post_item, $btn = false){

	$cat_data = get_the_category( $post_item->ID );
	$cat_name = $cat_data[0]->cat_name;
	$btn = ( $btn ) ? $btn :  get_option( '_thoughtscription_option_page_options' )['read_more_text'];


    $html = "<div class='row no-gutters blog_item'>";

    //Image block start

	$html .= "<div class='col-lg-12 blog_item_img_outer'>";

        $img = get_the_post_thumbnail_url( $post_item->ID, 'category-post-image' );

        if($img){

            $html .= "<img class='blog_item_img' src='$img' alt=' $post_item->post_title' />";

         }


	$html .= "</div>";

    //Image block end


    //Main Text block start

    $html .= "<div class='col-lg-12 '><div class='row no-gutters blog_item_info_block'>";

        //Category block start
        $html .= "<div class='col-lg-12 blog_item_cat_outer'><h4 class='blog_item_cat'>$cat_name</h4></div>";
        //Category block end

        //Title block start
        $html .= "<div class='col-lg-12 blog_item_title_outer'><h5 class='blog_item_title'>$post_item->post_title</h5></div>";
        //Title block end

        //Excerpt block start
        if( $post_item->post_excerpt ){

            $html .= "<div class='col-lg-12 blog_item_excerpt_outer'><p class='blog_item_excerpt'>$post_item->post_excerpt</p></div>";

        }
        //Excerpt block end

        //Link block start

        $html .= "<div class='d-flex col-lg-12 align-items-end h-100 animate_link_outer blog_item_link_outer'>";

            $html .= "<a href='" . get_permalink($post_item->ID) . "' class='btn animate_link animate_link_blue blog_item_link' >";

                $html .= "<span class='animate_link_text blog_item_link_text'>";

                    if($btn){
	                    $html .= $btn;
                    }else{
	                    $html .= 'Read full post';
                    }

                $html .= "</span>";

            $html .= "</a>";

        $html .= "</div>";

        //Link block end


	$html .= "</div></div>";

	//Main Text block end




	$html .= "</div>";

	return $html;
}


