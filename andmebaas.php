<?php
error_reporting(0);

function yhendus(){
    $yhendus = mysqli_connect('localhost', 'kasutaja', 'parool', 'andmebaas');
    if(!$yhendus){
        echo 'Ei suuda ühendada andmebaasiga: ';
        echo mysqli_connect_error().'<br>';
        echo mysqli_connect_errno().'<br><br>';
    } else {
        echo 'Ühendus on loodud<br><br>';
    }
    return $yhendus;
}


function sisestaAB($eesnimi, $perenimi, $synnikuupaev, $yhendus){
    $sql = 'INSERT INTO kasutajad(eesnimi, perenimi, synnikuupaev) '.
            'VALUES(\''.$eesnimi.'\', \''.$perenimi.'\', \''.$synnikuupaev.'\')';
    $paring = mysqli_query($yhendus, $sql);
    if(!$paring){
        echo 'Probleem andmete salvestamisega: ';
        echo mysqli_error($yhendus).'<br>';
        echo mysqli_errno($yhendus).'<br><br>';
        exit;
    } else {
        echo 'Andmed salvestati!';
    }
}


function loeAB($yhendus){
    $andmed = array();
    $sql = 'SELECT * FROM kasutajad';
    $paring = mysqli_query($yhendus, $sql);
    if(!$paring){
        echo 'Probleem andmete salvestamisega: ';
        echo mysqli_error($yhendus).'<br>';
        echo mysqli_errno($yhendus).'<br>';
        exit;
    } else {
        while($rida = mysqli_fetch_assoc($paring)){
            $andmed[] = $rida;
        }
    }
    return $andmed;
}


function valjastaTabel($andmed){
    echo '<table border="1">';
    foreach ($andmed as $kasutaja){
        echo '<tr>';
        foreach ($kasutaja as $info) {
            echo '<td>'.$info.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

include 'aeg.php';

$yhendus = yhendus();
$eesnimi = $_POST['eesnimi'];
$perenimi = $_POST['perenimi'];
$synnikuupaev = ajaTootlus($_POST['paev'], $_POST['kuu'], $_POST['aasta']);

//Andmebaasi päringud
sisestaAB($eesnimi, $perenimi, $synnikuupaev, $yhendus);
$andmed = loeAB($yhendus);
valjastaTabel($andmed);