// JavaScript Document
<!--
<!-- Begin
nextfield = "MasDownPayment"; // name of first box on page
var netscape = "";
var ver = navigator.appVersion; len = ver.length;
for(iln = 0; iln < len; iln++) if (ver.charAt(iln) == "(") break;
var netscape = (ver.charAt(iln+1).toUpperCase() != "C");

function keyDown(DnEvents) { // handles keypress
// determines whether Netscape or Internet Explorer
var k = (netscape) ? DnEvents.which : window.event.keyCode;
if (k == 13) { // enter key pressed
if (nextfield == 'morgcal') return true; // submit, we finished all fields
else { // we're not done yet, send focus to next box
eval('document.myform.' + nextfield + '.focus()');
return false;
      }
   }
}
document.onkeydown = keyDown; // work together to analyze keystrokes
if (netscape) document.captureEvents(Event.KEYDOWN|Event.KEYUP);
//  End -->

function changeEvent() {
	document.myform.InicialFijo.selectedIndex = document.myform.NumberOfPayments.selectedIndex;
	CarLoanCalculator();
	$('#TuCuota').val($('#CuotaMensual').val());
	$('#DisTuCuota').val(AddComa($('#CuotaMensual').val()));
	CarLoanCalculator();
}

function AddComa(x){
	if(isNaN(x)){ x="0.00"; }
	var x=x.toString();
	var x=x.split('.');
	var c=x[0].split('');
	var y=0; var z='';
	for(i=(c.length-1); i>-1; i--){
		if(y==3){ z=','+z; y=0; }
		z=c[i]+z;
		y++;
	}
	return z+'.'+x[1];
}

function PMT(A, C, B){
	var pmt = (A * -C * Math.pow((1 + A), B) / (1 - Math.pow((1 + A), B)));
	return pmt;
}

function CuotaExtra(Me, Ti, AM){
	var am=AM.split('-');
	var d = new Date();
	var Ce = Me/Math.pow((1+Ti), Math.round(((am[1]-d.getFullYear())*12)+(am[0]-(d.getMonth()+1))));
	return Ce;
}

//alert( PMT((14.95/100/12),(916494.4-CuotaExtra(20000,(14.95/100/12),'1-2012')),60 ));

function CarLoanCalculator()
{	
	var form = document.myform
		
	var NumberOfPayments = parseFloat(form.NumberOfPayments.value.replace(',',''));	
	
	var InicialFijo = parseFloat($('#InicialFijo').val());

	var MinDownPayment = ValorVehiculo*InicialFijo;
	form.MinDownPayment.value = MinDownPayment;
	
	
	
	var MasDownPayment = parseFloat(form.MasDownPayment.value.replace(',',''));
	if(isNaN(MasDownPayment)){ MasDownPayment=0; }
	
	var DownPayment = parseFloat(MinDownPayment)+parseFloat(MasDownPayment);
	form.DownPayment.value = 'USD$ '+AddComa(DownPayment.toFixed(2));
	form.MontoFinansci.value = 'USD$ '+AddComa((ValorVehiculo-parseFloat(DownPayment)).toFixed(2));
	
	var CuotaAnualExtra = form.CuotaAnualExtra.value;
	
	var A= (AnnualInterestRate/100/12);
	var B= NumberOfPayments*1;
	var C= ValorVehiculo-DownPayment-CuotaAnualExtra;
	
	var CuotaMensual = PMT(A,C,B);
	
	form.CuotaMensual.value = parseFloat(CuotaMensual).toFixed(2);
	form.DisCuotaMensual.value = 'USD$ '+AddComa(parseFloat(CuotaMensual).toFixed(2));
	
	var TuCuota = parseFloat(form.TuCuota.value.replace(',','')).toFixed(2);
	if(TuCuota <= (CuotaMensual*0.5) || TuCuota > CuotaMensual){
		form.TuCuota.value = TuCuota = parseFloat(CuotaMensual).toFixed(2);
		$('#MSG').html('El valor ingresado debe superar 50% de la Cuota Mensual.');
	}else{
		$('#MSG').empty();
	}
		
	if(CuotaAnualExtra>0){
		form.TuCuota.value = TuCuota = parseFloat(CuotaMensual).toFixed(2);
		
	}

	form.DisTuCuota.value = AddComa(TuCuota);
	
	if(cuotaSeguro>=0){
		$('#CuotaMasSeguro').val((parseFloat(TuCuota)+cuotaSeguro).toFixed(2));
		$('#DisCuotaMasSeguro').val(AddComa((parseFloat(TuCuota)+cuotaSeguro).toFixed(2)));
	}
	
	var PagosExtraOrd = 1
	var PlazoAnualCuotas = NumberOfPayments/12
	var CantPagosExtra = PagosExtraOrd * PlazoAnualCuotas
	
	var V= DownPayment/ValorVehiculo 
	
	var Y=  (V < InicialFijo) ? "Inicial < 15%" : 1-(V);
		
	var X= AnnualInterestRate/100/PagosExtraOrd;
	var W= CantPagosExtra*1
	
	var MontoFinc = ValorVehiculo*(Y)
	
	var E= (TuCuota / A) * (1 - Math.pow(1 + A, -B))
	var F= (TuCuota > 0) ? E : E 
	var MontoFincMensual = F
	
	var G= MontoFinc - (MontoFincMensual * 1.0)
	var H=  (G * -1.0)
	var I= (CantPagosExtra = 0) ? 0 : H
	var MontoFincExtra =  H
	
	var J= X * MontoFincExtra * Math.pow((1 + X), W) / (1 - Math.pow((1 + X), W));
	var K= (CantPagosExtra = 0) ? 0 : J
	
	var CuotaExtra =   K
	if(CuotaExtra<1){ CuotaExtra=0; }
	form.CuotaExtra.value = parseFloat(CuotaExtra).toFixed(2);
	form.DisCuotaExtra.value = 'RD$ '+AddComa(parseFloat(CuotaExtra).toFixed(2));
	$('#msgce').text(AddComa(((ValorVehiculo-DownPayment)*LimiteAnual/AnoMax).toFixed(2)));
}

(function($){
    // call setMask function on the document.ready event
      $(function(){
        $('#cedula').setMask('cep');
		$('#telefono1').setMask('phone-us');
		$('#telefono2').setMask('phone-us');
		$('#fax').setMask('phone-us');
      }
    );
  })(jQuery);
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function buttonState(){
    $(".valin").each(function(){			   
		if($(this).val() == "" ){
			$('#register').attr('disabled', 'disabled');
			return false;
		}else{
			$('#register').attr('disabled', '');
		}
    })
}

$(function(){
    $('#register').attr('disabled', 'disabled');
})

// -->