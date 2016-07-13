<?php

class Fotos
{
	var $BD;
	
	function Fotos()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($publicaciones_id, $imagen)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO FOTOS(PUBLICACIONES_ID, IMAGEN) VALUES($publicaciones_id, '$imagen')";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, IMAGEN FROM FOTOS WHERE PUBLICACIONES_ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerFoto($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT IMAGEN FROM FOTOS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();


		$res = mysql_fetch_assoc($res);
		$res = $res["IMAGEN"];

		return $res;
	}

	function FotoPublicacion($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT IMAGEN FROM FOTOS WHERE PUBLICACIONES_ID = $id LIMIT 1";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();


		$res = mysql_fetch_assoc($res);
		$res = $res["IMAGEN"];

		return $res;
	}

	function Eliminar($id)
	{
		$this->BD->Conectar();
		$consulta = "DELETE FROM FOTOS WHERE PUBLICACIONES_ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function EliminarFoto($id)
	{
		$this->BD->Conectar();
		$consulta = "DELETE FROM FOTOS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

}

?>