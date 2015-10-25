<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	$semana=array("Lunes", "Martes", "Miércoles", "Jueves");

	sort ($semana);

	for ($i=0;$i<count($semana);$i++){

		echo $semana[$i] . "<br>";
	}

?>
</body>
</html>