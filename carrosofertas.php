<!-- PUBLICACIONES RECIENTES -->
<br />
<div class="row" style="background-color:#F00;padding:10px;border-radius:5px">
<div style="font-weight:bold;font-size:24px;color:#FFF">OFERTAS DE TEMPORADA</div>
</div>

<div class="row">
<?php

	$res_publ = $obj_publicaciones->ExtraerOfertas();

$g = 0;
while($row_publ = mysql_fetch_assoc($res_publ))
{
		$id_publ     = $row_publ["ID"];
		$modelos_id  = $row_publ["MODELOS_ID"];
		$marcas_id   = $row_publ["MARCAS_ID"];
		$version     = $row_publ["VERSION"];
		$year        = $row_publ["YEAR"];
		$precio      = $row_publ["PRECIO"];
		$titulo      = $row_publ["TITULO_OFERTA"];
		$nombre_modelo = $obj_modelos->NombreModelo($row_publ["MODELOS_ID"]);
		$foto_publicacion   = $row_publ["SLIDER"];//$obj_fotos->FotoPublicacion($row_publ["ID"]);
		$nombre_marca = $obj_marcas->NombreMarca($marcas_id);
?>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#F63"> <a href="detalles.php?publicacion=<?php echo $id_publ; ?>"><img src="admin/Archivos/Publicaciones/<?php echo $foto_publicacion; ?>" width="100%" /></a>
</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:20px;display:table-cell;height:100px;vertical-align:bottom;background-color:#FFFF00"><?php echo $titulo; ?></div>
<div class="row"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#E8E8E8;height:100px">

<strong>
<?php echo $nombre_marca; ?><br />
<?php echo $nombre_modelo." - ".$version." ".$year; ?>
</strong>

</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:16px;display:table-cell;vertical-align:bottom;background-color:#F63">USD$ <?php echo $precio; ?></div>

</div>
<?php
}
?>
<!--
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#F63"> <a href="detalles.php"><img src="Carros/2.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#FFFF00">OFERTA MODELO</div>
<div class="row"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#E8E8E8;height:100px">

<strong>DESCRIPCIÓN DE LA OFERTA</strong>

</div>

<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:16px;display:table-cell;vertical-align:bottom;background-color:#F63">PRECIO OFERTA: 545 $</div>

</div>


<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#F63"> <a href="detalles.php"><img src="Carros/3.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#FFFF00">OFERTA MODELO</div>
<div class="row"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#E8E8E8;height:100px">

<strong>DESCRIPCIÓN DE LA OFERTA</strong>

</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:16px;display:table-cell;vertical-align:bottom;background-color:#F63">PRECIO OFERTA: 545 $</div>

</div>


<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#F63"> <a href="detalles.php"><img src="Carros/4.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#FFFF00">OFERTA MODELO</div>
<div class="row"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#E8E8E8;height:100px">

<strong>DESCRIPCIÓN DE LA OFERTA</strong>

</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:16px;display:table-cell;vertical-align:bottom;background-color:#F63">PRECIO OFERTA: 545 $</div>

</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#F63"> <a href="detalles.php"><img src="Carros/5.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#FFFF00">OFERTA MODELO</div>
<div class="row"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#E8E8E8;height:100px">

<strong>DESCRIPCIÓN DE LA OFERTA</strong>

</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:16px;display:table-cell;vertical-align:bottom;background-color:#F63">PRECIO OFERTA: 545 $</div>

</div>


<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#F63"> <a href="detalles.php"><img src="Carros/6.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#FFFF00">OFERTA MODELO</div>
<div class="row"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#E8E8E8;height:100px">

<strong>DESCRIPCIÓN DE LA OFERTA</strong>

</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:16px;display:table-cell;vertical-align:bottom;background-color:#F63">PRECIO OFERTA: 545 $</div>

</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#F63"> <a href="detalles.php"><img src="Carros/7.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#FFFF00">OFERTA MODELO</div>
<div class="row"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#E8E8E8;height:100px">

<strong>DESCRIPCIÓN DE LA OFERTA</strong>

</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:16px;display:table-cell;vertical-align:bottom;background-color:#F63">PRECIO OFERTA: 545 $</div>

</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#F63"> <a href="detalles.php"><img src="Carros/8.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#FFFF00">OFERTA MODELO</div>
<div class="row"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#E8E8E8;height:100px">

<strong>DESCRIPCIÓN DE LA OFERTA</strong>

</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:16px;display:table-cell;vertical-align:bottom;background-color:#F63">PRECIO OFERTA: 545 $</div>

</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#F63"> <a href="detalles.php"><img src="Carros/9.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#FFFF00">OFERTA MODELO</div>
<div class="row"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#E8E8E8;height:100px">

<strong>DESCRIPCIÓN DE LA OFERTA</strong>

</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:16px;display:table-cell;vertical-align:bottom;background-color:#F63">PRECIO OFERTA: 545 $</div>

</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#F63"> <a href="detalles.php"><img src="Carros/10.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#FFFF00">OFERTA MODELO</div>
<div class="row"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#E8E8E8;height:100px">

<strong>DESCRIPCIÓN DE LA OFERTA</strong>

</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:16px;display:table-cell;vertical-align:bottom;background-color:#F63">PRECIO OFERTA: 545 $</div>

</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#F63"> <a href="detalles.php"><img src="Carros/11.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#FFFF00">OFERTA MODELO</div>
<div class="row"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#E8E8E8;height:100px">

<strong>DESCRIPCIÓN DE LA OFERTA</strong>

</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:16px;display:table-cell;vertical-align:bottom;background-color:#F63">PRECIO OFERTA: 545 $</div>

</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#F63"> <a href="detalles.php"><img src="Carros/12.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#FFFF00">OFERTA MODELO</div>
<div class="row"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#E8E8E8;height:100px">

<strong>DESCRIPCIÓN DE LA OFERTA</strong>

</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:16px;display:table-cell;vertical-align:bottom;background-color:#F63">PRECIO OFERTA: 545 $</div>

</div>
-->
</div>