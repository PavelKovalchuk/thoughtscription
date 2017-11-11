<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StrapPress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="language" content="en"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">

        <div class="container-fluid header-logo-part">


            <div class="container header_main_part">

                <nav class="navbar navbar-toggleable-md navbar-light top_menu_container">
                    <div class="container">

                        <div class="row ">
                            <div class="col-lg-12">

                                <a class="navbar-brand" href="<?php  get_home_url(); ?>">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/build/img/site_logo-min.png" class="site_logo" alt="Site logo">
                                </a>

                                <button class="navbar-toggler gm-nav-menu-toggler" type="button" data-toggle="slide-collapse" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <?php
                                    $args = array(
                                        'theme_location' => 'primary',
                                        'depth'      => 2,
                                        'container'  => false,
                                        'menu_class'     => 'navbar-nav mr-auto',
                                        'walker'     => new Bootstrap_Walker_Nav_Menu()
                                    );
                                    if (has_nav_menu('primary')) {
                                        wp_nav_menu($args);
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>

                    </div>
                </nav>

            </div>


        </div>


	</header><!-- #masthead -->


    <?php
    /**
    * Bootstrap modal window template.
    */
    require get_template_directory() . '/inc/template-modal-window.php';
    ?>


	<div id="content" class="site-content">
