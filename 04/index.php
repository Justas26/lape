<?php
//Uždavinys Kiek reikės šaukštų suvalgyti visą sriubą?
$sriuba = rand(260, 300); //ml sriubos
$saukstuKiekis = 0;
// Vienas šaukštas pasemia nuo 7 iki 10 ml sriubos
echo "Isviso sriubos buvo $sriuba <br>";
do {
    $saukstas = rand(7, 10);
    $sriuba -= $saukstas;
    $saukstuKiekis++;
    if ($sriuba < 0) {
        $sriuba = 0;
    }
    echo "Sriubos liko $sriuba ml <br>";

} while ($sriuba !=0);
echo "sriubai suvalgyti prireike $saukstuKiekis saukstu";
echo '<br>';
$kepsnys = rand(300, 350); //g mėsos(sojos gaminio)
$sakuciuKiekis = 0;
$pasmeigimas = rand(7, 10);
$krimstelejimuKiekis = 0;
// Viena šaukutė pasmeigia nuo 7 iki 10 g kepsnio
// Viena krimstelėjimas sukramto nuo 4 iki 6 g šakute į burną įsidėto kepsnio

do{
    $sakuciuKiekis++;
    $pasmeigimas = rand(7, 10);
    $kepsnys -= min(rand(7, 10), $kepsnys);
        do{
            $krimstelejimuKiekis++;
            $pasmeigimas -= min(rand(4, 6), $pasmeigimas);
        }while($pasmeigimas > 0);
}while ($kepsnys > 0);
echo 'Sakuciu kiekis: '.$sakuciuKiekis;echo '<br>';
echo 'Krimstelejimu kiekis: '.$krimstelejimuKiekis;
echo '<br>';
echo '1 uzdavinys';
echo '<br>';
echo 'a';
echo '<br>';
for ($zvaigzdutes = 0; $zvaigzdutes <=400 ; $zvaigzdutes++) {
    $zvaigzdutes2='*';
    echo "<span style = 'word-break: break-all; white-space: normal';>$zvaigzdutes2</span>";
}
echo '<br>';
echo 'b';
echo '<br>';
for ($zvaigzdutes = 0; $zvaigzdutes <=400 ; $zvaigzdutes++) {
    $zvaigzdutes2='*';
    echo chunk_split($zvaigzdutes2,50);
}
echo '<br>';
echo '2 uzdavinys';
echo '<br>';
$skaicius150 = 0;
for($i = 0; $i < 300; $i++){
    $skaicius = rand(0, 300);
    if($skaicius > 150){
        $skaicius150++;
    }
    if ($skaicius > 275){
        echo "<span style = 'color: red;'>$skaicius </span>";
    } else {
        echo "<span>$skaicius </span>";
    }
}
echo '<br>';
echo 'Skaiciu didesniu uz 150 yra: ' . $skaicius150;
echo '<br>';echo '<br>';
echo '3 uzdavinys';
echo '<br>';
$Skaicius = rand (3000, 4000 );
echo $skaicius;
echo '<br>';
echo '<div style="display: block">';
for ($i = 0; $i < 100; $i++) {
    echo '<div style="display: block;">';
    for ($j = 0; $j < 100; $j++) {
        if($i == $j || $j == 100 - 1 - $i){
            echo '<span style ="color: red;"></span>';
        }else {
            echo '<span></span>';
        }
    }
    echo '</div>';
}
echo '</div>';

echo '<br>';echo '<br>';
for($i = 77; $i < $skaicius; $i+=77){
    if ( $i == 77){
        echo $i;
    } else {
        echo ", $i";
    }
}
echo '<br>';echo '<br>';
echo '4 ir 5 uzdavinys';
echo '<br>';
echo '<div style="display: block">';
for ($i = 0; $i < 100; $i++) {
    echo '<div style="display: block;">';
    for ($j = 0; $j < 100; $j++) {
        if($i == $j || $j == 100 - 1 - $i){
            echo '<span style ="color: red;">*</span>';
        }else {
            echo '<span>*</span>';
        }
    }
    echo '</div>';
}
echo '</div>';

echo '<br>';echo '<br>';
echo '</div>';  
echo '<br>';echo '<br>';
echo '6 uzdavinys';
echo '<br>';
echo '<br>pirmas scenarijus<br>';
do {
    $metimas = (rand(0,1) == 0) ? 'H' : 'S';
    echo "$metimas <br>";
} while ($metimas != 'H');
echo '<br>antras scenarijus<br>';
 
