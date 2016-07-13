<?php

class Modelos
{
	var $BD;
	
	function Modelos()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($id_marca, $logo, $nombre)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO MODELOS(ID_MARCAS, LOGO, NOMBRE) VALUES($id_marca, '$logo', '$nombre')";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Modificar($id, $logo, $nombre)
	{
		$this->BD->Conectar();
		$consulta = "UPDATE MODELOS SET LOGO = '$logo', 
									   NOMBRE = '$nombre' 
									WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Eliminar($id)
	{
		$this->BD->Conectar();
		$consulta = "DELETE FROM MODELOS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_Modelo($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, LOGO, NOMBRE FROM MODELOS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_ID_Marcas($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, LOGO, NOMBRE FROM MODELOS WHERE ID_MARCAS = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerPorMarcas($id_marca)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, NOMBRE FROM MODELOS WHERE ID_MARCAS = $id_marca";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_Modelos_Marca($id_marca)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, LOGO, NOMBRE FROM MODELOS WHERE ID_MARCAS = $id_marca";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function NombreModelo($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT NOMBRE FROM MODELOS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();

		$res = mysql_fetch_assoc($res);
		$res = $res["NOMBRE"];

		return $res;
	}

	function LogoModelo($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT LOGO FROM MODELOS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();

		$res = mysql_fetch_assoc($res);
		$res = $res["LOGO"];

		return $res;
	}

	function Extraer()
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, LOGO, NOMBRE FROM MODELOS";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

}

?>