<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 

        // Obtém o valor do número e verifica se é um número válido. Caso contrário, define como 0.
        $numero = isset($_REQUEST["numero"]) && is_numeric($_REQUEST["numero"]) ? (int)$_REQUEST["numero"] : 0;
        
        $antecessor = $numero-1;
        $sucessor = $numero+1;
        echo "<p>O número escolhido foi: <strong>$numero</strong>";
        echo "<p>O <em>antecessor</em> desse número é: $antecessor";
        echo "<p>O <em>sucessor</em> desse número é: $sucessor";
        ?>

        <p><button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button></p>
    </main>
    
</body>
</html>