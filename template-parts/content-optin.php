<?php 
$optin_text = get_post_meta(7, 'optin_text', true); // post id in URL 
$optin_button_text = get_post_meta(7, 'optin_button_text', true); // post id in URL 
?>

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