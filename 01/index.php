<?php
$egzaminoRezultatas = rand(1, 10);
if($egzaminoRezultatas>4){
echo 'egzaminas islaikytas';
}
else{
   echo 'egzaminas neislaikytas';
}
echo '<br>';
$automobilioGreitis = rand(40, 125);
if($automobilioGreitis>60){
$virsytasGreitis=125-$automobilioGreitis;
$bauda=$virsytasGreitis*5;
echo $automobilioGreitis;
echo '<br>';
echo $virsytasGreitis;
echo '<br>';
echo $bauda;
}
echo '<br>';

$dalyvis1 = rand(1, 4);
$dalyvis2 = rand(1, 4);
if ($dalyvis1+$dalyvis2>6){
    echo $dalyvis1;
    echo '<br>';
    echo $dalyvis2;
    echo '<br>';
    echo 'Laimejo';
}
else{
    echo 'Pralaimejo';
}