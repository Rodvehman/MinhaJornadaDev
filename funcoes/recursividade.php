<div class="titulo">Recursividade</div>

<?php
    function somaUmAte($valor){
        $soma = 0;
        for ($soma; $valor >= 1; $valor--){
            $soma += $valor;
        }
        return $soma;
    };

    echo somaUmAte(50);

    function somaRecursiva($valor){
        return $valor === 1? 1 : $valor + somaRecursiva($valor - 1);
    }

    $valor = 8;
    echo "<br>Soma Recursiva de $valor: ".somaRecursiva($valor);

    function fatorial($valor){
        $redutor = $valor - 1;
        while ($redutor > 1){
            $valor *= $redutor;
            $redutor--;
        }
        return $valor;
    };

    $valor = 8;
    echo "<br>Fatorial: de $valor: ".fatorial($valor);

    function fatorialRecursivo($valor){
        if ($valor === 1){
            return 1;
        } else {
            return $valor * fatorialRecursivo($valor - 1);
        }
    }

    $valor = 6;
    echo "<br>Fatorial recursivo de $valor: ".fatorialRecursivo($valor);
?>