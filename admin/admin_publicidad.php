<script>
function Revisar(band)
{
	var acepto = true;
	
	if(band == "agr")
	if(document.getElementById("imagen").value == "")
	{
		acepto = false;
		document.getElementById("error_imagen").innerHTML = "<div class='alert alert-danger'>DEBE SELECCIONAR UNA IMAGEN</div>";
	}
	else
	{
		document.getElementById("error_imagen").innerHTML = "";
	}

	if(document.getElementById("nombre").value == "")
	{
		acepto = false;
		document.getElementById("error_nombre").innerHTML = "<div class='alert alert-danger'>DEBE REGISTRAR UN NOMBRE</div>";
	}
	else
	{
		document.getElementById("error_nombre").innerHTML = "";
	}

	if(acepto) document.form_publicidad.submit();
}

function Enviar()
{
	document.form_publicidad.submit();
}

</script>
<div class="row" style="background-color:#000;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">ADMINISTRAR PUBLICIDAD</strong>
</div>
<br>
<br>
<div class="row">
<?php
$modifico = false;
		if(isset($_FILES['imagen']['name']))
		if($_FILES['imagen']['name'])
		{
			//echo "Hay Archivo";
		 if (($_FILES["imagen"]["type"] == "image/jpeg")  || ($_FILES["imagen"]["type"] == "image/jpg") || ($_FILES["imagen"]["type"] == "image/JPG") || 
			 ($_FILES["imagen"]["type"] == "image/JPEG") || ($_FILES["imagen"]["type"] == "image/png") || ($_FILES["imagen"]["type"] == "image/PNG") || ($_FILES["imagen"]["type"] == "image/GIF") || ($_FILES["imagen"]["type"] == "image/gif"))
			 {
				 //if($_POST["mod_galeria"]) $g = 1;

					 if($_FILES["imagen"]["name"])
					 {
						 $_FILES["imagen"]["name"] = str_replace("á", "a", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("é", "e", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("í", "i", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("ó", "o", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("ú", "u", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("ä", "a", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("ë", "e", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("ï", "i", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("ö", "o", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("ü", "u", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("Á", "A", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("É", "E", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("Í", "I", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("Ó", "O", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("Ú", "U", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("Ä", "A", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("Ë", "E", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("Ï", "I", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("Ö", "O", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("Ü", "U", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("¨", "", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("´", "", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace("`", "", $_FILES["imagen"]["name"]);
						 $_FILES["imagen"]["name"] = str_replace(" ", "", $_FILES["imagen"]["name"]);
	
						 while (file_exists("Archivos/Header/".$_FILES["imagen"]["name"]) && $_FILES["imagen"]["name"]) 
						 {
								 $extension = substr(strrchr($_FILES["imagen"]["name"], "."),1);
								 $_FILES["imagen"]["name"] = str_replace(".".$extension, "", $_FILES["imagen"]["name"]);
								 $_FILES["imagen"]["name"] = $_FILES["imagen"]["name"]."1.".$extension;
						 }
	

						 $imagen     = $_FILES["imagen"]["name"];
						 $nombre     = $_POST["nombre"];
						 $enlace     = $_POST["enlace"];

						 if($obj_publicidad->Registrar($imagen, $nombre, $enlace))
						 {
								  while(true) if(move_uploaded_file($_FILES["imagen"]["tmp_name"], "Archivos/Header/" . $_FILES["imagen"]["name"])) break;
							?>
							  <div class="row">
									<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
										<div class="alert alert-success">
											<strong>PUBLICIDAD AGREGADA CON &Eacute;XITO.</strong>
										</div>
									</div>
							  </div>
							<?php
							echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
						 }
					 }
			 }
		}

if(isset($_POST["publicidad_elm"]))
{
	 $res = $obj_publicidad->Extraer_ID($_POST["publicidad_elm"]);
	 $row = mysql_fetch_assoc($res);
     @unlink("Archivos/Header/".$row["IMAGEN"]);

	 if($obj_publicidad->Eliminar($_POST["publicidad_elm"]))
	 {
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-danger">
						<strong>PUBLICIDAD ELIMINADA CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
	 }
}



if(isset($_POST["elm_publicidad_select"]))
{
	$res = $obj_publicidad->Extraer_ID($_POST["elm_publicidad_select"]);
	
	$row = mysql_fetch_assoc($res);
?>
<form action="" method="post" enctype="multipart/form-data" id="form_publicidad" name="form_publicidad">
<div class="col-lg-4 col-md-2 col-sm-1">
</div>
<div class="col-lg-4 col-md-6 col-sm-10 col-xs-12">
<strong>Imagen de la Publicidad</strong><br />
<br />
<img src="Archivos/Header/<?php echo $row["IMAGEN"]; ?>" width="100%" />
<br />

<strong>Nombre de la Publicidad</strong><br />
<br />
<?php echo $row["NOMBRE"]; ?>

<br />
<br />
<br />
<input name="publicidad_elm" type="hidden" id="publicidad_elm" value="<?php echo $_POST["elm_publicidad_select"]; ?>">
<strong style="font-size:18px;color:#F00">DESEA ELIMINAR LA PUBLICIDAD?</strong>
<br />
<input name="eliminar" class="btn btn-danger btn-lg" type="submit" id="eliminar" value="Eliminar" />
<br />
<br />

</div>
<div class="col-lg-4 col-md-2 col-sm-1">
</div>
</form>
<?php
}
else if(isset($_POST["elm_publicidad"]))
{
?>
<form action="" method="post" name="form_publicidad" id="form_publicidad">
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione Publicidad a Eliminar</strong>
<br />
<br />

<select name="elm_publicidad_select" id="elm_publicidad_select" class="input-lg" onchange="Enviar()">
  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		<?php
        	$res = $obj_publicidad->Extraer();
			while($row = mysql_fetch_assoc($res))
			{
        ?>
          		<option value="<?php echo $row["ID"]; ?>"><?php echo $row["NOMBRE"]; ?></option>
        <?php
			}
        ?>
</select>

<div id="mensaje_error"></div>
<br />
<br />
</div>
</form>
<?php
}
else if(isset($_POST["agr_publicidad"]))
{
?>
<form action="" method="post" enctype="multipart/form-data" id="form_publicidad" name="form_publicidad">
<div class="col-lg-4 col-md-2 col-sm-1">
</div>
<div class="col-lg-4 col-md-6 col-sm-10 col-xs-12">
<strong>Imagen de la publicidad (1000 x 250 ) Recomendado</strong><br />
<br />
<input class="input input-lg" name="imagen" type="file" id="imagen" /><br />
<div id="error_imagen"></div>
<br />
<br />
<strong>Nombre</strong><br />
<br />
<input class="input input-lg" name="nombre" type="text" id="nombre" /><br />
<div id="error_nombre"></div>
<br />
<br />

<strong>Enlace</strong><br />
<br />
<input class="input input-lg" name="enlace" type="text" id="enlace" /><br />
<div id="error_enlace"></div>
<br />
<br />

<input name="agregar" class="btn btn-primary btn-lg" type="button" id="agregar" value="Agregar" onclick="Revisar('agr')" />
<br />
<br />

</div>
<div class="col-lg-4 col-md-2 col-sm-1">
</div>
</form>
<?php
}
else
{
?>
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="agr_publicidad" type="hidden" id="agr_publicidad" value="">
<input name="agregar" class="btn btn-primary btn-lg" type="submit" id="agregar" value="Agregar">
<br>
<br>
</form>
</div>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="elm_publicidad" type="hidden" id="elm_publicidad" value="">
<input name="Eliminar" class="btn btn-danger btn-lg" type="submit" id="Eliminar" value="Eliminar">
<br>
<br>
</form>
</div>
<?php
}
?>
</div>

<br>
<br>
<br>
