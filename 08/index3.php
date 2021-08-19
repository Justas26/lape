<?php
$color="green";
if( $_SERVER['REQUEST_METHOD']=="POST"){
    $color="yellow";
     header('Location: http://localhost/lape/08/index3.php');
          die;
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
        background-color:<?=$color?>
      }
      </style>
</head>
<body class="bg-color">
    <form method="GET" action="">
          <button type="submit">GET </button>
    </form> 
    <form method="POST" action="">
        <button type="submit">POST </button>
    </form>   
</body>
</html>