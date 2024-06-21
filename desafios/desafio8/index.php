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
        $numero = $_GET['numero'] ?? 1;
        ?>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="idnumero" value="<?=$numero?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        $raizquadrada = $numero ** (1/2);
        $raizcubica = $numero ** (1/3);

        echo "Para o número: <strong>$numero</strong>, sua raíz quadrada é: <em>$raizquadrada</em>, e, sua raíz cúbica é: <em>$raizcubica</em>";
        ?>
    </section>
</body>

</html>