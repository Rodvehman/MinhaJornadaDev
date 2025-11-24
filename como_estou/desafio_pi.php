<div class="titulo">Desafio PI</div>

<?php
    $systemPi = round(pi(),2);
    $pi = 3.14;

    if ($systemPi === $pi){
        echo "<br>Valores Iguais.";
    } else {
        echo "<br>Valores Diferentes.";
    }
?>