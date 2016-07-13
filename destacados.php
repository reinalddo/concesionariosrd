<div class="row" style="background-color:#000;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">AUTOMÓVILES DESTACADOS</strong>
</div>


<div class="row" style="background-color:#CCC">
<!-- GALERIA DESTACADOS -->
<?php
	$res_publ = $obj_publicaciones->ExtraerDestacadosRand();

$g = 0;

while($row_publ = mysql_fetch_assoc($res_publ))
{
		$id_publ     = $row_publ["ID"];
		$modelos_id  = $row_publ["MODELOS_ID"];
		$marcas_id   = $row_publ["MARCAS_ID"];
		$version     = $row_publ["VERSION"];
		$year        = $row_publ["YEAR"];
		$precio      = $row_publ["PRECIO"];
		$titulo      = $row_publ["TITULO_DESTACADO"];
		$slider      = $row_publ["SLIDER"];
		$nombre_modelo = $obj_modelos->NombreModelo($row_publ["MODELOS_ID"]);
		//$foto_publicacion   = $obj_fotos->FotoPublicacion($row_publ["ID"]);
		$nombre_marca = $obj_marcas->NombreMarca($marcas_id);
?>

<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display:table-cell;height:200px">
<a href="detalles.php?publicacion=<?php echo $id_publ; ?>"><img src="admin/Archivos/Slider/<?php echo $slider; ?>" width="100%" style="max-height:200px;margin-right:10px"></a>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<strong style="color:#666;font-size:18px"><?php echo substr($titulo, 0, 50); ?></strong>
<br>
<p style="color:#FFF">
<?php echo $nombre_marca; ?><br />
<?php echo $nombre_modelo." - ".$version." ".$year; ?>
</p>
<strong style="color:#F30;font-size:20px;opacity:1">USD$ <?php echo $precio; ?></strong>
<br>
</div>

</div>

<?php
$g++;
if($g == 3) break;
}
?>
<!--
<div class="col-lg-4 col-md-6 col-sm-6">
<table>
<tr valign="middle">
<td style="padding-left:10px">
<img src="Carros/<?php// echo $foto2; ?>.jpg" alt="Imagen 1" width="100%" style="max-height:200px;margin-right:10px">
</td>
<td style="padding-left:10px">
<strong style="color:#666;font-size:20px">TITULO DESTACADO</strong>
<br>
<p style="color:#FFF">
Descripción Corta 
Descripción Corta 
Descripción Corta 
</p>
<strong style="color:#F30;font-size:20px;opacity:1">Precio $588,99</strong>
<br>
</td>
</tr>
</table>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
<table>
<tr valign="middle">
<td style="padding-left:10px">
<img src="Carros/<?php// echo $foto3; ?>.jpg" alt="Imagen 1" width="100%" style="max-height:200px;margin-right:10px">
</td>
<td style="padding-left:10px">
<strong style="color:#666;font-size:20px">TITULO DESTACADO</strong>
<br>
<p style="color:#FFF">
Descripción Corta 
Descripción Corta 
Descripción Corta 
</p>
<strong style="color:#F30;font-size:20px;opacity:1">Precio $588,99</strong>
<br>
</td>
</tr>
</table>
</div>


<!--
<div class="col-lg-12" align="right">
<form action="" method="post" id="vermas" name="vermas">
<input class="btn btn-primary" name="ver" type="button" id="ver" value="Ver más...">
</form>
</div>
-->
</div>