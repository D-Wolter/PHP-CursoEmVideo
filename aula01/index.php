<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body> <!--na url para setar o valor recebido ecreve ?p=150-->
    <?php 
        $preco = $_GET["p"];
        echo "O preço recebido foi R$".number_format($preco, 2);
        $preco -= $preco*10/100;
        echo "<br/> E o novo preço com 10% de desconto sera R$ ".number_format($preco, 2);
        


    ?>
</body>
</html>