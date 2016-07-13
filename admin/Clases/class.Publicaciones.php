<?php

class Publicaciones
{
	var $BD;
	
	function Publicaciones()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($marcas_id, $cuerpos_id, $modelos_id, $slider, $version, $year, $combustible, $potencia, $puertas, $maletero, $co2, $colorext, $colorint, $motor, $transmision, $traccion, $velocidadmax, $valvulas, $precio, $video, $descarga, $porllegar)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO PUBLICACIONES(MARCAS_ID, MODELOS_ID, CUERPOS_ID, SLIDER, VERSION, YEAR, COMBUSTIBLE, POTENCIA, PUERTAS, MALETERO, CO2, COLOREXT, COLORINT, MOTOR, TRANSMISION, TRACCION, VELOCIDADMAX, VALVULAS, PRECIO, VIDEO, DESCARGA, PORLLEGAR) VALUES($marcas_id, $modelos_id,  $cuerpos_id, '$slider', '$version', '$year', '$combustible', '$potencia', '$puertas', '$maletero', '$co2', '$colorext', '$colorint', '$motor', '$transmision', '$traccion', '$velocidadmax', '$valvulas', '$precio', '$video', '$descarga', $porllegar)";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function MaxID()
	{
		$this->BD->Conectar();
		$consulta = "SELECT MAX(ID) ID FROM PUBLICACIONES";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();

		$res = mysql_fetch_assoc($res);
		$res = $res["ID"];

		return $res;
	}

