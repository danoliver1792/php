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
       function teste($x) {
           $x += 2;
           echo "O valor de X é $x";
       }

       $a = 3;
       teste($a);
       echo "<p>O valor de A é $a</p>";
    ?>
</body>
</html>