<div class="titulo">Tipo Booleano</div>

<?php
    echo TRUE;
    echo '<br>';
    echo FALSE;

    echo '<br>'.var_dump(true);
    echo '<br>'.var_dump(false);
    echo '<br>'.var_dump(false);
    echo '<br>'.var_dump('false');
    echo '<br>'.var_dump('true');
    echo '<br>'.is_bool(false);

    // Fazer as regras de conversões
    echo '<p>Regras:<p>';
    echo '<br>'.var_dump((bool) 0);// apenas o zero é convertido para false
    echo '<br>'.var_dump((bool) - 1);
    echo '<br>'.var_dump((bool) '');
    echo '<br>'.var_dump((bool) '0');
    echo '<br>'.var_dump((bool) '00');
    echo '<br>'.var_dump((bool) 'false');
    echo '<br>'.var_dump(!! 'false');//dupla negação
?>