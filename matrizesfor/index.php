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
        array_push($v, "D");
        print_r($v);
        //a função array_push($v, 7) é utilizada para colocar um vetor na última posição 
        //a função array_pop elimina o último elemento do vetor
        //para colocar um elemento no início do vetor usa-se array_unshift($v, 7)
        //array_shift é usado para eliminar o primeiro elemento do vetor
    ?>
   </pre> 
</body>
</html>