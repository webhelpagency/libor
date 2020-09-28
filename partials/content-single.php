<?php
/*Template for displaying single posts*/
;?>
<div class="blog-post date-style-3 blog-detail text-black">
    <div class="mt-post-media clearfix m-b30">
        <ul class="grid-post">
            <li>
                <div class="portfolio-item">
                    <img class="img-responsive" src="<?php the_post_thumbnail_url();?>" alt="">
                </div>
            </li>
        </ul>
    </div>

    <div class="mt-post-meta ">
        <ul>
            <?php
            $day_date = get_the_date("d");
            $year_month_date = get_the_date("F-Y");
            ?>
            <li class="post-date"><strong><?php echo $day_date;?></strong> <span><?php echo $year_month_date;?></span> </li>
        </ul>
    </div>

    <div class="mt-post-title ">
        <h2 class="post-title"><a href="javascript:void(0);" class="font-weight-600"><?php echo the_title();?></a></h2>
    </div>

    <div class="mt-post-text">
        <?php the_content();?>
    </div>

    <div class="autor-post-tag-share bdr-t-1 bdr-solid bdr-gray p-t20">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="mt-box">
                    <div class="clearfix">
                        <h4>Поділитися:</h4>
                        <div class="widget_social_inks">
                            <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>