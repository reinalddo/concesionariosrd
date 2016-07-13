<?php

class Transmisiones
{
	var $BD;
	
	function Transmisiones()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($version_id, $transmision, $marchas, $traccion, $fr_delanteros, $fr_traseros, $suspension, $neumaticos, $ficha_activa)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO TRANSMISIONES(VERSION_ID, TRANSMISION, MARCHAS, TRACCION, FR_DELANTEROS, FR_TRASEROS, SUSPENSION, NEUMATICOS, FICHA_ACTIVA) VALUES($version_id, '$transmision', '$marchas', '$traccion', '$fr_delanteros', '$fr_traseros', '$suspension', '$neumaticos', $ficha_activa)";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_ID($version_id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT TRANSMISION, MARCHAS, TRACCION, FR_DELANTEROS, FR_TRASEROS, SUSPENSION, NEUMATICOS, FICHA_ACTIVA FROM TRANSMISIONES WHERE VERSION_ID = $version_id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Editar($version_id, $transmision, $marchas, $traccion, $fr_delanteros, $fr_traseros, $suspension, $neumaticos, $ficha_activa)
	{
		$this->BD->Conectar();
		$consulta="UPDATE TRANSMISIONES SET TRANSMISION = '$transmision', 
											MARCHAS = '$marchas', 
											TRACCION = '$traccion', 
											FR_DELANTEROS = '$fr_delanteros', 
											FR_TRASEROS = '$fr_traseros', 
											SUSPENSION = '$suspension', 
											NEUMATICOS = '$neumaticos', 
											FICHA_ACTIVA = $ficha_activa 
										WHERE VERSION_ID = $version_id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

}

?>