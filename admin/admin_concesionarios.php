<script>
function VerificarDatos(band)
{
	acepto = true;

	if(band == "agr")
	if(document.getElementById("logo").value == "")
	{
		acepto = false;
		document.getElementById("error_logo").innerHTML = "<div class='alert alert-danger'> DEBE SELECCIONAR UN LOGO </div>";
	}
	else
	{
		document.getElementById("error_logo").innerHTML = "";
	}


	if(document.getElementById("nombre").value == "")
	{
		acepto = false;
		document.getElementById("error_nombre").innerHTML = "<div class='alert alert-danger'> DEBE REGISTRAR UN NOMBRE </div>";
	}
	else
	{
		document.getElementById("error_nombre").innerHTML = "";
	}


	if(document.getElementById("direccion").value == "")
	{
		acepto = false;
		document.getElementById("error_direccion").innerHTML = "<div class='alert alert-danger'> DEBE REGISTRAR UNA DIRECCIÓN</div>";
	}
	else
	{
		document.getElementById("error_direccion").innerHTML = "";
	}

	if(document.getElementById("correo").value == "")
	{
		acepto = false;
		document.getElementById("error_correo").innerHTML = "<div class='alert alert-danger'> DEBE REGISTRAR UN CORREO </div>";
	}
	else
	{
		document.getElementById("error_correo").innerHTML = "";
	}

	if(acepto) document.form_concesionarios.submit();
}