$herbai = 0;
do {
    $metimas = (rand(0,1) == 0) ? 'H' : 'S';
    if ($metimas == 'H') {
        $herbai++;
    }
    echo "$metimas <br>";
} while ($herbai < 3);
 
echo '<br>trecias scenarijus<br>';
 
$herbai = 0;
do {
    $metimas = (rand(0,1) == 0) ? 'H' : 'S';
    if ($metimas == 'H') {
        $herbai++;
    } else {
        $herbai = 0;
    }
    echo "$metimas <br>";
} while ($herbai < 3);

echo '<br>';echo '<br>';
echo '7 uzdavinys';
echo '<br>';
$petroSurinktiTaskai=0;
$kazioSurinktiTaskai=0;
do {
$petroTaskai = rand(10, 20);
$kazioTaskai = rand(5, 25);
echo "Petro surinkti taskai: $petroTaskai , Kazio surinkti taskai: $kazioTaskai.";
    if ($petroTaskai > $kazioTaskai) {
        echo ' Partija laimejo: Petras.';
        echo '<br>';
        echo $petroSurinktiTaskai=$petroSurinktiTaskai+$petroTaskai;
        echo '<br>';
        echo $kazioSurinktiTaskai=$kazioSurinktiTaskai+$kazioTaskai;
        echo '<br>';
    }
    else {
        echo ' Partija laimejo: Kazys.';
        echo '<br>';
        echo $kazioSurinktiTaskai=$kazioSurinktiTaskai+$kazioTaskai;
        echo '<br>';
        echo $petroSurinktiTaskai=$petroSurinktiTaskai+$petroTaskai;
        echo '<br>';
    }
} while ($petroSurinktiTaskai <=222 || $kazioSurinktiTaskai <=222 );
echo "<br> Petro is viso surinkti taskai: $petroSurinktiTaskai <br>";
echo "<br> Kazio is viso surinkti taskai: $kazioSurinktiTaskai <br>";
echo '<br>';echo '<br>';
echo '8 uzdavinys';
echo '<br>';
$puse = 10;
for ($i = 1; $i < $puse; $i++) {
    for ($j = $i; $j < $puse; $j++)
        echo '&nbsp;&nbsp;&nbsp;';
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo '&nbsp;<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).');">*</span>';
    echo '<br>';
}

for ($i = $puse; $i > 0; $i--) {
    for ($j = $puse - $i; $j > 0; $j--)
        echo '&nbsp;&nbsp;&nbsp;';
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo '&nbsp;<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).');">*</span>';
    echo "<br>";
}
echo '<br>';echo '<br>';
echo '9 uzdavinys';
echo '<br>';
$rombas = '***********';
for ($i = 0; $i < 21; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo '&nbsp;';
    }
    echo '<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).");\">$rombas</span>" . '<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).");\">$rombas</span>" . '<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).");\">$rombas</span>" . '<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).");\">$rombas</span>" . '<br>' ;
}
echo '<br>';echo '<br>';
echo '10 uzdavinys';
echo '<br>';
$vinisCount = 0;
$smūgiai = 0;
$viniesIlgis = 850;
for ($i=0; $i< 5; $i++) {
    while ($viniesIlgis >= 0) {
        $viniesIlgis -= rand(5, 20);
        $smūgiai++;
    }
    $vinisCount++;
}
echo "ikalta: $vinisCount";
echo "<br>";
echo "mažais smūgiais: $smūgiai";
echo '<br>';echo '<br>';
echo '11 uzdavinys';
echo '<br>';
$skaiciuKiekis = 0;
$skaiciuStringas = '';
$pirminiai = '';
do {
    $unikalusSkaicius = false;
    do {
        $random = rand(1, 200);
        if (!strpos($skaiciuStringas, $random)) {
            $skaiciuStringas .= $random . ' ';
            $skaiciuKiekis++;
            $unikalusSkaicius = true;
            $pirminis = true;
            for ($i = 2; $i <= $random/2; $i++){
                if ($random % $i == 0) {
                    $pirminis = false;
                }
            }
            if ($pirminis) {
                $pirminiai .= $random . ' ';
            }
        }
    } while (!$unikalusSkaicius);
} while ($skaiciuKiekis < 50);
echo $skaiciuStringas . '<br>';
echo $pirminiai;







    
    


