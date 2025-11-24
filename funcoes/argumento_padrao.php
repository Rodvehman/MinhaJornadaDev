<div class="titulo">Argumento Padrão</div>

<?php
    function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
        return "Bem vindo, $nome $sobrenome!";
    }

    echo saudacao();
    echo '<br>';
    echo saudacao("Antonio", "Oliveira");
    echo '<br>';

    function anotarPedido($comida, $bebida = 'Água'){
        echo "Para comer: $comida<br>";
        echo "Para beber: $bebida<br>";
    }
    
    anotarPedido('Camarão');
    anotarPedido('Suchi','Saquê');

    function anotarPedido2($bebida = 'Água', $comida){
        echo "Para beber: $bebida<br>";
        echo "Para comer: $comida<br>";
    }

    anotarPedido2(null, 'Pizza');//Incorreto
?>