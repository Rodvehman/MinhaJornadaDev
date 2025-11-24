<div class="titulo">Arrays Constantes</div>

<?php
    const FRUTAS = ['Laranja','Abacaxi'];

    var_dump(FRUTAS);
    //FRUTAS[1] = 'Banana'; Não aceita alteração
    //FRUTAS[] = 'banana'; Não aceita inclusão
    echo '<br>'.FRUTAS[0];

    const CARROS = ['Fiat' => 'Uno', 'Ford' => 'Maverick'];

    echo '<br>'.CARROS['Fiat'];
    echo '<br>'.CARROS['Ford'].'<br>';

    define('CIDADES', array('Belo Horizonte', 'Recife'));
    var_dump(CIDADES);
    echo '<br>'.CIDADES[0];
?>