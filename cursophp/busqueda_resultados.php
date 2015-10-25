<!doctype html>
<html>
<head>
<?php

	function ejecuta_consulta($labusqueda){
		
	//$busqueda=$_GET["buscar"];

	require("datos_conexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(mysqli_connect_errno()){

		echo "Fallo al conectar con la BBDD";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

	mysqli_set_charset($conexion, "utf8");

	$consulta="SELECT * FROM productos3 WHERE NOMBREARTICULO LIKE'%$labusqueda%'";

	$resultados=mysqli_query($conexion, $consulta);

	echo"<table><tr><th>CODIGOARTICULO</th>
	<th>SECCION</th><th>NOMBREARTICULO</th></tr>";

	
	while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){

	echo "<tr>";	
	echo "<td>". $fila['CODIGOARTICULO'] . "</td><td>";

	echo $fila['SECCION'] . "</td><td> ";

	echo $fila['NOMBREARTICULO'] . "</td></tr> ";
	}


	echo "</table>";
	mysqli_close($conexion);

	}



?>
<meta charset="utf-8">
<title>Documento sin título</title>

</head>

<body>
	<?php
		
		$mibusqueda=$_GET["buscar"];

		$mipag=$_SERVER["PHP_SELF"];

		if($mibusqueda!=NULL) {

			ejecuta_consulta($mibusqueda);
		} else {

			echo "<form action='" . $mipag . "'method='get'>

			<label>Buscar:<input type='text' name='buscar'></label>

			<input type='submit' name='enviando' value='Dale'>

			</form>";
		}

	?>
</body>
</html>