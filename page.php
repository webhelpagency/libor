<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

    <div class="wrapper" id="page-wrapper">
        <?php get_template_part( 'partials/inner-page', 'banner' );?>
        <div class="container-fluid" id="content" tabindex="-1">

            <div class="row">

                <main class="site-main" id="main">

                    <?php
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'partials/content', 'page' );

                    }
                    ?>

                </main><!-- #main -->

            </div><!-- .row -->

        </div><!-- #content -->

    </div><!-- #page-wrapper -->

<?php
get_footer();