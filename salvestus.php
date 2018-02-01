<?php

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
            echo 'Faili saab salvestada<br>';
            $fail = fopen($failinimi, 'a');
            foreach ($_POST as $vaartus){
                fwrite($fail, $vaartus." ");
            }
            fwrite($fail, "\n");
            echo 'Andmed on salvestatud<br>';
            echo '<a href="valjund.php">Vaata faili sisu</a>';
            fclose($fail);
        } else {
            echo 'Probleem '.$failinimi.' failiga<br>';
        }
    }
}
andmeteKontroll();
salvestaFaili('andmed.txt');