<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
       $v = array("A", "J", "M", "X", "K");
       print_r($v);
       sort($v);
       print_r($v);
       //a função sort() serve para organizar o vetor em uma ordem
       //a função rsort() faz o reverso, ele organiza em ordem decrescente
       //a função asort() muda os itens e os índices do vetor
    ?>
    </pre>
</body>
</html>