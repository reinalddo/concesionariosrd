<?php
$id_marca = $_GET['param_id'];

include("../clases.php");

$res = $obj_modelos->ExtraerPorMarcas($id_marca);

echo '<option value="0">Seleccione Modelo</option>';
while ($row = mysql_fetch_assoc($res)){
	echo '<option value="'.$row['ID'].'">'.$row['NOMBRE'].'</option>';
}

?>