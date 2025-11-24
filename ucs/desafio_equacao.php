<div class="titulo">Desafio Equação</div>

<?php
    $numeradorA = (6 * (3 + 2)) ** 2;
    $denominadorA = 3 * 2;
    $calculoA = $numeradorA / $denominadorA;

    
    $numeradorB = ((1 -5) * (2 - 7)) ** 2;
    $denominadorB = 2 * 2;
    $calculoB = $numeradorB / $denominadorB;

    $calculoABCubo = ($calculoA - $calculoB) ** 3;

    $baseTotal = 10 ** 3;

    $resultado = $calculoABCubo / $baseTotal;

    echo $resultado;
?>