<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
 	
<div class="intro-image">
	<section class="intro">
		<div class="introcontent">
			<h1>Charlie Thomason is a Web Developer, Designer, and Artist from Chicago</h1>
			<p>He is currently an Associate Presentation Layer Developer for <a href="http://www.razorfish.com" target="_blank">Razorfish</a> and specializes in CSS3, jQuery, responsive design, and WordPress.</p>
			<p>Charlie published his first photography book, <a href="http://www.blurb.com/b/2868673-open-range" target="_blank"><em>Open Range: From Monument Valley to the Mojave Desert</em></a> in January 2012, and has had paintings, drawings, and photographs featured in numerous exhibitions.</p>
			<div>
				<a class="btn blue-btn" href="/about">Learn More</a>
				<a id="intro-contact-btn" class="btn lt-grey-btn" href="javascript:void(0)">Contact</a>
			</div>
			<div id="intro-contact">
				<ul>
					<li id="contact-form"><a href="/contact" class="contact-btn">Contact Form</a></li>
					<li id="contact-twitter"><a href="http://twitter.com/charliethomason" class="contact-btn" target="_blank">Twitter</a></li>
					<li id="contact-linkedin"><a href="http://www.linkedin.com/in/charlesthomason/" class="contact-btn" target="_blank">LinkedIn</a></li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</section>
</div>

<section id="home-art" class="home-section">
	<h2 class="home-head"><a href="/art"> Gallery </a></h2>
	<ul id="art-cells">
		<?php 
			$loop = new WP_Query(array('post_type' => 'gallery', 'posts_per_page' => 10)); 
			$count = 0;
		?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php	
			$custom = get_post_custom($post->ID);
			$medium = $custom["medium"][0];
			$print = $custom["print"][0];
			$count++;
		?>
		<li class="art-cell-wrap" id="art-cell-<?=$count;?>">
			<a class="art-cell" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
			<div class="art-meta">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php if($medium != "") { ?>
					<p class="catdate"><strong>Medium:</strong> <?=$medium?></p>
				<?php } ?>
				<p><a class="btn blue-btn" href="<?php the_permalink(); ?>">More Info</a></p>
			</div>
		</li>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	</ul>
</section>

<section id="home-blog" class="home-section">
	<h2 class="home-head"><a href="/blog"> Blog </a></h2>
	<div class="blog blog-home">
		<div class="blog-nav-wrap">
			 <?php get_search_form(); ?> 
			<nav class="blog-nav">
				<span id="blog-cat-menu">
					<a href="javascript:void(0)" class="btn green-btn">Categories</a>
					<ul class="blog-menu">
						<?php wp_list_categories('orderby=name&title_li='); ?>
					</ul>
				</span>
			</nav>
			<div class="clear"></div>
		</div>

		<div class="blog-posts">
			<?php 
				query_posts( 'posts_per_page=10'); 
				$count = 1;
			?>
	        <?php while(have_posts()) : the_post(); ?>
			<article id="home-blog-<?=$count++;?>" class="post">
		        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<p class="catdate"><strong><?php the_time('D, M j, Y'); ?></strong> &#8226; <?php the_category(', '); ?></p>
				<?php
					global $more;
					$more = 0;
				?>
				<div class="entry">
					<?php the_content('Continue Reading'); ?>
				</div>
			</article>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
</section>
   
<?php get_footer(); ?>