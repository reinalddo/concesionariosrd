<?php

class Motores
{
	var $BD;
	
	function Motores()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($version_id, $motor, $combustible, $posicion, $cilindrada, $valvulas, $potencia, $ficha_activa)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO MOTORES(VERSION_ID, MOTOR, COMBUSTIBLE, POSICION, CILINDRADA, VALVULAS, POTENCIA, FICHA_ACTIVA) VALUES($version_id, '$motor', '$combustible', '$posicion', '$cilindrada', '$valvulas', '$potencia', $ficha_activa)";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_ID($version_id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT MOTOR, COMBUSTIBLE, POSICION, CILINDRADA, VALVULAS, POTENCIA, FICHA_ACTIVA FROM MOTORES WHERE VERSION_ID = $version_id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Editar($version_id, $motor, $combustible, $posicion, $cilindrada, $valvulas, $potencia, $ficha_activa)
	{
		$this->BD->Conectar();
		$consulta="UPDATE MOTORES SET MOTOR = '$motor', 
									  COMBUSTIBLE = '$combustible', 
									  POSICION = '$posicion', 
									  CILINDRADA = '$cilindrada', 
									  VALVULAS = '$valvulas', 
									  POTENCIA = '$potencia', 
									  FICHA_ACTIVA = $ficha_activa 
								  WHERE VERSION_ID = $version_id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

}

?>