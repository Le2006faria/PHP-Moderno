<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="../desafio1/style.css">
</head>

<body>
    <main>
        <?php
        $valorUM = $_GET['valor1'] ?? 0;
        $pesoUM = $_GET['peso1'] ?? 1;
        $valorDOIS = $_GET['valor2'] ?? 0;
        $pesoDOIS = $_GET['peso2'] ?? 1;
        ?>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">1º Valor:</label>
            <input type="number" name="valor1" id="idvalor1" value="<?= $valorUM ?>">
            <label for="peso1">1º Peso:</label>
            <input type="number" name="peso1" id="idpeso1" value="<?= $pesoUM ?>">
            <label for="valor2">2º Valor:</label>
            <input type="number" name="valor2" id="idvalor2" value="<?= $valorDOIS ?>">
            <label for="peso2">2º Peso:</label>
            <input type="number" name="peso2" id="idpeso2" value="<?= $pesoDOIS ?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cáculo das Médias</h2>
        <?php
        $MAS = ($valorUM + $valorDOIS) / 2;
        $MAP = ($valorUM * $pesoUM + $valorDOIS * $pesoDOIS) / ($pesoUM + $pesoDOIS);
        ?>
        <ul>
            <!-- <li><?= "A <strong>Média Aritmética Simples</strong> entre os valores é igual a <em>$MAS</em>" ?></li> -->
            <!-- <br>
            <li><?= "A <strong>Média Aritmética Ponderada</strong> entre os valores é igual a <em>$MAP</em>" ?></li> -->
            <li> A <strong>Média Aritmética Simples</strong> entre os valores é igual a <em><?=number_format($MAS, 2, ",", ".")?></em>.</li>
            <li> A <strong>Média Aritmética Ponderada</strong> com os pesos <em><?=$pesoUM?></em> e <em><?=$pesoDOIS?></em> é igual a <em><?=number_format($MAP, 2, ",", ".")?></em>.</li>
        </ul>
    </section>

</body>

</html>