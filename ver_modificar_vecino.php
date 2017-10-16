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
		background: #B1B0CA;
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
<head>
	<title>CLIENTES</title>
<meta http-equiv="Content-Type" content="text/html; charset=ansi" />
   
<!-- ESTILOS !-->
    <style type="text/css">
	option {
		font-family: comic-sans;
		font-size: 12px;
		font-weight: bolder;
	}
	body {
		font: 13px/1.6 Tahoma, sans-serif;
		background: white;
	}
	h2 {
		font: normal 2em arial, sans-serif;
		margin: 0;
	}
	</style> 


<html>
		<table align="center" border=0  width="800" height="80">
			<TR> 
			   <TD align="center"><b></b></TD> 
			    <TD><center><font size=3><b><u>Portal de Vecinos</u></b></h2></center></TD>  
			   <TD></TD> 
			</TR> 
			<TR> 
			   <TD><center><img border="0" src="imagenes/rompetechos.jpg" width="70" height="100"></b></center></TD> 
			   <TD><center><font size=3><b></b></h2></center></TD> 
			   <TD><center><img border="0" src="imagenes/cliente.png" width="100" height="100"></center></TD> 
			</TR> 
		</TABLE>
		<br><br>
    
	<?php
        $nombre = $_REQUEST['nombre'];
		$apellido1 = $_REQUEST['apellido1'];
		$apellido2 = $_REQUEST['apellido2'];

	
        echo "<center> <FORM ACTION='buscar_modificar_vecino.php' METHOD='post'> <INPUT TYPE='submit' NAME='menu' VALUE='Volver al Buscador'> </center>	 </FORM><br>";
		echo "<table cellpadding='10' cellspacing='0' align='center' border=0>";
		echo "<td align='center' bgcolor='#999999'> <b>Nombre</b> </td>"."<td align='center' bgcolor='#999999'> <b>Primer Apellido</b> </td>"."<td align='center' bgcolor='#999999'> <b>Segundo Apellido</b> </td>"."<td align='center' bgcolor='#999999'> <b>Tel&eacute;fono</b> </td>"."<td align='center' bgcolor='#999999'> <b>Identificador de Vecino</b> </td>"."<td align='center' bgcolor='#999999'> <b>Direcci&oacute;n</b> </td>"."<td align='center' bgcolor='#999999'> <b>            </b> </td>"."<td align='center' bgcolor='#999999'> <b>            </b> </td>"."</tr></tr>";
		
	        if (($nombre == '') && ($apellido1 == '') && ($apellido2 == '')){
		      $consulta = "SELECT * FROM vecinos ORDER BY nombre";
		}
		else {
		     if(($apellido1 == '') && ($apellido2 == '')) {
		     $consulta = "SELECT * FROM vecinos WHERE nombre='$nombre' ORDER BY nombre";
		      }
		else {
		     if ($nombre == '') {
			   $consulta = "SELECT * FROM vecinos WHERE apellido1='$apellido1' AND apellido2='$apellido2' ORDER BY nombre";
		      }

		  }
		}
		
		@$lista = mysql_query($consulta, $conexion);
	
		@$nfilas = mysql_num_rows ($lista); 
		if ($nfilas >= 1) {
			for ($i=0; $i<$nfilas; $i++) {
				@$fila = mysql_fetch_array ($lista);
					echo "<tr>";
					echo "<td &nbsp;</td>";
					echo "</tr>";
					echo "<tr bgcolor='#D8D8D8'>";
					echo "<td align='center'>".$fila["nombre"]."<br></td>";
					echo "<td align='center'>".$fila["apellido1"]."<br></td>";
					echo "<td align='center'>".$fila["apellido2"]."<br></td>";
					echo "<td align='center'>".$fila["telefono"]."<br></td>";
					echo "<td align='center'>".$fila["id_vecino"]."<br></td>";
					echo "<td align='center'>".$fila["direccion"]."<br></td>";
					echo "<td> <FORM ACTION='modificar_vecino.php?id=".$fila["id_vecino"]."'METHOD='post'>"."<INPUT TYPE='submit' NAME='modificar' VALUE='Modificar'> </FORM></td>";
					echo "<td> <FORM ACTION='eliminar_vecino.php?id=".$fila["id_vecino"]." 'METHOD='post' >"."<INPUT TYPE='submit' NAME='eliminar' VALUE='Eliminar'> </FORM></td>";
					echo "</tr>";
			    }
			}
		else {
		/*	//si no existe le mando otra vez a la portada
			echo "<script type='text/javascript' language='javascript'> alert('(!)ERROR(!):No existen vecinos para su busqueda...Intentelo de nuevo.') </script>";
			echo "<script>document.location='buscar_vecino.php'</script>";*/
			
		}
		
		if(mysql_errno($conexion))
			echo "(!) ERROR (!) ";		
	
		echo "</table>
        <br>";
         echo "<center> <FORM ACTION='buscar_modificar_vecino.php' METHOD='post'> <INPUT TYPE='submit' NAME='menu' VALUE='Volver al buscador'> </center>	 </FORM><br>";		
?> 
	
    </body>
	<html>
</html>