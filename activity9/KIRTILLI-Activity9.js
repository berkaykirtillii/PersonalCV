$(document).ready(function() {
	// preload images
	$("#image_list a").each(function() {
		var swappedImage = new Image();
		swappedImage.src = $(this).attr("href");
	});
	
	// set up event handlers for links    
	$("#image_list a").click(function(evt) {

		var imageURL = $(this).attr("href");
		$("#image").fadeOut(500,function(){
			$("#image").attr("src",imageURL);
			$("#image").fadeIn(500);
		});
				
		var caption = $(this).attr("title");
		$("#caption").fadeOut(500,function(){
			$("#caption").text(caption);
			$("#caption").fadeIn(500);
		});

		// cancel the default action of the link
	    evt.preventDefault();
	}); // end click
	
	// move focus to first thumbnail
	$("li:first-child a").focus();
}); // end ready