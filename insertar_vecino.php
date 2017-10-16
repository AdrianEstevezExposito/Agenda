<? 
session_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

<head>
	<title>FORMULARIO - INSERTAR NUEVO VECINO</title>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
	body {
	font: 13px/1.6 Tahoma, sans-serif;
	background: white;
	}
	.izquierda {
	float: left;
	clear: left;
	}
	.derecha {
	float: right;
	clear: right;
	}
	ul {
	list-style: none;
	margin: 0;
	padding: 0;
	}
	#contenedor {
	background: #FFF;
	border: none;
	margin: 1em auto;
	padding: 1em;
	width: 768px;
	}
	span.requerido {
	font-size: 1.3em;
	font-weight: bold;
	color: #C00;
	}
	h2 {
	font: normal 2em arial, sans-serif;
	margin: 0;
	}
	ul li.botones {
	border-top: 2px solid #CCC;
	clear: both;
	
	float: none;
	padding: 1em 0;
	margin-top: 1em;
	text-align: right;
	width: 100%;
	}
	ul li.botones input {
	font-size: 1.3em;
	}
	ul li {
	margin: 10em 0;
	padding: 10em;
	width: 90%;
	}
	ul li label.titulo {
	font-weight: bold;
	}
	ul li div span {
	float: left;
	padding: 0.3em 0;
	}
	ul li div span.completo {
	width: 100%;
	}
	ul li div span.mitad {
	width: 50%;
	}
	ul li div span.tercio {
	width: 33%;
	}
	ul li div span.dostercios {
	width: 66%;
	}
	ul li div span label {
	display: block;
	font: normal 1.1em arial, sans-serif;
	color: #333;
	}
	ul li input {
	padding: 0.2em;
	}
	input#apellido1, input#apellido2, input#nombre, input#direccion, input#email {
	width: 260px;
	}
	input#telefono_fijo, input#movil {
	width: 135px;
	}
	/* Cambiar el color en el :hover y resaltar los campos en el :focus */
	ul li:hover {
	background-color: #FF9;
	}
	ul li.botones:hover {
	background-color: transparent;
	}
	ul li input:focus {
	border: 2px solid #E6B700;
	}
	/* Formatear el formulario a una columna */
	ul li.izquierda, ul li.derecha {
	float: none;
	width: auto;
	}
	ul li {
	overflow: hidden;
	}
	ul li label.titulo {
	float: left;
	width: 150px;
	}
	ul li div {
	margin-left: 160px;
	}
	/* Aspecto final del formulario con los mensajes de ayuda */
	h2 {
	margin-bottom: 0.3em;
	}
	ul li {
	border-top: 1px solid #CCC;
	margin: 0;
	padding: 1em;
	}
	ul li.botones {
	margin: 0;
	}
	ul li label.titulo {
	text-align: right;
	width: 100px;
	}
	ul li div {
	margin-left: 110px;
	overflow: hidden;
	}
	ul li {
	position: relative;
	}
	ul li:hover p.ayuda {
	display: block;
	margin: 0.3em;
	position: absolute;
	top: 0;
	right: 0;
	width: 150px;
	}
</style>
</head>

<body>
  
	<div id="contenedor">
	<h2>Nuevo Vecino</h2>
	<p align='right'><font color=red size=2  ><i>Recuerde: Guardar Nombre y Apellidos en min&uacute;scula y sin acentos</i></font></p>
	<form method="post" action="cod_insertar.php">
	<ul>
		<li>
			<label for="nombre"><b>DATOS DEL VECINO </b><span class="requerido"> * (Datos obligatorios)</span></label>
		<div>
			<span class="completo">
			<input id="nombre" name="nombre"/>
			<label for="nombre">Nombre </label>
			</span>
			
			<span class="completo">
			<input id="apellido1" name="apellido1"/>
			<label for="apellido1">Primer Apellido	</label>
			</span>
			
			<span class="completo">
			<input id="apellido2" name="apellido2"/>
			<label for="apellido2">Segundo Apellido	</label>
			</span>
			
			<span class="completo">
			<input id="telefono" name="telefono"/>
			<label for="telefono">Tel&eacute;fono	</label>
			</span>
			
			<span class="completo">
			<input id="id_vecino" name="id_vecino"/>
			<label for="id_vecino">Identificador de Vecino	</label>
			</span>
			
			<span class="completo">
			<input id="direccion" name="direccion"/>
			<label for="direccion">Direcci&oacute;n	</label>
			</span>
		</div>
		</li>
	   
		
		<center>
		<li class="botones">
				<input id="enviar" type="submit" value="Dar de alta" />
				
		</li>
    </ul>
    </form><ul><center>
    <li class="botones">
				<FORM ACTION="index.php" METHOD="post"> <INPUT TYPE="submit" NAME="volver" VALUE="Volver a P&aacute;gina Anterior">
		</li><ul>

</div>
</body>
</html>
