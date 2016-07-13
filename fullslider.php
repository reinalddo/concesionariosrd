<script>
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
  });
</script>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
<!-- *********************************************************************************************************************************************************** -->

<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  
  <div class="carousel-inner" role="listbox">

<?php

$res_fotos = $obj_fotos->Extraer($_GET['publicacion']);

$g = 0;
while($row_fotos = mysql_fetch_assoc($res_fotos))
{
?>
    <div class="item <?php if($g == 0){ ?>active<?php } ?>" style="color:666;">
      <img src="admin/Archivos/Publicaciones/<?php echo $row_fotos["IMAGEN"]; ?>"width="100%">
	</div>
<?php
$g++;
}
?>
  </div>

  <!-- Indicators -->
  <ol class="carousel-indicators" style="background-color:#666;opacity:0.5">
  
<?php
 for($i = 0; $i < $g; $i++)
 {
?>
    <li data-target="#carousel-example-generic2" data-slide-to="<?php echo $i.""; ?>" <?php if($i == 0){ ?>class="active"<?php } ?>></li>
<?php
 }
?>
<!--
    <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic2" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic2" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic2" data-slide-to="5"></li>
-->
  </ol>
<!-- -->
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- *********************************************************************************************************************************************************** -->


<!--  <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>-->
<!--      <div class="modal-body">
        ...
      </div>-->
<!--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="width:100%">
  Ver Galería en Pantalla Completa
</button>
<br>
