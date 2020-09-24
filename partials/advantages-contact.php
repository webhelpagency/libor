<?php
/**
 * Advantages and contact Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_advantages_contact = 'advantages_contact-' . $block['id'];
if (!empty($block['anchor'])) {
    $id_advantages_contact = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'advantages_contact';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}
$advantage_contact_image = get_field("advantage_contact_image");
$advantage_contact_heading = get_field("advantage_contact_heading");
$advantage_contact_image = get_field("advantage_contact_image");
$advantage_contact_content = get_field("advantage_contact_content");
$advantage_contact_call = get_field("advantage_contact_call");
$advantage_contact_phone = get_field("advantage_contact_phone");
$advantage_contact_button = get_field("advantage_contact_button");
// Load values and assign defaults.
?>

<!-- ABOUT COMPANY SECTION START -->
<div class="section-full p-t80 bg-white">
    <div class="container">
        <div class="section-content ">
            <div class="m-service-containt text-black">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <div class="service-about-left">
                            <div class="mt-media">
                                <img src="<?php echo $advantage_contact_image;?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="service-about-right m-b30">
                            <h3 class="m-t0"><?php echo $advantage_contact_heading;?></h3>
                            <p><?php echo $advantage_contact_content;?></p>
                            <div class="call-for-quote-outer">
                                <div class="call-quote">
                                    <span><?php echo $advantage_contact_call;?></span>
                                    <h4><?php echo $advantage_contact_phone;?></h4>
                                </div>
                                <div class="call-estimate bg-dark">
                                    <div class="page-wrapper">
                                        <a class="site-button-secondry btn-effect btn-modal trigger" href="#"><?php echo $advantage_contact_button; ?></a>
                                    </div>
                                    <?php get_template_part('partials/modal/modal','homepage'); ?>
                                    <!--                modal close-->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT COMPANY SECTION END -->
