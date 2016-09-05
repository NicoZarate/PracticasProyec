$(document).ready(main);
 
var contador = 1;
 
function main(){
   $('body').click(function(){
       $('#menu').hide();
   });
   $('#menu').click(function(e){
       e.stopPropagation();
   })
	$('.menu_bar').click(function(e){
		// $('nav').toggle(); 
 e.stopPropagation();
 $('#menu').toggle();
/*		if(contador == 1){
			$('#menu').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('#menu').animate({
				left: '-100%'
			});
		}
 */
	});
  
    
};
