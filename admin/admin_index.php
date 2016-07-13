<div class="row" style="background-color:#000;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">PANEL DE ADMINISTRACIÓN DE CONCESIONARIOSRD.COM</strong>
</div>
<br>
<br>
<?php
	include("menu_principal.php");
if(isset($_SESSION['username']))
{
?>
<div class="row" style="padding:10px;border-radius:5px">
<div class="alert alert-success">
<strong style="font-size:24px;color:#666">SELECCIONE EN EL MENÚ DEL PANEL LA TAREA QUE DESEA REALIZAR</strong>
</div>
</div>
<?php
}
else
{
?>
<form style="margin-left:30px;margin-top:30px" id="form1" name="form1" method="post" action="">
          <p style="font-size:20px;font-weight:bold">Ingresar al Sitio</p>
          <p style="font-size:14px;font-weight:bold">Nombre de Usuario:</p>
          <p>
            <label for="usuarios"></label>
            <input class="input input-lg" type="text" name="usuarios" id="usuarios" />
          </p>
          <p style="font-size:14px;font-weight:bold">Contraseña:</p>
          <p>
            <label for="clave"></label>
            <input class="input input-lg" type="password" name="clave" id="clave" />
          </p>
          <p>
            <input class="btn btn-primary btn-lg" type="submit" name="button" id="button" value="Ingresar" />
          </p>
</form>
<?php
}
?>
<br>
<br>
<br>
<br>
<br>
