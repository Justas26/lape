 <?php
     $color='white';
     if(isset($_GET['color'])){
        $color= $_GET['color']; 
    
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
        background-color:#<?=$color?>;
        background-color:<?=$color?>;
      }
      </style>
</head>
<body class="bg-color">
   <a href="http://localhost/lape/08/index2.php"> </a> 
   <form method="GET">
        <label>spalvos kodas</label><br>
        <input type="text" name="color" value=""><br>
        <input type="submit" value="keisti">
    </form>  
</body>   
</html>