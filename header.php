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

    <!-- Font Awesome Start -->
    <link rel="stylesheet" href="/wp-content/themes/cuttingweb-underscore/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome End -->

    <!-- Railway Font Start -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Railway Font End -->

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

        header
        {
            width:           100%;
            height:          100%;
            background:      url(/wp-content/themes/cuttingweb-underscore/img/nabs.jpg) center center no-repeat;
            background-size: cover;
        }

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

        .navbar-default .navbar-nav > li > a:hover
        {
            color:            #fc1a4a;
            background-color: transparent;
        }
        
        footer
        {
            margin: 10px 0 20px 0;
        }
    </style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'cuttingweb'); ?></a>

    <header id="masthead" class="" style="<?= (is_front_page() ? 'height: 500px; ' : '') ?>">

        <div class="container">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container1">
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
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="/portfolio">Portfolio</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content container">
