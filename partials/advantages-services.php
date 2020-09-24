<?php
/**
 * Advantages and services Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_advantages_services = 'advantages_contact-' . $block['id'];
if (!empty($block['anchor'])) {
    $id_advantages_services = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'advantages_services';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}
$advantage_services_bg = get_field("advantage_services_bg");
$advantage_services_title = get_field("advantage_services_title");
$advantage_services_content = get_field("advantage_services_content");

// Load values and assign defaults.
?>
<!-- OUR SPECIALLIZATION START -->
            <div class="section-full p-t80 p-b30 bg-dark" style="background-image:url(<?php echo $advantage_services_bg;?>);">
				<div class="container">
                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content">
                        <div class="section-head m-b50 text-white text-center">
                            <h3 class="m-t0"><?php echo $advantage_services_title;?></h3>
                            <p><?php echo $advantage_services_content;?></p>
                        </div>
                        <div class="row">
                            <?php

                            if( have_rows('advantage_services_repeater') ):

                                while( have_rows('advantage_services_repeater') ) : the_row();

                                    $advantage_service_img = get_sub_field('advantage_service_img');
                                    $advantage_service_heading = get_sub_field('advantage_service_heading');
                                    $advantage_service_content = get_sub_field('advantage_service_content');
                                    $advantage_service_link = get_sub_field('advantage_service_link');
                                    ?>
                                    <div class="col-md-4 col-sm-6 m-b30">

                                        <div class="image-effect-one hover-shadow">
                                            <img src="<?php echo $advantage_service_img;?>" alt="" />
                                            <div class="figcaption">
                                                <h4><?php echo $advantage_service_heading;?></h4>
                                                <p class="adv-services-content"><?php echo $advantage_service_content;?></p>
                                                <a href="<?php echo $advantage_service_link;?>"><i class="link-plus bg-primary"></i></a>
                                            </div>
                                        </div>

                                    </div>
                             <?php endwhile;
                            endif;  ?>

                        </div>
                    </div>
                </div>
             </div>
            <!-- OUR SPECIALLIZATION END -->