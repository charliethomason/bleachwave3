var $ = jQuery.noConflict();

$(window).load(function() {
	$(".thumb > img").each(function(){
		$(this).removeAttr("width").removeAttr("height");
	});
});

$(document).ready(function() {

	// Add All Posts link to blog menu
	$("ul.blog-menu").prepend("<li><a href='/art'>All Posts</a></li>");

	// Add "current-cat" class to currently-viewed category on category pages
	if($("div.blog").hasClass("category-blog")) {
		var categoryTitle = $("#category-title").text();
		$(".blog-menu a:contains('" + categoryTitle + "')").addClass("current-cat");
	}
	$(".info").click(function(e) {
		e.preventDefault();
		var linkSrc = $(this).prev("a.thumb").attr("href");
		window.open(linkSrc, "_self");
	});
	$(".enlarge-btn").click(function(e) {
		e.preventDefault();
        $.fancybox(this,{
            'transitionIn'  :   'elastic',
            'transitionOut' :   'elastic',
            'speedIn'           :   600, 
            'speedOut'          :   200, 
            'overlayShow'   :   true
        });
        return false;
	});

	// Initiate jQuery Masonry for About page
	if(typeof($.fn.masonry) != "undefined") {
		$("#facts-box").masonry({
			itemSelector : '.fact',
			columnWidth: 225,
			gutter:20
		});
		var $container = $("#art-item-wrap");
		$container.imagesLoaded(function() {
			$container.masonry({
				itemSelector: '.art-item',
				columnWidth: 300,
				gutter:15
			});
		});
	}

});