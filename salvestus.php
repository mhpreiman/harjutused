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
andmeteKontroll();
