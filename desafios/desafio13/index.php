<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="../desafio1/style.css">
    <style>
        img.nota{
            height: 30px;
        }
    </style>
</head>

<body>
    <?php 
    $saque = $_GET['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$) <sup></sup></label>
            <input type="number" name="saque" id="idsaque" required>
            <p style="font-size: 0.7em"><sup></sup>Notas disponíveis: R$100, R$50, R$20, R$10, R$5, R$2, R$1</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
    $resto = $saque;
    
    $total100 = floor($resto/100);
    $resto %= 100;

    $total50 = floor($resto/50);
    $resto %= 50;

    $total20 = floor($resto/20);
    $resto %= 20;

    $total10 = floor($resto/10);
    $resto %= 10;

    $total5 = floor($resto/5);
    $resto %= 5;

    $total2 = floor($resto/2);
    $resto %= 2;

    $total1 = floor($resto/1);
    $resto %= 1;

    ?>
    <section>
        <h2>Saque de R$<?=$saque?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$total100?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?=$total50?></li>
            <li><img src="imagens/20-reais.jpg" alt="Nota de 20" class="nota"> x<?=$total20?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?=$total10?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?=$total5?></li>
            <li><img src="imagens/2-reais.jpg" alt="Nota de 2" class="nota"> x<?=$total2?></li>
            <li><img src="imagens/1-real.jpg" alt="Nota de 1" class="nota"> x<?=$total1?></li>
        </ul>
    </section>
</body>

</html>