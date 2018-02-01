<?php

//Väljasta vorm
function vorm(){
    echo '
        <form action="?" method="post">
            Eesnimi: <input type="text" name="eesnimi"><br>
            Perenimi: <input type="text" name="perenimi"><br><br>
            <input type="submit" value="Salvesta"><br><br>
        </form>
    ';
}


//Kontrolli vormi andmeid
function andmeteKontroll() {
    $kontroll = false;
    if (!empty($_POST)) {
        foreach ($_POST as $voti => $vaartus) {
            if (empty($_POST[$voti])) {
                echo 'Kõik väljad peavad olema täidetud!<br>';
//                echo '<a href="">Sisesta andmed</a><br>';
                exit;
            }
        }
        $kontroll =  true;
    }
    return $kontroll;
}


//Salvesta vormi andmed faili
function salvestaFaili($failinimi) {
    if (andmeteKontroll()) {
        if (!file_exists($failinimi)) {
            fopen("andmed.txt", "w");
        }
        if (file_exists($failinimi) and is_file($failinimi) and is_writable($failinimi)) {
            echo 'Salvestan...<br>';
            $fail = fopen($failinimi, 'a');
            foreach ($_POST as $vaartus){
                fwrite($fail, $vaartus." ");
            }
            fwrite($fail, "\n");
            echo 'Andmed salvestatud!<br><br>';
            echo '<a href="andmed.php?vaatafaili">Ava fail</a><br>';          //indirectly calls loeFailist()
            fclose($fail);
        }
        else {
            echo 'Probleem '.$failinimi.' failiga<br>';
        }
    }
}


//Loe andmed failist
function loeFailist($failinimi){
    if (file_exists($failinimi) and is_file($failinimi) and is_readable($failinimi)) {
        echo 'Faili sisu:<br><br>';
        $fail = fopen($failinimi, 'r');
        while(!feof($fail)){
            $rida = fgets($fail);
            echo $rida.'<br>';
        }
//        echo '<a href="">Lisa siia andmed vormist</a>';
        fclose($fail);
    } else {
        echo 'Probleem '.$failinimi.' failiga<br>';
    }
}


vorm();
andmeteKontroll();
salvestaFaili('andmed.txt');

//loeFailist('andmed.txt');
if (isset($_GET['vaatafaili'])) loeFailist('andmed.txt');   //calls loeFailist()

