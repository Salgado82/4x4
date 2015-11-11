var current_p = 0;

$(document).ready(function(){
	//resizeImgs();
	slider1();
});

$(window).resize(function(){
	//resizeImgs();	
});

function resizeImgs()
{
	
	var hr = $("#styling-viajes").height;
	$("#styling-helper").css("height",hr+"px");
	
	/*if (window.matchMedia('(min-width: 992px)').matches)
	{
		qs_img_height = $("#qs-img1").height();
		qs_img2_height = $("#qs-img2").height();
		
		
		$("#qs-img1").css("position", "relative");
		$("#qs-img1").css("-moz-transform", "translateY("+(qs_img2_height - qs_img_height)+"px)");
		$("#qs-img1").css("-ms-transform", "translateY("+(qs_img2_height - qs_img_height)+"px)");
		$("#qs-img1").css("-transform", "translateY("+(qs_img2_height - qs_img_height)+"px)");
		$("#qs-img1").css("-webkit-transform", "translateY("+(qs_img2_height - qs_img_height)+"px)");
    	
	}
	else
	{
		$("#qs-img1").css("-moz-transform", "translateY(0px)");
		$("#qs-img1").css("-ms-transform", "translateY(0px)");
		$("#qs-img1").css("-transform", "translateY(0px)");
		$("#qs-img1").css("-webkit-transform", "translateY(0px)");
	}*/
	
}

function slider1()
{
	current_p = 0;
	$("p#text-0").css("display","block");
	$("p#text-1").css("display","none");
	$("p#text-2").css("display","none");
	$("p#text-3").css("display","none");
	setTimeout(function(){ changeSliderUp(); }, 100);
}

function changeSliderUp()
{
	current_p++;
	current_p = current_p % 4;
	
	$("div#bolitas div div").css("background","#bbb");
	
	switch(current_p)
	{
		case 0:
			$("p#text-3").css("display","none");
			$("div#uno").css("background","#333");
			$("p#text-0").fadeIn();
			break;
		case 1:
			$("p#text-0").css("display","none");
			$("div#dos").css("background","#333");
			$("p#text-1").fadeIn();
			break;
		case 2:
			$("p#text-1").css("display","none");
			$("div#tres").css("background","#333");
			$("p#text-2").fadeIn();
			break;
		case 3:
			$("p#text-2").css("display","none");
			$("div#cuatro").css("background","#333");
			$("p#text-3").fadeIn();
			break;
	}
	
	console.log(".-")
	
}

function changeSliderDown()
{
	current_p--;
	if(current_p < 0)
		current_p = 3;
	else
	current_p = current_p % 4;

	$("div#bolitas div div").css("background","#bbb");
	
	switch(current_p)
	{
		case 0:
			$("p#text-1").css("display","none");
			$("div#uno").css("background","#333");
			$("p#text-0").fadeIn();
			break;
		case 1:
			$("p#text-2").css("display","none");
			$("div#dos").css("background","#333");
			$("p#text-1").fadeIn();
			break;
		case 2:
			$("p#text-3").css("display","none");
			$("div#tres").css("background","#333");
			$("p#text-2").fadeIn();
			break;
		case 3:
			$("p#text-0").css("display","none");
			$("div#cuatro").css("background","#333");
			$("p#text-3").fadeIn();
			break;
	}
	
}