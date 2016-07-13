<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
	$("document").ready(function(){
		$( "#select_marcas" ).load( "admin/Select/marcas_bus.php" );

		$("#select_marcas").change(function(){
			var id = $("#select_marcas").val();
			$.get("admin/Select/modelos.php",{param_id:id})
			.done(function(data){
				$("#select_modelos").html(data);
			})
		})

		$("#select_modelos").change(function(){
			var id = $("#select_modelos").val();
			$.get("admin/Select/version.php",{param_id:id})
			.done(function(data){
				$("#publicacion").html(data);
			})
		})

	})
</script>

<div class="row">
    <nav class="navbar navbar-inverse" style="margin-top:20px">
<form action="detalles.php" method="get" name="form_publicaciones" class="navbar-form navbar-right" id="form_publicaciones" style="margin-right:40px" role="search">
<strong style="color:#FFF;font-size:20px">¿QUE AUTOMÓVIL BUSCAS?</strong>
  <div class="form-group">

		<select class="input input-lg" id="select_marcas" name="select_marcas">
		  <option value="0">Marca...</option>
			
		</select>

		<select class="input input-lg" id="select_modelos" name="select_modelos">
			<option value="0">Modelo...</option>

		</select>

	  <select class="input input-lg" id="publicacion" name="publicacion" onchange="document.form_publicaciones.submit()">
		  <option value="0">Versión...</option>
		</select>
  </div>
</form>
</nav>
    </div>