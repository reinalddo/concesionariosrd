<?php

class Dimensiones
{
	var $BD;
	
	function Dimensiones()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($version_id, $puertas, $plazas, $filas, $distancia, $peso, $tanque, $ficha_activa)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO DIMENSIONES(VERSION_ID, PUERTAS, PLAZAS, FILAS, DISTANCIA, PESO, TANQUE, FICHA_ACTIVA) VALUES($version_id, '$puertas', '$plazas', '$filas', '$distancia', '$peso', '$tanque', $ficha_activa)";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_ID($version_id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT PUERTAS, PLAZAS, FILAS, DISTANCIA, PESO, TANQUE, FICHA_ACTIVA FROM DIMENSIONES WHERE VERSION_ID = $version_id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Editar($version_id, $puertas, $plazas, $filas, $distancia, $peso, $tanque, $ficha_activa)
	{
		$this->BD->Conectar();
		$consulta = "UPDATE DIMENSIONES SET PUERTAS = '$puertas', 
											PLAZAS = '$plazas', 
											FILAS = '$filas', 
											DISTANCIA = '$distancia', 
											PESO = '$peso', 
											TANQUE = '$tanque', 
											FICHA_ACTIVA = $ficha_activa 
										WHERE VERSION_ID = $version_id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

}

?>