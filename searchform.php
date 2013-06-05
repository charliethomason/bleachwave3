<form id="searchform" action="/" method="get">
	<label class="hidden" for="s">Search</label>
	<input type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Looking for something?">
	<input id="searchsubmit" class="btn blue-btn" type="submit" value="Search">
	<input id="searchimage" class="btn blue-btn" type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png">
</form>