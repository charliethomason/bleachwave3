var $ = jQuery.noConflict();

$(window).load(function() {
	$(".thumb > img").each(function(){
		$(this).removeAttr("width").removeAttr("height");
	});
});

$(document).ready(function() {

	// Clicking anywhere in art cell container takes you to post URL
	// $(".art-cell").click(function() {
	// 	var artUrl = $(this).find("a.art-cell-img").attr("href");
	// 	window.open(artUrl, "_self");
	// });

	// Add All Posts link to blog menu
	$("ul.blog-menu").prepend("<li><a href='/art'>All Posts</a></li>");

	// Add "current-cat" class to currently-viewed category on category pages
	if($("div.blog").hasClass("category-blog")) {
		var categoryTitle = $("#category-title").text();
		$(".blog-menu a:contains('" + categoryTitle + "')").addClass("current-cat");
	}

	// Initiate jQuery Masonry for About page
	if(typeof($.fn.masonry) != "undefined") {
		$("#facts-box").masonry({
			itemSelector : '.fact',
			// set columnWidth a fraction of the container width
			columnWidth: function( containerWidth ) {
				return containerWidth / 4;
			}
		});
		var $container = $("#gallery-item-wrap");
		$container.imagesLoaded(function() {
			$container.masonry({
				itemSelector: '.art-item',
				columnWidth: 1
			});
		});
	}

});