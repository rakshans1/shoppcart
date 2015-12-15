/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});
});



 $(document).ready(function(){
    
 setTimeout(function(){     
$('#content').load('html/php/includes/ifeature.php');

     $("a.cp_btn ").click(function(){
      $("a.active").removeClass("active");
      $(this).addClass("active");
	});	
         

     	

     	$("li.cp_btn a ").click(function(){
	         var page = $(this).attr('href');
	         var url = page.split(/\?+/).pop();
	         setTimeout(function(){ 
			$('#content').load('sub.php?'+url);
	        },1000);
    	});
     
		
        

    	$("li.cp_btn a ").click(function(){
	         var page = $(this).attr('href');
	         var url = page.split(/\?+/).pop(); 
			$('#contentr').load('sub.php?'+url);
		 });

    	
	},3000);
});






function loading(){
    document.getElementById('loader').style.display ="none";
  }