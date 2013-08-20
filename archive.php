<?php get_header(); ?>
 
	<div class="blog archive-blog<?php if (is_category()) { ?> category-blog<?php } ?>">

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
		
		<div class="blog-posts">
			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2 class="archivetitle"><span id="category-title"><?php single_cat_title(); ?></span></h2>
			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2 class="archivetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2 class="archivetitle">Archive for <?php the_time('F jS, Y'); ?>:</h2>
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2 class="archivetitle">Archive for <?php the_time('F, Y'); ?>:</h2>
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="archivetitle">Archive for <?php the_time('Y'); ?>:</h2>
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="archivetitle">Author Archive</h2>
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="archivetitle">Blog Archives</h2>
			<?php } ?>
			
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<article class="post">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<p class="catdate"><?php the_time('D, M j, Y'); ?> • <?php the_category(', '); ?></p>
 
				<div class="entry">

					<?php if (is_tag()) {
						echo '<div class="alignleft">';
						the_post_thumbnail('medium');
						echo '</div>';
						the_excerpt();
					} else {
						the_content('Continue Reading...');
					} ?>

				</div>
 
			</article>
		 
			<?php endwhile; ?>

			<div class="navigation">
				<div class="alignleft"><?php previous_posts_link('&laquo; Back') ?></div>
				<div class="alignright"><?php next_posts_link('Next &raquo;') ?></div>
			</div>

			<?php else : ?>

			<article class="post">
				<div class="entry">
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php get_search_form(); ?>
				</div>
			</article>
 
			<?php endif; ?>
		</div><!--div.blog-posts-->
</div><!--div.blog-->
 
   
<?php get_footer(); ?>