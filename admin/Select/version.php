<?php
$id_modelo = $_GET['param_id'];

include("../clases.php");

$res = $obj_publicaciones->ExtraerVersionesModelo($id_modelo);

echo '<option value="0">Seleccione Versión</option>';
while ($row = mysql_fetch_assoc($res)){
	echo '<option value="'.$row['ID'].'">'.substr($row['VERSION'].' - '.$row['YEAR'], 0, 20).'</option>';
}

?>