<div class="titulo">Valor vs Referência</div>

<?php
    $variavel = 'valor inicial';
    echo '<br>'.$variavel;

    // Atribuição por Valor
    $variavelValor = $variavel;
    echo '<br>'.$variavelValor;
    $variavelValor = 'novo valor';
    echo "<br>$variavelValor $variavel";
    
    // Atribuição por Referência
    $variavelReferencia = &$variavel;
    echo "<br>$variavelReferencia $variavel";
    $variavelReferencia = 'mesma referência';
    echo "<br>$variavelReferencia $variavel";
?>