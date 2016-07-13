<?php
include("../clases.php");

$res = $obj_marcas->Extraer();

echo '<option value="0">Seleccione Marca</option>';
while ($row = mysql_fetch_assoc($res)){
	echo '<option value="'.$row['ID'].'">'.$row['NOMBRE'].'</option>';
}

?>