<?php
    session_start();
	include("conectar.php");	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

<style type="text/css">
	body {
		font: 13px/1.6 Tahoma, sans-serif;
		background: white;
	}
	h2 {
	font: normal 2em arial, sans-serif;
	margin: 0;
	}
	td {
		border:0;
		}
	#navegador ul{
   list-style-type: none;
   text-align: center;
	}
   #navegador li{
   display: inline;
   text-align: center;
   margin: 0 10px 0 0;
	}
	#navegador li a {
   padding: 2px 7px 2px 7px;
   color: #666;
   background-color: #C3EDD6;
   border: 1px solid #ccc;
   text-decoration: none;
	}
	#navegador li a:hover{
   background-color: #547362;
   color: #ffffff;
	}
</style>




<html>

	<title>MEN&Uacute; PRINCIPAL ADMINISTRADOR</title>
		<body bgcolor="#66FF99">
<br>
	<body>

		<table align="center" border=0  width="800" height="80">
		    <TR>         
			   <TD align="center"><b>
			   <TD><center><font size=5><b><u>CONSULTA DE VECINOS</u></b></h2></center></TD>
			   <TD align="center"><b>
			   <TD></TD> 
			</TR> 
		
			   <TD><center><img border="0" src="imagenes/gato.jpg" width="90" height="90"></b></center></TD> 
			   <TD><center><font size=3><b></b></h2></center></TD> 
			   <TD><center><img border="0" src="imagenes/rompetechos.jpg" width="70" height="100"></center></TD> 
			</TR> 
			<TR>                    
			   <TD></TD> 
			   <TD><center><font size=4>Pulse el &aacute;rea que quiere gestionar</font></center></TD> 
			</TR> 
		</TABLE>
		<br><br>
		<table align='center' border=0>
		  <TR>
		    
			  <TD align='center'><FORM ACTION='buscar_vecino.php' METHOD='post'><INPUT TYPE='submit' NAME='ver' class='botones' VALUE='Buscar Vecino' style='background-color: #A4B0E1; width:220px; height:25px' ></FORM><img border='0' src='imagenes/buscar.png' width='90' height='90'></TD>			  
			 <TD align='center'><FORM ACTION='insertar_vecino.php' METHOD='post'><INPUT TYPE='submit' class='botones' NAME='insertar' VALUE='Insertar Nuevo Vecino' style='background-color: #A4B0E1; width:220px; height:25px'></FORM><img border='0' src='imagenes/agregar.png' width='90' height='90'></TD>
		     <TD align='center'><FORM ACTION='buscar_modificar_vecino.php' METHOD='post'><INPUT TYPE='submit' class='botones' NAME='modificar' VALUE='Modificar/Eliminar Vecino' style='background-color: #A4B0E1; width:200px; height:25px'></FORM><img border='0' src='imagenes/administracion.png' width='100' height='90'></TD>   
		     
		  </TR>
		<!--  <TR>
			<TD align='center'><FORM ACTION='buscador_clientes.php' METHOD='post'><INPUT TYPE='submit' NAME='crear' class='botones' VALUE='Clientes' style='background-color: #A4B0E1; width:200px; height:25px' ></FORM><img border='0' src='imagenes/cliente.png' width='90' height='90'></TD>		
			<TD align='center'><FORM ACTION='buscador_referencia.php' METHOD='post'><INPUT TYPE='submit' class='botones' NAME='LISTADO DE PRODUCTOS' VALUE='Productos' style='background-color: #A4B0E1; width:200px; height:25px'></FORM><img border='0' src='imagenes/4.png' width='120' height='90'></TD>  
            <TD align='center'><FORM ACTION='area_trabajo.php' METHOD='post'><INPUT TYPE='submit' class='botones' NAME='area_trabajo' VALUE='&Aacute;rea Orden de Trabajo' style='background-color: #A4B0E1; width:200px; height:25px'></FORM><img border='0' src='imagenes/trabaja.png' width='90' height='90'></TD> 			  
		    </TR> !-->
		</TABLE>
   	
	</body>


<!--
<p><i><center>Si no visualiza correctamente esta p&aacute;gina web, deber&iacute;a actualizar su navegador a una versi&oacute;n m&aacute;s 
			 reciente o usar un navegador distinto.</i></p>
			 !-->
 <p><i><center>Si no visualiza correctamente esta p&aacute;gina web, actualice su navegador 
			 o use un navegador distinto.</i></p>
			 
</html>