<div class="titulo">Multidimensionais</div>

<?php
    $dados = [
        [
            'nome' => 'Roberto',
            'idade' => 26,
            'naturalidade' => 'São Paulo'
        ],
        [
            'nome' => 'Maria',
            'idade' => 25,
            'naturalidade' => 'Bahia'
        ]
    ];

    print_r($dados);
    echo '<br>Idade: '.$dados[0]['idade'];
    echo '<br>Idade: '.$dados[1]['idade'];

    $dados[] = [
        'nome' => 'Florinda',
        'idade' => 30,
        'naturalidade' => 'Cidade do México'
    ];

    echo '<br>';
    print_r($dados);
    echo '<br>Idade: '.$dados[2]['idade'];
    
    $dados[2]['vizinho'] = 'Chaves';
    print_r($dados);
    echo '<br>Vizinho: '.$dados[2]['vizinho'];
    
    unset($dados[1]);
    echo '<br>';
    print_r($dados);


?>
