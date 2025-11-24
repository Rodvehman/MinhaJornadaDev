<div class="titulo">Argumentos & Retorno</div>

<?php
    function obterMensagem(){
        return 'Seja bem vindo<b>';
    }

    $m = obterMensagem();

    echo $m;

    echo "<br>";

    var_dump(obterMensagem());

    function obterMensagemComNome($nome){
        return "<br>Bem vindo, $nome<br>";
    }

    $nome = "Rodrigo";

    echo obterMensagemComNome($nome);
    echo obterMensagemComNome('Antônio');

    function soma($a, $b){
        echo "<br>";
        return $a + $b;
    }

    echo soma(4,5);
    
    $x = 4;
    $y = 18;
    echo soma($x,$y);

    function trocaValor($a, $novoValor){
        $a = $novoValor;
    }

    $variavel = 1;

    trocaValor($variavel, 3);

    echo "<br>".$variavel;
    
    function trocaValorDeVerdade(&$a, $novoValor){
        $a = $novoValor;
    }
    
    trocaValorDeVerdade($variavel, 5000);
    
    echo "<br>".$variavel;
?>