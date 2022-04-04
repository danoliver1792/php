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
        //a função explode quebra uma string e coloca os itens em um vetor.
        $site = "Curso em video";
        $vetor = explode (" ", $site);
        print_r($vetor);
    ?>
</body>
</html>