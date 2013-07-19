<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php bloginfo('name'); ?> <?php wp_title ('|'); ?></title>
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon01.ico">
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Lato:300,300italic,400,400italic,700,700italic|Lora:400,400italic,700,700italic|Fjalla+One|Special+Elite'>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
<![endif]-->
</head>
<body>
 
<header id="header">
	
	<h1>
		<a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>">
			<img src="<?php bloginfo('template_directory'); ?>/images/bw-logo04.png" alt="Bleachwave logo" />
			<span><?php bloginfo('name'); ?></span>
		</a>
	</h1>
	<h2><?php bloginfo('description'); ?></h2>
	
	<nav id="nav">
		<div id="primary-nav">
			<ul class="main-nav">
				<li id="nav-logo">
					<a href="<?php echo get_option('home'); ?>">
						<img src="<?php bloginfo('template_directory'); ?>/images/bw-icon02b.png" alt="Bleachwave logo icon" />
					</a>
				</li>
				<li<?php
					if (is_page(array('About Charlie Thomason', 'Resume', 'Contact')))
					{
					echo " class=\"active\"";
					}
					?> id="charlie"><a href="/about">About</a>
					<ul>
						<li><a href="/about">About</a></li>
						<li><a href="/resume">Resume</a></li>
						<li><a href="/art">Contact</a></li>
					</ul></li>
				<li<?php
					if (is_home() || is_singular('post') || is_category() || is_tag())
					{
					echo " class=\"active\"";
					}
					?>><a href="/blog">Blog</a></li>
				<?php
				/*<li<?php
					if (is_page_template('webdev.php') || is_singular('webdev'))
					{
					echo " class=\"active\"";
					}
					?>><a href="/web">Web<span> Design</span></a></li>
				*/ ?>
				<li<?php
					if (is_page_template('gallery.php') || is_singular('gallery'))
					{
					echo " class=\"active\"";
					}
					?>><a href="/gallerys">Gallery</span></a></li>
				<li id="nav-store"><a href="http://society6.com/cthomason" rel="nofollow" title="links to Society6.com" target="_blank">Store</a></li>
			</ul>
			<ul class="nav-social">
				<li class="nav-twitter"><a href="http://twitter.com/charliethomason" rel="nofollow" target="_blank" title="Twitter">Twitter</a></li>
				<li class="nav-flickr"><a href="http://flickr.com/recycledfilm" rel="nofollow" target="_blank" title="Flickr">Flickr</a></li>
				<?php /*<li class="nav-vimeo"><a href="http://vimeo.com/charliethomason" rel="nofollow" target="_blank" title="Vimeo">Vimeo</a></li>*/ ?>
				<li class="nav-instagram"><a href="http://instagram.com/charliethomason" rel="nofollow" target="_blank" title="Instagram">Instagram</a></li>
				<li class="nav-vsco"><a href="http://bleachwave.vsco.co" rel="nofollow" target="_blank" title="VSCO Grid">VSCO Grid</a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</nav>
	
</header>

<div id="container">