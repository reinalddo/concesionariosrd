<?php

class Bancos
{
	var $BD;
	
	function Bancos()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($logo, $nombre, $tasa_interes, $inicial, $monto_financiar)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO BANCOS(LOGO, NOMBRE, TASA_INTERES, INICIAL, MONTO_FINANCIAR) VALUES('$logo', '$nombre', '$tasa_interes', '$inicial', '$monto_financiar')";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer()
	{
		$this->BD->Conectar();
		$consulta="SELECT ID, LOGO, NOMBRE FROM BANCOS";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_ID($id)
	{
		$this->BD->Conectar();
		$consulta="SELECT LOGO, NOMBRE, TASA_INTERES, INICIAL, MONTO_FINANCIAR FROM BANCOS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Modificar($id, $logo, $nombre, $tasa_interes, $inicial, $monto_financiar)
	{
		$this->BD->Conectar();
		$consulta="UPDATE BANCOS SET LOGO = '$logo', 
									 NOMBRE = '$nombre', 
									 TASA_INTERES = '$tasa_interes', 
									 INICIAL = '$inicial', 
									 MONTO_FINANCIAR = '$monto_financiar' 
								 WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Eliminar($id)
	{
		$this->BD->Conectar();
		$consulta="DELETE FROM BANCOS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

}

?>