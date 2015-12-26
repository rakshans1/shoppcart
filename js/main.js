
$(document).ready(function() {
 
  var owl = $("#owl-demo");
 
 owl.owlCarousel({
      pagination: false,
      itemsCustom : [
        [0, 1],
        [450, 1],
        [600, 2],
        [700, 2],
        [1000, 2],
        [1200, 3],
        [1400, 3],
        [1600, 3]
      ],
      
 
  });
 	
  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
});





/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', 
	        scrollDistance: 300, 
	        scrollFrom: 'top', 
	        scrollSpeed: 300, 
	        easingType: 'linear', 
	        animation: 'fade', 
	        animationSpeed: 200, 
	        scrollTrigger: false, 
	        scrollText: '<i class="fa fa-angle-up"></i>', 
	        scrollTitle: false, 
	        scrollImg: false, 
	        activeOverlay: false, 
	        zIndex: 2147483647 
		});
	});
});


/*Page Loading*/
$(document).ready(function(){
 setTimeout(function(){     
     $("a.cp_btn ").click(function(){
      $("a.active").removeClass("active");
      $(this).addClass("active");
	});	
         

     	

     	$("li.cp_btn a ").click(function(){
	         var page = $(this).attr('href');
	         var url = page.split(/\?+/).pop();
	         setTimeout(function(){ 
			$('#content').load('sub.php?'+url);
	        },100);
    	});
     	/*Account page*/
    	$("li.acc a ").click(function(){
	         var page = $(this).attr('href');
	         var url = page.split(/\?+/).pop();
	         setTimeout(function(){ 
			$('#content').load('sub.php?'+url);
	        },100);
    	});
     
		
        

    	$("li.cp_btn a ").click(function(){
	         var page = $(this).attr('href');
	         var url = page.split(/\?+/).pop(); 
			$('#contentr').load('sub.php?'+url);
		 });

    	
	},100);
});







/*Gif animation*/
function loading(){
    document.getElementById('loader').style.display ="none";
  }


