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
?>
<!-- CONTACT FORM-->
<div class="row">
    <div class="col-md-8 col-sm-6">
        <div class="contact-form cons-contact-form" >
            <div class="contact-one m-b30">
                <!-- TITLE START -->
                <div class="section-head">
                    <div class="mt-separator-outer separator-left">
                        <div class="mt-separator">
                            <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Залишайтесь</span> На зв'язку</h2>
                        </div>
                    </div>
                </div>
                <!-- TITLE END -->
                <?php echo do_shortcode('[contact-form-7 id="520"]');?>
            </div>
            </div>

    </div>
    <div class="col-md-4 col-sm-6">
        <div class="contact-info m-b30">
            <!-- TITLE START -->
            <div class="section-head">
                <div class="mt-separator-outer separator-left">
                    <div class="mt-separator">
                        <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Контактні</span> Дані</h2>
                    </div>
                </div>
            </div>
            <!-- TITLE END -->
            <div class="bg-dark p-a20 text-white">
                <div class="mt-icon-box-wraper left p-b40">
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


