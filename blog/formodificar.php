<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Blog 4x4</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="admin.css" />
        <link rel="stylesheet" type="text/css" href="css/formulario.css" />
        <?php  $articulo = $_POST['articulo'];
		include_once("bd.php");
	$db = new Db();
	$cad = 'SELECT * FROM articulo WHERE id_articulo = '.$articulo.' LIMIT 1';
    function getArticle($db,$articulo)
    {
        $sql = 'SELECT * FROM articulo WHERE id_articulo = '.$articulo;
        $campos = $db->select($sql);
        $result = array();
        $result['titulo'] = $campos[0]['titulo'];
        $result['desc'] = $campos[0]['desc'];
        $result['contenido'] = $campos[0]['contenido'];
        $result['posicion'] = $campos[0]['posicion'];
        $result['path'] = $campos[0]['path'];
        $result['id'] = $campos[0]['id_articulo'];
        return $result;
    }
	$registros = array();
	$registros = getArticle($db,$articulo);
	 ?>        
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
		<script src="js/html5.image.preview.min.js"></script>
		<script src="js/jquery.form.min.js"></script>
		<script>
			function cuadrado(valor)
			{
				$("div.uno").css("background","#ddd");
				$("div.dos").css("background","#ddd");
				$("div.tres").css("background","#ddd");
				$("div.cuatro").css("background","#ddd");

				switch(valor)
				{
					case 1:
						$("div.uno").css("background","cyan");
						$("#cuadro").val(1);
						break;
					case 2:
						$("div.dos").css("background","cyan");
						$("#cuadro").val(2);
						break;
					case 3:
						$("div.tres").css("background","cyan");
						$("#cuadro").val(3);
						break;
					case 4:
						$("div.cuatro").css("background","cyan");
						$("#cuadro").val(4);
						break;
				}

			}
		</script>
		<script>
		$(document).ready(function(){
			tinymce.init({
			selector: "#contenido",
    
			  plugins: [
				"advlist autolink lists link  charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste jbimages"
			  ],
    
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link  jbimages",
    
			relative_urls: false
    
			});


			 var options = {
		        beforeSubmit:  showRequest,   
		        success:       showResponse  
		    }; 

			//$('#form').ajaxForm(options); 

			function showRequest(formData, jqForm, options)
			{
				if($("#titulo").val() == "")
				{
					alert("título vacio");
					return false;
				}

				if($("#desc").val() == "")
				{
					alert("descripción vacía");
					return false;
				}

				var contenido_txt = tinyMCE.get('contenido').getContent();
				if(contenido_txt == "")
				{
					alert("contenido vacio");
					return false;
				}

				if($("#cuadro").val() == "0")
				{
					alert("selecciona cuadro de imagen");
					return false;
				}

				var filterVal = 'blur(5px)';
				$('body')
				  .css('filter',filterVal)
				  .css('webkitFilter',filterVal)
				  .css('mozFilter',filterVal)
				  .css('oFilter',filterVal)
				  .css('msFilter',filterVal);
            
			    return true; 
			} 
 
			function showResponse(responseText, statusText, xhr, $form)
			{
				alert("articulo publicado!");
				location.reload();
			}


   

		});
		</script>
	
    
	</head>
	<body>
    
		<form id="form" role="form" action="modificar.php" method="post" enctype="multipart/form-data" runat="server">
			<div>
			<fieldset class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:#eee;margin-top:20px">
				<legend> &nbsp;</legend>	
				<legend> BLOG</legend>	
				<div class="form-group">
					<label for="titulo">Título:</label>
					<input type="text" name="titulo" class="form-control" id="titulo" <?php echo 'value="'.$registros['titulo'].'"'; ?> >
				</div>
				<div class="form-group">
					<label for="pwd">Descripción breve:</label>
					<input type="text" name="desc" class="form-control" id="desc" <?php echo 'value="'.$registros['desc'].'"'; ?> > 
				</div>
				
				<div class="checkbox" style="position: relative; display: inline-block;margin-left:calc(50% - 256px)">
					<div class="uno" onClick="cuadrado(1);"<?php if($registros['posicion']==1){ echo ' style = "background-color:#FFF; background-image:url(images/imgposicion.gif);"';}?> ></div>
					<div class="dos" onClick="cuadrado(2);"<?php if($registros['posicion']==2){ echo ' style = "background-color:#FFF; background-image:url(images/imgposicion.gif);"';}?>></div>
					<div class="tres" onClick="cuadrado(3);"<?php if($registros['posicion']==3){ echo ' style = "background-color:#FFF; background-image:url(images/imgposicion.gif);"';}?>></div>
					<div class="cuatro" onClick="cuadrado(4);"<?php if($registros['posicion']==4){ echo ' style = "background-color:#FFF; background-image:url(images/imgposicion.gif);"';}?>></div>
					<input type="hidden" name="cuadro" id="cuadro" value="<?php echo $registros['posicion']?>" />
                    <input type="hidden" name="path" id="path" value = "<?php echo $registros['path'] ?>">;
                    <input type="hidden" name="id_articulo" id="articulo" value = "<?php echo $registros['id'] ?>">;
				</div>
				<br/>
					

			</fieldset>
			</div>

			<center>
			<fieldset class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:#eee;">
				<br/>
				<legend> &nbsp; </legend>
				<legend> Imagen de homepage </legend>
				<div>
                
                	<article>
                    <legend>Imagen Actual del Articulo</legend>
                    <div class="Preview">
                        <img src="<?php echo $registros['path']; ?>" class="imageLast" />
                    </div>
                    </article>
                    <hr />
					<article>
                    <legend>Imagen Nueva</legend>
                    	<div class="Present">
			            <input type="file" name="imagen" id="imagen" onChange="previewImage(this,[256],4);" />
                        <div class="imagePreview imagen"></div>
                        </div>
			        </article>
				</div>
			</fieldset>
			</center>
			
			<hr/>
			
			<fieldset class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:#eee;margin-top:20px">
				<br/>
				<legend> &nbsp; </legend>
				<legend> Contenido </legend>
                <br/>
				<textarea id="contenido" name="contenido"> <?php echo $registros['contenido']; ?></textarea>
			</fieldset>
					
			<fieldset class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:#eee;margin-top:20px;text-align:center">
				<button type="submit" class="btn btn-default">Cargar</button>		
			</fieldset>
			
		</form>
	</body>
</html>