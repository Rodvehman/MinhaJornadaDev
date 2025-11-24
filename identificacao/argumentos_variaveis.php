<div class="titulo">Argumentos Variáveis</div>

<?php
    function soma($a, $b){
        return $a + $b;
    }

    echo soma(14,15)."<br>";
    echo soma(14,15, 19, 24, 43, 96);

    function somaCompleta(...$numeros){
        $soma = 0;
        foreach ($numeros as $numero){
            $soma += $numero;
        }
        return $soma;
    }

    echo '<br>'.somaCompleta(4, 5, 34, 98);
    
    $array = [6, 7, 8];
    
    echo '<br>'.somaCompleta(...$array);
    echo '<hr>';

    function membros($titular,...$dependentes){
        echo "Titular: $titular<br>";
        if ($dependentes){
            foreach ($dependentes as $dependente){
                echo "Dependente: $dependente<br>";
            }
        }
    }

    membros("Carlos","Joao","Ana","Adalto");
    echo "<hr>";
    membros("Antônio");
?>