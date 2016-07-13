<script>
var img = 1, fila = 0, fila_motor = 0, fila_dimensiones = 0, fila_transmision = 0, fila_confort = 0, fila_exterior = 0, fila_seguridad = 0, fila_entretenimiento = 0;
function Agregar_Imagen()
{
	document.getElementById("agregar_imagen").innerHTML += "<input name='foto"+img+"' type='file' id='foto"+img+"' /><br><br>";
	img = img+1; 
}

function Agregar_Fila_Motor(ficha)
{
	fila_motor = fila_motor+1;
	document.getElementById("inf"+ficha).innerHTML += "<table width='100%' class='table table-striped table-bordered'><tr><td><input class='input input-lg' name='campo"+fila_motor+ficha+"' type='text' id='campo"+fila_motor+ficha+"' /></td><td><input class='input input-lg' name='valor"+fila_motor+ficha+"' type='text' id='valor"+fila_motor+ficha+"' /></td><td><input name='valor_check"+fila_motor+ficha+"' type='checkbox' value='0' id='valor_check"+fila_motor+ficha+"' /></td></tr></table>";
}

function Agregar_Fila_Dimensiones(ficha)
{
	fila_dimensiones = fila_dimensiones+1;
	document.getElementById("inf"+ficha).innerHTML += "<table width='100%' class='table table-striped table-bordered'><tr><td><input class='input input-lg' name='campo"+fila_dimensiones+ficha+"' type='text' id='campo"+fila_dimensiones+ficha+"' /></td><td><input class='input input-lg' name='valor"+fila_dimensiones+ficha+"' type='text' id='valor"+fila_dimensiones+ficha+"' /></td><td><input name='valor_check"+fila_dimensiones+ficha+"' type='checkbox' value='0' id='valor_check"+fila_dimensiones+ficha+"' /></td></tr></table>";
}

function Agregar_Fila_Transmision(ficha)
{
	fila_transmision = fila_transmision+1;
	document.getElementById("inf"+ficha).innerHTML += "<table width='100%' class='table table-striped table-bordered'><tr><td><input class='input input-lg' name='campo"+fila_transmision+ficha+"' type='text' id='campo"+fila_transmision+ficha+"' /></td><td><input class='input input-lg' name='valor"+fila_transmision+ficha+"' type='text' id='valor"+fila_transmision+ficha+"' /></td><td><input name='valor_check"+fila_transmision+ficha+"' type='checkbox' value='0' id='valor_check"+fila_transmision+ficha+"' /></td></tr></table>";
}

function Agregar_Fila_Confort(ficha)
{
	fila_confort = fila_confort+1;
	document.getElementById("inf"+ficha).innerHTML += "<table width='100%' class='table table-striped table-bordered'><tr><td><input class='input input-lg' name='campo"+fila_confort+ficha+"' type='text' id='campo"+fila_confort+ficha+"' /></td><td><input class='input input-lg' name='valor"+fila_confort+ficha+"' type='text' id='valor"+fila_confort+ficha+"' /></td><td><input name='valor_check"+fila_confort+ficha+"' type='checkbox' value='0' id='valor_check"+fila_confort+ficha+"' /></td></tr></table>";
}

function Agregar_Fila_Exterior(ficha)
{
	fila_exterior = fila_exterior+1;
	document.getElementById("inf"+ficha).innerHTML += "<table width='100%' class='table table-striped table-bordered'><tr><td><input class='input input-lg' name='campo"+fila_exterior+ficha+"' type='text' id='campo"+fila_exterior+ficha+"' /></td><td><input class='input input-lg' name='valor"+fila_exterior+ficha+"' type='text' id='valor"+fila_exterior+ficha+"' /></td><td><input name='valor_check"+fila_exterior+ficha+"' type='checkbox' value='0' id='valor_check"+fila_exterior+ficha+"' /></td></tr></table>";
}

function Agregar_Fila_Seguridad(ficha)
{
	fila_seguridad = fila_seguridad+1;
	document.getElementById("inf"+ficha).innerHTML += "<table width='100%' class='table table-striped table-bordered'><tr><td><input class='input input-lg' name='campo"+fila_seguridad+ficha+"' type='text' id='campo"+fila_seguridad+ficha+"' /></td><td><input class='input input-lg' name='valor"+fila_seguridad+ficha+"' type='text' id='valor"+fila_seguridad+ficha+"' /></td><td><input name='valor_check"+fila_seguridad+ficha+"' type='checkbox' value='0' id='valor_check"+fila_seguridad+ficha+"' /></td></tr></table>";
}

function Agregar_Fila_Entretenimiento(ficha)
{
	fila_entretenimiento = fila_entretenimiento+1;
	document.getElementById("inf"+ficha).innerHTML += "<table width='100%' class='table table-striped table-bordered'><tr><td><input class='input input-lg' name='campo"+fila_entretenimiento+ficha+"' type='text' id='campo"+fila_entretenimiento+ficha+"' /></td><td><input class='input input-lg' name='valor"+fila_entretenimiento+ficha+"' type='text' id='valor"+fila_entretenimiento+ficha+"' /></td><td><input name='valor_check"+fila_entretenimiento+ficha+"' type='checkbox' value='0' id='valor_check"+fila_entretenimiento+ficha+"' /></td></tr></table>";
}

/*
function Agregar_Fila()
{
	fila = fila+1;
	document.getElementById("inf_extra").innerHTML += "<table width='100%' class='table table-striped table-bordered'><tr><td><input class='input input-lg' name='campo"+fila+"' type='text' id='campo"+fila+"' /></td><td><input class='input input-lg' name='valor"+fila+"' type='text' id='valor"+fila+"' /></td><td><input name='valor_check"+fila+"' type='checkbox' value='0' id='valor_check"+fila+"' /></td></tr></table>";
}
*/
function Revisar(band)
{
	var acepto = true;
	
	if(band == 'agr')
	if(document.getElementById("imagen1").value == "" && document.getElementById("imagen2").value == "" && document.getElementById("imagen3").value == "" && document.getElementById("imagen4").value == "" && document.getElementById("imagen5").value == "" && document.getElementById("imagen6").value == "")
	{
		acepto = false;
		document.getElementById("error_imagen").innerHTML = "<br><div class='alert alert-danger'>DEBE AGREGAR AL MENOS UNA IMAGEN</div>";
	}
	else
	{
		document.getElementById("error_imagen").innerHTML = "";
	}

	if(document.getElementById("slider").value == "0")
	{
		acepto = false;
		document.getElementById("error_slider").innerHTML = "<br><div class='alert alert-danger'>DEBE SELECCIONAR UNA IMAGEN PARA EL SLIDER PRINCIPAL</div>";
	}
	else
	{
		document.getElementById("error_slider").innerHTML = "";
	}

	if(document.getElementById("cuerpos_select").value == "0")
	{
		acepto = false;
		document.getElementById("error_cuerpo").innerHTML = "<br><div class='alert alert-danger'>DEBE SELECCIONAR UN CUERPO DE CARRO</div>";
	}
	else
	{
		document.getElementById("error_cuerpo").innerHTML = "";
	}

	if(band == 'agr')
	if(document.getElementById("select_modelos").value == "0" || document.getElementById("select_modelos").value == "")
	{
		acepto = false;
		document.getElementById("error_modelos").innerHTML = "<br><div class='alert alert-danger'>DEBE REGISTRAR UN MODELO</div>";
	}
	else
	{
		document.getElementById("error_modelos").innerHTML = "";
	}

	if(document.getElementById("version").value == "")
	{
		acepto = false;
		document.getElementById("error_version").innerHTML = "<br><div class='alert alert-danger'>DEBE REGISTRAR UNA VERSIÓN</div>";
	}
	else
	{
		document.getElementById("error_version").innerHTML = "";
	}

	if(document.getElementById("year").value == "")
	{
		acepto = false;
		document.getElementById("error_year").innerHTML = "<br><div class='alert alert-danger'>DEBE REGISTRAR UN AÑO</div>";
	}
	else
	{
		document.getElementById("error_year").innerHTML = "";
	}

	if(document.getElementById("combustible").value == "0")
	{
		acepto = false;
		document.getElementById("error_combustible").innerHTML = "<br><div class='alert alert-danger'>DEBE SELECCIONAR UN TIPO DE COMBUSTIBLE</div>";
	}
	else
	{
		document.getElementById("error_combustible").innerHTML = "";
	}

	if(document.getElementById("puertas").value == "0")
	{
		acepto = false;
		document.getElementById("error_puertas").innerHTML = "<br><div class='alert alert-danger'>DEBE SELECCIONAR UN NÚMERO DE PUERTAS</div>";
	}
	else
	{
		document.getElementById("error_puertas").innerHTML = "";
	}

	if(document.getElementById("precio").value == "")
	{
		acepto = false;
		document.getElementById("error_precio").innerHTML = "<br><div class='alert alert-danger'>DEBE REGISTRAR UN PRECIO</div>";
	}
	else
	{
		document.getElementById("error_precio").innerHTML = "";
	}

	if(document.getElementById("porllegar").checked)
	{
		document.getElementById("porllegar").value = 1;
	}
	else
		document.getElementById("porllegar").value = 0;
/*	if(band == 'agr')
	if(document.getElementById("select_marcas").value == "" || document.getElementById("select_marcas").value == "0")
	{
		acepto = false;
		document.getElementById("error_marcas").innerHTML = "<br><div class='alert alert-danger'>DEBE SELECCIONAR UNA MARCA</div>";
	}
	else
	{
		document.getElementById("error_marcas").innerHTML = "";
	}
*/
	if(acepto) document.form_publicaciones.submit();
}
</script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
	$("document").ready(function(){
		$( "#select_concesionarios" ).load( "Select/concesionarios.php" );

		$("#select_concesionarios").change(function(){
			var id = $("#select_concesionarios").val();
			$.get("Select/marcas.php",{param_id:id})
			.done(function(data){
				$("#select_marcas").html(data);
			})
		})

		$("#select_marcas").change(function(){
			var id = $("#select_marcas").val();
			$.get("Select/modelos.php",{param_id:id})
			.done(function(data){
				$("#select_modelos").html(data);
			})
		})

		$("#select_modelos").change(function(){
			var id = $("#select_modelos").val();
			$.get("Select/version.php",{param_id:id})
			.done(function(data){
				$("#select_version").html(data);
			})
		})

	})
</script>

<script type="text/javascript" src="cke/ckeditor/ckeditor.js"></script>
<script type="text/javascript">            
	function guardar(){
		var oEditor = CKEDITOR.instances.descripcion;
		document.f.descripcion.value=oEditor.getData();
		//object.descripcion=[encodeURIComponent(object.descripcion)];
		return true;
	}
</script>

<div class="row" style="background-color:#000;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">ADMINISTRAR PUBLICACIONES</strong>
</div>
<br>
<br>
<div class="row">
<?php

