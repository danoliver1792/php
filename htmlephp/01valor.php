<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raíz quadrada</title>
</head>
<body>
   <?php
       $valor = $_GET["v"];
       $rq = sqrt($valor);
       echo "A raíz de $valor é igual a $rq";
   ?>
   <a href="index.html">Voltar</a>
</body>
</html>