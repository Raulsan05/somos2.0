<html>
<head>
<link href='imagenes/favicon.ico' rel='shortcut icon'>
<link href="estilos/estilo.css" rel="stylesheet" type="text/css"/>
<title>SOMOS - INICIAR SESION</title>
	<script type="text/javascript">
var xajaxRequestUri="http://www.movimientodelpueblo.com/somosmp/login.php";
var xajaxDebug=false;
var xajaxStatusMessages=false;
var xajaxWaitCursor=true;
var xajaxDefinedGet=0;
var xajaxDefinedPost=1;
var xajaxLoaded=false;
function xajax_iniciar(){return xajax.call("iniciar", arguments, 1);}
function xajax_validar(){return xajax.call("validar", arguments, 1);}
	</script>
	<script type="text/javascript" src="xajax/xajax_js/xajax.js"></script>
	<script type="text/javascript">
window.setTimeout(function () { if (!xajaxLoaded) { alert('Error: the xajax Javascript file could not be included. Perhaps the URL is incorrect?\nURL: xajax/xajax_js/xajax.js'); } }, 6000);
	</script>
<script language="javascript">
	window.onload=xajax_validar()
function enter(e) {
    if (e.keyCode == 13) 
	{
        xajax_iniciar(xajax.getFormValues('formulario'))
    }
}
</script>
</head>
<body>
<br>
<div class="icono"><h1>Bienvenido Al Sistema SOMOS MP<br>Iniciar Sesion</h1></div>
<div id="mensaje"></div><br>
<form class="login" id="formulario">
<table>
<tr><td><label class="lini" id="us"></label></td><td><input type="text" name="usuario"/></td></tr>
<tr><td><label class="lini2" id="cp"></label></td><td><input type="password" name="contrasena" onkeypress="enter(event)"/></td></tr>
</table>
<br>
<input class="btn" type="button" value="Iniciar" onclick="xajax_iniciar(xajax.getFormValues('formulario'))">
</form>
</body>
</html>