<?php

class Extras
{
	var $BD;
	
	function Extras()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($version_id, $id_extra, $ficha, $dato, $valor, $binario)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO EXTRAS(VERSION_ID, ID_EXTRA, FICHA, DATO, VALOR, BINARIO) VALUES($version_id, '$ficha', '$dato', '$valor', '$binario')";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_ID($version_id, $id_extra, $ficha)
	{
		$this->BD->Conectar();
		$consulta="SELECT ID, FICHA, DATO, VALOR, BINARIO FROM EXTRAS WHERE VERSION_ID = $version_id AND FICHA = '$ficha'";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();

		return $res;
	}

	function Editar($id, $dato, $valor, $binario)
	{
		$this->BD->Conectar();
		$consulta="UPDATE EXTRAS SET DATO = '$dato', 
									 VALOR = '$valor', 
									 BINARIO = '$binario' 
								 WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

}

?>