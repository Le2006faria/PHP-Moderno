<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="../desafio1/style.css">
</head>

<body>
<?php 
    $preco = $_GET['preco'] ?? 0;
    $porcentagem = $_GET['porcentagem'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de preços!</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="preco">Preço do produto (R$)</label>
        <input type="number" name="preco" id="idpreco" min="0.10" step="0.001" value="<?=$preco?>">
        <label for="porcentagem">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
        <input type="range" name="porcentagem" id="idporcentagem" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$porcentagem?>">
        <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <?php 
        $valor = (($preco * $porcentagem)/100) + $preco;
        ?>
        <h2>Reajuste</h2>
        <p>O produto que custava <strong><?=number_format($preco, 2, ",", ".")?></strong> com <strong><?=$porcentagem?>% de aumento</strong> vai passar a custar <strong><?=number_format($valor, 2, ",", ".")?> a partir de agora.</strong></p>
    </section>
    <script>
        function mudaValor() {
            var porcentagem = document.getElementById("idporcentagem");
            var p = document.getElementById("p");
            p.innerText = porcentagem.value;
        }
        
        mudaValor();
    </script>

</body>

</html>