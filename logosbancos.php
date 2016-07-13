<!-- BANCOS -->
<br />
<div class="row" style="background-color:#999;padding:10px;border-radius:5px">
<strong style="font-size:24px;color:#FFF">BANCOS</strong>
</div>

<div class="row" style="background-color:#FFF">
<?php


$res = $obj_bancos->Extraer();

while($row = mysql_fetch_assoc($res))
{
?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-top:10px; margin-bottom:10px;" align="center">

<div class="row" style="display:table-cell;height:200px;width:100%;vertical-align:middle;background-color:#FFF"> <a href="calculadora.php?banco=<?php echo $row["ID"]; if(isset($_GET["costo"])){echo "&costo=".$_GET["costo"]; } ?>"><img src="admin/Archivos/Bancos/<?php echo $row["LOGO"]; ?>" width="70%" /></a>
</div>

</div>
<?php
}
?>


</div>