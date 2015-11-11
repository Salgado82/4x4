$(document).ready(function(){
	teens_set_height();
});

$(window).resize(function(){
	teens_set_height();
});

function teens_set_height()
{
	if(window.matchMedia("screen and (min-width: 992px)").matches)
	{
		height1 = $("div#teens-first-col").height();
		height2 = $("div#teen-second-col").height();
		height = height2 - height1;
		
		//$("div#teens-first-col").css("margin-top", height - 100 +"px");
		//$("div#teens-first-col").css("margin-top", "10%");
		console.log(height1 + " " + height2);
	}
	else
	{
		//$("div#teens-first-col").css("margin-top", "0px");
	}
}
