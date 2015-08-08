// JavaScript Document
jQuery(document).ready(function()
{



///////////////////////////////////////////////////////////////////////////////////// 
//
//	regular size slideshow settings
//

jQuery('.slide_entry ul').cycle({
		fx: 'blindY',
		easing: 'easeOutExpo',
		speed:  'slow',
		before: onBefore,
        after: onAfter,
        timeout: 8000,
		pager:  '#number',
		pause: 1
	});

function onAfter() {
 jQuery(".main_title").delay(100).animate({left: '0px' }, 700, 'easeOutBack');
 jQuery(".subtitle").delay(200).animate({left: '0px' }, 700, 'easeOutBack');
}
function onBefore() {
    jQuery(".main_title, .subtitle").animate({left: '-650px' }, 500);
} 




////////////////////////////////////////////////////////////////////////////////////

greepit_iconshover();
greepit_imagehover();
greepit_masonry();
greepit_navigation();
greepit_lightbox();

});


//----------
// icons hover
//----------
function greepit_iconshover(){
	$(".equal_columns").hover(function(){
		$(this).find("img").animate({right: "25px"}, "fast");
		}, function() {
		$(this).find("img").animate({right: "10px"}, "fast");
	});
}

//----------
// image hover
//----------
function greepit_imagehover(){
	
	$(".gallery_item, .wrap_image ").hover(function() {
				$(this).find("img").animate({opacity: 0.7}, "slow");
				$(this).find(".over_image").animate({opacity: "show", top: "50%"}, "slow","easeOutExpo");
			}, function() {
				$(this).find("img").animate({opacity: 1}, "fast");
				$(this).find(".over_image").animate({opacity: "hide", top: "-60"}, "fast");
			});
}


//----------
// masonry and filter
//----------
function greepit_masonry(){
	
	
	var speed = 500,  // animation speed
    $wall = $('#main').find('.wrap_page');

	$wall.masonry({
	  // only apply masonry layout to visible elements
	  itemSelector: '.portfolio_box:not(.invis)',
	  animate: true,
	  animationOptions: {
		duration: speed,
		queue: false
	  }
	});


$('#filtering-nav a').click(function(){
  var colorClass = '.' + $(this).attr('class');

  if(colorClass=='.all') {
    // show all hidden boxes
    $wall.children('.invis')
      .toggleClass('invis').fadeIn(speed);
  } else {  
    // hide visible boxes 
    $wall.children().not(colorClass).not('.invis')
      .toggleClass('invis').fadeOut(speed);
    // show hidden boxes
    $wall.children(colorClass+'.invis')
      .toggleClass('invis').fadeIn(speed);
  }
  $wall.masonry();

  return false;
});

}


//----------
// main navigation
//----------
function greepit_navigation(){
		  
	$("#nav a").removeAttr('title');
	$("#nav ul").css({display: "none"});
		$(" #nav li").hover(function(){									 
			$(this).find('ul:first').css({visibility: "visible",display: "none"}).slideDown(400,"easeInOutQuart");},
			function(){
			$(this).find('ul:first').css({visibility: "hidden"});
	});
		
}




//----------
// fancybox lightbox
//----------
function greepit_lightbox(){
	
	$("a[rel=fancyzoom]").fancybox();
	
	$("a[rel=fancyzoom_group]").fancybox();
	
	//----------
	// fancybox vimeo 
	//----------
	$("a[rel=fancyvimeo]").click(function() {
		$.fancybox({
				'padding'		: 0,
				'autoScale'		: false,
				'title'			: this.title,			
				'href'			: this.href.replace(new RegExp("[0-9]", "i"), 'moogaloop.swf?clip_id=1'),
				'type'			: 'swf',
				'swf'			: {'wmode':'transparent','allowfullscreen':'true'}
		});

	return false;
	});	
	
	//----------
	// fancybox youtube 
	//----------
	$("a[rel=fancytube]").click(function() {
		$.fancybox({
				'padding'             : 0,
				'autoScale'   : false,
				'transitionIn'        : 'none',
				'transitionOut'       : 'none',
				'title'               : this.title,
				'width'               : 680,
				'height'              : 495,
				'href'                : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
				'type'                : 'swf',    // <--add a comma here
				'swf'                 : {'allowfullscreen':'true', 'wmode':'opaque'} // <-- flashvars here
		}); 

	return false;
	});	
	
}


