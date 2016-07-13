<link href="Validacion_Usuario/styles.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Validacion_Usuario/jquery-1.3.2.js"></script>
<script type="text/javascript">
$(document).ready(function() {    
    $('#usuarioGerente').blur(function(){

        $('#Info').html('<img src="Validacion_Usuario/loader.gif" alt="" />').fadeOut(1000);

        var username = $(this).val();        
        var dataString = 'usuarioGerente='+username;

        $.ajax({
            type: "POST",
            url: "verificar_usuario.php",
            data: dataString,
            success: function(data) {
                $('#Info').fadeIn(1000).html(data);
            }
        });
    });
});
</script>

<script>

function VerificarDatos(band)
{
	acepto = true;

	if(band == "agr")
	if(document.getElementById("logo").value == "")
	{
		acepto = false;
		document.getElementById("error_logo").innerHTML = "<div class='alert alert-danger'> DEBE REGISTRAR UN LOGO </div>";
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

	if(acepto) document.form_modelos.submit();
}

function Enviar()
{
	document.form_modelos.submit();
}
</script>

<div class="row" style="background-color:#000;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">ADMINISTRAR MODELOS</strong>
</div>
<br>
<br>
<div class="row">
<?php
$modifico = false;
		if(isset($_FILES['logo']['name']))
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
	
						 while (file_exists("Archivos/Modelos/".$_FILES["logo"]["name"]) && $_FILES["logo"]["name"]) 
						 {
								 $extension = substr(strrchr($_FILES["logo"]["name"], "."),1);
								 $_FILES["logo"]["name"] = str_replace(".".$extension, "", $_FILES["logo"]["name"]);
								 $_FILES["logo"]["name"] = $_FILES["logo"]["name"]."1.".$extension;
						 }


						 $logo   = $_FILES["logo"]["name"];
						 $nombre = $_POST["nombre"];

						 if(isset($_POST["modelos_mod_id"]))
						 {
							 $res = $obj_modelos->Extraer_Modelo($_POST["modelos_mod_id"]);
							 $row = mysql_fetch_assoc($res);

							 $logo = $row["LOGO"];
							 if($_FILES["logo"]["name"])
							 {
								 $logo = $_FILES["logo"]["name"];
								 @unlink("Archivos/Modelos/".$row["LOGO"]);
							 }
	
								 if($obj_modelos->Modificar($_POST["modelos_mod_id"], $logo, $nombre))
								 {
									  while(true) if(move_uploaded_file($_FILES["logo"]["tmp_name"], "Archivos/Modelos/" . $_FILES["logo"]["name"])) break;
									?>
									  <div class="row">
											<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
												<div class="alert alert-success">
													<strong>MODELO MODIFICADO CON &Eacute;XITO.</strong>
												</div>
											</div>
									  </div>
									<?php
									echo @"<META HTTP-EQUIV='refresh' CONTENT='0; URL=modelos.php?modificacion'>";
									$modifico = true;
								 }
						 }
						 else
						 {
							if($obj_modelos->Registrar($_POST["id_marca"], $logo, $nombre))
						 	{
								 if($_FILES["logo"]["name"])
								 {
									  while(true) if(move_uploaded_file($_FILES["logo"]["tmp_name"], "Archivos/Modelos/" . $_FILES["logo"]["name"])) break;
								 }

									?>
									  <div class="row">
											<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
												<div class="alert alert-success">
													<strong>MODELO REGISTRADO CON &Eacute;XITO.</strong>
												</div>
											</div>
									  </div>
									<?php
									echo @"<META HTTP-EQUIV='refresh' CONTENT='0; URL=modelos.php'>";
							}
						 }
					 }
			 }
		}


if(isset($_GET['registro']))
{
?>
  <div class="row">
		<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
			<div class="alert alert-success">
				<strong>MODELO REGISTRADO CON &Eacute;XITO.</strong>
			</div>
		</div>
  </div>
<?php
echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=modelos.php'>";
}

if(isset($_GET['modificacion']))
{
?>
  <div class="row">
		<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
			<div class="alert alert-success">
				<strong>MODELO MODIFICADO CON &Eacute;XITO.</strong>
			</div>
		</div>
  </div>
<?php
echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=modelos.php'>";
}

if(isset($_GET['eliminar']))
{
?>
      <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
                <div class="alert alert-danger">
                    <strong>MODELO ELIMINADO CON &Eacute;XITO.</strong>
                </div>
            </div>
      </div>
<?php
echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
}


