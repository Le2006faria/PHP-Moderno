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
    $atual = date("Y");
    $nascimento = $_GET['nascimento'] ?? '2000';
    $ano = $_GET['ano'] ?? $atual;
    ?>
    <main>
        <h1>Calculando a sua idade!</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nascimento">Em que ano você nasceu?</label>
        <input type="number" name="nascimento" id="idnascimento" min="1900" value="<?=$nascimento?>">
        <label for="ano">Quer saber a sua idade em qual ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
        <input type="number" name="ano" id="idano" min="1900" value="<?=$ano?>">
        <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <?php 
        $idade = $ano - $nascimento;
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <strong><?=$nascimento?></strong> vai ter <strong><?=$idade?></strong> em <strong><?=$ano?>!</strong></p>
    </section>

</body>

</html>