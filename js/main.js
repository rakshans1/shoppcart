















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

    	
	},1000);
});

/*Gif animation*/
function loading(){
    document.getElementById('loader').style.display ="none";
  }