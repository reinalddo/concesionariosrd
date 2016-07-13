<script>
function EnviarCita()
{
	var acepto = true;
	
	if(document.getElementById("nombre_cita").value == "")
	{
		acepto = false;
		alert("DEBE INTRODUCIR UN NOMBRE");
	}

	if(document.getElementById("apellido_cita").value == "")
	{
		acepto = false;
		alert("DEBE INTRODUCIR UN APELLIDO");
	}

	if(document.getElementById("telefono_cita").value == "")
	{
		acepto = false;
		alert("DEBE INTRODUCIR UN TELÉFONO");
	}

	if(document.getElementById("correo_cita").value == "")
	{
		acepto = false;
		alert("DEBE INTRODUCIR UN CORREO");
	}

	if(document.getElementById("ciudad_cita").value == "")
	{
		acepto = false;
		alert("DEBE INTRODUCIR UNA CIUDAD");
	}
	
	if(acepto) document.cita.submit();
}
</script>
<!-- PUBLICACIONES RECIENTES -->
<br />
<div class="row" style="background-color:#CCC;padding:10px;border-radius:5px">
<div style="font-weight:bold;font-size:24px;color:#FFF">DETALLES DE LA VERSIÓN</div>
</div>
<?php

	$id_publ = $_GET['publicacion'];
	
	$res_publ = $obj_publicaciones->ExtraerID($id_publ);
	$row_publ = mysql_fetch_assoc($res_publ);

		$marcas_id   = $row_publ["MARCAS_ID"]; 
		$cuerpos_id  = $row_publ["CUERPOS_ID"];
		$modelos_id  = $row_publ["MODELOS_ID"];
		$version     = $row_publ["VERSION"];
		$year        = $row_publ["YEAR"];
		$combustible = $row_publ["COMBUSTIBLE"];
		$potencia    = $row_publ["POTENCIA"];
		$puertas     = $row_publ["PUERTAS"];
		$maletero    = $row_publ["MALETERO"];
		$co2         = $row_publ["CO2"];
		$colorext    = $row_publ["COLOREXT"];
		$colorint    = $row_publ["COLORINT"];
		$motor       = $row_publ["MOTOR"];
		$transmision = $row_publ["TRANSMISION"];
		$traccion    = $row_publ["TRACCION"];
		$velocidadmax= $row_publ["VELOCIDADMAX"];
		$valvulas    = $row_publ["VALVULAS"];
		$slider      = $row_publ["SLIDER"];
		$precio      = $row_publ["PRECIO"];
		$video       = $row_publ["VIDEO"];
		$descarga    = $row_publ["DESCARGA"];


			$res_marcas = $obj_marcas->Extraer_Marca($marcas_id);
			
			$row_marcas = mysql_fetch_assoc($res_marcas);
		
			$concesionarios_id     = $row_marcas["ID_CONCESIONARIOS"];
			$logo_marca            = $row_marcas["LOGO"];
			$nombre_marca          = $row_marcas["NOMBRE"];
			$fotopres_marca        = $row_marcas["FOTOPRES"];
			$nombrepres_marca      = $row_marcas["NOMBREPRES"];
			$fotogerente_marca     = $row_marcas["FOTOGERENTE"];
			$nombregerente_marca   = $row_marcas["NOMBREGERENTE"];
			$correogerente_marca   = $row_marcas["CORREOGERENTE"];
			$extgerente_marca      = $row_marcas["EXTGERENTE"];
			$contactogerente_marca = $row_marcas["CONTACTOGERENTE"];
			$usuariogerente_marca  = $row_marcas["USUARIOGERENTE"];

				$res_conc = $obj_concesionarios->Extraer_ID($concesionarios_id);

				$row_conc = mysql_fetch_assoc($res_conc);

				$logo_conc      = $row_conc["LOGO"];
				$nombre_conc    = $row_conc["NOMBRE"];
				$direccion_conc = $row_conc["DIRECCION"];
				$oficina_conc   = $row_conc["OFICINA"];
//				$celular_conc   = $row_conc["CELULAR"];
				$correo_conc    = $row_conc["CORREO"];
				$googlemap_conc = $row_conc["GOOGLEMAP"];
				
	$nombre_modelo = $obj_modelos->NombreModelo($modelos_id);

