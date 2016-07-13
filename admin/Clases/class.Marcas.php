<?php

class Marcas
{
	var $BD;
	
	function Marcas()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($id_concesionarios, $logo, $nombre, $fotopres, $nombrepres, $fotogerente, $nombregerente, $correogerente, $extGerente, $contactogerente, $usuariogerente)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO MARCAS(ID_CONCESIONARIOS, LOGO, NOMBRE, FOTOPRES, NOMBREPRES, FOTOGERENTE, NOMBREGERENTE, CORREOGERENTE, EXTGERENTE, CONTACTOGERENTE, USUARIOGERENTE) VALUES($id_concesionarios, '$logo', '$nombre', '$fotopres', '$nombrepres', '$fotogerente', '$nombregerente', '$correogerente', '$extGerente', '$contactogerente', '$usuariogerente')";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_Marca($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID_CONCESIONARIOS, LOGO, NOMBRE, FOTOPRES, NOMBREPRES, FOTOGERENTE, NOMBREGERENTE, CORREOGERENTE, EXTGERENTE, CONTACTOGERENTE, USUARIOGERENTE FROM MARCAS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_Informacion_Usuario($usuario)
	{
		$this->BD->Conectar();
		$consulta = "SELECT M.ID IDMAR, 
						    M.LOGO LOGOMAR, 
						    M.NOMBRE NOMBREMAR, 
						    C.LOGO LOGOCON, 
						    C.NOMBRE NOMBRECON
					 FROM   MARCAS M, CONCESIONARIOS C
					 WHERE  M.ID_CONCESIONARIOS = C.ID AND M.USUARIOGERENTE = '$usuario'";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Modificar($id, $logo, $nombre, $fotopres, $nombrepres, $fotogerente, $nombregerente, $correogerente, $extGerente, $contactogerente)
	{
		$this->BD->Conectar();
		$consulta = "UPDATE MARCAS SET LOGO = '$logo', 
									   NOMBRE = '$nombre', 
									   FOTOPRES = '$fotopres', 
									   NOMBREPRES = '$nombrepres', 
									   FOTOGERENTE = '$fotogerente', 
									   NOMBREGERENTE = '$nombregerente', 
									   CORREOGERENTE = '$correogerente', 
									   EXTGERENTE = '$extGerente', 
									   CONTACTOGERENTE = '$contactogerente' 
									WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Eliminar($id)
	{
		$this->BD->Conectar();
		$consulta = "DELETE FROM MARCAS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function NombreMarca($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT NOMBRE FROM MARCAS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();

		$res = mysql_fetch_assoc($res);
		$res = $res["NOMBRE"];

		return $res;
	}

	function Extraer_ID_Concesionario($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, LOGO, NOMBRE FROM MARCAS WHERE ID_CONCESIONARIOS = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Verificar_Marca($marca)
	{
		$this->BD->Conectar();
		$marca = strtolower($marca);
		$consulta="SELECT NOMBRE FROM MARCAS WHERE NOMBRE='$marca'";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
		
	}

	function Extraer()
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, LOGO, NOMBRE FROM MARCAS";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerPag($inicio, $fin)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, LOGO, NOMBRE FROM MARCAS LIMIT $inicio, $fin";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_ID_ConcesionarioPag($id, $inicio, $fin)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, LOGO, NOMBRE FROM MARCAS WHERE ID_CONCESIONARIOS = $id LIMIT $inicio, $fin";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

}

?>