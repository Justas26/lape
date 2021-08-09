<?php
echo '1 uzdavinys';
function htagas($tekstas){
return "<h1> $tekstas</h1>";
}
echo htagas('Labas rytas pasauli');
echo '<br>';
echo '2 uzdavinys';
echo '<br>';
function htagasSkaiciai($tekstas,$skaicius){
    return "<h$skaicius> $tekstas</h$skaicius>";
    }
echo htagasSkaiciai('Labas rytas pasauli',rand(1,6));
echo '<br>';
echo '3 uzdavinys';
echo '<br>';
$sting = md5(time());
echo '<br>';
echo $sting;
echo '<br>';
echo '<pre>';

echo '<br>';
echo func($sting);

function func ($prop) {
    $lookFor = $re = '/[0-9]{1,}/m';
    $str = $prop;
    
    preg_match_all($re, $str, $matches,PREG_SET_ORDER, 0);
    
    // Print the entire match result
    foreach ($matches as $key) {
        foreach ($key as $value) {
            echo "<h1>$value</h1>";
        }
    }
}
echo '<br>';
echo '4 uzdavinys';
echo '<br>';
function exercise4(int $number){
    $number = abs($number);
    $quantity = 0;

    for ($i = $number - 1; $i > 1; --$i) {
        if ($number % $i == 0) {
            $quantity++;
        }
    }

    return $quantity;
}
echo exercise4(4);
echo '<br>';
echo '5 uzdavinys';
echo '<br>';
for ($i=0; $i < 100; $i++) { 
    $mas[] = rand(33,77);
    $mas2[] = division($mas[$i]);
}

for($j = 0; $j < count($mas); $j++) {
    for($i = 0; $i < count($mas)-1; $i ++){
        if(division($mas[$i]) < division($mas[$i+1])) {
            $temp = $mas[$i];
            $mas[$i]=$mas[$i+1];
            $mas[$i+1]=$temp;
        }
    }       
}

print_r($mas);
function division(int $num){
    $count = 0;
    for($i = $num; $i > 2; $i--){
        if($num % ($i-1) == 0){
            $count++;
        } 
    }
    return $count;
}
/*echo '<br>';
echo '6 uzdavinys';
echo '<br>';
function exercise5(int $number){
    $number = abs($number);
    $quantity = 0;
for ($i=0; $i < 100; $i++) { 
    $mas[] = rand(333,777);
     for ($i = $number - 1; $i > 1; --$i) {
        if ($number % $i == 0) {
            $quantity++;
            unset($mas[$i]);
        }

    }   
}

return print_r($mas);
}
echo exercise5(7);
*/
$tevas =[];
$gylis = rand(10,30);
foreach(range(0,rand(10,20)-1) as $i){
    $tevas[]=rand(0,10);
}
$tevas[] = generator($gylis);
echo "gylis lygus : $gylis <br>";
 
function generator($dept){
    $arrLength=rand(10,20);
    $arr=[];
    for($i=0;$i<$arrLength-1;$i++){
        $arr[]=rand(10,20);
    }
    if($dept>0){
        $arr[]=generator($dept-1);
    }
    else{
        $arr[]=0;
    }
 return $arr; 
}
print_r($tevas);
echo '<br>';
echo '8 uzdavinys';
echo '<br>';
$sumAll=0;
function sumArr($arr){
   static $sum = 0;
        foreach($arr as $val) {
            if(!is_array($val)) {
                $sum += $val;
            } else {
                sumArr($val);
            }
    }
    return $sum;
}
 
$sumAll=sumArr($tevas);;
/*echo '<br>';
echo '9 uzdavinys';
echo '<br>';
$array9=[];
foreach(range(0,2) as $i){
    $array9[]=rand(1,33);
}
function test(&$array)
{
    $arr = array_slice($array, -3, 3);
    foreach ($arr as $value) {
        if (dalyba($value)) {
            $random = rand(1, 33);
            $array[] = $random;
            //print_r($array);
            test($array);
            break;
        }
    }
}
test($array9);
*/
/*echo '<br>';
echo '10 uzdavinys';
echo '<br>';
$tenArr= [];
foreach(range(0, 9) as $y) {
    foreach(range(0, 9) as $x) {
        $tenArr[$y][$x] = rand(1, 100);
    }
}

function checkArr(&$array) {
    $primeValues = 0;
    $primeCount = 0;

    foreach($array as $subArr) {
        foreach($subArr as $value) {
            if (divisionCount($value) === 0) {
                $primeValues += $value;
                $primeCount++;
            }
        }
    }
    if ($primeValues/$primeCount < 70) {
        $smallest = PHP_INT_MAX;
        $y = 0;
        $x = 0;
        foreach($array as $ykey => $subArr) {
            foreach($subArr as $xkey => $value) {
                if ($value < $smallest) {
                    $smallest = $value;
                    $y = $ykey;
                    $x = $xkey;
                }
            }
        }
        $array[$y][$x] += 3;
        echo 'Send';
        checkArr($array);
    } else {
        return;
    }
}

checkArr($tenArr);
print_r($tenArr);
*/