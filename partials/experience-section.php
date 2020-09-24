<?php
/**
 * Experience section Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_experience = 'experience-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id_experience = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'experience';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$experience_section_bg = get_field("experience_section_bg");
$experience_yellow_bg = get_field("experience_yellow_bg");
$experience_yellow_title = get_field("experience_yellow_title");
$experience_yellow_content = get_field("experience_yellow_content");
$experience_yellow_button = get_field("experience_yellow_button");
$experience_yellow_button_title = get_field("experience_yellow_button_title");
$experience_black_title = get_field("experience_black_title");
$experience_black_content = get_field("experience_black_content");
$experience_black_button = get_field("experience_black_button");
$experience_main_title_thin = get_field("experience_main_title_thin");
$experience_main_title_yellow = get_field("experience_main_title_yellow");
$experience_main_title_bold = get_field("experience_main_title_bold");
$experience_feature_1 = get_field("experience_feature_1");
$experience_feature_2 = get_field("experience_feature_2");
$experience_feature_3 = get_field("experience_feature_3");
$experience_feature_1_value = get_field("experience_feature_1_value");
$experience_feature_2_value = get_field("experience_feature_2_value");
$experience_feature_3_value = get_field("experience_feature_3_value");

?>
<!-- ABOUT COMPANY SECTION START -->
<div class="section-full p-t80 p-b50 bg-gray bg-no-repeat bg-bottom-right"
     style="background-image:url(<?php echo $experience_section_bg;?>);">
    <div class="container">
        <div class="section-content ">
            <div class="row">
                <div class="col-md-7 col-sm-6  m-b30">
                    <div class="brochur bg-dark p-a20">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-a30 bg-primary bg-bottom-right"
                                     style="background-image:url(<?php echo $experience_yellow_bg;?>);">
                                    <div class="text-black">
                                        <h4 class="mt-tilte m-t0"><?php echo $experience_yellow_title;?></h4>
                                        <p><?php echo $experience_yellow_content;?></p>
                                        <a href="<?php echo $experience_yellow_button;?>"
                                           class="site-button-secondry btn-half">
                                            <span><?php echo $experience_yellow_button_title;?></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-white p-r15">
                                    <h4 class="mt-tilte"><?php echo $experience_black_title;?></h4>
                                    <p><?php echo $experience_black_content;?></p>
                                    <div class="page-wrapper">
                                        <a class="site-button btn-effect btn-modal trigger" href="#"><?php echo $experience_black_button; ?></a>
                                    </div>
                                    <?php get_template_part('partials/modal/modal','homepage'); ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 m-b30">
                    <div class="our-exp">
                        <div class="mt-box">
                            <h3 class="m-t0 experience-main-heading">
                                <span class="font-weight-100"><?php echo $experience_main_title_thin;?></span>
                                <span class="text-primary"><?php echo $experience_main_title_yellow;?></span>
                                <?php echo $experience_main_title_bold;?>
                            </h3>
                        </div>
                        <span class="progressText text-black"><B><?php echo $experience_feature_1;?></B></span>
                        <div class="progress mt-probar-1  m-b30 m-t10">
                            <div class="progress-bar bg-primary " role="progressbar" aria-valuenow="<?php echo $experience_feature_1_value;?>" aria-valuemin="0" aria-valuemax="100" >
                                <span  class="popOver" data-toggle="tooltips" data-placement="top" title="<?php echo $experience_feature_1_value;?>%"></span>
                            </div>
                        </div>

                        <span class="progressText text-black"><B><?php echo $experience_feature_2;?></B></span>
                        <div class="progress mt-probar-1 m-b30 m-t10">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="<?php echo $experience_feature_2_value;?>" aria-valuemin="10" aria-valuemax="100">
                                <span  class="popOver" data-toggle="tooltips" data-placement="top" title="<?php echo $experience_feature_2_value;?>%"></span>
                            </div>
                        </div>


                        <span class="progressText text-black"><B><?php echo $experience_feature_3;?></B></span>
                        <div class="progress mt-probar-1 m-b30 m-t10">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="<?php echo $experience_feature_3_value;?>" aria-valuemin="0" aria-valuemax="100">
                                <span  class="popOver" data-toggle="tooltips" data-placement="top" title="<?php echo $experience_feature_3_value;?>%"></span>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT COMPANY SECTION END -->
