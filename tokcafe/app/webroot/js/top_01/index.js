$(document).ready(function() {
	var count = $(".list").children().length;

	$(".list li").each(function(i) {
		$(this).addClass(''+(i+1));
		name = parseInt($(this).attr("class"));
		if(name%4==0) { $(this).addClass('no-margin');}
	});	
	

});