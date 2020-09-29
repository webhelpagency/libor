<?php
/**
 * Specialization Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_specialization = 'specialization-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id_specialization = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'specialization';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}?>
<!-- OUR SPECIALIZATION START -->
<?php
//checking page type
?>
<div class="section-full bg-white slider-half-part">

    <div class="section-full p-tb80 bg-white bg-repeat square_shape2 inner-page-padding" <?php if(is_front_page()){
        echo '';
    }else{ ?>
         style="background-image:url(<?php echo get_field("specialization_bg") ;?>)"
  <?php  }
    ?>>
    <div class="container">
        <!-- IMAGE CAROUSEL START -->
        <div class="section-content">
            <?php if( have_rows('specialization_repeater') ):  $count_card=1;?>
            <div class="row">
                <?php while( have_rows('specialization_repeater') ): the_row();
                    $title_card = get_sub_field('title_card');
                    $icon_card = get_sub_field('icon_card');
                    $description_card = get_sub_field('description_card');
                    $link_card = get_sub_field('link_card');
                    $hover_image_card = get_sub_field('hover_image_card');
                ?>
                <div class="col-md-4 col-sm-4 m-b30">
                    <div class="half-blocks">
                        <div data-aos="fade-right"
                             data-aos-duration="500" class="mt-icon-box-wraper center m-b30">
                            <div class="half-block-content icon-count-2 p-a30 p-tb50">
                                <span class="icon-count-number">   <?php echo $count_card;  ?></span>
                                <div class="mt-icon-box-lg radius bg-gray m-b20 scale-in-center">
                                    <span class="icon-cell"><img src="<?php echo $icon_card['url']; ?>" alt="<?php echo $icon_card['alt'] ?>"></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="mt-tilte m-b25"><?php echo $title_card; ?></h4>
                                    <?php echo $description_card; ?>
                                    <a  href="<?php echo esc_url( $link_card['url'] ); ?>" target="<?php echo esc_attr( $link_card['target'] ? $link_card['target'] : '_self' ); ?>"
                                        class="site-button-link" data-hover="<?php echo esc_html( $link_card['title'] ); ?>">
                                        <?php echo esc_html( $link_card['title'] ); ?>
                                        <i class="fa fa-angle-right arrow-animation"></i></a>
                                </div>
                            </div>
                            <div class="bg-cover  half-blocks-bg" style="background-image:url(<?php echo $hover_image_card['sizes']['custom-size-360-400']; ?>)"></div>
                        </div>
                    </div>

                </div>
                <?php $count_card++;
                endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- OUR SPECIALIZATION END -->