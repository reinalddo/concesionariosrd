<?php
  include("Clases/class.MySQL_Clase.php");
  include("Clases/class.Usuarios.php");
  
  $obj_usuarios = new Usuarios();

sleep(1);
if($_REQUEST) {
    $usuario = $_REQUEST['usuarioGerente'];
//    $query = "select * from username_availablity where username = '".strtolower($username)."'";
//    $results = mysql_query( $query) or die('ok');
	$resultado = $obj_usuarios->Verificar_Usuario($usuario);
    if(mysql_num_rows(@$resultado) > 0)
	{
        echo '<div id="Error">Usuario ya existente</div>';
	}
	else if($usuario=="")
	{
		echo '<div id="Error">Usuario Vacio</div>';
	}
    else 
	{
        echo '<div id="Success">Disponible</div>';
	}
}
?>
