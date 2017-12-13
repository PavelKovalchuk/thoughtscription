<?php
/*
Template Name: About Author page
*/

/* variables of content */
 $data = get_fields();

get_header();

 ?>
<main id="content" class="site-content" role="main">
<div class="wrapper" id="wrapper-bloh">
    <?php //the_breadcrumb(); ?>


   <!-- <section class="container-fluid author_page">-->
    <section class="author_page">


        <div class="container">

            <div class="row no-gutters author_top_outer">
                <div class="col-lg-12">

                    <div class="author_top_image_outer">


                        <div class="author_top_image_bg"></div>

                        <picture>
                            <source media="(min-width: 992px)" srcset="<?php echo $data['page_hero_image_main']['sizes']['post-full-image-cropped']; ?>">
                            <source media="(min-width: 600px)" srcset="<?php echo  $data['page_hero_image_main']['sizes']['post-tablet-image'];  ?>">
                            <source media="(min-width: 300px)" srcset="<?php echo $data['page_hero_image_main']['sizes']['post-mobile-image'];  ?>">
                            <img src="<?php echo $data['page_hero_image_main']['sizes']['post-full-image-cropped']; ?>" class="author_top_image" alt="<?php echo $data['page_hero_image_main']['alt']; ?>" >
                        </picture>

                        <!--<img src="<?php /*echo $data['page_hero_image_main']['url']; */?>" class="author_top_image" alt="<?php /*echo $data['page_hero_image_main']['alt']; */?>"/>-->

                        <div class="author_top_text_outer">
                            <h2 class="author_top_text_question">

		                    <?php echo $data['page_hero_text']; ?>

                            </h2>

                            <h1 class="author_top_text_answer">

		                    <?php echo $data['page_hero_text_answer']; ?>

                            </h1>
                        </div>

                    </div>

                </div>
            </div>



            <div class="row no-gutters author_content_outer">
                <div class="col-lg-12 author_content_inner">

                    <div class="row no-gutters author_content_container">

                        <div class="author_share"><?php  get_social_sharing_buttons(); ?></div>

                        <div class="author_content">

                            <div class="row no-gutters">

                                <div class="col-md-6 author-left">

                                    <div class="author_profile_img_outer">

                                        <p class="author_position">
		                                    <?php echo $data['author_position']; ?>
                                        </p>

                                        <h3 class="author_name author_name_mobile">
		                                    <?php echo $data['author_name']; ?>
		                                    <?php echo $data['author_surname']; ?>
                                        </h3><?php //var_dump( $data['author_photo_1']); ?>

                                        <img src="<?php echo $data['author_photo_1']['url']; ?>" class="author_content_image author_profile" alt="<?php echo $data['author_photo_1']['alt']; ?>" />

                                    </div>

                                    <div class="author_blog_aim">

                                        <h3 class="author_blog_aim_title">
	                                        <?php echo $data['ts_title']; ?>

                                        </h3>

                                        <p class="author_blog_aim_text">
		                                    <?php echo $data['ts_text']; ?>
                                        </p>

                                        <blockquote class="author_blog_aim_quote">
	                                        <?php echo $data['ts_quote']; ?>
                                        </blockquote>


                                    </div>


                                </div>

                                <div class="col-md-6 author-right">

                                    <div class="data_shifted_left">


                                        <!--<p class="author_position">
		                                    <?php /*echo $data['author_position']; */?>
                                        </p>-->

                                        <h3 class="author_name author_name_desktop">
		                                    <?php echo $data['author_name']; ?>
		                                    <?php echo $data['author_surname']; ?>
                                        </h3>

                                        <div class="author_speaker_img_outer">
                                            <img src="<?php echo $data['author_photo_2']['url']; ?>" class="author_content_image author_speaker" alt="<?php echo $data['author_photo_2']['alt']; ?>" />
                                        </div>

                                        <p class="position_description">
	                                        <?php echo $data['author_position_description']; ?>
                                        </p>

                                        <div class="author_place_img_outer">
                                            <img src="<?php echo $data['author_photo_3']['url']; ?>" class="author_content_image author_place" alt="<?php echo $data['author_photo_3']['alt']; ?>" />
                                        </div>

                                    </div>



                                </div>

                            </div>

                            <div class="row no-gutters author_marketing_outer ">
                                <!--<div class="author-helper"></div>-->
                                <div class="col-lg-12 author_marketing_inner">

                                    <div class="row no-gutters author_marketing_container">

                                        <div class="col-md-6 marketing_left">

                                            <div class="row marketing_title_row">
                                                <div class="col-md-12">

                                                    <h3 class="marketing_title">
								                        <?php echo $data['marketing_blog_title']; ?>
                                                    </h3>

                                                    <h4 class="marketing_title_second">
								                        <?php echo $data['marketing_blog_title_second']; ?>
                                                    </h4>

                                                    <p class="marketing_title_description">
								                        <?php echo $data['marketing_blog_title_description']; ?>
                                                    </p>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6 marketing_right">

                                            <div class="row marketing_text_row">
                                                <div class="col-md-12">

                                                    <p class="marketing_text_1">
								                        <?php echo $data['marketing_blog_text_1']; ?>
                                                    </p>

                                                    <p class="marketing_text_2">
								                        <?php echo $data['marketing_blog_text_2']; ?>
                                                    </p>

                                                    <p class="marketing_text_3">
								                        <?php echo $data['marketing_blog_text_3']; ?>
                                                    </p>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>



                    </div>

                </div>
            </div>











        </div>

        
    </section>


</div><!-- Wrapper end -->
</main>
<?php get_footer(); ?>