	function Extraer_ID_Publicacion($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID FROM PUBLICACIONES WHERE CUERPOS_ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerID($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT MARCAS_ID, CUERPOS_ID, MODELOS_ID, SLIDER, VERSION, YEAR, COMBUSTIBLE, POTENCIA, PUERTAS, MALETERO, CO2, COLOREXT, COLORINT, MOTOR, TRANSMISION, TRACCION, VELOCIDADMAX, VALVULAS, PRECIO, VIDEO, OFERTA, DESTACADO, DESCARGA, PORLLEGAR FROM PUBLICACIONES WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer()
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, MARCAS_ID, CUERPOS_ID, MODELOS_ID, SLIDER, VERSION, YEAR, COMBUSTIBLE, POTENCIA, PUERTAS, MALETERO, CO2, COLOREXT, COLORINT, MOTOR, TRANSMISION, TRACCION, VELOCIDADMAX, VALVULAS, PRECIO, VIDEO, OFERTA, DESTACADO, DESCARGA FROM PUBLICACIONES WHERE PORLLEGAR = 0 ORDER BY RAND()";//ID DESC";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerRecientes()
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, MARCAS_ID, CUERPOS_ID, MODELOS_ID, SLIDER, VERSION, YEAR, COMBUSTIBLE, POTENCIA, PUERTAS, MALETERO, CO2, COLOREXT, COLORINT, MOTOR, TRANSMISION, TRACCION, VELOCIDADMAX, VALVULAS, PRECIO, VIDEO, OFERTA, DESTACADO, DESCARGA FROM PUBLICACIONES WHERE PORLLEGAR = 0 ORDER BY ID DESC";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerPorLLegar()
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, MARCAS_ID, CUERPOS_ID, MODELOS_ID, SLIDER, VERSION, YEAR, COMBUSTIBLE, POTENCIA, PUERTAS, MALETERO, CO2, COLOREXT, COLORINT, MOTOR, TRANSMISION, TRACCION, VELOCIDADMAX, VALVULAS, PRECIO, VIDEO, OFERTA, DESTACADO, DESCARGA FROM PUBLICACIONES WHERE PORLLEGAR = 1 ORDER BY ID DESC";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerOfertas()
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, MARCAS_ID, CUERPOS_ID, MODELOS_ID, SLIDER, VERSION, YEAR, COMBUSTIBLE, POTENCIA, PUERTAS, MALETERO, CO2, COLOREXT, COLORINT, PRECIO, VIDEO, TITULO_OFERTA FROM PUBLICACIONES WHERE OFERTA = 1 ORDER BY ID DESC";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerDestacados()
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, MARCAS_ID, CUERPOS_ID, MODELOS_ID, SLIDER, VERSION, YEAR, COMBUSTIBLE, POTENCIA, PUERTAS, MALETERO, CO2, COLOREXT, COLORINT, PRECIO, VIDEO, OFERTA, TITULO_DESTACADO FROM PUBLICACIONES WHERE DESTACADO = 1 ORDER BY ID DESC";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerDestacadosRand()
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, MARCAS_ID, CUERPOS_ID, MODELOS_ID, SLIDER, VERSION, YEAR, COMBUSTIBLE, POTENCIA, PUERTAS, MALETERO, CO2, COLOREXT, COLORINT, PRECIO, VIDEO, OFERTA, TITULO_DESTACADO FROM PUBLICACIONES WHERE DESTACADO = 1 ORDER BY RAND()";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerDestacadosPag($inicio, $fin)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, MARCAS_ID, CUERPOS_ID, MODELOS_ID, SLIDER, VERSION, YEAR, COMBUSTIBLE, POTENCIA, PUERTAS, MALETERO, CO2, COLOREXT, COLORINT, PRECIO, VIDEO, OFERTA, TITULO_DESTACADO FROM PUBLICACIONES WHERE DESTACADO = 1 ORDER BY ID DESC LIMIT $inicio, $fin";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Modificar($id, $cuerpos_id, $slider, $version, $year, $combustible, $potencia, $puertas, $maletero, $co2, $colorext, $colorint, $motor, $transmision, $traccion, $velocidadmax, $valvulas, $precio, $video, $descarga, $porllegar)
	{
		$this->BD->Conectar();
		$consulta = "UPDATE PUBLICACIONES SET 
						    CUERPOS_ID = '$cuerpos_id',
							SLIDER = '$slider', 
							VERSION = '$version', 
							YEAR = '$year', 
							COMBUSTIBLE = '$combustible', 
							POTENCIA = '$potencia', 
							PUERTAS = '$puertas', 
							MALETERO = '$maletero', 
							CO2 = '$co2', 
							COLOREXT = '$colorext', 
							COLORINT = '$colorint', 
							MOTOR = '$motor', 
							TRANSMISION = '$transmision', 
							TRACCION = '$traccion', 
							VELOCIDADMAX = '$velocidadmax', 
							VALVULAS = '$valvulas', 
							PRECIO = '$precio', 
							VIDEO = '$video', 
							DESCARGA = '$descarga', 
							PORLLEGAR = '$porllegar' 
							
				     WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function AgregarQuitarOferta($id, $oferta, $titulo)
	{
		$this->BD->Conectar();
		$consulta = "UPDATE PUBLICACIONES SET OFERTA = $oferta, TITULO_OFERTA = '$titulo' WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function AgregarQuitarDestacado($id, $destacado, $titulo)
	{
		$this->BD->Conectar();
		$consulta = "UPDATE PUBLICACIONES SET DESTACADO = $destacado, TITULO_DESTACADO = '$titulo' WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerVersionesModelo($id_modelo)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, MARCAS_ID, CUERPOS_ID, MODELOS_ID, SLIDER, VERSION, YEAR, COMBUSTIBLE, POTENCIA, PUERTAS, MALETERO, CO2, COLOREXT, COLORINT, MOTOR, TRANSMISION, TRACCION, VELOCIDADMAX, VALVULAS, PRECIO, DESCARGA FROM PUBLICACIONES WHERE MODELOS_ID = $id_modelo";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerVersiones($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT MARCAS_ID, CUERPOS_ID, MODELOS_ID, SLIDER, VERSION, YEAR, COMBUSTIBLE, POTENCIA, PUERTAS, MALETERO, CO2, COLOREXT, COLORINT, MOTOR, TRANSMISION, TRACCION, VELOCIDADMAX, VALVULAS, PRECIO, DESCARGA FROM PUBLICACIONES WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerVersionesCuerpo($id_cuerpo)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, MARCAS_ID, MODELOS_ID, SLIDER, VERSION, YEAR, COMBUSTIBLE, POTENCIA, PUERTAS, MALETERO, CO2, COLOREXT, COLORINT, MOTOR, TRANSMISION, TRACCION, VELOCIDADMAX, VALVULAS, PRECIO FROM PUBLICACIONES WHERE CUERPOS_ID = $id_cuerpo";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerVersionesModeloNumFilas($id_modelo)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, MARCAS_ID, CUERPOS_ID, MODELOS_ID, SLIDER, VERSION, YEAR, COMBUSTIBLE, POTENCIA, PUERTAS, MALETERO, CO2, COLOREXT, COLORINT, MOTOR, TRANSMISION, TRACCION, VELOCIDADMAX, VALVULAS, PRECIO, DESCARGA FROM PUBLICACIONES WHERE MODELOS_ID = $id_modelo";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerVersionesCuerpoNumFilas($id_cuerpo)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, MARCAS_ID, MODELOS_ID, SLIDER, VERSION, YEAR, COMBUSTIBLE, POTENCIA, PUERTAS, MALETERO, CO2, COLOREXT, COLORINT, MOTOR, TRANSMISION, TRACCION, VELOCIDADMAX, VALVULAS, PRECIO FROM PUBLICACIONES WHERE CUERPOS_ID = $id_cuerpo";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerVersionesModeloPag($id_modelo, $inicio, $fin)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, MARCAS_ID, CUERPOS_ID, MODELOS_ID, SLIDER, VERSION, YEAR, COMBUSTIBLE, POTENCIA, PUERTAS, MALETERO, CO2, COLOREXT, COLORINT, MOTOR, TRANSMISION, TRACCION, VELOCIDADMAX, VALVULAS, PRECIO, DESCARGA FROM PUBLICACIONES WHERE MODELOS_ID = $id_modelo AND PORLLEGAR = 0 ORDER BY ID DESC LIMIT $inicio, $fin";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerVersionesCuerpoPag($id_cuerpo, $inicio, $fin)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, MARCAS_ID, MODELOS_ID, SLIDER, VERSION, YEAR, COMBUSTIBLE, POTENCIA, PUERTAS, MALETERO, CO2, COLOREXT, COLORINT, MOTOR, TRANSMISION, TRACCION, VELOCIDADMAX, VALVULAS, PRECIO FROM PUBLICACIONES WHERE CUERPOS_ID = $id_cuerpo ORDER BY ID DESC LIMIT $inicio, $fin";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function ExtraerGoogleMap($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT C.GOOGLEMAP GOOGLEMAP FROM CONCESIONARIOS C, MARCAS M, PUBLICACIONES P WHERE C.ID = M.ID_CONCESIONARIOS AND M.ID = P.MARCAS_ID AND P.ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();

		return $res;
	}

	function Extraer_ID_Modelos($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID FROM PUBLICACIONES WHERE MODELOS_ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Eliminar($id)
	{
		$this->BD->Conectar();
		$consulta = "DELETE FROM PUBLICACIONES WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}
}

?>