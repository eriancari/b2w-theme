<?php

/**
 * Template Name: Home Page
 */

// Custom Fields
$prelaunch_price = get_post_meta(7, 'prelaunch_price', true); // post id in URL 
$launch_price = get_post_meta(7, 'launch_price', true); // post id in URL 
$final_price = get_post_meta(7, 'final_price', true); // post id in URL 
$course_url = get_post_meta(7, 'course_url', true); // post id in URL 
$button_text = get_post_meta(7, 'button_text', true); // post id in URL 
$optin_text = get_post_meta(7, 'optin_text', true); // post id in URL 
$optin_button_text = get_post_meta(7, 'optin_button_text', true); // post id in URL 

// Advanced Custom Fields
$income_feature_img = get_field('income_feature_image');
$income_section_title = get_field('income_section_title');
$income_section_desc = get_field('income_section_description');
$reason_1_title = get_field('reason_1_title');
$reason_1_desc = get_field('reason_1_description');
$reason_2_title = get_field('reason_2_title');
$reason_2_desc = get_field('reason_2_description');

$who_feature_img = get_field('who_feature_image');
$who_section_title = get_field('who_section_title');
$who_section_body = get_field('who_section_body');

$features_section_img = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body = get_field('features_section_body');

get_header();
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

<!-- OPT IN SECTION -->
<section id="optin">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <p class="lead">
                    <?= $optin_text; ?>
                </p>
            </div>

            <div class="col-sm-4">
                <button class="btn btn-success btn-lg d-block w-100" data-bs-toggle="modal"
                    data-bs-target="#myModal">
                    <?= $optin_button_text; ?>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- BOOST YOUR INCOME -->
<section id="boost-income">
    <div class="container">
        <div class="section-header">
            <!-- If user uploaded and image -->
            <?php if (!empty($income_feature_img)) : ?>
                <img src="<?= $income_feature_img['url'] ?>" alt="<?= $income_feature_img['alt'] ?>">
            <?php endif; ?>

            <h2><?= $income_section_title; ?></h2>
        </div>

        <p class="lead"><?= $income_section_desc; ?></p>

        <div class="row">
            <div class="col-sm-6">
                <h3><?= $reason_1_title; ?></h3>
                <p><?= $reason_1_desc; ?></p>
            </div>
            <div class="col-sm-6">
                <h3><?= $reason_2_title; ?></h3>
                <p><?= $reason_2_desc; ?></p>
            </div>
        </div>
    </div>

</section>

<!-- WHO BENEFITS -->
<section id="who-benefits">
    <div class="container">
        <div class="section-header">

            <!-- If user uploaded and image -->
            <?php if (!empty($income_feature_img)) : ?>
                <img src="<?= $who_feature_img['url'] ?>" alt="<?= $who_feature_img['alt'] ?>">
            <?php endif; ?>

            <h2><?= $who_section_title; ?></h2>
        </div>

        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <?= $who_section_body; ?>
            </div>
        </div>
    </div>

</section>

<!-- COURSE FEATURES -->
<section id="course-features">
    <div class="container">
        <div class="section-header">

            <!-- If user uploaded and image -->
            <?php if (!empty($features_section_img)) : ?>
                <img src="<?= $features_section_img['url'] ?>" alt="<?= $features_section_img['alt'] ?>">
            <?php endif; ?>

            <h2><?= $features_section_title; ?></h2>

            <!-- If user added body text -->
            <?php if (!empty($features_section_body)) : ?>
                <p class="lead"><?= $features_section_body; ?></p>
            <?php endif; ?>
        </div>

        <div class="row">

            <?php 
            
            $loop = new WP_Query( array( 'post_type' => 'course_feature',
            'orderby' => 'post_id', 'order' => 'ASC' ) ); 
            
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>

            <div class="col-sm-2">
                <i class="<?php the_field('course_feature_icon')?>"></i>
                <h4><?php the_title(); ?></h4>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<!-- PROJECTS FEATURES -->
<section id="project-features">
    <div class="container">
        <h2>Final Project Features</h2>
        <p class="lead">Throughout this entire course, you work towards building an incredibly beautiful website.
            Want to see the website you are going to build? You're looking at it! The website you're using right now
            is the website you will have built entirely by yourself, by the end of this course.</p>

        <div class="row">
            <div class="col-sm-4">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-design.png" alt="Design">
                <h3>Sexy &amp; Modern Design</h3>
                <p>You get to work with a modern, professional quality design &amp; layout.</p>
            </div>
            <div class="col-sm-4">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-code.png" alt="Code">
                <h3>Quality HTML5 &amp; CSS3</h3>
                <p>You&rsquo;ll learn how hand-craft a stunning website with valid, semantic and beautiful HTML5
                    &amp; CSS3.</p>
            </div>
            <div class="col-sm-4">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-cms.png" alt="CMS">
                <h3>Easy-to-use CMS</h3>
                <p>Allow your clients to easily update their websites by converting your static websites to dynamic
                    websites, using WordPress.</p>
            </div>
        </div>
    </div>
