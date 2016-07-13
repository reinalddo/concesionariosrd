<?php

class Copyright
{
	var $BD;
	
	function Copyright()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Modificar($descripcion)
	{
		$this->BD->Conectar();
		$consulta="UPDATE COPYRIGHT SET DESCRIPCION = '$descripcion'";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer()
	{
		$this->BD->Conectar();
		$consulta="SELECT DESCRIPCION FROM COPYRIGHT";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		$res = mysql_fetch_assoc($res);
		$res = $res["DESCRIPCION"];

		return $res;
	}

}

?>