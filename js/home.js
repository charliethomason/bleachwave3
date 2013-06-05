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
	// Reset Web Dev slider to first slide when browser is re-sized
	var currentSlide = 1;
	var windowsize = $(window).width();
	$(window).resize(function() {
		clearTimeout(this.id);
		this.id = setTimeout(doneResizing, 500);
		function doneResizing() {
			$("#webdev-slider").animate({
				left: '0'
			}, 500, function() {
				currentSlide = 1;
				windowsize = $(window).width();
			});
		}
	});
	// Advance Web Slider to the right
	$("#webdev-next").click(function() {
		if(currentSlide != 3) {
			if(windowsize > 1024) {
				$("#webdev-slider").animate({
					left: '-=960'
				}, 500, function() {
					currentSlide++;
				});
			} else if(windowsize <= 1024 && windowsize > 680) {
				$("#webdev-slider").animate({
					left: '-=600'
				}, 500, function() {
					currentSlide++;
				});
			} else{
				// do stuff for less than 680
			}
		} else{
			$("#webdev-slider").animate({
				left: '0'
			}, 1000, function() {
				currentSlide = 1;
			});
		}
	});
	// Rewind Web Dev slider to the left
	$("#webdev-prev").click(function() {
		if(currentSlide != 1) {
			if(windowsize > 1024) {
				$("#webdev-slider").animate({
					left: "+=960"
				}, 500, function() {
					currentSlide--;
				});
			} else if(windowsize <= 1024 && windowsize > 680) {
				$("#webdev-slider").animate({
					left: "+=600"
				}, 500, function() {
					currentSlide--;
				});
			} else{
				// do stuff for less than 680
			}
			
		} else{
			if(windowsize > 1024) {
				$("#webdev-slider").animate({
					left: '-=1920'
				}, 1000, function() {
					currentSlide = 3;
				});
			} else if(windowsize <= 1024 && windowsize > 680) {
				$("#webdev-slider").animate({
					left: '-=1800'
				}, 1000, function() {
					currentSlide = 3;
				});
			} else{
				// do stuff for less than 680
			}
		}
	});
});