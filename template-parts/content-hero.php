<?php

// Custom Fields
$prelaunch_price = get_post_meta(7, 'prelaunch_price', true); // post id in URL 
$launch_price = get_post_meta(7, 'launch_price', true); // post id in URL 
$final_price = get_post_meta(7, 'final_price', true); // post id in URL 
$course_url = get_post_meta(7, 'course_url', true); // post id in URL 
$button_text = get_post_meta(7, 'button_text', true); // post id in URL 
?>
<!-- HERO -->
<section id="hero" data-type="background" data-speed="5">
    <article>
        <div class="container clearfix">
            <div class="row">
                <div class="col-sm-5">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
                </div>

                <div class="col-sm-7 hero-text">
                    <h1><?php bloginfo('name'); ?></h1>
                    <p class="lead"><?php bloginfo('description'); ?></p>
                    <div id="price-timeline">
                        <div class="price active">
                            <h4>Pre-Launch Price <small>Ends soon!</small></h4>
                            <span><?= $prelaunch_price; ?></span>
                        </div>
                        <div class="price">
                            <h4>Launch Price <small>Coming soon!</small></h4>
                            <span><?= $launch_price; ?></span>
                        </div>
                        <div class="price">
                            <h4>Final Price <small>Coming soon!</small></h4>
                            <span><?= $final_price; ?></span>
                        </div>
                    </div>
                    <p><a href="<?= $course_url; ?>" class="btn btn-lg btn-danger" role="button"><?= $button_text; ?></a></p>
                </div>
            </div>
        </div>
    </article>
</section>