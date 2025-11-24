<div class="titulo">Break/Continue</div>

<?php
    $cont = 10;

    for (;;) {
        echo "$cont <br>";
        $cont++;
        if ($cont > 20){
            break;
        }
    };

    echo "Fim!";
    
    echo "<hr>";

    for (;;){
        $cont++;
        if ($cont % 2 === 1){
            continue;
        }
        if ($cont > 41){
            break;
        }
        echo "$cont <br>";
    }

    echo "Fim!";

    echo "<hr>";
    
    foreach (array(1,2,3,4,5) as $valor){
        if ($valor === 5) break;
        if ($valor % 2 === 0) continue;
        echo "$valor <br>";
    };

    echo "Fim!";
?>