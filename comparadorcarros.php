<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
/***********************************************************************************/
	$("document").ready(function(){
		$( "#select_marcas1" ).load( "admin/Select/marcas_bus.php" );

		$("#select_marcas1").change(function(){
			var id = $("#select_marcas1").val();
			$.get("admin/Select/modelos.php",{param_id:id})
			.done(function(data){
				$("#select_modelos1").html(data);
			})
		})

		$("#select_modelos1").change(function(){
			var id = $("#select_modelos1").val();
			$.get("admin/Select/version.php",{param_id:id})
			.done(function(data){
				$("#publicacion1").html(data);
			})
		})

		$("#publicacion1").change(function(){
		$( "#comparador0" ).load( "admin/Select/datos0.php" );
			var id = $("#publicacion1").val();
			$.get("admin/Select/datos123.php",{param_id:id})
			.done(function(data){
				$("#comparador1").html(data);
			})
		})


	})
/***********************************************************************************/
	$("document").ready(function(){
		$( "#select_marcas2" ).load( "admin/Select/marcas_bus.php" );

		$("#select_marcas2").change(function(){
			var id = $("#select_marcas2").val();
			$.get("admin/Select/modelos.php",{param_id:id})
			.done(function(data){
				$("#select_modelos2").html(data);
			})
		})

		$("#select_modelos2").change(function(){
			var id = $("#select_modelos2").val();
			$.get("admin/Select/version.php",{param_id:id})
			.done(function(data){
				$("#publicacion2").html(data);
			})
		})

		$("#publicacion2").change(function(){
		$( "#comparador0" ).load( "admin/Select/datos0.php" );
			var id = $("#publicacion2").val();
			$.get("admin/Select/datos123.php",{param_id:id})
			.done(function(data){
				$("#comparador2").html(data);
			})
		})

	})
/***********************************************************************************/
	$("document").ready(function(){
		$( "#select_marcas3" ).load( "admin/Select/marcas_bus.php" );

		$("#select_marcas3").change(function(){
			var id = $("#select_marcas3").val();
			$.get("admin/Select/modelos.php",{param_id:id})
			.done(function(data){
				$("#select_modelos3").html(data);
			})
		})

		$("#select_modelos3").change(function(){
			var id = $("#select_modelos3").val();
			$.get("admin/Select/version.php",{param_id:id})
			.done(function(data){
				$("#publicacion3").html(data);
			})
		})

		$("#publicacion3").change(function(){
		$( "#comparador0" ).load( "admin/Select/datos0.php" );

			var id = $("#publicacion3").val();
			$.get("admin/Select/datos123.php",{param_id:id})
			.done(function(data){
				$("#comparador3").html(data);
			})

		})

	})
/***********************************************************************************/
</script>

<div class="row">

<table class="table" width="100%">
  <tr>
    <td class="col-lg-3"><strong>Características</strong>&nbsp;</td>
    <td class="col-lg-3">
		<select class="input input-lg" id="select_marcas1" name="select_marcas1">
		  <option value="0">Marca...</option>
		</select>
    &nbsp;</td>
    <td class="col-lg-3">
		<select class="input input-lg" id="select_marcas2" name="select_marcas2">
		  <option value="0">Marca...</option>
		</select>
    &nbsp;</td>
    <td class="col-lg-3">
		<select class="input input-lg" id="select_marcas3" name="select_marcas3">
		  <option value="0">Marca...</option>
		</select>
    &nbsp;</td>
  </tr>
  <tr>
    <td class="col-lg-3">&nbsp;</td>
    <td class="col-lg-3">
		<select class="input input-lg" id="select_modelos1" name="select_modelos1">
			<option value="0">Modelo...</option>
		</select>
	&nbsp;</td>
    <td class="col-lg-3">
		<select class="input input-lg" id="select_modelos2" name="select_modelos2">
			<option value="0">Modelo...</option>
		</select>
    &nbsp;</td>
    <td class="col-lg-3">
		<select class="input input-lg" id="select_modelos3" name="select_modelos3">
			<option value="0">Modelo...</option>
		</select>
    &nbsp;</td>
  </tr>
  <tr>
    <td class="col-lg-3">&nbsp;</td>
    <td class="col-lg-3">
	  <select class="input input-lg" id="publicacion1" name="publicacion1">
		  <option value="0">Versión...</option>
		</select>
    &nbsp;</td>
    <td class="col-lg-3">
	  <select class="input input-lg" id="publicacion2" name="publicacion2">
		  <option value="0">Versión...</option>
		</select>
    &nbsp;</td>
    <td class="col-lg-3">
	  <select class="input input-lg" id="publicacion3" name="publicacion3">
		  <option value="0">Versión...</option>
		</select>
    &nbsp;</td>
  </tr>

  <tr>
    <td class="col-lg-3" id="comparador0">&nbsp;</td>
    <td class="col-lg-3" id="comparador1"><strong style="font-size:24px;vertical-align:top">1</strong><img src="imagenes/auto_guia.jpg" width="70%" />&nbsp;</td>
    <td class="col-lg-3" id="comparador2"><strong style="font-size:24px;vertical-align:top">2</strong><img src="imagenes/auto_guia.jpg" width="70%" />&nbsp;</td>
    <td class="col-lg-3" id="comparador3"><strong style="font-size:24px;vertical-align:top">3</strong><img src="imagenes/auto_guia.jpg" width="70%" />&nbsp;</td>
  </tr>

</table>


</div>