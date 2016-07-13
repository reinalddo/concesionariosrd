<?php
$id_concesionario = $_GET['param_id'];

include("../clases.php");

$res = $obj_marcas->Extraer_ID_Concesionario($id_concesionario);

echo '<option value="0">&lt;&lt; Seleccione &gt;&gt;</option>';
while ($row = mysql_fetch_assoc($res)){
	echo '<option value="'.$row['ID'].'">'.$row['NOMBRE'].'</option>';
}

?>