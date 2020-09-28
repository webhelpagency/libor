<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>
<div class="wrapper" id="page-wrapper">

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
                    <div class="blog-post blog-lg date-style-3 block-shadow">

                        <div class="mt-post-media mt-img-effect zoom-slow">
                            <a href="javascript:void(0);"><img src="<?php the_post_thumbnail_url();?>" alt=""></a>
                        </div>
                        <div class="mt-post-info p-a30 p-m30 bg-white">

                            <div class="mt-post-title ">
                                <h4 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            </div>
                            <div class="mt-post-meta ">
                                <ul>
                                    <li class="post-date"> <i class="fa fa-calendar text-primary"></i>
                                        <?php
                                        $day_month_date = get_the_date("d-F");
                                        $year_date = get_the_date("Y");
                                        ?>
                                        <strong><?php echo $day_month_date;?></strong>
                                        <span> <?php echo $year_date;?></span> </li>
                                </ul>
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
                    <div class="widget bg-white  recent-posts-entry">
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
                                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                                            </div>
                                            <div class="mt-post-info">
                                                <div class="mt-post-meta sidebar-post-meta">
                                                    <ul>
                                                        <?php $day_month_date = get_the_date("d-F");?>
                                                        <li class="post-author"><?php echo $day_month_date;?></li>
                                                    </ul>
                                                </div>
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

                    <!-- NEWSLETTER -->
                    <div class="widget widget_newsletter-2 bg-white  ">
                        <h4 class="widget-title  ">Newsletter</h4>
                        <div class="newsletter-bx p-a30">
                            <div class="newsletter-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>

                            <div class="newsletter-content">
                                <p>Subscribe to our mailing list to get the update to your email.</p>
                            </div>
                            <div class="m-t20">
                                <form role="search" method="post">
                                    <div class="input-group">
                                        <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL" type="text">
                                        <span class="input-group-btn">
                                                            <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- OUR CLIENT -->
                    <div class="widget">
                        <h4 class="widget-title ">Our Client</h4>
                        <div class="owl-carousel widget-client p-t10">

                            <!-- COLUMNS 1 -->
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo">
                                        <a href="#"><img src="images/client-logo/w1.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo">
                                        <a href="#"><img src="images/client-logo/w2.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo">
                                        <a href="#"><img src="images/client-logo/w3.png" alt=""></a>
                                    </div>
                                </div>
                            </div>

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
