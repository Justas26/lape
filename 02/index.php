<?php
echo '1 uzdavinys';
$vardas='Justas';
$pavarde='Margelis';
$metai=1992;
$sieMetai=2050;
$amzius=$sieMetai-$metai;
echo '<br>';
echo 'As esu', $vardas, $pavarde, 'Man yra', $amzius ,'metai' ;
echo '<br>';
echo '2  uzdavinys';
$reiksme1 = rand(0, 4);
$reiksme2 = rand(0, 4);
echo '<br>';
echo $reiksme1;
echo '<br>';
echo $reiksme2;
echo '<br>';

if($reiksme1>$reiksme2){
    if($reiksme1>0 && $reiksme2>0){
$rezultatas1=$reiksme1/$reiksme2;
echo round($rezultatas1,2);
}
}

if($reiksme2>$reiksme1){
    if($reiksme1>0 && $reiksme2>0){
 $rezultatas2=$reiksme2/$reiksme1;
 echo round ($rezultatas2,2);
}
}
echo '<br>';
echo '3 uzdavinys';
echo '<br>';
$dalyvis1 = rand(0, 25);
$dalyvis2 = rand(0, 25);
$dalyvis3 = rand(0, 25);
if($dalyvis2<$dalyvis1&&$dalyvis1<$dalyvis3
||$dalyvis3<$dalyvis1&&$dalyvis1<$dalyvis2){
    echo 'dalyvis vienas yra vidurinis.'.$dalyvis1;
}
elseif($dalyvis1<$dalyvis2&&$dalyvis2<$dalyvis3
||$dalyvis3<$dalyvis2&&$dalyvis2<$dalyvis1){
    echo'dalyvis du yra vidurinis.'.$dalyvis2;
}
else{
    echo 'dalyvis trys yra vidurinis.'.$dalyvis3;
}


