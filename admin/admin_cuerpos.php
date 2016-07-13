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

	if(acepto) document.form_cuerpos.submit();
}

function Enviar()
{
	document.form_cuerpos.submit();
}

</script>
<div class="row" style="background-color:#000;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">ADMINISTRAR CUERPOS DE CARROS</strong>
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
			 ($_FILES["imagen"]["type"] == "image/JPEG") || ($_FILES["imagen"]["type"] == "image/png") || ($_FILES["imagen"]["type"] == "image/PNG"))
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
	
						 while (file_exists("Archivos/Cuerpos/".$_FILES["imagen"]["name"]) && $_FILES["imagen"]["name"]) 
						 {
								 $extension = substr(strrchr($_FILES["imagen"]["name"], "."),1);
								 $_FILES["imagen"]["name"] = str_replace(".".$extension, "", $_FILES["imagen"]["name"]);
								 $_FILES["imagen"]["name"] = $_FILES["imagen"]["name"]."1.".$extension;
						 }
	

						 $imagen       = $_FILES["imagen"]["name"];
						 $nombre     = $_POST["nombre"];

						 if(isset($_POST["cuerpos_mod"]))
						 {
							 $res = $obj_cuerpos->Extraer_ID($_POST["cuerpos_mod"]);
							 $row = mysql_fetch_assoc($res);
							 unlink("Archivos/Cuerpos/".$row["IMAGEN"]);

								 if($obj_cuerpos->Modificar($_POST["cuerpos_mod"], $imagen, $nombre))
								 {
										  while(true) if(move_uploaded_file($_FILES["imagen"]["tmp_name"], "Archivos/Cuerpos/" . $_FILES["imagen"]["name"])) break;
									?>

									  <div class="row">
											<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
												<div class="alert alert-success">
													<strong>CUERPO DE CARRO MODIFICADO CON &Eacute;XITO.</strong>
												</div>
											</div>
									  </div>
									<?php
									$modifico = true;
									echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
								 }
						 }
						 else
						 {
								 if($obj_cuerpos->Registrar($imagen, $nombre))
								 {
										  while(true) if(move_uploaded_file($_FILES["imagen"]["tmp_name"], "Archivos/Cuerpos/" . $_FILES["imagen"]["name"])) break;
									?>
									  <div class="row">
											<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
												<div class="alert alert-success">
													<strong>CUERPO DE CARRO AGREGADO CON &Eacute;XITO.</strong>
												</div>
											</div>
									  </div>
									<?php
									echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
								 }
						 }
					 }
			 }
		}

if(isset($_POST["cuerpos_mod"]) && !$modifico)
{
	 $res = $obj_cuerpos->Extraer_ID($_POST["cuerpos_mod"]);
	 $row = mysql_fetch_assoc($res);

	 $imagen       = $row["IMAGEN"];
	 $nombre     = $_POST["nombre"];

	 if($obj_cuerpos->Modificar($_POST["cuerpos_mod"], $imagen, $nombre))
	 {
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-success">
						<strong>CUERPO DE CARRO MODIFICADO CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
	 }
}

if(isset($_POST["cuerpos_elm"]))
{
	 $res = $obj_cuerpos->Extraer_ID($_POST["cuerpos_elm"]);
	 $row = mysql_fetch_assoc($res);
     unlink("Archivos/Cuerpos/".$row["IMAGEN"]);

	 if($obj_cuerpos->Eliminar($_POST["cuerpos_elm"]))
	 {
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-danger">
						<strong>CUERPO ELIMINADO CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
	 }
}



