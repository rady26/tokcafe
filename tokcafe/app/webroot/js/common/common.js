
jQuery(document).ready(function($) {

	//Rollover
	var postfix = '_on';
	$('.over').not('[src*="'+ postfix +'."]').each(function() {

		var img = $(this);
		var src = img.attr('src');
		var src_on = src.substr(0, src.lastIndexOf('.')) + postfix + src.substring(src.lastIndexOf('.'));
		$('<img>').attr('src', src_on);
		img.bind({ 'mouseenter':function(){ img.attr('src', src_on); }, 'mouseleave':function(){ img.attr('src', src); }});
		img.hover(
			function() {
				img.attr('src', src_on);
			},
			function() {
				img.attr('src', src);
			}
		);
	});
	
	//On mouse over change opacity
	$('.linkimg').hover(function(){
		$(this).stop().animate({'opacity':0.7}, 500);
	}, function(){
		$(this).stop().animate({'opacity':1}, 500);
	});
	
	$('.fadeOver').hover(function(){
		$(this).stop().animate({'opacity':0}, 1000);
	}, function(){
		$(this).stop().animate({'opacity':1}, 1000);
	});
	
	
	//Current directory
	function GetDirName(file_url)
	{
		var arr=file_url.split("/");
    	return arr[arr.length -2];
  	}
	
	var path = GetDirName( window.location.href );	
		
	if(path == 'about'){
		$('.fadeOver').removeClass('currentPage');
		$('.menu02 a img.fadeOver').addClass('currentPage');
	}else if(path == 'consultant'){
		$('.fadeOver').removeClass('currentPage');
		$('.menu03 a img.fadeOver').addClass('currentPage');
	}else if(path == 'services'){
		$('.fadeOver').removeClass('currentPage');
		$('.menu04 a img.fadeOver').addClass('currentPage');
	}else if(path == 'vacancies'){
		$('.fadeOver').removeClass('currentPage');
		$('.menu05 a img.fadeOver').addClass('currentPage');
	}else if(path == 'contact'){
		$('.fadeOver').removeClass('currentPage');
		$('.menu06 a img.fadeOver').addClass('currentPage');
	} else {
		$('.fadeOver').removeClass('currentPage');
		$('.menu01 a img.fadeOver').addClass('currentPage');
	}
	
	//Smooth Scrolling
	jQuery.easing.quart = function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	};  
	
	$(function () {
		$('.pageTop, .link_top a').click(function () {
			$('html,body').animate({ scrollTop: 0 }, 1000, 'quart');
			return false;
		});
	});

	//Function invocation
	js_popup();
	
});

$(window).load(function() {} );
$(window).resize(function() {
	var win = $(this); //this = window
	if (win.width() < 979) {
		
	}
});

/*	//	PAGE PRINT
-----------------------------------------------------------------------------------------------------------------*/
function js_page_print(){
	window.print();
	return false;
}

/*	//	POP UP 
-----------------------------------------------------------------------------------------------------------------*/
function js_popup(){
	var js_para = null;
	$('a[class^="js_popup_"], area[class^="js_popup_"]').each(function(index){
		$(this).click(function(){
			var wo = null;
			// get window width & height
			js_para = $(this).attr('class').match(/[0-9]+/g);
			// get window.name
			window.name ? js_para[2] = window.name+'_' : js_para[2] = ('');
			wo = window.open(this.href, 'popup'+index,'width='+js_para[0]+',height='+js_para[1]+',scrollbars=yes');
			
			var left = (screen.width/2)-(js_para[0]/2);
			var top = (screen.height/2)-(js_para[1]/2);
			wo.moveTo(left,top);
			wo.resizeTo(js_para[0],js_para[1]);
			return false;
		});
	});
}



/*	//	CLOSE
-----------------------------------------------------------------------------------------------------------------*/
function js_window_close(){
	window.close();
	return false;
}
