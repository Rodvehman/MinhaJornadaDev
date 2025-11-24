<div class="titulo">Array</div>

<?php
    $lista = array(1, 2, 3.4, "texto");
    
    print_r($lista);

    echo "<br>".$lista[0];
    echo "<br>".$lista[1];
    echo "<br>".$lista[2];
    echo "<br>".$lista[3];
    echo "<br>";
    //   var_dump($lista[15]);

    $texto = "Esse é um texto de teste";
    echo $texto[2];
    echo $texto[3]; //Cuidado, pode gerar erro nos caracteres acentuados, pois não utiliza UTF-8
    
    echo "<br>".mb_substr($texto, 10, 1); //Modo correto

    $lista[0] = 1234;
    print_r($lista);
?>