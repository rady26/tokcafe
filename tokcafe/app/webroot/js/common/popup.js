
jQuery(document).ready(function($) {

	//To POP UP
	$("a.topopup").click(function() {
			loading(); // loading
			setTimeout(function(){ // then show popup, deley in .5 second
				loadPopup(); // function show popup 
			}, 500); // .5 second
	return false;
	});
	
	
	$(".topopup_02").click(function() {
			loading(); // loading
			setTimeout(function(){ // then show popup, deley in .5 second
				loadPopup_02(); // function show popup 
			}, 500); // .5 second
	return false;
	});
	
	
	
	$(this).keyup(function(event) {
		if (event.which == 27) { // 27 is 'Ecs' in the keyboard
			disablePopup();  // function close pop up
			disablePopup_02();  // function close pop up
		}  	
	});
	
	$("div#backgroundPopup, div#backgroundPopup_02").click(function() {
		disablePopup();  // function close pop up
		disablePopup_02();  // function close pop up
	});

	

	 /************** start: functions. **************/
	function loading() {
		$("div.loader").show();  
	}
	function closeloading() {
		$("div.loader").fadeOut('normal');  
	}
	
	var popupStatus = 0; // set value
	
	function loadPopup() { 
		if(popupStatus == 0) { // if value is 0, show popup
			closeloading(); // fadeout loading
			$("#toPopup").fadeIn(0500); // fadein popup div
			$("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
			$("#backgroundPopup").fadeIn(0001); 
			popupStatus = 1; // and set value to 1
		}	
	}


	function loadPopup_02() { 
		if(popupStatus == 0) { // if value is 0, show popup
			closeloading(); // fadeout loading
			$("#toPopup_02").fadeIn(0500); // fadein popup div
			$("#backgroundPopup_02").css("opacity", "0.7"); // css opacity, supports IE7, IE8
			$("#backgroundPopup_02").fadeIn(0001); 
			popupStatus = 1; // and set value to 1
		}	
	}
	
	
	function disablePopup() {
		if(popupStatus == 1) { // if value is 1, close popup
			$("#toPopup").fadeOut("normal"); 
			$("#toPopup_02").fadeOut("normal");
			$("#backgroundPopup").fadeOut("normal");    
			$("#backgroundPopup_02").fadeOut("normal"); 
			popupStatus = 0;  // and set value to 0
		}
	}
	/************** end: functions. **************/

});