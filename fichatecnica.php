<?php
$res_motores = $obj_motores->Extraer_ID($_GET["publicacion"]);
if(mysql_num_rows($res_motores))
{
?>
<div class="row" style="background-color:#CCC;padding:10px;border-radius:5px">
<div style="font-weight:bold;font-size:24px;color:#FFF">FICHA TÉCNICA</div>
</div>
<?php
$res_confort         = $obj_confort->Extraer_ID($_GET["publicacion"]);
$res_dimensiones     = $obj_dimensiones->Extraer_ID($_GET["publicacion"]);
$res_entretenimiento = $obj_entretenimiento->Extraer_ID($_GET["publicacion"]);
$res_exterior        = $obj_exterior->Extraer_ID($_GET["publicacion"]);
$res_seguridad       = $obj_seguridad->Extraer_ID($_GET["publicacion"]);
$res_transmisiones   = $obj_transmisiones->Extraer_ID($_GET["publicacion"]);
$res_extras          = $obj_extras->Extraer_ID($_GET["publicacion"]);

$row_motores  		 = mysql_fetch_assoc($res_motores);
$row_confort         = mysql_fetch_assoc($res_confort);
$row_dimensiones     = mysql_fetch_assoc($res_dimensiones);
$row_entretenimiento = mysql_fetch_assoc($res_entretenimiento);
$row_exterior 		 = mysql_fetch_assoc($res_exterior);
$row_seguridad 		 = mysql_fetch_assoc($res_seguridad);
$row_transmisiones 	 = mysql_fetch_assoc($res_transmisiones);

$active = false;
$active_motor = false; $active_confort = false; $active_dimensiones = false; $active_entretenimiento = false; 
$active_exterior = false; $active_seguridad = false; $active_transmisiones = false;
?>
<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<ul class="nav nav-tabs">
<?php
if($row_motores["FICHA_ACTIVA"])
{
	if(!$active) {$active = true; $active_motor = true;}
?>
  <li><a href="#motor_tab" data-toggle="tab">Motor</a></li>
<?php
}
if($row_dimensiones["FICHA_ACTIVA"])
{
	if(!$active) {$active = true; $active_dimensiones = true;}
?>
  <li><a href="#dimensiones_tab" data-toggle="tab">Dimensiones y Capacidades</a></li>
<?php
}
if($row_transmisiones["FICHA_ACTIVA"])
{
	if(!$active) {$active = true; $active_transmisiones = true;}
?>
  <li><a href="#transmision_tab" data-toggle="tab">Transmisión y Chasis</a></li>
<?php
}
if($row_confort["FICHA_ACTIVA"])
{
	if(!$active) {$active = true; $active_confort = true;}
?>
  <li><a href="#confort_tab" data-toggle="tab">Confort y Convivencia</a></li>
<?php
}
if($row_exterior["FICHA_ACTIVA"])
{
	if(!$active) {$active = true; $active_exterior = true;}
?>
  <li><a href="#exterior_tab" data-toggle="tab">Exterior</a></li>
<?php
}
if($row_seguridad["FICHA_ACTIVA"])
{
	if(!$active) {$active = true; $active_seguridad = true;}
?>
  <li><a href="#seguridad_tab" data-toggle="tab">Seguridad</a></li>
<?php
}
if($row_entretenimiento["FICHA_ACTIVA"])
{
	if(!$active) {$active = true; $active_entretenimiento = true;}
?>
  <li><a href="#entretenimiento_tab" data-toggle="tab">Comunicación y Entretemiento</a></li>
<?php 
}
	if(mysql_num_rows($res_extras)) 
	{
?>
  <li><a href="#extras_tab" data-toggle="tab">Más equipamientos</a></li>
<?php 
	}
?>
</ul>

<!-- Tab panes -->
<div class="tab-content">

  <div class="tab-pane fade <?php if($active_motor) echo "in active"; ?>" id="motor_tab">

<div class="row">
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
<table width="100%" class="table table-striped table-bordered">
  <tr>
    <td colspan="2" align="center"><strong>Motor</strong>&nbsp;</td>
  </tr>
  <?php 
	if(isset($row_motores))
	if($row_motores["MOTOR"])
	{
  ?>
  <tr>
    <td><strong>Motor</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_motores["MOTOR"]; ?>&nbsp;</td>
  </tr>
  <?php 
	}
	if(isset($row_motores))
	if($row_motores["COMBUSTIBLE"])
	{
  ?>
  <tr>
    <td><strong>Combustible</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_motores["COMBUSTIBLE"]; ?>&nbsp;</td>
  </tr>
  <?php 
	}
	if(isset($row_motores))
	if($row_motores["POSICION"])
	{
  ?>
  <tr>
    <td><strong>Posición</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_motores["POSICION"]; ?>&nbsp;</td>
  </tr>
  <?php 
	}
	if(isset($row_motores))
	if($row_motores["CILINDRADA"])
	{
  ?>
  <tr>
    <td><strong>Cilindrada</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_motores["CILINDRADA"]; ?>&nbsp;</td>
  </tr>
  <?php 
	}
	if(isset($row_motores))
	if($row_motores["VALVULAS"])
	{
  ?>
  <tr>
    <td><strong>Válvulas</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_motores["VALVULAS"]; ?>&nbsp;</td>
  </tr>
  <?php 
	}
	if(isset($row_motores))
	if($row_motores["POTENCIA"])
	{
  ?>
  <tr>
    <td><strong>Potencia</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_motores["POTENCIA"]; ?>&nbsp;</td>
  </tr>
  <?php 
	}
  ?>

</table>
</div>
<div class="col-lg-7 col-md-7"></div>
</div>
  </div>

  <div class="tab-pane fade <?php if($active_dimensiones) echo "in active"; ?>" id="dimensiones_tab">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<table width="100%" class="table table-striped table-bordered">
  <tr>
    <td colspan="2" align="center"><strong>Dimensiones y Capacidades</strong>&nbsp;</td>
  </tr>
<?php 
	if(isset($row_dimensiones)) 
	if($row_dimensiones["PUERTAS"])
	{
?>
  <tr>
    <td><strong>Puertas</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_dimensiones["PUERTAS"]; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_dimensiones)) 
	if($row_dimensiones["PLAZAS"])
	{
?>
  <tr>
    <td><strong>Plazas</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_dimensiones["PLAZAS"]; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_dimensiones)) 
	if($row_dimensiones["FILAS"])
	{
?>
  <tr>
    <td><strong>Filas de asientos</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_dimensiones["FILAS"]; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_dimensiones)) 
	if($row_dimensiones["DISTANCIA"])
	{
?>
  <tr>
    <td><strong>Largo/Ancho/Alto/Distancia entre ejes</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_dimensiones["DISTANCIA"]; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_dimensiones)) 
	if($row_dimensiones["PESO"])
	{
?>
  <tr>
    <td><strong>Peso</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_dimensiones["PESO"]; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_dimensiones)) 
	if($row_dimensiones["TANQUE"])
	{
?>
  <tr>
    <td><strong>Tanque de combustible</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_dimensiones["TANQUE"]; ?>&nbsp;</td>
  </tr>
<?php 
	}
