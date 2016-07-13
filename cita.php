<script>
$('#myModal_cita').on('shown.bs.modal', function () {
    $('#myInput').focus()
  });
</script>

<!-- Modal -->
<div class="modal fade" id="myModal_cita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

<!--  <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>-->
     <div class="modal-body">
<?php
if(isset($_POST["nombre_cita"]))
{
	$nombre   = $_POST["nombre_cita"];
	$apellido = $_POST["apellido_cita"];
	$telefono = $_POST["telefono_cita"];
	$correo   = $_POST["correo_cita"];
	$movil    = $_POST["movil_cita"];
	$ciudad   = $_POST["ciudad_cita"];
	$mensaje  = $_POST["mensaje_cita"];

$para = $correogerente_marca;

$titulo = "Mensaje de $nombre para Publicación de $version";
$mensaje = '
<html>
<head>
  <title>Concesionariosrd.com</title>
</head>
<body>

<strong>Nombre: </strong> '.$nombre.' '.$apellido.'<br><br>
<strong>Teléfono: </strong> '.$telefono.'<br><br>
<strong>Móvil: </strong> '.$movil.'<br><br>
<strong>Correo: </strong> '.$correo.'<br><br> 
<strong>Ciudad: </strong> '.$ciudad.'<br><br> 
<br><br>'.$mensaje.'<br><br>
</body>
</html>
';
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'From: Concesionariosrd.com <'.$correogerente_marca.'>' . "\r\n";
$cabeceras .= 'Cc: '.$correo.'' . "\r\n";

// Enviarlo
mail($para, $titulo, $mensaje, $cabeceras);

}
?>
<form action="" method="post" id="cita" name="cita">
<br />
<br />
<strong style="text-align:justify">PROGRAME UNA CITA/HAGA UN TEST DRIVE/CONTACTAR O LLAME AL VENDEDOR.</strong>
<br />
<br />
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input name="nombre_cita" class="input input-lg" type="text" id="nombre_cita" placeholder="Nombre..." /><br /><br />
<input name="telefono_cita" class="input input-lg" type="text" id="telefono_cita" placeholder="Teléfono..." /><br /><br />
<input name="correo_cita" class="input input-lg" type="text" id="correo_cita" placeholder="Correo..." /><br /><br />
<br />
<br />

</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input name="apellido_cita" class="input input-lg" type="text" id="apellido_cita" placeholder="Apellido..." /><br /><br />
<input name="movil_cita" class="input input-lg" type="text" id="movil_cita" placeholder="Móvil (Opcional)..." /><br /><br />
<input name="ciudad_cita" class="input input-lg" type="text" id="ciudad_cita" placeholder="Ciudad..." /><br /><br />
<br />
<br />

</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<textarea name="mensaje_cita" class="input input-lg" cols="" rows="5" id="mensaje_cita" placeholder="Mensaje (Opcional)..." style="width:100%"></textarea>
<br />
<br />

</div>

<br />
<br />
<br />

<input name="boton" type="button" class="btn btn-primary btn-lg" id="boton" value="PIDE COTIZACIÓN AHORA!" onclick="EnviarCita()" />

</form>
      </div>
<!--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal_cita" style="width:100%">
  PIDE COTIZACIÓN AHORA!
</button>
<br>
