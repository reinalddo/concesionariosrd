<!-- PUBLICACIONES RECIENTES -->
<br />
<div class="row" style="background-color:#CCC;padding:10px;border-radius:5px">
<div style="font-weight:bold;font-size:24px;color:#FFF">VEHÍCULOS DESTACADOS</div>
</div>

<div class="row">
<?php
$pagina = 12;

$res = "";$inicio = ""; $fin = ""; $pag = "";

if(isset($_GET['pag']))
{
	$pag = $_GET['pag'];
}
else
	$pag = 1;

$inicio = $pagina*($pag-1);
$fin = $pagina;

	$resfilas = $obj_publicaciones->ExtraerDestacados();
	$res_publ = $obj_publicaciones->ExtraerDestacadosPag($inicio, $fin);

	$numfilas = mysql_num_rows($resfilas);

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

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#666"> <a href="detalles.php?publicacion=<?php echo $id_publ; ?>"><img src="admin/Archivos/Slider/<?php echo $slider; ?>" width="100%" /></a>
</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:#000;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#E8E8E8;height:150px"><strong><?php echo substr($titulo, 0, 30);if(strlen($titulo) > 30) echo "..."; ?></strong> 
<p style="color:#000;font-size:14px">
<?php echo $nombre_marca; ?><br />
<?php echo $nombre_modelo." - ".$version." ".$year; ?>
</p>

</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#F00;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#999999">USD$ <?php echo $precio; ?></div>

</div>
<?php
}

$numpaginas = $numfilas/$pagina;
$entero = intval($numpaginas);
$decimal = $numpaginas - $entero;

if($decimal > 0) $entero++;

$numpaginas = $entero;

?>

</div>

<div class="row">

<nav align="center">
  <ul class="pagination">
    <li>
    <a href="carros_destacados.php?pag=<?php if($pag>0 && $pag != 1){ echo ($pag-1); }else {echo $pag;} ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
<?php
for($i = 0; $i < $numpaginas; $i++)
{
?>    
    <li <?php if(($i+1) == $pag) echo "class='active'"; ?>><a href="carros_destacados.php?pag=<?php echo ($i+1); ?>"><?php echo ($i+1); ?></a></li>
<?php
}
?>
    <li>
      <a href="carros_destacados.php?pag=<?php if($pag < $numpaginas){ echo ($pag+1); }else {echo $pag;} ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

</div>