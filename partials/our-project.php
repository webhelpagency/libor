<?php

/**
 * Our project Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_project = 'our-projects-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id_project = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'our-project';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$projects_title_yellow = get_field("projects_title_yellow");
$projects_title_black = get_field("projects_title_black");


?>
<!-- OUR PROJECT START -->
<div class="section-full p-t80 p-b30 square_shape2 mobile-page-padding" >
    <div class="container">
        <!-- TITLE START -->
        <div class="section-head">
            <div class="mt-separator-outer separator-center">
                <div class="mt-separator">
                    <h2 class="text-uppercase sep-line-one ">
                        <span class="font-weight-300 text-primary"><?php echo $projects_title_yellow;?></span>
                        <?php echo $projects_title_black;?>
                    </h2>
                </div>
            </div>
        </div>
        <!-- TITLE END -->

        <div class="section-content">

            <div class="portfolio-wrap row mfp-gallery product-stamp clearfix">
                <!-- COLUMNS 1 -->
                <?php
                            if( have_rows('projects_repeater') ):

                                while( have_rows('projects_repeater') ) : the_row();
                                    $our_projects_title = get_sub_field('project_title');
                                    $our_project_image = get_sub_field('project_image');
                                    $our_projects_link = get_sub_field('project_link');
                                    ?>
                                    <div class="masonry-item col-md-4 col-sm-6 m-b30">
                                        <div class="image-effect-one hover-shadow">
                                            <img src="<?php echo $our_project_image['sizes']['custom-size-510-510']; ?>" alt="" />
                                            <div class="figcaption">
                                                <h4><?php echo $our_projects_title;?></h4>
                                                <a href="#"><i class="link-plus bg-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;
                            endif;?>
            </div>
        </div>
    </div>
</div>
<!-- OUR PROJECT END -->