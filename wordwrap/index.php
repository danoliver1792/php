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
       //O wordwrap serve para criar quebras de linhas dentro dos códigos.
       $t = "Aqui tem um texto gigante criado pelo PHP que vai mostrar o funcionamento da função wordwrap";
       $r = wordwrap($t, 5, "<br/>\n", false);
       echo "$r";
       //Esse 5 dentro da função é o número de caracteres. o \n mostra o com quebra de linha dentro do código fonte.
       //o false vai gerar a quebra por palavra se tiver menos de cinco letras
       //o true vai deixar sempre cinco letrasa antes de quebrar linhas.
    ?>
</body>
</html>