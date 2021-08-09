<?php
echo '<br>';
echo '1 uzdavinys';
echo '<br>';
foreach(range(0,29) as $i){
    $atsitiktinisMasyvas[$i]=rand(5,25);
}
echo '<pre>';
echo '<br>';
print_r($atsitiktinisMasyvas);
echo '<br>';
echo '2 uzdavinys';
echo '<br>';
echo 'a';
echo '<br>';
$didesniUZ10=0;
foreach($atsitiktinisMasyvas as $value){
    if($value>10){
        $didesniUZ10++;
    }
}
echo  $didesniUZ10 . '<br>';
echo 'b';
echo '<br>';
$max=[];
$maxValue=PHP_INT_MIN;
foreach ($atsitiktinisMasyvas as $key => $value) {
    if($value>$maxValue){
        $max=[];
        $maxValue=$value;
           }
    if($value==$maxValue){
        $max[]=$key;
    }
}
echo '<pre>';
echo '<br>';
print_r($atsitiktinisMasyvas);
echo '<br>';
print_r($max);
echo '<br>';
echo 'c';
echo '<br>';
$suma=0;
foreach ($atsitiktinisMasyvas as $index => $value) {
    if($index%2==0){
    $suma+=$index;
    }
}
echo $suma;
echo '<br>';
echo 'd';
echo '<br>';
$masyvas=[];
foreach ($atsitiktinisMasyvas as $key => $value) {
$masyvas[]=$value-$key;
}
echo '<pre>';
echo '<br>';
print_r($masyvas);
echo '<br>';
echo 'e';
echo '<br>';
foreach (range(1,10) as $_) {
$masyvas[]=rand(5,25);
}
echo '<pre>';
echo '<br>';
print_r($masyvas);
echo '<br>';
echo 'f';
echo '<br>';
$porinis=[];
$neporinis=[];
foreach ($masyvas as $key => $value) {
    $key % 2 ? $neporinis[]=$value:$porinis[]=$value;
}
print_r($porinis);
print_r($neporinis);
echo '<br>';
echo 'g';
echo '<br>';
foreach ($masyvas as $key => $val) {
    if ($key % 2 === 0 && $val > 15) {
        $masyvas[$key] = 0;
    }
}

print_r($masyvas);
echo '<br>';
echo 'h';
echo '<br>';
foreach ($masyvas as $key => $val) {
    if ($val > 10) {
        $indeksas = $key;
        break;
    }
}
echo $indeksas;
echo '<br>';
echo 'i';
echo '<br>';
foreach ($masyvas as $key => $val) {
    if ($key % 2 === 0) {
        unset($masyvas[$key]);
    }
}
print_r($masyvas);
echo '<br>';
echo '3 uzdavinys';
echo '<br>';
$atsitiktinesRaides=[];
$raides=['A','B','C','D'];
foreach(range(1,200) as $i){
    $atsitiktinesRaides[]=$raides[rand(0,3)];
}
echo '<br>';
print_r($atsitiktinesRaides);
echo '<br>';
echo '<br>';
print_r(array_count_values($atsitiktinesRaides));
echo '<br>';
echo '4 uzdavinys';
echo '<br>';
$atsitiktinesRaides=[];
$raides=['A','B','C','D'];
foreach(range(1,200) as $i){
    $atsitiktinesRaides[]=$raides[rand(0,3)];
} 
asort($atsitiktinesRaides);
foreach($atsitiktinesRaides as $key => $Value) {
}
print_r($atsitiktinesRaides);
echo '<br>';
echo '5 uzdavinys';
echo '<br>';
$masyvas1=[];
$masyvas2=[];
$masyvas3=[];
$masyvas123=[$masyvas1,$masyvas2,$masyvas2];
foreach(range(0,2)as $key){
    foreach(range(1,200)as $i){
        $rand=rand(0,3);
        if($rand==0){
            $masyvas123[$key][$i]='A';
        }
        else if($rand==1){
            $masyvas123[$key][$i]='B';
        }
        else if($rand==2){
            $masyvas123[$key][$i]='C';
        }
        else{
            $masyvas123[$key][$i]='D';
        }
    }
}

