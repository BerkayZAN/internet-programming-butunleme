$(document).ready(function(e) {
    	
 
	
	
	
	
	
	var sure_yazi_vitrin = 4000;
	var toplamli_yazi_vitrin = $(".vitrin ul li").length;
	
	var liwidth_yazi_vitrin = 342;
	var toplamwidth_yazi_vitrin = liwidth_yazi_vitrin * toplamli_yazi_vitrin ;
	var lideger_yazi_vitrin = 0;
	$(".vitrin ul").css("width", toplamwidth_yazi_vitrin + "px")
	
	
	
	$(".vitrin_saga").click(function(){
	if(lideger_yazi_vitrin < toplamli_yazi_vitrin - 1){
	lideger_yazi_vitrin++;
	yeniwidth_yazi_vitrin = liwidth_yazi_vitrin * lideger_yazi_vitrin;
	$(".vitrin ul").animate({marginLeft: "-" + yeniwidth_yazi_vitrin + "px"}, 500)
	}
	else
	{
	lideger_yazi_vitrin = 0 ;
	$(".vitrin ul").animate({marginLeft: "0"}, 500)
	}
	})
	
	
	
	$(".vitrin_sola").click(function(){
	if(lideger_yazi_vitrin > 0){
	lideger_yazi_vitrin--;
	yeniwidth_yazi_vitrin = liwidth_yazi_vitrin * lideger_yazi_vitrin;
	$(".vitrin ul").animate({marginLeft: "-" + yeniwidth_yazi_vitrin + "px"}, 500)
	}
	})
	
	
	
	
	
	$.oto_yazi_vitrin = function(){
	if(lideger_yazi_vitrin < toplamli_yazi_vitrin - 1)
	{
	lideger_yazi_vitrin++;
	yeniwidth_yazi_vitrin = liwidth_yazi_vitrin * lideger_yazi_vitrin;
	$(".vitrin ul").animate({marginLeft: "-" + yeniwidth_yazi_vitrin + "px"}, 500)
	}
	else
	{
	lideger_yazi_vitrin = 0 ;
	$(".vitrin ul").animate({marginLeft: "0"}, 500)
	}
	
	}
	
	var don_yazi_vitrin = setInterval("$.oto_yazi_vitrin()", sure_yazi_vitrin);
	
	$(".vitrin").hover(function(){
	
	clearInterval(don_yazi_vitrin)
	
	}, function(){
	don_yazi_vitrin = setInterval("$.oto_yazi_vitrin()", sure_yazi_vitrin);
	})
	
	
	
	
	
	});
