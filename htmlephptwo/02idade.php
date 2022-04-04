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
       $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]"; //isset significa se foi configurado
       $ano = $_GET["ano"];
       $sexo = $_GET["sexo"];
       $idade = date("Y") - $ano;
       echo "$nome é $sexo e tem $idade anos.";
?>
<a href="index.html">Voltar</a>
</body>
</html>