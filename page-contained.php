<?php
/*
 * Template Name: Page contained
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

    <div class="wrapper" id="page-wrapper">
<?php  get_template_part( 'partials/inner-page', 'banner');?>
        <div class="container" id="content" tabindex="-1">

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