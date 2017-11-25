<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package StrapPress
 */

get_header(); ?>

<?php //the_breadcrumb(); ?>
    <main id="main" class="container site-main"  role="main">

        <div class="row ">

                     <?php while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', get_post_format() );

                            //the_post_navigation();

                            // If comments are open or we have at least one comment, load up the comment template.


                        endwhile; // End of the loop. ?>

        </div>

    </main><!-- #main -->

<?php

get_footer();
