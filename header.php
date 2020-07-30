<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Store
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="description" content="">
    <meta name="author" content="">
    <title>Shop Theme | By Andrew Hosegood</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.carousel.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/ico/favicon.ico">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<!-- Header -->
<header id="header">

    <div class="container-fluid top-menu-container">
        <div class="social-icons">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-youtube-play" aria-hidden="true"></i>
        </div>
        <div class="menu-right">
            <a href="#">Shopping Cart</a><a href="#">My Account <i class="fa fa-angle-down" aria-hidden="true"></i></a><a href="#"> <span class="menu-text">CART</span> </a>
        </div>
    </div>    
</header>
<!-- End Header -->

<!-- Main Nav -->
<header id="nav">
    <nav class="navbar navbar-expand-md navbar-light bg-white main-menu-container">
        <a class="navbar-brand" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <a class="nav-link" href="#">Home </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Elements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><span class="shop-now">SHOP NOW!</span></a>
            </li>
        </ul>

        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </nav>
  </header>
<!-- End Main Nav -->


<?php

// the_custom_logo();

// 	wp_nav_menu(
// 		array(
// 			'theme_location' => 'menu-1',
// 			'menu_id'        => 'primary-menu',
// 		)
// 	);
?>
