<?php get_header(); ?>
    <div class="blog blog-index">

    	<h1 class="index-head">The Blog</h1>
	
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
	        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         
	        <article class="post">
	        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<p class="catdate"><strong><?php the_time('D, M j, Y'); ?></strong> &#8226; <?php the_category(', '); ?></p>         
            <div class="entry">  
                <?php the_content('Continue Reading...'); ?>
            </div><!-- div.entry -->
	        </article><!-- article.post -->
	<?php endwhile; ?>
         
	        <div class="navigation">
				<div class="alignleft"><?php previous_posts_link('&laquo; Back'); ?></div>
				<div class="alignright"><?php next_posts_link('Next &raquo;'); ?></div>
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
    </div><!-- div.blog -->
   
<?php get_footer(); ?>