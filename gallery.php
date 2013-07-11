<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>
<div class="portfolio-index" id="art-index">
	<h1 class="index-head">Art &amp; Photo Gallery</h1>
	<div class="portfolio-details">
		<a class="btn green-btn alignleft" href="http://www.society6.com/cthomason" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-society603.png" alt="Society6 logo" /> Society6 prints</a> 
		<a class="btn lt-grey-btn alignleft" href="http://www.flickr.com/photos/recycledfilm/" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-flickr04.png" alt="Flickr" /> Flickr photos</a> 
		<a class="btn lt-grey-btn alignleft" href="http://instagram.com/charliethomason" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-instagram02.png" alt="Instagram" /> Instagram photos</a>
		<a class="btn lt-grey-btn alignleft" href="http://bleachwave.vsco.co" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-vsco01.png" alt="VSCO" /> VSCOcam Grid</a>
		<div class="clear"></div>
	</div>
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

	<div id="art-item-<?php the_ID(); ?>" class="portfolio-index-item art-item">
	<a class="portfolio-index-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?> </a>
	<div class="portfolio-index-meta">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php if($medium != "") { ?>
			<p class="catdate"><strong>Medium:</strong> <?=$medium?></p>
		<?php } ?>
		<p class="portfolio-excerpt"><?php echo(get_the_excerpt()); ?></p>
		<p><a class="btn blue-btn" href="<?php the_permalink(); ?>">More Info</a> <?php if ($print != "") { ?><a class="btn green-btn" href="<?=$print?>" target="_blank" rel="nofollow">Buy Prints</a><?php } ?></p>
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
	
	<div class="clear"></div> 
</div><!--.portfolio-index-->
<?php get_footer(); ?>