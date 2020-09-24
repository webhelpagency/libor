<?php
/**
 * Inner page banner Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_inner_page_banner = 'inner_page_banner-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id_inner_page_banner = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'inner_page_banner';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$inner_page_banner_title = get_field("banner_title");
$inner_page_banner_bg = get_field("banner_background");
?>

<!-- INNER PAGE BANNER -->
<div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"
     style="background-image:url(<?php echo $inner_page_banner_bg;?>);">
    <div class="overlay-main bg-black opacity-07"></div>
    <div class="container">
        <div class="mt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h1 class="m-b0"><?php
                        if (is_single()){
                            the_title();
                        }else{
                        echo $inner_page_banner_title;
                        }
                        ?></h1>
                </div>
            </div>
            <!-- BREADCRUMB ROW -->
            <div>
                <ul class="mt-breadcrumb breadcrumb-style-2">
                    <?php the_breadcrumb();?>
                </ul>
            </div>
            <!-- BREADCRUMB ROW END -->
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->
