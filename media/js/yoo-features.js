$(document).ready(function ($) {

//Определим ширину экрана для блоков	
var cards = $('.serv_card').size();
var minus_percent = 100-cards*2+"%";	
$('.serv_card .screen').width(minus_percent);	
	
$('.serv_card').hover(function(){

	var el='#'+$(this).attr('id');

	$(el+'.serv_card'+' a img').stop().animate({height : "115%"});
	$(el+'.serv_card'+' .screen').stop().animate({opacity : "0.7"}); 

},function(){
	var el='#'+$(this).attr('id');
	$(el+'.serv_card'+' a img').stop().animate({height : "100%"}); 
	$(el+'.serv_card'+' .screen').stop().animate({opacity : "0"});

	
});

$('.serv_card').click(function(){

	var el='#'+$(this).attr('id');
	$('.serv_board').animate({left : "-102%"},600);
	$('.serv_board').animate({"z-index" : "1", height : "-=20", "margin-top" : "+=10"},100);
	$('.serv_board').animate({left : "0"},700);
	//$('.serv_board').animate({opacity : 0},500);
	$(el+'.serv_detail').css({opacity : 1});

});


$('.serv_close').click(function(){

//var el=$(this).parent().attr('id');
//alert(el);
$('.serv_board').animate({left : "102%"},700);
$('.serv_board').animate({"z-index" : "3", height : "+=20", "margin-top" : "-=10"},100);
$('.serv_board').animate({left : "0"},600,function(){$('.serv_detail').css({opacity : 0});});


});

$('.serv_close').mouseover(function(){

	$('.serv_close').stop().animate({
	        opacity: 0.5,
        	myRotationProperty: -225
  		},
 {
        step: function(now, tween) {
            if (tween.prop === "myRotationProperty") {
                $(this).css('-webkit-transform','rotate('+now+'deg)');
                $(this).css('-moz-transform','rotate('+now+'deg)'); 
                // add Opera, MS etc. variants
                $(this).css('transform','rotate('+now+'deg)');  
            }
        }
	});

$('.serv_close').mouseout(function(){	
	$('.serv_close').stop().animate({
	        opacity: 1,
        	myRotationProperty: 0
},{
        step: function(now, tween) {
            if (tween.prop === "myRotationProperty") {
                $(this).css('-webkit-transform','rotate('+now+'deg)');
                $(this).css('-moz-transform','rotate('+now+'deg)'); 
                // add Opera, MS etc. variants
                $(this).css('transform','rotate('+now+'deg)');  
            }
        }

		});
  	});

});


});