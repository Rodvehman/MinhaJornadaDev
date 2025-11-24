<div class="titulo">Operações</div>

<?php
    $dados = [
        "nome" => "José",
        "idade" => 28
    ];

    $dados2 = [
        "naturalidade" => "Fortaleza"
    ];

    $dados2['endereco'] = "Rua A";

    $dadosCompletos = $dados + $dados2;//Os dados à esquerda se mantém em relação à direita, portanto, se tivermos chaves iguais, à da esquerda que se manterá
    print_r($dadosCompletos);

    echo "<br>".is_array($dadosCompletos);
    echo "<br>".count($dadosCompletos);
    echo "<br>";
    $indice = array_rand($dadosCompletos);
    echo "<br>$indice = $dadosCompletos[$indice]";
    echo "<br>";
    echo "{$dadosCompletos['idade']}";
    echo "<br>";
    unset($dadosCompletos['nome']);
    print_r($dadosCompletos);
    echo "<br>";
    unset($dadosCompletos);
    $impares = [1, 3, 5, 7, 9];
    $pares = [0, 2, 4, 6, 8];
    $decimais = $pares + $impares;//Os dados de $pares sobrescrevem pelas chaves, os dados de $impares
    print_r($decimais);
    echo "<br>";
    $decimais = array_merge($pares, $impares);
    print_r($decimais);
    echo "<br>";
    sort($decimais);
    print_r($decimais);
?>