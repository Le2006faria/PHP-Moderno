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
    $segundos = $_REQUEST['segundos'] ?? 1;
    ?>
    <main>
        <h1>Calculadora de tempo!</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="segundos">Qual é o total de segundos?</label>
        <input type="number" name="segundos" id="idsegundos" min="0" step="1" value="<?=$segundos?>">
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
        $resto = $segundos;

        $semanas = (int)($resto/604800);
        $resto = $resto % 604800;
        $dias = (int)($resto/86400);
        $resto = $resto % 86400;
        $horas = (int)($resto/3600);
        $resto = $resto % 3600;
        $minutos = (int)($resto/60);
        $resto = $resto % 60;

        $sobra = $resto;
        ?>
        <h2>Resultado</h2>
        <p>Analisando o valor que você digitou, <strong><?=$segundos?></strong> segundos equivalem a um total de: </p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$sobra?> segundos</li>
        </ul>
    </section>


</body>

</html>