<?php

/**
 * All projects Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_all_projects = 'all_projects-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id_all_projects = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'all_projects';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
?>
<div class="portfolio-wrap mfp-gallery work-grid row clearfix">
    <?php
    $aos_delay = 0;
        $all_projects = new WP_Query(['post_type'=>'projects', 'posts_per_page' => -1]);
        while ($all_projects->have_posts()) :
        $all_projects->the_post();
    ?>
    <!-- COLUMNS -->
    <div data-aos="fade-down"
         data-aos-duration="800" data-aos-delay="<?php echo $aos_delay;?>" class="masonry-item  col-lg-3 col-md-4 col-sm-6 m-b30">
        <div class="project-classic">
            <div class="mt-box ">
                <div  class="mt-thum-bx  img-center-icon  mt-img-overlay2">
                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                    <a href="<?php the_permalink();?>"><div class="overlay-bx">
                    </div></a>
                </div>
            </div>
            <div class="mt-info p-t20">
                <a href="<?php the_permalink();?>"> <h4 class="mt-title m-b20 m-t0" data-hover="<?php the_title();?>"><?php the_title();?></h4></a>
                <p><?php the_excerpt();?></p>
                <a href="<?php the_permalink();?>" class="site-button-link" data-hover="Read More">Детальніше<i class="fa fa-angle-right arrow-animation"></i></a>
            </div>
        </div>
    </div>
<?php
            $aos_delay+=250;
            if ($aos_delay > 750){
                $aos_delay = 0;
            }
        endwhile;
    wp_reset_postdata();
?>
</div>
<!-- GALLERY CONTENT END -->