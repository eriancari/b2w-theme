<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?= bloginfo('stylesheet_directory')?>/assets/css/bootstrap.min.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <!-- <link href='assets/css/font-awesome/css/fontawesome.min.css' rel='stylesheet' type='text/css'> -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Typekit font: Different font was used instead of proxima nova -- Source Sans Pro -->
    <link rel="stylesheet" href="https://use.typekit.net/mgc5qmz.css">

	<?php wp_head(); ?>

	<!-- html5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

	<!-- HEADER -->
    <header class="site-header" role="banner">
        <!-- NAVBAR (Boostrap v5.3)-->
        <div class="navbar-wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container-fluid">
                    
					<a class="navbar-brand" href="#"><img src="<?= bloginfo('stylesheet_directory')?>/assets/img/logo.png" alt="Bootstrap to Wordpress"></a>
                    
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

					<!-- Collapse section -->
					<?php 
						wp_nav_menu( array(
							'theme_location'	=> 'primary',
							'container'			=> 'nav',
							'container_class'	=> 'navbar-collapse',
							'menu_class'		=> 'navbar-nav ms-auto'
						))
					?>
                    <!-- <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="resources.html">Resources</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                    </div> -->
                </div>
            </nav>
        </div>
    </header>
