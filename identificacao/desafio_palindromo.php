<div class="titulo">Desafio Palíndromo</div>

<?php

    $texto = "radar";
    $tamanho = strlen($texto); 

    function palindromo($str, $tamanho) {
        $i = 0;
        $j = $tamanho - 1;
        $array = str_split($str);

        while ($i < $j){
            $aux = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $aux;
            $i++;
            $j--;
        }
        $contrario = implode('', $array);
        if ($contrario != $str)
            echo "Não forma um palíndromo";
        else
            echo "Forma um palíndromo";
    }

    echo palindromo($texto, $tamanho);

    function palind($palavra){
        $ultimoIndice = strlen($palavra) - 1;
        for ($i = 0; $i <= $ultimoIndice; $i++){
            if ($palavra[$i] !== $palavra[$ultimoIndice - $i]){
                return "<br>Não";
            }
        }
        return "<br>Sim";
    }

    echo palind('arara');

    function palindromoSimples($palavra){
        return $palavra === strrev($palavra) ? '<br>Sim' : '<br>Não';
    }

    echo palindromoSimples('lua');
    echo palindromoSimples('amora');
    echo palindromoSimples('arara');
?>