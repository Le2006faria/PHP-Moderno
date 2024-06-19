<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real em dólar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <h1>Conversor de moedas</h1>
        <?php
        $real = isset($_REQUEST["real"]) && is_numeric($_REQUEST["real"]) ? (int)$_REQUEST["real"] : 0;
        $dolar = $real / 5.44;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        ?>

        <p><button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button></p>
    </main>

</body>

</html>