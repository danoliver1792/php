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
        //a função str_word_count conta quantas palavras uma string possui
        $frase = "Eu vou estudar PHP";
        $cont = str_word_count($frase, 0);
        echo "$cont";
        //o 0 funciona para contar, o 1 gera um vetor com as palavras e o 2 gera um vetor com os índices numerados com a posição que as palavras começam.
        
    ?>
</body>
</html>