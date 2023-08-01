<html>
<head>
<link href='imagenes/favicon.ico' rel='shortcut icon'>
<link href="estilos/estilo.css" rel="stylesheet" type="text/css"/>
<title>SOMOS - Consulta Inscritos</title>
	<script type="text/javascript">
var xajaxRequestUri="http://www.movimientodelpueblo.com/somosmp/consureferidos.php";
var xajaxDebug=false;
var xajaxStatusMessages=false;
var xajaxWaitCursor=true;
var xajaxDefinedGet=0;
var xajaxDefinedPost=1;
var xajaxLoaded=false;
function xajax_cerrar(){return xajax.call("cerrar", arguments, 1);}
function xajax_llenar(){return xajax.call("llenar", arguments, 1);}
function xajax_llenar1(){return xajax.call("llenar1", arguments, 1);}
function xajax_listarefer(){return xajax.call("listarefer", arguments, 1);}
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
	function enter(e) 
	{
		if (e.keyCode == 13)
		{
			xajax_llenar1(xajax.getFormValues('formulario'));
		}
	}
	function mostrar(id)
	{
		switch (id)
		{
			case 1:
			case 2:
			case 3:
			case 10:
			document.getElementById('consult').innerHTML='<input type="text" name="patron" id="patron" onkeypress="enter(event);" class="sperfil2" />';
			break;
			case 4:
			document.getElementById('consult').innerHTML='<select name="patron" id="patron" class="sperfil2"></select>';
			xajax_llenar(4);
			break;
			case 5:
			document.getElementById('consult').innerHTML='<select name="patron" id="patron" class="sperfil2"></select>';
			xajax_llenar(5);
			break;
			case 6:
			document.getElementById('consult').innerHTML='<select name="patron" id="patron" class="sperfil2"></select>';
			xajax_llenar(6);
			break;
			case 7:
			document.getElementById('consult').innerHTML='<select name="patron" id="patron" class="sperfil2"></select>';
			xajax_llenar(7);
			break;
			case 8:
			document.getElementById('consult').innerHTML='<input type="text" name="patron" id="patron" style="visibility:hidden" value=8 />';
			xajax_llenar(8);
			break;
			case 9:
			document.getElementById('consult').innerHTML='<table class="tregis">\
			<tr><th colspan="2">Seleccione las opciones de la consulta multiple</th></tr>\
			<tr><td><label><input type="checkbox" name="busqueda1" id="busqueda1" onclick="mostrar2(1);" />Por Cedula</label></td>\
				<td><label><input type="checkbox" name="busqueda2" id="busqueda2" onclick="mostrar2(2);" />Por Nombre</label></td></tr>\
			<tr><td><label><input type="checkbox" name="busqueda3" id="busqueda3" onclick="mostrar2(3);" />Por Apellido</label></td>\
				<td><label><input type="checkbox" name="busqueda4" id="busqueda4" onclick="mostrar2(4);" />Por Profesion</label></td></tr>\
			<tr><td><label><input type="checkbox" name="busqueda5" id="busqueda5" onclick="mostrar2(5);" />Por Rol Politico</label></td>\
				<td><label><input type="checkbox" name="busqueda6" id="busqueda6" onclick="mostrar2(6);" />Por Rol Estrategico</label></td></tr>\
			<tr><td><label><input type="checkbox" name="busqueda7" id="busqueda7" onclick="mostrar2(7);" />Por Barrio</label></td>\
				<td><label><input type="checkbox" name="busqueda12" id="busqueda12" onclick="mostrar2(12);" />Por Referido Estrategico</label></td></tr>\
			<tr><td><label><input type="checkbox" name="busqueda13" id="busqueda13" onclick="mostrar2(13);" />Usuario que Actualiza</label></td>\
				<td><label><input type="checkbox" name="busqueda15" id="busqueda15" onclick="mostrar2(15);" />Fecha Actualizacion</label></td></tr>\
			<tr><td id="consult2" colspan="2" style="text-align:center;" ></td></tr></table>';
			break;
			case 11:
			case 14:
			case 15:
			document.getElementById('consult').innerHTML='<input class="sperfil3" type="date" name="patron" id="patron" onkeypress="enter(event);" value="2023-07-31"/>';
			break;
			case 12:
			document.getElementById('consult').innerHTML='<select name="patron" id="patron" class="sperfil2"></select>';
			xajax_llenar(12);
			break;
			case 13:
			document.getElementById('consult').innerHTML='<select name="patron" id="patron" class="sperfil2"></select>';
			xajax_llenar(13);
			break;
		}
	}
	function mostrar2(id)
	{
		switch (id)
		{
		case 1:
			var hijo=document.createElement('input');
			hijo.setAttribute('type', 'text');
			hijo.setAttribute('name', 'patron1');
			hijo.setAttribute('id', 'patron1');
			hijo.setAttribute('class', 'sperfil2');
			var hijo2=document.createElement('div');
			hijo2.setAttribute('id', 'divpatron1');
			hijo2.innerHTML="Cedula: ";
			hijo2.appendChild(hijo);
			if(document.getElementById('busqueda1').checked)
			{
				document.getElementById('consult2').appendChild(hijo2);
			}
			else
			{
				var quitar=document.getElementById('divpatron1');
				document.getElementById('consult2').removeChild(quitar);
			}
		break;
		case 2:
			var hijo=document.createElement('input');
			hijo.setAttribute('type', 'text');
			hijo.setAttribute('name', 'patron2');
			hijo.setAttribute('id', 'patron2');
			hijo.setAttribute('class', 'sperfil2');
			var hijo2=document.createElement('div');
			hijo2.setAttribute('id', 'divpatron2');
			hijo2.innerHTML="Nombre: ";
			hijo2.appendChild(hijo);
			if(document.getElementById('busqueda2').checked)
			{
				document.getElementById('consult2').appendChild(hijo2);
			}
			else
			{
				var quitar=document.getElementById('divpatron2');
				document.getElementById('consult2').removeChild(quitar);
			}
		break;
		case 3:
			var hijo=document.createElement('input');
			hijo.setAttribute('type', 'text');
			hijo.setAttribute('name', 'patron3');
			hijo.setAttribute('id', 'patron3');
			hijo.setAttribute('class', 'sperfil2');
			var hijo2=document.createElement('div');
			hijo2.setAttribute('id', 'divpatron3');
			hijo2.innerHTML="Apellido: ";
			hijo2.appendChild(hijo);
			if(document.getElementById('busqueda3').checked)
			{
				document.getElementById('consult2').appendChild(hijo2);
			}
			else
			{
				var quitar=document.getElementById('divpatron3');
				document.getElementById('consult2').removeChild(quitar);
			}
		break;
		case 4:
			var hijo=document.createElement('select');
			hijo.setAttribute('name', 'patron4');
			hijo.setAttribute('id', 'patron4');
			hijo.setAttribute('class', 'sperfil2');
			var hijo2=document.createElement('div');
			hijo2.setAttribute('id', 'divpatron4');
			hijo2.innerHTML="Profesion: ";
			hijo2.appendChild(hijo);
			if(document.getElementById('busqueda4').checked)
			{
				document.getElementById('consult2').appendChild(hijo2);
				xajax_llenar(4);
			}
			else
			{
				var quitar=document.getElementById('divpatron4');
				document.getElementById('consult2').removeChild(quitar);
			}
		break;
		case 5:
			var hijo=document.createElement('select');
			hijo.setAttribute('name', 'patron5');
			hijo.setAttribute('id', 'patron5');
			hijo.setAttribute('class', 'sperfil2');
			var hijo2=document.createElement('div');
			hijo2.setAttribute('id', 'divpatron5');
			hijo2.innerHTML="Rol Politico: ";
			hijo2.appendChild(hijo);
			if(document.getElementById('busqueda5').checked)
			{
				document.getElementById('consult2').appendChild(hijo2);
				xajax_llenar(5);
			}
			else
			{
				var quitar=document.getElementById('divpatron5');
				document.getElementById('consult2').removeChild(quitar);
			}
		break;
		case 6:
			var hijo=document.createElement('select');
			hijo.setAttribute('name', 'patron6');
			hijo.setAttribute('id', 'patron6');
			hijo.setAttribute('class', 'sperfil2');
			var hijo2=document.createElement('div');
			hijo2.setAttribute('id', 'divpatron6');
			hijo2.innerHTML="Rol Estrategico: ";
			hijo2.appendChild(hijo);
			if(document.getElementById('busqueda6').checked)
			{
				document.getElementById('consult2').appendChild(hijo2);
				xajax_llenar(6);
			}
			else
			{
				var quitar=document.getElementById('divpatron6');
				document.getElementById('consult2').removeChild(quitar);
			}
		break;
		case 7:
			var hijo=document.createElement('select');
			hijo.setAttribute('name', 'patron7');
			hijo.setAttribute('id', 'patron7');
			hijo.setAttribute('class', 'sperfil2');
			var hijo2=document.createElement('div');
			hijo2.setAttribute('id', 'divpatron7');
			hijo2.innerHTML="Barrio: ";
			hijo2.appendChild(hijo);
			if(document.getElementById('busqueda7').checked)
			{
				document.getElementById('consult2').appendChild(hijo2);
				xajax_llenar(7);
			}
			else
			{
				var quitar=document.getElementById('divpatron7');
				document.getElementById('consult2').removeChild(quitar);
			}
		break;
		case 12:
			var hijo=document.createElement('select');
			hijo.setAttribute('name', 'patron12');
			hijo.setAttribute('id', 'patron12');
			hijo.setAttribute('class', 'sperfil2');
			var hijo2=document.createElement('div');
			hijo2.setAttribute('id', 'divpatron12');
			hijo2.innerHTML="Rol Estrategico: ";
			hijo2.appendChild(hijo);
			if(document.getElementById('busqueda12').checked)
			{
				document.getElementById('consult2').appendChild(hijo2);
				xajax_llenar(12);
			}
			else
			{
				var quitar=document.getElementById('divpatron12');
				document.getElementById('consult2').removeChild(quitar);
			}
		break;
		case 13:
			var hijo=document.createElement('select');
			hijo.setAttribute('name', 'patron13');
			hijo.setAttribute('id', 'patron13');
			hijo.setAttribute('class', 'sperfil2');
			var hijo2=document.createElement('div');
			hijo2.setAttribute('id', 'divpatron13');
			hijo2.innerHTML="Usuario que Digita: ";
			hijo2.appendChild(hijo);
			if(document.getElementById('busqueda13').checked)
			{
				document.getElementById('consult2').appendChild(hijo2);
				xajax_llenar(13);
			}
			else
			{
				var quitar=document.getElementById('divpatron13');
				document.getElementById('consult2').removeChild(quitar);
			}
		break;
		case 15:
			var hijo=document.createElement('input');
			hijo.setAttribute('type', 'date');
			hijo.setAttribute('name', 'patron15');
			hijo.setAttribute('id', 'patron15');
			hijo.setAttribute('class', 'sperfil2');
			hijo.setAttribute('value', '2023-07-31');
			var hijo2=document.createElement('div');
			hijo2.setAttribute('id', 'divpatron15');
			hijo2.innerHTML="Fecha Actualizacion: ";
			hijo2.appendChild(hijo);
			if(document.getElementById('busqueda15').checked)
			{
				document.getElementById('consult2').appendChild(hijo2);
			}
			else
			{
				var quitar=document.getElementById('divpatron15');
				document.getElementById('consult2').removeChild(quitar);
			}
		break;
		}
	}
	function cargar(id,valor)
	{
		if(id=='4') 
		{
			if (document.getElementById('patron4').innerHTML=="")
			{
				document.getElementById('patron4').innerHTML=valor;
			}
		}

		if(id=='5') 
		{
			if (document.getElementById('patron5').innerHTML=="")
			{
				document.getElementById('patron5').innerHTML=valor;
			}
		}
		if(id=='6') 
		{
			if (document.getElementById('patron6').innerHTML=="")
			{
				document.getElementById('patron6').innerHTML=valor;
			}
		}
		if(id=='7')
		{
			if (document.getElementById('patron7').innerHTML=="")
			{
				document.getElementById('patron7').innerHTML=valor;
			}
		}
		if(id=='12')
		{
			if (document.getElementById('patron12').innerHTML=="")
			{
				document.getElementById('patron12').innerHTML=valor;
			}
		}
		if(id=='13')
		{
			if (document.getElementById('patron13').innerHTML=="")
			{
				document.getElementById('patron13').innerHTML=valor;
			}
		}
	}
