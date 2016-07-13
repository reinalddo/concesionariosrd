<?php

class Publicidad
{
	var $BD;
	
	function Publicidad()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($imagen, $nombre, $enlace)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO PUBLICIDAD(IMAGEN, NOMBRE, ENLACE) VALUES('$imagen', '$nombre', '$enlace')";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();

		return $res;
	}

	function Extraer()
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, IMAGEN, NOMBRE, ENLACE FROM PUBLICIDAD";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_ID($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT IMAGEN, NOMBRE, ENLACE FROM PUBLICIDAD WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Eliminar($id)
	{
		$this->BD->Conectar();
		$consulta="DELETE FROM PUBLICIDAD WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}
}

?>