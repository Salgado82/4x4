<?php
	include_once("global.php");
	
	//para el envío en formato HTML 
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

	//dirección del remitente 
	$headers .= "From:".$_POST['email']." >\r\n"; 

	//ruta del mensaje desde origen a destino 
	//$headers .= "Return-path: xx@destino.com\r\n"; 

	//direcciones que recibián copia 
	$headers .= "Cc: pia.carreras@4x4imagen.com\r\n"; 
	$headers .= "Cc: inez.willis@4x4imagen.com\r\n"; 

	//direcciones que recibirán copia oculta 
	//$headers .= "Bcc: bbb@bb.com,ccc@cc.com\r\n";

	$mensaje = "Enviado de :".$_POST[name]." ".$_POST['mensaje'];

	mail("monica.acevedo@4x4imagen.com","CONTACTO BOSC",$mensaje,$headers);
?>
	
