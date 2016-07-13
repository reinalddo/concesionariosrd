<!-- PUBLICACIONES RECIENTES -->
<br />
<div class="row" style="background-color:#CCC;padding:10px;border-radius:5px">
<div style="font-weight:bold;font-size:24px;color:#FFF">
<?php
$pagina = 12;

if(isset($_GET['cuerpo']))
{
	$nombre_cuerpo = $obj_cuerpos->NombreCuerpo($_GET['cuerpo']);
	echo "CUERPOS: ".strtoupper($nombre_cuerpo);
}
else
{
	echo "VERSIONES DEL MODELO";
}
?>

</div>
</div>

<div class="row">
<?php

$nombre_modelo = ""; $logo_modelo = "";$slider = "";$inicio = ""; $fin = ""; $pag = "";

if(isset($_GET['pag']))
{
	$pag = $_GET['pag'];
}
else
	$pag = 1;

$inicio = $pagina*($pag-1);
$fin = $pagina;
$resfilas = "";

if(isset($_GET['modelo']))
{
	$res = $obj_publicaciones->ExtraerVersionesModelopag($_GET['modelo'], $inicio, $fin);
	$resfilas = $obj_publicaciones->ExtraerVersionesModeloNumFilas($_GET['modelo']);
	
	$nombre_modelo = $obj_modelos->NombreModelo($_GET['modelo']);
	
	//$logo_modelo = $obj_modelos->LogoModelo($_GET['modelo']);

}
if(isset($_GET['cuerpo']))
{
	$res = $obj_publicaciones->ExtraerVersionesCuerpoPag($_GET['cuerpo'], $inicio, $fin);
	$resfilas = $obj_publicaciones->ExtraerVersionesCuerpoNumFilas($_GET['cuerpo']);
}

$numfilas = mysql_num_rows($resfilas);

	while($row = mysql_fetch_assoc($res))
	{
		if(isset($_GET['cuerpo']))
		{
			$nombre_modelo = $obj_modelos->NombreModelo($row["MODELOS_ID"]);
	
			//$logo_modelo = $obj_modelos->LogoModelo($row["MODELOS_ID"]);
		}

		$slider      = $row["SLIDER"];
?>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#666"> <a href="detalles.php?publicacion=<?php echo $row["ID"]; ?>"><img src="admin/Archivos/Slider/<?php echo $slider; ?>" width="100%" /></a>
</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#E8E8E8;height:60px"><?php echo substr($row["VERSION"]." ".$row["YEAR"], 0, 23); ?></div>
<div class="row"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#E8E8E8;display:table-cell;height:130px">

<?php
if($row["COMBUSTIBLE"])
{
?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="font-size:10px">
<img src="Caracteristicas/combustible.png" class="grises" width="100%" />
Combustible<br />
<strong><?php echo substr($row["COMBUSTIBLE"], 0, 15); ?></strong>
</div>
<?php
}
if($row["POTENCIA"])
{
?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="font-size:10px">
<img src="Caracteristicas/potencia.png" class="grises" width="100%" />
Potencia y Torque<br />
<strong><?php echo substr($row["POTENCIA"], 0, 10); ?></strong>
</div>
<?php
}
if($row["PUERTAS"])
{
?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="font-size:10px">
<img src="Caracteristicas/puertas.png" class="grises" width="100%" />
Puertas<br />
<strong><?php echo substr($row["PUERTAS"], 0, 4); ?></strong>
</div>
<?php
}
?>
</div>
<div class="row"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#E8E8E8;height:110px">
<?php
if($row["MALETERO"])
{
?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="font-size:10px">
<img src="Caracteristicas/maletero.png" class="grises" width="100%" />
Maletero<br />
<strong><?php echo substr($row["MALETERO"], 0, 10); ?></strong>
</div>
<?php
}
if($row["CO2"])
{
?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="font-size:10px">
<img src="Caracteristicas/co2.png" class="grises" width="100%" />
Co2<br />
<strong><?php echo substr($row["CO2"], 0, 10); ?></strong>
</div>
<?php
}
if($row["COLOREXT"])
{
?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="font-size:10px">
<img src="Caracteristicas/carretera.png" class="grises" width="100%" />
Consumo Ciudad<br />
<strong><?php echo substr($row["COLOREXT"], 0, 10); ?></strong>
</div>
<?php
}
?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
</div>

</div>
<div class="row"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom;background-color:#999999">PRECIO USD$: <br />
<?php echo $row["PRECIO"]; ?></div>

</div>
<?php
	}
?>

<div class="row"></div>
<?php
$modelo_cuerpo = ""; $valor = "";

if(isset($_GET["modelo"]))
{
	$modelo_cuerpo = "modelo";
	$valor = $_GET["modelo"];
}
else
{
	$modelo_cuerpo = "cuerpo";
	$valor = $_GET["cuerpo"];
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
    <a href="versiones.php?<?php echo $modelo_cuerpo; ?>=<?php echo $valor; ?>&pag=<?php if($pag>0 && $pag != 1){ echo ($pag-1); }else {echo $pag;} ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
<?php
for($i = 0; $i < $numpaginas; $i++)
{
?>    
    <li <?php if(($i+1) == $pag) echo "class='active'"; ?>><a href="versiones.php?<?php echo $modelo_cuerpo; ?>=<?php echo $valor; ?>&pag=<?php echo ($i+1); ?>"><?php echo ($i+1); ?></a></li>
<?php
}
?>
    <li>
      <a href="versiones.php?<?php echo $modelo_cuerpo; ?>=<?php echo $valor; ?>&pag=<?php if($pag < $numpaginas){ echo ($pag+1); }else {echo $pag;} ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

</div>