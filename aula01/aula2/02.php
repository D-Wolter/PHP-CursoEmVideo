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
    /*
    comentario
    */
        $atual = $_GET["aa"]; //digite na url ?aa=2022
        echo "O ano atual é $atual e o ano anterior é " . --$atual;# decremento

    ?>
</body>
</html>