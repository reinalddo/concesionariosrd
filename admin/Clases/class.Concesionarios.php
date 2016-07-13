<?php

class Concesionarios
{
	var $BD;
	
	function Concesionarios()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($logo, $nombre, $direccion, $oficina, $celular, $correo, $googlemap)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO CONCESIONARIOS(LOGO, NOMBRE, DIRECCION, OFICINA, CELULAR, CORREO, GOOGLEMAP) VALUES('$logo', '$nombre', '$direccion', '$oficina', '$celular', '$correo', '$googlemap')";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Modificar($id, $logo, $nombre, $direccion, $oficina, $celular, $correo, $googlemap)
	{
		$this->BD->Conectar();
		$consulta="UPDATE CONCESIONARIOS SET LOGO = '$logo', 
												  NOMBRE = '$nombre', 
												  DIRECCION = '$direccion', 
												  OFICINA = '$oficina', 
												  CELULAR = '$celular', 
												  CORREO = '$correo', 
												  GOOGLEMAP = '$googlemap' 
						  WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerPag($inicio, $fin)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, LOGO, NOMBRE, DIRECCION, OFICINA, CELULAR, CORREO, GOOGLEMAP FROM CONCESIONARIOS LIMIT $inicio, $fin";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer()
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, LOGO, NOMBRE, DIRECCION, OFICINA, CELULAR, CORREO, GOOGLEMAP FROM CONCESIONARIOS";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Eliminar($id)
	{
		$this->BD->Conectar();
		$consulta = "DELETE FROM CONCESIONARIOS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}
	
	function Extraer_ID($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT LOGO, NOMBRE, DIRECCION, OFICINA, CELULAR, CORREO, GOOGLEMAP FROM CONCESIONARIOS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function NombreConcesionario($id_marca)
	{
		$this->BD->Conectar();
		$consulta = "SELECT C.NOMBRE NOMBRE FROM CONCESIONARIOS C, MARCAS M WHERE M.ID_CONCESIONARIOS = C.ID AND M.ID = $id_marca";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		$res = mysql_fetch_assoc($res);
		$res = $res["NOMBRE"];

		return $res;
	}

	function NombreConcesionarioSel($id_concesionario)
	{
		$this->BD->Conectar();
		$consulta = "SELECT NOMBRE FROM CONCESIONARIOS WHERE ID = $id_concesionario";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		$res = mysql_fetch_assoc($res);
		$res = $res["NOMBRE"];

		return $res;
	}

}

?>