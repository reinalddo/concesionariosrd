<!-- PUBLICACIONES RECIENTES -->
<br />
<div class="row" style="background-color:#CCC;padding:10px;border-radius:5px">
<div style="font-weight:bold;font-size:24px;color:#FFF">MODELOS DE LA MARCA <?php if(isset($_GET['marca'])){ $nombre_marca = $obj_marcas->NombreMarca($_GET['marca']); echo strtoupper($nombre_marca); ?> - CONCESIONARIO <?php echo strtoupper($obj_concesionarios->NombreConcesionario($_GET['marca'])); } ?></div>
</div>

<div class="row">

<div class="col-lg-3 col-md-3 col-sm-3"></div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" align="center">
<br />
<div class="alert alert-warning">
Vendemos modelos sin Stock a pedido...
</div>
<br />
</div>

<div class="col-lg-3 col-md-3 col-sm-3"></div>

</div>

<div class="row">

<?php


{
	$res = $obj_modelos->Extraer_Modelos_Marca($_GET['marca']);
	
	while($row = mysql_fetch_assoc($res))
	{
?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;vertical-align:middle;background-color:#666"> <a href="versiones.php?modelo=<?php echo $row["ID"]; ?>"><img src="admin/Archivos/Modelos/<?php echo $row["LOGO"]; ?>" width="100%" /></a>
</div>
<div class="row"></div>
<div style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom"><?php echo $row["NOMBRE"]; ?></div>

</div>
<?php
	}
}
?>
<!--
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;vertical-align:middle;background-color:#666"> <a href="versiones.php"><img src="Carros/2.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom">NOMBRE MODELO</div>

</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;vertical-align:middle;background-color:#666"> <a href="versiones.php"><img src="Carros/3.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom">NOMBRE MODELO</div>


</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;vertical-align:middle;background-color:#666"> <a href="versiones.php"><img src="Carros/4.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom">NOMBRE MODELO</div>


</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;vertical-align:middle;background-color:#666"> <a href="versiones.php"><img src="Carros/5.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom">NOMBRE MODELO</div>


</div>


<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;vertical-align:middle;background-color:#666"> <a href="versiones.php"><img src="Carros/6.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom">NOMBRE MODELO</div>


</div>


<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;vertical-align:middle;background-color:#666"> <a href="versiones.php"><img src="Carros/7.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom">NOMBRE MODELO</div>


</div>


<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;vertical-align:middle;background-color:#666"> <a href="versiones.php"><img src="Carros/8.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom">NOMBRE MODELO</div>


</div>


<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;vertical-align:middle;background-color:#666"> <a href="versiones.php"><img src="Carros/9.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom">NOMBRE MODELO</div>


</div>


<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;vertical-align:middle;background-color:#666"> <a href="versiones.php"><img src="Carros/10.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom">NOMBRE MODELO</div>


</div>


<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;vertical-align:middle;background-color:#666"> <a href="versiones.php"><img src="Carros/11.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom">NOMBRE MODELO</div>


</div>


<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;vertical-align:middle;background-color:#666"> <a href="versiones.php"><img src="Carros/12.jpg" width="100%" /></a>
</div>
<div class="row"></div>
<div style="font-weight:bold;color:#000;font-size:20px;display:table-cell;vertical-align:bottom">NOMBRE MODELO</div>


</div>
-->
</div>