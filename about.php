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

	<section id="about-skills" class="home-section about-section">
		<h2 class="home-head about-head"><a href="javascript:void(0)"> Web Development Skills </a></h2>

		<div id="skills-box" class="blog">
			<ul>
				<div class="skills-column">
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/html5-01.png" alt="HTML5 logo" />HTML5</li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/css3-01.png" alt="CSS3 logo" />CSS</li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/js-01.png" alt="JavaScript logo" />JavaScript, jQuery, AJAX</li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/php-01.png" alt="PHP logo" />PHP</li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/sass-01.png" alt="Sass logo" />HAML, Sass, LESS</li>
				</div>
				<div class="skills-column second">
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/drupal-01.png" alt="Drupal logo" />Drupal</li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/wordpress-01.png" alt="WordPress logo" />WordPress</li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/ror-01.png" alt="Ruby on Rails logo" />Ruby on Rails (beginner)</li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/git-01.png" alt="Git logo" />Version Control (Git, SVN)</li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/ps-01.png" alt="Photoshop logo" />Adobe Creative Suite</li>
				</div>
				<div class="clear"></div>
			</ul>
		</div>

	</section>
</div>

<?php get_footer(); ?>