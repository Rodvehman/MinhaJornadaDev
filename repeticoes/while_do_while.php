<div class="titulo">While/Do While</div>

<?php
    const VALOR_LIMITE = 5;
    $contador = 0;

    while ($contador < VALOR_LIMITE){
        echo "while $contador<br>";
        $contador++;
    }

    echo "<hr>";
    
    $cont = 0;
    $limite = 12;
    
    do {
        echo "do while: $cont<br>";
        $cont++;
    } while ($cont < $limite);
    
    echo "<hr>";
    $contador = 0;

    while (true){
        echo "while(true) $contador<br>";
        $contador++;
        if ($contador >= VALOR_LIMITE) break;
    };
?>