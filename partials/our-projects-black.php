<?php
/**
 * Our projects black Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_projects_black = 'projects_black-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id_projects_black = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'projects_black';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$black_projects_bg = get_field("black_projects_bg");
$black_projects_title_y = get_field("black_projects_title_y");
$black_projects_title_b = get_field("black_projects_title_b");
?>
<!-- SECTION CONTENT START -->
<div class="section-full p-t80 p-b50 bg-parallax bg-cover"  data-stellar-background-ratio="0.5"
     style="background-image:url(<?php echo $black_projects_bg;?>);">
    <div class="container">
        <!-- TITLE START -->
        <div class="section-head">
            <div class="mt-separator-outer separator-center">
                <div class="mt-separator text-white">
                    <h2 class="text-uppercase sep-line-one ">
                        <span class="font-weight-300 text-primary"><?php echo $black_projects_title_y;?></span>
                        <?php echo $black_projects_title_b;?></h2>
                </div>
            </div>
        </div>
        <!-- TITLE END -->
        <!-- GALLERY CONTENT START -->
        <div class="portfolio-wrap mfp-gallery work-grid row clearfix">
            <?php

            // Check rows exists.
            if( have_rows('black_projects_repeater') ):

                while( have_rows('black_projects_repeater') ) : the_row();

                    $black_project_image = get_sub_field('black_project_image');
                    $black_project_title = get_sub_field('black_project_title');
                    $black_project_subtitle = get_sub_field('black_project_subtitle');
                    $black_project_link = get_sub_field('black_project_link');?>

            <!-- COLUMNS -->
            <div class="masonry-item col-md-3 col-sm-6 m-b30">
                <div class="mt-box   image-hover-block">
                    <div class="mt-thum-bx">
                        <img src="<?php echo $black_project_image;?>" alt="">
                    </div>
                    <div class="mt-info  p-t20 text-white">
                        <h4 class="mt-tilte m-b10 m-t0"><?php echo $black_project_title;?></h4>
                        <p class="m-b0"><?php echo $black_project_subtitle;?></p>
                    </div>
                    <a href="<?php echo $black_project_link;?>"></a>
                </div>
            </div>
                <?php  endwhile;
           endif;?>
        </div>
        <!-- GALLERY CONTENT END -->
    </div>
</div>
<!-- SECTION CONTENT END  -->

