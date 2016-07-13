
<script type="text/javascript" src="cke/ckeditor/ckeditor.js"></script>
<script type="text/javascript">            
	function guardar(){
		var oEditor = CKEDITOR.instances.descripcion;
		document.f.descripcion.value=oEditor.getData();
		//object.descripcion=[encodeURIComponent(object.descripcion)];
		return true;
	}
</script>

<div class="row" style="background-color:#000;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">ADMINISTRAR INFORMACIÓN DEL FOOTER</strong>
</div>
<br>
<br>
<div class="row">
<?php
/******************************************************************************************************************************/
if(isset($_POST['descripcion']))
{
			 $descripcion   = "Footer_".$_POST["item"].".html";

			 $texto = $_POST['descripcion'];
			 $texto = str_replace('\"', "'", $texto);
			 $fh = fopen("Archivos/Footer/".$descripcion,"w");
			 fwrite($fh,$texto);
			 fclose($fh);

			?>
			  <div class="row">
					<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
						<div class="alert alert-success">
							<strong>INFORMACIÓN MODIFICADA CON &Eacute;XITO.</strong>
						</div>
					</div>
			  </div>
			<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
}

if(isset($_POST["copyright_desc"]))
{
	if($obj_copyright->Modificar($_POST["copyright_desc"]))
	{
?>
  <div class="row">
		<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
			<div class="alert alert-success">
				<strong>INFORMACIÓN MODIFICADA CON &Eacute;XITO.</strong>
			</div>
		</div>
  </div>
<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
	}
}
/********************************************************************************************************************************************************************************/
if(isset($_POST["copyright"]))
{
	$descripcion = $obj_copyright->Extraer();
?>
<div class="col-lg-2 col-md-2 col-sm-2">
</div>
<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
<form action="" method="post" enctype="multipart/form-data" name="form_publicaciones" id="form_publicaciones">

<table class="table table-striped table-hover" width="100%">

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Descripción - <?php echo $_POST["desc"]; ?> </strong>
    </td>
</tr>


<tr>

	<td><input name="copyright_desc" type="text" class="input input-lg" id="copyright_desc" value="<?php echo $descripcion; ?>" size="50" />
    </td>
</tr>

</table>
<br />
<br />
<input name="agregar" class="btn btn-warning btn-lg" type="submit" id="agregar" value="Modificar Información">

</form>
</div>
<div class="col-lg-2 col-md-2 col-sm-2">
</div>
<?php
}
else if(isset($_POST["item"]))
{
?>
<div class="col-lg-2 col-md-2 col-sm-2">
</div>
<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
<form action="" method="post" enctype="multipart/form-data" name="form_publicaciones" id="form_publicaciones">

<input name="item" type="hidden" id="item" value="<?php echo $_POST["item"]; ?>" />
<input name="desc" type="hidden" id="desc" value="<?php echo $_POST["desc"]; ?>" />

<table class="table table-striped table-hover" width="100%">

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Descripción - <?php echo $_POST["desc"]; ?> </strong>
    </td>
</tr>


<tr>

	<td><textarea name="descripcion" class="input input-lg" id="descripcion"><?php if(file_exists("Archivos/Footer/Footer_".$_POST["item"].".html")){include("Archivos/Footer/Footer_".$_POST["item"].".html");} ?></textarea>
    </td>
</tr>

</table>
<br />
<br />
<input name="agregar" class="btn btn-warning btn-lg" type="submit" id="agregar" value="Modificar Información">

</form>
</div>
<div class="col-lg-2 col-md-2 col-sm-2">
</div>
<?php
}
else
{
?>
<div class="row">

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="item" type="hidden" id="item" value="carro_nuevo">
<input name="desc" type="hidden" id="desc" value="¿Por qué comprar un Carro Nuevo?">
<input name="agregar" class="btn btn-primary btn-lg" type="submit" id="agregar" value="¿Por qué comprar un Carro Nuevo?">
<br>
<br>
</form>
</div>

</div>

<div class="row">

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="item" type="hidden" id="item" value="concesionariosrd">
<input name="desc" type="hidden" id="desc" value="¿Por qué Concesionariosrd.com?">
<input name="modificar" class="btn btn-warning btn-lg" type="submit" id="modificar" value="¿Por qué Concesionariosrd.com?">
<br>
<br>
</form>
</div>

</div>

<div class="row">

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="item" type="hidden" id="item" value="calculadora">
<input name="desc" type="hidden" id="desc" value="Uso de la Calculadora">
<input name="Eliminar" class="btn btn-danger btn-lg" type="submit" id="Eliminar" value="Uso de la Calculadora">
<br>
<br>
</form>
</div>

</div>
<div class="row">

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="item" type="hidden" id="item" value="desc_carro">
<input name="desc" type="hidden" id="desc" value="Descripción de un Carro">
<input name="Eliminar" class="btn btn-success btn-lg" type="submit" id="Eliminar" value="Descripción de un Carro">
<br>
<br>
</form>
</div>

</div>

<div class="row">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="item" type="hidden" id="item" value="quienes_somos">
<input name="desc" type="hidden" id="desc" value="¿Quiénes Somos?">
<input name="ficha" class="btn btn-info btn-lg" type="submit" id="ficha" value="¿Quiénes Somos?">
<br>
<br>
</form>
</div>
</div>

<div class="row">

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="copyright" type="hidden" id="item" value="copyright">
<input name="desc" type="hidden" id="desc" value="Copyright">
<input name="agregar" class="btn btn-primary btn-lg" type="submit" id="agregar" value="Copyright">
<br>
<br>
</form>
</div>

</div>
<?php
}
?>
</div>

<br>
<br>
<br>
<br>
<script type="text/javascript">
	CKEDITOR.replace('descripcion',
	{           
	} );
</script>
