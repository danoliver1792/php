<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operador</title>
</head>
<body>
<h1>Com três variáveis</h1>
    <?php
       $n1 = 3;
       $n2 = 2;
       $s = $n1 + $n2;
       echo "A soma entre $n1 e $n2 é igual a $s"; 
?>
<h1>Com duas variáveis</h1>
    <?php
    $n1 = 3;
    $n2 = 2;
    echo "A soma vale ". ($n1+$n2);
    echo "<br/>A subtração vale ". ($n1-$n2);
    echo "<br/>A multiplicação vale ". ($n1*$n2);
    echo "<br/>A divisão vale ". ($n1/$n2);
    echo "<br/>O módulo vale ". ($n1%$n2);
?>
<h1>Calculando a média</h1>
    <?php
    $n1 = 3;
    $n2 = 2;
    $media = ($n1+$n2)/2;
    echo "A média entre 3 e 2 é $media.";
?>
</body>
</html>