<html>
	<head><center><u> ACTUALIZACIÓN DE DATOS </u></b></center></head>

	<body>

	<?php
		include("conectar.php");
		
		$valor = $_REQUEST['id'];

		$consulta = "DELETE FROM vecinos WHERE id_vecino='$valor'";
	
		$resultado = mysql_query($consulta);

		if($resultado){
		        echo "<script type='text/javascript' language='javascript'> alert('Datos Eliminados correctamente.') </script>";
			    echo "<script>document.location='index.php'</script>";
	    }
		else { 
			echo "<script type='text/javascript' language='javascript'> alert('(!)ERROR(!):Hubo un error al eliminar el vecino...Intentelo de nuevo.') </script>";
			echo "<script>document.location='index.php'</script>";
		}
	?>

	</body>
</html>