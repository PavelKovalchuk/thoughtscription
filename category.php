<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18.11.2017
 * Time: 11:57
 */

$data = get_fields(8);
get_header();

?>

	<div class="wrapper" id="wrapper-bloh">

		<section class="container-fluid section_style blog_section ">


			<div class="container blog_top_block">

				<div class="row blog_top_title_outer">
					<div class="col-lg-12">
						<h1 class="section_title section_title_playfair_grey blog_top_title"><?php single_cat_title(); ?></h1>
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

					/* Start the Loop */
					while ( have_posts() ) : the_post();
						$cat_data = get_the_category( $post->ID );
                        ?><div class="grid__brick col-sm-12 col-md-6 col-lg-4 col-xl-3 shuffle-item shuffle-item--visible" data-groups='["<?php echo $cat_data[0]->slug; ?>"]' >

                        <?php echo get_template_article_preview_string($post, $data['blog_button_text'] ); ?>

                        </div> <?php

						/*get_template_article_preview($post,
							'grid__brick mt-3 col-sm-12 col-md-6 col-lg-4 col-xl-3 shuffle-item shuffle-item--visible'
							,$data['blog_button_text']
						);*/

					endwhile;
					?>

				</div>

                <div class="row ts_btn_more_posts_row">
                    <div class="col-lg-12 ts_btn_more_posts_outer text-center">

                        <button id="js_more_posts" type="button" class="btn btn-outline-primary btn-lg ts_btn_blue ts_btn_more_posts ">
							<?php echo $data['blog_button_more_text']; ?>
                        </button>

                    </div>
                </div>



			</div>


		</section>

		<?php get_subscribe_section(); ?>


	</div><!-- Wrapper end -->

<?php get_footer(); ?>