?>

<div class="row">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:600px;width:100%;vertical-align:middle;background-color:#666">

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  
  <div class="carousel-inner" role="listbox">

<?php

$res_fotos = $obj_fotos->Extraer($_GET['publicacion']);

$g = 0;
while($row_fotos = mysql_fetch_assoc($res_fotos))
{
?>
    <div class="item <?php if($g == 0){ ?>active<?php } ?>" style="color:666;">
      <img src="admin/Archivos/Publicaciones/<?php echo $row_fotos["IMAGEN"]; ?>"width="100%">
	</div>
<?php
$g++;
}
?>
<!--
    <div class="item" style="color:666;">
      <img src="Carros/2.jpg"width="100%" />
     </div>


    <div class="item" style="color:666;">
      <img src="Carros/3.jpg"width="100%" />
	</div>


    <div class="item" style="color:666;">
      <img src="Carros/4.jpg"width="100%" />
	</div>


    <div class="item" style="color:666;">
      <img src="Carros/5.jpg"width="100%" />
	</div>


    <div class="item" style="color:666;">
      <img src="Carros/6.jpg"width="100%" />
	</div>
-->
  </div>

  <!-- Indicators -->
  <ol class="carousel-indicators" style="background-color:#666;opacity:0.5">
  
<?php
 for($i = 0; $i < $g; $i++)
 {
?>
    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i.""; ?>" <?php if($i == 0){ ?>class="active"<?php } ?>></li>
<?php
 }
?>
<!--
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
-->
  </ol>
<!-- -->
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>

<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#E8E8E8"><?php echo $nombre_modelo." - ".$version." ".$year; ?></div>
<div class="row"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#E8E8E8">

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="font-size:10px">
<img src="admin/Archivos/Caracteristicas/combustible.png" class="grises" width="100%" />
Combustible<br />
<strong><?php echo $combustible; ?></strong>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="font-size:10px">
<img src="admin/Archivos/Caracteristicas/potencia.png" class="grises" width="100%" />
Potencia y Torque<br />
<strong><?php echo $potencia; ?></strong>
</div>

<div class="col-lg-2 col-md-42 col-sm-2 col-xs-3" style="font-size:10px">
<img src="admin/Archivos/Caracteristicas/puertas.png" class="grises" width="100%" />
Puertas<br />
<strong><?php echo $puertas; ?></strong>
</div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="font-size:10px">
<img src="admin/Archivos/Caracteristicas/maletero.png" class="grises" width="100%" />
Maletero<br />
<strong><?php echo $maletero; ?></strong>
</div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="font-size:10px">
<img src="admin/Archivos/Caracteristicas/co2.png" class="grises" width="100%" />
Co2<br />
<strong><?php echo $co2; ?></strong>
</div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="font-size:10px">
<img src="admin/Archivos/Caracteristicas/carretera.png" class="grises" width="100%" />
Consumo Ciudad<br />
<strong><?php echo $colorext; ?></strong>
</div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="font-size:10px">
<img src="admin/Archivos/Caracteristicas/carretera.png" class="grises" width="100%" />
Consumo Carretera<br />
<strong><?php echo $colorint; ?></strong>
</div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="font-size:10px">
<img src="admin/Archivos/Caracteristicas/motor.png" class="grises" width="100%" />
Motor<br />
<strong><?php echo $motor; ?></strong>
</div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="font-size:10px">
<img src="admin/Archivos/Caracteristicas/transmision.png" class="grises" width="100%" />
Transmisión<br />
<strong><?php echo $transmision; ?></strong>
</div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="font-size:10px">
<img src="admin/Archivos/Caracteristicas/traccion.png" class="grises" width="100%" />
Tracción<br />
<strong><?php echo $traccion; ?></strong>
</div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="font-size:10px">
<img src="admin/Archivos/Caracteristicas/valvulas.png" class="grises" width="100%" />
Cilindros<br />
<strong><?php echo $valvulas; ?></strong>
</div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="font-size:10px">
<img src="admin/Archivos/Caracteristicas/velocidad.png" class="grises" width="100%" />
Velocidad Máxima<br />
<strong><?php echo $velocidadmax; ?></strong>
</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
</div>

