<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

</head>

<body>

<?php

	$busqueda=$_GET["buscar"];

	require("datos_conexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(mysqli_connect_errno()){

		echo "Fallo al conectar con la BBDD";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

	mysqli_set_charset($conexion, "utf8");

	$consulta="SELECT * FROM productos3 WHERE NOMBREARTICULO LIKE'%$busqueda%'";

	$resultados=mysqli_query($conexion, $consulta);

	while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){

	/*echo"<table><tr><th>CODIGOARTICULO</th>
	<th>SECCION</th><th>NOMBREARTICULO</th></tr>";*/

	echo "<form action='Actualizar.php' method='get'>";

	echo "<input type='text' name='c_art' id='c_art' value=' " . $fila['CODIGOARTICULO'] .  "'><br>";

	echo "<input type='text' name='n_art' id='n_art' value=' " . $fila['NOMBREARTICULO'] .  "'><br>";

	echo "<input type='text' name='seccion' id='seccion' value=' " . $fila['SECCION'] .  "'><br>";

	echo "<input type='submit' name='enviando' id='enviando' value='actualizar'>";

	echo "</form>";

	}


	mysqli_close($conexion);



?>
</body>
</html>