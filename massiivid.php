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

echo '<pre>';
echo print_r($arvudeMassiiv);
echo '</pre><br>';



/*
Funktsioon valjastaMassiiv, parameetriks massiiv,
mille elemendid printida üherealise tabeli kujul.
Kasutada foreach tsüklit.
*/

function valjastaMassiiv($massiiv){

    echo '<table border=1><tr>';

    foreach ($massiiv as $element){
        echo '<td>'.$element.'</td>';
    }

    echo '</tr></table>';
}
valjastaMassiiv($arvudeMassiiv);