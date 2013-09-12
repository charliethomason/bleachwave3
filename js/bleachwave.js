var $ = jQuery.noConflict();

// Remove width and height from art-item img
$(window).load(function() {
	$(".thumb > img").each(function(){
		$(this).removeAttr("width").removeAttr("height");
	});
});

$(document).ready(function() {

	// Add All Posts link to blog menu
	$("ul.blog-menu").prepend("<li><a href='/art'>All Posts</a></li>");

	// Add "current-cat" class to currently-viewed category on category pages
	var currentUrl = window.location.pathname.split('/');
	if(currentUrl[1] == "category") {
		var categoryTitle = $("#category-title").text();
		var categoryLink = $("a:contains('" + categoryTitle + "')");
		$(".blog-menu").find(categoryLink).addClass("current-cat");
		$(".main-sub-nav").find(categoryLink).addClass("current-cat");
	}
	// Clicking anywhere on art-item opens link to gallery post
	$(".info").click(function(e) {
		e.preventDefault();
		var linkSrc = $(this).prev("a.thumb").attr("href");
		window.open(linkSrc, "_self");
	});
	// Enlarge button on gallery pages triggers fancybox
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
	// Clicking hamburger on mobile triggers nav-social
	$("#hamburger").click(function(e) {
		e.preventDefault();
		$("ul.nav-social").slideToggle(700);
	});
	var $prevLink = $('a[rel="prev"]');
	var $nextLink = $('a[rel="next"]');
	if($prevLink.length || $nextLink.length) {
		$prevLink.addClass("btn secondary-btn");
		$nextLink.addClass("btn secondary-btn");
	}
	// If Masonry exists
	if(typeof($.fn.masonry) != "undefined") {
		// Masonry for About page
		$("#facts-box").masonry({
			columnWidth: '.fact',
			gutter: '.sizer'
		});
		// Masonry for Gallery & Archive pages
		var $container = $("#art-item-wrap");
		$container.imagesLoaded(function() {
			$container.masonry({
				columnWidth: '.art-item',
				gutter: '.sizer'
			});
		});
	}

});