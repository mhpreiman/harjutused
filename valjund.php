<?php

function loeFailist($failinimi){
    if (file_exists($failinimi) and is_file($failinimi) and is_readable($failinimi)) {
        echo 'Andmetelugemine failist...<br>';
        $fail = fopen($failinimi, 'r');
        while(!feof($fail)){
            $rida = fgets($fail);
            echo $rida.'<br>';
        }
        echo '<a href="sisend.php">Lisa siia andmed vormist</a>';
        fclose($fail);
    } else {
        echo 'Probleem '.$failinimi.' failiga<br>';
    }
}
loeFailist('andmed.txt');