</section>

<!-- VIDEO FEATURES -->
<section id="featurette">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2>Watch the Course Introduction</h2>
                <iframe width="100%" height="415"
                    src="https://www.youtube.com/embed/dGYosuuxsG8?si=gSD7GmZrT2SblnxB" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<!-- INSTRUCTOR FEATURES -->
<section id="instructor">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h2>Your Student <small>Erika Carriedo</small></h2>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://x.com/ecarri" class="badge social x" target="_blank"><i
                                class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://facebook.com/ecarri" class="badge social facebook" target="_blank"><i
                                class="fa-brands fa-facebook"></i></a>
                        <a href="https://instagram.com/ecarri" class="badge social instagram" target="_blank"><i
                                class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <p class="lead">A highly skilled professional, Erika Carriedo is a passionate and experienced web
                    designer, developer, blogger and digital entrepreneur.</p>
                <p>Hailing from North Of The Wall (Yellowknife, Canada), Erika made the trek to the Wet Coast
                    (Vancouver, Canada) to educate and equip herself with the necessary skills to become a spearhead
                    in her trade of solving problems on the web, crafting design solutions, and speaking in code.
                </p>
                <p>Erika's determination and love for what she does has landed her in some pretty interesting places
                    with some neat people. She's had the privilege of working with, and providing solutions for,
                    numerous businesses, big & small, across the Americas. </p>
                <p>Erika builds custom websites, and provides design solutions for a wide-array of clientele at his
                    company, Brightside Studios. She regularly blogs about passive income, living your life to the
                    fullest, and provides premium quality web design tutorials and courses for tens of thousands of
                    amazing people desiring to master their craft.</p>

                <hr>

                <h3>The Number <small>They Don't Lie</small></h3>

                <div class="row">
                    <div class="col-4">
                        <div class="num">
                            <div class="num-content">
                                41,000+ <span>students</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="num">
                            <div class="num-content">
                                568 <span>reviews</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="num">
                            <div class="num-content">
                                8 <span>courses</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section id="kudos">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2>What People Are Saying About Erika</h2>

                <!-- TESTIMONIAL -->
                <div class="row testimonial">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
                    </div>
                    <div class="col-sm-8">
                        <blockquote>
                            These videos are well created, concise, fast-paced, easy to follow, and just funny
                            enough to keep you chuckling as you're slamming out lines of code. I've taken 3 courses
                            from this instructor. Whenever I have questions he is right there with a simple solution
                            or a helpful suggestion to keep me going forward with the course work.
                            <cite>&mdash; Brennan, graduate of all of Brad's courses</cite>
                        </blockquote>
                    </div>
                </div>

                <!-- TESTIMONIAL -->
                <div class="row testimonial">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Illustration of a man with a moustache">
                    </div><!-- end col -->
                    <div class="col-sm-8">
                        <blockquote>
                            I found Brad to be a great teacher, and a very inspiring person. It's clear he is very
                            passionate about helping designers learn to code, and I look forward to more courses
                            from him!
                            <cite>&mdash; Ben, graduate of Build a Website from Scratch with HTML &amp; CSS</cite>
                        </blockquote>
                    </div><!-- end col -->
                </div><!-- row -->

                <!-- TESTIMONIAL -->
                <div class="row testimonial">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="Illustration of a man with a beard">
                    </div><!-- end col -->
                    <div class="col-sm-8">
                        <blockquote>
                            Brad is amazing and I honestly think he's the best tutor of all the courses I have taken
                            on Udemy. Will definitely be following him in the future. Thanks Brad!
                            <cite>&mdash; AJ, graduate of Code a Responsive Website with Bootstrap 3</cite>
                        </blockquote>
                    </div><!-- end col -->
                </div><!-- row -->

                <!-- TESTIMONIAL -->
                <div class="row testimonial">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Illustration of a man with a goatee">
                    </div><!-- end col -->
                    <div class="col-sm-8">
                        <blockquote>
                            Brad is an excellent instructor. His content is super high quality, and you can see the
                            love and care put into every section. The tutorials are the perfect length, and you feel
                            like your doing something right out the gate! I really can't believe this is free. I
                            highly recommend taking advantage of this course.
                            <cite>&mdash; Ernest, graduate of Code Dynamic Websites with PHP</cite>
                        </blockquote>
                    </div><!-- end col -->
                </div><!-- row -->
            </div>
        </div>
    </div>

</section>
<?php
get_footer();
