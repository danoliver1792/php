<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       //a função implode transforma um vetor inteiro em uma string.
       $vetor[0] = "Curso";
       $vetor[1] = "em";
       $vetor[2] = "vídeo";
       $texto = implode(" ", $vetor);
       print($texto);
       //podemos usar a função join() no lugar da função implode
    ?>
</body>
</html>