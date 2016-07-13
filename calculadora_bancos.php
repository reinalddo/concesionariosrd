<?php
$logo = ""; $nombre = ""; $tasa_interes = ""; $plazo = ""; $telefono = "";

if(isset($_GET["banco"]))
{
	$res = $obj_bancos->Extraer_ID($_GET["banco"]);
	$row = mysql_fetch_assoc($res);

	$logo = $row["LOGO"];
	$nombre = $row["NOMBRE"];
	$tasa_interes = $row["TASA_INTERES"];
	$plazo = $row["INICIAL"];
	$telefono = $row["MONTO_FINANCIAR"];
}

if(!isset($_GET["valor"]) && !isset($_GET["costo"]))
{
?>
<form action="" method="get" id="form_bancos">
<?php
if(isset($_GET["banco"]))
{
?>
<input name="banco" type="hidden" id="banco" value="<?php echo $_GET["banco"]; ?>" />
<?php
}
?>
<div class="row">
<br />
<br />
<br />
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<strong>Introduzca el Valor del Vehículo</strong><br />
<input name="valor" type="text" id="valor" class="input input-lg" /><br />
<input name="boton" type="submit" class="btn btn-primary btn-lg" id="boton" value="Calcular" />
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
</div>
<br />
<br />
<br />
</div>
<br />
<br />
<br />

</form>
<?php
}
else
{
	$valor = "";

	if(isset($_GET["costo"]))
	{
		$valor = $_GET["costo"];
	}
	else
	{
		$valor = $_GET["valor"];
	}
?>
<!--[if IE]>
  <style type="text/css">
    @import url(css/all-ie.css);
  </style>
<![endif]-->
<link type='text/css' href='css/general.css' rel='stylesheet' media='screen' />
<script type="text/javascript" src="js/jquery-1.3.2.min.js" ></script>
<script type='text/javascript' src='js/jquery.meio.mask.js'></script>
<script type="text/javascript" language="javascript" src="js/calculadora.js"></script>
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27849519-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

var LimiteAnual=(0/100);
var AnoMax = (0);
var ValorVehiculo = (<?php echo $valor; ?>);
var AnnualInterestRate = (<?php echo $tasa_interes; ?>);
var cuotaSeguro = (0);
</script>
<div class="row">
<div class="col-lg-7">
<br />
<br />

<img src="admin/Archivos/Bancos/<?php echo $logo; ?>" width="100%" /><br /><br />
<?php
if($telefono)
{
?>
<strong>Teléfono de Contacto: </strong> <?php echo $telefono; ?>
<?php
}
?>
</div>
<div class="col-lg-5">
  <div class="calc-container">
    <script>var _DS = ""; </script>
<br />
<br />
<br />
<br />
<br />
    <form action="" method="post" name="myform" id="myform">
<table align="right">
  <tr>
    <td><h3><strong>Tasa de Inter&eacute;s</strong></h3></td>
    <td><div class="form-select" style="float:right;">
      <select class="input input-lg" name="TasaInt" id="TasaInt"  >
        <option value="<?php echo $tasa_interes; ?>"><?php echo $tasa_interes; ?>%</option>
        <option value="<?php echo $tasa_interes; ?>">Fija por 1 a&ntilde;o <?php echo $tasa_interes; ?>%</option>
      </select>
      <input type="hidden" name="tasa_fija" id="tasa_fija" value="<?php echo $tasa_interes; ?>" />
    </div></td>
  </tr>
  <tr>
    <td><h3><strong>Valor del Veh&iacute;culo USD$</strong></h3></td>
    <td><div class="form-field" style="float:right;">
      <input type="text" size="10" class="input input-lg" name="ValorVehiculo" style="background-color:#CCC" id="ValorVehiculo" readonly="readonly" value="<?php echo $valor; ?>" onblur="CarLoanCalculator();" onchange="$('#MasDownPayment').val(this.value.replace(',','')); CarLoanCalculator(); this.value=AddComa(parseFloat(this.value.replace(',','')).toFixed(2));" />
      <input type="hidden" name="vid" readonly="readonly" value="ad61ab143223efbc24c7d2583be69251"/>
      <input type="hidden" name="Marca" readonly="readonly" value="ford"/>
      <input type="hidden" name="Modelo" readonly="readonly" value="edge"/>
      <input type="hidden" name="Vehiculo" readonly="readonly" value="EDGE SEL "/>
      <input type="hidden" name="AceptaRevisar" id="AceptaRevisar" readonly="readonly" value="0" />
    </div></td>
  </tr>
  <tr>
    <td><h3><strong>Inicial</strong></h3></td>
    <td><div class="form-field" style="float:right;">
      <input type="hidden" name="MinDownPayment" id="MinDP" readonly="readonly"/>
      <input type="text" size="10" class="input input-lg money" style="background-color:#CCC" id="auto" readonly="readonly"  name="DownPayment" />
    </div></td>
  </tr>
  <tr>
    <td><h3><strong>Agregar M&aacute;s de Inicial?</strong></h3></td>
    <td><div class="form-field" style="float:right;">
      <input type="hidden" readonly="readonly" name="MasDownPayment" id="MasDownPayment" value="0"/>
      <input type="text" size="10" id="currencyField" onblur="CarLoanCalculator();" class="input input-lg"  onclick="this.select(this.value)" onfocus="nextfield ='TuCuota';" onchange="$('#MasDownPayment').val(this.value.replace(',','')); CarLoanCalculator(); this.value=AddComa(parseFloat(this.value.replace(',','')).toFixed(2));" name="DisMasDownPayment" value="0.00"/>
    </div></td>
  </tr>
  <tr>
    <td><h3><strong>Monto a financiar</strong></h3></td>
    <td><div class="form-field" style="float:right;">
      <input type="text" size="10" class="input input-lg money" style="background-color:#CCC" id="auto" readonly="readonly" name="MontoFinansci" />
      <input type="hidden" readonly="readonly" name="MontoFinansc"/>
      <!--AQUI VA EL MONTO A FINANCIAR-->
    </div></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td><h3><strong>Plazos de Financiamiento</strong></h3></td>
    <td><div class="form-select" style="float:right;">
      <select onblur="CarLoanCalculator()" onchange="changeEvent();" class="input input-lg" onfocus="nextfield ='morgcal';" name="NumberOfPayments" id="anosfin">
      <?php 
	  for($i = 1; $i <= $plazo; $i++)
	  {
	  ?>
      <option value="<?php echo ($i*12); ?>"><?php echo $i; ?> Años</option>
      <?php
	  }
	  ?>
      <!--
        <option value="72">6 Años</option>
        <option value="60">5 Años</option>
        <option value="48">4 Años</option>
        <option value="36">3 Años</option>
        <option value="24">2 Años</option>
        <option value="12">1 Año</option>
      -->
      </select>
      <select name="InicialFijo"  id="InicialFijo" style="visibility:hidden; position:absolute" >
        <option>0.2</option>
        <option>0.15</option>
        <option>0.15</option>
        <option>0.15</option>
        <option>0.15</option>
        <option>0.15</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td><h3><strong>Cuota Mensual</strong></h3></td>
    <td><div class="form-field" style="float:right;">
      <input type="hidden" size="10" readonly="readonly" name="CuotaMensual" id="CuotaMensual" />
      <input type="text" size="10" class="input input-lg money" style="background-color:#CCC" id="auto" readonly="readonly"  name="DisCuotaMensual" onblur="CarLoanCalculator()" onchange="CarLoanCalculator()" />
    </div></td>
  </tr>
  <tr class="cuotass">
    <td ><h3>Cuota Mensual del Seguro</h3></td>
    <td><div class="form-field" style="float:right;">
      <input type="hidden" readonly="readonly" name="CuotaSeguro" value="0" />
      <style>
      .cuotass{visibility:hidden; position:absolute;}
      </style>
    </div></td>
  </tr>
  <tr class="cuotass">
    <td><h3><strong>Cuota Mensual + Seguro</strong></h3></td>
    <td><div class="form-field" style="float:right;">
      <input type="hidden" readonly="readonly" name="CuotaMasSeguro" id="CuotaMasSeguro" value="0.00"/>
      <input type="text" style="background-color:#F9F9F9" name="DisCuotaMasSeguro" id="DisCuotaMasSeguro" readonly="readonly" size="10" onblur="CarLoanCalculator();" class="glow"  value="0.00"/>
    </div></td>
  </tr>
</table>
<span style="color:#999; font-size:12px;">
<input type="hidden" readonly name="CuotaAnualExtra" id="CuotaAnualExtra"  value="0"/>
</span>

    </form>

    </div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:justify">
<br />
<br />

Las tasas de adquisición, gastos de transición, etiqueta, título y otros cargos e incentivos no están incluidos en este cálculo, que es sólo una estimación.
Las estimaciones de pago mensuales son para fines informativos y no representan una oferta de financiación por parte del vendedor de este vehículo. Se pueden aplicar otros impuestos.
<br />
    
    </div>
<br />
</div>

</div>
</div>
<br />

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23374613-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
  function Validar_CIE(Cedula) {
	if(Cedula.substr(0,3)=='PAS'){ return true; }
	Cedula = Cedula.replace(/-/gi,'');
	if(Cedula.substr(0,3)=='000'){ 
		alert("La Cédula no cumple con el dígito verificador.");
		return false;
	}
	var Verificador = parseInt(Cedula[10]);
	var suma = 0;
 	for (i=0;i<(Cedula.length-1);i++) {
    	mod = "";
        if((i % 2) == 0){mod = 1} else {mod = 2}
        res = parseInt(Cedula.substr(i,1)) * mod;
        if (res > 9) {
        	res = res.toString();
         	uno = res.substr(0,1);
         	dos = res.substr(1,1);
         	res = eval(uno) + eval(dos);
        } 
        suma += eval(res);
	}
    el_numero = (10 - (suma % 10)) % 10;
    if (el_numero == Verificador) {
          return true
	} else {
		alert("La Cédula no cumple con el dígito verificador.");
		return false;
	}
  }

function ValidarRNC(rnc){
	rnc=rnc.replace(/-/gi,'');
	var peso = ['7','9','8','6','5','4','3','2'];
    var suma = 0;
    var division = 0;
    if(rnc.length != 9){
        alert('El RNC debe tener 9 digitos Numerico');
		return false;
    }else{
        for(i=0; i<8; i++){
            //para verificar si es un dígito o no
            if(isNaN(rnc[i])){ 
				alert('Todos los Carcteres del RNC debe ser Numerico');
				return false; 
			}
            suma += (parseFloat(rnc[i]) * parseFloat(peso[i]) );
        }
        resto = suma % 11;
        digito = 0;
        
        if(resto==0){
            digito=2;
        }else if(resto == 1){
            digito=1;
        }else{ 
            digito=11 - resto;
            }if(digito != parseFloat(rnc[8]) ){
                alert('Numero de RNC Invalido');
				return false;
			}
        }  
        return true;
}

function ValidarEmail(valor){
    re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
    if(!re.exec(valor)){
		alert("La dirección de email es incorrecta.");
        return false;
    }else{
        return true;
    }
}

function ValidarRequeridos(){
	var t = true;
	$('.valin').each(function(){
		if($(this).val().trim()==''){ 
			alert('Los Campos marcados con Rojo no pueden estar Vacios');
			t = false;
			return false;
		}
	});
	return t;
}

function AceptaRevisarCredi(){
	if(confirm('Acepta que el banco revise su Historial Crediticio')){
		$('#AceptaRevisar').val(1);
	}
}

function ValidarForm(){
	if(!ValidarRequeridos()){
		return false;
	}
	if($('#cedula').length>0){
		if(!Validar_CIE($('#cedula').val().toString())){ 
			return false; 
		}
	}
	if($('#rnc').length>0){
		if(!ValidarRNC($('#rnc').val().toString())){ 
			return false; 
		}
	}
	if($('#email').length>0){
		if(!ValidarEmail($('#email').val().toString())){ 
			return false; 
		}
	}
}

$('#myform').submit(function(){
	CarLoanCalculator();
	return ValidarForm();
	return true;
});

  
  $('#bancid').change(function(){
  	$(this).parent().submit();
  });
  var cuotaextra = 1;
  var anomax = 0;
  if(cuotaextra==2){
  	$('.tcex').load('tablacex.php?a='+$('#anosfin').val()+'&max='+anomax);
	$('.cuotaex2').css({position:'absolute', visibility:'hidden'});
	$('#anosfin').change(function(){
		$('.tcex').load('tablacex.php?max='+anomax+'&a='+this.value);
  	});
  }else if(cuotaextra==1){
  	$('.cuotaex1').css({position:'absolute', visibility:'hidden'});
  }else{
  	$('.cuotaex1, .cuotaex2').css({position:'absolute', visibility:'hidden'});
  }
  CarLoanCalculator();
	$('.tab_bt>div').click(function(){
		$('.tab_bt>div').removeClass('sel');
		if($(this).attr('val')=='Pers'){
			$('.box4').load('persona.php');
			$(this).addClass('sel');
		}else if($(this).attr('val')=='Empr'){
			$('.box4').load('empresa.php');
			$(this).addClass('sel');
		}
	});
	$('.tab_bt>div.sel').click();
	
	$('.grupos').click(function(){
		window.location='./catalogo/?g='+$(this).attr('value')+'';
	});	
	$('#TasaInt').change(function(){
		AnnualInterestRate=$(this).val();
		$('#tasa_fija').val($(this).find('option:selected').text());
		changeEvent();
	});

</script>

<?php
}
?>