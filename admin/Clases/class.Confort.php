<?php

class Confort
{
	var $BD;
	
	function Confort()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($version_id, $alzacristales, $climatizador_bizona, $climatizador, $direccion, $volante_ajuste, $control_velocidad, $cierre, $butaca, $mandos, $asientos_reclinables, $espejos_exteriores, $aire_acondicionado, $regulacion, $lava, $inmovilizador, $espejos_electricos, $techo_corredizo, $apoyacabezas, $asiento_conductor, $volante_multifuncion, $computadora, $asientos_rebatibles, $tomacorriente, $tapizadocuero, $volantecuero, $ficha_activa, $act_alzacristales, $act_climatizador_bizona, $act_climatizador, $act_direccion, $act_volante_ajuste, $act_control_velocidad, $act_cierre, $act_butaca, $act_mandos, $act_asientos_reclinables, $act_espejos_exteriores, $act_aire_acondicionado, $act_regulacion, $act_lava, $act_inmovilizador, $act_espejos_electricos, $act_techo, $act_apoyacabezas, $act_asiento_conductor, $act_volante_multifuncion, $act_computadora, $act_asientos_rebatibles, $act_tomacorriente, $act_tapizado_cuero, $act_volante_cuero)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO CONFORT(VERSION_ID, ALZACRISTALES, CLIMATIZADOR_BIZONA, CLIMATIZADOR, DIRECCION, VOLANTE_AJUSTE, CONTROL_VELOCIDAD, CIERRE, BUTACA, MANDOS, ASIENTOS_RECLINABLES, ESPEJOS_EXTERIORES, AIRE_ACONDICIONADO, REGULACION, LAVA, INMOVILIZADOR, ESPEJOS_ELECTRICOS, TECHO_CORREDIZO, APOYACABEZAS, ASIENTO_CONDUCTOR, VOLANTE_MULTIFUNCION, COMPUTADORA, ASIENTOS_REBATIBLES, TOMACORRIENTE, TAPIZADOCUERO, VOLANTECUERO, FICHA_ACTIVA, ACT_ALZACRISTALES, ACT_CLIMATIZADOR_BIZONA, ACT_CLIMATIZADOR, ACT_DIRECCION, ACT_VOLANTE_AJUSTE, ACT_CONTROL_VELOCIDAD, ACT_CIERRE, ACT_BUTACA, ACT_MANDOS, ACT_ASIENTOS_RECLINABLES, ACT_ESPEJOS_EXTERIORES, ACT_AIRE_ACONDICIONADO, ACT_REGULACION, ACT_LAVA, ACT_INMOVILIZADOR, ACT_ESPEJOS_ELECTRICOS, ACT_TECHO_CORREDIZO, ACT_APOYACABEZAS, ACT_ASIENTO_CONDUCTOR, ACT_VOLANTE_MULTIFUNCION, ACT_COMPUTADORA, ACT_ASIENTOS_REBATIBLES, ACT_TOMACORRIENTE, ACT_TAPIZADOCUERO, ACT_VOLANTECUERO) VALUES($version_id, '$alzacristales', '$climatizador_bizona', '$climatizador', '$direccion', '$volante_ajuste', '$control_velocidad', '$cierre', '$butaca', '$mandos', '$asientos_reclinables', '$espejos_exteriores', '$aire_acondicionado', '$regulacion', '$lava', '$inmovilizador', '$espejos_electricos', '$techo_corredizo', '$apoyacabezas', '$asiento_conductor', '$volante_multifuncion', '$computadora', '$asientos_rebatibles', '$tomacorriente', '$tapizadocuero', '$volantecuero', $ficha_activa, $act_alzacristales, $act_climatizador_bizona, $act_climatizador, $act_direccion, $act_volante_ajuste, $act_control_velocidad, $act_cierre, $act_butaca, $act_mandos, $act_asientos_reclinables, $act_espejos_exteriores, $act_aire_acondicionado, $act_regulacion, $act_lava, $act_inmovilizador, $act_espejos_electricos, $act_techo, $act_apoyacabezas, $act_asiento_conductor, $act_volante_multifuncion, $act_computadora, $act_asientos_rebatibles, $act_tomacorriente, $act_tapizado_cuero, $act_volante_cuero)";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_ID($version_id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ALZACRISTALES, CLIMATIZADOR_BIZONA, CLIMATIZADOR, DIRECCION, VOLANTE_AJUSTE, CONTROL_VELOCIDAD, CIERRE, BUTACA, MANDOS, ASIENTOS_RECLINABLES, ESPEJOS_EXTERIORES, AIRE_ACONDICIONADO, REGULACION, LAVA, INMOVILIZADOR, ESPEJOS_ELECTRICOS, TECHO_CORREDIZO, APOYACABEZAS, ASIENTO_CONDUCTOR, VOLANTE_MULTIFUNCION, COMPUTADORA, ASIENTOS_REBATIBLES, TOMACORRIENTE, TAPIZADOCUERO, VOLANTECUERO, FICHA_ACTIVA, ACT_ALZACRISTALES, ACT_CLIMATIZADOR_BIZONA, ACT_CLIMATIZADOR, ACT_DIRECCION, ACT_VOLANTE_AJUSTE, ACT_CONTROL_VELOCIDAD, ACT_CIERRE, ACT_BUTACA, ACT_MANDOS, ACT_ASIENTOS_RECLINABLES, ACT_ESPEJOS_EXTERIORES, ACT_AIRE_ACONDICIONADO, ACT_REGULACION, ACT_LAVA, ACT_INMOVILIZADOR, ACT_ESPEJOS_ELECTRICOS, ACT_TECHO_CORREDIZO, ACT_APOYACABEZAS, ACT_ASIENTO_CONDUCTOR, ACT_VOLANTE_MULTIFUNCION, ACT_COMPUTADORA, ACT_ASIENTOS_REBATIBLES, ACT_TOMACORRIENTE, ACT_TAPIZADOCUERO, ACT_VOLANTECUERO FROM CONFORT WHERE VERSION_ID = $version_id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Editar($version_id, $alzacristales, $climatizador_bizona, $climatizador, $direccion, $volante_ajuste, $control_velocidad, $cierre, $butaca, $mandos, $asientos_reclinables, $espejos_exteriores, $aire_acondicionado, $regulacion, $lava, $inmovilizador, $espejos_electricos, $techo_corredizo, $apoyacabezas, $asiento_conductor, $volante_multifuncion, $computadora, $asientos_rebatibles, $tomacorriente, $tapizadocuero, $volantecuero, $ficha_activa, $act_alzacristales, $act_climatizador_bizona, $act_climatizador, $act_direccion, $act_volante_ajuste, $act_control_velocidad, $act_cierre, $act_butaca, $act_mandos, $act_asientos_reclinables, $act_espejos_exteriores, $act_aire_acondicionado, $act_regulacion, $act_lava, $act_inmovilizador, $act_espejos_electricos, $act_techo_corredizo, $act_apoyacabezas, $act_asiento_conductor, $act_volante_multifuncion, $act_computadora, $act_asientos_rebatibles, $act_tomacorriente, $act_tapizado_cuero, $act_volante_cuero)
	{
		$this->BD->Conectar();
		$consulta="UPDATE CONFORT SET ALZACRISTALES = '$alzacristales',
									  CLIMATIZADOR_BIZONA = '$climatizador_bizona', 
									  CLIMATIZADOR = '$climatizador', 
									  DIRECCION = '$direccion', 
									  VOLANTE_AJUSTE = '$volante_ajuste', 
									  CONTROL_VELOCIDAD = '$control_velocidad', 
									  CIERRE = '$cierre', 
									  BUTACA = '$butaca', 
									  MANDOS = '$mandos', 
									  ASIENTOS_RECLINABLES = '$asientos_reclinables', 
									  ESPEJOS_EXTERIORES = '$espejos_exteriores', 
									  AIRE_ACONDICIONADO = '$aire_acondicionado', 
									  REGULACION = '$regulacion', 
									  LAVA = '$lava', 
									  INMOVILIZADOR = '$inmovilizador', 
									  ESPEJOS_ELECTRICOS = '$espejos_electricos', 
									  TECHO_CORREDIZO = '$techo_corredizo', 
									  APOYACABEZAS = '$apoyacabezas', 
									  ASIENTO_CONDUCTOR = '$asiento_conductor', 
									  VOLANTE_MULTIFUNCION = '$volante_multifuncion', 
									  COMPUTADORA = '$computadora', 
									  ASIENTOS_REBATIBLES = '$asientos_rebatibles', 
									  TOMACORRIENTE = '$tomacorriente', 
									  TAPIZADOCUERO = '$tapizadocuero', 
									  VOLANTECUERO = '$volantecuero', 
									  FICHA_ACTIVA = $ficha_activa,
									  ACT_ALZACRISTALES = $act_alzacristales,
									  ACT_CLIMATIZADOR_BIZONA = $act_climatizador_bizona, 
									  ACT_CLIMATIZADOR = $act_climatizador, 
									  ACT_DIRECCION = $act_direccion, 
									  ACT_VOLANTE_AJUSTE = $act_volante_ajuste, 
									  ACT_CONTROL_VELOCIDAD = $act_control_velocidad, 
									  ACT_CIERRE = $act_cierre, 
									  ACT_BUTACA = $act_butaca, 
									  ACT_MANDOS = $act_mandos, 
									  ACT_ASIENTOS_RECLINABLES = $act_asientos_reclinables, 
									  ACT_ESPEJOS_EXTERIORES = $act_espejos_exteriores, 
									  ACT_AIRE_ACONDICIONADO = $act_aire_acondicionado, 
									  ACT_REGULACION = $act_regulacion, 
									  ACT_LAVA = $act_lava, 
									  ACT_INMOVILIZADOR = $act_inmovilizador, 
									  ACT_ESPEJOS_ELECTRICOS = $act_espejos_electricos, 
									  ACT_TECHO_CORREDIZO = $act_techo_corredizo, 
									  ACT_APOYACABEZAS = $act_apoyacabezas, 
									  ACT_ASIENTO_CONDUCTOR = $act_asiento_conductor, 
									  ACT_VOLANTE_MULTIFUNCION = $act_volante_multifuncion, 
									  ACT_COMPUTADORA = $act_computadora, 
									  ACT_ASIENTOS_REBATIBLES = $act_asientos_rebatibles, 
									  ACT_TOMACORRIENTE = $act_tomacorriente, 
									  ACT_TAPIZADOCUERO = $act_tapizado_cuero, 
									  ACT_VOLANTECUERO = $act_volante_cuero 
							 WHERE VERSION_ID = $version_id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}
}

?>