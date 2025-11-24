<div class="titulo">Funções Anônimas</div>

<?php
    $soma = function ($a, $b) {
        return $a + $b;
    };

    echo $soma(3, 4)."<br>";

    function executar($a, $b, $op, $funcao){
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado<br>";
    };

    executar(2, 3, '+', $soma);

    $multiplicacao = function ($a, $b){
        return $a * $b;
    };

    echo $multiplicacao(5, 4)."<br>";

    executar(2, 3, 'x', $multiplicacao);
?>