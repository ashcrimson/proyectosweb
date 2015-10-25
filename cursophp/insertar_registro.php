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

	$consulta="INSERT INTO productos3 (CODIGOARTICULO, NOMBREARTICULO, SECCION) VALUES ('$cod','$nom','$sec')";

	$consulta2="SELECT * FROM productos3";
	
	$resultados=mysqli_query($conexion, $consulta);

	$resultados2=mysqli_query($conexion, $consulta2);

	if(!$resultados2) {

		echo "Error en la consulta";
	}else{
		echo "<table><tr>";

		echo "<th>CÓDIGO</th>";

		echo "<th>NOMBRE</th>";

		echo "<th>SECCIÓN</th></tr>";

		while($fila=mysqli_fetch_array($resultados2, MYSQL_ASSOC)){

			

			echo "<tr><td>". $fila['CODIGOARTICULO'] . "</td>";

			echo "<td>". $fila['NOMBREARTICULO'] . "</td>";

			echo "<td>". $fila['SECCION'] . "</td>";

			
		
		}
		echo "</tr></table>";
	}

	mysqli_close($conexion);
?>
</body>
</html>