function ocultar()
{
	document.getElementById('ingre').style.display='none';
	document.getElementById('tbl1').style.display='none';
	document.getElementById('msg2').style.display='none';
	document.getElementById('mensaje2').innerHTML='<tr><th>Cargando. Espere por favor. <img  class="cargando" src="imagenes/cargandos.gif" /></th></tr>';
}
function ocultar2()
{
	document.getElementById('tabla2').innerHTML='<tr><th>Cargando. Espere por favor. <img  class="cargando" src="imagenes/cargandos.gif" /></th></tr>';
}
var ventana 
var cont=0
var titulopordefecto = "SomosMp"
function afoto(cual,titulo) 
{ 
	if(cont==1){ventana.close();ventana=null} 
	if(titulo==null){titulo=titulopordefecto} 
	ventana=window.open('','ventana','toolbar=0,scrollbars=0,statusbar=0,menubar=0,resizable=0, Location=0 width=500,height=500') 
	ventana.document.write('<html><head><title>')
	ventana.document.write(titulo + '</title></head><body style=" overflow:hidden; margin: 0px;" ; onUnload="opener.cont=0">')
	ventana.document.write('<img id="imagen" src="' + cual + '" onLoad=" opener.redimensionar(this.width, this.height);" />')
	ventana.document.write('</body></html>')
	ventana.document.close() 
	cont++ 
}
function redimensionar(ancho,alto) 
{ 
	if (screen.width>ancho+58 && screen.height>alto+58)
	{
		ancho = ventana.document.getElementsByTagName('img').item(0).offsetWidth ;
		alto=ventana.document.getElementsByTagName('img').item(0).offsetHeight;
		ventana.resizeTo(ancho+12,alto+58);
		//alert("an: "+ancho+" al:"+alto);
	}
	else
	{
		if (screen.height<=alto+58)
		{
		alto=screen.height-158;
		ventana.document.getElementById('imagen').setAttribute('style', 'height:'+alto+'px;');
		}
		else
		{
		ancho=screen.width-158;
		ventana.document.getElementById('imagen').setAttribute('style', 'width:'+ancho+'px;');
		}
		//alert("an2: "+ancho+" al2:"+alto);
		ancho = ventana.document.getElementsByTagName('img').item(0).offsetWidth ;
		alto = ventana.document.getElementsByTagName('img').item(0).offsetHeight;
		redimensionar(ancho,alto);
		//alert("an3: "+ancho+" al3:"+alto);
	}
	ventana.moveTo((screen.width-ancho)/2,(screen.height-alto)/2);
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
<div class="icono"><h1>Consultar Referidos</h1></div>
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