<?php
include("../clases.php");

$res = $obj_concesionarios->Extraer();

echo '<option value="0">&lt;&lt; Seleccione &gt;&gt;</option>';
while ($row = mysql_fetch_assoc($res)){
	echo '<option value="'.$row['ID'].'">'.$row['NOMBRE'].'</option>';
}

?>