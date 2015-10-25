<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

</head>

<body>

<?php

	for ($i=10;$i>=-10;$i--){

		if($i==0) {

			

			continue;
		}

		echo "9 / $i = " . 9/$i . "<br>";

	}

	echo "Hemos salido del bucle";
?>


</body>
</html>