<?php

/*
 * Header file that is included on all pages (for our simple base kit)
 * 
 * @author Gareth Fuller
 * 
 */

$currentPage = str_replace('.php', '', end(explode('/', $_SERVER['SCRIPT_FILENAME'])));

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>

    	<title>Standard style prototypes</title>
            
        <!--[if lt IE 9]>
            <script src="assets/js/vendor/htmlshiv.min.js"></script>
        <![endif]-->

        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<meta name="description" content="" />
    	<meta name="author" content="" />
        <meta name="keywords" content="" />
	
        <!-- Humans file -->
        <link rel="author" type="text/plain" href="/humans.txt" />

        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/favicons/16.ico" />
    	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/favicons/57.png" />
    	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/favicons/72.png" />
    	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/favicons/114.png" />
    	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/favicons/144.png" />
        
    	<!-- CSS -->
        <link rel="stylesheet" href="assets/css/combined.css" media="screen" type="text/css" />
    	<link rel="stylesheet" href="assets/css/print.css" media="print" type="text/css"/>
        
        <!--[if lte IE 7]>
            <link rel="stylesheet" href="assets/css/grid-fixed.css" media="screen" type="text/css"/>
        <![endif]-->

        <!--[if lt IE 9]>
            <link rel="stylesheet" href="assets/css/ie.css" media="screen" type="text/css"/>
        <![endif]-->
              
        <!-- Google font -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        
    </head>
    <body>

        <!-- used for sticky footer -->
        <div id="site-wrapper">

            <header id="header" class="col grid-12 end" role="banner">
                <div class="center-content">
                    <a href="#" class="mobile-nav" title="Main navigation"><span class="icon">&#9776;</span></a>
                </div>
            </header>
            
            <nav id="main-nav" role="navigation" class="col grid-12 end">
                <div class="center-content">
                    <h1>SITE TITLE</h1>
                    <ul>
                        <li><a href="index.php" title="Home" <?php echo ($currentPage == 'index') ? "class='active'" : ''; ?>>Home</a></li>
                        <li><a href="article.php" title="Article" <?php echo ($currentPage == 'article') ? "class='active'" : ''; ?>>Article</a></li>
                        <li><a href="gallery.php" title="Gallery" <?php echo ($currentPage == 'gallery') ? "class='active'" : ''; ?>>Gallery</a></li>
                        <li><a href="news.php" title="News" <?php echo ($currentPage == 'news') ? "class='active'" : ''; ?>>News</a></li>
                        <li><a href="accordion.php" title="Accordion" <?php echo ($currentPage == 'accordion') ? "class='active'" : ''; ?>>Accordion</a></li>
                        <li><a href="contact.php" title="Contact" <?php echo ($currentPage == 'contact') ? "class='active'" : ''; ?>>Contact</a></li>
                    </ul>
                </div>
            </nav>
            
            
            <div id="content-wrapper">
                <div class="center-content main-content">



                