function Modificar()
{
	acepto = true;
/*	if(document.getElementById("mod_concesionario_id").value == 0)
	{
		acepto = false;
		document.getElementById("mensaje_error").innerHTML = "<div class='alert alert-danger'> DEBE SELECCIONAR UN CONCESIONARIO </div>";
	}
	else
	{
		document.getElementById("mensaje_error").innerHTML = "";
	}
*/
	if(acepto) document.select_concesionario.submit();
}
</script>
<div class="row" style="background-color:#000;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">ADMINISTRAR CONCESIONARIOS</strong>
</div>
<br>
<br>
<div class="row">
<?php
$modifico = false;
		if(isset($_FILES['logo']['name']))
		if($_FILES['logo']['name'])
		{
			//echo "Hay Archivo";
		 if (($_FILES["logo"]["type"] == "image/jpeg")  || ($_FILES["logo"]["type"] == "image/jpg") || ($_FILES["logo"]["type"] == "image/JPG") || 
			 ($_FILES["logo"]["type"] == "image/JPEG") || ($_FILES["logo"]["type"] == "image/png") || ($_FILES["logo"]["type"] == "image/PNG"))
			 {
				 //if($_POST["mod_galeria"]) $g = 1;

					 if($_FILES["logo"]["name"])
					 {
						 $_FILES["logo"]["name"] = str_replace("á", "a", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("é", "e", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("í", "i", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("ó", "o", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("ú", "u", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("ä", "a", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("ë", "e", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("ï", "i", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("ö", "o", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("ü", "u", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("Á", "A", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("É", "E", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("Í", "I", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("Ó", "O", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("Ú", "U", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("Ä", "A", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("Ë", "E", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("Ï", "I", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("Ö", "O", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("Ü", "U", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("¨", "", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("´", "", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace("`", "", $_FILES["logo"]["name"]);
						 $_FILES["logo"]["name"] = str_replace(" ", "", $_FILES["logo"]["name"]);
	
						 while (file_exists("Archivos/Concesionarios/".$_FILES["logo"]["name"]) && $_FILES["logo"]["name"]) 
						 {
								 $extension = substr(strrchr($_FILES["logo"]["name"], "."),1);
								 $_FILES["logo"]["name"] = str_replace(".".$extension, "", $_FILES["logo"]["name"]);
								 $_FILES["logo"]["name"] = $_FILES["logo"]["name"]."1.".$extension;
						 }
	
						 if($_FILES["logo"]["name"])
						 {
							 while(true)
							 {
								 if(move_uploaded_file($_FILES["logo"]["tmp_name"], "Archivos/Concesionarios/" . $_FILES["logo"]["name"]))
								 {
									 break;
								 }
							 }
						 }

						 $logo       = $_FILES["logo"]["name"];
						 $nombre     = $_POST["nombre"];
						 $direccion  = $_POST["direccion"];
						 $oficina    = $_POST["oficina"];
						 $celular    = "";//$_POST["celular"];
						 $correo     = $_POST["correo"];
						 $googlemap  = $_POST["googlemap"];

						 if(isset($_POST["concesionario_mod"]))
						 {
							 $res = $obj_concesionarios->Extraer_ID($_POST["concesionario_mod"]);
							 $row = mysql_fetch_assoc($res);
							 if($row["LOGO"])
							 @unlink("Archivos/Concesionarios/".$row["LOGO"]);

								 if($obj_concesionarios->Modificar($_POST["concesionario_mod"], $logo, $nombre, $direccion, $oficina, $celular, $correo, $googlemap))
								 {
									?>
									  <div class="row">
											<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
												<div class="alert alert-success">
													<strong>CONCESIONARIO MODIFICADO CON &Eacute;XITO.</strong>
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
								 if($obj_concesionarios->Registrar($logo, $nombre, $direccion, $oficina, $celular, $correo, $googlemap))
								 {
									?>
									  <div class="row">
											<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
												<div class="alert alert-success">
													<strong>CONCESIONARIO AGREGADO CON &Eacute;XITO.</strong>
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

if(isset($_POST["concesionario_mod"]) && !$modifico)
{
	 $res = $obj_concesionarios->Extraer_ID($_POST["concesionario_mod"]);
	 $row = mysql_fetch_assoc($res);

	 $logo       = $row["LOGO"];
	 $nombre     = $_POST["nombre"];
	 $direccion  = $_POST["direccion"];
	 $oficina    = $_POST["oficina"];
	 $celular    = "";//$_POST["celular"];
	 $correo     = $_POST["correo"];
	 $googlemap  = $_POST["googlemap"];

	 if($obj_concesionarios->Modificar($_POST["concesionario_mod"], $logo, $nombre, $direccion, $oficina, $celular, $correo, $googlemap))
	 {
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-success">
						<strong>CONCESIONARIO MODIFICADO CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
	 }
}

if(isset($_POST["concesionario_elm"]))
{
	 $res = $obj_concesionarios->Extraer_ID($_POST["concesionario_elm"]);
	 $row = mysql_fetch_assoc($res);
     unlink("Archivos/Concesionarios/".$row["LOGO"]);

	 if($obj_concesionarios->Eliminar($_POST["concesionario_elm"]))
	 {
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-danger">
						<strong>CONCESIONARIO ELIMINADO CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
	 }
}



if(isset($_POST["elm_concesionario_id"]))
{
	$res = $obj_concesionarios->Extraer_ID($_POST["elm_concesionario_id"]);
	
	$row = mysql_fetch_assoc($res);
?>
<form action="" method="post" enctype="multipart/form-data" name="form_concesionarios" id="form_concesionarios">
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

<table class="table table-hover table-striped table-bordered" width="100%">
<thead style="background-color:#999;width:100%">
<td colspan="2">
<strong style="color:#FFF;font-size:16px">DATOS CONCESIONARIO</strong>
</td>
</thead>
<tr>
    <td>
    <strong style="font-size:16px">Logo del Concesionario</strong>
    </td>
    
    <td>
    <img src="Archivos/Concesionarios/<?php echo $row["LOGO"]; ?>" width="100%" />
    </td>

</tr>


<tr>

    <td>
    <strong style="font-size:16px">Nombre del Concesionario:</strong>
    </td>
    
    <td>
    <?php echo $row["NOMBRE"]; ?>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Dirección del Concesionario:</strong>
    </td>
    
    <td>
	<?php echo $row["DIRECCION"]; ?>
    </td>

</tr>


<tr>

    <td>
    <strong style="font-size:16px">Contacto Oficina del Concesionario:</strong>
    </td>
    
    <td>
    <?php echo $row["OFICINA"]; ?>
    </td>

</tr>


<!--
<tr>

    <td>
    <strong style="font-size:16px">Contacto Celular del Concesionario:</strong>
    </td>
    
    <td>
    <?php//echo $row["CELULAR"]; ?>
    </td>

</tr>
-->

<tr>

    <td>
    <strong style="font-size:16px">Correo del Concesionario:</strong>
    </td>
    
    <td>
    <?php echo $row["CORREO"]; ?>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Google Map del Concesionario:</strong>
    </td>
    
    <td>
    <?php echo $row["GOOGLEMAP"]; ?>
    </td>

</tr>


</table>
<input name="concesionario_elm" type="hidden" id="concesionario_elm" value="<?php echo $_POST["elm_concesionario_id"]; ?>">
<br />
<?php
$res = $obj_marcas->Extraer_ID_Concesionario($_POST["elm_concesionario_id"]);

if(mysql_num_rows($res) > 0)
{
?>
<strong style="font-size:18px;color:#F00">DEBE ELIMINAR TODAS LAS MARCAS QUE ADMINISTRA ESTE CONCESIONARIO ANTES DE ELIMINARLO.</strong>
<?php
}
else
{
?>
<strong style="font-size:18px;color:#F00">DESEA ELIMINAR EL CONCESIONARIO?</strong>
<br />
<input name="eliminar" class="btn btn-danger btn-lg" type="submit" id="eliminar" value="Eliminar" />
<?php
}
?>
<br />
<br />
</div>

</form>
<?php
}
else if(isset($_POST["elm_concesionario"]))
{
?>
<form action="" method="post" name="select_concesionario" id="select_concesionario">
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione Concesionario a Eliminar</strong>
<br />
<br />

<select name="elm_concesionario_id" id="elm_concesionario_id" class="input-lg" onchange="Modificar()">
  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		<?php
        	$res = $obj_concesionarios->Extraer();
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
else if(isset($_POST["mod_concesionario_id"]))
{
	$res = $obj_concesionarios->Extraer_ID($_POST["mod_concesionario_id"]);
	
	$row = mysql_fetch_assoc($res);
?>
<form action="" method="post" enctype="multipart/form-data" name="form_concesionarios" id="form_concesionarios">
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

<table class="table table-hover table-striped table-bordered" width="100%">
<thead style="background-color:#999;width:100%">
<td colspan="2">
<strong style="color:#FFF;font-size:16px">DATOS CONCESIONARIO</strong>
</td>
</thead>
<tr>
    <td>
    <strong style="font-size:16px">Logo del Concesionario</strong>
    </td>
    
    <td>
    <img src="Archivos/Concesionarios/<?php echo $row["LOGO"]; ?>" width="100%" />
    <input name="logo" id="logo" type="file" style="width:100%" />
    <div id="error_logo"></div>
    </td>

</tr>


<tr>

    <td>
    <strong style="font-size:16px">Nombre del Concesionario:</strong>
    </td>
    
    <td>
    <input name="nombre" type="text" class="input-lg" id="nombre" value="<?php echo $row["NOMBRE"]; ?>" />
    <div id="error_nombre"></div>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Dirección del Concesionario:</strong>
    </td>
    
    <td><textarea name="direccion" class="input-lg" id="direccion" style="width:100%"><?php echo $row["DIRECCION"]; ?></textarea>
    <div id="error_direccion"></div>
    </td>

</tr>


<tr>

    <td>
    <strong style="font-size:16px">Contacto Oficina del Concesionario:</strong>
    </td>
    
    <td>
    <input name="oficina" type="text" class="input-lg" id="oficina" value="<?php echo $row["OFICINA"]; ?>" />
    </td>

</tr>

<!--
<tr>

    <td>
    <strong style="font-size:16px">Contacto Celular del Concesionario:</strong>
    </td>
    
    <td>
    <input name="celular" type="text" class="input-lg" id="celular" value="<?php// echo $row["CELULAR"]; ?>" />
    </td>

</tr>
-->

<tr>

    <td>
    <strong style="font-size:16px">Correo del Concesionario:</strong>
    </td>
    
    <td>
    <input name="correo" type="text" class="input-lg" id="correo" value="<?php echo $row["CORREO"]; ?>" />
    <div id="error_correo"></div>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Google Map del Concesionario:</strong>
    </td>
    
    <td>
    <textarea name="googlemap" onclick="this.select()" class="input-lg" id="googlemap" style="width:100%"><?php echo $row["GOOGLEMAP"]; ?></textarea>
    </td>

</tr>


</table>
<input name="concesionario_mod" type="hidden" id="concesionario_mod" value="<?php echo $_POST["mod_concesionario_id"]; ?>">
<br />
<br />
<input name="modificar" class="btn btn-warning btn-lg" type="button" id="modificar" value="Modificar" onclick="VerificarDatos('mod')" />
<br />
<br />
</div>

</form>
<?php
}
else if(isset($_POST["mod_concesionario"]))
{
?>
<form action="" method="post" name="select_concesionario" id="select_concesionario">
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione Concesionario a Modificar</strong>
<br />
<br />

<select name="mod_concesionario_id" id="mod_concesionario_id" class="input-lg" onchange="Modificar()">
  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		<?php
        	$res = $obj_concesionarios->Extraer();
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
else if(isset($_POST["agr_concesionario"]))
{
?>
<form action="" method="post" enctype="multipart/form-data" name="form_concesionarios" id="form_concesionarios">
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

<table class="table table-hover table-striped table-bordered" width="100%">
<thead style="background-color:#999;width:100%">
<td colspan="2">
<strong style="color:#FFF;font-size:16px">DATOS CONCESIONARIO</strong>
</td>
</thead>
<tr>
    <td>
    <strong style="font-size:16px">Logo del Concesionario</strong>
    </td>
    
    <td>
    <input name="logo" id="logo" type="file" style="width:100%" />
    <div id="error_logo"></div>
    </td>

</tr>


<tr>

    <td>
    <strong style="font-size:16px">Nombre del Concesionario:</strong>
    </td>
    
    <td>
    <input name="nombre" id="nombre" type="text" class="input-lg" list="nombres" autocomplete="off" />
<datalist id="nombres">
<?php
$res = $obj_concesionarios->Extraer();
while($row = mysql_fetch_assoc($res))
{
?>
	<option value="<?php echo $row["NOMBRE"]; ?>">
<?php
}
?>
	<!--<option value="United Kingdom">
	<option value="United States">
	<option value="Vanuatu">
	<option value="Vatican City">
	<option value="Yemen">
	<option value="Zambia">
	<option value="Zimbabwe">-->
</datalist>
    <div id="error_nombre"></div>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Dirección del Concesionario:</strong>
    </td>
    
    <td>
    <textarea name="direccion" class="input-lg" id="direccion" style="width:100%"></textarea>
    <div id="error_direccion"></div>
    </td>

</tr>


<tr>

    <td>
    <strong style="font-size:16px">Contacto Oficina del Concesionario:</strong>
    </td>
    
    <td>
    <input name="oficina" id="oficina" type="text" class="input-lg" />
    </td>

</tr>

<!--
<tr>

    <td>
    <strong style="font-size:16px">Contacto Celular del Concesionario:</strong>
    </td>
    
    <td>
    <input name="celular" id="celular" type="text" class="input-lg" />
    </td>

</tr>
-->

<tr>

    <td>
    <strong style="font-size:16px">Correo del Concesionario:</strong>
    </td>
    
    <td>
    <input name="correo" id="correo" type="text" class="input-lg" />
    <div id="error_correo"></div>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Google Map del Concesionario:</strong>
    </td>
    
    <td><textarea name="googlemap" class="input-lg" id="googlemap" style="width:100%"></textarea>
    </td>

</tr>


</table>
<br />
<br />
<input name="agregar" class="btn btn-primary btn-lg" type="button" id="agregar" value="Agregar" onclick="VerificarDatos('agr')" />
<br />
<br />
</div>

</form>
<?php
}
else
{
?>
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="agr_concesionario" type="hidden" id="agr_concesionario" value="">
<input name="agregar" class="btn btn-primary btn-lg" type="submit" id="agregar" value="Agregar">
<br>
<br>
</form>
</div>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="mod_concesionario" type="hidden" id="mod_concesionario" value="">
<input name="modificar" class="btn btn-warning btn-lg" type="submit" id="modificar" value="Modificar">
<br>
<br>
</form>
</div>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="elm_concesionario" type="hidden" id="elm_concesionario" value="">
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
