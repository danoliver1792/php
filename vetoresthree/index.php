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
        $c = range(5,20,2);
        foreach($c as $v) {
            echo "$v ";
        }
        //usando foreach ele deixa o vetor mais organizado
    ?>
</body>
</html>