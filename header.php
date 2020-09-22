<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site page-wraper" id="page">
    <header class="site-header header-style-2">
        <div class="header-middle bg-white">
            <div class="container">
                <div class="logo-header">
                    <?php echo get_custom_logo();;?>
                </div>
                <div class="header-info">
                    <ul>
                        <li>
                            <div class="icon-sm">
                                <span class="icon-cell  text-primary"><i class="fa fa-map-marker"></i></span>
                            </div>
                            <div class="icon-content">
                                <strong>ПОЛТАВА, УКРАЇНА</strong>
                                <span>кв.62, Грабчака 11</span>
                            </div>
                        </li>
                        <li>

                            <div class="icon-sm">
                                <span class="icon-cell  text-primary"><i class="fa fa-phone"></i></span>
                            </div>
                            <div class="icon-content">
                                <strong><a href="tel:+380992471211">+380992471211</a></strong>
                                <span>Пн-Пт 9:00 до 18:00</span>
                            </div>

                        </li>
                        <li class="btn-col-last">
                            <div class="page-wrapper">
                                <a class="site-button-secondry btn-effect btn-modal trigger" href="#">ПЕРЕТЕЛЕФОНУЙТЕ</a>
                            </div>
                            <?php get_template_part('partials/modal/modal','homepage'); ?>
<!--                            <a class="site-button-secondry btn-effect">--><?php //echo get_field("header_button"); ?><!--</a>-->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar header-botton nav-bg-secondry">
                <div class="container">
                    <!-- NAV Toggle Button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- ETRA Nav -->

                    <!-- MAIN Nav -->
                    <div class="header-nav navbar-collapse collapse">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'primary',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id'    => 'navbarNavDropdown',
                                'menu_class'      => 'navbar-nav nav',
                                'fallback_cb'     => '',
                                'menu_id'         => 'main-menu',
                                'depth'           => 2,
                                'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                            )
                        );
                        ?>

                    </div>
                </div>
            </div>
        </div>

    </header>

