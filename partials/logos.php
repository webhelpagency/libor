<?php

/**
 * Logos Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_logos = 'logos-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id_logos = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'logos';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.

?>
<!-- CLIENT LOGO SECTION START -->
<div class="section-full p-t10 bg-white ">
    <div class="container">
        <div class="section-content">

            <!-- TESTIMONIAL 4 START ON BACKGROUND -->
            <div class="section-content">
                <div class="section-content p-tb10 owl-btn-vertical-center">
                    <div class="owl-carousel home-client-carousel-2">
                    <?php
                        if( have_rows('logo_repeater') ):

                            while( have_rows('logo_repeater') ) : the_row();
                                $logo_image = get_sub_field('logo_image');
                                ?>
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                            <a href="javascript:void(0);"><img src="<?php echo $logo_image; ?>" alt="logo"></a></div>
                                    </div>
                                </div>
                           <?php endwhile;

                        endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CLIENT LOGO  SECTION End -->