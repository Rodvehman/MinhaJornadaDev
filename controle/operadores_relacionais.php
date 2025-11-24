<div class="titulo">Operadores Relacionais</div>

<?php
    var_dump(1 == 1);//true
    var_dump(1 > 1);//false
    var_dump(1 >= 1);//true
    var_dump(1 != 1);//false
    var_dump(1 <> 1);//false
    var_dump(4 < 1);//false
    var_dump(4 <= 1);//false
    var_dump(4 <= 4);//true

      var_dump(1 == '1');//true
      var_dump(1 === '1');//false
      var_dump(1 !== '1');//true

      echo "<p class='divisao'>Relacionais no IF/Else</p><hr>";

      $idade = 18;

      if ($idade < 18){
        echo "Menor de idade = $idade anos<br>";
      } else if ($idade < 65){
        echo "Adulto = $idade anos";
      } else {
        echo "Terceira de idade = $idade anos<br>";
      }

      echo "<p class='divisao'>SpaceShip</p><hr>";
      var_dump(5<=>3);
      var_dump(5<=>5);
      var_dump(5<=>25);

      echo "<p class='divisao'>Valores podem ser <strong>V</strong> ou <strong>F</strong></p><hr>";
      var_dump(!!5);
      var_dump(!!0);
      var_dump(!!"");
      var_dump(!!" ");
?>