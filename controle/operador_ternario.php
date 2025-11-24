<div class="titulo">Operador Ternário</div>

<?php
    $idade = 10;
    $status;

    $status = $idade >= 18 ? "Maior de idade" : "Menor de idade";
    echo $status;

    $status = $idade >= 18 ? $idade >= 65 ? "Aposentado" : "Maior de Idade" : "Menor de idade";
    echo $status;
?>