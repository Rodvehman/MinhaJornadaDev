<div class="titulo">Closure & Callable</div>

<?php
    $soma1 = function($a, $b){
        return $a + $b;
    };

    echo $soma1(2, 4)."<br>";

    echo (is_callable($soma1)) ? 'Sim' : 'Não';
    
    echo "<br>";
    echo (is_callable($soma1)) ? 'Sim' : 'Não';
    
    function soma2($a, $b){
        return $a + $b;
    }
    
    echo "<br>";
    echo is_callable(soma2(4, 5)) ? 'Sim' : 'Não';
    
    $soma = function($a, $b){
        return $a + $b;
    };
    
    echo "<br>";
    
    function executar($a, $b, $op, Callable $funcao){
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado";
    }
    
    executar(4, 5, '+', $soma);
    
    echo "<br>";
    var_dump($soma1);

    //executar(5, 9, '+', soma2()); Não funcionou
?>