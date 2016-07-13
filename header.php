<?php
include("admin/clases.php");

$res_publicidad = $obj_publicidad->Extraer();

$num = mysql_num_rows($res_publicidad);

$g = 1; $publicidad = ""; $enlace = "";

if($num)
{
	$foto = rand(1, $num);
	while($row_publicidad = mysql_fetch_assoc($res_publicidad))
	{
		if($g == $foto)
		{
			$publicidad = $row_publicidad["IMAGEN"];
			$enlace = $row_publicidad["ENLACE"];
			break;
		}
		$g++;
	}
}
?>

<div class="row">
        <div class="col-lg-3 col-md-3 col-sm-8 col-xs-12"> 
        <a href="index.php"><img src="logo.png" width="100%" /></a>

        <div align="center" style="font-size:20px;font-family:'DIN Alternate'">Unidos selecciona su próximo automóvil nuevo.</div>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
<br />

		<?php 
		if($num)
		{
		   if($enlace)
		   { 
		 ?>
         		<a href="<?php echo $enlace; ?>" target="new">
		<?php 
			} 
		?>
        		<img src="admin/Archivos/Header/<?php echo $publicidad; ?>" width="100%"  />
		<?php 
			if($enlace)
			{ 
		?>
        		</a>
		<?php 
			} 
		}
		?>
        </div>

</div>