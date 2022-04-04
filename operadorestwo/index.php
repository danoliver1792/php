<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores parte 2</title>
    <style>
        h2 {
            font-family: arial;
            color: #171559;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    $n1 = -3;
    $n2 = 2;
    $n3 = 4;
    $n4 = 3.4;
    echo "<h2>Valores recebidos: $n1 e $n2</h2>";
    echo "O valor absoluto de $n1 é ". abs($n1);
    echo "<br/>O valor de $n1<sup>$n2</sup> é ". pow($n1, $n2);
    echo "<br/>A raíz de $n3 é ". sqrt($n3);
    echo "<br/>O valor de $n4 arredondado é ". round($n4);
    echo "<br/>O valor de $n4 arredondado para cima é ". ceil($n4);
    echo "<br/>O valor de $n4 arredondado para baixo é ". floor($n4);
    echo "<br/>A parte inteira de $n4 é ". intval($n4);
    echo "<br/>O valor de $n2 em moeda é R$". number_format($n2, 2, ",",".");
?>    
</body>
</html>