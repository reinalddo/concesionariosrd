<table align="center" width="100%" border="0" align="left"><tr><td width="63%" align="left" valign="middle"><strong style="font-size:24px">Administración de Página Web</strong>
<?php
///////////////////------------------------------------------------------------------------------------------------------------------------

	if(isset($_POST['salir_sesion']))
	{
		$usuario = $_SESSION['username'];
		session_destroy();
		echo @"<META HTTP-EQUIV='refresh' CONTENT='0; URL=$PHP_SELF'>";
	}
	
	if(isset($_POST['usuarios']))
	{
		$usuario = $_POST['usuarios'];
		$clave = $_POST['clave'];
	
		$res = $obj_usuarios->Verificar_Logueo_Usuario($usuario, $clave);
	
		$usuario2 = "";
		$clave2 = "";
		$nombre = "";
		$apellido = "";
		$tipo = "";
	
		if($res)
		{
			$row = mysql_fetch_assoc($res);
			$usuario2 = strtolower($row["LOGIN"]);
			$clave2 = $row["PASSWORD"];
			$nombre = $row["NOMBRE"];
			$apellido = $row["APELLIDO"];
			$tipo = $row["TIPO"];
		}
	
		if($usuario2 == $usuario && $clave == $clave2 && $usuario != "" && $clave != "" && $tipo != 0)
		{
				$_SESSION["autentificado"]= "SI";
				$_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
				$_SESSION['username'] = $usuario;
				$_SESSION['nombre'] = $nombre;
				$_SESSION['apellido'] = $apellido;
				$_SESSION['tipo_usuario'] = $tipo;
echo @"<META HTTP-EQUIV='refresh' CONTENT='0; URL=$PHP_SELF'>";

		}
		else
		{
			echo "<script>alert('USUARIO O CLAVE INCORRECTOS');</script>";
			echo @"<META HTTP-EQUIV='refresh' CONTENT='0; URL=index.php'>";
		}
	
	}
	
	if(isset($_SESSION['nombre']) && !isset($_POST['salir_sesion']))
	{
	?>
	<?php 
		$nombre = $_SESSION['nombre'];
		$apellido = $_SESSION['apellido'];
		$tipo_usuario = $_SESSION['tipo_usuario'];
	?>
	<?php 
	}
	?>
</td>
      <td width="16%" align="right" valign="middle"><form action="http://concesionariosrd.com/" method="post" target="new">
        <input name="input" type="submit" class="btn btn-primary" value="Ir al Sitio Web" />
      </form></td>
      <td width="2%" align="left" valign="middle">&nbsp;</td>
      <td width="2%" align="left" valign="middle">
     <?php
	  if(isset($_SESSION['username']))
	  {
      ?>
<form action="cambiarpassw.php" method="post">
        <input name="input2" type="submit" class="btn btn-primary" value="Cambiar Contraseña" />
      </form>
      <?php
	  }
	  ?>
      </td>
      <td width="19%" align="left" valign="middle">
      <?php
	  if(isset($_SESSION['username']))
	  {
      ?>
      <form id="formRegresar" name="formRegresar" method="post" action="index.php">
        <input name='salir_sesion' type='hidden' value='0' />
        <input class="btn btn-primary span1" type="submit" name="regresar" id="regresar" value="Salir" />
      </form>
      <?php
	  }
	  ?>
      </td>
    </tr></table>