</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#999999">PRECIO USD$: <?php echo $precio; ?> </div>
<div class="row"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
<br />
<br />
<?php include("fullslider.php"); ?>
<br />
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<br />
<br />

<form action="imprimir.php" method="post" name="imprimir" target="new" id="imprimir">
<input name="imagen" type="hidden" id="imagen" value="<?php echo $slider; ?>" />
<input name="logocon" type="hidden" id="logocon" value="<?php echo $logo_conc; ?>" />
<input name="fotopres" type="hidden" id="fotopres" value="<?php echo $fotopres_marca; ?>" />
<input name="fotogerente" type="hidden" id="fotogerente" value="<?php echo $fotogerente_marca; ?>" />
<input name="dircon" type="hidden" id="dircon" value="<?php echo $direccion_conc; ?>" />
<input name="telof" type="hidden" id="telof" value="<?php echo $oficina_conc; ?>" />
<input name="correocon" type="hidden" id="correocon" value="<?php echo $correo_conc; ?>" />
<input name="nombrepres" type="hidden" id="nombrepres" value="<?php echo $nombrepres_marca; ?>" />
<input name="nombreger" type="hidden" id="nombreger" value="<?php echo $nombregerente_marca; ?>" />
<input name="correoger" type="hidden" id="correoger" value="<?php echo $correogerente_marca; ?>" />
<input name="telger" type="hidden" id="telger" value="<?php echo $contactogerente_marca." (Ext: ".$extgerente_marca.") "; ?>" />
<input name="descripcion" type="hidden" id="descripcion" value="<?php echo $id_publ; ?>" />
<input name="combustible" type="hidden" id="combustible" value="<?php echo $combustible; ?>" />
<input name="potencia" type="hidden" id="potencia" value="<?php echo $potencia; ?>" />
<input name="puertas" type="hidden" id="puertas" value="<?php echo $puertas; ?>" />
<input name="maletero" type="hidden" id="maletero" value="<?php echo $maletero; ?>" />
<input name="co2" type="hidden" id="co2" value="<?php echo $co2; ?>" />
<input name="colorext" type="hidden" id="colorext" value="<?php echo $colorext; ?>" />
<input name="colorint" type="hidden" id="colorint" value="<?php echo $colorint; ?>" />
<input name="motor" type="hidden" id="motor" value="<?php echo $motor; ?>" />
<input name="transmision" type="hidden" id="transmision" value="<?php echo $transmision; ?>" />
<input name="traccion" type="hidden" id="traccion" value="<?php echo $traccion; ?>" />
<input name="valvulas" type="hidden" id="valvulas" value="<?php echo $valvulas; ?>" />
<input name="velocidadmax" type="hidden" id="velocidadmax" value="<?php echo $velocidadmax; ?>" />
<input name="version" type="hidden" id="version" value="<?php echo $nombre_modelo." - ".$version." ".$year; ?>" />

<input name="boton" type="submit" class="btn btn-primary btn-lg" id="boton" value="Imprimir Página" />

</form>
</div>

