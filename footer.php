<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<footer class="site-footer footer-large  footer-light	footer-wide">
    <!-- FOOTER BLOCKS START -->
    <div class="footer-top overlay-wraper">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="row">
                <!-- ABOUT COMPANY -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div data-aos="fade-up"
                         data-aos-duration="500" class="widget widget_about">
                        <!--<h4 class="widget-title">About Company</h4>-->
                        <ul class="list-none">
                            <?php
                            if ( function_exists('dynamic_sidebar') )
                                dynamic_sidebar('footer-first-column');
                            ?>
                        </ul>

                    </div>
                </div>

                <!-- RESENT POST -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div data-aos="fade-up"
                         data-aos-duration="500" class="widget widget_address_outer">
                        <h4 class="widget-title">Контакти</h4>
                        <ul class="widget_address">
                            <?php
                            if ( function_exists('dynamic_sidebar') )
                                dynamic_sidebar('footer-second-column');
                            ?>
                        </ul>

                    </div>
                </div>

                <!-- USEFUL LINKS -->
                <div class="col-lg-3 col-md-6 col-sm-6 footer-col-3">
                    <div data-aos="fade-up"
                         data-aos-duration="500" class="widget widget_services inline-links">
                        <h4 class="widget-title">Меню</h4>
                        <?php
                        wp_nav_menu( array(
                            'menu_class'=>'menu',
                            'theme_location'=>'footer-menu',
                            'after'=>''
                        ) );
                        ?>
                    </div>
                </div>

                <!-- TAGS -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget recent-posts-entry-date">
                        <h4 class="widget-title">Останні новини</h4>
                        <div class="widget-post-bx">
                            <?php
                            $args = array(
                                'numberposts' => 2,
                                'post_status' => 'publish',
                            );
                            $result = wp_get_recent_posts( $args );

                            foreach( $result as $p ){
                                $day_published = get_the_date('d');
                                $month_published = get_the_date('m');
                                $year_published = get_the_date('Y');
                            ?>
                            <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                <div data-aos="fade-up"
                                     data-aos-duration="500" class="mt-post-date text-center text-uppercase text-white p-tb5">
                                    <strong class="p-date"><?php echo $day_published;?></strong>
                                    <span class="p-month"><?php echo $month_published;?></span>
                                    <span class="p-year"><?php echo $year_published;?></span>
                                </div>
                                <div class="mt-post-info">
                                    <div class="mt-post-header">
                                        <h6 class="post-title"><a href="<?php echo get_permalink($p['ID']) ?>"><?php echo $p['post_title'] ?></a></h6>
                                    </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            </div>




                        </div>
                    </div>
                </div>
                <!-- NEWSLETTER -->

            </div>
        </div>
    </div>
    <!-- FOOTER COPYRIGHT -->
    <div class="footer-bottom overlay-wraper">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="row">
                <div class="mt-footer-bot-center">
                    <span class="copyrights-text">© 2020 ТОВ Либор.Сайт створено за підтримки Web Help Agency.</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<script>
    AOS.init();
</script>
</body>

</html>
