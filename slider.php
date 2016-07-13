<div id="reciente_id">
<div class="row" style="background-color:#CCC;padding:10px;border-radius:5px">
<br />
<div style="font-weight:bold;font-size:24px;color:#FFF">PUBLICACIÓN RECIENTE</div>
</div>
</div>

<div class="row">

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  
  <div class="carousel-inner" role="listbox">
<?php
	$res_publ = $obj_publicaciones->Extraer();

$g = 0;
while($row_publ = mysql_fetch_assoc($res_publ))
{
		$id_publ     = $row_publ["ID"];
		$modelos_id  = $row_publ["MODELOS_ID"];
		$slider      = $row_publ["SLIDER"];
		$version     = $row_publ["VERSION"];
		$year        = $row_publ["YEAR"];
		$precio      = $row_publ["PRECIO"];
		$nombre_modelo = $obj_modelos->NombreModelo($row_publ["MODELOS_ID"]);
//		$foto_publicacion   = $obj_fotos->FotoPublicacion($row_publ["ID"]);
?>
    <div class="item <?php if($g == 0)echo "active"; ?>" style="background-color:#CCC"> <a href="detalles.php?publicacion=<?php echo $id_publ; ?>"><img src="admin/Archivos/Slider/<?php echo $slider; ?>" name="slider_id" id="slider_id" /></a>
      <div class="carousel-caption" style="opacity:0.7">
<strong style="color:#FFF;font-size:24px">PUBLICACIÓN RECIENTE</strong>
<br>
<strong style="color:#F30;font-size:24px;opacity:1">Precio USD$ <?php echo $precio; ?></strong>
<br>
<br>
<p style="color:#FFF">
<?php echo $nombre_modelo." - ".$version." ".$year; ?>
</p>
</div>
	</div>
<?php
	$g++;
	if($g == 6) break;
}
?>
<!--
    <div class="item" style="background-color:#CCC">
      <img src="Carros/2.jpg" alt="Imagen 1" height="500px">
      <div class="carousel-caption" style="opacity:0.7">
<strong style="color:#FFF;font-size:24px">PUBLICACIÓN RECIENTE</strong>
<br>
<strong style="color:#F30;font-size:24px;opacity:1">Precio $588,99</strong>
<br>
<br>
<p style="color:#FFF">
Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado    
</p>
</div>
	</div>


    <div class="item" style="background-color:#CCC">
      <img src="Carros/3.jpg" alt="Imagen 1" height="500px">
      <div class="carousel-caption" style="opacity:0.7">
<strong style="color:#FFF;font-size:24px">PUBLICACIÓN RECIENTE</strong>
<br>
<strong style="color:#F30;font-size:24px;opacity:1">Precio $588,99</strong>
<br>
<br>
<p style="color:#FFF">
Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado    
</p>
</div>
	</div>


    <div class="item" style="background-color:#CCC">
      <img src="Carros/4.jpg" alt="Imagen 1" height="500px">
      <div class="carousel-caption" style="opacity:0.7">
<strong style="color:#FFF;font-size:24px">PUBLICACIÓN RECIENTE</strong>
<br>
<strong style="color:#F30;font-size:24px;opacity:1">Precio $588,99</strong>
<br>
<br>
<p style="color:#FFF">
Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado    
</p>
</div>
	</div>


    <div class="item" style="background-color:#CCC">
      <img src="Carros/5.jpg" alt="Imagen 1" height="500px">
      <div class="carousel-caption" style="opacity:0.7">
<strong style="color:#FFF;font-size:24px">PUBLICACIÓN RECIENTE</strong>
<br>
<strong style="color:#F30;font-size:24px;opacity:1">Precio $588,99</strong>
<br>
<br>
<p style="color:#FFF">
Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado    
</p>
</div>
	</div>


    <div class="item" style="background-color:#CCC">
      <img src="Carros/6.jpg" alt="Imagen 1" height="500px">
      <div class="carousel-caption" style="opacity:0.7">
<strong style="color:#FFF;font-size:24px">PUBLICACIÓN RECIENTE</strong>
<br>
<strong style="color:#F30;font-size:24px;opacity:1">Precio $588,99</strong>
<br>
<br>
<p style="color:#FFF">
Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado Descripción del destacado    
</p>
</div>
	</div>
-->
  </div>

  <!-- Indicators --
  <ol class="carousel-indicators" style="background-color:#666;opacity:0.5">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
 <!--   <li data-target="#carousel-example-generic" data-slide-to="2"></li>--
  </ol>
-->
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