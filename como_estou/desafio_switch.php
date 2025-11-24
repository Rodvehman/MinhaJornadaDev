<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM >> Milha</option>
        <option value="milha-km">Milha >> Km</option>
        <option value="metro-km">Metro >> Km</option>
        <option value="km-metro">Km >> Metro</option>
        <option value="fahrenheit-celsius">Fahrenheit >> Celsius</option>
        <option value="celsius-fahrenheit">Celsius >> Fahrenheit</option>
    </select>
    <button type="submit">Converter</button>
</form>

<style>
    form > * {
        font-size: 1.8rm;
    }
</style>

<?php
    $conversao = $_POST['conversao'] ?? 0;
    $parametro = $_POST['param'] ?? 'km-milha';
    $valor;
    
    const MILHA_POR_KM = 1.60934;
    const KM_POR_MILHA = 0.621371;

    switch ($conversao){
        case 'km-milha':
            $valor = $parametro * MILHA_POR_KM;
            break;
        case 'milha-km':
            $valor = $parametro / KM_POR_MILHA;
            break;
        case 'km-metro':
            $valor = $parametro * 1000;
            break;
        case 'metro-km':
            $valor = $parametro / 1000;
            break;
        case 'fahrenheit-celsius':
            $valor = (($parametro - 32) * 5 / 9);
            break;
        case 'celsius-fahrenheit':
            $valor = ($parametro * 9/5) + 32;
            break;
        default:
                $valor = 0;                
    }

    echo number_format($valor, 2, ',',',')." ".$conversao;
?>