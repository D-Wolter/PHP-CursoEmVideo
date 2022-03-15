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
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Voce nasceu em $a e tera $i Anos";
        if ($i < 16) {
          $vo = "nao vota";
          $d = "restricao para dirigir";
        }
        else {
          if (($i >= 16 && $i < 18) || ($i>65)) {
          $v = "voto opcional";
          $d = "temporaria para dirigir";
          }
          else {
            $v = "voto obrigatorio";
            $d = "permisao para dirigir";
          }
        }
        
        echo " <br>Com essa idade voce o $v e tambem $d;"
    ?>
</div>
</body>
</html>
 