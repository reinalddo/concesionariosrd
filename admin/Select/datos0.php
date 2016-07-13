<?php
$columna0 = array("Imagen", "Precio", "Combustible", "Potencia y Torque", "Puertas", "Maletero", "Co2", "Consumo Ciudad", "Consumo Carretera", "Motor", "Transmisión", "Tracción", "Cilindros", "Velocidad Máxima");

echo "<table class='table table-striped'>";
for($i = 0; $i < count($columna0); $i++){
	if($i)
		echo "<tr height='30px'><td><strong>".$columna0[$i]."</strong>&nbsp;</td></tr>";
	else
		echo "<tr height='217px'><td><strong>".$columna0[$i]."</strong></td></tr>";
}
echo "</table>";
?>