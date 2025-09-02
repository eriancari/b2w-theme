<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>

<?php wp_footer(); ?>

<!-- SIGN UP -->
<section id="signup" data-type="background" data-speed="4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
                <p><a href="" class="btn btn-lg d-block w-100 btn-success">Yes, sign me up!</a></p>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row align-items-center">
            <!-- logo -->
            <div class="col-md-3">
                <p><a href="/"><img src="assets/img/logo.png" class="img-fluid" alt="Bootstrap to WordPress"></a></p>
            </div>
            <!-- Menu -->
            <div class="col-md-6 text-center">
                <ul class="list-unstyled list-inline mb-0">
                    <li class="list-inline-item"><a href="">Home</a></li>
                    <li class="list-inline-item"><a href="">Blog</a></li>
                    <li class="list-inline-item"><a href="">Resources</a></li>
                    <li class="list-inline-item"><a href="">Contact</a></li>
                    <li class="list-inline-item signup-link"><a href="">Sign up now</a></li>
                </ul>
                </nav>
            </div>
            <div class="col-md-3">
                <p class="pull-right">&copy;2025 Erika Carriedo</p>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                    <i class="fa-solid fa-envelope"></i>
                    Subscribe to our Mailing List
                </h4>
                <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button> -->
            </div>

            <div class="modal-body">
                <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of
                    our best-selling courses, <em>for free!</em></p>

                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-name">Your first name</label>
                        <input type="text" class="form-control" id="subscribe-name">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-email">and your email</label>
                        <input type="text" class="form-control" id="subscribe-email">
                    </div>
                    <br />
                    <button type="submit" class="btn btn-danger">Subscribe!</button>
                </form>

                <hr>

                <p><small>By providing your email you consent to receiving occasional promotional emails &amp;
                        newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe
                        at any time.</small></p>

            </div>
        </div>
    </div>

</div>

<!-- Bootstrap Core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.7.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

<!-- Typekit Fonts -->
<!-- <script src="https://use.typekit.net/xqk1qzp.js"></script>
    <script>
        try {
            Typekit.load({ async: true });
        } catch (e) {
            console.log(e);
        }
    </script> -->
</body>

</html>