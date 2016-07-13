<script>
function Insertar()
{
	var acepto = true;

	if(document.getElementById("nueva").value != document.getElementById("rnueva").value)
	{
		acepto = false;
		alert("LAS CONTRASEÑAS NO COINCIDEN");
	}

	if(acepto)
		document.cambio.submit();
}

</script>
<div class="row" style="background-color:#000;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">CAMBIAR CONTRASEÑA</strong>
</div>
<br>
<br>
<br>

<?php

$usuario = $_POST['otro_usuario'];

$band = 0;

if(isset($_POST['nueva']))
{
	$nueva = $_POST['nueva'];

	if($nueva)
	if($obj_usuarios->Cambiar_Passw($usuario, $nueva))
	{
		$band = 1;
	}
	else 
	{
		echo "<script>alert(Contraseña Anterior Inv&aacute;lida);</script></div>";
	}
}

if($band)
{
	?>
							<div class="alert alert-success img-rounded">
	                            <div align="center">
								<strong>CAMBIO DE CONTRASEÑA REALIZADO CON ÉXITO</strong>
                                </div>
                            </div>
	<?php
echo @"<META HTTP-EQUIV='refresh' CONTENT='2; URL=$PHP_SELF'>";

}
?>
<div class="col-lg-4 col-md-2 col-sm-1">
</div>
<div class="col-lg-4 col-md-6 col-sm-10 col-xs-12">
<div align="center" style="font-weight:bold">Cambiar Contraseña: </div>
<p>&nbsp;</p>
<form action="" method="post" name="cambio" id="cambio">
<table class="table" width="600" style="font-size:12px">
<?php
if($_SESSION['tipo_usuario'] == 1)
{
?>
  <tr>
    <td style="font-weight:bold">Cambiar Contraseña a otro usuario: &nbsp;</td>
    <td>
      <select class="input input-lg" name="otro_usuario" id="otro_usuario" onchange="document.cambio.submit();">
        <option value="<?php echo $_SESSION['username']; ?>"><?php echo $_SESSION['username']; ?></option>
        <?php
		$res_usuarios_marca = $obj_usuarios->ExtraerUsuariosMarca();

		while($row_usuarios_marca = mysql_fetch_assoc($res_usuarios_marca))
		{
		?>
        <option <?php if($row_usuarios_marca["LOGIN"] == $usuario) echo "selected"; ?> value="<?php echo $row_usuarios_marca["LOGIN"]; ?>"><?php echo $row_usuarios_marca["LOGIN"]." - ".$row_usuarios_marca["NOMBRE"]." ".$row_usuarios_marca["APELLIDO"]; ?></option>
        <?php
		}
		?>
      </select>
    </td>
  </tr>
<?php
}
?>
  <tr>
    <td width="165" style="font-weight:bold">Usuario: &nbsp;</td>
    <td width="173"><?php echo $usuario; ?>&nbsp;</td>
  </tr>

  <tr>
    <td style="font-weight:bold">Contraseña Nueva: &nbsp;</td>
    <td>
      <input class="input input-lg" name="nueva" type="password" id="nueva" /></td>
  </tr>
  <tr>
    <td style="font-weight:bold">Repetir Contraseña: &nbsp;</td>
    <td>
      <input class="input input-lg" name="rnueva" type="password" id="rnueva" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <input name="boton" type="button" class="btn btn-primary btn-lg" id="boton" onclick="Insertar()" value="Cambiar Contraseña" />
    &nbsp;</td>
  </tr>
</table>
</td></tr></table>
</form>
<br>
<br>
<br>
		<form name='form2' method='post' action='index.php'>
			<div align='center'>
			  <input type='submit' name='button2' id='button2' value='Regresar' class="btn btn-info btn-lg">
			</div>
	    </form>
</div>
<div class="col-lg-4 col-md-2 col-sm-1">
</div>
