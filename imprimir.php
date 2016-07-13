<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Imprimir Página</title>
</head>

<body>
<?php
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

include("admin/clases.php");
$googlemap = $obj_publicaciones->ExtraerGoogleMap($id_publ);
$googlemap = $googlemap["GOOGLEMAP"];

?>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
    <td height="53" colspan="10"><img src="logo.png" width="300px" /></td>
  </tr>
  <tr>
    <td height="53" colspan="10" bgcolor="#CCCCCC" style="font-size:20px;font-weight:bold;color:#FFF">Detalles de la Versión</td>
  </tr>
  <tr>
    <td colspan="4" rowspan="4"><img src="admin/Archivos/Slider/<?php echo $slider; ?>" width="300px" /></td>
    <td width="21">&nbsp;</td>
    <td width="109"><img src="admin/Archivos/Concesionarios/<?php echo $logocon; ?>" width="100px" /></td>
    <td width="30">&nbsp;</td>
    <td width="100"><img src="admin/Archivos/Presidentes/<?php echo $fotopres; ?>" width="100px" /></td>
    <td width="30">&nbsp;</td>
    <td width="100"><img src="admin/Archivos/Gerentes/<?php echo $fotogerente; ?>" width="100px" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Dirección: </strong><?php echo $dircon; ?></td>
    <td>&nbsp;</td>
    <td><strong>Sr: </strong><?php echo $nombrepres; ?></td>
    <td>&nbsp;</td>
    <td><strong>Sr: </strong><?php echo $nombreger; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Oficina: </strong><?php echo $telof; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Correo: </strong><?php echo $correoger; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Correo: </strong><?php echo $correocon; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Teléfono: </strong><?php echo $telger; ?></td>
  </tr>
  <tr>
    <td colspan="4" align="center" style="font-size:25px"><strong><?php echo $version; ?></strong>&nbsp;</td>
    <td colspan="6" rowspan="7" align="center"><img src="logo.png" width="350px" /></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="80" align="center"><img src="admin/Archivos/Caracteristicas/combustible.png" width="50" /><br /><strong style="font-size:10px">Combustible</strong><br /><?php echo $combustible; ?></td>
    <td width="73" align="center"><img src="admin/Archivos/Caracteristicas/potencia.png" width="50" /><br /><strong style="font-size:10px">Potencia</strong><br /><?php echo $potencia; ?></td>
    <td width="73" align="center"><img src="admin/Archivos/Caracteristicas/puertas.png" width="50" /><br /><strong style="font-size:10px">Puertas</strong><br /><?php echo $puertas; ?></td>
    <td width="74" align="center"><img src="admin/Archivos/Caracteristicas/maletero.png" width="50" /><br /><strong style="font-size:10px">Maletero</strong><br /><?php echo $maletero; ?></td>
  </tr>
  <tr align="center">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <td><img src="admin/Archivos/Caracteristicas/co2.png" width="50" /><br /><strong style="font-size:10px">Co2</strong><br /><?php echo $co2; ?></td>
    <td><img src="admin/Archivos/Caracteristicas/color.png" width="50" /><br /><strong style="font-size:10px">Color Exterior</strong><br /><?php echo $colorext; ?></td>
    <td><img src="admin/Archivos/Caracteristicas/color.png" width="50" /><br /><strong style="font-size:10px">Color Interior</strong><br /><?php echo $colorint; ?></td>
    <td><img src="admin/Archivos/Caracteristicas/motor.png" width="50" /><br /><strong style="font-size:10px">Motor</strong><br /><?php echo $motor; ?></td>
  </tr>
  <tr align="center">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <td><img src="admin/Archivos/Caracteristicas/transmision.png" width="50" /><br /><strong style="font-size:10px">Transmisión</strong><br /><?php echo $transmision; ?></td>
    <td><img src="admin/Archivos/Caracteristicas/traccion.png" width="50" /><br /><strong style="font-size:10px">Tracción</strong><br /><?php echo $traccion; ?></td>
    <td><img src="admin/Archivos/Caracteristicas/valvulas.png" width="50" /><br /><strong style="font-size:10px">Válvulas</strong><br /><?php echo $valvulas; ?></td>
    <td><img src="admin/Archivos/Caracteristicas/velocidad.png" width="50" /><br /><strong style="font-size:10px">Velocidad Máxima</strong><br /><?php echo $velocidadmax; ?></td>
  </tr>
  <tr>
    <td colspan="10">&nbsp;</td>
  </tr>
  <tr>
    <td height="51" colspan="10" bgcolor="#CCCCCC" style="font-size:20px;font-weight:bold;color:#FFF">Descripcion</td>
  </tr>
  <tr>
    <td colspan="10">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="10">
	<?php if(file_exists("admin/Archivos/PublicacionesDesc/Desc_".$id_publ.".html")){include("admin/Archivos/PublicacionesDesc/Desc_".$id_publ.".html");} ?>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div align="center">
<input name="Botón" type="button" class="btn btn-primary btn-lg" value="Imprimir Página" onclick="window.print()" />
</div>
<br />
<br />
<br />

</body>
</html>