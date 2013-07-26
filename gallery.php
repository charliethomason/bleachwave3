<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>
<div class="blog blog-gallery">

	<h1 class="index-head">Art &amp; Photo Gallery</h1>

	<div class="blog-nav-wrap">
		 <?php get_search_form(); ?> 
		<nav class="blog-nav">
			<a href="javascript:void(0)" id="tag-list-btn" class="btn lt-grey-btn">Tags</a>
		</nav>
		<div id="tag-list">
			<?php
			$tags = get_tags();
			if ($tags) {
				foreach ($tags as $tag) {
					echo '<a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" class="tag-btn">' . $tag->name.'</a>, ';
				}
			}
			?>
		</div>
		<div class="clear"></div>
	</div>

	<div class="gallery-btn-row">
		<ul>
			<li><a class="btn green-btn alignleft" href="http://www.society6.com/cthomason" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-society603.png" alt="Society6 logo" /> Society6 prints</a></li>
			<li><a class="btn lt-grey-btn alignleft" href="http://www.flickr.com/photos/recycledfilm/" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-flickr04.png" alt="Flickr" /> Flickr photos</a> </li>
			<li><a class="btn lt-grey-btn alignleft" href="http://instagram.com/charliethomason" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-instagram02.png" alt="Instagram" /> Instagram photos</a></li>
			<li><a class="btn lt-grey-btn alignleft" href="http://bleachwave.vsco.co" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-vsco01.png" alt="VSCO" /> VSCOcam Grid</a></li>
		</ul>
	</div>
	<div class="clear"></div>

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
</div><!--.blog.blog-gallery-->
<?php get_footer(); ?>