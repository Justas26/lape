<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    echo '1 uzdavinys';
    echo '<br>';
    echo 'b';
    echo '<br>';
    foreach(range(0,29) as $i){
    $atsitiktinisMasyvas[$i]=rand(20,40);
    }
    foreach($atsitiktinisMasyvas as $value){
    echo  $value ." ";
   
    }
    echo '<br>';
    echo '2 uzdavinys';
    foreach(range(0,9) as $i){
    $masyvas[$i]=rand(0,9);
    }
    echo '<pre>';
    print_r($masyvas);
     echo '<br>';
     echo 'b';
     echo '<br>';
    foreach(range(0,9) as $i){
    $masyvas2[$i]=rand(10,20);
    }
    print_r($masyvas2);
    echo '<br>';
    echo 'c';
    echo '<br>';
    for($i=0; $i<10; $i++){
        for($j=0; $j<count($masyvas2); $j++){
            echo $masyvas2[$j]. " ";
        }

    } 
    echo '<br>';
    echo '3 uzdavinys';
    $komoda=[];
    foreach(range(1,10)as $stalcius){
        foreach(range(1,10)as $skyrelis){
        $komoda[$stalcius][$skyrelis]=rand(0,9);
       
    }
}
print_r($komoda);
    echo '<br>';
     echo 'b';
     echo '<br>';
    foreach ($komoda as $key => $valueKom) {
        echo '<br>' .$key ." ";
        foreach($valueKom as $key => $value){
            echo $value. " ";

        }
    }
    echo '<br>';
     echo 'c';
     echo '<br>';
    foreach ($komoda as $key => $valueKom) {
         echo '<br>' .$key ." ";
        foreach($valueKom as $key => $value){
            $rezultatas=$value*$value;
            echo $rezultatas. " ";
        }
    }
    echo '<br>';
    echo '4 uzdavinys';
    echo '<br>';
        $gyvūnas['species']='Plesrunai';  
        $gyvūnas['age']=7; 
        $gyvūnas['name']='pumos';  
        $gyvūnas['description']='Pikti';  
        
    print_r($gyvūnas);
    echo '<br>';
    echo '5 uzdavinys';
    echo '<br>';
    $names=['Pinokis','Buratinas','Lolo','Plesrys','Kardadantis','Pliusas','Cece','Nuodas','Raudonis','Fliperis'];
    $species=['Kengura','Puma','Meska','Liutas','Tigras','Erelis','Muse','Voras','Vezys','Delfinas'];
    $description=['Sokli','Juoda','Megsta medu','Plesrus','Pavalges buana ramus','Plesrus paukstis','Ikyri','Mezga tinkla','Turi ciuptuvus','Mielas'];
    print_r($names);
    print_r($species);
    print_r($description);
    echo '<br>';
    echo 'b uzdavinys';
    echo '<br>';
    $gyvūnai = [];
    for($i=0; $i<20; $i++){
        $gyvūnai[$i]['names']=$names[rand(0,count($names)-1)];
         $gyvūnai[$i]['species']=$species[rand(0,count($species)-1)];
          $gyvūnai[$i]['age']=rand(0,12);
           $gyvūnai[$i]['description']=$description[rand(0,count($description)-1)];
    }
    print_r($gyvūnai);
    echo '<br>';
    echo 'c uzdavinys';
    echo '<br>';
    for($i=0; $i<count($gyvūnai); $i++){
        echo $gyvūnai[$i]['names'] ." " .$gyvūnai[$i]['species'] ." " .$gyvūnai[$i]['age'] . " " .$gyvūnai[$i]['description'].'<br>';
    }
    echo '<br>';
    echo '6 uzdavinys';
    echo '<br>';
    $skaicius =10;
    $ilgis = 10;
    for($i=1; $i<=$ilgis; $i++){
        for($j=1; $j<=$skaicius;$j++){
                echo "$i * $j = ".$i *$j. "<br>";
        }
    }
       
     echo 'funkcijos';
    echo '<br>';
    echo '1 uzdavinys'; 
    echo '<br>';
    function tekstas($tekstas){
    return  $tekstas;
    }
    echo tekstas('Labas rytas pasauli');
    echo '<br>';
    echo 'b';
     echo '<br>';
    function tekstas2 ($tekstas2){     
    return 'labas'  .$tekstas2;
    }
    echo tekstas2(' vakaras kolegos');
    echo '<br>';
     echo 'c';
     echo '<br>';
    function piReiksmes ($pi=3.14159265359){     
    return round($pi,8);
    }
    echo piReiksmes();
     echo '<br>';
     echo 'd';
     echo '<br>';
    function sandauga ($sk1,$sk2){    
    $rezultatas=$sk1*$sk2;    
    return $rezultatas;
    }
    echo sandauga(8,5);
     echo '<br>';
     echo 'e';
     echo '<br>';
    function plotas($R){
        $Plotas=piReiksmes()*$R*$R;
         return $Plotas;
    }
      echo plotas(64);
    
    echo '<br>';
     echo 'f';
     echo '<br>';
    function ilgis($R){
        $ilgis=2*piReiksmes()*$R;
        return $ilgis;
    }
    echo ilgis(8);
      echo '<br>';
     echo 'g';
     echo '<br>';
     function info($R){
         echo 'apskritimo ilgis:'.ilgis($R).'<br>';
         echo 'apskritimo plotis:'.plotas($R).'<br>';
     }
     echo info(10);
     

?>
    
</body>
</html>

