<?php 

// Advanced Custom Fields
$income_feature_img = get_field('income_feature_image');
$income_section_title = get_field('income_section_title');
$income_section_desc = get_field('income_section_description');
$reason_1_title = get_field('reason_1_title');
$reason_1_desc = get_field('reason_1_description');
$reason_2_title = get_field('reason_2_title');
$reason_2_desc = get_field('reason_2_description');

?>

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