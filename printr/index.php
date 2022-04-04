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
        $x[0] = 4;
        $x[1] = 3;
        $x[2] = 8;
        print_r($x);
        //o print_r mostra detalhes de uma variável, principalmente se for um vetor. Quando mostrar => significa que está associado, isso no localhost.
        $x2 = array (3,7,6,2,1,9);
        print_r($x2);
        //O print_r pode ser substituído por var_dump() e var_export().
    ?>
</body>
</html>