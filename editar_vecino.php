<html>
	<head><center><u> ACTUALIZACI&Oacute;N DE DATOS </u></b></center></head>

	<body>

	<?php
		include("conectar.php");
		
		$valor = $_REQUEST['id'];
		
		$nombre =utf8_decode($_REQUEST['nombre']);
		$apellido1 =utf8_decode($_REQUEST['apellido1']);
		$apellido2 =utf8_decode($_REQUEST['apellido2']);
		$telefono =utf8_decode($_REQUEST['telefono']);
		$id_vecino =utf8_decode($_REQUEST['id_vecino']);
		$direccion =utf8_decode($_REQUEST['direccion']);
		$error = false;
	    
		if ($nombre == "") { //si el campo nombre esta vacio
			echo "<script type='text/javascript' language='javascript'> alert('ERROR!Tiene que escribir el nombre del vecino') </script>";
			echo "<script>document.location='buscar_modificar_vecino.php'</script>";
			$error = true;	  
		}
	
		if ($apellido1 == "") { //si esta vacio
			echo "<script type='text/javascript' language='javascript'> alert('ERROR!Tiene que escribir el primer apellidos del vecino') </script>";
			echo "<script>document.location='buscar_modificar_vecino.php'</script>";
			$error = true;	  
		}

		if ($apellido2 == "") { //si esta vacio
			echo "<script type='text/javascript' language='javascript'> alert('ERROR!Tiene que escribir el segundo apellido del vecino') </script>";
			echo "<script>document.location='buscar_modificar_vecino.php'</script>";
			$error = true;	  
		}
	
		if ($id_vecino == "") { //si esta vacio
			echo "<script type='text/javascript' language='javascript'> alert('ERROR!Tiene que escribir el identificador del vecino') </script>";
			echo "<script>document.location='buscar_modificar_vecino.php'</script>";
			$error = true;	  
		}
		
		if ($error == false) {
			$otra = "SELECT * FROM vecinos WHERE id_vecino='$id_vecino' AND nombre!='$nombre' AND apellido1!='$apellido1' AND apellido2!='$apellido2'"; //busco usuarios que hayan introducido por error el mismo id_vecino		
			$query2 = mysql_query($otra, $conexion);
			$nfilas = mysql_num_rows($query2);
		}
	
		if($nfilas >= 1) {
			echo "<script type='text/javascript' language='javascript'> alert('(!)ERROR(!):El identificador de vecino ya existe en la base de datos...Intentelo de nuevo.') </script>";
			echo "<script>document.location='index.php'</script>";
		}
	
	
	if(($error == false) && ($nfilas < 1)) {
		
		$consulta = "UPDATE vecinos SET nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2', telefono='$telefono', id_vecino ='$id_vecino', direccion='$direccion' WHERE id_vecino='$valor'";
        $resultado = mysql_query($consulta);
	}
	    if($resultado){
			  echo "<script type='text/javascript' language='javascript'> alert('Datos Modificados correctamente.') </script>";
			  echo "<script>document.location='index.php'</script>";
		}	
		else{
			echo "<script type='text/javascript' language='javascript'> alert('(!)ERROR(!):Hubo un error fatal durante la modificación de los datos...Intentelo de nuevo. Gracias por su colaboracion') </script>";
			echo "<script>document.location='buscar_modificar_vecino.php'</script>";
		}
	?>

	</body>
</html>