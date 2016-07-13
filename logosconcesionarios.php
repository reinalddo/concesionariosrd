<!-- CONCESIONARIOS -->
<br />
<div class="row" style="background-color:#999;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">CONCESIONARIOS</strong>
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

$resfilas = $obj_concesionarios->Extraer();

$res = $obj_concesionarios->ExtraerPag($inicio, $fin);

$numfilas = mysql_num_rows($resfilas);


while($row = mysql_fetch_assoc($res))
{
?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#FFF"> <a href="marcas.php?concesionario=<?php echo $row["ID"]; ?>"><img src="admin/Archivos/Concesionarios/<?php echo $row["LOGO"]; ?>" width="70%" /></a>
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
    <a href="concesionarios.php?pag=<?php if($pag>0 && $pag != 1){ echo ($pag-1); }else {echo $pag;} ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
<?php
for($i = 0; $i < $numpaginas; $i++)
{
?>    
    <li <?php if(($i+1) == $pag) echo "class='active'"; ?>><a href="concesionarios.php?pag=<?php echo ($i+1); ?>"><?php echo ($i+1); ?></a></li>
<?php
}
?>
    <li>
      <a href="concesionarios.php?pag=<?php if($pag < $numpaginas){ echo ($pag+1); }else {echo $pag;} ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

</div>