if(isset($_POST['datos_fichas']) || isset($_POST['datos_fichas_mod']))
{
	if(isset($_POST['datos_fichas']))
		$version_id = $_POST['datos_fichas'];
	else 
		$version_id = $_POST['datos_fichas_mod'];

/**************************Motor:********************/
$act_ficha_motor = ""; if(isset($_POST['act_ficha_motor'])) $act_ficha_motor = 1; else $act_ficha_motor = 0;

$motor       = $_POST['motor'];
$combustible = $_POST['combustible'];
$posicion    = $_POST['posicion'];
$cilindrada  = $_POST['cilindrada'];
$valvulas    = $_POST['valvulas'];
$potencia    = $_POST['potencia'];

if(isset($_POST['datos_fichas']))
	$obj_motores->Registrar($version_id, $motor, $combustible, $posicion, $cilindrada, $valvulas, $potencia, $act_ficha_motor);
else
	$obj_motores->Editar($version_id, $motor, $combustible, $posicion, $cilindrada, $valvulas, $potencia, $act_ficha_motor);

$i = 1;
while(isset($_POST['campo_mod_motor'.$i]))
{
	if($_POST['campo_mod_motor'.$i])
	{
		$id          = $_POST['id_extra_mod_motor'.$i];
		$dato  		 = $_POST['campo_mod_motor'.$i];
		$valor 		 = $_POST['valor_mod_motor'.$i];
		$valor_check = ""; if(isset($_POST['valor_check_mod_motor'.$i])) $valor_check = 1; else $valor_check = 0;

		$obj_extras->Editar($id, $dato, $valor, $valor_check);
	}
	$i++;
}

$i = 1;
while(isset($_POST['campo'.$i.'_motor']))
{
	if($_POST['campo'.$i.'_motor'])
	{
		$dato  		 = $_POST['campo'.$i.'_motor'];
		$valor 		 = $_POST['valor'.$i.'_motor'];
		$valor_check = ""; if(isset($_POST['valor_check'.$i.'_motor'])) $valor_check = 1; else $valor_check = 0;

		$obj_extras->Registrar($version_id, "_MOTOR_", $dato, $valor, $valor_check);
	}
	$i++;
}

/*******************************Dimensiones y Capacidades********************************/
$act_ficha_dimensiones = ""; if(isset($_POST['act_ficha_dimensiones'])) $act_ficha_dimensiones = 1; else $act_ficha_dimensiones = 0;

$puertas   = $_POST['puertas'];
$plazas    = $_POST['plazas'];
$filas     = $_POST['filas'];
$distancia = $_POST['distancia'];
$peso      = $_POST['peso'];
$tanque    = $_POST['tanque'];

if(isset($_POST['datos_fichas']))
	$obj_dimensiones->Registrar($version_id, $puertas, $plazas, $filas, $distancia, $peso, $tanque, $act_ficha_dimensiones);
else
	$obj_dimensiones->Editar($version_id, $puertas, $plazas, $filas, $distancia, $peso, $tanque, $act_ficha_dimensiones);

$i = 1;
while(isset($_POST['campo_mod_dimensiones'.$i]))
{
	if($_POST['campo_mod_dimensiones'.$i])
	{
		$id          = $_POST['id_extra_mod_dimensiones'.$i];
		$dato  		 = $_POST['campo_mod_dimensiones'.$i];
		$valor 		 = $_POST['valor_mod_dimensiones'.$i];
		$valor_check = ""; if(isset($_POST['valor_check_mod_dimensiones'.$i])) $valor_check = 1; else $valor_check = 0;

		$obj_extras->Editar($id, $dato, $valor, $valor_check);
	}
	$i++;
}

$i = 1;
while(isset($_POST['campo'.$i.'_dimensiones']))
{
	if($_POST['campo'.$i.'_dimensiones'])
	{
		$dato  		 = $_POST['campo'.$i.'_dimensiones'];
		$valor 		 = $_POST['valor'.$i.'_dimensiones'];
		$valor_check = ""; if(isset($_POST['valor_check'.$i.'_dimensiones'])) $valor_check = 1; else $valor_check = 0;

		$obj_extras->Registrar($version_id, "_DIMENSIONES_", $dato, $valor, $valor_check);
	}
	$i++;
}

/*******************************Transmisión y Chasis*************************************/
$act_ficha_transmision = ""; if(isset($_POST['act_ficha_transmision'])) $act_ficha_transmision = 1; else $act_ficha_transmision = 0;

$transmision   = $_POST['transmision'];
$marchas       = $_POST['marchas'];
$traccion      = $_POST['traccion'];
$fr_delanteros = $_POST['fr_delanteros'];
$fr_traseros   = $_POST['fr_traseros'];
$suspension    = $_POST['suspension'];
$neumaticos    = $_POST['neumaticos'];

if(isset($_POST['datos_fichas']))
	$obj_transmisiones->Registrar($version_id, $transmision, $marchas, $traccion, $fr_delanteros, $fr_traseros, $suspension, $neumaticos, $act_ficha_transmision);
else
	$obj_transmisiones->Editar($version_id, $transmision, $marchas, $traccion, $fr_delanteros, $fr_traseros, $suspension, $neumaticos, $act_ficha_transmision);

$i = 1;
while(isset($_POST['campo_mod_transmision'.$i]))
{
	if($_POST['campo_mod_transmision'.$i])
	{
		$id          = $_POST['id_extra_mod_transmision'.$i];
		$dato  		 = $_POST['campo_mod_transmision'.$i];
		$valor 		 = $_POST['valor_mod_transmision'.$i];
		$valor_check = ""; if(isset($_POST['valor_check_mod'.$i])) $valor_check = 1; else $valor_check = 0;

		$obj_extras->Editar($id, $dato, $valor, $valor_check);
	}
	$i++;
}

$i = 1;
while(isset($_POST['campo'.$i.'_transmision']))
{
	if($_POST['campo'.$i.'_transmision'])
	{
		$dato  		 = $_POST['campo'.$i.'_transmision'];
		$valor 		 = $_POST['valor'.$i.'_transmision'];
		$valor_check = ""; if(isset($_POST['valor_check'.$i.'_transmision'])) $valor_check = 1; else $valor_check = 0;

		$obj_extras->Registrar($version_id, "_TRANSMISIONES_", $dato, $valor, $valor_check);
	}
	$i++;
}

/************************************Confort y Convivencia*************************************************/
$act_ficha_confort = ""; if(isset($_POST['act_ficha_confort'])) $act_ficha_confort = 1; else $act_ficha_confort = 0;

$alzacristales        = "";if(isset($_POST['alzacristales'])) $alzacristales = 1; else $alzacristales = 0;
$climatizador_bizona  = "";if(isset($_POST['climatizador_bizona'])) $climatizador_bizona = 1; else $climatizador_bizona = 0;
$climatizador         = "";if(isset($_POST['climatizador'])) $climatizador = 1; else $climatizador = 0;
$direccion            = "";if(isset($_POST['direccion'])) $direccion = 1; else $direccion = 0;
$volante_ajuste       = "";if(isset($_POST['volante_ajuste'])) $volante_ajuste = 1; else $volante_ajuste = 0;
$control_velocidad    = "";if(isset($_POST['control_velocidad'])) $control_velocidad = 1; else $control_velocidad = 0;
$cierre               = "";if(isset($_POST['cierre'])) $cierre = 1; else $cierre = 0;
$butaca               = "";if(isset($_POST['butaca'])) $butaca = 1; else $butaca = 0;
$mandos               = "";if(isset($_POST['mandos'])) $mandos = 1; else $mandos = 0;
$asientos_reclinables = "";if(isset($_POST['asientos_reclinables'])) $asientos_reclinables = 1; else $asientos_reclinables = 0;
$espejos_exteriores   = "";if(isset($_POST['espejos_exteriores'])) $espejos_exteriores = 1; else $espejos_exteriores = 0;
$aire_acondicionado   = "";if(isset($_POST['aire_acondicionado'])) $aire_acondicionado = 1; else $aire_acondicionado = 0;
$regulacion           = "";if(isset($_POST['regulacion'])) $regulacion = 1; else $regulacion = 0;
$lava                 = "";if(isset($_POST['lava'])) $lava = 1; else $lava = 0;
$inmovilizador        = "";if(isset($_POST['inmovilizador'])) $inmovilizador = 1; else $inmovilizador = 0;
$espejos_electricos   = "";if(isset($_POST['espejos_electricos'])) $espejos_electricos = 1; else $espejos_electricos = 0;
$techo                = "";if(isset($_POST['techo'])) $techo = 1; else $techo = 0;
$apoyacabezas         = "";if(isset($_POST['apoyacabezas'])) $apoyacabezas = 1; else $apoyacabezas = 0;
$asiento_conductor    = "";if(isset($_POST['asiento_conductor'])) $asiento_conductor = 1; else $asiento_conductor = 0;
$volante_multifuncion = "";if(isset($_POST['volante_multifuncion'])) $volante_multifuncion = 1; else $volante_multifuncion = 0;
$computadora          = "";if(isset($_POST['computadora'])) $computadora = 1; else $computadora = 0;
$asientos_rebatibles  = "";if(isset($_POST['asientos_rebatibles'])) $asientos_rebatibles = 1; else $asientos_rebatibles = 0;
$tomacorriente        = "";if(isset($_POST['tomacorriente'])) $tomacorriente = 1; else $tomacorriente = 0;
$volante_cuero        = "";if(isset($_POST['volante_cuero'])) $volante_cuero = 1; else $volante_cuero = 0;
$tapizado_cuero       = "";if(isset($_POST['tapizado_cuero'])) $tapizado_cuero = 1; else $tapizado_cuero = 0;


$act_alzacristales        = "";if(isset($_POST['act_alzacristales'])) $act_alzacristales = 1; else $act_alzacristales = 0;
$act_climatizador_bizona  = "";if(isset($_POST['act_climatizador_bizona'])) $act_climatizador_bizona = 1; else $act_climatizador_bizona = 0;
$act_climatizador         = "";if(isset($_POST['act_climatizador'])) $act_climatizador = 1; else $act_climatizador = 0;
$act_direccion            = "";if(isset($_POST['act_direccion'])) $act_direccion = 1; else $act_direccion = 0;
$act_volante_ajuste       = "";if(isset($_POST['act_volante_ajuste'])) $act_volante_ajuste = 1; else $act_volante_ajuste = 0;
$act_control_velocidad    = "";if(isset($_POST['act_control_velocidad'])) $act_control_velocidad = 1; else $act_control_velocidad = 0;
$act_cierre               = "";if(isset($_POST['act_cierre'])) $act_cierre = 1; else $act_cierre = 0;
$act_butaca               = "";if(isset($_POST['act_butaca'])) $act_butaca = 1; else $act_butaca = 0;
$act_mandos               = "";if(isset($_POST['act_mandos'])) $act_mandos = 1; else $act_mandos = 0;
$act_asientos_reclinables = "";if(isset($_POST['act_asientos_reclinables'])) $act_asientos_reclinables = 1; else $act_asientos_reclinables = 0;
$act_espejos_exteriores   = "";if(isset($_POST['act_espejos_exteriores'])) $act_espejos_exteriores = 1; else $act_espejos_exteriores = 0;
$act_aire_acondicionado   = "";if(isset($_POST['act_aire_acondicionado'])) $act_aire_acondicionado = 1; else $act_aire_acondicionado = 0;
$act_regulacion           = "";if(isset($_POST['act_regulacion'])) $act_regulacion = 1; else $act_regulacion = 0;
$act_lava                 = "";if(isset($_POST['act_lava'])) $act_lava = 1; else $act_lava = 0;
$act_inmovilizador        = "";if(isset($_POST['act_inmovilizador'])) $act_inmovilizador = 1; else $act_inmovilizador = 0;
$act_espejos_electricos   = "";if(isset($_POST['act_espejos_electricos'])) $act_espejos_electricos = 1; else $act_espejos_electricos = 0;
$act_techo                = "";if(isset($_POST['act_techo'])) $act_techo = 1; else $act_techo = 0;
$act_apoyacabezas         = "";if(isset($_POST['act_apoyacabezas'])) $act_apoyacabezas = 1; else $act_apoyacabezas = 0;
$act_asiento_conductor    = "";if(isset($_POST['act_asiento_conductor'])) $act_asiento_conductor = 1; else $act_asiento_conductor = 0;
$act_volante_multifuncion = "";if(isset($_POST['act_volante_multifuncion'])) $act_volante_multifuncion = 1; else $act_volante_multifuncion = 0;
$act_computadora          = "";if(isset($_POST['act_computadora'])) $act_computadora = 1; else $act_computadora = 0;
$act_asientos_rebatibles  = "";if(isset($_POST['act_asientos_rebatibles'])) $act_asientos_rebatibles = 1; else $act_asientos_rebatibles = 0;
$act_tomacorriente        = "";if(isset($_POST['act_tomacorriente'])) $act_tomacorriente = 1; else $act_tomacorriente = 0;
$act_volante_cuero        = "";if(isset($_POST['act_volante_cuero'])) $act_volante_cuero = 1; else $act_volante_cuero = 0;
$act_tapizado_cuero       = "";if(isset($_POST['act_tapizado_cuero'])) $act_tapizado_cuero = 1; else $act_tapizado_cuero = 0;

if(isset($_POST['datos_fichas']))
	$obj_confort->Registrar($version_id, $alzacristales, $climatizador_bizona, $climatizador, $direccion, $volante_ajuste, $control_velocidad, $cierre, $butaca, $mandos, $asientos_reclinables, $espejos_exteriores, $aire_acondicionado, $regulacion, $lava, $inmovilizador, $espejos_electricos, $techo, $apoyacabezas, $asiento_conductor, $volante_multifuncion, $computadora, $asientos_rebatibles, $tomacorriente, $tapizado_cuero, $volante_cuero, $act_ficha_confort, $act_alzacristales, $act_climatizador_bizona, $act_climatizador, $act_direccion, $act_volante_ajuste, $act_control_velocidad, $act_cierre, $act_butaca, $act_mandos, $act_asientos_reclinables, $act_espejos_exteriores, $act_aire_acondicionado, $act_regulacion, $act_lava, $act_inmovilizador, $act_espejos_electricos, $act_techo, $act_apoyacabezas, $act_asiento_conductor, $act_volante_multifuncion, $act_computadora, $act_asientos_rebatibles, $act_tomacorriente, $act_tapizado_cuero, $act_volante_cuero);
else
	$obj_confort->Editar($version_id, $alzacristales, $climatizador_bizona, $climatizador, $direccion, $volante_ajuste, $control_velocidad, $cierre, $butaca, $mandos, $asientos_reclinables, $espejos_exteriores, $aire_acondicionado, $regulacion, $lava, $inmovilizador, $espejos_electricos, $techo, $apoyacabezas, $asiento_conductor, $volante_multifuncion, $computadora, $asientos_rebatibles, $tomacorriente, $tapizado_cuero, $volante_cuero, $act_ficha_confort, $act_alzacristales, $act_climatizador_bizona, $act_climatizador, $act_direccion, $act_volante_ajuste, $act_control_velocidad, $act_cierre, $act_butaca, $act_mandos, $act_asientos_reclinables, $act_espejos_exteriores, $act_aire_acondicionado, $act_regulacion, $act_lava, $act_inmovilizador, $act_espejos_electricos, $act_techo, $act_apoyacabezas, $act_asiento_conductor, $act_volante_multifuncion, $act_computadora, $act_asientos_rebatibles, $act_tomacorriente, $act_tapizado_cuero, $act_volante_cuero);

$i = 1;
while(isset($_POST['campo_mod_confort'.$i]))
{
	if($_POST['campo_mod_confort'.$i])
	{
		$id          = $_POST['id_extra_mod_confort'.$i];
		$dato  		 = $_POST['campo_mod_confort'.$i];
		$valor 		 = $_POST['valor_mod_confort'.$i];
		$valor_check = ""; if(isset($_POST['valor_check_mod_confort'.$i])) $valor_check = 1; else $valor_check = 0;

		$obj_extras->Editar($id, $dato, $valor, $valor_check);
	}
	$i++;
}

$i = 1;
while(isset($_POST['campo'.$i.'_confort']))
{
	if($_POST['campo'.$i.'_confort'])
	{
		$dato  		 = $_POST['campo'.$i.'_confort'];
		$valor 		 = $_POST['valor'.$i.'_confort'];
		$valor_check = ""; if(isset($_POST['valor_check'.$i.'_confort'])) $valor_check = 1; else $valor_check = 0;

		$obj_extras->Registrar($version_id, "_CONFORT_", $dato, $valor, $valor_check);
	}
	$i++;
}

/************************************Exterior:***************************************/
$act_ficha_exterior = ""; if(isset($_POST['act_ficha_exterior'])) $act_ficha_exterior = 1; else $act_ficha_exterior = 0;

$llantas_aleacion   = "";if(isset($_POST['llantas_aleacion'])) $llantas_aleacion = 1; else $llantas_aleacion = 0;
$espejosexteriores  = "";if(isset($_POST['espejosexteriores'])) $espejosexteriores = 1; else $espejosexteriores = 0;
$espejos_carroceria = "";if(isset($_POST['espejos_carroceria'])) $espejos_carroceria = 1; else $espejos_carroceria = 0;
$spoiler            = "";if(isset($_POST['spoiler'])) $spoiler = 1; else $spoiler = 0;

$act_llantas_aleacion   = "";if(isset($_POST['act_llantas_aleacion'])) $act_llantas_aleacion = 1; else $act_llantas_aleacion = 0;
$act_espejosexteriores  = "";if(isset($_POST['act_espejosexteriores'])) $act_espejosexteriores = 1; else $act_espejosexteriores = 0;
$act_espejos_carroceria = "";if(isset($_POST['act_espejos_carroceria'])) $act_espejos_carroceria = 1; else $act_espejos_carroceria = 0;
$act_spoiler            = "";if(isset($_POST['act_spoiler'])) $act_spoiler = 1; else $act_spoiler = 0;

if(isset($_POST['datos_fichas']))
	$obj_exterior->Registrar($version_id, $llantas_aleacion, $espejosexteriores, $espejos_carroceria, $spoiler, $act_ficha_exterior, $act_llantas_aleacion, $act_espejosexteriores, $act_espejos_carroceria, $act_spoiler);
else
	$obj_exterior->Editar($version_id, $llantas_aleacion, $espejosexteriores, $espejos_carroceria, $spoiler, $act_ficha_exterior, $act_llantas_aleacion, $act_espejosexteriores, $act_espejos_carroceria, $act_spoiler);

$i = 1;
while(isset($_POST['campo_mod_exterior'.$i]))
{
	if($_POST['campo_mod_exterior'.$i])
	{
		$id          = $_POST['id_extra_mod_exterior'.$i];
		$dato  		 = $_POST['campo_mod_exterior'.$i];
		$valor 		 = $_POST['valor_mod_exterior'.$i];
		$valor_check = ""; if(isset($_POST['valor_check_mod_exterior'.$i])) $valor_check = 1; else $valor_check = 0;

		$obj_extras->Editar($id, $dato, $valor, $valor_check);
	}
	$i++;
}

$i = 1;
while(isset($_POST['campo'.$i.'_exterior']))
{
	if($_POST['campo'.$i.'_exterior'])
	{
		$dato  		 = $_POST['campo'.$i.'_exterior'];
		$valor 		 = $_POST['valor'.$i.'_exterior'];
		$valor_check = ""; if(isset($_POST['valor_check'.$i.'_exterior'])) $valor_check = 1; else $valor_check = 0;

		$obj_extras->Registrar($version_id, "_EXTERIOR_", $dato, $valor, $valor_check);
	}
	$i++;
}

/************************************Seguridad:***************************************/
$act_ficha_seguridad = ""; if(isset($_POST['act_ficha_seguridad'])) $act_ficha_seguridad = 1; else $act_ficha_seguridad = 0;

$airbags               = "";if(isset($_POST['airbags'])) $airbags = 1; else $airbags = 0;
$cinturones_inerciales = "";if(isset($_POST['cinturones_inerciales'])) $cinturones_inerciales = 1; else $cinturones_inerciales = 0;
$control_estabilidad   = "";if(isset($_POST['control_estabilidad'])) $control_estabilidad = 1; else $control_estabilidad = 0;
$control_traccion      = "";if(isset($_POST['control_traccion'])) $control_traccion = 1; else $control_traccion = 0;
$frenos                = "";if(isset($_POST['frenos'])) $frenos = 1; else $frenos = 0;
$frenos_emergencia     = "";if(isset($_POST['frenos_emergencia'])) $frenos_emergencia = 1; else $frenos_emergencia = 0;
$faros                 = "";if(isset($_POST['faros'])) $faros = 1; else $faros = 0;
$cierre                = "";if(isset($_POST['cierre'])) $cierre = 1; else $cierre = 0;
$ganchos               = "";if(isset($_POST['ganchos'])) $ganchos = 1; else $ganchos = 0;
$trabas                = "";if(isset($_POST['trabas'])) $trabas = 1; else $trabas = 0;

$act_airbags               = "";if(isset($_POST['act_airbags'])) $act_airbags = 1; else $act_airbags = 0;
$act_cinturones_inerciales = "";if(isset($_POST['act_cinturones_inerciales'])) $act_cinturones_inerciales = 1; else $act_cinturones_inerciales = 0;
$act_control_estabilidad   = "";if(isset($_POST['act_control_estabilidad'])) $act_control_estabilidad = 1; else $act_control_estabilidad = 0;
$act_control_traccion      = "";if(isset($_POST['act_control_traccion'])) $act_control_traccion = 1; else $act_control_traccion = 0;
$act_frenos                = "";if(isset($_POST['act_frenos'])) $act_frenos = 1; else $act_frenos = 0;
$act_frenos_emergencia     = "";if(isset($_POST['act_frenos_emergencia'])) $act_frenos_emergencia = 1; else $act_frenos_emergencia = 0;
$act_faros                 = "";if(isset($_POST['act_faros'])) $act_faros = 1; else $act_faros = 0;
$act_cierre                = "";if(isset($_POST['act_cierre'])) $act_cierre = 1; else $act_cierre = 0;
$act_ganchos               = "";if(isset($_POST['act_ganchos'])) $act_ganchos = 1; else $act_ganchos = 0;
$act_trabas                = "";if(isset($_POST['act_trabas'])) $act_trabas = 1; else $act_trabas = 0;

if(isset($_POST['datos_fichas']))
	$obj_seguridad->Registrar($version_id, $airbags, $cinturones_inerciales, $control_estabilidad, $control_traccion, $frenos, $frenos_emergencia, $faros, $cierre, $ganchos, $trabas, $act_ficha_seguridad, $act_airbags, $act_cinturones_inerciales, $act_control_estabilidad, $act_control_traccion, $act_frenos, $act_frenos_emergencia, $act_faros, $act_cierre, $act_ganchos, $act_trabas);
else
	$obj_seguridad->Editar($version_id, $airbags, $cinturones_inerciales, $control_estabilidad, $control_traccion, $frenos, $frenos_emergencia, $faros, $cierre, $ganchos, $trabas, $act_ficha_seguridad, $act_airbags, $act_cinturones_inerciales, $act_control_estabilidad, $act_control_traccion, $act_frenos, $act_frenos_emergencia, $act_faros, $act_cierre, $act_ganchos, $act_trabas);

$i = 1;
while(isset($_POST['campo_mod_seguridad'.$i]))
{
	if($_POST['campo_mod_seguridad'.$i])
	{
		$id          = $_POST['id_extra_mod_seguridad'.$i];
		$dato  		 = $_POST['campo_mod_seguridad'.$i];
		$valor 		 = $_POST['valor_mod_seguridad'.$i];
		$valor_check = ""; if(isset($_POST['valor_check_mod_seguridad'.$i])) $valor_check = 1; else $valor_check = 0;

		$obj_extras->Editar($id, $dato, $valor, $valor_check);
	}
	$i++;
}

$i = 1;
while(isset($_POST['campo'.$i.'_seguridad']))
{
	if($_POST['campo'.$i.'_seguridad'])
	{
		$dato  		 = $_POST['campo'.$i.'_seguridad'];
		$valor 		 = $_POST['valor'.$i.'_seguridad'];
		$valor_check = ""; if(isset($_POST['valor_check'.$i.'_seguridad'])) $valor_check = 1; else $valor_check = 0;

		$obj_extras->Registrar($version_id, "_SEGURIDAD_", $dato, $valor, $valor_check);
	}
	$i++;
}

/************************************Comunicación y Entretemiento:***************************************/
$act_ficha_entretenimiento = ""; if(isset($_POST['act_ficha_entretenimiento'])) $act_ficha_entretenimiento = 1; else $act_ficha_entretenimiento = 0;

$reproductor_radio = "";if(isset($_POST['reproductor_radio'])) $reproductor_radio = 1; else $reproductor_radio = 0;
$reproductor_mp3   = "";if(isset($_POST['reproductor_mp3'])) $reproductor_mp3 = 1; else $reproductor_mp3 = 0;
$parlantes         = "";if(isset($_POST['parlantes'])) $parlantes = 1; else $parlantes = 0;
$conexion_auxiliar = "";if(isset($_POST['conexion_auxiliar'])) $conexion_auxiliar = 1; else $conexion_auxiliar = 0;

$act_reproductor_radio = "";if(isset($_POST['act_reproductor_radio'])) $act_reproductor_radio = 1; else $act_reproductor_radio = 0;
$act_reproductor_mp3   = "";if(isset($_POST['act_reproductor_mp3'])) $act_reproductor_mp3 = 1; else $act_reproductor_mp3 = 0;
$act_parlantes         = "";if(isset($_POST['act_parlantes'])) $act_parlantes = 1; else $act_parlantes = 0;
$act_conexion_auxiliar = "";if(isset($_POST['act_conexion_auxiliar'])) $act_conexion_auxiliar = 1; else $act_conexion_auxiliar = 0;

if(isset($_POST['datos_fichas']))
	$obj_entretenimiento->Registrar($version_id, $reproductor_radio, $reproductor_mp3, $parlantes, $conexion_auxiliar, $act_ficha_entretenimiento, $act_reproductor_radio, $act_reproductor_mp3, $act_parlantes, $act_conexion_auxiliar);
else
	$obj_entretenimiento->Editar($version_id, $reproductor_radio, $reproductor_mp3, $parlantes, $conexion_auxiliar, $act_ficha_entretenimiento, $act_reproductor_radio, $act_reproductor_mp3, $act_parlantes, $act_conexion_auxiliar);

$i = 1;
while(isset($_POST['campo_mod_entretenimiento'.$i]))
{
	if($_POST['campo_mod_entretenimiento'.$i])
	{
		$id          = $_POST['id_extra_mod_entretenimiento'.$i];
		$dato  		 = $_POST['campo_mod_entretenimiento'.$i];
		$valor 		 = $_POST['valor_mod_entretenimiento'.$i];
		$valor_check = ""; if(isset($_POST['valor_check_mod_entretenimiento'.$i])) $valor_check = 1; else $valor_check = 0;

		$obj_extras->Editar($id, $dato, $valor, $valor_check);
	}
	$i++;
}

$i = 1;
while(isset($_POST['campo'.$i.'_entretenimiento']))
{
	if($_POST['campo'.$i.'_entretenimiento'])
	{
		$dato  		 = $_POST['campo'.$i.'_entretenimiento'];
		$valor 		 = $_POST['valor'.$i.'_entretenimiento'];
		$valor_check = ""; if(isset($_POST['valor_check'.$i.'_entretenimiento'])) $valor_check = 1; else $valor_check = 0;

		$obj_extras->Registrar($version_id, "_ENTRETENIMIENTO_", $dato, $valor, $valor_check);
	}
	$i++;
}

/************************************Información Extra***************************************/
/*
$i = 1;
while(isset($_POST['campo_mod'.$i]))
{
	if($_POST['campo_mod'.$i])
	{
		$id          = $_POST['id_extra_mod'.$i];
		$dato  		 = $_POST['campo_mod'.$i];
		$valor 		 = $_POST['valor_mod'.$i];
		$valor_check = ""; if(isset($_POST['valor_check_mod'.$i])) $valor_check = 1; else $valor_check = 0;

		$obj_extras->Editar($id, $dato, $valor, $valor_check);
	}
	$i++;
}

$i = 1;
while(isset($_POST['campo'.$i]))
{
	if($_POST['campo'.$i])
	{
		$dato  		 = $_POST['campo'.$i];
		$valor 		 = $_POST['valor'.$i];
		$valor_check = ""; if(isset($_POST['valor_check'.$i])) $valor_check = 1; else $valor_check = 0;

		$obj_extras->Registrar($version_id, $dato, $valor, $valor_check);
	}
	$i++;
}
*/
?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-success">
						<strong>FICHA EDITADA CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
}
/********************************************************************************************************************************/
if(isset($_FILES['foto1']))
{
	$i = 1;

	while(isset($_FILES['foto'.$i]))
	{
		if (($_FILES['foto'.$i]["type"] == "image/jpeg")  || ($_FILES['foto'.$i]["type"] == "image/jpg") || ($_FILES['foto'.$i]["type"] == "image/JPG") || 
			 ($_FILES['foto'.$i]["type"] == "image/JPEG") || ($_FILES['foto'.$i]["type"] == "image/png") || ($_FILES['foto'.$i]["type"] == "image/PNG"))
		   {
			   if($_FILES['foto'.$i]['name'])
			   {
					 $_FILES["foto".$i]["name"] = str_replace("á", "a", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("é", "e", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("í", "i", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("ó", "o", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("ú", "u", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("ä", "a", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("ë", "e", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("ï", "i", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("ö", "o", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("ü", "u", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("Á", "A", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("É", "E", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("Í", "I", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("Ó", "O", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("Ú", "U", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("Ä", "A", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("Ë", "E", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("Ï", "I", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("Ö", "O", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("Ü", "U", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("¨", "", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("´", "", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace("`", "", $_FILES["foto".$i]["name"]);
					 $_FILES["foto".$i]["name"] = str_replace(" ", "", $_FILES["foto".$i]["name"]);

					 $g = 0;
					 while (file_exists("Archivos/Publicaciones/".$_FILES["foto".$i]["name"]) && $_FILES["foto".$i]["name"]) 
					 {
							 $extension = substr(strrchr($_FILES["foto".$i]["name"], "."),1);
							 $_FILES["foto".$i]["name"] = str_replace(".".$extension, "", $_FILES["foto".$i]["name"]);
							 $_FILES["foto".$i]["name"] = $_FILES["foto".$i]["name"].$g.".".$extension;
							 $g++;
					 }

					 if($_FILES["foto".$i]["name"])
					 {
						 if($obj_fotos->Registrar($_POST["publicacion_id"], $_FILES["foto".$i]["name"]))
							while(true) if(move_uploaded_file($_FILES["foto".$i]["tmp_name"], "Archivos/Publicaciones/" . $_FILES["foto".$i]["name"]))break;
					 }

			   }
		   }
		   $i++;
	}
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-success">
						<strong>FOTO(S) REGISTRADA(S) CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
}

$modifico = false;
		if(isset($_FILES['imagen1']['name']) || isset($_FILES['imagen2']['name']) || isset($_FILES['imagen3']['name']) || isset($_FILES['imagen4']['name']) || isset($_FILES['imagen5']['name']) || isset($_FILES['imagen6']['name']))
		if($_FILES['imagen1']['name'] || $_FILES['imagen2']['name'] || $_FILES['imagen3']['name'] || $_FILES['imagen4']['name'] || $_FILES['imagen5']['name'] || $_FILES['imagen6']['name'])
		{
			//echo "Hay Archivo";
		 if (($_FILES["imagen1"]["type"] == "image/jpeg")  || ($_FILES["imagen1"]["type"] == "image/jpg") || ($_FILES["imagen1"]["type"] == "image/JPG") || 
			 ($_FILES["imagen1"]["type"] == "image/JPEG") || ($_FILES["imagen1"]["type"] == "image/png") || ($_FILES["imagen1"]["type"] == "image/PNG") ||
			 ($_FILES["imagen2"]["type"] == "image/jpeg")  || ($_FILES["imagen2"]["type"] == "image/jpg") || ($_FILES["imagen2"]["type"] == "image/JPG") || 
			 ($_FILES["imagen2"]["type"] == "image/JPEG") || ($_FILES["imagen2"]["type"] == "image/png") || ($_FILES["imagen2"]["type"] == "image/PNG") ||
			 ($_FILES["imagen3"]["type"] == "image/jpeg")  || ($_FILES["imagen3"]["type"] == "image/jpg") || ($_FILES["imagen3"]["type"] == "image/JPG") || 
			 ($_FILES["imagen3"]["type"] == "image/JPEG") || ($_FILES["imagen3"]["type"] == "image/png") || ($_FILES["imagen3"]["type"] == "image/PNG") ||
			 ($_FILES["imagen4"]["type"] == "image/jpeg")  || ($_FILES["imagen4"]["type"] == "image/jpg") || ($_FILES["imagen4"]["type"] == "image/JPG") || 
			 ($_FILES["imagen4"]["type"] == "image/JPEG") || ($_FILES["imagen4"]["type"] == "image/png") || ($_FILES["imagen4"]["type"] == "image/PNG") ||
			 ($_FILES["imagen5"]["type"] == "image/jpeg")  || ($_FILES["imagen5"]["type"] == "image/jpg") || ($_FILES["imagen5"]["type"] == "image/JPG") || 
			 ($_FILES["imagen5"]["type"] == "image/JPEG") || ($_FILES["imagen5"]["type"] == "image/png") || ($_FILES["imagen5"]["type"] == "image/PNG") ||
			 ($_FILES["imagen6"]["type"] == "image/jpeg")  || ($_FILES["imagen6"]["type"] == "image/jpg") || ($_FILES["imagen6"]["type"] == "image/JPG") || 
			 ($_FILES["imagen6"]["type"] == "image/JPEG") || ($_FILES["imagen6"]["type"] == "image/png") || ($_FILES["imagen6"]["type"] == "image/PNG"))
			 {
				 //if($_POST["mod_galeria"]) $g = 1;

					 if($_FILES['imagen1']['name'] || $_FILES['imagen2']['name'] || $_FILES['imagen3']['name'] || $_FILES['imagen4']['name'] || $_FILES['imagen5']['name'] || $_FILES['imagen6']['name'])
					 {
						 for($i = 1; $i <=6; $i++)
						 {
							 $_FILES["imagen".$i]["name"] = str_replace("á", "a", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("é", "e", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("í", "i", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("ó", "o", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("ú", "u", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("ä", "a", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("ë", "e", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("ï", "i", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("ö", "o", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("ü", "u", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("Á", "A", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("É", "E", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("Í", "I", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("Ó", "O", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("Ú", "U", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("Ä", "A", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("Ë", "E", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("Ï", "I", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("Ö", "O", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("Ü", "U", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("¨", "", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("´", "", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace("`", "", $_FILES["imagen".$i]["name"]);
							 $_FILES["imagen".$i]["name"] = str_replace(" ", "", $_FILES["imagen".$i]["name"]);

							 $g = 0;
							 while (file_exists("Archivos/Publicaciones/".$_FILES["imagen".$i]["name"]) && $_FILES["imagen".$i]["name"]) 
							 {
									 $extension = substr(strrchr($_FILES["imagen".$i]["name"], "."),1);
									 $_FILES["imagen".$i]["name"] = str_replace(".".$extension, "", $_FILES["imagen".$i]["name"]);
									 $_FILES["imagen".$i]["name"] = $_FILES["imagen".$i]["name"].$g.".".$extension;
									 $g++;
							 }
	
						 }

						 $marcas_id     = $_POST["select_marcas"];
						 $cuerpos_id    = $_POST["cuerpos_select"];
						 $combustible   = $_POST["combustible"];
						 $potencia      = $_POST["potencia"];
						 $modelo        = $_POST["select_modelos"];
						 $slider        = $_FILES["slider"]["name"];
						 $version       = $_POST["version"];
						 $year          = $_POST["year"];
						 $puertas       = $_POST["puertas"];
						 $maletero      = $_POST["maletero"];
						 $co2           = $_POST["co2"];
						 $colorext      = $_POST["colorext"];
						 $colorint      = $_POST["colorint"];
						 $motor         = $_POST["motor"];
						 $transmision   = $_POST["transmision"];
						 $traccion      = $_POST["traccion"];
						 $velocidadmax  = $_POST["velocidadmax"];
						 $valvulas      = $_POST["valvulas"];
						 $precio        = $_POST["precio"];
						 $video         = $_POST["video"];
						 $descarga      = $_FILES["descarga"]["name"];

						 if(isset($_POST["porllegar"]))
							$porllegar     = 1;
						 else
							$porllegar     = 0;

						 if($obj_publicaciones->Registrar($marcas_id, $cuerpos_id, $modelo, $slider, $version, $year, $combustible, $potencia, $puertas, $maletero, $co2, $colorext, $colorint, $motor, $transmision, $traccion, $velocidadmax, $valvulas, $precio, $video, $descarga, $porllegar))
						 {
							 while(true) if(move_uploaded_file($_FILES["slider"]["tmp_name"], "Archivos/Slider/" . $_FILES["slider"]["name"]))break;
							 if($descarga != "") while(true) if(move_uploaded_file($_FILES["descarga"]["tmp_name"], "Archivos/Descargas/" . $_FILES["descarga"]["name"]))break;

							 $maxID = $obj_publicaciones->MaxID();

							 $descripcion   = "Desc_".$maxID.".html";

							 $texto = $_POST['descripcion'];
							 $texto = str_replace('\"', "'", $texto);
							 $fh = fopen("Archivos/PublicacionesDesc/".$descripcion,"w");
							 fwrite($fh,$texto);
							 fclose($fh);


							 for($i = 1; $i <= 6; $i++)
							 {
								 if($_FILES["imagen".$i]["name"])
								 {
									 if($obj_fotos->Registrar($maxID, $_FILES["imagen".$i]["name"]))
									 {
										while(move_uploaded_file($_FILES["imagen".$i]["tmp_name"], "Archivos/Publicaciones/" . $_FILES["imagen".$i]["name"]))
										{
											if(file_exists("Archivos/Publicaciones/".$_FILES["imagen".$i]["name"]) && $_FILES["imagen".$i]["name"])
											break;
										}
									 }
								 }
							 }

							?>
							  <div class="row">
									<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
										<div class="alert alert-success">
											<strong>PUBLICACIÓN REGISTRADA CON &Eacute;XITO.</strong>
										</div>
									</div>
							  </div>
							<?php
							echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
						 }
					 }
			 }
		}


 if(isset($_POST["eliminar_edit"]))
 {
	 $foto = $obj_fotos->ExtraerFoto($_POST["eliminar_edit"]);

	 if($obj_fotos->EliminarFoto($_POST["eliminar_edit"]))
	 {
			@unlink("Archivos/Publicaciones/".$foto);
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-danger">
						<strong>FOTO ELIMINADA CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
	 }
 }

 if(isset($_POST["publicacion_elm"]))
 {
	 $res = $obj_fotos->Extraer($_POST["publicacion_elm"]);

	 if($obj_publicaciones->Eliminar($_POST["publicacion_elm"]) && $obj_fotos->Eliminar($_POST["publicacion_elm"]))
	 {
		 while($row = mysql_fetch_assoc($res))
		 {
			 @unlink("Archivos/Publicaciones/".$row["IMAGEN"]);
		 }
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-danger">
						<strong>PUBLICACIÓN ELIMINADA CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
	 }
 }


 if(isset($_POST["publicacion_mod"]))
 {
/******************************************************************************************************************************/
$res = $obj_publicaciones->ExtraerID($_POST["publicacion_mod"]);
$row = mysql_fetch_assoc($res);
$slider = $row["SLIDER"];
$descarga = $row["DESCARGA"];

if($_FILES['descarga']['name'])
{
		 $slider = $_FILES["descarga"]["name"];
		 @unlink("Archivos/Descargas/".$row["DESCARGA"]);

		 while (file_exists("Archivos/Descargas/".$_FILES["descarga"]["name"]) && $_FILES["descarga"]["name"]) 
		 {
				 $extension = substr(strrchr($_FILES["descarga"]["name"], "."),1);
				 $_FILES["descarga"]["name"] = str_replace(".".$extension, "", $_FILES["descarga"]["name"]);
				 $_FILES["descarga"]["name"] = $_FILES["descarga"]["name"]."1.".$extension;
		 }
		 $descarga = $_FILES["descarga"]["name"];

		 while(true) if(move_uploaded_file($_FILES["descarga"]["tmp_name"], "Archivos/Descargas/" . $_FILES["descarga"]["name"]))break;
}
/******************************************************************************************************************************/
if($_FILES['slider']['name'])
{
	 if (($_FILES["slider"]["type"] == "image/jpeg")  || ($_FILES["slider"]["type"] == "image/jpg") || ($_FILES["slider"]["type"] == "image/JPG") || 
		 ($_FILES["slider"]["type"] == "image/JPEG") || ($_FILES["slider"]["type"] == "image/png") || ($_FILES["slider"]["type"] == "image/PNG"))
		 {
			 $slider = $_FILES["slider"]["name"];
			 @unlink("Archivos/Slider/".$row["SLIDER"]);
		 }

		 while (file_exists("Archivos/Slider/".$_FILES["slider"]["name"]) && $_FILES["slider"]["name"]) 
		 {
				 $extension = substr(strrchr($_FILES["slider"]["name"], "."),1);
				 $_FILES["slider"]["name"] = str_replace(".".$extension, "", $_FILES["slider"]["name"]);
				 $_FILES["slider"]["name"] = $_FILES["slider"]["name"]."1.".$extension;
		 }
		 $slider = $_FILES["slider"]["name"];

		 while(true) if(move_uploaded_file($_FILES["slider"]["tmp_name"], "Archivos/Slider/" . $_FILES["slider"]["name"]))break;
}
/******************************************************************************************************************************/
	 $cuerpos_id    = $_POST["cuerpos_select"];
	 $combustible   = $_POST["combustible"];
	 $potencia      = $_POST["potencia"];
	 $version       = $_POST["version"];
	 $year          = $_POST["year"];
	 $puertas       = $_POST["puertas"];
	 $maletero      = $_POST["maletero"];
	 $co2           = $_POST["co2"];
	 $colorext      = $_POST["colorext"];
	 $colorint      = $_POST["colorint"];
  	 $motor         = $_POST["motor"];
	 $transmision   = $_POST["transmision"];
	 $traccion      = $_POST["traccion"];
	 $velocidadmax  = $_POST["velocidadmax"];
	 $valvulas      = $_POST["valvulas"];
	 $precio        = $_POST["precio"];
	 $video         = $_POST["video"];
 	 if(isset($_POST["porllegar"]))
	 	$porllegar     = 1;
	 else
	 	$porllegar     = 0;

		 if($obj_publicaciones->Modificar($_POST["publicacion_mod"], $cuerpos_id, $slider, $version, $year, $combustible, $potencia, $puertas, $maletero, $co2, $colorext, $colorint, $motor, $transmision, $traccion, $velocidadmax, $valvulas, $precio, $video, $descarga, $porllegar))
		 {
			 $descripcion   = "Desc_".$_POST["publicacion_mod"].".html";

			 $texto = $_POST['descripcion'];
			 $texto = str_replace('\"', "'", $texto);
			 $fh = fopen("Archivos/PublicacionesDesc/".$descripcion,"w");
			 fwrite($fh,$texto);
			 fclose($fh);

			?>
			  <div class="row">
					<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
						<div class="alert alert-success">
							<strong>PUBLICACIÓN MODIFICADA CON &Eacute;XITO.</strong>
						</div>
					</div>
			  </div>
			<?php
			$modifico = true;
			echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
		 }
 }


/********************************************************************************************************************************************************************************/
if(isset($_POST["select_version"]) && isset($_POST["band_ficha"]))
{
?>
<form action="" method="post" enctype="multipart/form-data" name="form_publicaciones" id="form_publicaciones">
<?php
$res_motores = $obj_motores->Extraer_ID($_POST["select_version"]);

if(mysql_num_rows($res_motores))
{
$res_confort         = $obj_confort->Extraer_ID($_POST["select_version"]);
$res_dimensiones     = $obj_dimensiones->Extraer_ID($_POST["select_version"]);
$res_entretenimiento = $obj_entretenimiento->Extraer_ID($_POST["select_version"]);
$res_exterior        = $obj_exterior->Extraer_ID($_POST["select_version"]);
$res_seguridad       = $obj_seguridad->Extraer_ID($_POST["select_version"]);
$res_transmisiones   = $obj_transmisiones->Extraer_ID($_POST["select_version"]);
//$res_extras          = $obj_extras->Extraer_ID($_POST["select_version"]);

$row_motores  		 = mysql_fetch_assoc($res_motores);
$row_confort         = mysql_fetch_assoc($res_confort);
$row_dimensiones     = mysql_fetch_assoc($res_dimensiones);
$row_entretenimiento = mysql_fetch_assoc($res_entretenimiento);
$row_exterior 		 = mysql_fetch_assoc($res_exterior);
$row_seguridad 		 = mysql_fetch_assoc($res_seguridad);
$row_transmisiones 	 = mysql_fetch_assoc($res_transmisiones);

?>
<input name="datos_fichas_mod" type="hidden" id="datos_fichas_mod" value="<?php echo $_POST["select_version"]; ?>" />
<?php
}
else
{
?>
<input name="datos_fichas" type="hidden" id="datos_fichas" value="<?php echo $_POST["select_version"]; ?>" />
<?php
}
?>
<div class="row">
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
<table width="100%" class="table table-striped table-bordered">
  <tr>
    <td colspan="2" align="center"><input name="act_ficha_motor" type="checkbox" <?php if(isset($row_motores)) { if($row_motores["FICHA_ACTIVA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_motores["FICHA_ACTIVA"]; else echo "0"; ?>" /> <strong> Motor:</strong>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Motor</strong>&nbsp;</td>
    <td><input class="input input-lg" name="motor" type="text" id="motor" value="<?php if(isset($row_motores)) echo $row_motores["MOTOR"]; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Combustible</strong>&nbsp;</td>
    <td><input class="input input-lg" name="combustible" type="text" id="combustible" value="<?php if(isset($row_motores)) echo $row_motores["COMBUSTIBLE"]; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Posición</strong>&nbsp;</td>
    <td><input class="input input-lg" name="posicion" type="text" id="posicion" value="<?php if(isset($row_motores)) echo $row_motores["POSICION"]; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Cilindrada</strong>&nbsp;</td>
    <td><input class="input input-lg" name="cilindrada" type="text" id="cilindrada" value="<?php if(isset($row_motores)) echo $row_motores["CILINDRADA"]; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Cilindros</strong>&nbsp;</td>
    <td><input class="input input-lg" name="valvulas" type="text" id="valvulas" value="<?php if(isset($row_motores)) echo $row_motores["VALVULAS"]; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Potencia</strong>&nbsp;</td>
    <td><input class="input input-lg" name="potencia" type="text" id="potencia" value="<?php if(isset($row_motores)) echo $row_motores["POTENCIA"]; ?>" />&nbsp;</td>
  </tr>

<?php
$res_extras = $obj_extras->Extraer_ID($_POST["select_version"], "MOTOR");

if(mysql_num_rows($res_extras))
{
$i = 1;
	while($row_extras = mysql_fetch_assoc($res_extras))
	{
		if($row_extras["DATO"])
		{
?>
            <tr>
                <td><input name="campo_mod_motor<?php echo $i; ?>" type="text" class="input input-lg" id="campo_mod_motor<?php echo $i; ?>" value="<?php echo $row_extras["DATO"]; ?>" /></td>
                <td><input class="input input-lg" name="valor_mod_motor<?php echo $i; ?>" type="text" id="valor_mod_motor<?php echo $i; ?>" value="<?php echo $row_extras["VALOR"]; ?>" /></td>
                <td>
                    <input name="valor_check_mod_motor<?php echo $i; ?>" type="checkbox" value="<?php echo $row_extras["BINARIO"]; ?>" <?php if($row_extras["BINARIO"]) echo "checked"; ?> id="valor_check_mod_motor<?php echo $i; ?>" />
                    <input name="id_extra_mod_motor<?php echo $i; ?>" type="hidden" id="id_extra_mod_motor<?php echo $i; ?>" value="<?php echo $row_extras["ID"]; ?>" />
                </td>
            </tr>
<?php
			$i++;
		}
	}
}
?>

</table>
<div id="inf_motor"></div>

</div>
<div class="col-lg-3 col-md-3"></div>

<div class="row">
<div class="col-lg-5 col-md-5"></div>
<div class="col-lg-4 col-md-4"><input class="btn btn-success" name="boton" type="button" id="boton" value="Agregar Extra Motor (+)" onclick="Agregar_Fila_Motor('_motor')" /></div>
<div class="col-lg-3 col-md-3"></div>
</div>

<br />
<br />


</div>
<div class="row">
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
<table width="100%" class="table table-striped table-bordered">
  <tr>
    <td colspan="2" align="center"><input name="act_ficha_dimensiones" type="checkbox" <?php if(isset($row_motores)) { if($row_dimensiones["FICHA_ACTIVA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_dimensiones["FICHA_ACTIVA"]; else echo "0"; ?>" /> <strong>Dimensiones y Capacidades:</strong>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Puertas</strong>&nbsp;</td>
    <td><input class="input input-lg" name="puertas" type="text" id="puertas" value="<?php if(isset($row_motores)) echo $row_dimensiones["PUERTAS"]; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Plazas</strong>&nbsp;</td>
    <td><input class="input input-lg" name="plazas" type="text" id="plazas" value="<?php if(isset($row_motores)) echo $row_dimensiones["PLAZAS"]; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Filas de asientos</strong>&nbsp;</td>
    <td><input class="input input-lg" name="filas" type="text" id="filas" value="<?php if(isset($row_motores)) echo $row_dimensiones["FILAS"]; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Largo/Ancho/Alto/Distancia entre ejes</strong>&nbsp;</td>
    <td><input class="input input-lg" name="distancia" type="text" id="distancia" value="<?php if(isset($row_motores)) echo $row_dimensiones["DISTANCIA"]; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Peso</strong>&nbsp;</td>
    <td><input class="input input-lg" name="peso" type="text" id="peso" value="<?php if(isset($row_motores)) echo $row_dimensiones["PESO"]; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Tanque de combustible</strong>&nbsp;</td>
    <td><input class="input input-lg" name="tanque" type="text" id="tanque" value="<?php if(isset($row_motores)) echo $row_dimensiones["TANQUE"]; ?>" />&nbsp;</td>
  </tr>
<?php
$res_extras = $obj_extras->Extraer_ID($_POST["select_version"], "DIMENSIONES");

if(mysql_num_rows($res_extras))
{
$i = 1;
	while($row_extras = mysql_fetch_assoc($res_extras))
	{
		if($row_extras["DATO"])
		{
?>
            <tr>
                <td><input name="campo_mod_dimensiones<?php echo $i; ?>" type="text" class="input input-lg" id="campo_mod_dimensiones<?php echo $i; ?>" value="<?php echo $row_extras["DATO"]; ?>" /></td>
                <td><input class="input input-lg" name="valor_mod_dimensiones<?php echo $i; ?>" type="text" id="valor_mod_dimensiones<?php echo $i; ?>" value="<?php echo $row_extras["VALOR"]; ?>" /></td>
                <td>
                    <input name="valor_check_mod_dimensiones<?php echo $i; ?>" type="checkbox" value="<?php echo $row_extras["BINARIO"]; ?>" <?php if($row_extras["BINARIO"]) echo "checked"; ?> id="valor_check_mod_dimensiones<?php echo $i; ?>" />
                    <input name="id_extra_mod_dimensiones<?php echo $i; ?>" type="hidden" id="id_extra_mod_dimensiones<?php echo $i; ?>" value="<?php echo $row_extras["ID"]; ?>" />
                </td>
            </tr>
<?php
			$i++;
		}
	}
}
?>
</table>
<div id="inf_dimensiones"></div>

</div>
<div class="col-lg-3 col-md-3"></div>

<div class="row">
<div class="col-lg-5 col-md-5"></div>
<div class="col-lg-4 col-md-4"><input class="btn btn-success" name="boton" type="button" id="boton" value="Agregar Extra Dimensiones (+)" onclick="Agregar_Fila_Dimensiones('_dimensiones')" /></div>
<div class="col-lg-3 col-md-3"></div>
</div>

<br />
<br />


</div>

<div class="row">

<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
<table width="100%" class="table table-striped table-bordered">
  <tr>
    <td colspan="2" align="center"><input name="act_ficha_transmision" type="checkbox" <?php if(isset($row_motores)) { if($row_transmisiones["FICHA_ACTIVA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_transmisiones["FICHA_ACTIVA"]; else echo "0"; ?>" /> <strong>Transmisión y Chasis:</strong>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Transmisión</strong>&nbsp;</td>
    <td><input class="input input-lg" name="transmision" type="text" id="transmision" value="<?php if(isset($row_motores)) echo $row_transmisiones["TRANSMISION"]; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Marchas</strong>&nbsp;</td>
    <td><input class="input input-lg" name="marchas" type="text" id="marchas" value="<?php if(isset($row_motores)) echo $row_transmisiones["MARCHAS"]; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Tracción</strong>&nbsp;</td>
    <td><input class="input input-lg" name="traccion" type="text" id="traccion" value="<?php if(isset($row_motores)) echo $row_transmisiones["TRACCION"]; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Frenos delanteros</strong>&nbsp;</td>
    <td><input class="input input-lg" name="fr_delanteros" type="text" id="fr_delanteros" value="<?php if(isset($row_motores)) echo $row_transmisiones["FR_DELANTEROS"]; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Frenos traseros	</strong>&nbsp;</td>
    <td><input class="input input-lg" name="fr_traseros" type="text" id="fr_traseros" value="<?php if(isset($row_motores)) echo $row_transmisiones["FR_TRASEROS"]; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Suspensión delantera</strong>&nbsp;</td>
    <td><input class="input input-lg" name="suspension" type="text" id="suspension" value="<?php if(isset($row_motores)) echo $row_transmisiones["SUSPENSION"]; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Neumáticos</strong>&nbsp;</td>
    <td><input class="input input-lg" name="neumaticos" type="text" id="neumaticos" value="<?php if(isset($row_motores)) echo $row_transmisiones["NEUMATICOS"]; ?>" />&nbsp;</td>
  </tr>
<?php
$res_extras = $obj_extras->Extraer_ID($_POST["select_version"], "TRANSMISIONES");

if(mysql_num_rows($res_extras))
{
$i = 1;
	while($row_extras = mysql_fetch_assoc($res_extras))
	{
		if($row_extras["DATO"])
		{
?>
            <tr>
                <td><input name="campo_mod_transmision<?php echo $i; ?>" type="text" class="input input-lg" id="campo_mod_transmision<?php echo $i; ?>" value="<?php echo $row_extras["DATO"]; ?>" /></td>
                <td><input class="input input-lg" name="valor_mod_transmision<?php echo $i; ?>" type="text" id="valor_mod_transmision<?php echo $i; ?>" value="<?php echo $row_extras["VALOR"]; ?>" /></td>
                <td>
                    <input name="valor_check_mod_transmision<?php echo $i; ?>" type="checkbox" value="<?php echo $row_extras["BINARIO"]; ?>" <?php if($row_extras["BINARIO"]) echo "checked"; ?> id="valor_check_mod_transmision<?php echo $i; ?>" />
                    <input name="id_extra_mod_transmision<?php echo $i; ?>" type="hidden" id="id_extra_mod_transmision<?php echo $i; ?>" value="<?php echo $row_extras["ID"]; ?>" />
                </td>
            </tr>
<?php
			$i++;
		}
	}
}
?>
</table>
<div id="inf_transmision"></div>

</div>
<div class="col-lg-3 col-md-3"></div>

<div class="row">
<div class="col-lg-5 col-md-5"></div>
<div class="col-lg-4 col-md-4"><input class="btn btn-success" name="boton" type="button" id="boton" value="Agregar Extra Transmisión (+)" onclick="Agregar_Fila_Transmision('_transmision')" /></div>
<div class="col-lg-3 col-md-3"></div>
</div>

<br />
<br />

</div>

<div class="row">

<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
<table width="100%" class="table table-striped table-bordered">
  <tr>
    <td colspan="2" align="center"><input name="act_ficha_confort" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["FICHA_ACTIVA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["FICHA_ACTIVA"]; else echo "0"; ?>" /> <strong>Confort y Convivencia:</strong>&nbsp;</td>
    <td>&nbsp;<strong>On/Off</strong></td>
  </tr>
  <tr>
    <td><strong>Alzacristales eléctricos en todas las ventanas	</strong>&nbsp;</td>
    <td><input name="alzacristales" type="checkbox" id="alzacristales" <?php if(isset($row_motores)) { if($row_confort["ALZACRISTALES"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ALZACRISTALES"]; else echo "0"; ?>" />&nbsp;</td>
    <td align="center"><input name="act_alzacristales" type="checkbox" id="act_alzacristales" <?php if(isset($row_motores)) { if($row_confort["ACT_ALZACRISTALES"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_ALZACRISTALES"]; else echo "0"; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Climatizador automático bi-zona	</strong>&nbsp;</td>
    <td><input name="climatizador_bizona" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["CLIMATIZADOR_BIZONA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["CLIMATIZADOR_BIZONA"]; else echo "0"; ?>" id="climatizador_bizona" />&nbsp;</td>
    <td align="center"><input name="act_climatizador_bizona" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_CLIMATIZADOR_BIZONA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_CLIMATIZADOR_BIZONA"]; else echo "0"; ?>" id="act_climatizador_bizona" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Climatizador automático	</strong>&nbsp;</td>
    <td><input name="climatizador" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["CLIMATIZADOR"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["CLIMATIZADOR"]; else echo "0"; ?>" id="climatizador" />&nbsp;</td>
    <td align="center"><input name="act_climatizador" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_CLIMATIZADOR"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_CLIMATIZADOR"]; else echo "0"; ?>" id="act_climatizador" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Dirección asistida	</strong>&nbsp;</td>
    <td><input name="direccion" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["DIRECCION"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["DIRECCION"]; else echo "0"; ?>" id="direccion" />&nbsp;</td>
    <td align="center"><input name="act_direccion" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_DIRECCION"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_DIRECCION"]; else echo "0"; ?>" id="act_direccion" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Volante con ajuste vertical y profundidad	</strong>&nbsp;</td>
    <td><input name="volante_ajuste" type="checkbox" id="volante_ajuste" <?php if(isset($row_motores)) { if($row_confort["VOLANTE_AJUSTE"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["VOLANTE_AJUSTE"]; else echo "0"; ?>" />&nbsp;</td>
    <td align="center"><input name="act_volante_ajuste" type="checkbox" id="act_volante_ajuste" <?php if(isset($row_motores)) { if($row_confort["ACT_VOLANTE_AJUSTE"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_VOLANTE_AJUSTE"]; else echo "0"; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Control de velocidad crucero	</strong>&nbsp;</td>
    <td><input name="control_velocidad" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["CONTROL_VELOCIDAD"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["CONTROL_VELOCIDAD"]; else echo "0"; ?>" id="control_velocidad" />&nbsp;</td>
    <td align="center"><input name="act_control_velocidad" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_CONTROL_VELOCIDAD"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_CONTROL_VELOCIDAD"]; else echo "0"; ?>" id="act_control_velocidad" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Cierre centralizado de puertas por comando a distancia	</strong>&nbsp;</td>
    <td><input name="cierre" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["CIERRE"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["CIERRE"]; else echo "0"; ?>" id="cierre" />&nbsp;</td>
    <td align="center"><input name="act_cierre" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_CIERRE"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_CIERRE"]; else echo "0"; ?>" id="act_cierre" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Butaca del conductor regulable en altura manualmente	</strong>&nbsp;</td>
    <td><input name="butaca" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["BUTACA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["BUTACA"]; else echo "0"; ?>" id="butaca" />&nbsp;</td>
    <td align="center"><input name="act_butaca" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_BUTACA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_BUTACA"]; else echo "0"; ?>" id="act_butaca" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Mandos de sistema de audio desde el volante	</strong>&nbsp;</td>
    <td><input name="mandos" type="checkbox" id="mandos" <?php if(isset($row_motores)) { if($row_confort["MANDOS"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["MANDOS"]; else echo "0"; ?>" />&nbsp;</td>
    <td align="center"><input name="act_mandos" type="checkbox" id="act_mandos" <?php if(isset($row_motores)) { if($row_confort["ACT_MANDOS"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_MANDOS"]; else echo "0"; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Asientos traseros reclinables	</strong>&nbsp;</td>
    <td><input name="asientos_reclinables" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ASIENTOS_RECLINABLES"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ASIENTOS_RECLINABLES"]; else echo "0"; ?>" id="asientos_reclinables" />&nbsp;</td>
    <td align="center"><input name="act_asientos_reclinables" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_ASIENTOS_RECLINABLES"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_ASIENTOS_RECLINABLES"]; else echo "0"; ?>" id="act_asientos_reclinables" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Espejos exteriores rebatibles eléctricamente	</strong>&nbsp;</td>
    <td><input name="espejos_exteriores" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ESPEJOS_EXTERIORES"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ESPEJOS_EXTERIORES"]; else echo "0"; ?>" id="espejos_exteriores" />&nbsp;</td>
    <td align="center"><input name="act_espejos_exteriores" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_ESPEJOS_EXTERIORES"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_ESPEJOS_EXTERIORES"]; else echo "0"; ?>" id="act_espejos_exteriores" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Aire Acondicionado	</strong>&nbsp;</td>
    <td><input name="aire_acondicionado" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["AIRE_ACONDICIONADO"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["AIRE_ACONDICIONADO"]; else echo "0"; ?>" id="aire_acondicionado" />&nbsp;</td>
    <td align="center"><input name="act_aire_acondicionado" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_AIRE_ACONDICIONADO"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_AIRE_ACONDICIONADO"]; else echo "0"; ?>" id="act_aire_acondicionado" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Regulación interna de faros	</strong>&nbsp;</td>
    <td><input name="regulacion" type="checkbox" id="regulacion" <?php if(isset($row_motores)) { if($row_confort["REGULACION"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["REGULACION"]; else echo "0"; ?>" />&nbsp;</td>
    <td align="center"><input name="act_regulacion" type="checkbox" id="act_regulacion" <?php if(isset($row_motores)) { if($row_confort["ACT_REGULACION"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_REGULACION"]; else echo "0"; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Lava luneta	</strong>&nbsp;</td>
    <td><input name="lava" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["LAVA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["LAVA"]; else echo "0"; ?>" id="lava" />&nbsp;</td>
    <td align="center"><input name="act_lava" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_LAVA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_LAVA"]; else echo "0"; ?>" id="act_lava" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Inmovilizador de motor	</strong>&nbsp;</td>
    <td><input name="inmovilizador" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["INMOVILIZADOR"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["INMOVILIZADOR"]; else echo "0"; ?>" id="inmovilizador" />&nbsp;</td>
    <td align="center"><input name="act_inmovilizador" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_INMOVILIZADOR"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_INMOVILIZADOR"]; else echo "0"; ?>" id="act_inmovilizador" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Espejos exteriores eléctricos	</strong>&nbsp;</td>
    <td><input name="espejos_electricos" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ESPEJOS_ELECTRICOS"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ESPEJOS_ELECTRICOS"]; else echo "0"; ?>" id="espejos_electricos" />&nbsp;</td>
    <td align="center"><input name="act_espejos_electricos" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_ESPEJOS_ELECTRICOS"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_ESPEJOS_ELECTRICOS"]; else echo "0"; ?>" id="act_espejos_electricos" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Techo corredizo delantero	</strong>&nbsp;</td>
    <td><input name="techo" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["TECHO_CORREDIZO"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["TECHO_CORREDIZO"]; else echo "0"; ?>" id="techo" />&nbsp;</td>
    <td align="center"><input name="act_techo" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_TECHO_CORREDIZO"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_TECHO_CORREDIZO"]; else echo "0"; ?>" id="techo" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Apoyacabezas con ajustes eléctricos	</strong>&nbsp;</td>
    <td><input name="apoyacabezas" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["APOYACABEZAS"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["APOYACABEZAS"]; else echo "0"; ?>" id="apoyacabezas" />&nbsp;</td>
    <td align="center"><input name="act_apoyacabezas" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_APOYACABEZAS"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_APOYACABEZAS"]; else echo "0"; ?>" id="act_apoyacabezas" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Asiento conductor con ajuste lumbar	</strong>&nbsp;</td>
    <td><input name="asiento_conductor" type="checkbox" id="asiento_conductor" <?php if(isset($row_motores)) { if($row_confort["ASIENTO_CONDUCTOR"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ASIENTO_CONDUCTOR"]; else echo "0"; ?>" />&nbsp;</td>
    <td align="center"><input name="act_asiento_conductor" type="checkbox" id="act_asiento_conductor" <?php if(isset($row_motores)) { if($row_confort["ACT_ASIENTO_CONDUCTOR"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_ASIENTO_CONDUCTOR"]; else echo "0"; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Volante multifunción</strong>&nbsp;</td>
    <td><input name="volante_multifuncion" type="checkbox" id="volante_multifuncion" <?php if(isset($row_motores)) { if($row_confort["VOLANTE_MULTIFUNCION"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["VOLANTE_MULTIFUNCION"]; else echo "0"; ?>" />&nbsp;</td>
    <td align="center"><input name="act_volante_multifuncion" type="checkbox" id="act_volante_multifuncion" <?php if(isset($row_motores)) { if($row_confort["ACT_VOLANTE_MULTIFUNCION"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_VOLANTE_MULTIFUNCION"]; else echo "0"; ?>" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Computadora de abordo	</strong>&nbsp;</td>
    <td><input name="computadora" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["COMPUTADORA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["COMPUTADORA"]; else echo "0"; ?>" id="computadora" />&nbsp;</td>
    <td align="center"><input name="act_computadora" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_COMPUTADORA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_COMPUTADORA"]; else echo "0"; ?>" id="act_computadora" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Asientos traseros rebatibles 60/40	</strong>&nbsp;</td>
    <td><input name="asientos_rebatibles" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ASIENTOS_REBATIBLES"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ASIENTOS_REBATIBLES"]; else echo "0"; ?>" id="asientos_rebatibles" />&nbsp;</td>
    <td align="center"><input name="act_asientos_rebatibles" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_ASIENTOS_REBATIBLES"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_ASIENTOS_REBATIBLES"]; else echo "0"; ?>" id="act_asientos_rebatibles" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Toma corriente de 12v	</strong>&nbsp;</td>
    <td><input name="tomacorriente" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["TOMACORRIENTE"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["TOMACORRIENTE"]; else echo "0"; ?>" id="tomacorriente" />&nbsp;</td>
    <td align="center"><input name="act_tomacorriente" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_TOMACORRIENTE"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_TOMACORRIENTE"]; else echo "0"; ?>" id="act_tomacorriente" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Volante recubierto en cuero	</strong>&nbsp;</td>
    <td><input name="volante_cuero" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["VOLANTECUERO"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["VOLANTECUERO"]; else echo "0"; ?>" id="volante_cuero" />&nbsp;</td>
    <td align="center"><input name="act_volante_cuero" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_VOLANTECUERO"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_VOLANTECUERO"]; else echo "0"; ?>" id="act_volante_cuero" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Tapizado de cuero y tela	</strong>&nbsp;</td>
    <td><input name="tapizado_cuero" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["TAPIZADOCUERO"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["TAPIZADOCUERO"]; else echo "0"; ?>" id="tapizado_cuero" />&nbsp;</td>
    <td align="center"><input name="act_tapizado_cuero" type="checkbox" <?php if(isset($row_motores)) { if($row_confort["ACT_TAPIZADOCUERO"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_confort["ACT_TAPIZADOCUERO"]; else echo "0"; ?>" id="act_tapizado_cuero" />&nbsp;</td>
  </tr>
<?php
$res_extras = $obj_extras->Extraer_ID($_POST["select_version"], "CONFORT");

if(mysql_num_rows($res_extras))
{
$i = 1;
	while($row_extras = mysql_fetch_assoc($res_extras))
	{
		if($row_extras["DATO"])
		{
?>
            <tr>
                <td><input name="campo_mod_confort<?php echo $i; ?>" type="text" class="input input-lg" id="campo_mod_confort<?php echo $i; ?>" value="<?php echo $row_extras["DATO"]; ?>" /></td>
                <td><input class="input input-lg" name="valor_mod_confort<?php echo $i; ?>" type="text" id="valor_mod_confort<?php echo $i; ?>" value="<?php echo $row_extras["VALOR"]; ?>" /></td>
                <td>
                    <input name="valor_check_mod_confort<?php echo $i; ?>" type="checkbox" value="<?php echo $row_extras["BINARIO"]; ?>" <?php if($row_extras["BINARIO"]) echo "checked"; ?> id="valor_check_mod_confort<?php echo $i; ?>" />
                    <input name="id_extra_mod_confort<?php echo $i; ?>" type="hidden" id="id_extra_mod_confort<?php echo $i; ?>" value="<?php echo $row_extras["ID"]; ?>" />
                </td>
            </tr>
<?php
			$i++;
		}
	}
}
?>
</table>
<div id="inf_confort"></div>

</div>
<div class="col-lg-3 col-md-3"></div>

<div class="row">
<div class="col-lg-5 col-md-5"></div>
<div class="col-lg-4 col-md-4"><input class="btn btn-success" name="boton" type="button" id="boton" value="Agregar Extra Confort (+)" onclick="Agregar_Fila_Confort('_confort')" /></div>
<div class="col-lg-3 col-md-3"></div>
</div>

<br />
<br />

</div>

<div class="row">

<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
<table width="100%" class="table table-striped table-bordered">
  <tr>
    <td colspan="2" align="center"><input name="act_ficha_exterior" type="checkbox" <?php if(isset($row_motores)) { if($row_exterior["FICHA_ACTIVA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_exterior["FICHA_ACTIVA"]; else echo "0"; ?>" /> <strong>Exterior:</strong>&nbsp;</td>
    <td>&nbsp;<strong>On/Off</strong></td>
  </tr>
  <tr>
    <td><strong>Llantas de aleación liviana	</strong>&nbsp;</td>
    <td><input name="llantas_aleacion" type="checkbox" <?php if(isset($row_motores)) { if($row_exterior["LLANTAS_ALEACION"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_exterior["LLANTAS_ALEACION"]; else echo "0"; ?>" id="llantas_aleacion" />&nbsp;</td>
    <td align="center"><input name="act_llantas_aleacion" type="checkbox" <?php if(isset($row_motores)) { if($row_exterior["ACT_LLANTAS_ALEACION"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_exterior["ACT_LLANTAS_ALEACION"]; else echo "0"; ?>" id="act_llantas_aleacion" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Espejos exteriores calefaccionables	</strong>&nbsp;</td>
    <td><input name="espejosexteriores" type="checkbox" <?php if(isset($row_motores)) { if($row_exterior["ESPEJOS_EXTERIORES"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_exterior["ESPEJOS_EXTERIORES"]; else echo "0"; ?>" id="espejosexteriores" />&nbsp;</td>
    <td align="center"><input name="act_espejosexteriores" type="checkbox" <?php if(isset($row_motores)) { if($row_exterior["ACT_ESPEJOS_EXTERIORES"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_exterior["ACT_ESPEJOS_EXTERIORES"]; else echo "0"; ?>" id="act_espejosexteriores" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Espejos color carrocería	</strong>&nbsp;</td>
    <td><input name="espejos_carroceria" type="checkbox" <?php if(isset($row_motores)) { if($row_exterior["ESPEJOS_CARROCERIA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_exterior["ESPEJOS_CARROCERIA"]; else echo "0"; ?>" id="espejos_carroceria" />&nbsp;</td>
    <td align="center"><input name="act_espejos_carroceria" type="checkbox" <?php if(isset($row_motores)) { if($row_exterior["ACT_ESPEJOS_CARROCERIA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_exterior["ACT_ESPEJOS_CARROCERIA"]; else echo "0"; ?>" id="act_espejos_carroceria" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Spoiler</strong>&nbsp;</td>
    <td><input name="spoiler" type="checkbox" <?php if(isset($row_motores)) { if($row_exterior["SPOILER"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_exterior["SPOILER"]; else echo "0"; ?>" id="spoiler" />&nbsp;</td>
    <td align="center"><input name="act_spoiler" type="checkbox" <?php if(isset($row_motores)) { if($row_exterior["ACT_SPOILER"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_exterior["ACT_SPOILER"]; else echo "0"; ?>" id="act_spoiler" />&nbsp;</td>
  </tr>
<?php
$res_extras = $obj_extras->Extraer_ID($_POST["select_version"], "EXTERIOR");

if(mysql_num_rows($res_extras))
{
$i = 1;
	while($row_extras = mysql_fetch_assoc($res_extras))
	{
		if($row_extras["DATO"])
		{
?>
            <tr>
                <td><input name="campo_mod_exterior<?php echo $i; ?>" type="text" class="input input-lg" id="campo_mod_exterior<?php echo $i; ?>" value="<?php echo $row_extras["DATO"]; ?>" /></td>
                <td><input class="input input-lg" name="valor_mod_exterior<?php echo $i; ?>" type="text" id="valor_mod_exterior<?php echo $i; ?>" value="<?php echo $row_extras["VALOR"]; ?>" /></td>
                <td>
                    <input name="valor_check_mod_exterior<?php echo $i; ?>" type="checkbox" value="<?php echo $row_extras["BINARIO"]; ?>" <?php if($row_extras["BINARIO"]) echo "checked"; ?> id="valor_check_mod_exterior<?php echo $i; ?>" />
                    <input name="id_extra_mod_exterior<?php echo $i; ?>" type="hidden" id="id_extra_mod_exterior<?php echo $i; ?>" value="<?php echo $row_extras["ID"]; ?>" />
                </td>
            </tr>
<?php
			$i++;
		}
	}
}
?>
</table>
<div id="inf_exterior"></div>

</div>
<div class="col-lg-3 col-md-3"></div>

<div class="row">
<div class="col-lg-5 col-md-5"></div>
<div class="col-lg-4 col-md-4"><input class="btn btn-success" name="boton" type="button" id="boton" value="Agregar Extra Exterior (+)" onclick="Agregar_Fila_Exterior('_exterior')" /></div>
<div class="col-lg-3 col-md-3"></div>
</div>

<br />
<br />

</div>

<div class="row">

<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
<table width="100%" class="table table-striped table-bordered">
  <tr>
    <td colspan="2" align="center"><input name="act_ficha_seguridad" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["FICHA_ACTIVA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["FICHA_ACTIVA"]; else echo "0"; ?>" /> <strong>Seguridad:</strong>&nbsp;</td>
    <td>&nbsp;<strong>On/Off</strong></td>
  </tr>
  <tr>
    <td><strong>Airbags (2) para conductor y acompañante	</strong>&nbsp;</td>
    <td><input name="airbags" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["AIRBAGS"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["AIRBAGS"]; else echo "0"; ?>" id="airbags" />&nbsp;</td>
    <td align="center"><input name="act_airbags" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["ACT_AIRBAGS"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["ACT_AIRBAGS"]; else echo "0"; ?>" id="act_airbags" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Cinturones inerciales delanteros	</strong>&nbsp;</td>
    <td><input name="cinturones_inerciales" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["CINTURONES_INERCIALES"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["CINTURONES_INERCIALES"]; else echo "0"; ?>" id="cinturones_inerciales" />&nbsp;</td>
    <td align="center"><input name="act_cinturones_inerciales" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["ACT_CINTURONES_INERCIALES"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["ACT_CINTURONES_INERCIALES"]; else echo "0"; ?>" id="act_cinturones_inerciales" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Control de estabilidad (ESP)	</strong>&nbsp;</td>
    <td><input name="control_estabilidad" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["CONTROL_ESTABILIDAD"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["CONTROL_ESTABILIDAD"]; else echo "0"; ?>" id="control_estabilidad" />&nbsp;</td>
    <td align="center"><input name="act_control_estabilidad" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["ACT_CONTROL_ESTABILIDAD"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["ACT_CONTROL_ESTABILIDAD"]; else echo "0"; ?>" id="act_control_estabilidad" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Control de tracción (TCS)	</strong>&nbsp;</td>
    <td><input name="control_traccion" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["CONTROL_TRACCION"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["CONTROL_TRACCION"]; else echo "0"; ?>" id="control_traccion" />&nbsp;</td>
    <td align="center"><input name="act_control_traccion" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["ACT_CONTROL_TRACCION"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["ACT_CONTROL_TRACCION"]; else echo "0"; ?>" id="act_control_traccion" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Sistema de frenos ABS (antibloqueo) con EBD (distribución de la fuerza del frenado electrónicamente)	</strong>&nbsp;</td>
    <td><input name="frenos" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["FRENOS"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["FRENOS"]; else echo "0"; ?>" id="frenos" />&nbsp;</td>
    <td align="center"><input name="act_frenos" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["ACT_FRENOS"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["ACT_FRENOS"]; else echo "0"; ?>" id="act_frenos" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Sistema de frenos ABS (antibloqueo), EBD (distribución de la fuerza del frenado electrónicamente), asistencia al frenado de emergencia (BAS)	</strong>&nbsp;</td>
    <td><input name="frenos_emergencia" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["FRENOS_EMERGENCIA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["FRENOS_EMERGENCIA"]; else echo "0"; ?>" id="frenos_emergencia" />&nbsp;</td>
    <td align="center"><input name="act_frenos_emergencia" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["ACT_FRENOS_EMERGENCIA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["ACT_FRENOS_EMERGENCIA"]; else echo "0"; ?>" id="act_frenos_emergencia" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Faros antiniebla delanteros y traseros	</strong>&nbsp;</td>
    <td><input name="faros" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["FAROS"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["FAROS"]; else echo "0"; ?>" id="faros" />&nbsp;</td>
    <td align="center"><input name="act_faros" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["ACT_FAROS"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["ACT_FAROS"]; else echo "0"; ?>" id="act_faros" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Cierre centralizado	</strong>&nbsp;</td>
    <td><input name="cierre" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["CIERRE"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["CIERRE"]; else echo "0"; ?>" id="cierre" />&nbsp;</td>
    <td align="center"><input name="act_cierre" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["ACT_CIERRE"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["ACT_CIERRE"]; else echo "0"; ?>" id="act_cierre" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Ganchos ISOFIX para ajustar silla de niños	</strong>&nbsp;</td>
    <td><input name="ganchos" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["GANCHOS"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["GANCHOS"]; else echo "0"; ?>" id="ganchos" />&nbsp;</td>
    <td align="center"><input name="act_ganchos" type="checkbox" <?php if(isset($row_motores)) { if($row_seguridad["ACT_GANCHOS"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["ACT_GANCHOS"]; else echo "0"; ?>" id="act_ganchos" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Trabas de puertas y ventanas para niños	</strong>&nbsp;</td>
    <td><input name="trabas" type="checkbox" id="trabas" <?php if(isset($row_motores)) { if($row_seguridad["TRABAS"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["TRABAS"]; else echo "0"; ?>" />&nbsp;</td>
    <td align="center"><input name="act_trabas" type="checkbox" id="act_trabas" <?php if(isset($row_motores)) { if($row_seguridad["ACT_TRABAS"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_seguridad["ACT_TRABAS"]; else echo "0"; ?>" />&nbsp;</td>
  </tr>
<?php
$res_extras = $obj_extras->Extraer_ID($_POST["select_version"], "SEGURIDAD");

if(mysql_num_rows($res_extras))
{
$i = 1;
	while($row_extras = mysql_fetch_assoc($res_extras))
	{
		if($row_extras["DATO"])
		{
?>
            <tr>
                <td><input name="campo_mod_seguridad<?php echo $i; ?>" type="text" class="input input-lg" id="campo_mod_seguridad<?php echo $i; ?>" value="<?php echo $row_extras["DATO"]; ?>" /></td>
                <td><input class="input input-lg" name="valor_mod_seguridad<?php echo $i; ?>" type="text" id="valor_mod_seguridad<?php echo $i; ?>" value="<?php echo $row_extras["VALOR"]; ?>" /></td>
                <td>
                    <input name="valor_check_mod_seguridad<?php echo $i; ?>" type="checkbox" value="<?php echo $row_extras["BINARIO"]; ?>" <?php if($row_extras["BINARIO"]) echo "checked"; ?> id="valor_check_mod_seguridad<?php echo $i; ?>" />
                    <input name="id_extra_mod_seguridad<?php echo $i; ?>" type="hidden" id="id_extra_mod_seguridad<?php echo $i; ?>" value="<?php echo $row_extras["ID"]; ?>" />
                </td>
            </tr>
<?php
			$i++;
		}
	}
}
?>
</table>
<div id="inf_seguridad"></div>

</div>
<div class="col-lg-3 col-md-3"></div>

<div class="row">
<div class="col-lg-5 col-md-5"></div>
<div class="col-lg-4 col-md-4"><input class="btn btn-success" name="boton" type="button" id="boton" value="Agregar Extra Seguridad (+)" onclick="Agregar_Fila_Seguridad('_seguridad')" /></div>
<div class="col-lg-3 col-md-3"></div>
</div>

<br />
<br />

</div>


<div class="row">

<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
<table width="100%" class="table table-striped table-bordered">
  <tr>
    <td colspan="2" align="center"><input name="act_ficha_entretenimiento" type="checkbox" <?php if(isset($row_motores)) { if($row_entretenimiento["FICHA_ACTIVA"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_entretenimiento["FICHA_ACTIVA"]; else echo "0"; ?>" /> <strong>Comunicación y Entretenimiento:</strong>&nbsp;</td>
    <td>&nbsp;<strong>On/Off</strong></td>
  </tr>
  <tr>
    <td><strong>Reproductor de radio AM/FM con cargador para CD	</strong>&nbsp;</td>
    <td><input name="reproductor_radio" type="checkbox" <?php if(isset($row_motores)) { if($row_entretenimiento["REPRODUCTOR_RADIO"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_entretenimiento["REPRODUCTOR_RADIO"]; else echo "0"; ?>" id="reproductor_radio" />&nbsp;</td>
    <td align="center"><input name="act_reproductor_radio" type="checkbox" <?php if(isset($row_motores)) { if($row_entretenimiento["ACT_REPRODUCTOR_RADIO"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_entretenimiento["ACT_REPRODUCTOR_RADIO"]; else echo "0"; ?>" id="act_reproductor_radio" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Reproductor Mp3	</strong>&nbsp;</td>
    <td><input name="reproductor_mp3" type="checkbox" <?php if(isset($row_motores)) { if($row_entretenimiento["REPRODUCTOR_MP3"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_entretenimiento["REPRODUCTOR_MP3"]; else echo "0"; ?>" id="reproductor_mp3" />&nbsp;</td>
    <td align="center"><input name="act_reproductor_mp3" type="checkbox" <?php if(isset($row_motores)) { if($row_entretenimiento["ACT_REPRODUCTOR_MP3"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_entretenimiento["ACT_REPRODUCTOR_MP3"]; else echo "0"; ?>" id="act_reproductor_mp3" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Seis parlantes	</strong>&nbsp;</td>
    <td><input name="parlantes" type="checkbox" <?php if(isset($row_motores)) { if($row_entretenimiento["PARLANTES"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_entretenimiento["PARLANTES"]; else echo "0"; ?>" id="parlantes" />&nbsp;</td>
    <td align="center"><input name="act_parlantes" type="checkbox" <?php if(isset($row_motores)) { if($row_entretenimiento["ACT_PARLANTES"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_entretenimiento["ACT_PARLANTES"]; else echo "0"; ?>" id="act_parlantes" />&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Conexión auxiliar</strong>&nbsp;</td>
    <td><input name="conexion_auxiliar" type="checkbox" <?php if(isset($row_motores)) { if($row_entretenimiento["CONEXION_AUXILIAR"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_entretenimiento["CONEXION_AUXILIAR"]; else echo "0"; ?>" id="conexion_auxiliar" />&nbsp;</td>
    <td align="center"><input name="act_conexion_auxiliar" type="checkbox" <?php if(isset($row_motores)) { if($row_entretenimiento["ACT_CONEXION_AUXILIAR"]) echo "checked"; } ?> value="<?php if(isset($row_motores)) echo $row_entretenimiento["ACT_CONEXION_AUXILIAR"]; else echo "0"; ?>" id="act_conexion_auxiliar" />&nbsp;</td>
  </tr>
<?php
$res_extras = $obj_extras->Extraer_ID($_POST["select_version"], "ENTRETENIMIENTO");

if(mysql_num_rows($res_extras))
{
$i = 1;
	while($row_extras = mysql_fetch_assoc($res_extras))
	{
		if($row_extras["DATO"])
		{
?>
            <tr>
                <td><input name="campo_mod_entretenimiento<?php echo $i; ?>" type="text" class="input input-lg" id="campo_mod_entretenimiento<?php echo $i; ?>" value="<?php echo $row_extras["DATO"]; ?>" /></td>
                <td><input class="input input-lg" name="valor_mod_entretenimiento<?php echo $i; ?>" type="text" id="valor_mod_entretenimiento<?php echo $i; ?>" value="<?php echo $row_extras["VALOR"]; ?>" /></td>
                <td>
                    <input name="valor_check_mod_entretenimiento<?php echo $i; ?>" type="checkbox" value="<?php echo $row_extras["BINARIO"]; ?>" <?php if($row_extras["BINARIO"]) echo "checked"; ?> id="valor_check_mod_entretenimiento<?php echo $i; ?>" />
                    <input name="id_extra_mod_entretenimiento<?php echo $i; ?>" type="hidden" id="id_extra_mod_entretenimiento<?php echo $i; ?>" value="<?php echo $row_extras["ID"]; ?>" />
                </td>
            </tr>
<?php
			$i++;
		}
	}
}
?>
</table>
<div id="inf_entretenimiento"></div>

</div>
<div class="col-lg-3 col-md-3"></div>

<div class="row">
<div class="col-lg-5 col-md-5"></div>
<div class="col-lg-4 col-md-4"><input class="btn btn-success" name="boton" type="button" id="boton" value="Agregar Extra Entretenimiento (+)" onclick="Agregar_Fila_Entretenimiento('_entretenimiento')" /></div>
<div class="col-lg-3 col-md-3"></div>
</div>

<br />
<br />
</div>

<div class="row">

<div class="col-lg-3 col-md-3"></div>

<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
<table width="100%" class="table table-striped table-bordered">
<tr>
<td colspan="3" align="center"><strong>Más equipamientos:</strong>&nbsp;</td>
</tr>
<tr>
<td><strong>Nombre del Campo:</strong>&nbsp;</td><td><strong>Valor Textual:</strong>&nbsp;</td><td><strong>Valor Si/No</strong>&nbsp;</td>
</tr>
<?php
if(isset($res_extras))
if(mysql_num_rows($res_extras))
{
$i = 1;
	while($row_extras = mysql_fetch_assoc($res_extras))
	{
		if($row_extras["DATO"])
		{
?>
            <tr>
                <td><input name="campo_mod<?php echo $i; ?>" type="text" class="input input-lg" id="campo_mod<?php echo $i; ?>" value="<?php echo $row_extras["DATO"]; ?>" /></td>
                <td><input class="input input-lg" name="valor_mod<?php echo $i; ?>" type="text" id="valor_mod<?php echo $i; ?>" value="<?php echo $row_extras["VALOR"]; ?>" /></td>
                <td>
                    <input name="valor_check_mod<?php echo $i; ?>" type="checkbox" value="<?php echo $row_extras["BINARIO"]; ?>" <?php if($row_extras["BINARIO"]) echo "checked"; ?> id="valor_check_mod<?php echo $i; ?>" />
                    <input name="id_extra_mod<?php echo $i; ?>" type="hidden" id="id_extra_mod<?php echo $i; ?>" value="<?php echo $row_extras["ID"]; ?>" />
                </td>
            </tr>
<?php
			$i++;
		}
	}
}
?>
<tr>
    <td><input class="input input-lg" name="campo1" type="text" id="campo1" /></td>
    <td><input class="input input-lg" name="valor1" type="text" id="valor1" /></td>
    <td><input name="valor_check1" type="checkbox" value="0" id="valor_check1" /></td>
</tr>

</table>
<div id="inf_extra"></div>


</div>

<div class="col-lg-3 col-md-3"></div>

</div>
<div class="row">
<div class="col-lg-5 col-md-5"></div>
<div class="col-lg-4 col-md-4"><input class="btn btn-success" name="boton" type="button" id="boton" value="Agregar Extra (+)" onclick="Agregar_Fila('_extra')" /></div>
<div class="col-lg-3 col-md-3"></div>
</div>

<br />
<br />


<div class="row">
<div class="col-lg-5 col-md-5"></div>
<div class="col-lg-4 col-md-4"><input class="btn btn-info" name="boton" type="submit" id="boton" value="Registrar Ficha" /></div>
<div class="col-lg-3 col-md-3"></div>
</div>
</form>

<?php 
}
else if(isset($_POST["ficha_version"]))
{
?>
<form action="" method="post" enctype="multipart/form-data" name="form_publicaciones" id="form_publicaciones">
<div class="col-lg-4 col-md-3 col-sm-2">
</div>
<div class="col-lg-4 col-md-6 col-sm-10 col-xs-12">

<strong>SELECCIONE LA VERSIÓN QUE DESEA EDITAR LA FICHA</strong><br />
<input name="band_ficha" type="hidden" id="band_ficha" value="" />

<?php
	if($_SESSION['tipo_usuario'] == 1)
	{
?>
<br />
<br />
		<strong>Concesionario:</strong><br />
		<select class="input input-lg" id="select_concesionarios" name="select_concesionarios">
			
		</select>
<br />
<br />
		<strong>Marca:</strong><br />
		<select class="input input-lg" id="select_marcas" name="select_marcas">
			
		</select>
<br />
<br />
		<strong>Modelo: </strong><br />
		<select class="input input-lg" id="select_modelos" name="select_modelos">
			
		</select>
<br />
<br />
		<strong>Versión: </strong><br />
	  <select class="input input-lg" id="select_version" name="select_version" onchange="document.form_publicaciones.submit()">
			
		</select>
<?php
	}
	else if($_SESSION['tipo_usuario'] == 2)
	{

		$res = $obj_marcas->Extraer_Informacion_Usuario($_SESSION["username"]);
		
		$row = mysql_fetch_assoc($res);
	
		$idmarca   = $row["IDMAR"];

?>
<br />
<br />
		<strong>Modelo: </strong><br />
		<select class="input input-lg" id="select_modelos" name="select_modelos">
		  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
			<?php
				$res = $obj_modelos->ExtraerPorMarcas($idmarca);

				while ($row = mysql_fetch_assoc($res)){
					echo '<option value="'.$row['ID'].'">'.$row['NOMBRE'].'</option>';
				}
			?>
			
		</select>
<br />
<br />
		<strong>Versión: </strong><br />
	  <select class="input input-lg" id="select_version" name="select_version" onchange="document.form_publicaciones.submit()">
			
		</select>
<?php 
	}
?>
</div>
<div class="col-lg-4 col-md-3 col-sm-2">
</div>
</form>
<?php
}
else if(isset($_POST["editar"]) && isset($_POST["select_version"]))
{
	$res = $obj_publicaciones->ExtraerID($_POST["select_version"]);
	$row = mysql_fetch_assoc($res);

	$modelo = $row["MODELOS_ID"];
	$version = $row["VERSION"];
	$year = $row["YEAR"];
	$modelo = $obj_modelos->NombreModelo($modelo);
?>
<div class="col-lg-2 col-md-3 col-sm-2">
</div>

<div class="col-lg-8 col-md-6 col-sm-10 col-xs-12">
<strong>EDITAR FOTOS DE: <?php echo $modelo." - ".$version." - ".$year; ?></strong>
<br />
<br />
<?php
$res = $obj_fotos->Extraer($_POST["select_version"]);

while($row = mysql_fetch_assoc($res))
{
?>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-8" style="height:200px"> <!-- style="display:table;display:table-cell;height:500px;vertical-align:middle" -->
<form action="" method="post" enctype="multipart/form-data" name="form_publicaciones" id="form_publicaciones">
	<div style="height:120px">
	<img src="Archivos/Publicaciones/<?php echo $row["IMAGEN"]; ?>" width="80%" /><br />
    </div>
	<input name="eliminar_edit" type="hidden" id="eliminar_edit" value="<?php echo $row["ID"]; ?>" /><br />
	<input name="editar" type="hidden" id="editar" value="<?php echo $_POST["editar"]; ?>" />
	<input name="select_version" type="hidden" id="select_version" value="<?php echo $_POST["select_version"]; ?>" />
    <input name="Eliminar" class="btn btn-danger" type="submit" id="Eliminar" value="Eliminar Imagen" style="vertical-align:bottom" />
<br />
</form>
</div>
<?php 
}
?>
<br />
<br />
<br />
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<br />
<br />
<form action="" method="post" enctype="multipart/form-data" name="form_publicaciones" id="form_publicaciones">
<br />
<br />
<strong>Agregar Imágen(es)</strong><br />
<br />
<div id="agregar_imagen"></div>
<br />
<input name="publicacion_id" type="hidden" id="publicacion_id" value="<?php echo $_POST["select_version"]; ?>" />
<br />
<input name="agregar" class="btn btn-info" type="button" id="agregar" value="Agregar Imagen (+)" onclick="Agregar_Imagen()" />
<br />
<br />
<input name="subir" class="btn btn-primary" type="submit" id="subir" value="Subir Imagen(es)" />
</form>
</div>

</div>

<div class="col-lg-2 col-md-3 col-sm-2">
</div>
<?php 
}
else if(isset($_POST["editar_fotos"]))
{
?>
<form action="" method="post" enctype="multipart/form-data" name="form_publicaciones" id="form_publicaciones">
<div class="col-lg-4 col-md-3 col-sm-2">
</div>
<div class="col-lg-4 col-md-6 col-sm-10 col-xs-12">
<input name="editar" type="hidden" id="editar" value="" />
<strong>SELECCIONE LA VERSIÓN QUE DESEA EDITAR LAS FOTOS</strong><br />

<?php
	if($_SESSION['tipo_usuario'] == 1)
	{
?>
<br />
<br />
		<strong>Concesionario:</strong><br />
		<select class="input input-lg" id="select_concesionarios" name="select_concesionarios">
			
		</select>
<br />
<br />
		<strong>Marca:</strong><br />
		<select class="input input-lg" id="select_marcas" name="select_marcas">
			
		</select>
<br />
<br />
		<strong>Modelo: </strong><br />
		<select class="input input-lg" id="select_modelos" name="select_modelos">
			
		</select>
<br />
<br />
		<strong>Versión: </strong><br />
		<select class="input input-lg" id="select_version" name="select_version" onchange="document.form_publicaciones.submit()">
			
		</select>
<?php
	}
	else if($_SESSION['tipo_usuario'] == 2)
	{

		$res = $obj_marcas->Extraer_Informacion_Usuario($_SESSION["username"]);
		
		$row = mysql_fetch_assoc($res);
	
		$idmarca   = $row["IDMAR"];

?>
<br />
<br />
		<strong>Modelo: </strong><br />
		<select class="input input-lg" id="select_modelos" name="select_modelos">
		  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
			<?php
				$res = $obj_modelos->ExtraerPorMarcas($idmarca);

				while ($row = mysql_fetch_assoc($res)){
					echo '<option value="'.$row['ID'].'">'.$row['NOMBRE'].'</option>';
				}
			?>
			
		</select>
<br />
<br />
		<strong>Versión: </strong><br />
		<select class="input input-lg" id="select_version" name="select_version" onchange="document.form_publicaciones.submit()">
			
		</select>

<?php 
	}
?>
</div>
<div class="col-lg-4 col-md-3 col-sm-2">
</div>
</form>
<?php 
}
else if(isset($_POST["select_version"]) && isset($_POST["eliminar"]))
{
	$res = $obj_publicaciones->ExtraerID($_POST["select_version"]);
	$row = mysql_fetch_assoc($res);

	$cuerpos = $obj_cuerpos->NombreCuerpo($row["CUERPOS_ID"]);
	$version = $row["VERSION"];
	$year = $row["YEAR"];
	$combustible = $row["COMBUSTIBLE"];
	$potencia = $row["POTENCIA"];
	$slider = $row["SLIDER"];
	$puertas = $row["PUERTAS"];
	$maletero = $row["MALETERO"];
	$colorext = $row["COLOREXT"];
	$colorint = $row["COLORINT"];
	$co2 = $row["CO2"];
	$motor        = $row["MOTOR"];
	$transmision  = $row["TRANSMISION"];
	$traccion     = $row["TRACCION"];
	$velocidadmax = $row["VELOCIDADMAX"];
	$valvulas     = $row["VALVULAS"];
	$precio    = $row["PRECIO"];
	$video     = $row["VIDEO"];
	$porllegar = $row["PORLLEGAR"];
?>
<div class="col-lg-2 col-md-2 col-sm-2">
</div>
<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
<form action="" method="post" enctype="multipart/form-data" name="form_publicaciones" id="form_publicaciones">

<input name="publicacion_elm" type="hidden" id="publicacion_elm" value="<?php echo $_POST["select_version"]; ?>" />

<table class="table table-striped table-hover" width="100%">

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Imagen del Slider:</strong>
    </td>
</tr>


<tr>

	<td>
    <?php if($row["SLIDER"]) { ?>
    <img src="Archivos/Slider/<?php echo $row["SLIDER"]; ?>" width="100%" />
    <?php } ?>
    </td>
</tr>

<tr>
	<td>
    <strong>Cuerpo de Carro: </strong>
    </td>

	<td>
		<?php echo $cuerpos; ?>
    </td>
</tr>

<tr>
	<td>
    <strong>Versión: </strong>
    </td>

	<td>
	    <?php echo $version; ?>
    </td>
</tr>

<tr>
	<td>
    <strong>Año: </strong>
    </td>

	<td>
    <?php echo $year; ?>
    </td>
</tr>

<tr>
	<td>
    <strong><img src="Archivos/Caracteristicas/combustible.png" width="40%" /><br />
	Combustible: </strong>
    </td>

	<td>
		<?php echo $combustible; ?>
    </td>
</tr>

<tr>
	<td>
    <strong><img src="Archivos/Caracteristicas/potencia.png" width="40%" /><br />
	Potencia y Torque: </strong>
    </td>

	<td>
		<?php echo $potencia; ?>
    </td>
</tr>

<tr>
	<td>
    <strong><img src="Archivos/Caracteristicas/puertas.png" width="40%" /><br />
	Puertas: </strong>
    </td>

	<td>
		<?php echo $puertas; ?>
    </td>
</tr>

<tr>
	<td>
    <strong><img src="Archivos/Caracteristicas/maletero.png" width="40%" /><br />
	Maletero: </strong>
    </td>

	<td>
    	<?php echo $maletero; ?>
    </td>
</tr>

<tr>
	<td>
    <strong><img src="Archivos/Caracteristicas/co2.png" width="40%" /><br />
	Co2: </strong>
    </td>

	<td>
    	<?php echo $co2; ?>
    </td>
</tr>


<tr>
	<td>
    <strong><img src="Archivos/Caracteristicas/carretera.png" width="5%" /> Consumo Ciudad: </strong>
    </td>

	<td>
    	<?php echo $colorext; ?>
    </td>
</tr>


<tr>
	<td>
    <strong><img src="Archivos/Caracteristicas/carretera.png" width="5%" /> Consumo Carretera: </strong>
    </td>

	<td>
    	<?php echo $colorint; ?>
    </td>
</tr>

<tr>
	<td>
    <strong>Precio USD$: </strong>
    </td>

	<td>
    	<?php echo $precio; ?>
    </td>
</tr>

<tr>
	<td>
    <strong>Video Explicativo: </strong>
    </td>

	<td>
	    <?php echo $video; ?>
    </td>
</tr>

</table>
<br />
<br /><br />
<br />
<strong style="font-size:20px;color:#F00">DESEA ELIMINAR ESTA PUBLICACIÓN?</strong><br />
<br />

<input name="agregar" class="btn btn-danger btn-lg" type="submit" id="agregar" value="Eliminar Publicación" />

</form>
</div>
<div class="col-lg-2 col-md-2 col-sm-2">
</div>
<?php
}
else if(isset($_POST["elm_publicacion"]))
{
?>
<form action="" method="post" enctype="multipart/form-data" name="form_publicaciones" id="form_publicaciones">
<div class="col-lg-4 col-md-3 col-sm-2">
</div>
<div class="col-lg-4 col-md-6 col-sm-10 col-xs-12">
<input name="eliminar" type="hidden" id="eliminar" value="" />
<strong>SELECCIONE LA VERSIÓN QUE DESEA ELIMINAR</strong><br />

<?php
	if($_SESSION['tipo_usuario'] == 1)
	{
?>
<br />
<br />
		<strong>Concesionario:</strong><br />
		<select class="input input-lg" id="select_concesionarios" name="select_concesionarios">
			
		</select>
<br />
<br />
		<strong>Marca:</strong><br />
		<select class="input input-lg" id="select_marcas" name="select_marcas">
			
		</select>
<br />
<br />
		<strong>Modelo: </strong><br />
		<select class="input input-lg" id="select_modelos" name="select_modelos">
			
		</select>
<br />
<br />
		<strong>Versión: </strong><br />
		<select class="input input-lg" id="select_version" name="select_version" onchange="document.form_publicaciones.submit()">
			
		</select>
<?php
	}
	else if($_SESSION['tipo_usuario'] == 2)
	{

		$res = $obj_marcas->Extraer_Informacion_Usuario($_SESSION["username"]);
		
		$row = mysql_fetch_assoc($res);
	
		$idmarca   = $row["IDMAR"];

?>
<br />
<br />
		<strong>Modelo: </strong><br />
		<select class="input input-lg" id="select_modelos" name="select_modelos">
		  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
			<?php
				$res = $obj_modelos->ExtraerPorMarcas($idmarca);

				while ($row = mysql_fetch_assoc($res)){
					echo '<option value="'.$row['ID'].'">'.$row['NOMBRE'].'</option>';
				}
			?>
			
		</select>
<br />
<br />
		<strong>Versión: </strong><br />
		<select class="input input-lg" id="select_version" name="select_version" onchange="document.form_publicaciones.submit()">
			
		</select>

<?php 
	}
?>
</div>
<div class="col-lg-4 col-md-3 col-sm-2">
</div>
</form>
<?php
}
else if(isset($_POST["select_version"]) && isset($_POST["band_mod"]))
{
	$res = $obj_publicaciones->ExtraerID($_POST["select_version"]);
	$row = mysql_fetch_assoc($res);

	$cuerpos_id  = $row["CUERPOS_ID"];
	$version     = $row["VERSION"];
	$year        = $row["YEAR"];
	$combustible = $row["COMBUSTIBLE"];
	$potencia = $row["POTENCIA"];
	$slider   = $row["SLIDER"];
	$puertas  = $row["PUERTAS"];
	$maletero = $row["MALETERO"];
	$co2      = $row["CO2"];
	$colorext = $row["COLOREXT"];
	$colorint = $row["COLORINT"];
	$motor        = $row["MOTOR"];
	$transmision  = $row["TRANSMISION"];
	$traccion     = $row["TRACCION"];
	$velocidadmax = $row["VELOCIDADMAX"];
	$valvulas     = $row["VALVULAS"];
	$precio   = $row["PRECIO"];
	$video    = $row["VIDEO"];
	$descarga = $row["DESCARGA"];
	$porllegar= $row["PORLLEGAR"];

?>
<div class="col-lg-2 col-md-2 col-sm-2">
</div>
<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
<form action="" method="post" enctype="multipart/form-data" name="form_publicaciones" id="form_publicaciones">

<input name="publicacion_mod" type="hidden" id="publicacion_mod" value="<?php echo $_POST["select_version"]; ?>" />

<table class="table table-striped table-hover" width="100%">

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Imagen del Slider (Imagen que se verá reflejada en las publicaciones recientes, galería principal de la página y ofertas):</strong>
    </td>
</tr>


<tr>

	<td>
    <?php if($row["SLIDER"]) { ?>
    <img src="Archivos/Slider/<?php echo $row["SLIDER"]; ?>" width="100%" />
    <?php } ?>
    <input name="slider" type="file" id="slider" />
    <div id="error_slider"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Cuerpo de Carro: </strong>
    </td>
</tr>


<tr>

	<td>
<select name="cuerpos_select" id="cuerpos_select" class="input-lg">
  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		<?php
        	$res = $obj_cuerpos->Extraer();
			while($row = mysql_fetch_assoc($res))
			{
        ?>
       		  <option value="<?php echo $row["ID"]; ?>" <?php if($row["ID"] == $cuerpos_id) echo "selected"; ?>><?php echo $row["NOMBRE"]; ?></option>
        <?php
			}
        ?>
</select>
    <div id="error_cuerpo"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Versión: </strong>
    </td>
</tr>


<tr>

	<td>
    <input name="version" type="text" class="input input-lg" id="version" value="<?php echo $version; ?>" size="50" />
    <div id="error_version"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Año: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="year" type="text" id="year" value="<?php echo $year; ?>" />
    <div id="error_year"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/combustible.png" width="5%" /> Combustible: </strong>
    </td>
</tr>


<tr>

	<td>
		<select name="combustible" class="input input-lg" id="combustible">
		  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		  <option value="Diesel" <?php if($combustible == "Diesel") echo "selected"; ?>>Diesel</option>
		  <option value="Gasolina" <?php if($combustible == "Gasolina") echo "selected"; ?>>Gasolina</option>
		  <option value="Diesel, Gasolina" <?php if($combustible == "Diesel, Gasolina") echo "selected"; ?>>Diesel, Gasolina</option>
          <option value="Hibrido/Eléctrico" <?php if($combustible == "Hibrido/Eléctrico") echo "selected"; ?>>Hibrido/Eléctrico</option>
		</select>
    <div id="error_combustible"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/potencia.png" width="5%" /> Potencia y Torque: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="potencia" type="text" id="potencia" value="<?php echo $potencia; ?>" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/puertas.png" width="5%" /> Puertas: </strong>
    </td>
</tr>


<tr>

	<td>
		<select name="puertas" class="input input-lg" id="puertas">
		  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		  <option value="2" <?php if($puertas == "2") echo "selected"; ?>>2</option>
		  <option value="3" <?php if($puertas == "3") echo "selected"; ?>>3</option>
		  <option value="4" <?php if($puertas == "4") echo "selected"; ?>>4</option>
		  <option value="5" <?php if($puertas == "5") echo "selected"; ?>>5</option>
        </select>
    <div id="error_puertas"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/maletero.png" width="5%" /> Maletero: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="maletero" type="text" id="maletero" value="<?php echo $maletero; ?>" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/co2.png" width="5%" /> Co2: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="co2" type="text" id="co2" value="<?php echo $co2; ?>" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/carretera.png" width="5%" /> Consumo Ciudad: </strong>
    </td>
</tr>


<tr>

	<td>
    <input name="colorext" type="text" class="input input-lg" id="colorext" value="<?php echo $colorext; ?>" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/carretera.png" width="5%" /> Consumo Carretera: </strong>
    </td>
</tr>


<tr>

	<td>
    <input name="colorint" type="text" class="input input-lg" id="colorint" value="<?php echo $colorint; ?>" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/motor.png" width="5%" /> Motor: </strong>
    </td>
</tr>


<tr>

	<td>
    <input name="motor" type="text" class="input input-lg" id="motor" value="<?php echo $motor; ?>" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/motor.png" width="5%" /> Transmisión: </strong>
    </td>
</tr>


<tr>

	<td>
    <input name="transmision" type="text" class="input input-lg" id="transmision" value="<?php echo $transmision; ?>" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/motor.png" width="5%" /> Tracción: </strong>
    </td>
</tr>


<tr>

	<td>
    <input name="traccion" type="text" class="input input-lg" id="traccion" value="<?php echo $traccion; ?>" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/motor.png" width="5%" /> Cilindros: </strong>
    </td>
</tr>


<tr>

	<td>
    <input name="valvulas" type="text" class="input input-lg" id="valvulas" value="<?php echo $valvulas; ?>" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/velocidad.png" width="5%" /> Velocidad Máxima: </strong>
    </td>
</tr>


<tr>

	<td>
    <input name="velocidadmax" type="text" class="input input-lg" id="velocidadmax" value="<?php echo $velocidadmax; ?>" />
    </td>
</tr>


<tr style="background-color:#DFDFDF">
	<td>
    <strong>Precio USD$: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="precio" type="text" id="precio" value="<?php echo $precio; ?>" />
    <div id="error_precio"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Descripción: </strong>
    </td>
</tr>


<tr>

	<td><textarea name="descripcion" class="input input-lg" id="descripcion"><?php if(file_exists("Archivos/PublicacionesDesc/Desc_".$_POST["select_version"].".html")){include("Archivos/PublicacionesDesc/Desc_".$_POST["select_version"].".html");} ?></textarea>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Video Explicativo: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="video" type="text" id="video" value="<?php echo $video; ?>" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Archivo de Información Adicional:</strong>
    </td>
</tr>

<tr>

	<td>
    <?php echo $row["DESCARGA"]; ?><br />
    <input name="descarga" type="file" id="descarga" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong> Carro por llegar?</strong>
    <input name="porllegar" type="checkbox" id="porllegar" <?php if($porllegar) echo "checked"; ?> value="<?php echo $porllegar; ?>" />
    </td>
</tr>

</table>
<br />
<br />
<input name="agregar" class="btn btn-warning btn-lg" type="button" id="agregar" value="Modificar Publicación" onclick="Revisar('mod')">

</form>
</div>
<div class="col-lg-2 col-md-2 col-sm-2">
</div>
<?php
}
else if(isset($_POST["mod_publicacion"]))
{
?>
<form action="" method="post" enctype="multipart/form-data" name="form_publicaciones" id="form_publicaciones">
<div class="col-lg-4 col-md-3 col-sm-2">
</div>
<div class="col-lg-4 col-md-6 col-sm-10 col-xs-12">

<strong>SELECCIONE LA VERSIÓN QUE DESEA MODIFICAR</strong><br />
<input name="band_mod" type="hidden" id="band_mod" value="" />

<?php
	if($_SESSION['tipo_usuario'] == 1)
	{
?>
<br />
<br />
		<strong>Concesionario:</strong><br />
		<select class="input input-lg" id="select_concesionarios" name="select_concesionarios">
			
		</select>
<br />
<br />
		<strong>Marca:</strong><br />
		<select class="input input-lg" id="select_marcas" name="select_marcas">
			
		</select>
<br />
<br />
		<strong>Modelo: </strong><br />
		<select class="input input-lg" id="select_modelos" name="select_modelos">
			
		</select>
<br />
<br />
		<strong>Versión: </strong><br />
	  <select class="input input-lg" id="select_version" name="select_version" onchange="document.form_publicaciones.submit()">
			
		</select>
<?php
	}
	else if($_SESSION['tipo_usuario'] == 2)
	{

		$res = $obj_marcas->Extraer_Informacion_Usuario($_SESSION["username"]);
		
		$row = mysql_fetch_assoc($res);
	
		$idmarca   = $row["IDMAR"];

?>
<br />
<br />
		<strong>Modelo: </strong><br />
		<select class="input input-lg" id="select_modelos" name="select_modelos">
		  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
			<?php
				$res = $obj_modelos->ExtraerPorMarcas($idmarca);

				while ($row = mysql_fetch_assoc($res)){
					echo '<option value="'.$row['ID'].'">'.$row['NOMBRE'].'</option>';
				}
			?>
			
		</select>
<br />
<br />
		<strong>Versión: </strong><br />
	  <select class="input input-lg" id="select_version" name="select_version" onchange="document.form_publicaciones.submit()">
			
		</select>
<?php 
	}
?>
</div>
<div class="col-lg-4 col-md-3 col-sm-2">
</div>
</form>
<?php
}
else if(isset($_POST["agr_publicacion"]))
{
	$idmarca = "";$logomar = "";$nombremar = ""; $logocon = "";$nombrecon = "";
	if($_SESSION["tipo_usuario"] == 2)
	{
		$res = $obj_marcas->Extraer_Informacion_Usuario($_SESSION["username"]);
		
		$row = mysql_fetch_assoc($res);

		$idmarca   = $row["IDMAR"];
		$logomar   = $row["LOGOMAR"];
		$nombremar = $row["NOMBREMAR"];
		$logocon   = $row["LOGOCON"];
		$nombrecon = $row["NOMBRECON"];
	}
?>
<div class="col-lg-2 col-md-2 col-sm-2">
</div>
<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
<form action="" method="post" enctype="multipart/form-data" name="form_publicaciones" id="form_publicaciones">

<table class="table table-striped table-hover" width="100%">

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Fotos del Vehículo:</strong>
    </td>
</tr>


<tr>

	<td>
    <input name="imagen1" type="file" id="imagen1" />
    </td>
</tr>
<tr>
	<td>
    <input name="imagen2" type="file" id="imagen2" />
    </td>
</tr>
<tr>
	<td>
    <input name="imagen3" type="file" id="imagen3" />
    </td>
</tr>
<tr>
	<td>
    <input name="imagen4" type="file" id="imagen4" />
    </td>
</tr>
<tr>
	<td>
    <input name="imagen5" type="file" id="imagen5" />
    </td>
</tr>
<tr>
	<td>
    <input name="imagen6" type="file" id="imagen6" />
    <div id="error_imagen"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Imagen del Slider (Imagen que se verá reflejada en las publicaciones recientes, galería principal de la página y ofertas):</strong>
    </td>
</tr>


<tr>

	<td>
    <input name="slider" type="file" id="slider" />
    <div id="error_slider"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Concesionario: </strong>
    </td>
</tr>


<tr>

	<td>
    <?php
	if($_SESSION["tipo_usuario"] == 1)
	{
?>
		<select class="input input-lg" id="select_concesionarios" name="select_concesionarios">
			
		</select>
<?php
	}
	else
	{
	?>
    <img src="Archivos/Concesionarios/<?php echo $logocon; ?>" width="40%" /><br />
    <?php
	}
	?>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Marca: </strong>
    </td>
</tr>


<tr>

	<td>
    <?php
	if($_SESSION["tipo_usuario"] == 1)
	{
?>
		<select class="input input-lg" id="select_marcas" name="select_marcas">
			
		</select>
<?php
	}
	else
	{
	?>
    <img src="Archivos/Marcas/<?php echo $logomar; ?>" width="40%" /><br />
    <input name="select_marcas" type="hidden" id="select_marcas" value="<?php echo $idmarca; ?>" />
    <?php
	}
	?>
    <div id="error_marcas"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Modelo: </strong>
    </td>
</tr>


<tr>

	<td>
    <?php
	if($_SESSION["tipo_usuario"] == 1)
	{
?>
		<select class="input input-lg" id="select_modelos" name="select_modelos">
			
		</select>
<?php
	}
	else
	{
		$res = $obj_modelos->ExtraerPorMarcas($idmarca);
	?>
		<select class="input input-lg" id="select_modelos" name="select_modelos">
			<option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
            <?php
			while ($row = mysql_fetch_assoc($res))
			{
			?>
            	<option value="<?php echo $row['ID']; ?>"><?php echo $row['NOMBRE']; ?></option>
            <?php
			}
			?>
		</select>
    <?php
	}
	?>
    <div id="error_modelos"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Cuerpo de Carro: </strong>
    </td>
</tr>


<tr>

	<td>
<select name="cuerpos_select" id="cuerpos_select" class="input-lg">
  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		<?php
        	$res = $obj_cuerpos->Extraer();
			while($row = mysql_fetch_assoc($res))
			{
        ?>
          		<option value="<?php echo $row["ID"]; ?>"><?php echo $row["NOMBRE"]; ?></option>
        <?php
			}
        ?>
</select>
    <div id="error_cuerpo"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Versión: </strong>
    </td>
</tr>


<tr>

	<td>
    <input name="version" type="text" class="input input-lg" id="version" size="50" />
    <div id="error_version"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Año: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="year" type="text" id="year" />
    <div id="error_year"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/combustible.png" width="5%" /> Combustible: </strong>
    </td>
</tr>


<tr>

	<td>
		<select name="combustible" class="input input-lg" id="combustible">
		  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		  <option value="Diesel">Diesel</option>
		  <option value="Gasolina">Gasolina</option>
		  <option value="Diesel, Gasolina">Diesel, Gasolina</option>
          <option value="Hibrido/Eléctrico">Hibrido/Eléctrico</option>
		</select>
    <div id="error_combustible"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/potencia.png" width="5%" /> Potencia y Torque: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="potencia" type="text" id="potencia" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/puertas.png" width="5%" /> Puertas: </strong>
    </td>
</tr>

<tr>

	<td>
		<select name="puertas" class="input input-lg" id="puertas">
		  <option value="0">&lt;&lt; Seleccione &gt;&gt;</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
        </select>
    <div id="error_puertas"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/maletero.png" width="5%" /> Maletero: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="maletero" type="text" id="maletero" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/co2.png" width="5%" /> Co2: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="co2" type="text" id="co2" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/carretera.png" width="5%" /> Consumo Ciudad: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="colorext" type="text" id="colorext" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/carretera.png" width="5%" /> Consumo Carretera: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="colorint" type="text" id="colorint" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/motor.png" width="5%" /> Motor: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="motor" type="text" id="motor" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/motor.png" width="5%" /> Transmisión: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="transmision" type="text" id="transmision" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/motor.png" width="5%" /> Tracción: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="traccion" type="text" id="traccion" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/motor.png" width="5%" /> Cilindros: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="valvulas" type="text" id="valvulas" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong><img src="Archivos/Caracteristicas/velocidad.png" width="5%" /> Velocidad Máxima: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="velocidadmax" type="text" id="velocidadmax" />
    </td>
</tr>


<tr style="background-color:#DFDFDF">
	<td>
    <strong>Precio USD$: </strong>
    </td>
</tr>


<tr>

	<td>
    <input class="input input-lg" name="precio" type="text" id="precio" />
    <div id="error_precio"></div>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Descripción: </strong>
    </td>
</tr>


<tr>
	<td><textarea name="descripcion" class="input input-lg" id="descripcion"></textarea>
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Video Explicativo: </strong>
    </td>
</tr>

<tr>

	<td>
    <input class="input input-lg" name="video" type="text" id="video" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong>Archivo de Información Adicional:</strong>
    </td>
</tr>

<tr>

	<td>
    <input name="descarga" type="file" id="descarga" />
    </td>
</tr>

<tr style="background-color:#DFDFDF">
	<td>
    <strong> Carro por llegar?</strong>
    <input name="porllegar" type="checkbox" id="porllegar" value="0" />
    </td>
</tr>

</table>
<br />
<br />
<input name="agregar" class="btn btn-primary btn-lg" type="button" id="agregar" value="Agregar Publicación" onclick="Revisar('agr')">

</form>
</div>
<div class="col-lg-2 col-md-2 col-sm-1">
</div>
<?php
}
else
{
?>
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="agr_publicacion" type="hidden" id="agr_publicacion" value="">
<input name="agregar" class="btn btn-primary btn-lg" type="submit" id="agregar" value="Agregar">
<br>
<br>
</form>
</div>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="mod_publicacion" type="hidden" id="mod_publicacion" value="">
<input name="modificar" class="btn btn-warning btn-lg" type="submit" id="modificar" value="Modificar">
<br>
<br>
</form>
</div>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="elm_publicacion" type="hidden" id="elm_publicacion" value="">
<input name="Eliminar" class="btn btn-danger btn-lg" type="submit" id="Eliminar" value="Eliminar">
<br>
<br>
</form>
</div>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="editar_fotos" type="hidden" id="editar_fotos" value="">
<input name="Eliminar" class="btn btn-success btn-lg" type="submit" id="Eliminar" value="Editar Fotos">
<br>
<br>
</form>
</div>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="ficha_version" type="hidden" id="ficha_version" value="">
<input name="ficha" class="btn btn-info btn-lg" type="submit" id="ficha" value="Ficha Versión">
<br>
<br>
</form>
</div>
<?php
}
?>
</div>

<br>
<br>
<br>
<br>
<script type="text/javascript">
	CKEDITOR.replace('descripcion',
	{           
	} );
</script>
