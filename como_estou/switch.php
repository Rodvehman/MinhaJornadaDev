<div class="titulo">Switch</div>

<?php
    $categoria = ucwords('suv básico');
    $preco = 0;
    $carro = '';

    switch ($categoria){
        case 'Luxo':
            $preco = 250000;
            $carro = 'Mercedes';
            break;
        case 'SUV':
        case 'SUV básico':
            $preco = 80000;
            $carro = 'Renegade';
            break;
        case 'Sedan':
            $preco = 55000;
            $carro = 'Etios';
        default:
            $preco = 33000;
            $carro = 'Mobi';
    }

    $precoFormatado = number_format($preco, 2, ',', '.');

    echo "Categoria: $categoria<br>Veículo: $carro<br>Preço: $precoFormatado";
?>