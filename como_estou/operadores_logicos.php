<div class="titulo">Operadores Lógicos</div>

<?php
    echo "<p class='divisao'>Negação Lógica</p>";
    var_dump(true);
    echo '<br>';
    var_dump(!true);//operador not
    echo '<br>';
    
    echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
    var_dump(true && true);
    echo '<br>';
    var_dump(true && false);
    echo '<br>';
    var_dump(false && true);
    echo '<br>';
    var_dump(false && false);
    echo '<br>';
    var_dump(true && 3 > 2 && 7 <= 7);
    echo '<br>';

    echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
    var_dump(true || true);
    echo '<br>';
    var_dump(true || false);
    echo '<br>';
    var_dump(false || true);
    echo '<br>';
    var_dump(false || false);
    echo '<br>';

    echo "<p class='divisao'>Tabela Verdade 'XOR' (OU)</p><hr>";
    var_dump(true xor true);
    echo '<br>';
    var_dump(false xor true);
    echo '<br>';
    var_dump(true xor false);
    echo '<br>';
    var_dump(false xor false);
    echo '<br>';

    echo "<p class='divisao'>Exemplo</p>";

    $idade = 64;
    $idadeFeminina = 62;
    $idadeMasculina = 65;
    $sexo = 'F';
    $pagouPrevidencia = true;
    $diferencaFeminina = $idadeFeminina - $idade;
    $diferencaMasculina = $idadeMasculina - $idade;

    if ($pagouPrevidencia && ($idade >= 60 && $sexo === 'F')){
        echo "<p class='divisao'>Pode se aposentar</p>";
    } else if ($idade >= 65 && $sexo === 'M'){
        echo "<p class='divisao'>Pode se aposentar</p>";
    } else {
        echo "<p class='divisao'>Não atingiu o critério para aposentadoria.</p>";
        if ($idade < $idadeFeminina && $sexo === 'F'){
            echo "<p>Falta(m) {$diferencaFeminina} ano(s) para se aposentar.";
        } else if ($idade < $idadeMasculina && $sexo === 'M') {
            echo "<p>Falta(m) {$diferencaMasculina} ano(s) para se aposentar.";
        }
    }
?>