?>

</table>
</div>
<div class="col-lg-6 col-md-6"></div>
</div>

  </div>

  <div class="tab-pane fade <?php if($active_transmisiones) echo "in active"; ?>" id="transmision_tab">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<table width="100%" class="table table-striped table-bordered">
  <tr>
    <td colspan="2" align="center"><strong>Transmisión y Chasis</strong>&nbsp;</td>
  </tr>
<?php 
	if(isset($row_transmisiones)) 
	if($row_transmisiones["TRANSMISION"])
	{
?>
  <tr>
    <td><strong>Transmisión</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_transmisiones["TRANSMISION"]; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_transmisiones)) 
	if($row_transmisiones["MARCHAS"])
	{
?>
  <tr>
    <td><strong>Marchas</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_transmisiones["MARCHAS"]; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_transmisiones)) 
	if($row_transmisiones["TRACCION"])
	{
?>
  <tr>
    <td><strong>Tracción</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_transmisiones["TRACCION"]; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_transmisiones)) 
	if($row_transmisiones["FR_DELANTEROS"])
	{
?>
  <tr>
    <td><strong>Frenos delanteros</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_transmisiones["FR_DELANTEROS"]; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_transmisiones)) 
	if($row_transmisiones["FR_TRASEROS"])
	{
?>
  <tr>
    <td><strong>Frenos traseros	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_transmisiones["FR_TRASEROS"]; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_transmisiones)) 
	if($row_transmisiones["SUSPENSION"])
	{
?>
  <tr>
    <td><strong>Suspensión delantera</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_transmisiones["SUSPENSION"]; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_transmisiones)) 
	if($row_transmisiones["NEUMATICOS"])
	{
?>
  <tr>
    <td><strong>Neumáticos</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo $row_transmisiones["NEUMATICOS"]; ?>&nbsp;</td>
  </tr>
<?php 
	}
