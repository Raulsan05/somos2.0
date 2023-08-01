<html>
<head>
<link href='imagenes/favicon.ico' rel='shortcut icon'>
<link href="estilos/estilo.css" rel="stylesheet" type="text/css"/>
<title>SOMOS - Consulta Inscritos</title>
	<script type="text/javascript">
var xajaxRequestUri="http://www.movimientodelpueblo.com/somosmp/indicador.php";
var xajaxDebug=false;
var xajaxStatusMessages=false;
var xajaxWaitCursor=true;
var xajaxDefinedGet=0;
var xajaxDefinedPost=1;
var xajaxLoaded=false;
function xajax_cerrar(){return xajax.call("cerrar", arguments, 1);}
function xajax_llenar(){return xajax.call("llenar", arguments, 1);}
function xajax_listar(){return xajax.call("listar", arguments, 1);}
function xajax_validar(){return xajax.call("validar", arguments, 1);}
	</script>
	<script type="text/javascript" src="xajax/xajax_js/xajax.js"></script>
	<script type="text/javascript">
window.setTimeout(function () { if (!xajaxLoaded) { alert('Error: the xajax Javascript file could not be included. Perhaps the URL is incorrect?\nURL: xajax/xajax_js/xajax.js'); } }, 6000);
	</script>
<script language="javascript">
		//carga automatica
	window.onload=xajax_validar();
function ocultar()
{
	document.getElementById('ingre').style.display='none';
	document.getElementById('tbl1').style.display='none';
	document.getElementById('msg2').style.display='none';
	document.getElementById('mensaje2').innerHTML='<tr><th>Cargando. Espere por favor. <img  class="cargando" src="imagenes/cargandos.gif" /></th></tr>';
}
</script>
</head>
<body>
<div class="divbody">
<div class="panel1">
<div class='fondomenu'><nav>
	<ul id='menu'>
		<li><a href='inicio.php'>Inicio</a></li>
		<li><a  onclick='menus(1)'>Inscritos</a>
			<ul id='ul1'>
				<li class='sub'><a href='personaspc.php'>Personas</a></li>
				<li class='sub'><a href='personajes.php'>Personajes</a></li>
			</ul>
		</li>
		<li><a onclick='menus(2)'>Consultas</a>
			<ul id='ul2'>
				<li class='sub'><a href='consuinscritos.php'>Personas</a></li>
				<li class='sub'><a href='consusolicitudes.php'>Solicitudes</a></li>
				<li class='sub'><a href='consuobservaciones.php'>Observaciones</a></li>
				<li class='sub'><a href='indicador.php'>Indicadores</a></li>
				<li class='sub'><a href='consureferidos.php'>Referidos Barrio</a></li>
			</ul>
		</li>
		<li><a onclick='menus(4)'>Listados</a>
			<ul id='ul4'>
				<li class='sub'><a href='listainscritos.php'>Personas</a></li>
				<li class='sub'><a href='listasolicitudes.php'>Solicitudes</a></li>
				<li class='sub'><a href='listaobservaciones.php'>Observaciones</a></li>
				<li class='sub'><a href='listainscritosfiesta.php'>Fiesta Familia</a></li>
			</ul>
		</li>
		<li><a onclick='menus(6)'>Otros</a>
			<ul id='ul6'>
				<li class='sub2'><a href='infogramas.php'>Infogramas</a></li>
				<li class='sub2'><a href='seguimientomedios.php'>Seguimiento de Medios</a></li>
				<li class='sub2'><a href='votacion.php'>Votacion 2011</a></li>
			</ul>
		</li>
		<li><a onclick='menus(5)'>Bases de Datos</a>
			<ul id='ul5'><li class='sub2'><a href='basesdatos.php?id=1'>Docentes</a></li><li class='sub2'><a href='basesdatos.php?id=2'>Comerciantes Centro Comercial</a></li><li class='sub2'><a href='basesdatos.php?id=4'>Pensionados</a></li><li class='sub2'><a href='basesdatos.php?id=5'>Pescadores</a></li><li class='sub2'><a href='basesdatos.php?id=6'>Ganaderos</a></li><li class='sub2'><a href='basesdatos.php?id=7'>Transportadores</a></li><li class='sub2'><a href='basesdatos.php?id=8'>Hoteleros</a></li><li class='sub2'><a href='basesdatos.php?id=9'>Mototaxistas</a></li><li class='sub2'><a href='basesdatos.php?id=10'>Restaurantes Y Cafeterias</a></li><li class='sub2'><a href='basesdatos.php?id=11'>Gastro Bares</a></li><li class='sub2'><a href='basesdatos.php?id=12'>Docentes Privados</a></li><li class='sub2'><a href='basesdatos.php?id=13'>Profesionales De La Salud</a></li><li class='sub2'><a href='basesdatos.php?id=14'>Juntas Acciones Comunales</a></li><li class='sub2'><a href='basesdatos.php?id=15'>Asociaciones</a></li><li class='sub2'><a href='basesdatos.php?id=16'>Clubes Deportivos</a></li><li class='sub2'><a href='basesdatos.php?id=17'>Jovenes Lideres</a></li><li class='sub2'><a href='basesdatos.php?id=18'>Profesionales De Derecho</a></li><li class='sub2'><a href='basesdatos.php?id=19'>Comerciantes Informales</a></li><li class='sub2'><a href='basesdatos.php?id=20'>Recicladores</a></li><li class='sub2'><a href='basesdatos.php?id=21'>Lideres Religiosos</a></li><li class='sub2'><a href='basesdatos.php?id=22'>Sector Bancario</a></li><li class='sub2'><a href='basesdatos.php?id=23'>Asociacion De Padres De Familia</a></li><li class='sub2'><a href='basesdatos.php?id=24'>Deportistas  De  Motos</a></li><li class='sub2'><a href='basesdatos.php?id=25'></a></li><li class='sub2'><a href='basesdatos.php?id=26'>Central De Abastos</a></li><li class='sub2'><a href='basesdatos.php?id=27'></a></li><li class='sub2'><a href='basesdatos.php?id=28'></a></li>	</ul>
		</li><li><a  onclick='menus(3)'>Sistema</a><ul id='ul3'><li class='sub2'><a href='editar.php'>Editar Cuenta</a></li><li class='sub2'><a href='perfiles.php'>Editar Perfiles</a></li><li class='sub2'><a href='parametros.php'>Parametros del Sistema</a></li><li class='sub2'><a href='registro.php'>Registrar Usuarios</a></li></ul></li></ul></nav></div><div class='indi'><table class="tindi" border="1"><tr><td colspan="4">FIDELIZADOS</td></tr><tr><td>ROL</td><td>TOTAL</td><td>SI</td><td>NO</td></tr><tr><td><img src="imagenes/no.gif" />O VOLUNTARIOS</td><td>36270</td><td>15966</td><td>20304</td></tr><tr><td><img src="imagenes/voluntarios.gif" />OLUNTARIO PROYECTO 2014</td><td>7108</td><td>295</td><td>6813</td></tr><tr><td><img src="imagenes/todos.gif" />ODOS</td><td>43378</td><td>16261</td><td>27117</td></tr></table></div><script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script type="text/JavaScript">
