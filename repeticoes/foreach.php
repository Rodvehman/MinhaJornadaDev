<div class="titulo">Foreach</div>

<?php
    $array = [
        1 => 'Domingo',
        'Segunda', 
        'Terça', 
        'Quarta', 
        'Quinta', 
        'Sexta', 
        'Sábado'];

    foreach ($array as $item){
        echo $item."<br>";
    };

    echo '<hr>';

    foreach ($array as $indice => $valor){
        echo "$indice => $valor<br>";
    };

    $matrix = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']
    ];

    foreach ($matrix as $linha){
        // echo "$dado <br>";
        foreach ($linha as $letra){
            echo "$letra ";
        }
        echo '<br>';
    };
    
    $numeros = [1, 2, 3, 4, 5];
    
    foreach ($numeros as &$dobrar){
        $dobrar *= 2;
        echo "$dobrar ";
    }
    
    echo '<br>';
    
    print_r($numeros);
?>