if(isset($_POST["modelos_mod_id"]) && !$modifico)
{
	 $res = $obj_modelos->Extraer_Modelo($_POST["modelos_mod_id"]);
	 $row = mysql_fetch_assoc($res);

	 $logo   = $row["LOGO"];
	 $nombre = $_POST["nombre"];

	 if($obj_modelos->Modificar($_POST["modelos_mod_id"], $logo, $nombre))
	 {
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-success">
						<strong>MODELO MODIFICADO CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
			echo @"<META HTTP-EQUIV='refresh' CONTENT='0; URL=modelos.php?modificacion'>";
	 }
}


if(isset($_POST["modelos_elm_id"]))
{
	 $res = $obj_modelos->Extraer_Modelo($_POST["modelos_elm_id"]);
	 $row = mysql_fetch_assoc($res);

	 if($obj_modelos->Eliminar($_POST["modelos_elm_id"]))
	 {
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-danger">
						<strong>MODELO ELIMINADO CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='0; URL=modelos.php?eliminar'>";
	 }
}



if(isset($_POST["modelo_id_elm"]))
{
	$res = $obj_marcas->Extraer_Marca($_POST["marcas_id_modelos_elm"]);

	$row = mysql_fetch_assoc($res);

	$logo = $row["LOGO"];

	$res = $obj_modelos->Extraer_Modelo($_POST["modelo_id_elm"]);

	$row = mysql_fetch_assoc($res);
?>
<form action="" method="post" enctype="multipart/form-data" name="form_modelos" id="form_marcas">

<input name="marcas_id_modelos_elm" type="hidden" id="marcas_id_modelos_elm" value="<?php echo $_POST["marcas_id_modelos_elm"]; ?>">
<input name="modelos_elm_id" type="hidden" id="modelos_mod_id" value="<?php echo $_POST["modelo_id_elm"]; ?>">

<div class="col-lg-3 col-md-3">
</div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<br />
<br />
<img src="Archivos/Marcas/<?php echo $logo; ?>" width="100%" />
<br />
<br />
<table class="table table-hover table-striped table-bordered" width="100%">

<thead style="background-color:#999">
<td colspan="2">
<strong style="color:#FFF;font-size:16px">DATOS DEL MODELO</strong>
</td>
</thead>
<tr>

    <td>
    <strong style="font-size:16px">Logo del Modelo</strong>
    </td>
    
    <td>
	<img src="Archivos/Modelos/<?php echo $row["LOGO"]; ?>" width="100%" />
    <div id="error_logo"></div>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Nombre del Modelo:</strong>
    </td>
    
    <td>
    <?php echo $row["NOMBRE"]; ?>
    <div id="error_nombre"></div>
    </td>

</tr>

</table>
<br />
<br />
<?php
$res = $obj_publicaciones->Extraer_ID_Modelos($_POST["modelo_id_elm"]);

if(mysql_num_rows($res) > 0)
{
?>
<strong style="font-size:18px;color:#F00">DEBE ELIMINAR TODAS LAS PUBLICACIONES QUE ADMINISTRA ESTE MODELO ANTES DE ELIMINARLO.</strong>
<?php
}
else
{
?>
<strong style="font-size:18px;color:#F00">DESEA ELIMINAR EL MODELO?</strong>
<br />
<input name="eliminar" class="btn btn-danger btn-lg" type="submit" id="eliminar" value="Eliminar" />
<?php
}
?>
<br />
<br />

</div>
<div class="col-lg-3 col-md-3">
</div>
</form>
<?php
}
else if(isset($_POST["marca_id_elm"]))
{
?>
<form action="" method="post" name="form_modelos" id="form_modelos">
<div class="col-lg-3 col-md-2">
</div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione el Modelo a Eliminar:</strong>
<br />
<br />

<select name="modelo_id_elm" id="modelo_id_elm" class="input-lg" onchange="Enviar()">
  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		<?php
        	$res = $obj_modelos->Extraer_Modelos_Marca($_POST["marca_id_elm"]);
			while($row = mysql_fetch_assoc($res))
			{
        ?>
          		<option value="<?php echo $row["ID"]; ?>"><?php echo $row["NOMBRE"]; ?></option>
        <?php
			}
        ?>
</select>
<input name="marcas_id_modelos_elm" type="hidden" id="marcas_id_modelos_elm" value="<?php echo $_POST["marca_id_elm"]; ?>">

<div id="mensaje_error"></div>
<br />
<br />
</div>
<div class="col-lg-3 col-md-2">
</div>
</form>
<?php
}
else if(isset($_POST["elm_modelo"]))
{
?>
<form action="" method="post" name="form_modelos" id="form_modelos">
<div class="col-lg-3 col-md-2">
</div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione la Marca donde se encuentra el Modelo a Eliminar:</strong>
<br />
<br />

<select name="marca_id_elm" id="marca_id_elm" class="input-lg" onchange="Enviar()">
  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		<?php
        	$res = $obj_marcas->Extraer();
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
<div class="col-lg-3 col-md-2">
</div>
</form>
<?php
}
else if(isset($_POST["modelo_id_mod"]))
{
	$res = $obj_marcas->Extraer_Marca($_POST["marcas_id_modelos"]);

	$row = mysql_fetch_assoc($res);

	$logo = $row["LOGO"];

	$res = $obj_modelos->Extraer_Modelo($_POST["modelo_id_mod"]);

	$row = mysql_fetch_assoc($res);
?>
<form action="" method="post" enctype="multipart/form-data" name="form_modelos" id="form_modelos">

<input name="marcas_id_modelos" type="hidden" id="marcas_id_modelos" value="<?php echo $_POST["marcas_id_modelos"]; ?>">
<input name="modelos_mod_id" type="hidden" id="modelos_mod_id" value="<?php echo $_POST["modelo_id_mod"]; ?>">

<div class="col-lg-3 col-md-3">
</div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<br />
<br />
<br />
<br />
<table class="table table-hover table-striped table-bordered" width="100%">
<tr style="background-color:#000">
<td>
<strong style="color:#FFF;font-size:16px">MARCA DEL MODELO A MODIFICAR</strong>
</td>
</tr>
<tr>
    <td>
<img src="Archivos/Marcas/<?php echo $logo; ?>" width="100%" />
    <div id="error_logo"></div>
    </td>

</tr>

<tr style="background-color:#999">
<td colspan="2">
<strong style="color:#FFF;font-size:16px">DATOS DEL MODELO</strong>
</td>
</tr>

<tr style="background-color:#999">
    <td>
    <strong style="font-size:16px">Foto del Modelo del carro: </strong><br />
    </td>
</tr>

<tr>
    <td>
	<img src="Archivos/Modelos/<?php echo $row["LOGO"]; ?>" width="100%" />
    <input name="logo" id="logo" type="file" />
    <div id="error_logo"></div>
    </td>

</tr>

<tr style="background-color:#999">
    <td>
    <strong style="font-size:16px">Nombre del Modelo:</strong>
    </td>
</tr>

<tr>
    <td>
    <input name="nombre" type="text" class="input-lg" id="nombre" value="<?php echo $row["NOMBRE"]; ?>" />
    <div id="error_nombre"></div>
    </td>

</tr>

</table>
<br />
<br />
<input name="agregar" class="btn btn-warning btn-lg" type="button" id="agregar" value="Modificar" onclick="VerificarDatos('mod')" />
<br />
<br />

</div>
<div class="col-lg-3 col-md-3">
</div>
</form>
<?php
}
else if(isset($_POST["marca_id_mod"]))
{
?>
<form action="" method="post" name="form_modelos" id="form_modelos">
<div class="col-lg-3 col-md-2">
</div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione el Modelo a Modificar:</strong>
<br />
<br />

<select name="modelo_id_mod" id="modelo_id_mod" class="input-lg" onchange="Enviar()">
  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		<?php
        	$res = $obj_modelos->Extraer_Modelos_Marca($_POST["marca_id_mod"]);
			while($row = mysql_fetch_assoc($res))
			{
        ?>
          		<option value="<?php echo $row["ID"]; ?>"><?php echo $row["NOMBRE"]; ?></option>
        <?php
			}
        ?>
</select>
<input name="marcas_id_modelos" type="hidden" id="marcas_id_modelos" value="<?php echo $_POST["marca_id_mod"]; ?>">

<div id="mensaje_error"></div>
<br />
<br />
</div>
<div class="col-lg-3 col-md-2">
</div>
</form>
<?php
}
else if(isset($_POST["mod_modelo"]))
{
?>
<form action="" method="post" name="form_modelos" id="form_modelos">
<div class="col-lg-3 col-md-2">
</div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione la Marca donde se encuentra el Modelo a Modificar:</strong>
<br />
<br />

<select name="marca_id_mod" id="marca_id_mod" class="input-lg" onchange="Enviar()">
  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		<?php
        	$res = $obj_marcas->Extraer();
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
<div class="col-lg-3 col-md-2">
</div>
</form>
<?php
}
else if(isset($_POST["marca_id"]))
{
	$res = $obj_marcas->Extraer_Marca($_POST["marca_id"]);
	
	$row = mysql_fetch_assoc($res);
?>
<form action="" method="post" enctype="multipart/form-data" name="form_modelos" id="form_modelos">

<input name="id_marca" type="hidden" id="id_marca" value="<?php echo $_POST["marca_id"]; ?>">

<div class="col-lg-3 col-md-3">
</div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<br />
<br />
<br />
<br />
<table class="table table-hover table-striped table-bordered" width="100%">

<thead style="background-color:#000">
<td>
<strong style="color:#FFF;font-size:16px">MARCA A LA CUAL SE VA AGREGAR EL MODELO</strong>
</td>
</thead>
<tr>
    <td>
<img src="Archivos/Marcas/<?php echo $row["LOGO"]; ?>" width="100%" />
    <div id="error_logo"></div>
    </td>

</tr>

<tr style="background-color:#999">
<td colspan="2">
<strong style="color:#FFF;font-size:16px">DATOS DEL MODELO</strong>
</td>
</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Foto del Modelo del carro: </strong><br />
    </td>
</tr>

<tr>
    <td>
    <input name="logo" id="logo" type="file" />
    <div id="error_logo"></div>
    </td>
</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Nombre del Modelo del Carro:</strong>
    </td>
</tr>

<tr>
    <td>
    <input name="nombre" type="text" class="input-lg" id="nombre" value="" />
    <div id="error_nombre"></div>
    </td>
</tr>

</table>
<br />
<br />

<input name="agregar" class="btn btn-primary btn-lg" type="button" id="agregar" value="Agregar" onclick="VerificarDatos('agr')" />
<br />
<br />

</div>
<div class="col-lg-3 col-md-3">
</div>
</form>
<?php
}
else if(isset($_POST["agr_modelo"]))
{
?>
<form action="" method="post" name="form_modelos" id="form_modelos">
<div class="col-lg-3 col-md-2">
</div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione la Marca al que desea registrar el Modelo:</strong>
<br />
<br />

<select name="marca_id" id="marca_id" class="input-lg" onchange="Enviar()">
  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		<?php
        	$res = $obj_marcas->Extraer();
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
<div class="col-lg-3 col-md-2">
</div>
</form>
<?php
}
else
{
?>
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="modelos.php" method="post" id="enviar" name="enviar">
<?php
	if($_SESSION['tipo_usuario'] == 2)
	{

		$res = $obj_marcas->Extraer_Informacion_Usuario($_SESSION["username"]);
		
		$row = mysql_fetch_assoc($res);
	
		$idmarca   = $row["IDMAR"];
?>
	<input name="marca_id" type="hidden" id="marca_id" value="<?php echo $idmarca; ?>">
<?php
	}
	else
	{
?>
	<input name="agr_modelo" type="hidden" id="agr_modelo" value="">
<?php
	}
?>
<input name="agregar" class="btn btn-primary btn-lg" type="submit" id="agregar" value="Agregar">
<br>
<br>
</form>
</div>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="modelos.php" method="post" id="enviar" name="enviar">
<?php
	if($_SESSION['tipo_usuario'] == 2)
	{

		$res = $obj_marcas->Extraer_Informacion_Usuario($_SESSION["username"]);
		
		$row = mysql_fetch_assoc($res);
	
		$idmarca   = $row["IDMAR"];
?>
	<input name="marca_id_mod" type="hidden" id="marca_id_mod" value="<?php echo $idmarca; ?>">
<?php
	}
	else
	{
?>
<input name="mod_modelo" type="hidden" id="mod_modelo" value="">
<?php
	}
?>
<input name="modificar" class="btn btn-warning btn-lg" type="submit" id="modificar" value="Modificar">
<br>
<br>
</form>
</div>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="modelos.php" method="post" id="enviar" name="enviar">
<?php
	if($_SESSION['tipo_usuario'] == 2)
	{

		$res = $obj_marcas->Extraer_Informacion_Usuario($_SESSION["username"]);
		
		$row = mysql_fetch_assoc($res);
	
		$idmarca   = $row["IDMAR"];
?>
	<input name="marca_id_elm" type="hidden" id="marca_id_elm" value="<?php echo $idmarca; ?>">
<?php
	}
	else
	{
?>
<input name="elm_modelo" type="hidden" id="elm_modelo" value="">
<?php
	}
?>
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
