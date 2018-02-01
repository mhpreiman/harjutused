<?php

function loeFailist($failinimi){
    if (file_exists($failinimi) and is_file($failinimi) and is_readable($failinimi)) {
        echo 'Faili sisu:<br><br>';
        $fail = fopen($failinimi, 'r');
        while(!feof($fail)){
            $rida = fgets($fail);
            echo $rida.'<br>';
        }
        echo '<a href="sisend.php">Naase vormi juurde</a>, et andmeid juurda lisada.';
        fclose($fail);
    } else {
        echo 'Probleem '.$failinimi.' failiga<br>';
    }
}
loeFailist('andmed.txt');

