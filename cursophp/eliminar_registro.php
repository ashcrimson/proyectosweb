<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<style>

table {
	margin: auto;
}
table, tr, td,th{
	border:1px solid;
	text-align: center;
}
</style>
<body>

<?php

	$cod=$_GET["c_art"];

	$sec=$_GET["seccion"];

	$nom=$_GET["n_art"];


		
	//$busqueda=$_GET["buscar"];

	require("datos_conexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(mysqli_connect_errno()){

		echo "Fallo al conectar con la BBDD";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

	mysqli_set_charset($conexion, "utf8");

	$consulta="DELETE FROM productos3 WHERE CODIGOARTICULO='$cod'";

	
	$resultados=mysqli_query($conexion, $consulta);



	if(!$resultados) {

		echo "Error en la consulta";
	}else {

		//echo "Registro eliminado";

		//echo mysqli_affected_rows($conexion);

		if (mysqli_affected_rows($conexion)==0){

			echo "No hay registros que eliminar con ese criterio";
		}else{

			echo "Se han eliminado " . mysqli_affected_rows($conexion) . " registros";
		}
	}

	mysqli_close($conexion);
?>
</body>
</html>