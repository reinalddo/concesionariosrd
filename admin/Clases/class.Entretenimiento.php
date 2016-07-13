<?php

class Entretenimiento
{
	var $BD;
	
	function Entretenimiento()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($version_id, $reproductor_radio, $reproductor_mp3, $parlantes, $conexion_auxiliar, $ficha_activa, $act_reproductor_radio, $act_reproductor_mp3, $act_parlantes, $act_conexion_auxiliar)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO ENTRETENIMIENTO(VERSION_ID, REPRODUCTOR_RADIO, REPRODUCTOR_MP3, PARLANTES, CONEXION_AUXILIAR, FICHA_ACTIVA, ACT_REPRODUCTOR_RADIO, ACT_REPRODUCTOR_MP3, ACT_PARLANTES, ACT_CONEXION_AUXILIAR) VALUES($version_id, '$reproductor_radio', '$reproductor_mp3', '$parlantes', '$conexion_auxiliar', $ficha_activa, $act_reproductor_radio, $act_reproductor_mp3, $act_parlantes, $act_conexion_auxiliar)";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_ID($version_id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT REPRODUCTOR_RADIO, REPRODUCTOR_MP3, PARLANTES, CONEXION_AUXILIAR, FICHA_ACTIVA, ACT_REPRODUCTOR_RADIO, ACT_REPRODUCTOR_MP3, ACT_PARLANTES, ACT_CONEXION_AUXILIAR FROM ENTRETENIMIENTO WHERE VERSION_ID = $version_id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Editar($version_id, $reproductor_radio, $reproductor_mp3, $parlantes, $conexion_auxiliar, $ficha_activa, $act_reproductor_radio, $act_reproductor_mp3, $act_parlantes, $act_conexion_auxiliar)
	{
		$this->BD->Conectar();
		$consulta="UPDATE ENTRETENIMIENTO SET REPRODUCTOR_RADIO = '$reproductor_radio', 
											  REPRODUCTOR_MP3 = '$reproductor_mp3', 
											  PARLANTES = '$parlantes', 
											  CONEXION_AUXILIAR = '$conexion_auxiliar', 
											  FICHA_ACTIVA = $ficha_activa, 
											  ACT_REPRODUCTOR_RADIO = $reproductor_radio, 
											  ACT_REPRODUCTOR_MP3 = $reproductor_mp3, 
											  ACT_PARLANTES = $parlantes, 
											  ACT_CONEXION_AUXILIAR = $conexion_auxiliar 
										   WHERE VERSION_ID = $version_id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

}

?>