<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
  <?php
      function soma ($a, $b) {
        $s = $a + $b;
        echo "<p>A soma vale $s</p>";
      }

      soma(3, 4);
      soma(6, 6);
      soma(5, 2);

  ?>
  </body>
</html>