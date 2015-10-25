<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

</head>

<body>

<?php

function cambia_mayus($param) {

	$param=strtolower($param);

	$param=ucwords($param);

	return $param;
}

$cadena="hOlA mUnDo";

echo cambia_mayus ($cadena) . "<br>";

echo $cadena;

?>


</body>
</html>