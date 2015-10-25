<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<style>

	table {
		width: 50%;
		border:1px dotted #ff0000;
		margin:auto;
	}
</style>
</head>

<body>

<?php

	require("datos_conexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(mysqli_connect_errno()){

		echo "Fallo al conectar con la BBDD";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

	mysqli_set_charset($conexion, "utf8");

	$consulta="SELECT * FROM sheet1 ";

	$resultados=mysqli_query($conexion, $consulta);

	echo"<table><tr><th>People QuickFacts</th>
	<th>Georgia</th><th>USA</th></tr>";

	
	while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){

	echo "<tr>";	
	echo "<td>". $fila['People QuickFacts'] . "</td><td>";

	echo $fila['Georgia'] . "</td><td> ";

	echo $fila['USA'] . "</td></tr> ";

	

	}
echo "</table>";
	mysqli_close($conexion);



?>
</body>
</html>