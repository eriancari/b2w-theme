<?php
$instructor_section_title = get_field('instructor_section_title');
$instructor_name = get_field('instructor_name');
$bio_excerpt = get_field('bio_excerpt');
$full_bio = get_field('full_bio');
$x_username = get_field('x_username');
$facebook_username = get_field('facebook_username');
$instagram_username = get_field('instagram_username');
$num_students = get_field('num_students');
$num_reviews = get_field('num_reviews');
$num_courses = get_field('num_courses');
?>

<!-- INSTRUCTOR FEATURES -->
<section id="instructor">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h2><?= $instructor_section_title; ?> <small><?= $instructor_name?></small></h2>
                    </div>
                    <div class="col-lg-4">
                        <?php if (!empty($x_username)) : ?>
                        <a href="https://x.com/<?= $x_username; ?>" class="badge social x" target="_blank"><i
                                class="fa-brands fa-x-twitter"></i></a>
                        <?php endif; ?>

                        <?php if (!empty($facebook_username)) : ?>
                        <a href="https://facebook.com/<?= $facebook_username; ?>" class="badge social facebook" target="_blank"><i
                                class="fa-brands fa-facebook"></i></a>
                        <?php endif; ?>

                        <?php if (!empty($instagram_username)) : ?>
                        <a href="https://instagram.com/<?= $instagram_username; ?>" class="badge social instagram" target="_blank"><i
                                class="fa-brands fa-instagram"></i></a>
                        <?php endif; ?>
                    </div>
                </div>

                <p class="lead"><?= $bio_excerpt; ?></p>
                <?= $full_bio; ?>

                <hr>

                <h3>The Number <small>They Don't Lie</small></h3>

                <div class="row">
                    <div class="col-4">
                        <div class="num">
                            <div class="num-content">
                                <?= $num_students; ?> <span>students</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="num">
                            <div class="num-content">
                                <?= $num_reviews; ?> <span>reviews</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="num">
                            <div class="num-content">
                                <?= $num_courses; ?> <span>courses</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>