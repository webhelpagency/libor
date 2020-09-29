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
<!-- SLIDER START -->
<div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header">
    <div id="rev_slider_one" class="rev_slider fullwidthabanner" " data-version="5.4.3.1">
        <ul style="list-style: none">

            <li data-index="rs-901"
                data-transition="fade"
                data-slotamount="default"
                data-hideafterloop="0"
                data-hideslideonmobile="off"
                data-easein="default"
                data-easeout="default"
                data-masterspeed="default"
                data-thumb="<?php echo $slider_welcome_img; ?>"
                data-rotate="0"
                data-fstransition="fade"
                data-fsmasterspeed="300"
                data-fsslotamount="7"
                data-saveperformance="off"
                data-title=""
                data-param1=""
                data-param2=""
                data-param3=""
                data-param4=""
                data-param5=""
                data-param6=""
                data-param7=""
                data-param8=""
                data-param9=""
                data-param10=""
                data-description="">
<!--                 MAIN IMAGE -->
                <img src="<?php echo $slider_welcome_img?>"
                     alt="<?php echo $slider_welcome_alt?>" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center"
                     data-bgrepeat="no-repeat" data-no-retina=""/>
<!--                 LAYERS -->
<!--                 LAYER NR. 1 [ for overlay ] -->
                <div class="tp-caption tp-shape tp-shapewrapper "
                     id="slide-901-layer-0"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                     data-width="full"
                     data-height="full"
                     data-whitespace="nowrap"
                     data-type="shape"
                     data-basealign="slide"
                     data-responsive_offset="off"
                     data-responsive="off"
                     data-frames='[
                            {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                            ]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index: 1;background-color:rgba(0, 0, 0, 0.0);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                </div>


<!--                 LAYER NR. 4 [ for title ] -->
                <div class="tp-caption   tp-resizeme"
                     id="slide-901-layer-2"
                     data-x="['left','left','left','left']" data-hoffset="['50','130','130','130']"
                     data-y="['top','top','top','top']" data-voffset="['200','200','140','160']"
                     data-fontsize="['72','72','62','52']"
                     data-lineheight="['82','82','72','62']"
                     data-width="['700','700','700','96%']"
                     data-height="['none','none','none','none']"
                     data-whitespace="['normal','normal','normal','normal']"

                     data-type="text"
                     data-responsive_offset="on"
                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[5,5,5,5]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index: 13;
                            white-space: normal;
                            font-weight: 700;
                            color:#111;
                            border-width:0px;font-family: 'Poppins', sans-serif; text-transform:uppercase ;">
                    <div><?php echo $slider_welcome_title; ?></div>

                </div>

<!--                 LAYER NR. 5 [ for block] -->
<!--                 LAYER NR. 5 [ for block] -->
                <div class="tp-caption   tp-resizeme"
                     id="slide-901-layer-4"
                     data-x="['left','left','left','left']" data-hoffset="['50','130','130','130']"
                     data-y="['top','top','top','top']" data-voffset="['370','370','310','260']"
                     data-fontsize="['20','20','38','28']"
                     data-lineheight="['28','28','48','38']"
                     data-width="['600','600','700','600']"
                     data-height="['none','none','none','none']"
                     data-whitespace="['normal','normal','normal','normal']"

                     data-type="text"
                     data-responsive_offset="on"
                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[5,5,5,5]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index: 13;
                            white-space: normal;
                            font-weight: 500;
                            color:#111;
                             border-width:0px;font-family: 'Poppins', sans-serif;">
                    <?php echo $slider_welcome_subtitle; ?>
                </div>

<!--                 LAYER NR. 5 [ for see all service botton ] -->
                <div class="tp-caption tp-resizeme"
                     id="slide-901-layer-5"
                     data-x="['left','left','left','left']" data-hoffset="['50','130','130','130']"

                     data-y="['top','top','top','top']" data-voffset="['460','480','500','420']"
                     data-lineheight="['none','none','none','none']"
                     data-width="['300','300','300','300']"
                     data-height="['none','none','none','none']"
                     data-whitespace="['normal','normal','normal','normal']"

                     data-type="text"
                     data-responsive_offset="on"
                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index:100; text-transform:uppercase; margin:10px">

                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="site-button-secondry btn-effect"><?php echo esc_html( $link_title ); ?></a>

                </div>


<!--                 LAYER NR. 6 [ for see all service botton ] -->
                <div class="tp-caption tp-resizeme"
                     id="slide-901-layer-6"
                     data-x="['left','left','left','left']" data-hoffset="['260','330','330','330']"

                     data-y="['top','top','top','top']" data-voffset="['460','480','500','420']"
                     data-lineheight="['none','none','none','none']"
                     data-width="['300','300','300','300']"
                     data-height="['none','none','none','none']"
                     data-whitespace="['normal','normal','normal','normal']"

                     data-type="text"
                     data-responsive_offset="on"
                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index:100; text-transform:uppercase; margin:10px">
                    <?php

                    ?>
                    <a  href="<?php echo esc_url( $link_url_second ); ?>" target="<?php echo esc_attr( $link_target_second ); ?>" class="site-button btn-effect"><?php echo esc_html( $link_title_second ); ?></a>

                </div>
            </li>


<!--             SLIDE 2 -->
<!---->
<!---->
<!--             SLIDE 3-->


        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div>

<!--<div class="section-full p-t80 p-b50 bg-parallax bg-cover"  data-stellar-background-ratio="0.5"-->
<!--     style="background-image:url(--><?php //echo $slider_welcome_img;?>/*);">*/
/*    <div class="container">*/
/*        <!-- TITLE START -->*/
/*        <div class="section-head">*/
/*            <div class="mt-separator-outer separator-center">*/
/*                <div class="mt-separator text-white">*/
/*                    <h2 data-aos="fade-right"*/
/*                        data-aos-duration="500" class="text-uppercase sep-line-one ">*/
/*                        */<?php //echo $slider_welcome_title;?><!--</h2>-->
<!--                    <p>--><?php //echo $slider_welcome_subtitle;?><!--</p>-->
<!--                    <a class="site-button btn-effect btn-modal trigger" href="--><?php //echo $link_url;?><!--">--><?php //echo $link_title; ?><!--</a>-->
<!--                    <a class="site-button-secondry btn-effect btn-modal trigger" href="--><?php //echo $link_url_second;?><!--">--><?php //echo $link_title_second; ?><!--</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- SLIDER END -->