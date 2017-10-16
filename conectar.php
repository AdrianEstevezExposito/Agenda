<?php
	include("config.php");
	//conectar a la bd
	//pconnect = persistente
	$conexion = mysql_pconnect("$sitio", "$usuario", "$pass");
	
	if (!$conexion)
	{
		echo "Error: No puedo conectar";
		exit;
	}
	
	mysql_select_db($base);
?>
