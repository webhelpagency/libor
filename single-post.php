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

                      get_template_part('partials/content', 'single');
                    }
                    ?>

                </div>
                <!-- OUR BLOG START -->
                <div class="row">
                <!-- TITLE START -->
                <div data-aos="fade-up"
                     data-aos-duration="500" class="section-head ">
                    <div class="mt-separator-outer separator-left">
                        <div class="mt-separator">
                            <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary" >Останні</span> Новини</h2>
                        </div>
                    </div>
                </div>
                <!-- TITLE END -->

                <!-- IMAGE CAROUSEL START -->
                <div data-aos="fade-up"
                     data-aos-duration="500" class="section-content">
                    <div class="row">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'post__not_in' => [get_the_ID()]
                        );

                        $single_query = new WP_Query( $args );

                        // Цикл
                        if ( $single_query->have_posts() ) :
                            while ( $single_query->have_posts() ) :
                                $single_query->the_post();
                                ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="mt-box blog-post latest-blog-3 date-style-1 bg-white m-b30">
                                        <div class="mt-post-media mt-img-overlay7">
                                            <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url();?>" alt=""></a>
                                        </div>
                                        <div class="mt-post-info p-a30 bg-gray">
                                            <div class="post-overlay-position ">
                                                <div class="mt-post-title ">
                                                    <h4 class="post-title m-b0"><?php the_title() ?></h4>
                                                </div>
                                                <div class="mt-post-text">
                                                    <p><?php echo get_the_excerpt() ?></p>
                                                </div>
                                                <div class="readmore-line">
                                                    <span><a href="<?php echo get_permalink() ?>" class="site-button-link" data-hover="Детальніше">Детальніше <i class="fa fa-angle-right arrow-animation"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
                </div>
            </div><!-- .row -->

        </div><!-- #content -->

    </div><!-- #page-wrapper -->

<?php
get_footer();