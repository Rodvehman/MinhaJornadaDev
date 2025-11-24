<div class="titulo">Tipo String</div>

<?php
    echo 'Eu sou uma String', '<br>';
    var_dump("Eu também")."<br>";//com caractéres com acento, conta-se um caractere a mais

    // Concatenação
    echo "<br>Nós também".' somos';
    echo '<br>',"Também aceito"," virgulas<br>";

    echo "'Teste' ".'"Teste"'.'\'Teste\' '."\"Teste\" "."\n";

    print("<br>Também existe a função print<br>");
    print "Também existe a função print<br>";
    
    // Algumas funções
    echo '<br>'.strtoupper('maximizado').'<br>';
    echo '<br>'.strtolower('MINIMIZADO').'<br>';
    echo '<br>'.ucfirst('só a primeira letra').'<br>';
    echo '<br>'.ucwords('todas as primeiras letras').'<br>';
    echo '<br>'.strlen('Quantos caracteres?').'<br>';
    echo '<br>'.strlen("Eu também").'<br>';
    echo '<br>'.mb_strlen("Eu também", "utf-8").'<br>';
    echo '<br>'.substr('Só uma parte mesmo', 7,6);//parte
    echo '<br>'.substr('Só uma parte mesmo', 7);
    echo '<br>'.str_replace('isso', 'aquilo', 'Trocar isso isso');
?>