<?php

$arvud = array(5,4,3,2,1);

var_dump($arvud);

echo '<pre>';
print_r($arvud);
echo '</pre>';
echo '<br>';


$elementideArv = count($arvud);

echo 'See massiiv koosneb '.$elementideArv.' elemendist: &emsp;<br>';
$arvud[] = 0;
echo 'See massiiv koosneb '.count($arvud).' elemendist: &emsp;';

for($i = 0; $i < count($arvud); $i++){
    echo $arvud[$i].'&emsp;';
}
echo '<hr>';



/*
Funktsioon looMassiiv, parameetriks elementide arv.
Loob ja tagastab juhuslikest täisarvudest (0-99) koosneva massiivi.
*/
function looMassiiv($elementideArv){
    $massiiv = array();

    for($i = 0; $i < $elementideArv; $i++){
        $massiiv[] = rand(0,99);
    }
    return $massiiv;
}
$arvudeMassiiv = looMassiiv(5);

echo '<pre>Random-numbers ';
print_r($arvudeMassiiv);
echo '</pre><br>';



/*
Funktsioon valjastaMassiiv, parameetriks massiiv,
mille elemendid printida üherealise tabeli kujul.
Kasutada foreach tsüklit.
*/
function valjastaMassiiv($massiiv){

    echo '<table border=1><tr>';

    if (is_array($massiiv)) {
        foreach ($massiiv as $element){
            echo '<td>'.$element.'</td>';
        }
    }

    echo '</tr></table><br>';
}
valjastaMassiiv($arvudeMassiiv);



/*
Funktsioon loo2DMassiiv, parameetriteks ridade ja veergude arv,
mille abil luua 2D massiivi (associative array)
*/
function loo2DMassiiv($ridadeArv, $veergudeArv){
    $massiiv = array();

    for($r = 0; $r < $ridadeArv; $r++){
        $massiiv[] = array();

        for ($c = 0; $c < $veergudeArv; $c++){
            $juhuarv = rand(0,99);
            $massiiv[$r][] = $juhuarv;
        }
    }
    return $massiiv;
}
$arvudeMassiiv2D = loo2DMassiiv(2,5);

echo '<pre>2D-';
print_r($arvudeMassiiv2D);
echo '</pre><hr>';



/*
Funktsioon vahetaMinMax, parameetriteks täisarvude massiivi
Leiab kõige väiksema ja suurema massiivis ning
vahetab nende asukohad (kontrolli funktsiooniga valjastaMassiiv).
Testimiseks võib kasutada funktsiooniga looMassiiv loodud massiivi.
*/
//Messy version
//function vahetaMinMax($massiiv){
//    if (is_array($massiiv)) {
////        var_dump($massiiv);
//        echo '<pre>Enne: <br>';     print_r($massiiv).'</pre>';
//
//        foreach($massiiv as  $index=> $value) {
////            echo '<hr>value '.$index.'&nbsp; index '.$value;
//            $getMaxIndex = array_search(max($massiiv),$massiiv);
//            $getMinIndex = array_search(min($massiiv), $massiiv);
//            $maxValue = $massiiv[$getMaxIndex];
//            $minValue = $massiiv[$getMinIndex];
//            $massiiv[$getMaxIndex] = $minValue;
//            $massiiv[$getMinIndex] = $maxValue;
//        }
////        var_dump($massiiv);
//        echo '<br><pre>Pärast: <br>';   print_r($massiiv).'</pre>';
//    }
//}
//vahetaMinMax($arvudeMassiiv);
////valjastaMassiiv(vahetaMinMax(looMassiiv(5)));



echo 'Enne: ';
valjastaMassiiv($arvudeMassiiv);

//Simpler version
function vahetaMinMax(&$massiiv){
    $min = min($massiiv);
    $max = max($massiiv);

    for($i = 0; $i < count($massiiv); $i++){
        if($massiiv[$i] == $min)
            $massiiv[$i] = $max;
        else if($massiiv[$i] == $max){
            $massiiv[$i] = $min;
        }
    }
}
vahetaMinMax($arvudeMassiiv);
echo 'Pärast: ';
valjastaMassiiv($arvudeMassiiv);
