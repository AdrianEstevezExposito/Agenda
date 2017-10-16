<?php
    session_start();
	include("conectar.php");

?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

<head>
	<title>Buscador de Vecinos</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
	body {
		font: 13px/1.6 Tahoma, sans-serif;
		background: white;
	}
	h2 {
	font: normal 2em arial, sans-serif;
	margin: 0;
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
   background-color: #eeeeee;
   border: 1px solid #ccc;
   text-decoration: none;
	}
	#navegador li a:hover{
   background-color: #333333;
   color: #ffffff;
	}
</style>





<html>

<body>

	<table align="center" border=0  width="800" height="80">
		    <TR>         
			   <TD align="center"><b>
			   <TD><center><font size=5><b><u><i>Buscador de Vecinos</i></u></b></h2></center></TD>
			   <TD align="center"><b>
			   <TD></TD> 
			</TR> 
		
			   <TD><center><img border="0" src="imagenes/gato.jpg" width="90" height="90"></b></center></TD> 
			   <TD><center><font size=3><b></b></h2></center></TD> 
			   <TD><center><img border="0" src="imagenes/rompetechos.jpg" width="70" height="100"></center></TD> 
			</TR> 
			<TR>                    
			   <TD></TD> 
			   <TD><center><font size=2 color=red><i>Buscar por Nombre o Apellidos</i></font></center></TD> 
			</TR> 
		</TABLE>	

         <br><br>


        <FORM NAME=formulario ACTION="ver_modificar_vecino.php" METHOD="POST" enctype="multipart/form-data">
		<table align='center' border=0>
			 <TR>
				 <TD align='center' colspan='10'><u><b><i> Apellidos</i></b></u></TD>
			 </TR>
			 <TR> 
			   <TD><br></TD>   			   
		     </TR>
			 <TR>
				 <TD> <i>Primer Apellido: </td> <td> <input type='text' name='apellido1' size='30'></TD>
			 </TR>
			 <TR> 
			   <TD><br></TD>   			   
		     </TR>
			 <TR>
				 <TD> <i> Segundo Apellido: </td> <td><input type='text' name='apellido2' size='30'></TD>
			 </TR>
			 <TR> 
			   <TD><br></TD>   			   
		     </TR>
			 <TR>
				 <TD align='center' colspan='10'><u><b><i> Nombre</i></b></u></TD>
			 </TR>
			 <TR> 
			   <TD><br></TD>   			   
		     </TR>
			 <TR>
				 <TD> <i> Nombre:</td> <td> <input type='text' name='nombre' size='30'></TD>
			 </TR>
	    </table>
		<br>
		<p align='center'><input type='submit' name='submit' class='btn' value='Buscar' /></p>
		</form>
		<br>
		<center> <FORM ACTION='index.php' METHOD='post'> <INPUT TYPE='submit' NAME='menu' VALUE='Volver a la p&aacute;gina principal'> </center>	 </FORM><br>

	
	</body>
</html>