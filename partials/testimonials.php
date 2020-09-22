<?php
/**
 * Testimonials Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_testimonials = 'testimonials-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id_testimonials = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonials';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.

?>
<!-- TESTIMONIALS SECTION START -->
<div class="section-full p-t80 bg-dark square_shape2  square_shape1 bg-moving" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/shapen/images/background/bg-6.png)">
    <div class="container">
        <div class="section-content">

            <!-- TITLE START -->
            <div class="section-head">
                <div class="mt-separator-outer separator-center">
                    <div class="mt-separator">
                        <h2 class="text-white text-uppercase sep-line-one "><span class="font-weight-300 text-primary">ВІДГУКИ</span> КЛІЄНТІВ</h2>
                    </div>
                </div>
            </div>
            <!-- TITLE END -->

            <!-- TESTIMONIAL START -->
            <div class="owl-carousel testimonial-home-2 p-b120">
                <?php

                    // Check rows exists.
                    if( have_rows('testimonoials_repeater') ):

                        while( have_rows('testimonoials_repeater') ) : the_row();
                            $author_avatar = get_sub_field('author_avatar');
                            $author_name = get_sub_field('author_name');
                            $testimonial_content = get_sub_field('testimonial_content');
                            ?>
                            <div class="item">
                                <div class="col-sm-12 col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">
                                    <div class="testimonial-1 testimonial-bg m-a30 hover-animation-1 text-center text-white">
                                        <div class="testimonial-detail clearfix">
                                            <div class="testimonial-pic radius shadow scale-in-center"><img src="<?php echo $author_avatar; ?>" width="100" height="100" alt=""></div>
                                        </div>
                                        <div class="testimonial-text">
                                            <span class="fa fa-quote-right"></span>
                                            <p> <?php echo $testimonial_content; ?></p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <h4 class="testimonial-name m-b5"><?php echo $author_name; ?></h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endwhile;
                    endif;?>
            </div>
        </div>
    </div>
</div>
<!-- TESTIMONIALS SECTION END -->