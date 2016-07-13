<!-- MARCAS DE CARROS -->
<br />
<div class="row" style="background-color:#999;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">MARCAS DE CARROS <?php if(isset($_GET['concesionario'])){ ?>- CONCESIONARIO <?php echo strtoupper($obj_concesionarios->NombreConcesionarioSel($_GET['concesionario'])); } ?></strong>
</div>

<div class="row" style="background-color:#FFF">

<?php
$pagina = 20;

$res = "";$inicio = ""; $fin = ""; $pag = "";

if(isset($_GET['pag']))
{
	$pag = $_GET['pag'];
}
else
	$pag = 1;

$inicio = $pagina*($pag-1);
$fin = $pagina;

$resfilas = "";
if(isset($_GET['concesionario']))
{
	$resfilas = $obj_marcas->Extraer_ID_Concesionario($_GET['concesionario']);
	$res = $obj_marcas->Extraer_ID_ConcesionarioPag($_GET['concesionario'], $inicio, $fin);
}
else
{
	$resfilas = $obj_marcas->Extraer();
	$res = $obj_marcas->ExtraerPag($inicio, $fin);
}

$numfilas = mysql_num_rows($resfilas);

	while($row = mysql_fetch_assoc($res))
	{
?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#FFF"> <a href="modelos.php?marca=<?php echo $row["ID"]; ?>"><img src="admin/Archivos/Marcas/<?php echo $row["LOGO"]; ?>" width="70%" style="max-height:500px" /></a>
</div>

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
    <a href="marcas.php?pag=<?php if($pag>0 && $pag != 1){ echo ($pag-1); }else {echo $pag;} ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
<?php
for($i = 0; $i < $numpaginas; $i++)
{
?>    
    <li <?php if(($i+1) == $pag) echo "class='active'"; ?>><a href="marcas.php?pag=<?php echo ($i+1); ?>"><?php echo ($i+1); ?></a></li>
<?php
}
?>
    <li>
      <a href="marcas.php?pag=<?php if($pag < $numpaginas){ echo ($pag+1); }else {echo $pag;} ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

</div>