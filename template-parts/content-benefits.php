<?php 

$who_feature_img = get_field('who_feature_image');
$who_section_title = get_field('who_section_title');
$who_section_body = get_field('who_section_body');

?>

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