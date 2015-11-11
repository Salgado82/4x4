$(document).ready(function(){
	serv_set_height();
});

$(window).resize(function(){
	serv_set_height();
});

function serv_set_height()
{
	if(window.matchMedia("screen and (min-width: 992px)").matches)
	{
		height = $("img.servicios-first").height();
		height = $("img.servicios-first").height();
		$("div.servicios-second").css("height", height +"px");
		//console.log(height);
	}
	else
	{
		$("div.servicios-second").css("height","250px");
	}
}

/*events*/
$("navbar-servicios ul li a")