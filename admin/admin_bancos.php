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


	if(document.getElementById("tasa_interes").value == "")
	{
		acepto = false;
		document.getElementById("error_tasa_interes").innerHTML = "<div class='alert alert-danger'> DEBE REGISTRAR UNA TAZA DE INTERÉS</div>";
	}
	else
	{
		document.getElementById("error_tasa_interes").innerHTML = "";
	}


	if(document.getElementById("inicial").value == "")
	{
		acepto = false;
		document.getElementById("error_inicial").innerHTML = "<div class='alert alert-danger'> DEBE REGISTRAR UN PLAZO DE FINANCIAMIENTO </div>";
	}
	else
	{
		document.getElementById("error_inicial").innerHTML = "";
	}

	if(document.getElementById("monto_financiar").value == "")
	{
		acepto = false;
		document.getElementById("error_monto_financiar").innerHTML = "<div class='alert alert-danger'> DEBE REGISTRAR UN TELÉFONO </div>";
	}
	else
	{
		document.getElementById("error_monto_financiar").innerHTML = "";
	}

	if(acepto) document.form_bancos.submit();
}

function Modificar()
{
	document.form_bancos.submit();
}
</script>

<div class="row" style="background-color:#000;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">ADMINISTRAR BANCOS</strong>
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
	
						 while (file_exists("Archivos/Bancos/".$_FILES["logo"]["name"]) && $_FILES["logo"]["name"]) 
						 {
								 $extension = substr(strrchr($_FILES["logo"]["name"], "."),1);
								 $_FILES["logo"]["name"] = str_replace(".".$extension, "", $_FILES["logo"]["name"]);
								 $_FILES["logo"]["name"] = $_FILES["logo"]["name"]."1.".$extension;
						 }
	
						 if($_FILES["logo"]["name"])
						 {
							  while(true) if(move_uploaded_file($_FILES["logo"]["tmp_name"], "Archivos/Bancos/" . $_FILES["logo"]["name"])) break;
						 }

						 $logo            = $_FILES["logo"]["name"];
						 $nombre          = $_POST["nombre"];
						 $tasa_interes    = $_POST["tasa_interes"];
						 $inicial         = $_POST["inicial"];
						 $monto_financiar = $_POST["monto_financiar"];

						 if(isset($_POST["banco_mod"]))
						 {
							 $res = $obj_bancos->Extraer_ID($_POST["banco_mod"]);
							 $row = mysql_fetch_assoc($res);
							 unlink("Archivos/Bancos/".$row["LOGO"]);

								 if($obj_bancos->Modificar($_POST["banco_mod"], $logo, $nombre, $tasa_interes, $inicial, $monto_financiar))
								 {
									?>
									  <div class="row">
											<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
												<div class="alert alert-success">
													<strong>BANCO MODIFICADO CON &Eacute;XITO.</strong>
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
								 if($obj_bancos->Registrar($logo, $nombre, $tasa_interes, $inicial, $monto_financiar))
								 {
									?>
									  <div class="row">
											<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
												<div class="alert alert-success">
													<strong>BANCO AGREGADO CON &Eacute;XITO.</strong>
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

if(isset($_POST["banco_mod"]) && !$modifico)
{
	 $res = $obj_bancos->Extraer_ID($_POST["banco_mod"]);
	 $row = mysql_fetch_assoc($res);

	 $logo       = $row["LOGO"];
	 $nombre     = $_POST["nombre"];
	 $tasa_interes    = $_POST["tasa_interes"];
	 $inicial         = $_POST["inicial"];
	 $monto_financiar = $_POST["monto_financiar"];

	 if($obj_bancos->Modificar($_POST["banco_mod"], $logo, $nombre, $tasa_interes, $inicial, $monto_financiar))
	 {
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-success">
						<strong>BANCO MODIFICADO CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
	 }
}




if(isset($_POST["banco_elm"]))
{
	 $res = $obj_bancos->Extraer_ID($_POST["banco_elm"]);
	 $row = mysql_fetch_assoc($res);
     unlink("Archivos/Bancos/".$row["LOGO"]);

	 if($obj_bancos->Eliminar($_POST["banco_elm"]))
	 {
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-danger">
						<strong>BANCO ELIMINADO CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
	 }
}

/*******************************************************************************************************************************************************************************/



if(isset($_POST["elm_banco_id"]))
{
	$res = $obj_bancos->Extraer_ID($_POST["elm_banco_id"]);
	
	$row = mysql_fetch_assoc($res);
?>
<form action="" method="post" enctype="multipart/form-data" name="form_bancos" id="form_bancos">
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

<table class="table table-hover table-striped table-bordered" width="100%">
<thead style="background-color:#999;width:100%">
<td colspan="2">
<strong style="color:#FFF;font-size:16px">DATOS BANCO</strong>
</td>
</thead>
<tr>
    <td>
    <strong style="font-size:16px">Logo</strong>
    </td>
    
    <td>
    <img src="Archivos/Bancos/<?php echo $row["LOGO"]; ?>" width="70%" />
    </td>

</tr>


<tr>

    <td>
    <strong style="font-size:16px">Nombre:</strong>
    </td>
    
    <td>
    <?php echo $row["NOMBRE"]; ?>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Tasa Interés:</strong>
    </td>
    
    <td>
	<?php echo $row["TASA_INTERES"]; ?>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Inicial:</strong>
    </td>
    
    <td>
    <?php echo $row["INICIAL"]; ?> AÑOS
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Teléfono del Banco:</strong>
    </td>
    
    <td>
    <?php echo $row["MONTO_FINANCIAR"]; ?>
    </td>

</tr>

</table>
<input name="banco_elm" type="hidden" id="banco_elm" value="<?php echo $_POST["elm_banco_id"]; ?>">
<br />

<strong style="font-size:18px;color:#F00">DESEA ELIMINAR EL BANCO?</strong>
<br />
<input name="eliminar" class="btn btn-danger btn-lg" type="submit" id="eliminar" value="Eliminar" />
<br />
</div>

</form>
<?php
}
else if(isset($_POST["elm_banco"]))
{
?>
<form action="" method="post" name="form_bancos" id="form_bancos">
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione el Banco a Eliminar</strong>
<br />
<br />

<select name="elm_banco_id" id="elm_banco_id" class="input-lg" onchange="Modificar()">
  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		<?php
        	$res = $obj_bancos->Extraer();
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
else if(isset($_POST["mod_banco_id"]))
{
	$res = $obj_bancos->Extraer_ID($_POST["mod_banco_id"]);
	
	$row = mysql_fetch_assoc($res);
?>
<form action="" method="post" enctype="multipart/form-data" name="form_bancos" id="form_bancos">
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

<table class="table table-hover table-striped table-bordered" width="100%">
<thead style="background-color:#999;width:100%">
<td colspan="2">
<strong style="color:#FFF;font-size:16px">DATOS CONCESIONARIO</strong>
</td>
</thead>
<tr>
    <td>
    <strong style="font-size:16px">Logo</strong>
    </td>
    
    <td>
    <img src="Archivos/Bancos/<?php echo $row["LOGO"]; ?>" width="70%" />
    <input name="logo" id="logo" type="file" style="width:100%" />
    <div id="error_logo"></div>
    </td>

</tr>


<tr>

    <td>
    <strong style="font-size:16px">Nombre:</strong>
    </td>
    
    <td>
    <input name="nombre" type="text" class="input-lg" id="nombre" value="<?php echo $row["NOMBRE"]; ?>" />
    <div id="error_nombre"></div>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Tasa Interés:</strong>
    </td>
    
    <td><input name="tasa_interes" type="text" class="input-lg" id="tasa_interes" value="<?php echo $row["TASA_INTERES"]; ?>" size="2" maxlength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" /><strong style="font-size:20px">%</strong>
    <div id="error_tasa_interes"></div>
    </td>

</tr>


<tr>

    <td>
    <strong style="font-size:16px">Plazo de Financiamiento:</strong>
    </td>
    
    <td>
    <input name="inicial" type="text" class="input-lg" id="inicial" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" value="<?php echo $row["INICIAL"]; ?>" size="5" maxlength="2" /><strong style="font-size:20px">Años</strong> 
    <div id="error_inicial"></div>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Teléfono del Banco:</strong>
    </td>
    
    <td>
    <input name="monto_financiar" type="text" class="input-lg" id="monto_financiar" value="<?php echo $row["MONTO_FINANCIAR"]; ?>" size="7" />
    <div id="error_monto_financiar"></div>
    </td>

</tr>
</table>
<input name="banco_mod" type="hidden" id="banco_mod" value="<?php echo $_POST["mod_banco_id"]; ?>">
<br />
<br />
<input name="modificar" class="btn btn-warning btn-lg" type="button" id="modificar" value="Modificar" onclick="VerificarDatos('mod')" />
<br />
<br />
</div>

</form>
<?php
}
else if(isset($_POST["mod_banco"]))
{
?>
<form action="" method="post" name="form_bancos" id="form_bancos">
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<strong style="font-size:18px">Seleccione Concesionario a Modificar</strong>
<br />
<br />

<select name="mod_banco_id" id="mod_banco_id" class="input-lg" onchange="Modificar()">
  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		<?php
        	$res = $obj_bancos->Extraer();
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
else if(isset($_POST["agr_banco"]))
{
?>

<div class="col-lg-3 col-md-3">
</div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
<form action="" method="post" enctype="multipart/form-data" name="form_bancos" id="form_bancos">
<br />
<br />
<table class="table table-hover table-striped table-bordered" width="100%">
<thead style="background-color:#999;width:100%">
<td colspan="2">
<strong style="color:#FFF;font-size:16px">DATOS DEL BANCO</strong>
</td>
</thead>
<tr>
    <td>
    <strong style="font-size:16px">Logo</strong>
    </td>
    
    <td>
    <input name="logo" id="logo" type="file" style="width:100%" />
    <div id="error_logo"></div>
    </td>

</tr>


<tr>

    <td>
    <strong style="font-size:16px">Nombre:</strong>
    </td>
    
    <td>
    <input name="nombre" id="nombre" type="text" class="input-lg" />
    <div id="error_nombre"></div>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Tasa de Interés:</strong>
    </td>
    
    <td>
    <input name="tasa_interes" type="text" class="input-lg" id="tasa_interes" size="2" maxlength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" /><strong style="font-size:20px">%</strong>
    <div id="error_tasa_interes"></div>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Plazo de Financiamiento:</strong>
    </td>
    
    <td>
    <input name="inicial" type="text" class="input-lg" id="inicial" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" size="7" maxlength="2" /><strong style="font-size:20px">Años</strong>
    <div id="error_inicial"></div>
    </td>

</tr>

<tr>

    <td>
    <strong style="font-size:16px">Teléfono del Banco:</strong>
    </td>
    
    <td>
    <input name="monto_financiar" type="text" class="input-lg" id="monto_financiar" size="7" />
    <div id="error_monto_financiar"></div>
    </td>

</tr>
</table>
<br />
<br />
<input name="agregar" class="btn btn-primary btn-lg" type="button" id="agregar" value="Agregar" onclick="VerificarDatos('agr')" />
<br />
<br />
<br />
</form>
</div>
<div class="col-lg-3 col-md-3">
</div>

<?php
}
else
{
?>
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="agr_banco" type="hidden" id="agr_banco" value="">
<input name="agregar" class="btn btn-primary btn-lg" type="submit" id="agregar" value="Agregar">
<br>
<br>
</form>
</div>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="mod_banco" type="hidden" id="mod_banco" value="">
<input name="modificar" class="btn btn-warning btn-lg" type="submit" id="modificar" value="Modificar">
<br>
<br>
</form>
</div>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="elm_banco" type="hidden" id="elm_banco" value="">
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
