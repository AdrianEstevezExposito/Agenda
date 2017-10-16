<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

<head>
	<title>MODIFICACI&Oacute;N INCIDENCIAS</title>
<meta http-equiv="Content-Type" content="text/html; charset=ansi" />
   
<!-- ESTILOS !-->
    <style type="text/css">
	option {
		font-family: comic-sans;
		font-size: 12px;
		font-weight: bolder;
	}
	option.leve {background-color: #3F0;}
	option.grave {background-color: #F60;}
	option.critico {background-color: #F00;}
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
			   <TD><center><img border="0" src="imagenes/gato.jpg" width="80" height="80"></b></center></TD> 
			   <TD><center><font size=3><b></b></h2></center></TD> 
			   <TD><center><img border="0" src="imagenes/cliente.png" width="100" height="100"></center></TD> 
			</TR> 
		</TABLE>
		<br><br>

		<br><br> 

<!-- CUERPO !-->   

	<body>

	<?php
		include("conectar.php");
	
		$valor = $_REQUEST['id'];

		$consulta = "SELECT * FROM vecinos WHERE id_vecino=$valor";
		$lista = mysql_query($consulta, $conexion);

		$num_reg = mysql_num_rows($lista);
	
		if($num_reg>0)
			for($i=1; $i<=$num_reg; $i++)
				$reg = mysql_fetch_array($lista);
		
		echo "<br><br>";
		echo"
		<FORM ACTION='editar_vecino.php?id=".$reg["id_vecino"]."' METHOD='POST'> 
		<table align='center' border=0>
			  <TR>
				 <TD> <i> Nombre:</td> <td> <input type='text' name='nombre' value=".$reg["nombre"]." size='30'></TD>
			 </TR>
			 <TR>
				 <TD> <i> Primer Apellido: </td> <td> <input type='text'  name='apellido1' value=".$reg["apellido1"]." size='30'></TD>
			 </TR>
			 <TR>
				 <TD> <i> Segundo Apellido: </td> <td><input type='text' name='apellido2' value=".$reg["apellido2"]." size='30'></TD>
			 </TR>
			 <TR>
				 <TD> <i> Tel&eacute;fono: </td> <td><input type='text' name='telefono' value=".$reg["telefono"]." size='30'></TD>
			 </TR>
			 <TR>
				 <TD> <i> Identificador de Vecino: </td> <td><input type='text' name='id_vecino' value=".$reg["id_vecino"]." size='30'></TD>
			 </TR>
			 <TR>
				 <TD> <i> Direcci&oacute;n: </td> <td><input type='text' name='direccion' value=".$reg["direccion"]." size='30'></TD>
			 </TR>
			 

	    </table>
		<p align='center'><input type='submit' name='submit' class='btn' value='Editar' /></p>
		</FORM>
	
		<br><br>
		<center> <FORM ACTION='index.php' METHOD='post'> <INPUT TYPE='submit' NAME='volver' VALUE='Volver a la p&aacute;gina principal'> </center>";	
	?>

	</body>
</html>