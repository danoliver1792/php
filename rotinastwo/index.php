<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function soma($a, $b) {
            $s = $a + $b;
            return $s; //Poderia também não colocar a variável $s e colocar $a + $b diratemente no return.
        }

        $x = 3;
        $y = 4;
        $r = soma($x, $y);
        echo "A soma entre $x e $y é igual a $r";
    ?>
</body>
</html>