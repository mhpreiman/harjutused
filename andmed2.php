<?php

function vorm(){
    echo '
        <form action="salvestus.php" method="post">
            Eesnimi: <input type="text" name="eesnimi"><br>
            Perenimi: <input type="text" name="perenimi"><br>
            <input type="submit" value="Salvesta">
        </form>
    ';
}

function andmeteKontroll() {
    $kontroll = false;
    if (!empty($_POST)) {
        foreach ($_POST as $voti => $vaartus) {
            if (empty($_POST[$voti])) {
                echo 'Kõik väljad peavad olema täidetud!<br>';
                echo '<a href="sisend.php">Sisesta andmed</a><br>';
                exit;
            }
        }
        $kontroll =  true;
    }
    return $kontroll;
}

function salvestaFaili($failinimi) {
    if (andmeteKontroll()) {
        if (file_exists($failinimi) and is_file($failinimi) and is_writable($failinimi)) {
            echo 'Salvestan...<br>';
            $fail = fopen($failinimi, 'a');
            foreach ($_POST as $vaartus){
                fwrite($fail, $vaartus." ");
            }
            fwrite($fail, "\n");
            echo 'Andmed salvestatud!<br><br>';
            echo '<a href="valjund.php">Vaata faili sisu</a>';
            fclose($fail);
        } else {
            echo 'Probleem '.$failinimi.' failiga<br>';
        }
    }
}

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