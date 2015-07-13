<?php
/**
 * @package WordPress
 * @subpackage Keuze
 */
?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
	<title><?php wp_title(''); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="icon" type="image/x-icon" href="<?php echo keuze_theme_url( 'assets/images/favicon.ico' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo keuze_theme_url( 'assets/css/style.css' ); ?>" media="all" />

	<link href='//fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo keuze_theme_url( 'assets/js/vendor/selectivizr-min.js' ); ?>"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="header">
    <div class="header-top">
        <section class="outer-wrapper">
            <div class="left">
                <p>Vergelijk producten en diensten onder één dak</p>
            </div>
            <div class="right">
                <form action="" method="get" class="searchform">
                    <fieldset>
                        <input type="text" name="s" class="searchtext" placeholder="Waar ben je naar op zoek?">
                        <input type="submit" class="searchsubmit" value=" ">
                    </fieldset>
                </form>
            </div>
        </section>
    </div>
    <div class="header-nav">
        <section class="outer-wrapper">
            <nav class="nav-main">
                <div class="logo">
                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo keuze_theme_url( '/assets/images/logo.png' );?>" alt="Keuze.nl logo"></a>
                </div>
                
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'main_nav',
                        'menu' => 'main_nav', 
                        'container' => false, 
                        'menu_class' => 'sf-menu'
                    ));
                ?>
            </nav>

            <div class="trust">
                <a href="https://www.thuiswinkel.org/consumenten/" target="_blank"><img src="<?php echo keuze_theme_url( '/assets/images/logo-mcafeetest.png' );?>" alt="McAfee Test"></a>
                <?php /*
                <a href="https://www.thuiswinkel.org/consumenten/" target="_blank"><img src="<?php echo keuze_theme_url( '/assets/images/logo-thuiswinkel.png' );?>" alt="Thuiswinkel waarborg"></a>
                <a href="http://www.truste.com/" target="_blank"><img src="<?php echo keuze_theme_url( '/assets/images/logo-truste.png' );?>" alt="TRUSTe certified privacy"></a>
                */ ?>
            </div>
        </section>
    </div>
</header><!-- /header -->

<div class="mobile-nav-holder"></div>

<div class="content-holder">