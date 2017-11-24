<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package StrapPress
 */

get_header(); ?>

<?php the_breadcrumb(); ?>
	<div class="container">

		<div class="row">

			<div id="primary" class="col-lg-12">

				<main id="main" class="row site-main" role="main">

                    <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', get_post_format() );

                        the_post_navigation();

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>

				</main><!-- #main -->

			</div><!-- #primary -->

<?php

get_footer();
