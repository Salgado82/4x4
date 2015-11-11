<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Eleminar Articulo</title>
<link type="text/css" rel="stylesheet" href="css/formulario.css"/>


</head>

<body>
<?php

	include_once("bd.php");
	$db = new Db();
	
	 function getArticle($db)
    {
        $sql = "SELECT * FROM articulo ORDER BY id_articulo DESC";
        $campos = $db->select($sql);
        return $campos;
    }
	
	function getN_Rows($db)
    {
        $sql = "SELECT COUNT(*) FROM articulo";
        $count = $db->select($sql);
		return $count[0]["COUNT(*)"];     
    }
	
	$registro=array();
	$registro=getArticle($db);
	$rows= getN_Rows($db);
	
	
?>


<div>

<form name="seleccionar" method="post" enctype="multipart/form-data" action="eleminar.php" onsubmit="return enviar();">

<fieldset>
	<legend>Seleccione el articulo  de la lista que quiere Eleminar</legend>
    	
    <select name="articulo">
    	<?php
		for($i=0;$i<$rows;$i++){
		echo '<option value="'.$registro[$i]['id_articulo'].'">'.$registro[$i]['id_articulo']." - ".$registro[$i]['titulo'].'</option>
		';
		}
		?>
	</select>
    
    <p><input type="button" value="Enviar formulario" onclick="javascript:validar();"> </p>
    
</fieldset>

</form>
<script type="text/javascript">
{
	function validar()
	
{
   if (confirm("Quieres enviar el formulario?"))
   {
      document.seleccionar.submit()
   }
    else
    {
       alert("Piensa lo que haces antes de apretar el botón ;)");
     }
}
}
</script>

</div>


</body>
</html>
