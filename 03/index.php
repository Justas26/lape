<?php
echo '1 uzdavinys';
echo '<br>';
$aktorius='Bruse Wilis';
$aktorius2='Jason Statham';
echo substr($aktorius,0,8);
echo '<br>';
echo substr($aktorius2,0,5);
echo '<br>';
echo '2 uzdavinys';
echo '<br>';
$aktorius='Bruce Wilis';
$aktorius2='Jason Statham';
$masyvas = explode(" ", $aktorius);
echo strtoupper($masyvas[0]);
echo '<br>';
echo strtolower($masyvas[1]);
echo '<br>';
$masyvas2 = explode(" ", $aktorius2);
echo strtoupper($masyvas2[0]);
echo '<br>';
echo strtolower($masyvas2[1]);
echo '<br>';
echo '3 uzdavinys';
echo '<br>';
$aktorius='Bruse Wilis';
$aktorius2='Jason Statham';
$aktorius3='Jenifer Aniston';
echo $masyvas[0][0], $masyvas[1][0];
//$aktorius3 = substr($aktorius, -3).substr($aktorius2, -3);
//echo $aktorius3;
echo '<br>';
echo '4 uzdavinys';
echo '<br>';
$aktorius='Bruse Wilis';
$aktorius2='Jason Statham';
$aktorius3='Jenifer Aniston';
$masyvas = explode(" ", $aktorius3);
echo $masyvas[0][6], $masyvas [0][5],$masyvas[0][4],$masyvas[1][6],$masyvas[1][5],$masyvas[1][4];
echo '<br>';
echo '5 uzdavinys';
echo '<br>';
$eilute='An American in Paris';
$eilute = strtr($eilute, ['a' => '*', 'A' => '*']);
echo $eilute;
echo '<br>';
echo '6 uzdavinys';
echo '<br>';
$string = 'An American in Paris';
$find = ['A', 'a'];
$replace = ['A', 'a'];
str_replace($find,$replace,$string, $i);
echo $i;
echo '<br>';
echo '7 uzdavinys';
echo '<br>';
$eilute = 'An American in Paris';
$pattern = '/An American in Paris/';
$eilute2 = 'Breakfast at Tiffanys';
$pattern2 = '/Breakfast at Tiffanys/';
$eilute3 = '2001: A Space Odyssey';
$pattern3='/2001: A Space Odyssey/';
$eilute4 = 'Its a Wonderful Life';
$pattern4='/Its a Wonderful Life/';
$eilute=preg_replace($pattern, 'n mercn n Prs', $eilute);
echo $eilute;
echo '<br>';
$eilute2=preg_replace($pattern2, 'Brkfst t Tffnys', $eilute2);
echo $eilute2;
echo '<br>';
$eilute3=preg_replace($pattern3, '2001:  Spc dyssy', $eilute3);
echo $eilute3;
echo '<br>';
$eilute4=preg_replace($pattern4, 'ts  Wndrfl Lf', $eilute4);
echo $eilute4;
echo '<br>';
echo '8 uzdavinys';
echo '<br>';
$test='Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
$re = '/\d/';
$number=preg_match($re, $test, $matches);
echo $matches[0];
echo '<br>';
echo '9 uzdavinys';
echo '<br>';
$string='Dont Be a Menace to South Central While Drinking Your Juice in the Hood';
$string2='Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$stringToArray=explode(' ',$string);
$string2ToArray=explode(' ',$string2);
$stringLess5=0;
$string2Less5=0;
foreach($stringToArray as $word){
  if(mb_strlen($word)<=5){
    $stringLess5++;
  }
}
foreach($string2ToArray as $word){
  if(mb_strlen($word)<=5){
    $string2Less5++;
  }
}
echo $stringLess5;
echo '<br>';
echo $string2Less5;
echo '<br>';
echo '10 uzdavinys';
echo '<br>';
function stringRender ($length) {
  $characters = 'qwertyuiopasdfghjklzxcvbnm';
  $charactersLenght = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
      $randomString.= $characters[rand(0, $charactersLenght-1)];
  }
return   $randomString;
}
echo stringRender(3);
echo '<br>';
echo '11 uzdavinys';
echo '<br>';
$titleWords = $string . ' ' . $string2;
$re = '/,/m';
$subst = '';
$titleWords = preg_replace($re, $subst, $titleWords);
$poolOfWords = explode(' ', $titleWords);
$answerArr = [];
for ($i = 0; $i < 10; $i++) {
    $randomIndex = rand(0, count($poolOfWords)-1);
    $answerArr[$i] = $poolOfWords[$randomIndex];
    array_splice($poolOfWords, $randomIndex, 1);
}
$answerString = implode(' ', $answerArr);
echo $answerString;