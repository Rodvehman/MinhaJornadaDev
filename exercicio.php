<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href="/CURSO-PHP/PHP-Cod3r<?="/{$_GET['dir']}/{$_GET['file']}"?>.php" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                // include($_GET['dir']."/".$_GET['file'].".php");
                // {$_GET['dir']}
                // {$_GET['file']}.php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
            <section>
                <h6>Use os parâmetros no navegador...
                    <p>Após o endereço, na barra do navegador<br/>Incluir<strong>?dir={diretório}&file={arquivo sem o .php}</strong></p>
                </h6>
            </section>
        </div>
    </main>
    <footer class="rodape">
        CODER & ALUNOS© <?= date('Y')?>
    </footer>
</body>
</html>