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
        $a = 3;
        $b = &$a;//& atribui uma variavel com outra se alterar uma outra altera com mesmo valor
        $b += 5;
        echo $a ;
        
        echo $b;


    ?>
</body>
</html>