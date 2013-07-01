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

	<section id="about-education" class="home-section about-section">
		<h2 class="home-head about-head"><a href="javascript:void(0)"> Education </a></h2>

		<div id="education-box" class="blog">
			<ul>
				<li>
					<a href="http://www.uky.edu" target="_blank" rel="nofollow">
						<img src="<?php bloginfo('template_directory'); ?>/images/ukentucky01.jpg" alt="University of Kentucky logo" border="0" />
					</a>
					<h3><a href="http://www.uky.edu" target="_blank" rel="nofollow">University of Kentucky</a></h3>
					<h4>Bachelor of Fine Arts (BFA)<br> Art Studio</h4>
					<p>Graduated Dec. 2007, <em>Magna Cum Laude</em></p>
				</li>
				<li>
					<a href="http://www.depaul.edu" target="_blank" rel="nofollow">
						<img src="<?php bloginfo('template_directory'); ?>/images/depaul01.jpg" alt="DePaul University logo" border="0" />
					</a>
					<h3><a href="http://www.depaul.edu" target="_blank" rel="nofollow">DePaul University</a></h3>
					<h4>Master of Arts (MA)<br> New Media Studies</h4>
					<p>Graduated May 2010</p>
				</li>
				<li>
					<a href="http://www.starterleague.com" target="_blank" rel="nofollow">
						<img src="<?php bloginfo('template_directory'); ?>/images/starterleague01.jpg" alt="Starter League logo" border="0" />
					</a>
					<h3><a href="http://www.starterleague.com" target="_blank" rel="nofollow">Starter League (aka: Code Academy)</a></h3>
					<h4>12-week Web App Development program<br> Ruby on Rails, HTML5, CSS3, JS/jQuery</h4>
					<p>Winter 2012 (Jan-Mar)</p>
				</li>
			</ul>
		</div>
	</section>

	<section id="about-facts" class="home-section about-section">
		<h2 class="home-head about-head"><a href="javascript:void(0)"> Random Facts </a></h2>
		<div id="facts-box" class="blog">
			<div class="fact">I enjoy butter burgers and french fries and milkshakes.</div>
			<div class="fact">My gun collection includes 45 shotguns made in the USSR in the 1930s.</div>
			<div class="fact">My favorite movies are Wild Hogs, Glitter, Jersey Girl, Santa Claus Conquers the Martians, and Centipede 2.</div>
			<div class="fact">At restaurants, I choose not to sit near people of other ethnicities.</div>
			<div class="fact">There are only 2 types of people in this world: you and me.</div>
			<div class="fact">Everyone tells me that I look like Woody Harrelson, but the truth is that I look like Joan Rivers if she was a man and had done meth for about 5 years.</div>
			<div class="fact">Inside of my brain, it's all just like fuckin' naked sluts and bottles of Jack, bro.</div>
			<div class="fact">I am the enemy.</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>