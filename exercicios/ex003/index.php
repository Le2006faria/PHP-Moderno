<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
    <link rel="stylesheet" href="../../desafios/desafio1/style.css">
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        $numero = 0x1a; //0x = hexadecimal; a=10, f=10, aumenta de +10 (seguindo a somas somas anteriores tbm), logo, a=10, 1a=26(a+10+6(b,c,d,e,f, e a dnv))
        $numero = 0b1111; // 0b = binario; aprendi esse 
        $numero = 020; // 0 = octal; base 8, 10=8, 20=16
        $numero = 4e6;  // é float, mas se vc fizer $numero = (integer) 4e6, vc força o PHP a classificar ele como integer, coerção
        echo "o valor da variável é $numero <br>";

        $v = 300;
        var_dump($v);
        echo "<br>";
        $l = "Letícia";
        var_dump($l); 

        echo "<br>";
        $n = (int) "9";
        $sla = 8;
        $x = $n+$sla;
        echo " a soma é $x";

        echo "<br>";
        $vetor = [3, 7, 9, 123, 4];
        var_dump($vetor); 

        echo "<br>";
        class Pessoa{
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);

        echo"<br>";
        $batatinha = "batatinha";
        $batatao = "batatao";
        echo "$batatinha \"batata\" $batatao"; //não pode echo'$batatinha "batata" $batatao'
        echo"<br>";
        $batata = "batata";
        echo "$batatinha \"$batata\" $batatao";

        echo"<br>";
        $ano = date('Y');
        echo "o ano é $ano";

        echo"<br>";
        echo <<<FRASE
        o ano é $ano
        FRASE;

        echo"<br>";
        echo <<<'FRASE'
        o ano é $ano
        FRASE;


    ?>
</body>
</html>