<?php

class Cuerpos
{
	var $BD;
	
	function Cuerpos()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($imagen, $nombre)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO CUERPOS(IMAGEN, NOMBRE) VALUES('$imagen', '$nombre')";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();

		return $res;
	}

	function Extraer()
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, IMAGEN, NOMBRE FROM CUERPOS";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function NombreCuerpo($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT NOMBRE FROM CUERPOS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();

		$res = mysql_fetch_assoc($res);
		$res = $res["NOMBRE"];

		return $res;
	}

	function Extraer_ID($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT IMAGEN, NOMBRE FROM CUERPOS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Modificar($id, $imagen, $nombre)
	{
		$this->BD->Conectar();
		$consulta="UPDATE CUERPOS SET IMAGEN = '$imagen', 
									  NOMBRE = '$nombre'
						  WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Eliminar($id)
	{
		$this->BD->Conectar();
		$consulta="DELETE FROM CUERPOS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}
}

?>