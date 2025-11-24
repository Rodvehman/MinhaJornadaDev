<div class="titulo">Desafio Sorteio</div>

<?php
    $nomes = ['Elza', 'Rapunzel', 'Branca de Neve', 'Cinderela'];
    $sorteio = array_rand($nomes);
?>

<div>
    <h1 center><?=$nomes[$sorteio]?></h1>
</div>

<style>
    [center]{
        display: flex;
        justify-content: center;
    }
</style>