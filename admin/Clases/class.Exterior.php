<?php

class Exterior
{
	var $BD;
	
	function Exterior()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($version_id, $llantas_aleacion, $espejos_exteriores, $espejos_carroceria, $spoiler, $ficha_activa, $act_llantas_aleacion, $act_espejosexteriores, $act_espejos_carroceria, $act_spoiler)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO EXTERIOR(VERSION_ID, LLANTAS_ALEACION, ESPEJOS_EXTERIORES, ESPEJOS_CARROCERIA, SPOILER, FICHA_ACTIVA, ACT_LLANTAS_ALEACION, ACT_ESPEJOS_EXTERIORES, ACT_ESPEJOS_CARROCERIA, ACT_SPOILER) VALUES($version_id, '$llantas_aleacion', '$espejos_exteriores', '$espejos_carroceria', '$spoiler', $ficha_activa, $act_llantas_aleacion, $act_espejosexteriores, $act_espejos_carroceria, $act_spoiler)";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_ID($version_id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT LLANTAS_ALEACION, ESPEJOS_EXTERIORES, ESPEJOS_CARROCERIA, SPOILER, FICHA_ACTIVA, ACT_LLANTAS_ALEACION, ACT_ESPEJOS_EXTERIORES, ACT_ESPEJOS_CARROCERIA, ACT_SPOILER FROM EXTERIOR WHERE VERSION_ID = $version_id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Editar($version_id, $llantas_aleacion, $espejos_exteriores, $espejos_carroceria, $spoiler, $ficha_activa, $act_llantas_aleacion, $act_espejos_exteriores, $act_espejos_carroceria, $act_spoiler)
	{
		$this->BD->Conectar();
		$consulta="UPDATE EXTERIOR SET LLANTAS_ALEACION = '$llantas_aleacion', 
									   ESPEJOS_EXTERIORES = '$espejos_exteriores', 
									   ESPEJOS_CARROCERIA = '$espejos_carroceria', 
									   SPOILER = '$spoiler', 
									   FICHA_ACTIVA = $ficha_activa,
									   ACT_LLANTAS_ALEACION = $act_llantas_aleacion, 
									   ACT_ESPEJOS_EXTERIORES = $act_espejos_exteriores, 
									   ACT_ESPEJOS_CARROCERIA = $act_espejos_carroceria, 
									   ACT_SPOILER = $act_spoiler 
								   WHERE VERSION_ID = $version_id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

}

?>