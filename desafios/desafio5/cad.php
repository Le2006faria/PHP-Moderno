<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número real</title>
    <link rel="stylesheet" href="../desafio1/style.css">
</head>

<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <h1>Analisando o número</h1>
        <?php
        $numero = isset($_POST["numero"]) && is_numeric($_POST["numero"]) ? (float)$_POST["numero"] : 0.0;

        echo "<p>Analisando o número <strong>" . number_format($numero, 15, ",", ".") . "</strong> informado pelo usuário: </p>";

        $inteira = (int) $numero;
        $fracionaria = $numero - $inteira;

        echo "<ul><li>A parte inteira do número é <strong>" . number_format($inteira, 0, ",", ".") . "</strong></li>";
        echo "<li>A parte fracionaria do número é <strong>" . number_format($fracionaria, 15, ",", ".") . "</strong></li>";
        ?>

        <p><button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button></p>
    </main>

</body>

</html>
