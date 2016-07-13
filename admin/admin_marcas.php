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


    $('#nombre').blur(function(){

        $('#Info_nombre').html('<img src="Validacion_Usuario/loader.gif" alt="" />').fadeOut(1000);

        var marca = $(this).val();        
        var dataString = 'nombre='+marca;

        $.ajax({
            type: "POST",
            url: "verificar_marca.php",
            data: dataString,
            success: function(data) {
                $('#Info_nombre').fadeIn(1000).html(data);
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


	if(band == "agr")
	if(document.getElementById("fotopres").value == "")
	{
		acepto = false;
		document.getElementById("error_fotopres").innerHTML = "<div class='alert alert-danger'> DEBE REGISTRAR UNA FOTO </div>";
	}
	else
	{
		document.getElementById("error_fotopres").innerHTML = "";
	}

	if(document.getElementById("nombrepres").value == "")
	{
		acepto = false;
		document.getElementById("error_nombrepres").innerHTML = "<div class='alert alert-danger'> DEBE REGISTRAR UN NOMBRE </div>";
	}
	else
	{
		document.getElementById("error_nombrepres").innerHTML = "";
	}

	if(band == "agr")
	if(document.getElementById("fotoGerente").value == "")
	{
		acepto = false;
		document.getElementById("error_fotoGerente").innerHTML = "<div class='alert alert-danger'> DEBE REGISTRAR UNA FOTO </div>";
	}
	else
	{
		document.getElementById("error_fotoGerente").innerHTML = "";
	}

	if(document.getElementById("nombreGerente").value == "")
	{
		acepto = false;
		document.getElementById("error_nombreGerente").innerHTML = "<div class='alert alert-danger'> DEBE REGISTRAR UN NOMBRE </div>";
	}
	else
	{
		document.getElementById("error_nombreGerente").innerHTML = "";
	}

	if(document.getElementById("correoGerente").value == "")
	{
		acepto = false;
		document.getElementById("error_correoGerente").innerHTML = "<div class='alert alert-danger'> DEBE REGISTRAR UN CORREO</div>";
	}
	else
	{
		document.getElementById("error_correoGerente").innerHTML = "";
	}

	if(document.getElementById("extGerente").value == "")
	{
		acepto = false;
		document.getElementById("error_extGerente").innerHTML = "<div class='alert alert-danger'> DEBE REGISTRAR UNA EXTENSIÓN </div>";
	}
	else
	{
		document.getElementById("error_extGerente").innerHTML = "";
	}

	if(document.getElementById("telefonoGerente").value == "")
	{
		acepto = false;
		document.getElementById("error_telefonoGerente").innerHTML = "<div class='alert alert-danger'> DEBE REGISTRAR UN CONTACTO </div>";
	}
	else
	{
		document.getElementById("error_telefonoGerente").innerHTML = "";
	}

	if(band == "agr")
	if(document.getElementById("usuarioGerente").value == "")
	{
		acepto = false;
		document.getElementById("error_usuarioGerente").innerHTML = "<div class='alert alert-danger'> DEBE REGISTRAR UN USUARIO </div>";
	}
	else
	{
		document.getElementById("error_usuarioGerente").innerHTML = "";
	}

/************************************************************************************************************************************************************************/
/********************************************************VALIDACION DE CLAVES********************************************************************************************/
/************************************************************************************************************************************************************************/
	if(band == "agr")
	if(document.getElementById("repClaveGerente").value != document.getElementById("claveGerente").value)
	{
		acepto = false;
		document.getElementById("error_claveGerente").innerHTML = "<div class='alert alert-danger'> LAS CLAVES DEBEN SER IGUALES </div>";
	}
	else
	{
		document.getElementById("error_claveGerente").innerHTML = "";
	}
/************************************************************************************************************************************************************************/
	if(band == "agr")
	if(document.getElementById("repClaveGerente").value == "" && document.getElementById("claveGerente").value == "")
	{
		acepto = false;
		document.getElementById("error_repClaveGerente").innerHTML = "<div class='alert alert-danger'> DEBE REGISTRAR Y CONFIRMAR SU CLAVE </div>";
	}
	else
	{
		document.getElementById("error_repClaveGerente").innerHTML = "";
	}
/************************************************************************************************************************************************************************/
/************************************************************************************************************************************************************************/
	if(acepto) document.form_marcas.submit();
}

function Enviar()
{
	document.select_concesionario.submit();
}
</script>

<div class="row" style="background-color:#000;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">ADMINISTRAR MARCAS</strong>
</div>
<br>
<br>
<div class="row">
<?php
$modifico = false;
		if(isset($_FILES['logo']['name']) || isset($_FILES['fotopres']['name']) || isset($_FILES['fotoGerente']['name']))
		if($_FILES['logo']['name'] || $_FILES['fotopres']['name'] || $_FILES['fotoGerente']['name'])
		{
			//echo "Hay Archivo";
		 if (($_FILES["logo"]["type"] == "image/jpeg")  || ($_FILES["logo"]["type"] == "image/jpg") || ($_FILES["logo"]["type"] == "image/JPG") || 
			 ($_FILES["logo"]["type"] == "image/JPEG") || ($_FILES["logo"]["type"] == "image/png") || ($_FILES["logo"]["type"] == "image/PNG") ||
			 ($_FILES["fotopres"]["type"] == "image/jpeg")  || ($_FILES["fotopres"]["type"] == "image/jpg") || ($_FILES["fotopres"]["type"] == "image/JPG") || 
			 ($_FILES["fotopres"]["type"] == "image/JPEG") || ($_FILES["fotopres"]["type"] == "image/png") || ($_FILES["fotopres"]["type"] == "image/PNG") ||
			 ($_FILES["fotoGerente"]["type"] == "image/jpeg")  || ($_FILES["fotoGerente"]["type"] == "image/jpg") || ($_FILES["fotoGerente"]["type"] == "image/JPG") || 
			 ($_FILES["fotoGerente"]["type"] == "image/JPEG") || ($_FILES["fotoGerente"]["type"] == "image/png") || ($_FILES["fotoGerente"]["type"] == "image/PNG"))
			 {
				 //if($_POST["mod_galeria"]) $g = 1;
				 
				 $nombres = array("logo", "fotopres", "fotoGerente");

					 if($_FILES["logo"]["name"] || $_FILES['fotopres']['name'] || $_FILES['fotoGerente']['name'])
					 {
						 for ($i = 0; $i < 3; $i++)
						 {
							 $_FILES[$nombres[$i]]["name"] = str_replace("á", "a", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("é", "e", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("í", "i", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("ó", "o", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("ú", "u", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("ä", "a", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("ë", "e", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("ï", "i", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("ö", "o", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("ü", "u", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("Á", "A", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("É", "E", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("Í", "I", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("Ó", "O", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("Ú", "U", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("Ä", "A", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("Ë", "E", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("Ï", "I", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("Ö", "O", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("Ü", "U", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("¨", "", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("´", "", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("`", "", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace(" ", "", $_FILES[$nombres[$i]]["name"]);
							 $_FILES[$nombres[$i]]["name"] = str_replace("^", "", $_FILES[$nombres[$i]]["name"]);
						 }
	
						 while (file_exists("Archivos/Marcas/".$_FILES["logo"]["name"]) && $_FILES["logo"]["name"]) 
						 {
								 $extension = substr(strrchr($_FILES["logo"]["name"], "."),1);
								 $_FILES["logo"]["name"] = str_replace(".".$extension, "", $_FILES["logo"]["name"]);
								 $_FILES["logo"]["name"] = $_FILES["logo"]["name"]."1.".$extension;
						 }
	

						 while (file_exists("Archivos/Presidentes/".$_FILES["fotopres"]["name"]) && $_FILES["fotopres"]["name"]) 
						 {
								 $extension = substr(strrchr($_FILES["fotopres"]["name"], "."),1);
								 $_FILES["fotopres"]["name"] = str_replace(".".$extension, "", $_FILES["fotopres"]["name"]);
								 $_FILES["fotopres"]["name"] = $_FILES["fotopres"]["name"]."1.".$extension;
						 }


						 while (file_exists("Archivos/Gerentes/".$_FILES["fotoGerente"]["name"]) && $_FILES["fotoGerente"]["name"]) 
						 {
								 $extension = substr(strrchr($_FILES["fotoGerente"]["name"], "."),1);
								 $_FILES["fotoGerente"]["name"] = str_replace(".".$extension, "", $_FILES["fotoGerente"]["name"]);
								 $_FILES["fotoGerente"]["name"] = $_FILES["fotoGerente"]["name"]."1.".$extension;
						 }



						 if($_FILES["logo"]["name"])
						 {
							 while(true) if(move_uploaded_file($_FILES["logo"]["tmp_name"], "Archivos/Marcas/" . $_FILES["logo"]["name"])) break;
						 }

						 if($_FILES["fotopres"]["name"])
						 {
							  while(true) if(move_uploaded_file($_FILES["fotopres"]["tmp_name"], "Archivos/Presidentes/" . $_FILES["fotopres"]["name"])) break;
						 }

						 if($_FILES["fotoGerente"]["name"])
						 {
							  while(true) if(move_uploaded_file($_FILES["fotoGerente"]["tmp_name"], "Archivos/Gerentes/" . $_FILES["fotoGerente"]["name"])) break;
						 }



						 $id_concesionarios = "";
						 if(isset($_POST["concesionarios_id"]))
							 $id_concesionarios = $_POST["concesionarios_id"];

						 $logo = "";
						 if(isset($_FILES["logo"]["name"]))
						 	 $logo = $_FILES["logo"]["name"];

						 $nombre            = $_POST["nombre"];

						 $fotopres = "";
						 if(isset($_FILES["fotopres"]["name"]))
							 $fotopres = $_FILES["fotopres"]["name"];

						 $nombrepres        = $_POST["nombrepres"];

						 $fotoGerente = "";
						 if(isset($_FILES["fotoGerente"]["name"]))
							 $fotoGerente       = $_FILES["fotoGerente"]["name"];

						 $nombreGerente     = $_POST["nombreGerente"];
						 $correoGerente     = $_POST["correoGerente"];
						 $extGerente        = $_POST["extGerente"];
						 $telefonoGerente   = $_POST["telefonoGerente"];

						 $usuarioGerente = "";
						 if(isset($_POST["usuarioGerente"]))
							 $usuarioGerente    = $_POST["usuarioGerente"];
	
						 $claveGerente = "";
						 if(isset($_POST["claveGerente"]))
							 $claveGerente      = $_POST["claveGerente"];


						 if(isset($_POST["marcas_mod_id"]))
						 {
							 $res = $obj_marcas->Extraer_Marca($_POST["marcas_mod_id"]);
							 $row = mysql_fetch_assoc($res);

							 $logo = $row["LOGO"];
							 if($_FILES["logo"]["name"])
							 {
								 $logo = $_FILES["logo"]["name"];
								 if($row["LOGO"])
								 @unlink("Archivos/Marcas/".$row["LOGO"]);
							 }
	
							 $fotopres = $row["FOTOPRES"];
							 if($_FILES["fotopres"]["name"])
							 {
								 $fotopres = $_FILES["fotopres"]["name"];
								 if($row["FOTOPRES"])
								 @unlink("Archivos/Presidentes/".$row["FOTOPRES"]);
							 }
	
							 $fotoGerente = $row["FOTOGERENTE"];
							 if($_FILES["fotoGerente"]["name"])
							 {
								 $fotoGerente = $_FILES["fotoGerente"]["name"];
								 if($row["FOTOGERENTE"])
								 @unlink("Archivos/Gerentes/".$row["FOTOGERENTE"]);
							 }

								 if($obj_marcas->Modificar($_POST["marcas_mod_id"], $logo, $nombre, $fotopres, $nombrepres, $fotoGerente, $nombreGerente, $correoGerente, $extGerente, $telefonoGerente))
								 {
									?>
									  <div class="row">
											<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
												<div class="alert alert-success">
													<strong>MARCA MODIFICADA CON &Eacute;XITO.</strong>
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
							$resultado        = $obj_usuarios->Verificar_Usuario($usuarioGerente);
							$resultado_nombre = $obj_marcas->Verificar_Marca($nombre);
							if(mysql_num_rows(@$resultado) > 0)
							{
									?>
									  <div class="row">
										<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
										  <div class="alert alert-danger">
													<strong>EL USUARIO YA EXISTE. MARCA NO REGISTRADA</strong>
												</div>
                                            <!--<input name="regresar" type="button" class="btn btn-info btn-lg" id="regresar" onclick="history.back()" value="Regresar" /><br /><br />-->
										  </div>
									  </div>
									<?php
									echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
							}
							else if(mysql_num_rows(@$resultado_nombre) > 0)
							{
									?>
									  <div class="row">
										<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
										  <div class="alert alert-danger">
													<strong>LA MARCA YA EXISTE. MARCA NO REGISTRADA</strong>
												</div>
	                                           <!--<input name="regresar" type="button" class="btn btn-info btn-lg" id="regresar" onclick="history.back()" value="Regresar" /><br /><br />-->
										  </div>
									  </div>
									<?php
									echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
							}								 
							else if($obj_marcas->Registrar($id_concesionarios, $logo, $nombre, $fotopres, $nombrepres, $fotoGerente, $nombreGerente, $correoGerente, $extGerente, $telefonoGerente, $usuarioGerente) && $obj_usuarios->Registrar_Usuario_Normal($usuarioGerente, $claveGerente, $nombreGerente, "", 2))
								 {
									?>
									  <div class="row">
											<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
												<div class="alert alert-success">
													<strong>MARCA REGISTRADA CON &Eacute;XITO.</strong>
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



if(isset($_POST["marcas_mod_id"]) && !$modifico)
{
	 $res = $obj_marcas->Extraer_Marca($_POST["marcas_mod_id"]);
	 $row = mysql_fetch_assoc($res);

	 $logo = $row["LOGO"];
	 $fotopres = $row["FOTOPRES"];
	 $fotoGerente = $row["FOTOGERENTE"];
	 $nombre            = $_POST["nombre"];
	 $nombrepres        = $_POST["nombrepres"];
	 $nombreGerente     = $_POST["nombreGerente"];
	 $correoGerente     = $_POST["correoGerente"];
	 $extGerente        = $_POST["extGerente"];
	 $telefonoGerente   = $_POST["telefonoGerente"];

	 if($obj_marcas->Modificar($_POST["marcas_mod_id"], $logo, $nombre, $fotopres, $nombrepres, $fotoGerente, $nombreGerente, $correoGerente, $extGerente, $telefonoGerente))
	 {
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-success">
						<strong>MARCA MODIFICADA CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
	 }
}


if(isset($_POST["marcas_elm_id"]))
{
	 $res = $obj_marcas->Extraer_Marca($_POST["marcas_elm_id"]);
	 $row = mysql_fetch_assoc($res);
	 $usuario = $row["USUARIOGERENTE"];

	 if($obj_marcas->Eliminar($_POST["marcas_elm_id"]) && $obj_usuarios->Eliminar_Usuario($usuario))
	 {
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-danger">
						<strong>MARCA ELIMINADA CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
	 }
}



if(isset($_POST["marca_id_elm"]))
{
	$res = $obj_concesionarios->Extraer_ID($_POST["concesionarios_id_marcas_elm"]);

	$row = mysql_fetch_assoc($res);

	$logo = $row["LOGO"];

	$res = $obj_marcas->Extraer_Marca($_POST["marca_id_elm"]);

	$row = mysql_fetch_assoc($res);
?>
<form action="" method="post" enctype="multipart/form-data" name="form_marcas" id="form_marcas">

<input name="concesionarios_id_marcas_elm" type="hidden" id="concesionarios_id_marcas_elm" value="<?php echo $_POST["concesionarios_id_marcas_elm"]; ?>">
<input name="marcas_elm_id" type="hidden" id="marcas_elm_id" value="<?php echo $_POST["marca_id_elm"]; ?>">

<div class="col-lg-3 col-md-3">
</div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<br />
<br />
<br />
<br />
<table class="table table-hover table-striped table-bordered" width="100%">

<thead style="background-color:#000">
<td colspan="2">
<strong style="color:#FFF;font-size:16px">CONCESIONARIO DE LA MARCA</strong>
</td>
</thead>
<tr>
    <td colspan="2">
		<img src="Archivos/Concesionarios/<?php echo $logo; ?>" width="100%" />
    <div id="error_logo"></div>
    </td>

</tr>

<thead style="background-color:#999">
<td colspan="2">
<strong style="color:#FFF;font-size:16px">DATOS DE LA MARCA</strong>
</td>
</thead>
<tr>

    <td>
    <strong style="font-size:16px">Logo de la Marca</strong>
    </td>
    
    <td>
	<img src="Archivos/Marcas/<?php echo $row["LOGO"]; ?>" width="40%" />
    <div id="error_logo"></div>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Nombre de la Marca:</strong>
    </td>
    
    <td>
    <?php echo $row["NOMBRE"]; ?>
    <div id="error_nombre"></div>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Foto Presidente de la Marca:</strong>
    </td>
    
    <td>
    <img src="Archivos/Presidentes/<?php echo $row["FOTOPRES"]; ?>" width="40%" />
    <div id="error_fotopres"></div>
    </td>

</tr>


<tr>

    <td>
    <strong style="font-size:16px">Nombre Presidente de la Marca:</strong>
    </td>
    
    <td>
    <?php echo $row["NOMBREPRES"]; ?>
    <div id="error_nombrepres"></div>
    </td>

</tr>


<tr>

    <td>
    <strong style="font-size:16px">Foto Gerente General de Ventas de la Marca</strong>
    </td>
    
    <td>
    <img src="Archivos/Gerentes/<?php echo $row["FOTOGERENTE"]; ?>" width="40%" />
    <div id="error_fotoGerente"></div>
    </td>

</tr>


<tr>

    <td>
    <strong style="font-size:16px">Nombre Gerente General de Ventas de la Marca:</strong>
    </td>
    
    <td>
    <?php echo $row["NOMBREGERENTE"]; ?>
    <div id="error_nombreGerente"></div>
    </td>

</tr>


<tr>

    <td>
    <strong style="font-size:16px">Correo Gerente General de Ventas de la Marca:</strong>
    </td>
    
    <td>
    <?php echo $row["CORREOGERENTE"]; ?>
    <div id="error_correoGerente"></div>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Teléfono Gerente General de Ventas de la Marca:</strong>
    </td>
    
    <td>
    <?php echo "(".$row["EXTGERENTE"].") ".$row["CONTACTOGERENTE"]; ?>
    <div id="error_extGerente"></div>
    </td>

</tr>

</table>
<br />
<br />
<?php
$res = $obj_modelos->Extraer_ID_Marcas($_POST["marca_id_elm"]);

if(mysql_num_rows($res) > 0)
{
?>
<strong style="font-size:18px;color:#F00">DEBE ELIMINAR TODOS LOS MODELOS QUE ADMINISTRA ESTA MARCA ANTES DE ELIMINARLA.</strong>
<?php
}
else
{
?>
<strong style="font-size:18px;color:#F00">DESEA ELIMINAR LA MARCA?</strong>
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
else if(isset($_POST["concesionario_id_elm"]))
{
?>
<form action="" method="post" name="select_concesionario" id="select_concesionario">
<div class="col-lg-3 col-md-2">
</div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione la Marca a Eliminar:</strong>
<br />
<br />

<select name="marca_id_elm" id="marca_id_elm" class="input-lg" onchange="Enviar()">
  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		<?php
        	$res = $obj_marcas->Extraer_ID_Concesionario($_POST["concesionario_id_elm"]);
			while($row = mysql_fetch_assoc($res))
			{
        ?>
          		<option value="<?php echo $row["ID"]; ?>"><?php echo $row["NOMBRE"]; ?></option>
        <?php
			}
        ?>
</select>
<input name="concesionarios_id_marcas_elm" type="hidden" id="concesionarios_id_marcas_elm" value="<?php echo $_POST["concesionario_id_elm"]; ?>">

<div id="mensaje_error"></div>
<br />
<br />
</div>
<div class="col-lg-3 col-md-2">
</div>
</form>
<?php
}
else if(isset($_POST["elm_marca"]))
{
?>
<form action="" method="post" name="select_concesionario" id="select_concesionario">
<div class="col-lg-3 col-md-2">
</div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione el Concesionario donde se encuentra la Marca a Eliminar:</strong>
<br />
<br />

<select name="concesionario_id_elm" id="concesionario_id_elm" class="input-lg" onchange="Enviar()">
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
<div class="col-lg-3 col-md-2">
</div>
</form>
<?php
}
else if(isset($_POST["marca_id_mod"]))/**************************************************************************/
{
	$res = $obj_concesionarios->Extraer_ID($_POST["concesionarios_id_marcas"]);

	$row = mysql_fetch_assoc($res);

	$logo = $row["LOGO"];

	$res = $obj_marcas->Extraer_Marca($_POST["marca_id_mod"]);

	$row = mysql_fetch_assoc($res);
?>
<form action="" method="post" enctype="multipart/form-data" name="form_marcas" id="form_marcas">

<input name="concesionarios_id_marcas" type="hidden" id="concesionarios_id_marcas" value="<?php echo $_POST["concesionarios_id_marcas"]; ?>">
<input name="marcas_mod_id" type="hidden" id="marcas_mod_id" value="<?php echo $_POST["marca_id_mod"]; ?>">

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
<strong style="color:#FFF;font-size:16px">CONCESIONARIO AL CUAL SE VA A MODIFICAR LA MARCA</strong>
</td>
</thead>
<tr>
    <td>
		<img src="Archivos/Concesionarios/<?php echo $logo; ?>" width="100%" />
    <div id="error_logo"></div>
    </td>

</tr>

<tr style="background-color:#999">
<td>
<strong style="color:#FFF;font-size:16px">DATOS DE LA MARCA</strong>
</td>
</tr>

<tr style="background-color:#CCC">
<td>
  <strong style="font-size:16px">Logo de la Marca</strong>
</td>
</tr>

<tr>
    <td>
	<img src="Archivos/Marcas/<?php echo $row["LOGO"]; ?>" width="100%" />
    <input name="logo" id="logo" type="file" />
    <div id="error_logo"></div>
    </td>
</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Nombre de la Marca:</strong>
    </td>
</tr>

<tr>
    <td>
    <input name="nombre" type="text" class="input-lg" id="nombre" value="<?php echo $row["NOMBRE"]; ?>" />
    <div id="error_nombre"></div>
    </td>
</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Foto Presidente de la Marca:</strong>
    </td>
</tr>

<tr>
    <td>
    <img src="Archivos/Presidentes/<?php echo $row["FOTOPRES"]; ?>" width="40%" />
    <input name="fotopres" id="fotopres" type="file" />
    <div id="error_fotopres"></div>
    </td>

</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Nombre Presidente de la Marca:</strong>
    </td>
</tr>

<tr>
    <td>
    <input name="nombrepres" type="text" class="input-lg" id="nombrepres" value="<?php echo $row["NOMBREPRES"]; ?>" />
    <div id="error_nombrepres"></div>
    </td>

</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Foto Gerente General de Ventas de la Marca</strong>
    </td>
</tr>

<tr>
    <td>
    <img src="Archivos/Gerentes/<?php echo $row["FOTOGERENTE"]; ?>" width="40%" />
    <input name="fotoGerente" id="fotoGerente" type="file" />
    <div id="error_fotoGerente"></div>
    </td>
</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Nombre Gerente General de Ventas de la Marca:</strong>
    </td>
</tr>

<tr>
    <td>
    <input name="nombreGerente" type="text" class="input-lg" id="nombreGerente" value="<?php echo $row["NOMBREGERENTE"]; ?>" />
    <div id="error_nombreGerente"></div>
    </td>
</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Correo Gerente General de Ventas de la Marca:</strong>
    </td>
</tr>


<tr>
    <td>
    <input name="correoGerente" type="text" class="input-lg" id="correoGerente" value="<?php echo $row["CORREOGERENTE"]; ?>" />
    <div id="error_correoGerente"></div>
    </td>
</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Teléfono Gerente General de Ventas de la Marca:</strong>
    </td>
</tr>

<tr>
    <td>
    <input name="telefonoGerente" type="text" class="input-lg" id="telefonoGerente" value="<?php echo $row["CONTACTOGERENTE"]; ?>" />
    <div id="error_telefonoGerente"></div>
    </td>
</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Ext Gerente General de Ventas de la Marca:</strong>
    </td>
</tr>

<tr>
    <td>
    <input name="extGerente" type="text" class="input-lg" id="extGerente" value="<?php echo $row["EXTGERENTE"]; ?>" />
    <div id="error_extGerente"></div>
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
else if(isset($_POST["concesionario_id_mod"]))
{
?>
<form action="" method="post" name="select_concesionario" id="select_concesionario">
<div class="col-lg-3 col-md-2">
</div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione la Marca a Modificar:</strong>
<br />
<br />

<select name="marca_id_mod" id="marca_id_mod" class="input-lg" onchange="Enviar()">
  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		<?php
        	$res = $obj_marcas->Extraer_ID_Concesionario($_POST["concesionario_id_mod"]);
			while($row = mysql_fetch_assoc($res))
			{
        ?>
          		<option value="<?php echo $row["ID"]; ?>"><?php echo $row["NOMBRE"]; ?></option>
        <?php
			}
        ?>
</select>
<input name="concesionarios_id_marcas" type="hidden" id="concesionarios_id_marcas" value="<?php echo $_POST["concesionario_id_mod"]; ?>">

<div id="mensaje_error"></div>
<br />
<br />
</div>
<div class="col-lg-3 col-md-2">
</div>
</form>
<?php
}
else if(isset($_POST["mod_marca"]))
{
?>
<form action="" method="post" name="select_concesionario" id="select_concesionario">
<div class="col-lg-3 col-md-2">
</div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione el Concesionario donde se encuentra la Marca a Modificar:</strong>
<br />
<br />

<select name="concesionario_id_mod" id="concesionario_id_mod" class="input-lg" onchange="Enviar()">
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
<div class="col-lg-3 col-md-2">
</div>
</form>
<?php
}
else if(isset($_POST["concesionario_id"]))
{
	$res = $obj_concesionarios->Extraer_ID($_POST["concesionario_id"]);
	
	$row = mysql_fetch_assoc($res);
?>
<form action="" method="post" enctype="multipart/form-data" name="form_marcas" id="form_marcas">

<input name="concesionarios_id" type="hidden" id="concesionarios_id" value="<?php echo $_POST["concesionario_id"]; ?>">

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
<strong style="color:#FFF;font-size:16px">CONCESIONARIO AL CUAL SE VA A AGREGAR LA MARCA</strong>
</td>
</thead>
<tr>
    <td>
		<img src="Archivos/Concesionarios/<?php echo $row["LOGO"]; ?>" width="100%" />
    <div id="error_logo"></div>
    </td>

</tr>

<thead style="background-color:#999">
<td>
<strong style="color:#FFF;font-size:16px">DATOS DE LA MARCA</strong>
</td>
</thead>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Logo de la Marca</strong>
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
    <strong style="font-size:16px">Nombre de la Marca:</strong>
    </td>
</tr>

<tr>

    
    <td>
    <input name="nombre" type="text" class="input-lg" id="nombre" value="" list="nombres" autocomplete="off" />
<datalist id="nombres">
<?php
$res = $obj_marcas->Extraer();
while($row = mysql_fetch_assoc($res))
{
?>
	<option value="<?php echo $row["NOMBRE"]; ?>">
<?php
}
?>
</datalist>

    <div id="error_nombre"></div>
    <div id="Info_nombre"></div>
    </td>

</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Foto Presidente de la Marca:</strong>
    </td>
</tr>

<tr>

    
    <td>
    <input name="fotopres" id="fotopres" type="file" />
    <div id="error_fotopres"></div>
    </td>

</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Nombre Presidente de la Marca:</strong>
    </td>
</tr>

<tr>

    
    <td>
    <input name="nombrepres" type="text" class="input-lg" id="nombrepres" value="" />
    <div id="error_nombrepres"></div>
    </td>

</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Foto Gerente General de Ventas de la Marca</strong>
    </td>
</tr>

<tr>

    
    <td>
    <input name="fotoGerente" id="fotoGerente" type="file" />
    <div id="error_fotoGerente"></div>
    </td>

</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Nombre Gerente General de Ventas de la Marca:</strong>
    </td>
</tr>

<tr>

    
    <td>
    <input name="nombreGerente" type="text" class="input-lg" id="nombreGerente" value="" />
    <div id="error_nombreGerente"></div>
    </td>

</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Correo Gerente General de Ventas de la Marca:</strong>
    </td>
</tr>

<tr>

    
    <td>
    <input name="correoGerente" id="correoGerente" type="text" class="input-lg" />
    <div id="error_correoGerente"></div>
    </td>

</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Teléfono Gerente General de Ventas de la Marca:</strong>
    </td>
</tr>

<tr>

    
    <td>
    <input name="telefonoGerente" id="telefonoGerente" type="text" class="input-lg" />
    <div id="error_telefonoGerente"></div>
    </td>

</tr>

<tr style="background-color:#CCC">
    <td>
    <strong style="font-size:16px">Ext Gerente General de Ventas de la Marca:</strong>
    </td>
</tr>

<tr>
    <td>
    <input name="extGerente" id="extGerente" type="text" class="input-lg" />
    <div id="error_extGerente"></div>
    </td>

</tr>

<tr style="background-color:#CCC">
  <td><strong style="font-size:16px">Usuario Gerente General de Ventas de la Marca:</strong></td>
</tr>

<tr>
  <td>
  <input name="usuarioGerente" id="usuarioGerente" type="text" class="input-lg" />
  <div id="error_usuarioGerente"></div>
  <div id="Info"></div>
  </td>
</tr>
  
<tr style="background-color:#CCC">
  <td><strong style="font-size:16px">Clave Gerente General de Ventas de la Marca:</strong></td>
</tr>

<tr>
  <td>
  <input name="claveGerente" id="claveGerente" type="password" class="input-lg" />
  <div id="error_claveGerente"></div>
  <div id="error_claveGerente_dif"></div>
  </td>
  </tr>

<tr style="background-color:#CCC">
  <td><strong style="font-size:16px">Repetir Clave Gerente General de Ventas de la Marca:</strong></td>
</tr>

<tr>
  <td>
  <input name="repClaveGerente" id="repClaveGerente" type="password" class="input-lg" />
  <div id="error_repClaveGerente"></div>
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
else if(isset($_POST["agr_marca"]))
{
?>
<form action="" method="post" name="select_concesionario" id="select_concesionario">
<div class="col-lg-3 col-md-2">
</div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione el Concesionario al que desea registrar la Marca:</strong>
<br />
<br />

<select name="concesionario_id" id="concesionario_id" class="input-lg" onchange="Enviar()">
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
<div class="col-lg-3 col-md-2">
</div>
</form>
<?php
}
else
{
?>
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="agr_marca" type="hidden" id="agr_marca" value="">
<input name="agregar" class="btn btn-primary btn-lg" type="submit" id="agregar" value="Agregar">
<br>
<br>
</form>
</div>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="mod_marca" type="hidden" id="mod_marca" value="">
<input name="modificar" class="btn btn-warning btn-lg" type="submit" id="modificar" value="Modificar">
<br>
<br>
</form>
</div>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="elm_marca" type="hidden" id="elm_marca" value="">
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
