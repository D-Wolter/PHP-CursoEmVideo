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
        $v[0] = 4;
        $v[1] = 8;
        $v[2] = 3;
        print_r($v);/* print_r fatiando o array */


        $t = "O rato roeu a roupa do rei de roma  a rainha raicvosa rasgou o resto da roupa do rei de roma";
        echo $t;
        $r = wordwrap($t, 20, "<br>\n");
        echo $r;

        $txt = "daniel wolter";
        $tamanho = strlen($txt);

        $nome = '  jose da Silva   ';
        echo(strlen($nome));
        $novo = trim($nome);
        echo($novo);


    ?>

</div>

</body>
</html>