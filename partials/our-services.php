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
                        <h2 class="text-uppercase sep-line-one ">
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
                    if( have_rows('services_repeater') ):
                        while( have_rows('services_repeater') ) : the_row();

                            $service_icon = get_sub_field('service_icon');
                            $service_title = get_sub_field('service_title');
                            $service_link = get_sub_field('service_read_more'); ?>

                            <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc bdr-l-1 bdr-solid bdr-gray">
                                <div class="mt-icon-box-wraper ">
                                    <div class="relative  p-a30">
                                        <div class="icon-md inline-icon m-b15 text-primary scale-in-center">
                                            <span class="icon-cell"><img src="<?php echo $service_icon;?>" alt=""></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte m-b25"><?php echo $service_title;?></h4>
                                        </div>
                                        <a href="<?php echo $service_link['url'];?>" class="site-button-link services-button-link" data-hover="Read More"><?php echo $service_link['title'];?>
                                            <i class="fa fa-angle-right arrow-animation"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                       <?php endwhile;

                    endif;?>
            </div>
        </div>
    </div>

</div>
<!-- OUR SERVICES  END -->