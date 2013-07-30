var $ = jQuery.noConflict();

$(document).ready(function() {

	// Clicking Contact button on homepage displays contact method buttons
	$("#intro-contact-btn").click(function(e) {
		showContent($(this),"#intro-contact",e);
	});
	$("#tag-list-btn").click(function(e) {
		showContent($(this),"#tag-list",e);
	});

	function showContent(button,target,event) {
		event.preventDefault();
		$(target).slideToggle();
		$(button).toggleClass("clicked");
	}

	// Clicking anywhere in art cell container takes you to post URL
	$(".art-cell").click(function() {
		var artUrl = $(this).find("a.art-cell-img").attr("href");
		window.open(artUrl, "_self");
	});

	// Add All Posts link to blog menu
	$("ul.blog-menu").prepend("<li><a href='/blog'>All Posts</a></li>");

	// Add "current-cat" class to currently-viewed category on category pages
	if($("div.blog").hasClass("category-blog")) {
		var categoryTitle = $("#category-title").text();
		$(".blog-menu a:contains('" + categoryTitle + "')").addClass("current-cat");
	}
	
	// Add grey button class to more links and prev/next post links
	$("a.more-link, .prev-post a, .next-post a").addClass("btn grey-btn");

	// Initiate jQuery Masonry for About page
	if(typeof($.fn.masonry) != "undefined") {
		$("#facts-box").masonry({
			itemSelector : '.fact',
			// set columnWidth a fraction of the container width
			columnWidth: function( containerWidth ) {
				return containerWidth / 4;
			}
		});
	}
	
	// Clicking on gallery caption text triggers the click event for the thumbnail img's link tag
	if($(".gallery").length > 0) {
		$(".gallery").each(function() {
			var caption = $(".gallery-caption", this);
			$(caption).click(function(e) {
				e.preventDefault();
				var gLink = $(this).siblings($(".gallery-icon")).find("a");
				$(gLink).click();
			});
		});
	}

});