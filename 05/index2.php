<?php
echo '1 uzdavinys';
echo '<br>';
$komoda = [];
foreach (range(1, 10) as $stalcius) {
    foreach (range(1, 5) as $skyrelis) {
        $komoda[$stalcius][$skyrelis] = rand(5, 25);
    }
}
echo '<pre>';
print_r($komoda);
echo '2 uzdavinys';
echo '<br>';
echo 'a';
echo '<br>';
$sk = 0;
foreach ($komoda as $stalcius) {
    foreach ($stalcius as $skyrelis) {
        if ($skyrelis > 10) {
            $sk++;
        }
    }
}
print_r($sk);
echo '<br>';
echo 'b';
echo '<br>';
$max = 0;
foreach ($komoda as $stalcius) {
    foreach ($stalcius as $skyrelis => $stalcius2) {
        if ($stalcius2 > $max) {
            $max = $stalcius2;
        }
    }
}
print($max);
echo '<br>';
echo 'c';
echo '<br>';
$sum = [];
foreach ($komoda as $item) {
    foreach ($item as $key => $value) {
        if (!isset($sum[$key])) $sum[$key] = 0;
        $sum[$key] += $value;
    }
}
print_r($komoda);
print_r($sum);
echo '<br>';
echo 'd';
echo '<br>';
$komoda2 = [];
foreach (range(1, 10) as $stalcius) {
    foreach (range(1, 7) as $skyrelis) {
        $komoda2[$stalcius][$skyrelis] = rand(5, 25);
    }
}
print_r($komoda2);
echo '<br>';
echo 'e';
echo '<br>';
$sum2 = [];
foreach ($komoda2 as $value) {
    foreach ($value as $key => $number) {
        (!isset($sum2[$key])) ?
            $sum2[$key] = $number :
            $sum2[$key] += $number;
    }
}
print_r($komoda2);
print_r($sum2);
echo '<br>';
echo '3 uzdavinys';
echo '<br>';
$komoda4 = [];
foreach (range(1, 10) as $stalcius) {
    foreach (range(rand(2, 20), rand(2, 20)) as $skyrelis) {
        $komoda4[$stalcius][$skyrelis] = chr(rand(65, 90));
    }
}
foreach ($komoda4 as $key => $value) {
    sort($komoda4[$key]);
}
print_r($komoda4);
echo '<br>';
echo '4 uzdavinys';
echo '<br>';
array_multisort($komoda4, SORT_ASC);
print_r($komoda4);
foreach (range(0, (count($komoda4) - 2)) as $i) {
    foreach (range(($i + 1), (count($komoda4) - 1)) as $j) {
        if (count($komoda4[$i]) > count($komoda4[$j])) {
            $temp = $komoda4[$i];
            $komoda4[$i] = $komoda4[$j];
            $komoda4[$j] = $temp;
        }
    }
}
foreach (range(0, (count($komoda4) - 2)) as $i) {
    foreach (range(($i + 1), (count($komoda4) - 1)) as $j) {
        if (!in_array('K', $komoda4[$i]) && in_array('K', $komoda4[$j])) {
            $temp = $komoda4[$i];
            $komoda4[$i] = $komoda4[$j];
            $komoda4[$j] = $temp;
        }
    }
}
print_r($komoda4);
echo '<br>';
echo '5 uzdavinys';
echo '<br>';
$komoda5 = [];
$idNumber = rand(1, 1000000);
$rowNumber = rand(0, 100);
//  rand(0 , 100)
$idValues = [];
$rowValues = [];
foreach (range(0, 29) as $i) {
    $komoda5[$i] = ['user_id' => 1, 'place_in_row' => 2];
}
foreach ($komoda5 as $key => $value) {
    while (in_array($idNumber, $idValues)) {
        $idNumber = rand(1, 1000000);
    }

    $idValues[] = $idNumber;
    $komoda5[$key]['user_id'] = $idNumber;
    while (in_array($rowNumber, $rowValues)) {
        $rowNumber = rand(0, 100);
    }
    $rowValues[] = $rowNumber;
    $komoda5[$key]['place_in_row'] = $rowNumber;
}
print_r($komoda5);
echo '<br>';
echo '6 uzdavinys';
echo '<br>';
sort($komoda5);
print_r($komoda5);
function sortt($a, $b)
{
    return $b['place_in_row'] > $a['place_in_row'];
};
usort($komoda5, 'sortt');
print_r($komoda5);
echo '<br>';
echo '7 uzdavinys';
echo '<br>';
function nameSurname($parametras)
{
    $masyvasRaides = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $i = 0;
    $raides = '';
    $text = '';
    while ($i <= $parametras) {
        $raides = $masyvasRaides[rand(0, (count($masyvasRaides)) - 1)];
        $text .= $raides; // sitas budas zimei geriasnis negu mano su ifais
        $i++;
    }
    return $text;
}
$komoda5 = [];
$idNumber = rand(1, 1000000);
$rowNumber = rand(0, 100);
//  rand(0 , 100)
$idValues = [];
$rowValues = [];
foreach (range(0, 29) as $i) {
    $komoda5[$i] = ['user_id' => 1, 'place_in_row' => 2, 'name' => 3, 'surname' => 4];
}
foreach ($komoda5 as $key => $value) {
    while (in_array($idNumber, $idValues,)) {
        $idNumber = rand(1, 1000000);
    }

    $idValues[] = $idNumber;
    $komoda5[$key]['user_id'] = $idNumber;
    $komoda5[$key]['name'] = nameSurname(rand(5, 15));
    while (in_array($rowNumber, $rowValues)) {
        $rowNumber = rand(0, 100);
    }
    $rowValues[] = $rowNumber;
    $komoda5[$key]['place_in_row'] = $rowNumber;
    $komoda5[$key]['surname'] = nameSurname(rand(5, 15));
}
print_r($komoda5);
echo '<br>';
echo '9 uzdavinys';
echo '<br>';
$komoda6 = [];
foreach (range(1, 10) as $stalcius) {
    foreach (range(0, 5) as $skyrelis) {
        $komoda6[$stalcius][$skyrelis] = rand(0, 10);
    }
}
print_r($komoda6);
echo '<br>';
echo '9 uzdavinys';
echo '<br>';

echo '<br>';
echo '10 uzdavinys';
echo '<br>';

echo '<br>';
echo '11 uzdavinys';
echo '<br>';
do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(10, 30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai ' . $a . ' ir ' . $b . '</h3>';
$c = [];
for ($i = 0; $i < $long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '<br><br><br>';
echo array_sum($c);
echo '<br><br><br>';
$sum = array_sum($c);
// $a * $sk1 + $b * $sk2 = $sum;

// $sk1 + $sk2 = $long;

// $sk2 = $long - $sk1;

// $a * $sk1 + $b * ($long - $sk1) = $sum;

// $a * $sk1 + $b * $long - $b * $sk1 = $sum;

// $a * $sk1 - $b * $sk1 = $sum - $b * $long;

// $sk1 * ($a - $b) = $sum - $b * $long;
$sk1 = ($sum - $b * $long) / ($a - $b);

$sk2 = $long - $sk1;
echo '<h3>Skaičius ' . $a . ' yra pakartotas ' . $sk1 . ' kartų, o skaičius ' . $b . ' - ' . $sk2 . ' kartų.</h3>';
