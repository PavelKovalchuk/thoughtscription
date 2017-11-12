<?php


function get_template_hero_section($show_btn){
    ?>
    <div class="container-fluid hero_container">
    <div class="row no-gutters">
        <div class="col-lg-12">
                    
        <a class="btn hero_btn" id="hero_btn" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/build/img/btn_read_blog.jpg" class="hero_btn_img" alt="Read blog">
        </a>   
            
        <div class="header_hero_image wow fadeInLeft " data-wow-duration="2s" ></div>

        </div>
    </div>

           
</div>
    
<?php 

}

function get_template_home_carousel($title, $text, $items){
    ?>
    <section class="container-fluid section_style carousel_container">
        
        <div class="row">
            <div class="col-lg-12">

                <h1 class="section_title carousel_block_title"><?php echo $title; ?></h1>

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

                            <div class="carousel_item_img_outer ">
                                <img src="<?php echo get_the_post_thumbnail_url( $item['item_post']->ID, 'thumbnail' ); ?>" class="carousel_item_img" alt="<?php echo $item['item_title']; ?>">
                            </div>

                            <div class="carousel_item_title_outer ">
                                <h5 class="carousel_item_title"><?php echo $item['item_title']; ?></h5>
                            </div>

    <!--                        <div class="inspire_text_outer ">
                                <p class="inspire_text"><?php //echo $item['item_text']; ?></p>
                            </div>-->

                        </div>

                    <?php } ?>



                </div>

            </div>
        </div>

           
    </section>
    
<?php 

}

