<?php get_header(); ?>

<div class="blog reg-blog single-blog">
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
        
		<article class="post">
			<div class="featured-image">
				<?php the_post_thumbnail('large'); ?>
			</div>
       		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<p class="catdate"><strong><?php the_time('D, M j, Y'); ?></strong></p>
           
			<div class="entry">  
				<?php the_content(); ?>
				<div class="clear"></div>
           	</div><!-- div.entry -->

		</article><!-- article.post -->

		<p class="taglist"><strong>Tags:</strong><?php the_tags('', ', '); ?></p>

	<?php endwhile; ?>
    
	<div class="navigation"> 
	    <div class="prev-post"><?php previous_post_link( '%link', '&laquo; %title' ) ?></div>
		<div class="next-post"><?php next_post_link( '%link', '%title &raquo;' ) ?></div>
		<div class="clear"></div>
	</div>

	<?php endif; ?>
</div>
 
<?php get_footer(); ?>