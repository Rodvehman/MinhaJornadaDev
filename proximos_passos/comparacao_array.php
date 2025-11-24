<div class="titulo">Comparação de Arrays</div>

<?php
    $array1 = ['nome' => 'Maria', 'idade' => 22];
    $array2 = ['nome' => 'Maria', 'idade' => 22];
    
    var_dump($array1);
    echo "<br>";
    var_dump($array2);
    echo "<br>";
    var_dump($array1 == $array2);
    echo "<br>";
    var_dump($array1 === $array2);
    echo "<br>";
    
    $array3 = ['idade' => 22, 'nome' => 'Maria'];
    var_dump($array3);
    echo "<br>";
    var_dump($array1 == $array3);
    echo "<br>";
    var_dump($array1 === $array3);
    echo "<br>";
    var_dump($array1 !== $array3);
    echo "<br>";
    
    $array4 = ['idade' => '22', 'nome' => 'Maria'];
    var_dump($array4);
    echo "<br>";
    var_dump($array1 == $array4);
    echo "<br>";
    var_dump($array1 === $array4);
?>