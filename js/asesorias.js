function getGold()
{
	var txt = "";
							
	txt +="<div id='lista'>";
	txt +="<div class='col-lg-2 col-md-2 flechas-asesorias-izq'><div class='flechas'><a onclick='getSilver();return false;' href='#''><h1><<</h1></a></div></div>";
	txt +="<div class='col-lg-8 col-md-8 col-sm-12 col-xs-12'>";
	txt +="<ul style='padding:0;text-align:center;font-family:noteworthy-light' class='good'>";
	txt +="<li><h3>ASESORÍA GOLD</h3></li>";
	txt +="<li>&nbsp;</li>";
	txt +="<li>Planteamiento de objetivos de Cliente</li>";
	txt +="<li>Diagnóstico de Estilo</li>";
	txt +="<li>Medición de Cuerpo y Rostro</li>";
	txt +="<li>Tipología de Cuerpo</li>";
	txt +="<li>Tipología de Rostro</li>";
	txt +="<li>Análisis de color y drapeado</li>";
	txt +="<li>Recomendaciones de prendas y accesorios</li>";
	txt +="<li>Propuestas de cambio de look de cabello</li>";
	txt +="<li>Propuestas de maquillaje</li>";
	txt +="<li>Propuestas de looks de inspiración</li>";
	txt +="<li>Closet Fix o armado de looks en closet</li>";
	txt +="<li>Básicos de Armario</li>";
	txt +="<li>Incluye: carpeta de diagnóstico y paleta de color de la estación correspondiente.</li>";
	txt +="<li>&nbsp;</li>";
	txt +="</ul>";
	txt +="</div>";
	txt +="<div class='col-lg-2 col-md-2 flechas-asesorias-der'>";
	txt +="<div class='flechas'><a onclick='getPlatinum();return false;' href='#''><h1>>></h1></a></div>";
	txt +="</div></div>";

	$("#lista").html(txt);
	$("#lista").hide();
	$("#lista").fadeIn(1000);
}

function getSilver()
{
	var txt = "";
	
	txt +="<div id='lista'>";
	txt +="<div class='col-lg-2 col-md-2 flechas-asesorias-izq'></div>";
	txt +="<div class='col-lg-8 col-md-8 col-sm-12 col-xs-12'>";
	txt +="<ul style='padding:0;text-align:center;font-family:noteworthy-light' class='good'>";
	txt +="<li><h3>ASESORÍA SILVER</h3></li>";
	txt +="<li>&nbsp;</li>";
	txt +="<li>&nbsp;</li>";
	txt +="<li>Planteamiento de objetivos del cliente.</li>";
	txt +="<li>Diagnóstico de estilo.</li>";
	txt +="<li>Medición de cuerpo y rostro.</li>";
	txt +="<li>Tipología de cuerpo</li>";
	txt +="<li>Tipologìa de rostro.</li>";
	txt +="<li>Anàlisis de color y drapeado.</li>";
	txt +="<li>Recomendaciones de prendas y accesorios.</li>";
	txt +="<li>Propuestas de looks de inspiración</li>";
	txt +="<li>Incluye: carpeta de diagnóstico y paleta de color de la estación correspondiente.</li>";
	txt +="<li>&nbsp;</li>";
	txt +="<li>&nbsp;</li>";
	txt +="<li>&nbsp;</li>";
	txt +="</ul>";
	txt +="</div>";
	txt +="<div class='col-lg-2 col-md-2 flechas-asesorias-der'>";
	txt +="<div class='flechas'><a onclick='getGold();return false;' href='#''><h1>>></h1></a></div>";
	txt +="</div></div>";

				
	$("#lista").html(txt);
	$("#lista").hide();
	$("#lista").fadeIn(1000);
}

function getPlatinum()
{
	var txt = "";
	
	txt +="<div id='lista'>";
	txt +="<div class='col-lg-2 col-md-2 flechas-asesorias-izq'><div class='flechas'><a onclick='getGold();return false;' href='#''><h1><<</h1></a></div></div>";
	txt +="<div class='col-lg-8 col-md-8 col-sm-12 col-xs-12'>";
	txt +="<ul style='padding:0;text-align:center;font-family:noteworthy-light' class='good'>";
	txt +="<li><h3>ASESORÍA PLATINUM</strong></h3>";
	txt +="<li>Planteamiento de objetivos de Cliente</li>";
	txt +="<li>Diagnóstico de Estilo</li>";
	txt +="<li>Medición de Cuerpo y Rostro</li>";
	txt +="<li>Tipología de Cuerpo</li>";
	txt +="<li>Tipología de Rostro</li>";
	txt +="<li>Análisis de color y drapeado</li>";
	txt +="<li>Recomendaciones de prendas y accesorios</li>";
	txt +="<li>Propuestas de cambio de look de cabello</li>";
	txt +="<li>Propuestas y sesión de maquillaje</li>";
	txt +="<li>Closet Fix</li>";
	txt +="<li>Armado de looks</li>";
	txt +="<li>Básicos de Armario</li>";
	txt +="<li>Cambio de look con especialista</li>";
	txt +="<li>Personal Shopper</li>";
	txt +="<li>Incluye: carpeta de diagnóstico y paleta de color de la estación correspondiente.</li>";
	txt +="<li>&nbsp;</li>";
	txt +="<li>&nbsp;</li>";
	txt +="</ul>";
	txt +="</div>";
	txt +="<div class='col-lg-2 col-md-2 flechas-asesorias-der'>";
	txt +="</div></div>";


	$("#lista").html(txt);
	$("#lista").hide();
	$("#lista").fadeIn(1000);
}