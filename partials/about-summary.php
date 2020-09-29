<?php
/**
 * About summary Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_about_summary = 'about_summary-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id_call_us = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'about_summary';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$about_summary_background = get_field("about_summary_background");
$about_summary_title_y = get_field("about_summary_title_y");
$about_summary_title_b = get_field("about_summary_title_b");
?>

<!-- OUR STORY SECTION START -->
<div class="section-full p-t80 p-b80 bg-dark bg-repeat square_shape2 inner-page-padding" style="background-image:url(<?php echo $about_summary_background;?>)">
    <div class="container">
        <!-- TITLE START -->
        <div  class="section-head">
            <div class="mt-separator-outer separator-left">
                <div class="mt-separator text-white">
                    <h2 data-aos="fade-right"
                        data-aos-duration="500" class="text-uppercase sep-line-one ">
                        <span class="font-weight-300 text-primary"><?php echo $about_summary_title_y;?></span>
                        <?php echo $about_summary_title_b;?></h2>
                </div>
            </div>
        </div>
        <!-- TITLE END -->

        <div class="section-content our-story">
            <?php

            if( have_rows('about_summary_repeater') ):

                while( have_rows('about_summary_repeater') ) : the_row();

                    $about_summary_image = get_sub_field('about_summary_image');
                    $about_summary_item_bg = get_sub_field('about_summary_item_bg');
                    $about_summary_date = get_sub_field('about_summary_date');
                    $about_summary_project = get_sub_field('about_summary_project');
                    $about_summary_content = get_sub_field('about_summary_content');?>
                    <div data-aos="fade-right"
                         data-aos-duration="500" class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="our-story-pic-block">
                                <div class="mt-media our-story-pic">
                                    <img src=" <?php echo $about_summary_image;?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <div class="mt-box our-story-detail bg-moving bg-cover" style="background-image:url(<?php echo $about_summary_item_bg;?>)">
                                <h4 class="text-uppercase m-b20"><?php echo  $about_summary_date;?></h4>
                                <h4 class="m-b20"><?php echo $about_summary_project;?></h4>
                                <p><?php echo $about_summary_content;?></p>
                            </div>
                        </div>
                    </div>
               <?php endwhile;
            endif;?>

        </div>
    </div>
</div>
<!-- OUR STORY SECTION END -->
