<?php

/**
 * Call us Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_call_us = 'call-us-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id_call_us = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'call-us';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$contact_button =  get_field("contact_button");
$contact_title = get_field("contact_title");
$contact_phone = get_field("contact_phone");
$contact_adress = get_field("contact_adress");
$header_button = get_field("header_button");
$contact_background = get_field("contact_background");
?>
<!-- CALL US SECTION START -->
<div class="section-full p-tb80 overlay-wraper bg-center bg-parallax bg-cover"  data-stellar-background-ratio="0.5" style="background-image:url(<?php echo $contact_background; ?>)">
    <div class="overlay-main bg-black opacity-07"></div>
    <div class="container">
        <div class="section-content">
            <div class="call-us-section text-center text-white">
                <h4 class="m-b15"><?php echo $contact_title;?></h4>
                <h2 class="call-us-number m-b15 m-b0"><?php echo $contact_phone;?></h2>
                <h4 class="call-us-address m-t0 m-b20"><?php echo $contact_adress;?></h4>
                <div class="page-wrapper">
                    <a class="site-button btn-effect btn-modal trigger" href="#"><?php echo $contact_button['title']; ?></a>
                </div>
                <?php get_template_part('partials/modal/modal','homepage'); ?>
<!--                modal close-->
            </div>
        </div>

    </div>
</div>
<!-- CALL US SECTION END -->