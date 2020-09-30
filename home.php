<?php
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
<!-- SECTION CONTENT START -->
<div class="section-full p-tb80 inner-page-padding">

    <!-- GALLERY CONTENT START -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7">
                <div class="news-listing ">
                    <?php if (have_posts()):?>
                    <?php while (have_posts()) : the_post(); ?>
                    <!-- COLUMNS 1 -->
                    <div data-aos="fade-up" data-aos-offset="0"
                         data-aos-duration="800" class="blog-post blog-lg date-style-3 block-shadow">

                        <div class="mt-post-media mt-img-effect zoom-slow">
                            <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url();?>" alt=""></a>
                        </div>
                        <div class="mt-post-info p-a30 p-m30 bg-white">

                            <div class="mt-post-title ">
                                <h4 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            </div>
                            <div class="mt-post-text">
                                <p><?php the_excerpt();?></p>
                            </div>
                            <div class="clearfix">
                                <div class="mt-post-readmore pull-left">
                                    <a href="<?php the_permalink();?>" title="Детальніше" rel="bookmark" class="site-button-link">Детальніше<i class="fa fa-angle-right arrow-animation"></i></a>
                                </div>
                                <div class="widget_social_inks pull-right">
                                        <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endwhile;
                    endif;?>

                </div>
                <?php the_posts_pagination() ;?>
            </div>
            <!-- SIDE BAR START -->
            <div class="col-md-4 col-sm-5">

                <aside  class="side-bar">
                    <!-- RECENT POSTS -->
                    <div data-aos="fade-down"
                         data-aos-duration="800" data-aos-delay="500" class="widget bg-white  recent-posts-entry">
                        <h4 class="widget-title  ">Останні новини</h4>
                        <div class="section-content">
                            <div class="widget-post-bx">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 3
                                );

                                $blog_query = new WP_Query( $args );

                                // Цикл
                                if ( $blog_query->have_posts() ) :
                                    while ( $blog_query->have_posts() ) :
                                        $blog_query->the_post();
                                        ?>
                                        <div class="widget-post clearfix">
                                            <div class="mt-post-media">
                                                <a href="<?php the_permalink();?>">
                                                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                                                </a>

                                            </div>
                                            <div class="mt-post-info">
                                                <div class="mt-post-header">
                                                    <a href="<?php the_permalink();?>"><h6 class="post-title"><?php the_title();?></h6></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                    endif;
                                wp_reset_postdata();?>
                            </div>
                        </div>
                    </div>

                    <!-- OUR CLIENT -->
                    <div data-aos="fade-up"
                         data-aos-duration="800" data-aos-delay="600" class="widget">
                        <h4 class="widget-title "><?php echo get_field('sidebar_clients_title',get_queried_object_id());?></h4>
                        <div class="owl-carousel widget-client p-t10">
                            <?php
                            // Check rows exists.
                            if( have_rows('sidebar_clients_repeater',get_queried_object_id()) ):

                                // Loop through rows.
                                while( have_rows('sidebar_clients_repeater',get_queried_object_id()) ) : the_row(get_queried_object_id());
                                    // Load sub field value.
                                    $sidebar_client_image = get_sub_field('sidebar_client_image',get_queried_object_id());
                                    $sidebar_client_link = get_sub_field('sidebar_client_link',get_queried_object_id());?>
                                    <!-- COLUMNS  -->
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo">
                                                <a href="<?php echo $sidebar_client_link;?>"><img src="<?php echo $sidebar_client_image;?>" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                               <?php endwhile;
                            endif;?>


                        </div>
                    </div>

                </aside>

            </div>
            <!-- SIDE BAR END -->
        </div>
    </div>
    <!-- GALLERY CONTENT END -->

</div>
<!-- SECTION CONTENT END  -->
            </main><!-- #main -->

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
