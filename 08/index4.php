<?php
$color="gray";
$letters=['A','B','C','D','E','F','G','H','I'];
if( $_SERVER['REQUEST_METHOD']=="POST"&& isset($_POST['checkbox'])){
    echo count(($_POST['checkbox']))."/".$_POST['times'];
    $color="white";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .bg-color{
        background-color:<?$color?>;
      }
      .lbl{
          color:white;
      }
      </style>
</head>
<body class="bg-color">
    <?php if( $_SERVER['REQUEST_METHOD']=="GET"){?>
     <form method="POST" action="">
          <?php for($i=0; $i<rand(3,10);$i++ ){?>
            <label class="lbl" for="a<?$i?>"><?=$letters[$i]?></label>
             <input type="checkbox" name="checkbox[]" id="a<?=$i?>">
          <?php }?>
          <input type="hidden" name="times" value="<?= $i?>">
           <button type="submit">Keisti </button>
    </form> 
    <?php } ?>
</body>
</html>