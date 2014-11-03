<?php  
    if( !isset( $body_class ) )
        $body_class = '';
?><!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lte-ie9"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Keuze.nl - Frontend</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">

        <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.ico">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <!--[if lt IE 9]>
        <script type="text/javascript" src="/assets/js/vendor/selectivizr-min.js"></script>
        <![endif]--> 
    </head>
<body class="<?php echo $body_class; ?>">

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

                <div class="contact">
                    <a href="tel:01234567890" class="tel">06 - 12345678</a>
                    <span class="message">(we zijn bereikbaar)</span>
                </div>
            </div>
        </section>
    </div>
    <div class="header-nav">
        <section class="outer-wrapper">
            <div class="logo">
                <a href="#"><img src="/assets/images/logo.png" alt="Keuze.nl logo"></a>
            </div>

            <nav class="nav-main">
                <ul class="sf-menu">
                    <li class="home"><a href="#">Home</a></li>
                    <li class="mobile"><a href="javascript:;" class="menu-btn">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </a></li>
                    <li class="hide-for-mobile">
                        <a href="#">Verzekeringen</a>
                        <ul class="sub-menu">
                            <li><a href="#">Zorgverzekering</a></li>
                            <li><a href="#">Autoverzekering</a></li>
                            <li><a href="#">Reisverzekering</a></li>
                            <li><a href="#">Inboedelverzekering</a></li>
                            <li><a href="#">Rechtsbijstandsverzekering</a></li>
                            <li><a href="#">Uitvaartverzekering</a></li>
                        </ul>
                    </li>
                    <li class="hide-for-mobile current-menu-item"><a href="#">Mobiel</a></li>
                    <li class="hide-for-mobile"><a href="#">Internet</a></li>
                    <li class="hide-for-mobile"><a href="#">Energie</a></li>
                    <li class="search"><a href="/zoeken" class="search-btn">Zoeken</a></li>
                </ul>
            </nav>

            <div class="trust">
                <a href="#"><img src="/assets/images/logo-thuiswinkel.png" alt="Thuiswinkel waarborg"></a>
                <a href="#"><img src="/assets/images/logo-truste.png" alt="TRUSTe certified privacy"></a>
            </div>
        </section>
    </div>
</header><!-- /header -->

<div class="mobile-nav-holder"></div>

<section class="content-holder">