<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

</head>

<body>
<?php


		
	//$busqueda=$_GET["buscar"];

	require("datos_conexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(mysqli_connect_errno()){

		echo "Fallo al conectar con la BBDD";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

	mysqli_set_charset($conexion, "utf8");

	$consulta="INSERT INTO productos3 (CODIGOARTICULO, NOMBREARTICULO, SECCION) VALUES ('AR44','RAQUETA BADMINGTON','DEPORTES')";
	

	$resultados=mysqli_query($conexion, $consulta);

	mysqli_close($conexion);

	



?>

</body>
</html>