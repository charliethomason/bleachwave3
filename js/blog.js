var $ = jQuery.noConflict();
if($("div.blog").hasClass("category-blog")) {
	var categoryTitle = $("#category-title").text();
	// $("#blog-cat-menu a.btn").text("Category: " + categoryTitle).css("width","200px");
	$(".blog-menu a:contains('" + categoryTitle + "')").addClass("current-cat");
}
$("a.more-link").addClass("btn grey-btn");
$("ul.blog-menu").prepend("<li><a href='/blog'>All Posts</a></li>");