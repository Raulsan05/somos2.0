<html>
<head>
<link href='imagenes/favicon.ico' rel='shortcut icon'>
<link href="estilos/estilo.css" rel="stylesheet" type="text/css"/>
<title>SOMOS - Registro Afiliados</title>
	<script type="text/javascript">
var xajaxRequestUri="http://www.movimientodelpueblo.com/somosmp/personaspc.php";
var xajaxDebug=false;
var xajaxStatusMessages=false;
var xajaxWaitCursor=true;
var xajaxDefinedGet=0;
var xajaxDefinedPost=1;
var xajaxLoaded=false;
function xajax_actualizar(){return xajax.call("actualizar", arguments, 1);}
function xajax_cargarreg(){return xajax.call("cargarreg", arguments, 1);}
function xajax_descargarpj(){return xajax.call("descargarpj", arguments, 1);}
function xajax_cerrar(){return xajax.call("cerrar", arguments, 1);}
function xajax_cargar(){return xajax.call("cargar", arguments, 1);}
function xajax_cargar2(){return xajax.call("cargar2", arguments, 1);}
function xajax_foto(){return xajax.call("foto", arguments, 1);}
function xajax_eliminar(){return xajax.call("eliminar", arguments, 1);}
function xajax_parabarrio(){return xajax.call("parabarrio", arguments, 1);}
function xajax_paraciudad(){return xajax.call("paraciudad", arguments, 1);}
function xajax_paradepartamento(){return xajax.call("paradepartamento", arguments, 1);}
function xajax_parapuesto(){return xajax.call("parapuesto", arguments, 1);}
function xajax_paramesa(){return xajax.call("paramesa", arguments, 1);}
function xajax_mesavotacion(){return xajax.call("mesavotacion", arguments, 1);}
function xajax_puestovotacion(){return xajax.call("puestovotacion", arguments, 1);}
function xajax_barrios(){return xajax.call("barrios", arguments, 1);}
function xajax_municipios(){return xajax.call("municipios", arguments, 1);}
function xajax_departamentos(){return xajax.call("departamentos", arguments, 1);}
function xajax_refecedula(){return xajax.call("refecedula", arguments, 1);}
function xajax_llenar(){return xajax.call("llenar", arguments, 1);}
function xajax_llenar1(){return xajax.call("llenar1", arguments, 1);}
function xajax_listar(){return xajax.call("listar", arguments, 1);}
function xajax_listar2(){return xajax.call("listar2", arguments, 1);}
function xajax_referestra(){return xajax.call("referestra", arguments, 1);}
function xajax_ingresar(){return xajax.call("ingresar", arguments, 1);}
function xajax_nucleo(){return xajax.call("nucleo", arguments, 1);}
function xajax_observacion(){return xajax.call("observacion", arguments, 1);}
function xajax_ingresarobserva(){return xajax.call("ingresarobserva", arguments, 1);}
function xajax_solicitud(){return xajax.call("solicitud", arguments, 1);}
function xajax_archivos(){return xajax.call("archivos", arguments, 1);}
function xajax_confanexo(){return xajax.call("confanexo", arguments, 1);}
function xajax_elianexo(){return xajax.call("elianexo", arguments, 1);}
function xajax_ingresarsolici(){return xajax.call("ingresarsolici", arguments, 1);}
function xajax_archivosges(){return xajax.call("archivosges", arguments, 1);}
function xajax_confanexoges(){return xajax.call("confanexoges", arguments, 1);}
function xajax_elianexoges(){return xajax.call("elianexoges", arguments, 1);}
function xajax_ingresargestion(){return xajax.call("ingresargestion", arguments, 1);}
function xajax_validar(){return xajax.call("validar", arguments, 1);}
function xajax_hojasdevida(){return xajax.call("hojasdevida", arguments, 1);}
function xajax_listarefer(){return xajax.call("listarefer", arguments, 1);}
function xajax_listareferdir(){return xajax.call("listareferdir", arguments, 1);}
	</script>
	<script type="text/javascript" src="xajax/xajax_js/xajax.js"></script>
	<script type="text/javascript">
window.setTimeout(function () { if (!xajaxLoaded) { alert('Error: the xajax Javascript file could not be included. Perhaps the URL is incorrect?\nURL: xajax/xajax_js/xajax.js'); } }, 6000);
	</script>
