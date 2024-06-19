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
        <h1>Sorteador de números</h1>
    </header>
    <main>
        <?php 
        $min = 0;
        $max = 100;
        $numero = rand($min, $max);
        $num = mt_rand($min, $max);
        $n = random_int($min, $max);
        echo "<p>O número escolhido foi: <em>$numero</em>";
        echo "<p>O número escolhido foi: <em>$num</em>";
        echo "<p>O número escolhido foi: <em>$n</em>";
        ?>
        <br>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro número</button>
    </main>
    
</body>
</html>