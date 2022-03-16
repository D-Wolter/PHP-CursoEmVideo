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
        function teste (&$x) {
            $x += 2;
            echo "<p>o valor de x e $x</p>";
        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A e $a</p>"
    ?>

</div>

</body>
</html>