var cuenta=0
var texto="  .:: "+document.title+" ::.  "
var posicion = 0
/*function scrolltexto () {
document.title=texto.substring (cuenta,texto.length)+ texto.substring(0,cuenta)
if (cuenta <texto.length){ cuenta ++
}else{
cuenta=0
}
setTimeout("scrolltexto()",500)
}
scrolltexto ()*/
function menus(id)
{
	switch (id)
	{
		case 1:
		document.getElementById('ul1').style.display='block';
		document.getElementById('ul1').style.position='absolute';
		//document.getElementById('ul1').style.top='40px';
		break;
		case 2:
		document.getElementById('ul2').style.display='block';
		document.getElementById('ul2').style.position='absolute';
		//document.getElementById('ul2').style.top='40px';
		break;
		case 3:
		document.getElementById('ul3').style.display='block';
		document.getElementById('ul3').style.position='absolute';
		//document.getElementById('ul3').style.top='40px';
		break;
		case 4:
		document.getElementById('ul4').style.display='block';
		document.getElementById('ul4').style.position='absolute';
		//document.getElementById('ul4').style.top='40px';
		break;
		case 5:
		document.getElementById('ul5').style.display='block';
		document.getElementById('ul5').style.position='absolute';
		break;
		case 6:
		document.getElementById('ul6').style.display='block';
		document.getElementById('ul6').style.position='absolute';
		break;
	}
}
function mueve_texto(){
   if (posicion < texto.length) 
       posicion ++;
   else
       posicion = 1;
   string_actual = texto.substring(posicion) + texto.substring(0,posicion)
   document.title = string_actual
   setTimeout("mueve_texto()",500)
} 
mueve_texto()
function piedepagina()
{
	$('.piedpag').html("<label class='tinicio'>Diseñado por Oscar Donato</label>");
}
setTimeout("piedepagina()",500)
setTimeout("xajax_validar()",200)
//piedepagina();
</script></div>
<div class="panel2">
<div id="bi"></div>
<br>
<div class="icono"><h1>Consultar Inscritos</h1></div>
<div id="mensaje">Seleccione el patron de busqueda.</div><br>
<form class="editars editarsam" id="formulario">
</form>
<br>
<br>
<div id="nucleof">
</div>
</div>
<div class="piedpag">
</div>
</div>
</body>
</html>