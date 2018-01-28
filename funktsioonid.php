<?php

/* 
Koosta funktsioon valjastaTabel, mille parameetriteks on
tabeli ridade ja veergude arv.
Prindi vastava suurusega tabel, mille väljad on täidetud juhuarvudega vahemikus 10-99
*/

function valjastaTabel($read, $veerud){
    echo '<table border="1">';

    for($r = 1; $r <= $read; $r++){
        echo '<tr>';

        for ($v = 1; $v <= $veerud; $v++){
            echo '<td>';
            echo rand(10, 99);
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

valjastaTabel(5, 7);