if(isset($_POST["elm_cuerpos_select"]))
{
	$res = $obj_cuerpos->Extraer_ID($_POST["elm_cuerpos_select"]);
	
	$row = mysql_fetch_assoc($res);
?>
<form action="" method="post" enctype="multipart/form-data" id="form_cuerpos" name="form_cuerpos">
<div class="col-lg-4 col-md-2 col-sm-1">
</div>
<div class="col-lg-4 col-md-6 col-sm-10 col-xs-12">
<strong>Imagen del Cuerpo</strong><br />
<br />
<img src="Archivos/Cuerpos/<?php echo $row["IMAGEN"]; ?>" width="100%" />
<br />

<strong>Nombre del Cuerpo</strong><br />
<br />
<?php echo $row["NOMBRE"]; ?>

<br />
<br />
<br />
<input name="cuerpos_elm" type="hidden" id="cuerpos_elm" value="<?php echo $_POST["elm_cuerpos_select"]; ?>">

<?php
$res = $obj_publicaciones->Extraer_ID_Publicacion($_POST["elm_cuerpos_select"]);

if(mysql_num_rows($res) > 0)
{
?>
<strong style="font-size:18px;color:#F00">DEBE ELIMINAR TODAS LAS PUBLICACIONES QUE CONTIENE ESTE CUERPO DE CARRO ANTES DE ELIMINARLO.</strong>
<?php
}
else
{
?>
<strong style="font-size:18px;color:#F00">DESEA ELIMINAR EL CUERPO?</strong>
<br />
<input name="eliminar" class="btn btn-danger btn-lg" type="submit" id="eliminar" value="Eliminar" />
<?php
}
?>
<br />
<br />

</div>
<div class="col-lg-4 col-md-2 col-sm-1">
</div>
</form>
<?php
}
else if(isset($_POST["elm_cuerpos"]))
{
?>
<form action="" method="post" name="form_cuerpos" id="form_cuerpos">
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione Cuerpo a Eliminar</strong>
<br />
<br />

<select name="elm_cuerpos_select" id="elm_cuerpos_select" class="input-lg" onchange="Enviar()">
  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		<?php
        	$res = $obj_cuerpos->Extraer();
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
else if(isset($_POST["mod_cuerpos_select"]))
{
	$res = $obj_cuerpos->Extraer_ID($_POST["mod_cuerpos_select"]);
	
	$row = mysql_fetch_assoc($res);
?>
<form action="" method="post" enctype="multipart/form-data" id="form_cuerpos" name="form_cuerpos">
<div class="col-lg-4 col-md-2 col-sm-1">
</div>
<div class="col-lg-4 col-md-6 col-sm-10 col-xs-12">
<strong>Imagen del Cuerpo (120 x 50 ) Recomendado</strong><br />
<br />
<img src="Archivos/Cuerpos/<?php echo $row["IMAGEN"]; ?>" width="100%" />
<br />
<input class="input input-lg" name="imagen" type="file" id="imagen" /><br />
<div id="error_imagen"></div>
<br />
<br />

<strong>Nombre del Cuerpo</strong><br />
<br />
<input class="input input-lg" name="nombre" type="text" id="nombre" value="<?php echo $row["NOMBRE"]; ?>" /><br />
<div id="error_nombre"></div>
<br />
<br />
<br />
<input name="cuerpos_mod" type="hidden" id="cuerpos_mod" value="<?php echo $_POST["mod_cuerpos_select"]; ?>">

<input name="agregar" class="btn btn-warning btn-lg" type="button" id="agregar" value="Modificar" onclick="Revisar('mod')" />
<br />
<br />

</div>
<div class="col-lg-4 col-md-2 col-sm-1">
</div>
</form>
<?php
}
else if(isset($_POST["mod_cuerpos"]))
{
?>
<form action="" method="post" name="form_cuerpos" id="form_cuerpos">
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione Cuerpo a Modificar</strong>
<br />
<br />

<select name="mod_cuerpos_select" id="mod_cuerpos_select" class="input-lg" onchange="Enviar()">
  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		<?php
        	$res = $obj_cuerpos->Extraer();
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
else if(isset($_POST["agr_cuerpos"]))
{
?>
<form action="" method="post" enctype="multipart/form-data" id="form_cuerpos" name="form_cuerpos">
<div class="col-lg-4 col-md-2 col-sm-1">
</div>
<div class="col-lg-4 col-md-6 col-sm-10 col-xs-12">
<strong>Imagen del Cuerpo (120 x 50 ) Recomendado</strong><br />
<br />
<input class="input input-lg" name="imagen" type="file" id="imagen" /><br />
<div id="error_imagen"></div>
<br />
<br />

<strong>Nombre del Cuerpo</strong><br />
<br />
<input class="input input-lg" name="nombre" type="text" id="nombre" /><br />
<div id="error_nombre"></div>
<br />
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
<input name="agr_cuerpos" type="hidden" id="agr_cuerpos" value="">
<input name="agregar" class="btn btn-primary btn-lg" type="submit" id="agregar" value="Agregar">
<br>
<br>
</form>
</div>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="mod_cuerpos" type="hidden" id="mod_cuerpos" value="">
<input name="modificar" class="btn btn-warning btn-lg" type="submit" id="modificar" value="Modificar">
<br>
<br>
</form>
</div>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="elm_cuerpos" type="hidden" id="elm_cuerpos" value="">
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
