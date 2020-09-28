<?php
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

    <div class="wrapper" id="page-wrapper">

        <div class="container-fluid" id="content" tabindex="-1">

            <div class="row">

                <main class="site-main" id="main">

                    <?php
                    get_template_part('partials/inner-page', 'banner' );

                    get_template_part('partials/all', 'projects' );
                    ?>

                </main><!-- #main -->

            </div><!-- .row -->

        </div><!-- #content -->

    </div><!-- #page-wrapper -->

<?php
get_footer();