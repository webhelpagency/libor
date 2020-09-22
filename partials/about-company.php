<?php

/**
 * About company Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_about = 'about-company-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id_about = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'about-company';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$yellow_title = get_field("about_title_yellow");
$black_title = get_field("about_title_black");
$image_about_us = get_field("about_us_image");
$about_us_description_title = get_field('about_us_description_title');
$about_us_description_text = get_field('about_us_description_text');
$about_us_description_button = get_field("about_us_description_button");


?>
<!-- ABOUT COMPANY START -->
<div class="section-full " style="background-image:url(<?php echo get_field('about_us_background'); ?>)"">
    <div class="services-half-section-top " >
        <div class="container">
            <!-- TITLE START -->

            <div class="section-head">
                <div class="mt-separator-outer separator-left text-wh">
                    <div class="mt-separator">
                        <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">
                                <?php echo $yellow_title;?>
                            </span>
                            <?php echo $black_title;?>
                        </h2>
                    </div>

                </div>
            </div>
            <!-- TITLE END -->

            <div class="section-content">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="about-us-image">
                            <!-- COLUMNS 1 -->
                            <div class="item ">
                                <div class="mt-img-effect zoom-slow">
                                    <img src="<?php echo $image_about_us['sizes']['custom-size-800-400'];?>" alt="Про ТОВ ЛИБОР">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="about-home-right about-right-v2 bg-primary text-black p-a30">
                            <h3 class="m-t0"><span class="font-weight-100"><?php echo $about_us_description_title;?></h3>
                            <p><strong><?php echo $about_us_description_text;?></strong></p>

                            <div class="text-left">
                                <a href="<?php echo $about_us_description_button;?>" class="site-button-secondry btn-effect">Детальніше</a>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services-half-section-bottom p-t80 p-b50  bg-secondry bg-cover bg-center bg-no-repeat" style="background-image:url(<?php echo get_field("counter_background"); ?>)">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <?php
                    // Check rows exists.
                    if( have_rows('counter_repeater') ):

                        // Loop through rows.
                        while( have_rows('counter_repeater') ) : the_row();
                            $counter_icon = get_sub_field('counter_icon');
                            $counter_number = get_sub_field('counter_number');
                            $counter_text = get_sub_field('counter_text');
                            // Load sub field value.
                            ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="text-primary mt-icon-box-wraper left m-b30">
                                        <span class="icon-md p-t10">
                                            <i class="<?php echo $counter_icon;?>"></i>
                                        </span>
                                    <div class="icon-content text-white">
                                        <div class="counter font-50 font-weight-800 m-b5" ><?php echo $counter_number;?></div>
                                        <span class="font-16"><?php echo $counter_text;?></span>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    endif?>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ABOUT COMPANY END -->