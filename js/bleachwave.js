(function($) {
	// Take Art Cell img src's and make them the background-image of the container li
	$(".art-cell-wrap").css("background-image", function() {
		return 'url(' + $(this).find("img").attr("src") + ')';
	});
	// Clicking anywhere in art cell container takes you to post URL
	$(".art-cell-wrap").click(function() {
		window.open($(this).find("a.art-cell").attr("href"), "_self");
	});
})(jQuery);

var $ = jQuery.noConflict();
$(document).ready(function() {
	// Clicking Contact button on homepage displays contact method buttons
	$("#intro-contact-btn").click(function(e) {
		e.preventDefault();
		$("#intro-contact").slideToggle();
		$(this).toggleClass("clicked");
	});
	// Add All Posts link to blog menu
	$("ul.blog-menu").prepend("<li><a href='/blog'>All Posts</a></li>");
	// Add button class to 'Continue Reading' links
	$("a.more-link").addClass("btn grey-btn");
	// Add "current-cat" class to currently-viewed category on category pages
	if($("div.blog").hasClass("category-blog")) {
		var categoryTitle = $("#category-title").text();
		$(".blog-menu a:contains('" + categoryTitle + "')").addClass("current-cat");
	}
	// Add grey button class to more links and prev/next post links
	$("a.more-link, .prev-post a, .next-post a").addClass("btn grey-btn");
	// Add "All Posts" list item to top of Blog Categories menu
	$("ul.blog-menu").prepend("<li><a href='/blog'>All Posts</a></li>");
	// Initiate jQuery Masonry for About page
	$("#facts-box").masonry({
		itemSelector : '.fact',
		// set columnWidth a fraction of the container width
		columnWidth: function( containerWidth ) {
			return containerWidth / 4;
		}
	});
});