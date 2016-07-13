<!-- PUBLICACIONES RECIENTES -->
<div class="row" style="background-color:#000;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">PRÓXIMOS EN LLEGAR AL PARQUE</strong>
</div>

<div class="row">
<?php
	$res_publ = $obj_publicaciones->ExtraerPorLLegar();

$g = 0;
while($row_publ = mysql_fetch_assoc($res_publ))
{
		$id_publ     = $row_publ["ID"];
		$modelos_id  = $row_publ["MODELOS_ID"];
		$marcas_id   = $row_publ["MARCAS_ID"];
		$version     = $row_publ["VERSION"];
		$year        = $row_publ["YEAR"];
		$slider      = $row_publ["SLIDER"];
		$precio      = $row_publ["PRECIO"];
		$nombre_modelo = $obj_modelos->NombreModelo($row_publ["MODELOS_ID"]);
		//$foto_publicacion   = $obj_fotos->FotoPublicacion($row_publ["ID"]);
		$nombre_marca = $obj_marcas->NombreMarca($marcas_id);
?>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#666"> <a href="detalles.php?publicacion=<?php echo $id_publ; ?>"><img src="admin/Archivos/Slider/<?php echo $slider; ?>" width="100%" style="max-height:200px" /></a>
</div>
<div class="row"></div>
<div class="row" style="display:table-cell;height:200px;vertical-align:middle;background-color:#F2F2F2">

<strong style="font-size:20px;color:#F2F2F2"> ***CARRO POR LLEGAR*** </strong>
<strong style="color:#666;font-size:20px">
<br />
<?php echo $nombre_marca; ?>
</strong>
<br>
<p>
<?php echo $nombre_modelo." - ".$version." ".$year; ?>
</p>
<strong style="color:#F30;font-size:20px;opacity:1">Precio USD$<?php echo $precio; ?></strong>
<br>

</div>
</div>
<?php
	$g++;
	if($g == 4) break;
}
?>

</div>