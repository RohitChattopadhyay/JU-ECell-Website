$(function(){
  
	createSticky($("#header"));

});

function createSticky(sticky) {
	
	if (typeof sticky !== "undefined") {

		var	pos = sticky.offset().top,
				win = $(window);
			
		win.on("scroll", function() {
    		win.scrollTop() >= pos ? sticky.addClass("fixed") : sticky.removeClass("fixed");      
		});			
	}
}
