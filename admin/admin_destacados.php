<script>
function Revisar()
{
	var acepto = true;

	if(document.getElementById("titulo_destacado").value == "")
	{
		acepto = false;
		document.getElementById("error_destacado").innerHTML = "<br><div class = 'alert alert-danger' style = 'width:60%'>DEBE REGISTRAR UNA DESCRIPCIÓN CORTA PARA EL DESTACADO</div>";
	}

	if(acepto) document.form_publicaciones.submit();
}
</script>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
	$("document").ready(function(){
		$( "#select_concesionarios" ).load( "Select/concesionarios.php" );

		$("#select_concesionarios").change(function(){
			var id = $("#select_concesionarios").val();
			$.get("Select/marcas.php",{param_id:id})
			.done(function(data){
				$("#select_marcas").html(data);
			})
		})

		$("#select_marcas").change(function(){
			var id = $("#select_marcas").val();
			$.get("Select/modelos.php",{param_id:id})
			.done(function(data){
				$("#select_modelos").html(data);
			})
		})

		$("#select_modelos").change(function(){
			var id = $("#select_modelos").val();
			$.get("Select/version.php",{param_id:id})
			.done(function(data){
				$("#select_version").html(data);
			})
		})

	})
</script>

<div class="row" style="background-color:#000;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">ADMINISTRAR DESTACADOS</strong>
</div>
<br>
<br>
<div class="row">

<?php 
if(isset($_POST["destacado"]) && isset($_POST["publicacion_id"]))
{
	$titulo = "";
	if(isset($_POST["titulo_destacado"]))
		$titulo = $_POST["titulo_destacado"];

	$destacado = 0;
	if($_POST["destacado"] == 0)
		$destacado = 1;

	if($obj_publicaciones->AgregarQuitarDestacado($_POST["publicacion_id"], $destacado, $titulo))
	{
		if($destacado == 0)
		{
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-success">
						<strong>SE HA QUITADO EL DESTACADO CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
		}else
		{
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-success">
						<strong>DESTACADO ESTABLECIDO CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
		}
	}
}

