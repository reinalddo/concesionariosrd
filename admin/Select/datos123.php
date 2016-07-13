<?php
$id_version = $_GET['param_id'];

include("../clases.php");


$res = $obj_publicaciones->ExtraerVersiones($id_version);
$row = mysql_fetch_assoc($res);

$columna123 = array("<img src='admin/Archivos/Slider/".$row["SLIDER"]."' width='100%' />", $row["PRECIO"], $row["COMBUSTIBLE"], $row["POTENCIA"], $row["PUERTAS"], $row["MALETERO"], $row["CO2"], $row["COLOREXT"], $row["COLORINT"], $row["MOTOR"], $row["TRANSMISION"], $row["TRACCION"], $row["VALVULAS"], $row["VELOCIDADMAX"]);

echo "<table class='table table-striped' class='col-lg-12'>";

for($i = 0; $i < count($columna123); $i++){
	if($i)
		echo "<tr height='30px'><td>".$columna123[$i]."&nbsp;</td></tr>";
	else
		echo "<tr height='217px'><td>".$columna123[$i]."&nbsp;</td></tr>";
}

echo "</table>";
?>