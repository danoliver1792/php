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
        $p = "Leite";
        $pr = 4.5;
        //Esse printf seria igual a: echo "O $p custa R$ " . number_format($pr, 2);
        printf("O %s custa R$ %.2f", $p, $pr);
        //O printf escreve a tela já com formatação. %s mostra uma string e vai substituir a variável $p. %f mostra um número real e o dois com ponto na frente define o formato do número.
        //A princípio, os parâmetros do printf: %d - valor decimal (positivo ou negativo); %u - valor decimal sem sinal (apenas postivos); %f - valor real e %s para string.
    ?>
</body>
</html>