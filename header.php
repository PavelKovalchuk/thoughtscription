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
<meta name="language" content="ru"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="<?php echo get_stylesheet_directory_uri() ?>/favicon/favicon.ico" rel="shortcut icon" type="image/x-icon" />

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

            <div class="header-bg-helper-line"></div>

            <div class="nav-bg-helper-line"></div>


            <div class="container header-main-part">

                <div class="row">
                    <div class="col-md">

                        <div class="row">

                            <div class="col-md header-first-row-content">

                            </div>

                        </div>

                        <div class="row no-gutters header-main-row-content">

                            <div class="col-md-6 col-lg-3 align-self-center header-main-row-left text-center">

                                <div class="row">

                                    <div class="col-md header-phone-outer">

                                            <div class="header-phone-img-outer">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/build/img/icon_phone.png"  class="header-phone-img" alt="Phone_logo">
                                            </div>

                                            <div class="header-phones-outer">
                                                <p class="header-phone-number">(+38) 095 744 26 61</p>
                                                <p class="header-phone-number">(+38) 098 208 16 17 </p>
                                            </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md">

                                        <div class="header-shop-btn-outer">
                                            <button class="btn btn-gm " id="js-btn-callback" role="button">
                                                Заказать обратный звонок
                                            </button>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6 align-self-center header-main-row-center text-center">

                                <a class="navbar-brand site-logo-link" href="<?php echo GM_SHOP_URL; ?>" rel="home">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/build/img/logo_blog.png"  class="site-logo-img" alt="Logo">
                                </a>

                            </div>

                            <div class="col-md-6 col-lg-3 align-self-center header-main-row-right text-center">

                                <div class="row">
                                    <div class="col-md">
                                        <div class="header-shop-text">
                                            Для просмотра<br/>каталога саженцев
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <div class="header-shop-btn-outer">
                                            <a class="btn btn-gm btn-gm-img" href="<?php echo GM_SHOP_URL; ?>" id="js-btn-go-shop" role="button">

                                                Перейти в магазин
                                            </a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="row justify-content-center">

                            <div class="col-md-auto header-last-row-content">
                                <form class="form-inline header-find-form">
                                    <input class="form-control mr-md-6 header-find-form-input" type="search" placeholder="Поиск по блогу" aria-label="Search">
                                    <span class="find-image"></span>
                                    <button class="btn btn-gm-red btn-header-find" type="submit">Найти!</button>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <nav class="navbar navbar-toggleable-md navbar-light top-menu-container">
                <div class="container">

                    <div class="row d-lg-none">
                        <div class="col-lg-12">
                            <button class="navbar-toggler gm-nav-menu-toggler" type="button" data-toggle="slide-collapse" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>




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
            </nav>



        </div>






	</header><!-- #masthead -->


    <?php
    /**
    * Bootstrap modal window template.
    */
    require get_template_directory() . '/inc/template-modal-window.php';
    ?>


	<div id="content" class="site-content">