if(isset($_POST["select_version"]))
{
	$res = $obj_publicaciones->ExtraerID($_POST["select_version"]);
	$row = mysql_fetch_assoc($res);

	$cuerpos = $obj_cuerpos->NombreCuerpo($row["CUERPOS_ID"]);
	$year = $row["YEAR"];
	$combustible = $row["COMBUSTIBLE"];
	$potencia = $row["POTENCIA"];
	$puertas = $row["PUERTAS"];
	$maletero = $row["MALETERO"];
	$co2 = $row["CO2"];
	$precio = $row["PRECIO"];
	$video = $row["VIDEO"];

	$destacado = $row["DESTACADO"];

?>
<div class="col-lg-2 col-md-2 col-sm-2">
</div>
<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
<form action="" method="post" enctype="multipart/form-data" name="form_publicaciones" id="form_publicaciones">

<input name="publicacion_id" type="hidden" id="publicacion_id" value="<?php echo $_POST["select_version"]; ?>" />

<table class="table table-striped table-hover" width="100%">

<tr>
	<td>
    <strong>Cuerpo de Carro: </strong>
    </td>

	<td>
		<?php echo $cuerpos; ?>
    </td>
</tr>


<tr>
	<td>
    <strong>Año: </strong>
    </td>

	<td>
    <?php echo $year; ?>
    </td>
</tr>

<tr>
	<td>
    <strong><img src="Archivos/Caracteristicas/combustible.png" width="40%" /><br />
	Combustible: </strong>
    </td>

	<td>
		<?php echo $combustible; ?>
    </td>
</tr>

<tr>
	<td>
    <strong><img src="Archivos/Caracteristicas/potencia.png" width="40%" /><br />
	Potencia: </strong>
    </td>

	<td>
		<?php echo $potencia; ?>
    </td>
</tr>

<tr>
	<td>
    <strong><img src="Archivos/Caracteristicas/puertas.png" width="40%" /><br />
	Puertas: </strong>
    </td>

	<td>
		<?php echo $puertas; ?>
    </td>
</tr>

<tr>
	<td>
    <strong><img src="Archivos/Caracteristicas/maletero.png" width="40%" /><br />
	Maletero: </strong>
    </td>

	<td>
    	<?php echo $maletero; ?>
    </td>
</tr>

<tr>
	<td>
    <strong><img src="Archivos/Caracteristicas/co2.png" width="40%" /><br />
	Co2: </strong>
    </td>

	<td>
    	<?php echo $co2; ?>
    </td>
</tr>

<tr>
	<td>
    <strong>Precio $: </strong>
    </td>

	<td>
    	<?php echo $precio; ?>
    </td>
</tr>

<tr>
	<td>
    <strong>Video Explicativo: </strong>
    </td>

	<td>
	    <?php echo $video; ?>
    </td>
</tr>

</table>
<br />
<br /><br />
<br />
<input name="destacado" type="hidden" id="destacado" value="<?php echo $destacado; ?>" />
<?php
if($destacado == 0)
{
?>
<strong>DESCRIPCIÓN DEL DESTACADO</strong><br /><br />

<input class="input input-lg" name="titulo_destacado" type="text" id="titulo_destacado" placeholder="Descripcion Corta" /><br />
<div id="error_destacado"></div>
<br />
<br />
<br />

<strong style="font-size:20px;color:#F00">DESEA COLOCAR EN DESTACADO ESTA PUBLICACIÓN?</strong><br />
<br />

<input name="agregar" class="btn btn-success btn-lg" type="button" id="agregar" value="ESTABLECER DESTACADO" onclick="Revisar()" />
<?php
}
else
{
?>
<strong style="font-size:20px;color:#F00">DESEA QUITAR EL DESTACADO DE ESTA PUBLICACIÓN?</strong><br />
<br />

<input name="agregar" class="btn btn-danger btn-lg" type="submit" id="agregar" value="QUITAR DESTACADO" />
<?php
}
?>

</form>
</div>
<div class="col-lg-2 col-md-2 col-sm-2">
</div>
<?php
}
else if(isset($_POST["agr_elm_destacado"]))
{
?>
<form action="" method="post" enctype="multipart/form-data" name="form_publicaciones" id="form_publicaciones">
<div class="col-lg-4 col-md-3 col-sm-2">
</div>

<div class="col-lg-4 col-md-6 col-sm-10 col-xs-12">

<strong>SELECCIONE EL MODELO AL QUE DESEA AGREGAR O QUITAR EL DESTACADO: </strong><br />

<?php
	if($_SESSION['tipo_usuario'] == 1)
	{
?>
<br />
<br />
		<strong>Concesionario:</strong><br />
		<select class="input input-lg" id="select_concesionarios" name="select_concesionarios">
			
		</select>
<br />
<br />
		<strong>Marca:</strong><br />
		<select class="input input-lg" id="select_marcas" name="select_marcas">
			
		</select>
<br />
<br />
		<strong>Modelo: </strong><br />
		<select class="input input-lg" id="select_modelos" name="select_modelos">
			
		</select>
<br />
<br />
		<strong>Versión: </strong><br />
		<select class="input input-lg" id="select_version" name="select_version" onchange="document.form_publicaciones.submit()">
			
		</select>
<?php
	}
	else if($_SESSION['tipo_usuario'] == 2)
	{

		$res = $obj_marcas->Extraer_Informacion_Usuario($_SESSION["username"]);
		
		$row = mysql_fetch_assoc($res);
	
		$idmarca   = $row["IDMAR"];

?>
<br />
<br />
		<strong>Modelo: </strong><br />
		<select class="input input-lg" id="select_modelos" name="select_modelos">
		  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
			<?php
				$res = $obj_publicaciones->ExtraerPorMarcas($idmarca);

				while ($row = mysql_fetch_assoc($res)){
					echo '<option value="'.$row['ID'].'">'.$row['MODELO'].' - '.$row['YEAR'].'</option>';
				}
			?>
			
		</select>
<br />
<br />
		<strong>Versión: </strong><br />
		<select class="input input-lg" id="select_version" name="select_version" onchange="document.form_publicaciones.submit()">
			
		</select>

<?php 
	}
?>
</div>

<div class="col-lg-4 col-md-3 col-sm-2">
</div>
</form>
<?php
}
else
{
?>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="agr_elm_destacado" type="hidden" id="agr_elm_destacado" value="">
<input name="agregar" class="btn btn-primary btn-lg" type="submit" id="agregar" value="Agregar/Quitar Destacado">
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
