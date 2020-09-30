<?php
/**
 * Our services Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_services = 'our-services-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id_services = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'our-services';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$services_section_title_yellow = get_field("services_section_title_yellow");
$services_section_title_black = get_field("services_section_title_black");
$services_section_subtitle = get_field("services_section_subtitle");
$service_icon = get_sub_field('service_icon');
$service_title = get_sub_field('service_title');
$service_link = get_sub_field('service_read_more');
?>
<!-- OUR SERVICES START -->
<div class="section-full p-t80 p-b50 bg-white mobile-page-padding" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/background/ptn-1.png)">
    <div class="section-content">

        <div class="container">
            <!-- TITLE START -->
            <div class="section-head m-b50">
                <div class="mt-separator-outer separator-left">
                    <div class="mt-separator">
                        <h2 data-aos="fade-right"
                            data-aos-duration="500" class="text-uppercase sep-line-one ">
                            <span class="font-weight-300 text-primary">
                                <?php echo get_field("services_section_title_yellow");?>
                            </span>
                            <?php echo get_field("services_section_title_black");?>
                        </h2>
                    </div>
                </div>
                <h3><?php echo get_field("services_section_subtitle");?></h3>
            </div>
            <!-- TITLE END -->

            <div class="row services-v2 no-col-gap">
                <?php
                if(is_front_page()){
                    $cpt_services = new WP_Query(['post_type'=>'services', 'posts_per_page' => 12]);
                }else{
                    $cpt_services = new WP_Query(['post_type'=>'services', 'posts_per_page' => -1]);
                }
                $aos_delay = 0;
                while ($cpt_services->have_posts()) :
                $cpt_services->the_post();
                ?>
                            <div data-aos="fade-down"
                                 data-aos-duration="500" data-aos-delay="<?php echo $aos_delay;?>" data-aos-anchor-placement="center-center" class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc bdr-l-1 bdr-solid bdr-gray">
                                <div class="mt-icon-box-wraper ">
                                    <div class="relative  p-a30">
                                        <div class="icon-md inline-icon m-b15 text-primary scale-in-center">
                                            <span class="icon-cell"><img src="<?php the_post_thumbnail_url();?>" alt=""></span>
                                        </div>
                                        <div class="icon-content">
                                            <a href="<?php the_permalink();?>"><h4 class="mt-tilte m-b25"><?php the_title();?></h4></a>
                                        </div>
                                        <a href="<?php the_permalink();?>" class="site-button-link services-button-link" data-hover="Read More">Детальніше
                                            <i class="fa fa-angle-right arrow-animation"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                <?php
                    $aos_delay+=100;
                    if ($aos_delay > 300){
                        $aos_delay = 0;
                    }
                endwhile;
                       wp_reset_postdata() ;?>
            </div>
        </div>
    </div>

</div>
<!-- OUR SERVICES  END -->