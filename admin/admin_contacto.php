<script>
function Validar_Email()
{
    var email=document.getElementById("contacto_mod").value;
	var correcto = true;
	if((document.getElementById("contacto_mod").value.toLowerCase().search('(^[a-z][a-z0-9\-_.]+[@][a-z0-9\-_.]+[.][a-z]+$)') == -1) && email!="")
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
	
	if(document.getElementById("contacto_mod").value == "" )
	{
		acepto = false;
		document.getElementById("error_email").innerHTML = "<div class='alert alert-danger'>DEBE INGRESAR UN EMAIL</div>";
	}
	else
	{
		document.getElementById("error_email").innerHTML = "";
	}

	if(!Validar_Email() && document.getElementById("contacto_mod").value != "" )
	{
		acepto = false;
		document.getElementById("error_email").innerHTML = "<div class='alert alert-danger'>DEBE INGRESAR UN EMAIL VÁLIDO</div>";
	}
	else if(document.getElementById("contacto_mod").value != "" )
	{
		document.getElementById("error_email").innerHTML = "";
	}

	if(acepto) document.enviar.submit();
}
</script>
<div class="row" style="background-color:#000;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">ADMINISTRAR CONTACTO</strong>
</div>
<br>
<br>
<div class="row">

<?php

if(isset($_POST["contacto_mod"]))
{
	 if($obj_contactos->Modificar($_POST["contacto_id"], $_POST["contacto_mod"]))
	 {
		?>
		  <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
					<div class="alert alert-success">
						<strong>CONTACTO MODIFICADO CON &Eacute;XITO.</strong>
					</div>
				</div>
		  </div>
		<?php
		echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";
	 }
}


if(isset($_POST["mod_contacto"]))
{
	$res = $obj_contactos->Extraer();
	$row = mysql_fetch_assoc($res);
	$id = $row["ID"];
	$correo = $row["CORREO"];
?>
<div class="col-lg-2 col-md-3 col-sm-3">
</div>
<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<br />
<br />
<strong>Modificar el contacto: </strong><br />
<br />
<input class="input input-lg" name="contacto_mod" type="text" id="contacto_mod" value="<?php echo $correo; ?>" /><br /><br />
<div id="error_email"></div>
<input name="contacto_id" type="hidden" id="contacto_id" value="<?php echo $id; ?>" /><br />
<br />
<br />

<input name="modificar" class="btn btn-warning btn-lg" type="button" id="modificar" value="Modificar" onclick="Enviar()" />
<br />
<br />

</form>
</div>
<div class="col-lg-2 col-md-3 col-sm-3">
</div>
<?php
}
else
{
?>
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<form action="" method="post" id="enviar" name="enviar">
<input name="mod_contacto" type="hidden" id="mod_contacto" value="">
<input name="modificar" class="btn btn-warning btn-lg" type="submit" id="modificar" value="Modificar">
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
