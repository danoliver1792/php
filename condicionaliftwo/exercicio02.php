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
       $a = isset($_GET["ano"])?$_GET["ano"]:"1900";
       $i = date("Y") - $a;
       echo "Você nasceu em $a e terá $i anos.";
       if($i < 16) {
           $tipovoto = "nao volta";
       }
       else {
           if(($i >= 16 and $i < 18) or ($i>65)) {
               $tipovoto = "voto opcional";
           }
           else {
               $tipovoto = "voto obrigatorio";
           }
       }
       echo "para sua idade o $tipovoto";
    ?>
    <a href="index.html">Voltar</a>
</body>
</html>