</div><!-- div#container -->

<footer>Copyright &copy; 2013 Bleachwave.com<br>
	Site design by <a href="http://bleachwave.com">Charlie Thomason</a> <br>
</footer>

<?php wp_footer(); ?>

<?php if (is_front_page() || is_page_template('about.php')) { ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/home.js"></script>
<?php } elseif(is_home() || is_singular('post') || is_category() || is_tag() || is_search()) { ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/blog.js"></script>
<?php } ?>
</body>
</html>