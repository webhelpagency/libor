<?php
/**
 * Contact section Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_contact_section = 'contact_section-' . $block['id'];
if (!empty($block['anchor'])) {
    $id_call_us = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'contact_section';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$c_s_phone_number = get_field("c_s_phone_number");
$c_s_email = get_field("c_s_email");
$c_s_address = get_field("c_s_address");
$left_title_yellow = get_field("c_left_yellow");
$left_title_black = get_field("c_left_black");
$right_title_yellow = get_field("c_right_yellow");
$right_title_black = get_field("c_right_black");
?>
<!-- CONTACT FORM-->
<div class="row">
    <div class="col-md-8 col-sm-6">
        <div class="contact-form cons-contact-form" >
            <div data-aos="fade-down"
                 data-aos-duration="500" class="contact-one m-b30">
                <!-- TITLE START -->
                <div  class="section-head">
                    <div class="mt-separator-outer separator-left">
                        <div class="mt-separator">
                            <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary"><?php echo $left_title_yellow;?></span> <?php echo $left_title_black;?></h2>
                        </div>
                    </div>
                </div>
                <!-- TITLE END -->
                <?php echo do_shortcode('[contact-form-7 id="520"]');?>
            </div>
            </div>

    </div>
    <div class="col-md-4 col-sm-6">
        <div data-aos="fade-down"
             data-aos-duration="500" data-aos-delay="400" class="contact-info m-b30">
            <!-- TITLE START -->
            <div  class="section-head">
                <div class="mt-separator-outer separator-left">
                    <div class="mt-separator">
                        <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary"><?php echo $right_title_yellow;?></span> <?php echo $right_title_black;?></h2>
                    </div>
                </div>
            </div>
            <!-- TITLE END -->
            <div class="bg-dark p-a20 text-white">
                <div  class="mt-icon-box-wraper left p-b40">
                    <div class="icon-xs"><i class="fa fa-phone"></i></div>
                    <div class="icon-content">
                        <h5 class="m-t0 font-weight-500">Номер телефону</h5>
                        <p><a href="tel:<?php echo $c_s_phone_number;?>" class="contact-content">
                                <?php echo $c_s_phone_number;?>
                            </a></p>
                    </div>
                </div>

                <div class="mt-icon-box-wraper left p-b40">
                    <div class="icon-xs"><i class="fa fa-envelope"></i></div>
                    <div class="icon-content">
                        <h5 class="m-t0 font-weight-500">E-mail</h5>
                        <p><a href="mailto:<?php echo $c_s_email;?>" class="contact-content"><?php echo $c_s_email;?></a></p>
                    </div>
                </div>

                <div class="mt-icon-box-wraper left">
                    <div class="icon-xs"><i class="fa fa-map-marker"></i></div>
                    <div class="icon-content">
                        <h5 class="m-t0 font-weight-500">Адреса</h5>
                        <p><?php echo $c_s_address;?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="contact-section-map">
            <figure data-aos="fade-down"
                    data-aos-duration="500" data-aos-delay="200">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6154.167265500436!2d34.517923422914464!3d49.569294544971505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d82f3b9f4080a1%3A0xac23daa2bf63a9b0!2z0YPQuy4g0JPRgNCw0LHRh9Cw0LrQsCwgMTEsINCf0L7Qu9GC0LDQstCwLCDQn9C-0LvRgtCw0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgMzYwMDA!5e0!3m2!1sru!2sua!4v1601020905171!5m2!1sru!2sua"
                        class="google_map" allowfullscreen="" width="100%" height="450">
                </iframe>
            </figure>
        </div>
    </div>
</div>


