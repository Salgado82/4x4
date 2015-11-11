<?php

	include_once("bd.php");

	$db = new Db();    

	//contenido del post
	$titulo = $_POST['titulo'];
	$desc = $_POST['desc'];
	$contenido = $_POST['contenido'];
	$posicion = $_POST['cuadro'];
	$path = $_POST['path'];

	function salir()
	{		
		die("Error al publicar articulo.");
		header( "refresh:5;url=admin.html" ); 
	}

	/*******************************/
	// procesamiento del contenido //
	//                             //
	/******************************/

	if($titulo == "" || !isset($titulo))
	{
		salir();
	}

	if($desc == "" || !isset($desc))
	{
		salir();
	}

	if($contenido == "" || !isset($contenido))
	{
		salir();
	}

 
     if(!isset($_FILES['imagen']['name']))
    {
     $query = "UPDATE articulo SET titulo = '{$titulo}', posicion = {$posicion}, contenido = '{$contenido}', `desc` = '{$desc}' WHERE id_articulo = {$_POST['id_articulo']}";
        echo $query;
		
		$result = $db -> query($query);
    }else{
		
		
		$ruta = "../content/".$_POST['id_articulo']."/".$_FILES['imagen']['name'];

		//subimos la imagen
		$resultado_img = @move_uploaded_file( $_FILES['imagen']['tmp_name'], $ruta );

 
		$query = "UPDATE articulo SET titulo = '{$titulo}', posicion = {$posicion}, contenido = '{$contenido}', `desc` = '{$desc}', path = '{$ruta}' WHERE id_articulo = {$_POST['id_articulo']}";
		$result = $db -> query($query);		
		unlink($path);
		
        echo $query;
		
		}
	
	
	
       
	
        
    
?>