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


vorm();

