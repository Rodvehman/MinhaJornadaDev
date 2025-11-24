<div class="titulo">Desafio Op. Lógicos</div>
<!-- 
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete;
    - Se um for executado -> TV 32' e Sorvete;
    - Se nenhum for executado -> Fica em casa.
-->
<div class="form-container">
    <form action="#" method="post">
        <div class="campo">
            <label for='t1'>Trabalho 1 - Terça:</label>
            <select name='t1' id="t1">
                <option value="1">Executado</option>
                <option value="0">Não Executado</option>
            </select>
        </div>
        <div class="campo">
            <label for='t2'>Trabalho 2 - Quinta:</label>
            <select name='t2' id="t2">
                <option value="1">Executado</option>
                <option value="0">Não Executado</option>
            </select>
        </div>
        <button type="submit">Executar</button>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $t1 = isset($_POST['t1']) ?? 't1';
    $t2 = isset($_POST['t2']) ?? 't2';

    $programa = ["TV de 50'", "TV de 32'", "Ficar em casa"];
    $mensagem = ["Tomar sorvete.", "Ter mais saúde."];

    echo "<div class='resultado'>";
    if ($t1 && $t2) {
        echo "Comprar a {$programa[0]}.<br>{$mensagem[0]}";
    } elseif ($t1 || $t2) {
        echo "Comprar a {$programa[1]}.<br>{$mensagem[0]}";
    } else {
        echo "{$programa[2]}.<br>{$mensagem[1]}";
    }
    echo "</div>";
}
?>

<style>

    .titulo {
        font-size: 2rem;
        font-weight: bold;
        color: #2a7ae4;
        margin-bottom: 20px;
    }

    .form-container {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 20px 25px;
        max-width: 400px;
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }

    .campo {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: 600;
    }

    select {
        width: 100%;
        padding: 8px;
        font-size: 1rem;
        border: 1px solid #ccc;
        border-radius: 6px;
        background-color: #fafafa;
        transition: border-color 0.2s;
    }

    select:focus {
        border-color: #2a7ae4;
        outline: none;
    }

    button {
        font-size: 1rem;
        padding: 10px 16px;
        border: none;
        border-radius: 6px;
        background-color: #2a7ae4;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #1c5bbf;
    }

    .resultado {
        margin-top: 20px;
        padding: 12px;
        background-color: #e3f2fd;
        border-left: 4px solid #2a7ae4;
        border-radius: 6px;
        font-weight: 500;
    }
</style>