$masyvasCombine=[];
foreach(range(1,200)as $i){
    $masyvasCombine[$i]=$masyvas123[0][$i].$masyvas123[1][$i].$masyvas123[2][$i];
}
print_r($masyvasCombine);
sort($masyvasCombine);
print_r($masyvasCombine);
$uniqueValue=0;
$uniqueCombination=1;
for($i=1;$i<200; $i++){
    if($masyvasCombine[$i]!=$masyvasCombine[$i-1]){
        $uniqueCombination++;
            if($i!=199&&$masyvasCombine[$i]!=$masyvasCombine[$i-1]){
                $uniqueValue++;
            }
    }
}
echo $uniqueCombination;
echo '<br>';
echo $uniqueValue;
echo '<br>';
echo '6 uzdavinys';
echo '<br>';
$masyvas1=[];
$masyvas2=[];
foreach(range(0,99)as $index){
    do{
        $value=rand(100,999);
    }while(array_search($value,$masyvas1,true)!==false);
    $masyvas1[]=$value;
}
print_r($masyvas1);
echo '<br>';
foreach(range(0,99)as $index){
    do{
        $value=rand(100,999);
    }while(array_search($value,$masyvas2,true)!==false);
    $masyvas2[]=$value;
}
print_r($masyvas2);
echo '<br>';
echo '7 uzdavinys';
echo '<br>';
$masyvas3=[];
foreach($masyvas1 as $value){
    if(array_search($value,$masyvas2,true)===false){
        $masyvas3[]=$value;
    }
}
print_r($masyvas);
echo '<br>';
echo '8 uzdavinys';
echo '<br>';
$masyvas4=[];
foreach($masyvas1 as $value){
    if(array_search($value,$masyvas2,true)===false){
        $masyvas4[]=$value;
    }
}
print_r($masyvas4);
echo '<br>';
echo '9 uzdavinys';
echo '<br>';
$arraysCombined=array_combine($masyvas1,$masyvas2);
print_r($arraysCombined);
echo '<br>';
echo '10 uzdavinys';
echo '<br>';
$array = [];

for ($i= 0 ; $i <10; $i++) {
    if (count($array) <2) {
        $array[] = rand(5,25);
    }
    else {
        $array[] = $array[count($array)-2] +$array[count($array)-1];
    }
}
echo '<pre>';
echo '<br>';
echo count($array);
print_r($array);
echo '<br>';
echo '11 uzdavinys';
echo '<br>';
$pirmaPuse=0;
$antraPuse=0;
$pirminisMasyvas=[];
$counter=0;
//generuoja skaiciu masyva
do{
$random=rand(0,300);
    if(!in_array($random,$pirminisMasyvas)){
    $pirminisMasyvas[]=$random;
    $counter++;}
}
while($counter<101);
//suranda didziausia skaiciu reiksme issaugo ir istrina is masyvo
$didziausiasSkaicius=max($pirminisMasyvas);
$indexOfMax=(array_search(max($pirminisMasyvas), $pirminisMasyvas));
unset($pirminisMasyvas[$indexOfMax]);
//tikrina ar masyvo skaiciai iki vidurinio is abieu pusiu nesiskiria per 30 , jai skirias sumaiso masyva. 
do{
    shuffle($pirminisMasyvas);
foreach ($pirminisMasyvas as $key => $value) {
    if($key<50){
        $pirmaPuse+=$value;
    }
    else{
        $antraPuse+=$value;
    }
}
}
while($pirmaPuse-$antraPuse>30);
//dalinam masyva
$masyvasPoPadalinimo=array_chunk($pirminisMasyvas,50);
 
sort($masyvasPoPadalinimo[0]);
rsort($masyvasPoPadalinimo[1]);
//jungiam masyva
array_push($masyvasPoPadalinimo[0],$didziausiasSkaicius);
$sujungtasMasyvas=array_merge($masyvasPoPadalinimo[0],$masyvasPoPadalinimo[1]);
 
print_r( $sujungtasMasyvas);

