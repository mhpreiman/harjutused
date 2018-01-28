<?php

/* 
Koosta funktsioon valjastaTabel, mille parameetriteks on
tabeli ridade ja veergude arv.
Prindi vastava suurusega tabel, mille väljad on täidetud juhuarvudega vahemikus 10-99
*/

/*
Koosta funktsioon genereeriVarv, mis genereerib juhusliku varvi kujul #XXXXXX ning
saadab selle funktsioonile valjastaTabel
*/

/*
Koosta funktsioon tekstiTabel, mis võtab neli sõna esindavat parameetrit
Väljasta üheveeruline tabel, mille igas reas on üks sõna
*/


//Tabel
function valjastaTabel($read, $veerud){
    echo '<table border="1">';

    for($r = 1; $r <= $read; $r++){
        echo '<tr>';

        for ($v = 1; $v <= $veerud; $v++){
            echo '<td style="background-color: '.genereeriVarv().';">';
            echo rand(10, 99);
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

valjastaTabel(5, 7);



//Värvid
function genereeriVarv(){
    $varv = '#';

    for ($kord = 1; $kord <= 6; $kord++) {
        $juhuTaisarv = rand(0, 15);
        $juhuHex = dechex($juhuTaisarv);
        $varv .= $juhuHex;
    }
    return $varv;
}


echo '<br>';





function tekstiTabel($sona1, $sona2, $sona3, $sona4){
    $sonad = func_get_args();

    echo '<table border="1">';

    foreach($sonad as $sona) {
        echo '<tr><td>'.$sona.'</td></tr>';
    }

    echo '</table>';
}

tekstiTabel('See', 'on', 'minu', 'tabel');