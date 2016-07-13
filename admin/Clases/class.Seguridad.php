<?php

class Seguridad
{
	var $BD;
	
	function Seguridad()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($version_id, $airbags, $cinturones_inerciales, $control_estabilidad, $control_traccion, $frenos, $frenos_emergencia, $faros, $cierre, $ganchos, $trabas, $ficha_activa, $act_airbags, $act_cinturones_inerciales, $act_control_estabilidad, $act_control_traccion, $act_frenos, $act_frenos_emergencia, $act_faros, $act_cierre, $act_ganchos, $act_trabas)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO SEGURIDAD(VERSION_ID, AIRBAGS, CINTURONES_INERCIALES, CONTROL_ESTABILIDAD, CONTROL_TRACCION, FRENOS, FRENOS_EMERGENCIA, FAROS, CIERRE, GANCHOS, TRABAS, FICHA_ACTIVA, ACT_AIRBAGS, ACT_CINTURONES_INERCIALES, ACT_CONTROL_ESTABILIDAD, ACT_CONTROL_TRACCION, ACT_FRENOS, ACT_FRENOS_EMERGENCIA, ACT_FAROS, ACT_CIERRE, ACT_GANCHOS, ACT_TRABAS) VALUES($version_id, '$airbags', '$cinturones_inerciales', '$control_estabilidad', '$control_traccion', '$frenos', '$frenos_emergencia', '$faros', '$cierre', '$ganchos', '$trabas', $ficha_activa, $act_airbags, $act_cinturones_inerciales, $act_control_estabilidad, $act_control_traccion, $act_frenos, $act_frenos_emergencia, $act_faros, $act_cierre, $act_ganchos, $act_trabas)";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_ID($version_id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT AIRBAGS, CINTURONES_INERCIALES, CONTROL_ESTABILIDAD, CONTROL_TRACCION, FRENOS, FRENOS_EMERGENCIA, FAROS, CIERRE, GANCHOS, TRABAS, FICHA_ACTIVA, ACT_AIRBAGS, ACT_CINTURONES_INERCIALES, ACT_CONTROL_ESTABILIDAD, ACT_CONTROL_TRACCION, ACT_FRENOS, ACT_FRENOS_EMERGENCIA, ACT_FAROS, ACT_CIERRE, ACT_GANCHOS, ACT_TRABAS FROM SEGURIDAD WHERE VERSION_ID = $version_id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Editar($version_id, $airbags, $cinturones_inerciales, $control_estabilidad, $control_traccion, $frenos, $frenos_emergencia, $faros, $cierre, $ganchos, $trabas, $ficha_activa, $act_airbags, $act_cinturones_inerciales, $act_control_estabilidad, $act_control_traccion, $act_frenos, $act_frenos_emergencia, $act_faros, $act_cierre, $act_ganchos, $act_trabas)
	{
		$this->BD->Conectar();
		$consulta="UPDATE SEGURIDAD SET AIRBAGS = '$airbags', 
										CINTURONES_INERCIALES = '$cinturones_inerciales', 
										CONTROL_ESTABILIDAD = '$control_estabilidad', 
										CONTROL_TRACCION = '$control_traccion', 
										FRENOS = '$frenos', 
										FRENOS_EMERGENCIA = '$frenos_emergencia', 
										FAROS = '$faros', 
										CIERRE = '$cierre', 
										GANCHOS = '$ganchos', 
										TRABAS = '$trabas', 
										FICHA_ACTIVA = $ficha_activa, 
										ACT_AIRBAGS = $act_airbags, 
										ACT_CINTURONES_INERCIALES = $act_cinturones_inerciales, 
										ACT_CONTROL_ESTABILIDAD = $act_control_estabilidad, 
										ACT_CONTROL_TRACCION = $act_control_traccion, 
										ACT_FRENOS = $act_frenos, 
										ACT_FRENOS_EMERGENCIA = $act_frenos_emergencia, 
										ACT_FAROS = $act_faros, 
										ACT_CIERRE = $act_cierre, 
										ACT_GANCHOS = $act_ganchos, 
										ACT_TRABAS = $act_trabas 
									WHERE VERSION_ID = $version_id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

}

?>