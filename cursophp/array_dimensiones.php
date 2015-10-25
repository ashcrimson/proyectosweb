<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	$alimentos=array("fruta"=>array("tropical"=>"kiwi",
									"citrico"=>"mandarina",
									"otros"=>"manzana"),

					 "leche"=>array("animal"=>"vaca",
					 				"vegetal"=>"coco"),

					 "carne"=>array("vacuno"=>"lomo",
					 				"porcino"=>"pata"));

	//echo $alimentos["carne"]["vacuno"];

	/*foreach($alimentos as $clave_alim=>$alim){

		echo "$clave_alim:<br>";

		while(list($hola,$chao)=each($alim)){

			echo "$hola=$chao<br>";
		}

		echo "<br>";
	}*/

	echo var_dump($alimentos);
?>
</body>
</html>