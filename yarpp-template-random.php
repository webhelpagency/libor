<?php
/*
YARPP Template: Random
Description: This template gives you a random other post in case there are no related posts
Author: YARPP Team
*/ ?>

<!-- Similar projects START -->
<div class="section-full p-t80 p-b30 bg-dark bg-repeat square_shape2 bg-moving" style="background-image:url(assets/images/bg-6.png)">
    <div class="container">
        <!-- TITLE START -->
        <div class="section-head">
            <div class="mt-separator-outer separator-center">
                <div class="mt-separator">
                    <h2 class="text-white text-uppercase sep-line-one ">
                        <?php if(is_singular("projects")){
                            echo '<span class="font-weight-300 text-primary">Інші</span> проекти</h2>';
                        }elseif (is_singular("services")){
                            echo '<span class="font-weight-300 text-primary">Інші</span> послуги</h2>';
                        }else{
                            echo '<span class="font-weight-300 text-primary">Інші</span> новини</h2>';
                        }
                        ?>
                </div>
            </div>
        </div>
        <!-- TITLE END -->
    </div>
    <div  class="section-content container-fluid">

        <div class="similar-carousel-outer">
            <div class="owl-carousel similar-projects owl-btn-vertical-center">
                <?php if (have_posts()):
                    $aos_delay = 0;
                    ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div data-aos="fade-down"
                             data-aos-duration="800" data-aos-delay="<?php echo $aos_delay;?>" class="item mt-box">
                            <div class="mt-img-effect mt-img-overlay7">
                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                            </div>
                            <div class="mt-info p-a30">
                                <h4 class="m-b20 m-t0"><a href="javascript:void(0);"><?php the_title();?></a></h4>
                                <p><?php the_excerpt();?></p>
                                <a href="<?php the_permalink();?>" class="site-button btn-effect">Детальніше</a>
                            </div>
                        </div>
                    <?php
                        $aos_delay+=200;
                        if ($aos_delay > 600){
                            $aos_delay = 0;
                        }
                    endwhile; ?>
                <?php endif; ?>

            </div>
        </div>

    </div>

    <div class="hilite-title text-left p-l50 text-uppercase hilite-dark">
        <strong>Послуги</strong>
    </div>
</div>
<!-- Similar projects END -->