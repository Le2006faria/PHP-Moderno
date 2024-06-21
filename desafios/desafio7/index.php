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
    $minimo = 1_412.00;
    $salario = $_GET['salario'] ?? 0;
    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="idsalario" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong><em>R$<?=number_format($minimo, 2, ",", ".")?></strong></em></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
        $total = intdiv($salario, $minimo);
        $diferenca = $salario % $minimo;

        echo "Quem recebe um salário de <strong>R$:$salario</strong>, ganha <em> $total salários mínimos</em> + <em>R$: $diferenca</em>";
        ?>
    </section>
</body>

</html>