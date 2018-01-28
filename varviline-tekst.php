<?php


//Väljasta 5 rida juhuslikult valitud värvides

header('Refresh: 0.4');

for($rida = 1; $rida <= 5; $rida++){
    $varv = '#';

    for($kord = 1; $kord <= 6; $kord++){
        $juhuTaisarv = rand(0, 15);
        $juhuHex = dechex($juhuTaisarv);
        $varv .= $juhuHex;
    }
    
    echo '<font color="'.$varv.'">Värviline tekst</font><br />';
}