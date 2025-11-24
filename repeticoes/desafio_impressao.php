<div class="titulo">Desafio Impressão</div>

<!-- 
    Enunciado:
    - Imprima o valores do array que contém índice par;
    - Resolver com for e foreach.
        - Valores esperados: AAA, CCC, EEE
-->
<?php
    $array = [
        "AAA",
        "BBB",
        "CCC",
        "DDD",
        "EEE",
        "FFF"
    ];

    for ($i = 0; $i < count($array); $i++){
        if ($i % 2 === 0){
            echo "$array[$i] ";
        }
    };

    echo "<hr>";

    foreach ($array as $indice => $item){
        if ($indice % 2 === 0){
            echo "$item ";
        }
    };
?>