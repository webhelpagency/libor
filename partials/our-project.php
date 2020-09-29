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
                    <h2 data-aos="fade-right"
                        data-aos-duration="500" class="text-uppercase sep-line-one ">
                        <span class="font-weight-300 text-primary"><?php echo $projects_title_yellow;?></span>
                        <?php echo $projects_title_black;?>
                    </h2>
                </div>
            </div>
        </div>
        <!-- TITLE END -->

        <div class="section-content">

            <div class="portfolio-wrap class1111 row mfp-gallery product-stamp clearfix">
                <!-- COLUMNS 1 -->
                <?php
                $our_projects = new WP_Query(['post_type'=>'projects', 'posts_per_page' => 6]);
                while ($our_projects->have_posts()) :
                $our_projects->the_post();
                ?>
                                    <div data-aos="fade-right"
                                         data-aos-duration="500" class="masonry-item col-md-4 col-sm-6 m-b30">
                                        <div class="image-effect-one hover-shadow">
                                            <img src="<?php the_post_thumbnail_url('custom-size-510-510');?>" alt="" />
                                            <div class="figcaption">
                                                <h4><?php the_title();?></h4>
                                                <a href="<?php the_permalink();?>"><i class="link-plus bg-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;
                wp_reset_postdata();?>
            </div>
        </div>
    </div>
</div>
<!-- OUR PROJECT END -->