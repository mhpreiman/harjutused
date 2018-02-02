<?php

/*
date_default_timezone_set('Europe/Tallinn');

$aegHetkel = time();
//$kellaaeg = date('G:i', $aegHetkel);      (format, timestamp) - timestamp  specifies int Unix timestamp (def is local time)
$kellaaeg = date('G:i');
$kuupaev = date('j. F Y');

echo $kellaaeg.'<br>';
echo $kuupaev.'<br>';
*/



/*
Funktsioon vorm, väljastab vormi, milles eesnimi, perenimi, sünnikuupäev
Päeva, kuu ja aasta jaoks eraldi input

Funktsioon ajaTootlus, parameetrid sünnipäev, kuu, aasta,
mis muuta andmebaasi jaoks sobilikku DATE formaati
Prindi saadud väärtus
*/

function vorm() {
    echo '
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
        Eesnimi: <input type="text" name="eesnimi"><br>
        Perenimi: <input type="text" name="perenimi"><br><br>
        Sünnikuupäev: <br>
        Päev: <input type="text" name="paev"><br>
        Kuu: <input type="text" name="kuu"><br>
        Aasta: <input type="text" name="aasta"><br><br>
        Sünnikuupäev ühest lahtrist: <br>
        <input type="date" name="sunnikuupaev" value="2000-01-01"><br><br>
        <input type="submit" value="Saada">
        </form>
        ';
}


function andmeteKontroll() {
    $kontroll = false;
    if (!empty($_POST)) {
        foreach ($_POST as $voti => $vaartus) {
            if (empty($_POST[$voti])) {
                echo 'Andmed peavad olema sisestatud!<br>';
                exit;
            }
        }
        $kontroll =  true;
    }
    return $kontroll;
}

function ajaTootlus($paev, $kuu, $aasta){
    if(andmeteKontroll()){
        $aegUnixTimestamp = mktime(0,0,0, $kuu, $paev, $aasta);
        $aeg = date('Y-m-d', $aegUnixTimestamp);
    }
    return $aeg;
}

function sunniPaev($kuupaev){
    if(andmeteKontroll()){
        $aegUnixTimestamp = strtotime($kuupaev);
        $sunnikuupaev = date('Y-m-d', $aegUnixTimestamp);
    }
    return $sunnikuupaev;
}

vorm();

//Without expicitly calling andmeteKontroll() before trying to echo POST variables that haven't been sent to server (eg empty form),
//PHP throws an error of undefined variables EVEN THOUGH ajaTootlus() also invokes andmeteKontroll()
//because the line below tries to echo those variables regardless they exist or not
if(andmeteKontroll()){
    echo 'Tere, '.$_POST['eesnimi'].' '.$_POST['perenimi'].', sinu sünnikuupäev on '.ajaTootlus($_POST['paev'], $_POST['kuu'], $_POST['aasta']).'<br><br>';
    //Ühest lahtrist
    echo 'Lühemast lahtrist: '.sunniPaev($_POST["sunnikuupaev"]).'<br><br><br>';
}
else
    exit;

