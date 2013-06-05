<?php
/*
Template Name: About Page
*/
?>
<?php get_header(); ?>

<div class="about-intro">
	<section class="intro">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<div class="introcontent">
					<?php the_content(); ?>
				</div>
				<div class="clear"></div>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</section>
</div>

<?php get_footer(); ?>