<script type="text/javascript" src="webcam.js"></script>
<script language="javascript">
		//carga automatica
	window.onload=xajax_validar()
	function load()
	{
	webcam.set_api_url( 'test.php' );
	document.getElementById('capturar').innerHTML=webcam.get_html(300,300,180,180);
	}
	function do_upload() 
	{
		var elim = xajax_eliminar();
		document.getElementById('fotop').innerHTML = '<h1>Subiendo...</h1>';
		webcam.upload();
	}
	function my_completion_handler(msg) 
	{
		if (msg.match(/(http\:\/\/\S+)/)) 
		{
			xajax_cargar();
			webcam.reset();
		}
		else alert("PHP Error: " + msg);
	}
	//funciones de botones
	function cfotos()
	{
		var obj= document.getElementById('cfoto3')
		obj.style.display='block';
		var obj= document.getElementById('cfoto4')
		obj.style.display='block';
		var obj= document.getElementById('cfoto2')
		obj.style.display='none';
	}
	function cfotos2()
	{
		var obj= document.getElementById('cfoto2')
		obj.style.display='block';
		var obj= document.getElementById('cfoto3')
		obj.style.display='none';
		var obj= document.getElementById('cfoto4')
		obj.style.display='none';
	}
	function cfotos3()
	{
		var obj= document.getElementById('cfoto3')
		obj.style.display='none';
	}
	function enter(e) 
	{
		if (e.keyCode == 13)
		{
			xajax_llenar(xajax.getFormValues('formulario'));
			ocultar();
		}
	}
	function ocultar()
	{
		document.getElementById('tbl1').style.display='none';
		document.getElementById('ingre').style.display='none';
		document.getElementById('msg2').innerHTML='<tr><th>Cargando. Espere por favor. <img  class="cargando" src="imagenes/cargandos.gif" /></th></tr>';
	}
	function activar()
	{
		document.getElementById('fecha').disabled=false;
	}
	function adiboton()
	{
		//camara
		webcam.set_quality( 90 );
		webcam.set_shutter_sound( true );
		//Funciones de la camara
		webcam.set_hook( 'onComplete', 'my_completion_handler' );
		document.getElementById('tdboto').innerHTML ='<input style="display:inline" class="btn2" type="button" value="Tomar foto" onclick="xajax_foto();"><input style="display:inline" class="btn2" type="button" value="Subir Foto" onclick="fotos(cedula.value);">';
	}
	function hojas(cedula)
	{
		document.getElementById('subirhojavida').innerHTML="<iframe src='pdf.php'></iframe>";
		document.getElementById('hojavida').innerHTML='<input style="display:inline" class="btn2" type="button" value="Finalizar Subida" onclick="vida('+cedula+')">';
	}
	function vida(cedula)
	{
		document.getElementById('subirhojavida').innerHTML="";
		xajax_hojasdevida(cedula);
	}
	function fotos(cedula)
	{
		document.getElementById('fotop').innerHTML="<iframe src='fotopc.php'></iframe>";
		document.getElementById('tdboto').innerHTML='<input style="display:inline" class="btn2" type="button" value="Finalizar Subida" onclick="sfoto('+cedula+')">';
	}
	function sfoto(cedula)
	{
		document.getElementById('fotop').innerHTML="";
		xajax_cargar2();
		adiboton();
	}
	function subiranex(solic,i)
	{
		document.getElementById('anexos'+i).innerHTML='<tr><td><iframe src="archsoli.php?solicitud='+solic+'"></iframe></td></tr><tr><td><input type="button" id="archi" class="btn2" style="margin:0px;" value="Finalizar Subida" onclick="xajax_archivos('+solic+","+i+");"+'"></td></tr>';
	}
	function archiocu(soli,i)
	{
		document.getElementById('anexos'+i).innerHTML='<tr><td><input type="button" id="archi" class="btn2" style="margin:0px;" value="Ver Archivos Anexos" onclick="xajax_archivos('+soli+","+i+");"+'"></td></tr>';
	}
	function subiranexges(solic,i,j)
	{
		document.getElementById('anexosges'+i+'-'+j).innerHTML='<tr><td><iframe src="archges.php?solicitud='+solic+'"></iframe></td></tr><tr><td><input type="button" id="archi" class="btn2" style="margin:0px;" value="Finalizar Subida" onclick="xajax_archivosges('+solic+","+i+","+j+");"+'"></td></tr>';
	}
	function archiocuges(soli,i,j)
	{
		document.getElementById('anexosges'+i+'-'+j).innerHTML='<tr><td><input type="button" id="archi" class="btn2" style="margin:0px;" value="Ver Archivos Anexos" onclick="xajax_archivosges('+soli+","+i+","+j+");"+'"></td></tr>';
	}
	function expandir(textArea)
	{
		while (
	textArea.rows > 1 &&
	textArea.scrollHeight < textArea.offsetHeight
){
	textArea.rows--;
}

while (textArea.scrollHeight > textArea.offsetHeight)
{
	textArea.rows++;
}
textArea.rows++
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
<div class="icono"><h1>Registro Afiliados</h1></div>
<div id="mensaje">Ingrese la Cedula del Afiliado.</div><br>
<form class="personaspc" id="formulario" >
</form>
<br>
<br>
<div id="referidost"></div>
<br>
<div id="observac">
</div>
<br>
<div id="solicit">
</div>
<br>
<div id="nucleof">
</div>
</div>
<div class="piedpag">
</div>
</div>
</body>
</html>