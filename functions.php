<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );
add_theme_support( 'custom-logo' );
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


include "inc/cpt.php";
include "inc/footer-widgets-register.php";
include "inc/gutenberg-blocks-register.php";

function theme_enqueue_styles() {

    $the_theme = wp_get_theme();
    wp_enqueue_style( 'shapen-styles-custom', get_stylesheet_directory_uri() . '/assets/css/custom.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'shapen-styles-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'shapen-styles-flaticon', get_stylesheet_directory_uri() . '/assets/css/flaticon.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'shapen-styles-loader', get_stylesheet_directory_uri() . '/assets/css/loader.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'shapen-styles-fa', get_stylesheet_directory_uri() . '/assets/css/fontawesome/css/font-awesome.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'shapen-styles-popup', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'shapen-styles-carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'shapen-styles-slider', get_stylesheet_directory_uri() . '/assets/css/rev-slider-4.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'shapen-styles', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'shapen-skin', get_stylesheet_directory_uri() . '/assets/css/skin/skin-1.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'child-styles', get_stylesheet_directory_uri() . '/assets/css/child-theme-style.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'child-styles-modal', get_stylesheet_directory_uri() . '/partials/modal/modal-style.css', array(), $the_theme->get( 'Version' ) );
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-1.12.4.min.js', array(), $the_theme->get( 'Version' ), true);
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'child-understrap-bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-popup', get_stylesheet_directory_uri() . '/assets/js/magnific-popup.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-waypoints', get_stylesheet_directory_uri() . '/assets/js/waypoints.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-counterup', get_stylesheet_directory_uri() . '/assets/js/counterup.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-waypoints-sticky', get_stylesheet_directory_uri() . '/assets/js/waypoints-sticky.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-isotope', get_stylesheet_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-owl-filter', get_stylesheet_directory_uri() . '/assets/js/jquery.owl-filter.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-stellar', get_stylesheet_directory_uri() . '/assets/js/stellar.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-shortcode', get_stylesheet_directory_uri() . '/assets/js/shortcode.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-bgscroll', get_stylesheet_directory_uri() . '/assets/js/jquery.bgscroll.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-revolution1', get_stylesheet_directory_uri() . '/assets/revolution/revolution/js/jquery.themepunch.tools.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-revolution2', get_stylesheet_directory_uri() . '/assets/revolution/revolution/js/jquery.themepunch.revolution.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-rev2', get_stylesheet_directory_uri() . '/assets/js/rev-script-2.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-extensions', get_stylesheet_directory_uri() . '/assets/revolution/revolution/js/extensions/revolution-plugin.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-modal-script', get_stylesheet_directory_uri() . '/partials/modal/modal-script.js', array(), $the_theme->get( 'Version' ), true );

    /*
<!-- REVOLUTION JS FILES -->
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script  src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>
     */
}
add_action( 'enqueue_block_editor_assets', 'theme_enqueue_styles' );
add_image_size( 'custom-size-1920-1080', 1920, 1080, true );
add_image_size( 'custom-size-800-400', 800, 400, true );
add_image_size( 'custom-size-510-510', 510, 510, true );
add_theme_support('align-wide');
add_action( 'after_setup_theme', 'theme_register_footer_menu' );
function theme_register_footer_menu() {
    register_nav_menu( 'footer-menu', 'Footer menu' );
}



function the_breadcrumb(){

    // получаем номер текущей страницы
    $pageNum = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $separator = ' &raquo; '; //  »

    // если главная страница сайта
    if( is_front_page() ){

        if( $pageNum > 1 ) {
            echo '<li><a href="' . site_url() . '">Головна</a></li>' . $separator . $pageNum . '-а сторінка';
        } else {
            echo 'Головна сторінка';
        }

    } else { // не главная

        echo '<li><a href="' . site_url() . '">Головна</a></li>' . $separator;
        if( is_single() ){ // записи

            the_category(', '); echo $separator; the_title();

        } elseif ( is_page() ){ // страницы WordPress

            the_title();

        } elseif ( is_category() ) {

            single_cat_title();

        } elseif( is_tag() ) {

            single_tag_title();

        } elseif ( is_day() ) { // архивы (по дням)

            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li>' . $separator;
            echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li>' . $separator;
            echo get_the_time('d');

        } elseif ( is_month() ) { // архивы (по месяцам)

            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li>' . $separator;
            echo get_the_time('F');

        } elseif ( is_year() ) { // архивы (по годам)

            echo get_the_time('Y');

        } elseif ( is_author() ) { // архивы по авторам

            global $author;
            $userdata = get_userdata($author);
            echo 'Опубліковано ' . $userdata->display_name;

        } elseif ( is_404() ) { // если страницы не существует

            echo 'Помилка 404';

        }
        if ( $pageNum > 1 ) { // номер текущей страницы
            echo ' (' . $pageNum . '-а сторінка)';
        }
//        if( is_tax( $taxonomy_name ) ) {
//            single_term_title();
//        }
//
//        if( is_singular( $post_type_name ) ) {
//            the_title();
//        }
    }

}

