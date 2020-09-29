<?php
/**
 * Slider About Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_slider_about = 'slider_about-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id_slider_about = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'slider_about';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$about_section_yellow_title = get_field("about_section_title_yellow");
$about_section_black_title = get_field("about_section_title_black");
$about_experience_bg = get_field("about_experience_bg");
$about_experience_yellow_title = get_field("about_experience_yellow_title");
$about_experience_black_title = get_field("about_experience_black_title");
$about_experience_subtitle = get_field("about_experience_subtitle");
$about_experience_content = get_field("about_experience_content");
$about_experience_signature = get_field("about_experience_signature");
$about_experience_author = get_field("about_experience_author");
$about_experience_author_job = get_field("about_experience_author_job");
$about_experience_button = get_field("about_experience_button");
?>

<!-- ABOUT COMPANY SECTION START -->
<div class="section-full p-tb80 bg-white inner-page-padding">
    <div class="container">
        <!-- TITLE START -->
        <div class="section-head">
            <div class="mt-separator-outer separator-left">
                <div class="mt-separator">
                    <h2 data-aos="fade-right"
                        data-aos-duration="500" class="text-uppercase sep-line-one ">
                        <span class="font-weight-300 text-primary"><?php echo $about_section_yellow_title;?></span>
                        <?php echo $about_section_black_title;?></h2>
                </div>
            </div>
        </div>
        <!-- TITLE END -->
        <div class="section-content ">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <div data-aos="fade-right"
                         data-aos-duration="500" class="m-about ">
                        <div  class="owl-carousel about-us-carousel">
                            <?php

                            // Check rows exists.
                            if( have_rows('slides_repeater') ):

                                // Loop through rows.
                                while( have_rows('slides_repeater') ) : the_row();

                                    // Load sub field value.
                                    $single_slide = get_sub_field('single_slide');
                                    ?>
                                    <div class="item">
                                        <div class="ow-img">
                                            <a href="javascript:void(0);"><img src="<?php echo $single_slide;?>" alt=""></a>
                                        </div>
                                    </div>
                               <?php endwhile;
                            endif;?>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-6">
                    <div class="m-about-containt text-black p-t80">
                        <div class="m-about-years bg-moving" style="background-image:url(<?php echo $about_experience_bg;?>);">
                            <span class="text-primary large-title"><?php echo $about_experience_yellow_title;?></span>
                            <span class="large-title-info"><?php echo $about_experience_black_title;?></span>
                        </div>
                        <h3 class="font-weight-600"><?php echo $about_experience_subtitle;?></h3>
                        <p><?php echo $about_experience_content;?></p>
                        <div class="author-info p-t20">

                            <div class="author-signature">
                                <img src="<?php echo $about_experience_signature;?>" alt="Signature" width="150"/>
                            </div>

                            <div class="author-name">
                                <h4 class="m-t0"><?php echo $about_experience_author;?></h4>
                                <p><?php echo $about_experience_author_job;?></p>
                            </div>
                            <div class="page-wrapper">
                                <a class="site-button btn-effect m-b15 btn-modal trigger" href="#">
                                    <?php echo$about_experience_button['title']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT COMPANY SECTION END -->
