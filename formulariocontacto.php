<script>
function Validar_Email()
{
    var email=document.getElementById("email").value;
	var correcto = true;
	if((document.getElementById("email").value.toLowerCase().search('(^[a-z][a-z0-9\-_.]+[@][a-z0-9\-_.]+[.][a-z]+$)') == -1) && email!="")
	{
		correcto = false;
		//document.getElementById('email').value="";
		//document.getElementById('email').focus();
	}
	return correcto;
}

function isset(variable_name) 
{
    try {
         if (typeof(eval(variable_name)) != 'undefined')
         if (eval(variable_name) != null)
         return true;
     } catch(e) { }
    return false;
}

function Enviar()
{
	var acepto = true;

	
	if(document.getElementById("nombre").value == "" )
	{
		acepto = false;
		document.getElementById("error_nombre").innerHTML = "<div class='alert alert-danger'>DEBE INGRESAR UN NOMBRE</div>";
	}
	else
	{
		document.getElementById("error_nombre").innerHTML = "";
	}

	if(document.getElementById("email").value == "" )
	{
		acepto = false;
		document.getElementById("error_email").innerHTML = "<div class='alert alert-danger'>DEBE INGRESAR UN EMAIL</div>";
	}
	else
	{
		document.getElementById("error_email").innerHTML = "";
	}

	if(!Validar_Email() && document.getElementById("email").value != "" )
	{
		acepto = false;
		document.getElementById("error_email").innerHTML = "<div class='alert alert-danger'>DEBE INGRESAR UN EMAIL VÁLIDO</div>";
	}
	else if(document.getElementById("email").value != "" )
	{
		document.getElementById("error_email").innerHTML = "";
	}

	if(document.getElementById("mensaje").value == "" )
	{
		acepto = false;
		document.getElementById("error_mensaje").innerHTML = "<div class='alert alert-danger'>DEBE INGRESAR UN MENSAJE</div>";
	}
	else
	{
		document.getElementById("error_mensaje").innerHTML = "";
	}

	if(acepto) document.enviar.submit();
}
</script>
<br />
<div class="row" style="background-color:#999;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">CONTACTO</strong>
</div>

<div class="row">
<br>

<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
</div>
<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
<?php

if(isset($_POST["email"]))
{
$nombre      = $_POST['nombre'];
$email       = $_POST['email'];
$telefono    = $_POST['telefono'];
$observacion = $_POST['mensaje'];

	$res = $obj_contactos->Extraer();
	$row = mysql_fetch_assoc($res);

$nombre_destinatario = "Aurelio Cerda";
$para = $row["CORREO"];

$titulo = "MENSAJE DESDE CONCESIONARIOSRD.COM";
$mensaje = "
<html>
<head>
  <title>MENSAJE DESDE CONCESIONARIOSRD.COM</title>
</head>
<body>
<strong>MENSAJE DESDE CONCESIONARIOSRD.COM</strong>
<br />
<br />
  <table>
    <tr>
		<td><strong>NOMBRE:</strong></td><td>".$nombre."</td>
    </tr>
    <tr>
		<td><strong>EMAIL:</strong></td><td>".$email."</td>
    </tr>
    <tr>
		<td><strong>TELEFONO:</strong></td><td>".$telefono."</td>
    </tr>
    <tr>
		<td><strong>OBSERVACION:</strong></td><td>".$observacion."</td>
    </tr>
  </table>
<br />
<br />

<strong>Este mensaje se ha generado automáticamente desde la web concesionariosrd.com</strong>

</body>
</html>
";

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: '.$nombre_destinatario.' <'.$para.'>' . "\r\n";
$cabeceras .= 'From: Usuario Concesionariosrd.com <'.$para.'>' . "\r\n";

// Enviarlo
mail($para, $titulo, $mensaje, $cabeceras);
}
else
{
?>
<form action="" method="post" id="enviar" name="enviar">
<div style="font-size:16px"><strong>Para suscripción escríbanos </strong></div><br />
<br />
<input class="input input-lg" name="nombre" type="text" id="nombre" placeholder="Nombre..."><br />
<div id="error_nombre"></div>
<br><br>

<input class="input input-lg" name="email" type="text" id="email" placeholder="Email..."><br />
<div id="error_email"></div>
<br><br>

<input class="input input-lg" name="telefono" type="text" id="telefono" placeholder="Teléfono..."><br />

<br><br>

<textarea style="width:100%;height:200px" name="mensaje" class="input input-lg" id="mensaje" placeholder="Mensaje..."></textarea><br />
<div id="error_mensaje"></div>
<br><br><br>

<input class="btn btn-primary" name="Botón" type="button" id="enviar" value="Enviar" onclick="Enviar()"><br><br>

</form>
<?php
}
?>
</div>
<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
</div>

<br>
</div>