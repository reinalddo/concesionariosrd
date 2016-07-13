<div class="row" style="background-color:#000;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">CUERPO DE AUTOMÓVIL</strong>
</div>

<!-- CUERPOS DE CARROS -->
<br />
<br />
<div class="row">

<?php

$res_cuerpos = $obj_cuerpos->Extraer();

while($row_cuerpos = mysql_fetch_assoc($res_cuerpos))
{
?>
<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" align="center" style="margin-bottom:10px;height:100px;vertical-align:bottom"> <a href="versiones.php?cuerpo=<?php echo $row_cuerpos["ID"]; ?>"><img src="admin/Archivos/Cuerpos/<?php echo $row_cuerpos["IMAGEN"]; ?>" alt="Imagen 1" width="100%" style="max-height:100px;margin-right:10px;vertical-align:bottom" class="grises"  /></a>
<?php echo $row_cuerpos["NOMBRE"]; ?>
</div>
<?php
}
?>
<!--
<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" align="center" style="margin-bottom:10px;height:100px">
<img src="Cuerpos/coupe.png" alt="Imagen 1" width="100%" style="max-height:100px;margin-right:10px;vertical-align:bottom" class="grises"  />
Coupe
</div>

<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" align="center" style="margin-bottom:10px;height:100px">
<img src="Cuerpos/hatchback.png" alt="Imagen 1" width="100%" style="max-height:100px;margin-right:10px;vertical-align:bottom" class="grises"  />
Hatchback
</div>

<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" align="center" style="margin-bottom:10px;height:100px">
<img src="Cuerpos/hibrido.png" alt="Imagen 1" width="100%" style="max-height:100px;margin-right:10px;vertical-align:bottom" class="grises"  />
Hybrid
</div>

<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" align="center" style="margin-bottom:10px;height:100px">
<img src="Cuerpos/minivan.png" alt="Imagen 1" width="100%" style="max-height:100px;margin-right:10px;vertical-align:bottom" class="grises"  />
Minivan
</div>

<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" align="center" style="margin-bottom:10px;height:100px">
<img src="Cuerpos/sedan.png" alt="Imagen 1" width="100%" style="max-height:100px;margin-right:10px;vertical-align:bottom" class="grises"  />
Sedan
</div>

<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" align="center" style="margin-bottom:10px;height:100px">
<img src="Cuerpos/suv.png" alt="Imagen 1" width="100%" style="max-height:100px;margin-right:10px;vertical-align:bottom" class="grises"  />
SUV
</div>

<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" align="center" style="margin-bottom:10px;height:100px">
<img src="Cuerpos/wagon.png" alt="Imagen 1" width="100%" style="max-height:100px;margin-right:10px;vertical-align:bottom" class="grises"  />
Wagon
</div>

<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" align="center" style="margin-bottom:10px;height:100px">
<img src="Cuerpos/autobus.png" alt="Imagen 1" width="100%" style="max-height:100px;margin-right:10px;vertical-align:bottom" class="grises"  />
Autobus
</div>

<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" align="center" style="margin-bottom:10px;height:100px">
<img src="Cuerpos/camioneta.png" alt="Imagen 1" width="100%" style="max-height:100px;margin-right:10px;vertical-align:bottom" class="grises"  />
Camioneta
</div>

<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" align="center" style="margin-bottom:10px;height:100px">
<img src="Cuerpos/camion.png" alt="Imagen 1" width="100%" style="max-height:100px;margin-right:10px;vertical-align:bottom" class="grises"  />
Camión
</div>

<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" align="center" style="margin-bottom:10px;height:100px">
<img src="Cuerpos/comercial.png" alt="Imagen 1" width="100%" style="max-height:100px;margin-right:10px;vertical-align:bottom" class="grises"  />
Comercial
</div>
-->
</div>
<br />
<br />

<!-- CUERPOS DE CARROS -->
