<div class="titulo">Desafio String</div>

<?php

/*  Enunciado:
    Avaliando os métodos da documentação da string, qual é o método que a posição 
    do texto 'abc' retorne na string '!AbcaBcabc' retorne 1?
*/
    $texto = "!AbcaBcabc";
    $subtexto = 'abc';

    echo (int)str_contains($texto, $subtexto).'<br>';
    echo strpos($texto, $subtexto).'<br>';
    echo strtolower($texto).'<br>';
    echo strpos(strtolower($texto), $subtexto);
?>