echo '<br>';
echo '4 uzdavinys';
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
if($a>=$b+$c||$b>=$a+$c||$c>=$b+$a){
    echo '<br>';
    echo 'Trikampis negali susidaryti';
}
echo '<br>';
echo '5 uzdavinys';
echo '<br>';
$sk1 = rand(0, 2);
$sk2 = rand(0, 2);
$sk3 = rand(0, 2);
$sk4 = rand(0, 2);
$nulius=0;
$vienetus=0;
$dvejetus=0;
if($sk1==0){
    $nulius++;
    echo $nulius; 
    echo '<br>';
   
}
if($sk2==0){
    $nulius++;
    echo $nulius;
    echo '<br>'; 
}
if($sk3==0){
    $nulius++;
    echo $nulius;
    echo '<br>'; 
}
if($sk4==0){
    $nulius++;
    echo $nulius; 
    echo '<br>';
}
if($sk1==1){
    $vienetus++;
   echo $vienetus;
   echo '<br>';
}
if($sk2==1){
    $vienetus++;
   echo $vienetus;
   echo '<br>';
}
if($sk3==1){
    $vienetus++;
    echo $vienetus; 
    echo '<br>';
}
if($sk4==1){
    $vienetus++;
   echo $vienetus;
   echo '<br>';
}
if($sk1==2){
    $dvejetus++;
    echo $dvejetus;
    echo '<br>';
}
if($sk2==2){
    $dvejetus++;
    echo $dvejetus;
    echo '<br>';
}
if($sk3==2){;
    $dvejetus++;
    echo $dvejetus;
    echo '<br>';
}
if($sk4==2){
    $dvejetus++;
    echo $dvejetus;
    echo '<br>';
}
echo '<br>';
echo '6 uzdavinys';
$skaicius = rand(1, 6);
echo "<h$skaicius> $skaicius</h$skaicius>";
echo '<br>';
echo '7 uzdavinys';
echo '<br>';
$skaicius1 = rand(-10, 10);
$skaicius2 = rand(-10, 10);
$skaicius3 = rand(-10, 10);
if($skaicius1<0){
    echo 'skaicius yra zalias';
    echo '<br>';
}
if($skaicius2<0){
    echo 'skaicius yra zalias';
    echo '<br>';
}
if($skaicius3<0){
    echo 'skaicius yra zalias';
    echo '<br>';
}
if($skaicius1==0){
    echo 'skaicius yra raudonas';
    echo '<br>';
}
if($skaicius2==0){
    echo 'skaicius yra raudonas';
    echo '<br>';
}
if($skaicius3==0){
    echo 'skaicius yra raudonas';
    echo '<br>';
}
if($skaicius1>0){
    echo 'skaicius yra melynas';
    echo '<br>';
}
if($skaicius2>0){
    echo 'skaicius yra melynas';
    echo '<br>';
}
if($skaicius3>0){
    echo 'skaicius yra melynas';
}
echo '<br>';
echo '8 uzdavinys';
echo '<br>';
$zvakes=rand(5,3000);
$kainaBeNuolaidos=$zvakes*1;
if ($kainaBeNuolaidos>1000&&$kainaBeNuolaidos<2000){
    $nuolaida=($kainaBeNuolaidos*3)/100;
    $galutineKaina=$kainaBeNuolaidos-$nuolaida;
    echo $zvakes;
    echo '<br>';
    echo $galutineKaina;
    echo '<br>';
}
if($kainaBeNuolaidos>2000){
    $nuolaida=($kainaBeNuolaidos*4)/100;
    $galutineKaina=$kainaBeNuolaidos-$nuolaida;
    echo $zvakes;
    echo '<br>';
    echo $galutineKaina;
}
echo '<br>';
echo '9 uzdavinys';
echo '<br>';
$kintamasis1=rand(0,100);
$kintamasis2=rand(0,100);
$kintamasis3=rand(0,100);
$suma=0;
$elementai=0;
$suma=$kintamasis1+$kintamasis2+$kintamasis2;
$elementai++;
echo 'vidurkis yra:'.$suma/$elementai;
echo '<br>';
if($kintamasis1<10&&$kintamasis1>90){
    $suma+=$kintamasis1;
    $elementai++;
}
if($kintamasis2<10&&$kintamasis2>90){
    $suma+=$kintamasis2;
    $elementai++;
}
if($kintamasis2<10&&$kintamasis2>90){
    $suma+=$kintamasis3;
    $elementai++; 
}
if($elementai==0){
    echo'nera is ko skaiciuoti vidurkio';
}else{
    echo 'Specifinis vidurkis:'.$suma/$elementai;

}
echo '10 uzdavinys.<br>';
$seconds = rand(0, 59);
$minutes = rand(0, 59);
$hours = rand(0, 23);
$time = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
echo 'Time: ' . $time;
$additionalSec = rand(0, 300 );
$sumOfSeconds = $seconds + ($minutes * 60) + ($hours * 3600) + $additionalSec;
// $newHours = floor($sumOfSeconds / 3600);
// $newMinutes = floor(($sumOfSeconds - ($newHours * 3600)) / 60);0
// $newSeconds = $sumOfSeconds - ($newHours * 3600) - ($newMinutes * 60);
// echo '<br>Clock + ' . $additionalSec . ' seconds: ' . $newHours . ':' . $newMinutes. ':' . $newSeconds;
$newNewTime = gmdate('H:i:s', $sumOfSeconds);
echo '<br>Clock + ' . $additionalSec . ' seconds: ' . $newNewTime;
echo '<br>';echo '<br>';
echo '<br>';
echo '11 uzdavinys';
echo '<br>';
$var1 = rand(1000, 9999);
$var2 = rand(1000, 9999);
$var3 = rand(1000, 9999);
$var4 = rand(1000, 9999);
$var5 = rand(1000, 9999);
$var6 = rand(1000, 9999);
 
echo "$var1, $var2, $var3, $var4, $var5, $var6 <br>";
 
if ($var1 < $var2) {
    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;
}
if ($var2 < $var3) {
    $temp = $var2;
    $var2 = $var3;
    $var3 = $temp;
}
if ($var3 < $var4) {
    $temp = $var3;
    $var3 = $var4;
    $var4 = $temp;
}
if ($var4 < $var5) {
    $temp = $var4;
    $var4 = $var5;
    $var5 = $temp;
}
if ($var5 < $var6) {
    $temp = $var5;
    $var5 = $var6;
    $var6 = $temp;
}
if ($var1 < $var2) {
    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;
}
if ($var2 < $var3) {
    $temp = $var2;
    $var2 = $var3;
    $var3 = $temp;
}
if ($var3 < $var4) {
    $temp = $var3;
    $var3 = $var4;
    $var4 = $temp;
}
if ($var4 < $var5) {
    $temp = $var4;
    $var4 = $var5;
    $var5 = $temp;
}
if ($var1 < $var2) {
    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;
}
if ($var2 < $var3) {
    $temp = $var2;
    $var2 = $var3;
    $var3 = $temp;
}
if ($var3 < $var4) {
    $temp = $var3;
    $var3 = $var4;
    $var4 = $temp;
}
if ($var1 < $var2) {
    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;
}
if ($var2 < $var3) {
    $temp = $var2;
    $var2 = $var3;
    $var3 = $temp;
}
if ($var1 < $var2) {
    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;
}
 
echo "$var1, $var2, $var3, $var4, $var5, $var6 <br>";