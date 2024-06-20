<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../desafios/desafio1/style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento </h1>
    </header>
    <main>
        <?php 
        //var_dump($_GET); //é uma superglobal
        //var_dump($_REQUEST);
        $nome = $_GET["nome"] ?? "desconhecido";
        $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
        echo "<p> É um prazer te conhecer, <strong>$nome $sobrenome</strong>.";

        ?>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
    
</body>
</html>