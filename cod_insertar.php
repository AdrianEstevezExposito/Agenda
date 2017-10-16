<?php
    session_start(); 
	include("conectar.php");
	
	$nombre =utf8_decode($_REQUEST['nombre']);
	$apellido1 =utf8_decode($_REQUEST['apellido1']);
	$apellido2 =utf8_decode($_REQUEST['apellido2']);
	$telefono =utf8_decode($_REQUEST['telefono']);
	$direccion =utf8_decode($_REQUEST['direccion']);
	$id_vecino =utf8_decode($_REQUEST['id_vecino']);
	$error = false;
	
	
	if ($nombre == "") { //si el campo nombre esta vacio
	  echo "<script type='text/javascript' language='javascript'> alert('ERROR!Tiene que escribir el nombre del vecino') </script>";
	  echo "<script>document.location='insertar_vecino.php'</script>";
      $error = true;	  
	}
	
	if ($apellido1 == "") { //si esta vacio
	  echo "<script type='text/javascript' language='javascript'> alert('ERROR!Tiene que escribir el primer apellidos del vecino') </script>";
	  echo "<script>document.location='insertar_vecino.php'</script>";
      $error = true;	  
	}

	if ($apellido2 == "") { //si esta vacio
	  echo "<script type='text/javascript' language='javascript'> alert('ERROR!Tiene que escribir el segundo apellido del vecino') </script>";
	  echo "<script>document.location='insertar_vecino.php'</script>";
      $error = true;	  
	}
	
	if ($id_vecino == "") { //si esta vacio
	  echo "<script type='text/javascript' language='javascript'> alert('ERROR!Tiene que escribir el identificador del vecino') </script>";
	  echo "<script>document.location='insertar_vecino.php'</script>";
      $error = true;	  
	}
	

	if ($error == false) {
	    $otra = "SELECT * FROM vecinos WHERE id_vecino='$id_vecino'"; //busco usuarios que hayan introducido por error el mismo id_vecino		
		$query2 = mysql_query($otra, $conexion);
		$nfilas = mysql_num_rows($query2);
	}
	
	if($nfilas >= 1) {
			echo "<script type='text/javascript' language='javascript'> alert('(!)ERROR(!):El identificador de vecino ya existe en la base de datos...Intentelo de nuevo.') </script>";
			echo "<script>document.location='index.php'</script>";
	}
	
	
	if(($error == false) && ($nfilas < 1)) {
	
		$consulta = "INSERT INTO vecinos(nombre, apellido1, apellido2, telefono, direccion, id_vecino) VALUES('$nombre', '$apellido1', '$apellido2', '$telefono', '$direccion', '$id_vecino')";		
		$resultado=mysql_query($consulta);
	}

		if($resultado)
	 	{
			echo "<script type='text/javascript' language='javascript'> alert('Se ha registrado correctamente') </script>";
			echo "<script>document.location='index.php'</script>";
	 	}else{
			echo "<script type='text/javascript' language='javascript'> alert('(!)ERROR(!):Hubo un error fatal durante la creación del vecino..Intentelo de nuevo.') </script>";
			echo "<script>document.location='index.php'</script>";
	 	}
?>