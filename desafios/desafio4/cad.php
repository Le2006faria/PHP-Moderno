<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real em dólar</title>
    <link rel="stylesheet" href="../desafio1/style.css">
</head>

<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <h1>Conversor de moedas</h1>
        <?php
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y"); 
        $url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];

        $real = isset($_REQUEST["real"]) && is_numeric($_REQUEST["real"]) ? (int)$_REQUEST["real"] : 0;
        $dolar = $real / $cotacao;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        ?>

        <p><button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button></p>
    </main>

</body>

</html>