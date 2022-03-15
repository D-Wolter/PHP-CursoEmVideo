<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <form method="get" action="01valor.php">
    valor: <input type="text" name="v"/>
    <input type="submit" value="calcular"/>
    
    </form>
    </div>



    <?php
        $valor = $_GET["v"];
        echo "Digitou $valor";

    ?>

</body>
</html>