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
        //a função str_split coloca cada letra de uma string em uma posição de um vetor.
        $nome = "maria";
        $vetor = str_split($nome);
        print_r($vetor);
    ?>
</body>
</html>