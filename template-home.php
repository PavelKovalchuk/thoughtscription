<?php
/*
Template Name: Main page
*/

/* variables of content */
 $data = get_fields();
 
 

get_header();

get_template_hero_section($data['link_to_read_blog'], $data['homepage_hero_image_main'], $data['homepage_hero_image_mobile']);  ?>

<div class="wrapper" id="wrapper-home">
    
    

    <section class="container-fluid section_style blue_bg_block ">


        <div class="container inspire_block">

            <div class="row inspire_block_title_outer">
                <div class="col-lg-12">
                    <h1 class="section_title inspire_block_title"><?php echo $data['inspires_block_title']; ?></h1>
                </div>
            </div>

            <div class="row inspire_items_outer">

		        <?php foreach ($data['inspires_items'] as $item){ ?>

                    <div class="col-sm-12 col-md-6 col-lg-4 wow fadeInUp inspire_item" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">

                        <div class="inspire_item_inner">
                            <div class="inspire_img_outer ">
                                <img src="<?php echo $item['item_image']['url']; ?>" class="inspire_img" alt="<?php echo $item['item_image']['alt']; ?>">
                            </div>

                            <div class="inspire_title_outer ">
                                <h5 class="inspire_title"><?php echo $item['item_title']; ?></h5>
                            </div>

                            <div class="inspire_text_outer ">
                                <p class="inspire_text"><?php echo $item['item_text']; ?></p>
                            </div>
                        </div>

                    </div>

		        <?php } ?>

            </div>

        </div>

        
    </section>
    
    <?php //var_dump($data['slider_items']); ?>
    <?php get_template_home_carousel($data['slider_block_title'], $data['slider_block_text'], $data['slider_items'], $data['slider_button_text']); ?>

</div><!-- Wrapper end -->


<!--<div class="header_hero_image"></div>-->
<?php get_footer(); ?>
