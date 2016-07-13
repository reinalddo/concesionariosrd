<?php
if(isset($_SESSION['username']))
{
?>
    <div class="row menu">
        <div class="rmm">
            <ul style="margin-left:0px">
                <li><a href='index.php'>Inicio</a></li>
                <?php
				if($_SESSION['tipo_usuario'] == 1)
				{
				?>
                <li><a href='cuerpos.php'>Cuerpos</a></li>
                <li><a href='concesionarios.php'>Concesionarios</a></li>
                <li><a href='marcas.php'>Marcas</a></li>
                <?php
				}
				?>
                <li><a href='modelos.php'>Modelos</a></li>
                <li><a href='publicaciones.php'>Publicaciones</a></li>
                <li><a href='ofertas.php'>Ofertas</a></li> 
                <?php
				if($_SESSION['tipo_usuario'] == 1)
				{
				?>
                <li><a href='publicidad.php'>Publicidad</a></li>
                <li><a href='destacados.php'>Destacados</a></li>
                <li><a href='bancos.php'>Bancos</a></li>
                <li><a href='contacto.php'>Contacto</a></li> 
                <li><a href='footer_inf.php'>Footer</a></li> 
                <?php
				}
				?>
            </ul>
        </div>
	</div>
<?php
}
?>