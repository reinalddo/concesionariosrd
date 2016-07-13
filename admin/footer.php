    <div class="row">
    <nav class="navbar navbar-inverse col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div><strong style="color:#FFF;font-size:28px">INFORMACI&Oacute;N</strong></div>
<br />
	    <div style="color:#CCC;font-size:14px"><a href="porquecarronuevo.php" style="color:#CCC">&iquest;Por qu&eacute; comprar un carro nuevo?</a></div><br />
        <div style="color:#CCC;font-size:14px"><a href="porqueusarconcesionariosrd.php" style="color:#CCC">&iquest;Por qu&eacute; usar Concesionariosrd.com?</a></div><br />
        <div style="color:#CCC;font-size:14px"><a href="usocalculadora.php" style="color:#CCC">Uso de la calculadora.</a></div><br />
        <div style="color:#CCC;font-size:14px"><a href="descripcioncarro.php" style="color:#CCC">Descripci&oacute;n de un carro.</a></div><br />
        <div style="color:#CCC;font-size:14px"><a href="quienessomos.php" style="color:#CCC">&iquest;Qui&eacute;nes Somos?</a></div><br />
    </div>


	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div><strong style="color:#FFF;font-size:28px">MI CUENTA</strong></div>
<br />
	    <div style="color:#CCC;font-size:14px">
      <?php
	  if(isset($_SESSION['username']))
	  {
      ?>
      <form id="formRegresar" name="formRegresar" method="post" action="index.php" style="margin-top:-5px">
        <input name='salir_sesion' type='hidden' value='0' />
        <input class="btn btn-link" type="submit" name="regresar" id="regresar" value="Salir" />
      </form>
      <?php
	  }
	  ?>
        </div><br />
    </div>
    

	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div><strong style="color:#FFF;font-size:28px">REDES SOCIALES</strong></div>
<br />
	    <div style="color:#CCC;font-size:14px"><img src="imagenes/facebook.png" style="max-width:40px" /> Facebook</div><br />
        <div style="color:#CCC;font-size:14px"><img src="imagenes/twitter.png" style="max-width:40px" /> Twitter</div><br />
        <div style="color:#CCC;font-size:14px"><img src="imagenes/instagram.png" style="max-width:40px" /> Instagram </div><br />
        <div style="color:#CCC;font-size:14px"><img src="imagenes/google.png" style="max-width:40px" /> Google+</div><br />
    </div>


    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <img src="logo.png" width="100%" />
        <div style="color:#FFF;text-align:justify">
            <strong>Ahorre tiempo y dinero en línea...</strong><br /><br />
            En Concesionariosrd.com usted tiene todas las herramientas para comprar un carro nuevo en un solo lugar, ¡tómese su tiempo y evalúe su próximo carro!
        </div>

    </div>

    <hr width="100%" />
    <div style="color:#FFF;margin-top:20px;margin-left:20px"><?php $copy = $obj_copyright->Extraer(); echo $copy; ?></div>
	</nav>
    </div>
<br />
