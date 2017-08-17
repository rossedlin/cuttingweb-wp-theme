<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CuttingWeb
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Bootstrap Start -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/wp-content/themes/cuttingweb-underscore/bootstrap-3.3.7/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="/wp-content/themes/cuttingweb-underscore/bootstrap-3.3.7/css/bootstrap-theme.css">
	<!-- Bootstrap End -->

	<!-- Fonts Start -->
	<link rel="stylesheet" href="/wp-content/themes/cuttingweb-underscore/font-awesome-4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<!-- Fonts End -->

	<?php wp_head(); ?>

	<style>
		html,
		body
		{
			width:       100%;
			height:      100%;

			/*font:   normal 400 13px/1 'ralewayregular', Arial, sans-serif;*/
			font-family: 'Raleway', sans-serif;
		}

		body
		{
			overflow-y: scroll;
		}

		.row
		{
			margin-right: 0;
			margin-left:  0;
		}

		.header-background
		{
			width:           100%;
			height:          500px;

			background:      url(/wp-content/themes/cuttingweb-underscore/img/young-employee-working-2000.jpg) top center no-repeat;
			background-size: cover;

			position:        absolute;
			z-index:         -1;
		}

		header
		{
			width:  100%;
			height: 500px;
		}

		<?php if (is_front_page()) { ?>
		.navbar
		{
			/*padding:20px;*/
			/*width:710px;*/
			height:     60px;
			/*position:relative;*/
			/*background: rgb(204, 204, 204); !* Fallback for older browsers without RGBA-support *!*/
			background: rgba(0, 0, 0, 0.7);

			/*text-shadow: 2px 2px;*/

			/*-webkit-box-shadow: 0px 2px 10px 2px rgba(0,0,0,0.75);*/
			/*-moz-box-shadow: 0px 2px 10px 2px rgba(0,0,0,0.75);*/
			box-shadow: 0px 2px 10px 2px rgba(25, 25, 25, 0.75);
		}

		<?php } else { ?>
		.navbar
		{
			height:     60px;
			background: rgba(0, 0, 0, 0.7);
		}

		.site
		{
			box-shadow: 2px 0 2px 0 rgba(25, 25, 25, 0.75), -2px 0 2px 0 rgba(25, 25, 25, 0.75);
		}

		<?php } ?>

		.navbar-brand
		{
			float:       left;
			height:      60px;
			padding:     20px 20px;
			font-size:   26px;
			line-height: 20px;
		}

		.navbar-right
		{
			margin-right: 0;
		}

		.navbar-nav > li > a
		{
			padding-top:    20px;
			padding-bottom: 20px;
		}

		.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .active > a:hover
		{
			color:            #555;
			background-color: #f7b733;
		}

		.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .active > a
		{
			background-image: none;
		}

		.navbar-default
		{
			/*background-color: #f8f8f8;*/
			/*border-color: ;*/
			border-style: none;
		}

		.navbar-default .navbar-brand
		{
			color: #f5f5f5;
		}

		.navbar-default .navbar-brand:hover
		{
			color:            #0375b4;
			background-color: transparent;
		}

		.navbar-default .navbar-nav > li > a
		{
			color: #f5f5f5;
		}

		.navbar-default .navbar-nav > li > a:hover
		{
			color:            #0375b4;
			background-color: transparent;
		}

		@media (max-width: 767px)
		{
			.navbar-default .navbar-nav > li > a
			{
				background: rgba(0, 0, 0, 0.7);
			}
		}

		.heading-text
		{
			padding-top: 30px;

			color:       #ffffff;
			font-size:   38px;
			font-weight: bold;
			text-shadow: 0 0 3px #000000, 0 0 5px #000000;
		}

		.site
		{
			padding: 0;
		}

		header .btn
		{
			box-shadow: 0 1px 4px 1px rgba(25, 25, 25, 0.75);
		}

		header a:visited
		{
			color: #ffffff;
		}

		.site-content
		{
			background-color: #ffffff;
		}

		<?php if (!is_front_page()) { ?>
		.site-content
		{
			margin-top: -440px;
		}

		<?php } else { ?>
		.site-content
		{
			margin-top: -40px;
			box-shadow: 0 2px 10px 2px rgba(25, 25, 25, 0.75);
		}

		<?php }?>

		footer
		{
			margin: 10px 0 20px 0;
		}
	</style>
</head>

<body <?php body_class(); ?>>

<!-- Header Background -->
<div id="header-background" class="header-background"></div>

<!-- Main Site Container -->
<div id="site" class="site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'cuttingweb'); ?></a>

	<header id="masthead" class="header">

		<nav class="navbar navbar-default navbar-static-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#navbar"
						aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/" style=""><?php bloginfo('name'); ?></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<?php wp_nav_menu([
					'container'  => false,
					'menu_class' => 'nav navbar-nav navbar-right',
				]) ?>
			</div><!--/.nav-collapse -->
		</nav>

		<?php if (is_front_page())
		{ ?>
			<div class="heading-text">
				<div class="row">
					<div class="col-xs-12 col-sm-6 text-center" style="padding-bottom: 30px;">
						Web Developer<br>
						IT Consultant<br>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-6 text-center">
						<a href="/portfolio" class="btn btn-primary" style="padding: 8px 16px;">See my portfolio</a>
						<a href="/contact" class="btn btn-success" style="padding: 8px 16px;">Connect with me</a>
					</div>
				</div>
			</div>

		<?php } ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
