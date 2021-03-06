<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php bloginfo('name'); ?> <?php wp_title ('|'); ?></title>
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon01.ico">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,300italic,400,400italic,700,700italic|Lora:400,400italic,700,700italic|Fjalla+One|Special+Elite">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie.css">
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
<![endif]-->
</head>
<body>
 
<header id="header">
	
	<h1>
		<a id="logo" class="hidetext" href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
		<a id="mobile-logo" class="hidetext" href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>">
			<img src="<?php bloginfo('template_directory'); ?>/images/bw-logo05_600.png" alt="Bleachwave logo">
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
					?> id="charlie"><a href="/about">About</a></li>
				<li<?php
					if (is_page_template('gallery.php') || is_singular('gallery'))
					{
					echo " class=\"active\"";
					}
					?>><a href="/art">Gallery</a>
					<ul class="main-sub-nav">
						<li class="cat-item"><a href="/art">All Posts</a></li>
						<?php wp_list_categories('orderby=name&title_li='); ?>
					</ul></li>
				<?php /*
				<li<?php
					if (is_home() || is_singular('post') || is_category() || is_tag())
					{
					echo " class=\"active\"";
					}
					?>><a href="/news">News</a></li>
				*/ ?>
				<li id="nav-store"><a href="http://society6.com/cthomason" rel="nofollow" target="_blank">Store</a></li>
			</ul>
			<ul class="nav-social">
				<li class="mobile-nav-btn"><a href="/about" class="contact-btn">About</a></li>
				<li class="mobile-nav-btn"><a href="/art" class="contact-btn">Gallery</a></li>
				<li class="mobile-nav-btn"><a href="http://society6.com/cthomason" class="contact-btn" rel="nofollow" target="_blank">Store</a></li>
				<li class="nav-twitter"><a href="http://twitter.com/charliethomason" class="contact-btn" rel="nofollow" target="_blank"><span>Twitter</span></a></li>
				<li class="nav-medium"><a href="http://medium.com/@CharlieThomason" class="contact-btn" rel="nofollow" target="_blank"><span>Medium</span></a></li>
				<li class="nav-flickr"><a href="http://flickr.com/recycledfilm" class="contact-btn" rel="nofollow" target="_blank"><span>Flickr</span></a></li>
				<li class="nav-vsco"><a href="http://bleachwave.vsco.co" rel="nofollow" class="contact-btn" target="_blank"><span>VSCO Grid</span></a></li>
				<li class="nav-instagram"><a href="http://instagram.com/charliethomason" class="contact-btn" rel="nofollow" target="_blank"><span>Instagram</span></a></li>
			</ul>
			<a href="#" id="hamburger">Menu</a>
			<div class="clear"></div>
		</div>
	</nav>
	
</header>

<div id="container">