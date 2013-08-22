<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>
<div class="blog blog-gallery">

	<h1 class="index-head">Art &amp; Photo Gallery</h1>

	<div class="nav-wrap">
		 <?php get_search_form(); ?> 
		<nav class="search-nav">
			<span id="search-nav-menu">
				<a href="javascript:void(0)" class="btn green-btn">Categories</a>
				<ul class="blog-menu">
					<?php wp_list_categories('orderby=name&title_li='); ?>
				</ul>
			</span>
		</nav>
		<div class="clear"></div>
	</div>

	<div id="art-item-wrap">

		<?php 
		  $temp = $wp_query; 
		  $wp_query = null; 
		  $wp_query = new WP_Query(); 
		  $wp_query->query('showposts=10&post_type=gallery'.'&paged='.$paged); 

		  while ($wp_query->have_posts()) : $wp_query->the_post(); 
		?>
		<?php	
			$custom = get_post_custom($post->ID);
			$medium = $custom["medium"][0];
			$print = $custom["print"][0];
		?>

		<div id="gallery-item-<?php the_ID(); ?>" class="art-item">
			<a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?> </a>
			<div class="info">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php if($medium != "") { ?>
					<p class="catdate"><strong>Medium:</strong> <?=$medium?></p>
				<?php } ?>
				<p><a class="btn" href="<?php the_permalink(); ?>">More Info</a></p>

			</div>
			<div class="clear"></div>
		</div>
		<?php endwhile; ?> 
		<div class="navigation">
		    <div class="prev-post"><?php previous_posts_link('&laquo; Newer') ?></div>
		    <div class="next-post"><?php next_posts_link('Older &raquo;') ?></div>
		</div>
		<?php 
		  $wp_query = null; 
		  $wp_query = $temp;  // Reset
		?>

	</div>
	
	<div class="clear"></div> 
</div><!--.blog.blog-gallery-->
<?php get_footer(); ?>