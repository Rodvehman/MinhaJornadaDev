<div class="titulo">Conversões</div>

<?php
    echo is_int(PHP_INT_MAX)."<br>";

    // int para float
    echo '<br>'.var_dump(PHP_INT_MAX + 1);//O PHP converteu para float automaticamente
    echo '<br>'.var_dump(1 + 1.0);
    echo '<br>'.var_dump((float) 3);

    // float para int
    echo '<p>Float para int<p>';
    var_dump((int) 6.8);
    echo '<br>';
    echo '<br>'.var_dump(intval(2.8, 10));//base 10
    echo '<br>'.var_dump(intval('100101001', 2));//base binária
    var_dump((int) round(2.8));//Se não declarar o tipo de dados, o PHP assumirá como float
    
    // operações com string
    echo '<p>Strings<p>';
    echo '<br>'.var_dump(3 + '2');
    echo '<br>'.var_dump("3" + 2);
    //echo '<br>',is_string("3" . 2);
    echo '<br>',is_string("3" + 2);
    //var_dump(1 + "5 cinco");
    //echo '<br>'.var_dump(1 + "2 + 5");
    echo '<br>'.var_dump(1 + "3.2");
    echo '<br>'.var_dump(1 + "-3.2e2");
    echo '<br>'.var_dump((int) 10.5);
    echo '<br>'.var_dump((float) 10.5);
?>