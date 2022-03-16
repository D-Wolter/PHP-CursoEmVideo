<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_CSS/estilo.css">
</head>
<body>
<div>
    <?php
        $p = "Leite";
        $pr = 4.5;
        echo "O $p custa R$ $pr<br>";
        echo "O $p custa R$ ".number_format($pr, 2);
        printf ("<br>O %s custa Rs %.2f", $p,$pr);
    ?>

</div>

</body>
</html>