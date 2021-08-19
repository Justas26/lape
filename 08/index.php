  <?php
    $color='black';
     if(isset ($_GET['color'])){
         $color='red';
     }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=>">
    <title>Document</title>
    <style>
      .bg-color{
        background-color:<?=$color?>;

      }
      </style>
</head>
  <body class="bg-color">
 <a href="http://localhost/lape/08/index.php?color=1">Raudonas</a>
  <a href="http://localhost/lape/08/index.php">Juodas </a>
</body>
</html>