<?php
if(isset($_POST["email"]))
{
	$slider = $_POST["imagen"];
	$logocon = $_POST["logocon"];
	$fotopres = $_POST["fotopres"];
	$fotogerente = $_POST["fotogerente"];
	$dircon = $_POST["dircon"];
	$telof     = $_POST["telof"];
	$correocon = $_POST["correocon"];
	$nombrepres = $_POST["nombrepres"];
	$nombreger = $_POST["nombreger"];
	$correoger = $_POST["correoger"];
	$telger = $_POST["telger"];
	$id_publ = $_POST["descripcion"];
	$combustible = $_POST["combustible"];
	$potencia = $_POST["potencia"];
	$puertas = $_POST["puertas"];
	$maletero = $_POST["maletero"];
	$co2 = $_POST["co2"];
	$colorext = $_POST["colorext"];
	$colorint = $_POST["colorint"];
	$motor = $_POST["motor"];
	$transmision = $_POST["transmision"];
	$traccion = $_POST["traccion"];
	$valvulas = $_POST["valvulas"];
	$velocidadmax = $_POST["velocidadmax"];
	$version = $_POST["version"];
	$email = $_POST["email"];

$para = "$email";
$titulo = "Publicación de $version";
$mensaje = '
<html>
<head>
  <title>Concesionariosrd.com</title>
</head>
<body>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
    <td height="53" colspan="10"><img src="http://concesionariosrd.com/logo.png" width="300px" /></td>
  </tr>
  <tr>
    <td height="53" colspan="10" bgcolor="#CCCCCC" style="font-size:20px;font-weight:bold;color:#FFF">Detalles de la Versión</td>
  </tr>
  <tr>
    <td colspan="4" rowspan="4"><img src="http://concesionariosrd.com/admin/Archivos/Slider/'.$slider.'" width="300px" /></td>
    <td width="21">&nbsp;</td>
    <td width="109"><img src="http://concesionariosrd.com/admin/Archivos/Concesionarios/'.$logocon.'" width="100px" /></td>
    <td width="30">&nbsp;</td>
    <td width="100"><img src="http://concesionariosrd.com/admin/Archivos/Presidentes/'.$fotopres.'" width="100px" /></td>
    <td width="30">&nbsp;</td>
    <td width="100"><img src="http://concesionariosrd.com/admin/Archivos/Gerentes/'.$fotogerente.'" width="100px" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Dirección: </strong>'.$dircon.'</td>
    <td>&nbsp;</td>
    <td><strong>Sr: </strong>'.$nombrepres.'</td>
    <td>&nbsp;</td>
    <td><strong>Sr: </strong>'.$nombreger.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Oficina: </strong>'.$telof.'</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Correo: </strong>'.$correoger.'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Correo: </strong>'.$correocon.'</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Teléfono: </strong>'.$telger.'</td>
  </tr>
  <tr>
    <td colspan="4" align="center" style="font-size:25px"><strong>'.$version.'</strong>&nbsp;</td>
    <td colspan="6" rowspan="7" align="center"><img src="http://concesionariosrd.com/logo.png" width="350px" /></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="80" align="center"><img src="http://concesionariosrd.com/admin/Archivos/Caracteristicas/combustible.png" width="50" /><br /><strong style="font-size:10px">Combustible</strong><br />'.$combustible.'</td>
    <td width="73" align="center"><img src="http://concesionariosrd.com/admin/Archivos/Caracteristicas/potencia.png" width="50" /><br /><strong style="font-size:10px">Potencia y Torque</strong><br />'.$potencia.'</td>
    <td width="73" align="center"><img src="http://concesionariosrd.com/admin/Archivos/Caracteristicas/puertas.png" width="50" /><br /><strong style="font-size:10px">Puertas</strong><br />'.$puertas.'</td>
    <td width="74" align="center"><img src="http://concesionariosrd.com/admin/Archivos/Caracteristicas/maletero.png" width="50" /><br /><strong style="font-size:10px">Maletero</strong><br />'.$maletero.'</td>
  </tr>
  <tr align="center">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <td><img src="http://concesionariosrd.com/admin/Archivos/Caracteristicas/co2.png" width="50" /><br /><strong style="font-size:10px">Co2</strong><br />'.$co2.'</td>
    <td><img src="http://concesionariosrd.com/admin/Archivos/Caracteristicas/color.png" width="50" /><br /><strong style="font-size:10px">Color Exterior</strong><br />'.$colorext.'</td>
    <td><img src="http://concesionariosrd.com/admin/Archivos/Caracteristicas/color.png" width="50" /><br /><strong style="font-size:10px">Color Interior</strong><br />'.$colorint.'</td>
    <td><img src="http://concesionariosrd.com/admin/Archivos/Caracteristicas/motor.png" width="50" /><br /><strong style="font-size:10px">Motor</strong><br />'.$motor.'</td>
  </tr>
  <tr align="center">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <td><img src="http://concesionariosrd.com/admin/Archivos/Caracteristicas/transmision.png" width="50" /><br /><strong style="font-size:10px">Transmisión</strong><br />'.$transmision.'</td>
    <td><img src="http://concesionariosrd.com/admin/Archivos/Caracteristicas/traccion.png" width="50" /><br /><strong style="font-size:10px">Tracción</strong><br />'.$traccion.'</td>
    <td><img src="http://concesionariosrd.com/admin/Archivos/Caracteristicas/valvulas.png" width="50" /><br /><strong style="font-size:10px">Válvulas</strong><br />'.$valvulas.'</td>
    <td><img src="http://concesionariosrd.com/admin/Archivos/Caracteristicas/velocidad.png" width="50" /><br /><strong style="font-size:10px">Velocidad Máxima</strong><br />'.$velocidadmax.'</td>
  </tr>
  <tr>
    <td colspan="10">&nbsp;</td>
  </tr>
  <tr>
    <td height="51" colspan="10" bgcolor="#000" style="font-size:20px;font-weight:bold;" align="center"><a style="color:#FFF" href="http://concesionariosrd.com/detalles.php?publicacion='.$id_publ.'" target="new">VER PUBLICACIÓN COMPLETA</a></td>
  </tr>
  <tr>
    <td colspan="10">&nbsp;</td>
  </tr>
</table>

</body>
</html>
';
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'From: Concesionariosrd.com <info@concesionariosrd.com>' . "\r\n";
$cabeceras .= 'Cc: '.$email.'' . "\r\n";

// Enviarlo
mail($para, $titulo, $mensaje, $cabeceras);

}
?>

