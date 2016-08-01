<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Financial_Insite
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel='stylesheet' href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap/css/bootstrap.min.css">
<link rel='stylesheet' href="<?php bloginfo('stylesheet_directory'); ?>/assets/font-awesome/font-awesome.min.css"/>
<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fininsite' ); ?></a>



 <nav class="navbar navbar-transparent navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="pull-left"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/_Icons/FinancialInsite-01.png" class="img-responsive logo"></a>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-links" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="navbar-links">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.fininsite.com/index.php#about">ABOUT US</a></li>
                <li><a href="https://www.fininsite.com/index.php#what_we_do">WHAT WE DO</a></li>
                <li><a href="https://www.fininsite.com/index.php#faq">FAQ</a></li>
                <li><a href="https://www.fininsite.com/index.php#started">GET STARTED</a></li>
                <li><a href="https://www.fininsite.com/index.php#blog">BLOG</a></li>
                <li><a href="#" id="linkedin-link">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                        <i class="fa fa-linkedin fa-stack-1x"></i>
                    </span>
                </a></li>
            </ul>
            </div><!-- /.navbar-collapse -->


        </div><!-- /.container-fluid -->
        </nav>