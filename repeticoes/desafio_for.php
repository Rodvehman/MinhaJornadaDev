<div class="titulo">Desafio For</div>

<!-- 
Construir:

#
##
###
####
#####

Formas de fazer:
1) Pode usar incremento $i;
2) Não pode usar incremento.
-->

<?php
for ($i = 1; $i <= 5; $i++){
    $caracter = "#";
    echo '<br>';
    echo str_repeat($caracter, $i);
};

echo '<hr>';

$impressao = '';
for ($cont = 1; $cont <= 5; $cont++){
    $impressao .= '#';
    echo "$impressao<br>";
};

echo '<hr>';

$arvore = '';
$i = 0;

for ($impressao2 = '#'; $impressao2 != '######'; $impressao2 .= "#"){
    echo "$impressao2 <br>";
}
?>