<form action="detalles.php?publicacion=<?php echo $id_publ; ?>" method="post" name="imprimir" id="imprimir">

<input name="imagen" type="hidden" id="imagen" value="<?php echo $slider; ?>" />
<input name="logocon" type="hidden" id="logocon" value="<?php echo $logo_conc; ?>" />
<input name="fotopres" type="hidden" id="fotopres" value="<?php echo $fotopres_marca; ?>" />
<input name="fotogerente" type="hidden" id="fotogerente" value="<?php echo $fotogerente_marca; ?>" />
<input name="dircon" type="hidden" id="dircon" value="<?php echo $direccion_conc; ?>" />
<input name="telof" type="hidden" id="telof" value="<?php echo $oficina_conc; ?>" />
<input name="correocon" type="hidden" id="correocon" value="<?php echo $correo_conc; ?>" />
<input name="nombrepres" type="hidden" id="nombrepres" value="<?php echo $nombrepres_marca; ?>" />
<input name="nombreger" type="hidden" id="nombreger" value="<?php echo $nombregerente_marca; ?>" />
<input name="correoger" type="hidden" id="correoger" value="<?php echo $correogerente_marca; ?>" />
<input name="telger" type="hidden" id="telger" value="<?php echo $contactogerente_marca." (Ext: ".$extgerente_marca.") "; ?>" />
<input name="descripcion" type="hidden" id="descripcion" value="<?php echo $id_publ; ?>" />
<input name="combustible" type="hidden" id="combustible" value="<?php echo $combustible; ?>" />
<input name="potencia" type="hidden" id="potencia" value="<?php echo $potencia; ?>" />
<input name="puertas" type="hidden" id="puertas" value="<?php echo $puertas; ?>" />
<input name="maletero" type="hidden" id="maletero" value="<?php echo $maletero; ?>" />
<input name="co2" type="hidden" id="co2" value="<?php echo $co2; ?>" />
<input name="colorext" type="hidden" id="colorext" value="<?php echo $colorext; ?>" />
<input name="colorint" type="hidden" id="colorint" value="<?php echo $colorint; ?>" />
<input name="motor" type="hidden" id="motor" value="<?php echo $motor; ?>" />
<input name="transmision" type="hidden" id="transmision" value="<?php echo $transmision; ?>" />
<input name="traccion" type="hidden" id="traccion" value="<?php echo $traccion; ?>" />
<input name="valvulas" type="hidden" id="valvulas" value="<?php echo $valvulas; ?>" />
<input name="velocidadmax" type="hidden" id="velocidadmax" value="<?php echo $velocidadmax; ?>" />
<input name="version" type="hidden" id="version" value="<?php echo $nombre_modelo." - ".$version." ".$year; ?>" />

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<strong style="font-size:18px">Enviar Publicación</strong><br />
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input class="input input-lg" name="email" type="text" id="email" placeholder="Ingrese Correo..." />
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

