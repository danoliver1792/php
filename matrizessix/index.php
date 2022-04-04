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
       $v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
       print_r($v);
       ksort($v);
       print_r($v);
       //a função ksort deixa os índices em ordem e a função krsort deixa os índices em ordem, mas decrescente  

    ?>
    </pre>
</body>
</html>