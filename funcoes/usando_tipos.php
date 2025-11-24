<div class="titulo">Usando Tipos</div>

<?php
    function somar1($a, $b){
        echo "<span>Somando $a + $b = </span>";
        return $a +$b;
    }

    echo somar1(5, 8)."<br>";
    echo somar1(1.5, 2.7)."<br>";
    // echo somar1(1, '4dois')."<br>";
    
    function somar(int $a, int $b){
        echo "<span>Somar: $a + $b = </span>";
        return $a + $b;
    }
    
    // echo somar(6, 3)."<br>";
    // echo somar(5, 8)."<br>";
    // echo somar(1.5, 2.7)."<br>";
    // echo somar(1, '4dois')."<br>";
    
    function somar3($a, $b):int {
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo somar3(5, 8)."<br>";
    echo somar3(1.5, 2.7)."<br>";
?>