<button name="Enviar" type="buton" class="btn btn-primary btn-lg">
Enviar a un Amigo
</button>

</div>

</div>

</form>

</div>

</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px;" align="center"><br />
<table class="table" width="100%">
<tr>
<td>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<img src="admin/Archivos/Concesionarios/<?php echo $logo_conc; ?>" width="100%" /><br /><br />

<p style="font-size:12px;width:100%;word-wrap:break-word">
<strong>Dirección:</strong><br />
<?php echo $direccion_conc; ?><br /><br />

<strong>Oficina: </strong> <?php echo $oficina_conc; ?><br />
<!--<strong>Celular: </strong> <?php// echo $celular_conc; ?><br />-->
<strong>Correo: </strong> <?php echo $correo_conc; ?>
</p>
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<img src="admin/Archivos/Presidentes/<?php echo $fotopres_marca; ?>" width="100%" /><br /><br />
<p style="font-size:12px;width:100%;word-wrap:break-word">
<strong>Presidente</strong><br />
<strong>Sr:</strong> <br />
<?php echo $nombrepres_marca; ?><br />
</p>
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<img src="admin/Archivos/Gerentes/<?php echo $fotogerente_marca; ?>" width="100%" /><br /><br />
<p style="font-size:12px;width:100%;word-wrap:break-word">
<strong>Gerente General de Ventas de la Marca <?php echo $nombre_marca; ?></strong><br />
<strong>Sr:</strong> <br />
<?php echo $nombregerente_marca; ?><br />
<strong>Mail:</strong> <br />
<?php echo $correogerente_marca; ?><br />
<strong>Teléfono:</strong> <br />
<?php echo $contactogerente_marca." (Ext: ".$extgerente_marca.") "; ?><br />
</p>
</div>

</td>
</tr>

<tr>
<td>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php echo $googlemap_conc; ?>
</div>
</td>
</tr>
</table>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

<?php 
$costo = $precio;
$costo = str_replace(".00", "", $costo);
$costo = str_replace(",", "", $costo);
$costo = str_replace(".", ",", $costo);
?>
<form action="bancos.php?costo=<?php echo $costo; ?>" method="post">
<input name="boton" type="submit" class="btn btn-primary btn-lg" id="boton" value="Calcular Financiamientos" />

</form>

</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

<form action="seguros.php" method="post">
<input name="boton" type="submit" class="btn btn-primary btn-lg" id="boton" value="Calcular Seguros" />

</form>

</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<br />
<br />
<strong style="text-align:justify">PROGRAME UNA CITA/HAGA UN TEST DRIVE/CONTACTAR O LLAME AL VENDEDOR.</strong>
<br />
<br />
<?php include("cita.php"); ?>
</div>

</div>

</div>


<br />
<div class="row" style="background-color:#CCC;padding:10px;border-radius:5px">
<div style="font-weight:bold;font-size:24px;color:#FFF">DESCRIPCIÓN</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<br />
<br />
<?php if(file_exists("admin/Archivos/PublicacionesDesc/Desc_".$id_publ.".html")){include("admin/Archivos/PublicacionesDesc/Desc_".$id_publ.".html");} ?>
<br />
<br />
<br />
<br />
<?php
if($descarga)
{
?>
<a href="admin/Archivos/Descargas/<?php echo $descarga; ?>" target="new">Descargar Archivo de Información Adicional</a><br />
<?php
}
?>
<br />
</div>
</div>
<?php
include("fichatecnica.php");
?>
<div class="row" style="background-color:#CCC;padding:10px;border-radius:5px">
<div style="font-weight:bold;font-size:24px;color:#FFF">VIDEO EXPLICATIVO</div>
</div>
<br />
<br />
<div class="row">
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
</div>
<?php 

$video = str_replace("https:", "", $video);
$video = str_replace("http:", "", $video);
$video = str_replace("watch?v=", "embed/", $video);
?>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
<iframe width="100%" height="500" src="<?php echo $video; ?>" frameborder="0" allowfullscreen></iframe>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
</div>
</div>
<br />
<br />
