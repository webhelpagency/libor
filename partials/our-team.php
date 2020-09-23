<?php
/**
 * Our team Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id_our_team = 'our_team-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id_our_team = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'our_team';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$our_team_yellow_title = get_field("our_team_yellow_title");
$our_team_black_title = get_field("our_team_black_title");

?>

<!-- OUR TEAM START -->
<div class="section-full p-t80 p-b50 bg-white inner-page-padding">
    <div class="container">

        <!-- TITLE START -->
        <div class="section-head">
            <div class="mt-separator-outer separator-left">
                <div class="mt-separator">
                    <h2 class="text-uppercase sep-line-one ">
                        <span class="font-weight-300 text-primary"><?php echo $our_team_yellow_title;?></span>
                        <?php echo $our_team_black_title;?>
                    </h2>
                </div>
            </div>
        </div>
        <!-- TITLE END -->

        <!-- IMAGE Team START -->
        <div class="section-content">
            <div class="row">
                <?php
                if( have_rows('team_member_repeater') ):

                    // Loop through rows.
                    while( have_rows('team_member_repeater') ) : the_row();

                        // Load sub field value.
                        $team_member_image = get_sub_field("team_member_image");
                        $team_member_job = get_sub_field("team_member_job");
                        $team_member_name = get_sub_field("team_member_name");
                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-b30   ">

                            <div class="our-team-1 hover-animation-1">
                                <div class="profile-image scale-in-center"><img src="<?php echo $team_member_image;?>" alt="" /></div>
                                <div class="figcaption">
                                    <h4><?php echo $team_member_name;?> </h4>
                                    <h5><?php echo $team_member_job;?></h5>

                                </div>

                            </div>
                        </div>
                  <?php  endwhile;

                endif;?>


            </div>
        </div>
    </div>

</div>
<!-- OUR TEAM END -->
