<?php
/**
 * Welcome slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_welcome_slider = 'welcome_slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id_welcome_slider = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'welcome_slider';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$slider_welcome_img = get_field('here_image')['url'];
$slider_welcome_alt = get_field('here_image')['alt'];
$slider_welcome_title = get_field('here_title');
$slider_welcome_subtitle = get_field('here_subtitle');

$button_first = get_field('button_first');
$link_url = $button_first['url'];
$link_title = $button_first['title'];
$link_target = $button_first['target'] ? $button_first['target'] : '_self';

$button_second = get_field('button_second');
$link_url_second = $button_second['url'];
$link_title_second = $button_second['title'];
$link_target_second = $button_second['target'] ? $button_second['target'] : '_self';
?>

<div class="section-full bg-parallax bg-cover" data-stellar-background-ratio="0.5"
     style="background-image:url(<?php echo $slider_welcome_img;?>);">
   <div class="container homepage-banner hb-wrapper">
           <div class="hb-content">
        <div class="section-head">
            <div class="container">
                <div class="row">
                    <div data-aos="zoom-in"
                         data-aos-duration="500" class="col-lg-7 col-md-10 col-12">
                            <h1 class="hb-heading">
                                <?php echo $slider_welcome_title;?></h1>
                            <p><?php echo $slider_welcome_subtitle;?></p>
                            <a class="hb-button site-button btn-effect btn-modal trigger" href="<?php echo $link_url;?>"><?php echo $link_title; ?></a>
                            <a class="hb-button site-button-secondry btn-effect btn-modal trigger" href="<?php echo $link_url_second;?>"><?php echo $link_title_second; ?></a>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- SLIDER END -->