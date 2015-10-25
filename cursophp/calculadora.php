<style>

.resultado{
  color: #f00;
  font-weight: bold;
  font-size: 32px;
}
</style>

<?php

 

  function calcular($calculo){
      global $numero1;
      global $numero2;

    if(!strcmp("Suma", $calculo)){



      echo "<p class='resultado'>El resultado es:" . ($numero1+$numero2) . "</p>" ;
    }

    if(!strcmp("Resta", $calculo)){

      echo "<p class='resultado'>El resultado es:"  . ($numero1-$numero2) . "</p>";
    }

    if(!strcmp("Multiplicación", $calculo)){

      echo "<p class='resultado'>El resultado es:" . ($numero1*$numero2) . "</p>";
    }

    if(!strcmp("División", $calculo)){

      echo "<p class='resultado'>El resultado es:" . ($numero1/$numero2) . "</p>";
    }

    if(!strcmp("Módulo", $calculo)){

      echo "<p class='resultado'>El resultado es:". ($numero1%$numero2) . "</p>";
    }

    if(!strcmp("Incremento", $calculo)){

      echo "<p class='resultado'>El resultado es:". (++$numero1) . "</p>";
    }

    if(!strcmp("Decremento", $calculo)){

      echo "<p class='resultado'>El resultado es:". (--$numero1) . "</p>";
    }

}
?>