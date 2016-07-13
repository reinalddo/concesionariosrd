<?php

class Contactos
{
	var $BD;
	
	function Contactos()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Extraer()
	{
		$this->BD->Conectar();
		$consulta="SELECT ID, CORREO FROM CONTACTOS";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();

		return $res;
	}

	function Modificar($id, $contacto)
	{
		$this->BD->Conectar();
		$consulta="UPDATE CONTACTOS SET CORREO = '$contacto' WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}
}

?>