?>
</table>
</div>
<div class="col-lg-6 col-md-6"></div>
</div>
  </div>

  <div class="tab-pane fade <?php if($active_confort) echo "in active"; ?>" id="confort_tab">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
<table width="100%" class="table table-striped table-bordered">
  <tr>
    <td colspan="2" align="center"><strong>Confort y Convivencia</strong>&nbsp;</td>
  </tr>
<?php 
	if(isset($row_confort)) 
	if($row_confort["ACT_ALZACRISTALES"])
	{
?>
  <tr>
    <td><strong>Alzacristales eléctricos en todas las ventanas	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["ALZACRISTALES"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_CLIMATIZADOR_BIZONA"])
	{
?>
  <tr>
    <td><strong>Climatizador automático bi-zona	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["CLIMATIZADOR_BIZONA"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_CLIMATIZADOR"])
	{
?>
  <tr>
    <td><strong>Climatizador automático	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["CLIMATIZADOR"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_DIRECCION"])
	{
?>
  <tr>
    <td><strong>Dirección asistida	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["DIRECCION"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_VOLANTE_AJUSTE"])
	{
?>
  <tr>
    <td><strong>Volante con ajuste vertical y profundidad	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["VOLANTE_AJUSTE"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_CONTROL_VELOCIDAD"])
	{
?>
  <tr>
    <td><strong>Control de velocidad crucero	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["CONTROL_VELOCIDAD"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_CIERRE"])
	{
?>
  <tr>
    <td><strong>Cierre centralizado de puertas por comando a distancia	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["CIERRE"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_BUTACA"])
	{
?>
  <tr>
    <td><strong>Butaca del conductor regulable en altura manualmente	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["BUTACA"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_MANDOS"])
	{
?>
  <tr>
    <td><strong>Mandos de sistema de audio desde el volante	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["MANDOS"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_ASIENTOS_RECLINABLES"])
	{
?>
  <tr>
    <td><strong>Asientos traseros reclinables	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["ASIENTOS_RECLINABLES"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_ESPEJOS_EXTERIORES"])
	{
?>
  <tr>
    <td><strong>Espejos exteriores rebatibles eléctricamente	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["ESPEJOS_EXTERIORES"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_AIRE_ACONDICIONADO"])
	{
?>
  <tr>
    <td><strong>Aire Acondicionado	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["AIRE_ACONDICIONADO"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_REGULACION"])
	{
?>
  <tr>
    <td><strong>Regulación interna de faros	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["REGULACION"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_LAVA"])
	{
?>
  <tr>
    <td><strong>Lava luneta	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["LAVA"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_INMOVILIZADOR"])
	{
?>
  <tr>
    <td><strong>Inmovilizador de motor	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["INMOVILIZADOR"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_ESPEJOS_ELECTRICOS"])
	{
?>
  <tr>
    <td><strong>Espejos exteriores eléctricos	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["ESPEJOS_ELECTRICOS"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_TECHO_CORREDIZO"])
	{
?>
  <tr>
    <td><strong>Techo corredizo delantero	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["TECHO_CORREDIZO"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_APOYACABEZAS"])
	{
?>
  <tr>
    <td><strong>Apoyacabezas con ajustes eléctricos	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["APOYACABEZAS"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_ASIENTO_CONDUCTOR"])
	{
?>
  <tr>
    <td><strong>Asiento conductor con ajuste lumbar	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["ASIENTO_CONDUCTOR"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_VOLANTE_MULTIFUNCION"])
	{
?>
  <tr>
    <td><strong>Volante multifunción</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["VOLANTE_MULTIFUNCION"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_COMPUTADORA"])
	{
?>
  <tr>
    <td><strong>Computadora de abordo	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["COMPUTADORA"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_ASIENTOS_REBATIBLES"])
	{
?>
  <tr>
    <td><strong>Asientos traseros rebatibles 60/40	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["ASIENTOS_REBATIBLES"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_TOMACORRIENTE"])
	{
?>
  <tr>
    <td><strong>Toma corriente de 12v	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["TOMACORRIENTE"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_VOLANTECUERO"])
	{
?>
  <tr>
    <td><strong>Volante recubierto en cuero	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["VOLANTECUERO"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_confort)) 
	if($row_confort["ACT_TAPIZADOCUERO"])
	{
?>
  <tr>
    <td><strong>Tapizado de cuero y tela	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_confort["TAPIZADOCUERO"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
?>
</table>
</div>
<div class="col-lg-4 col-md-4"></div>
</div>
  </div>

  <div class="tab-pane fade <?php if($active_exterior) echo "in active"; ?>" id="exterior_tab">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
<table width="100%" class="table table-striped table-bordered">
  <tr>
    <td colspan="2" align="center"><strong>Exterior</strong>&nbsp;</td>
  </tr>
<?php 
	if(isset($row_exterior)) 
	if($row_exterior["ACT_LLANTAS_ALEACION"])
	{
?>
  <tr>
    <td><strong>Llantas de aleación liviana	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_exterior["LLANTAS_ALEACION"].".png' width='8%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_exterior)) 
	if($row_exterior["ACT_ESPEJOS_EXTERIORES"])
	{
?>
  <tr>
    <td><strong>Espejos exteriores calefaccionables	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_exterior["ESPEJOS_EXTERIORES"].".png' width='8%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_exterior)) 
	if($row_exterior["ACT_ESPEJOS_CARROCERIA"])
	{
?>
  <tr>
    <td><strong>Espejos color carrocería	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_exterior["ESPEJOS_CARROCERIA"].".png' width='8%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_exterior)) 
	if($row_exterior["ACT_SPOILER"])
	{
?>
  <tr>
    <td><strong>Spoiler</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_exterior["SPOILER"].".png' width='8%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
?>
</table>
</div>
<div class="col-lg-4 col-md-4"></div>
</div>
  </div>

  <div class="tab-pane fade <?php if($active_seguridad) echo "in active"; ?>" id="seguridad_tab">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
<table width="100%" class="table table-striped table-bordered">
  <tr>
    <td colspan="2" align="center"><strong>Seguridad</strong>&nbsp;</td>
  </tr>
<?php 
	if(isset($row_seguridad)) 
	if($row_seguridad["ACT_AIRBAGS"])
	{
?>
  <tr>
    <td><strong>Airbags (2) para conductor y acompañante	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_seguridad["AIRBAGS"].".png' width='20%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_seguridad)) 
	if($row_seguridad["ACT_CINTURONES_INERCIALES"])
	{
?>
  <tr>
    <td><strong>Cinturones inerciales delanteros	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_seguridad["CINTURONES_INERCIALES"].".png' width='20%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_seguridad)) 
	if($row_seguridad["ACT_CONTROL_ESTABILIDAD"])
	{
?>
  <tr>
    <td><strong>Control de estabilidad (ESP)	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_seguridad["CONTROL_ESTABILIDAD"].".png' width='20%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_seguridad)) 
	if($row_seguridad["ACT_CONTROL_TRACCION"])
	{
?>
  <tr>
    <td><strong>Control de tracción (TCS)	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_seguridad["CONTROL_TRACCION"].".png' width='20%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_seguridad)) 
	if($row_seguridad["ACT_FRENOS"])
	{
?>
  <tr>
    <td><strong>Sistema de frenos ABS (antibloqueo) con EBD (distribución de la fuerza del frenado electrónicamente)	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_seguridad["FRENOS"].".png' width='20%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_seguridad)) 
	if($row_seguridad["ACT_FRENOS_EMERGENCIA"])
	{
?>
  <tr>
    <td><strong>Sistema de frenos ABS (antibloqueo), EBD (distribución de la fuerza del frenado electrónicamente), asistencia al frenado de emergencia (BAS)	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_seguridad["FRENOS_EMERGENCIA"].".png' width='20%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_seguridad)) 
	if($row_seguridad["ACT_FAROS"])
	{
?>
  <tr>
    <td><strong>Faros antiniebla delanteros y traseros	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_seguridad["FAROS"].".png' width='20%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_seguridad)) 
	if($row_seguridad["ACT_CIERRE"])
	{
?>
  <tr>
    <td><strong>Cierre centralizado	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_seguridad["CIERRE"].".png' width='20%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_seguridad)) 
	if($row_seguridad["ACT_GANCHOS"])
	{
?>
  <tr>
    <td><strong>Ganchos ISOFIX para ajustar silla de niños	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_seguridad["GANCHOS"].".png' width='20%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_seguridad)) 
	if($row_seguridad["ACT_TRABAS"])
	{
?>
  <tr>
    <td><strong>Trabas de puertas y ventanas para niños	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_seguridad["TRABAS"].".png' width='20%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
?>
</table>
</div>
<div class="col-lg-4 col-md-4"></div>
</div>
  </div>

  <div class="tab-pane fade <?php if($active_entretenimiento) echo "in active"; ?>" id="entretenimiento_tab">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
<table width="100%" class="table table-striped table-bordered">
  <tr>
    <td colspan="2" align="center"><strong>Comunicación y Entretemiento</strong>&nbsp;</td>
  </tr>
<?php 
	if(isset($row_entretenimiento)) 
	if($row_entretenimiento["ACT_REPRODUCTOR_RADIO"])
	{
?>
  <tr>
    <td><strong>Reproductor de radio AM/FM con cargador para CD	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_entretenimiento["REPRODUCTOR_RADIO"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_entretenimiento)) 
	if($row_entretenimiento["ACT_REPRODUCTOR_MP3"])
	{
?>
  <tr>
    <td><strong>Reproductor Mp3	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_entretenimiento["REPRODUCTOR_MP3"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_entretenimiento)) 
	if($row_entretenimiento["ACT_PARLANTES"])
	{
?>
  <tr>
    <td><strong>Seis parlantes	</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_entretenimiento["PARLANTES"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
	if(isset($row_entretenimiento)) 
	if($row_entretenimiento["ACT_CONEXION_AUXILIAR"])
	{
?>
  <tr>
    <td><strong>Conexión auxiliar</strong>&nbsp;</td>
    <td><?php if(isset($row_motores)) echo "<img src='imagenes/".$row_entretenimiento["CONEXION_AUXILIAR"].".png' width='10%' />"; ?>&nbsp;</td>
  </tr>
<?php 
	}
?>
</table>
</div>
<div class="col-lg-4 col-md-4"></div>
</div>
  </div>
<?php 
	if(mysql_num_rows($res_extras)) 
	{
?>
<div class="tab-pane fade" id="extras_tab">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
<table width="100%" class="table table-striped table-bordered">
  <tr>
    <td colspan="2" align="center"><strong>Más equipamientos</strong>&nbsp;</td>
  </tr>
<?php 
while($row_extras = mysql_fetch_assoc($res_extras))
{
?>
  <tr>
    <td><strong><?php echo $row_extras["DATO"]; ?></strong>&nbsp;</td>
    <td>
	<?php 
	if(!$row_extras["VALOR"])
	{
		echo "<img src='imagenes/".$row_extras["BINARIO"].".png' width='5%' />";
	}
	else
	{
		echo $row_extras["VALOR"];
	}
	?>
    &nbsp;</td>
  </tr>
<?php
}
?>
</table>
</div>
<div class="col-lg-4 col-md-4"></div>
</div>
  </div>
<?php 
	}
?>

</div>

</div>

</div>
<?php
}
?>