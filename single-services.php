<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>
    <div class="page-content">
        <?php get_template_part( 'partials/inner-page', 'banner' );?>
        <div class="section-full p-tb80 inner-page-padding">
            <div class="container">
                <div class="project-detail-outer">

                    <?php
                    while ( have_posts() ) {
                        the_post();

                        the_content();
                    }
                    ?>

                </div>

            </div><!-- .row -->

        </div><!-- #content -->
        <?php get_template_part( 'partials/similar', 'projects' );?>
    </div><!-- #page-wrapper -->

<?php
get_footer();