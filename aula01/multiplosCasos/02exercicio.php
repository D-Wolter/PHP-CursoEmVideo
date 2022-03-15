<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $d = isset($_GET["ds"])?$_GET["ds"]:0;
        switch ($d) {
          case 2:
          case 3:
          case 4:
          case 5:
          case 6:
            echo "Levamnta e vai estudar! :)";
            break;
          case 6:
          case 7:
            echo "descanse";
            break;
          default:
            echo "dia semana invalido";

        }
        
        
        ?>
        <a href="javascript:history.go(-1)" class="botao">voltar</a>
</div>
</body>
</html>
 