<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StrapPress
 */

/* variables of content */
$data = get_fields();



get_header(); ?>

    <main id="main" class="site-content"  role="main">

        <div class="wrapper" id="wrapper-page">

            <section class="container-fluid section_style ">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-12">

	                        <?php
	                        while ( have_posts() ) : the_post();

		                        the_content();

	                        endwhile; // End of the loop.
	                        ?>

                        </div>

                    </div>

                </div>


            </section>

        </div><!-- Wrapper end -->

    </main>
    <!--<div class="header_hero_image"></div>-->
<?php get_footer(); ?>