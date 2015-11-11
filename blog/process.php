<?php

	include_once("bd.php");

	$db = new Db();    

	//contenido del post
	$titulo = $db -> quote($_POST['titulo']);
	$desc = $db -> quote($_POST['desc']);
	$contenido = $_POST['contenido'];
	$posicion = $_POST['cuadro'];
	$path = "../content/";

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
        salir();
    }
        
        //creamos registro en base de datos
    	$query = "INSERT INTO `articulo` (`titulo`,`desc`,`contenido`,`posicion`) VALUES (" . $titulo . "," . $desc . "," . $contenido .",". $posicion.")";
		$result = $db -> query("INSERT INTO `articulo` (`titulo`,`desc`,`contenido`,`posicion`) VALUES (" . $titulo . "," . $desc . "," ."'".$contenido ."',". $posicion.")");
		$top_id = $db -> select("SELECT MAX(id_articulo) AS id_articulo FROM articulo");
		$path .= $top_id[0]['id_articulo'];
		$id_final = $top_id[0]['id_articulo'];

		echo $path;

		//modificamos el servidor
		if (!mkdir($path, 0777, true))
		{
    		die('Failed to create folders...');
		}

		$path .= "/".$_FILES['imagen']['name'];

		//subimos la imagen
		$resultado_img = @move_uploaded_file( $_FILES['imagen']['tmp_name'], $path );


		//modificamos el campo de la bdd
		$path = $db -> quote($path);
		$result = $db -> query("UPDATE articulo SET path = ". $path." where id_articulo=".$id_final);



    /****************************/
    //pasamos todos los filtros//
    /***************************/
    echo "<b>Artículo creado exitosamente</b>";
    header( "refresh:5;url=admin.html" );
    
?>