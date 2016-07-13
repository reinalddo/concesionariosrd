<?php
  include("Clases/class.MySQL_Clase.php");
  include("Clases/class.Marcas.php");
  
  $obj_marcas = new Marcas();

sleep(1);
if($_REQUEST) {
    $marca = $_REQUEST['nombre'];
//    $query = "select * from username_availablity where username = '".strtolower($username)."'";
//    $results = mysql_query( $query) or die('ok');
	$resultado = $obj_marcas->Verificar_Marca($marca);
    if(mysql_num_rows(@$resultado) > 0)
	{
        echo '<div id="Error">Marca ya existente</div>';
	}
	else if($marca=="")
	{
		echo '<div id="Error">Marca Vacia</div>';
	}
    else 
	{
        echo '<div id="Success">Marca Disponible</div>';
	}
}
?>
