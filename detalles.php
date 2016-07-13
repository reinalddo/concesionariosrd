<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/png" href="admin/icon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="estilos.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="rmm-css/responsivemobilemenu.css" type="text/css"/>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="rmm-js/responsivemobilemenu.js"></script>
<!--
<script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
-->
<title>Concesionarios Rd</title>
<script>
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement("style")
 
    msViewportStyle.appendChild(
        document.createTextNode(
            "@-ms-viewport{width:auto!important}"
        )
    )
 
    document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
}
</script>
</head>

<body>
<?php
  // because new Internet Explorer develop tools don't proccess conditional comments
  $conditionalComments = '';
  if (strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 8.0') !== false) {
    $conditionalComments .= '<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>';
    $conditionalComments .= '<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>';
  }
 
  echo $conditionalComments;
?>
<div class="container">

	<?php

    include("menu.html");

	include("header.php");
	
	include("buscador.php");

	include("detallesinfo.php");

	include("modelos_publicacion.php");
	
	include("destacados.php");

	include("otrosrecomendados.php");

	include("footer.php");

	?>


</div> <!-- CONTAINER -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
