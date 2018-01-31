<?php

function valjastaVorm(){
    echo '
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            Kasutaja: <input type="text" name="kasutaja"><br>
            Parool: <input type="password" name="parool"><br>
            <input type="submit" value="Saada">
        </form>
    ';
}
function vormiAndmed(){
//    $kasutaja = $_POST['kasutaja'];
//    $parool = $_POST['parool'];

    if(!empty($_POST)){
        extract($_POST);
        foreach ($_POST as $voti=>$vaartus){
            if(empty($_POST[$voti])){
                echo 'Andmed peavad olema sisestatud!<br>';
                exit;
            }
        }
//        echo 'Tere, '.$kasutaja.'<br>';
//        echo 'Sinu parooliks on '.$parool.'<br>';
    }
}
//valjastaVorm();
//vormiAndmed();


/*
Koosta mäng, kus kasutajal tuleb arvata täisarv 1-15.
Vale arvu puhul vihjatakse kasutajale, et arv on väiksem või suurem tema pakutud arvust.
Kui vastuse ja kasutaja sisestatud arvu vahe on väiksem või võrdne 5-ga,
siis teavitatakse kasutajat, et ta on õigele vastusele lähedal.
Logi ja näita kasutajale mitu katset on juba tehtud
*/


function manguVorm(){
    echo '
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            Arva ära arv 1-15:<br>
            <input type="text" name="kasutajaVastus" autocomplete="off"><br><br>
            <input type="submit" value="Kontrolli"><br><br>
            <input type="submit" value="Alusta uuesti" name="alustaUut">
        </form>
    ';
}

function kontrolliArv(){

    session_start();

    //Alusta mängu uuesti
    function uusMang() {
        $_SESSION['eelmineVastus'] = $_SESSION['oigeVastus'];
        if (isset($_SESSION['katseteArv']))     unset($_SESSION['katseteArv']);
        if (isset($_SESSION['oigeVastus']))     unset($_SESSION['oigeVastus']);
        //session_destroy();      //exit;
    }

    //Defineeri õige vastus JA eelmine vastus
    if (!isset($_SESSION['oigeVastus']) || !isset($_SESSION['eelmineVastus'])) {
        $_SESSION['oigeVastus'] = rand(1, 15);

        //Defineeri eelmine vastus (on script start)
        if(!isset($_SESSION['eelmineVastus'])) {
            $_SESSION['eelmineVastus'] = $_SESSION['oigeVastus'];
        }

        //Kindlusta et kaks järjestikust õiget vastust poleks samad
        while ($_SESSION['oigeVastus'] == $_SESSION['eelmineVastus'])
            $_SESSION['oigeVastus'] = rand(1, 15);
    }
    $oigeVastus = $_SESSION['oigeVastus'];

    //Alusta mängu uuesti
    if(isset($_POST["alustaUut"]))
        uusMang();

    //Kasutaja ei sisestanud numbrit
    if(!empty($_POST)){
        if(empty($_POST['kasutajaVastus'])){
            echo 'Arv peab olema sisestatud!<br>';
            exit;
        } else {
            $kasutajaArv = $_POST['kasutajaVastus'];

            (!isset($_SESSION['katseteArv'])) ? $_SESSION['katseteArv'] = 1 : $_SESSION['katseteArv']++ ;

            if($kasutajaArv < $oigeVastus){
                echo 'Õige arv on suurem!<br>';
            }
            if($kasutajaArv > $oigeVastus){
                echo 'Õige arv on väiksem!<br>';
            }
            if(abs($kasutajaArv - $oigeVastus) <= 5){
                if($kasutajaArv == $oigeVastus){
                    echo 'Õige vastus on '.$oigeVastus.'!<br> Arvasid selle ära '.$_SESSION['katseteArv'].' korraga!<br>';
                    uusMang();
                } else
                    echo 'Sinu arv on <i>peaaegu</i> õige...<br>';
            }
        }
    }
}
manguVorm();
kontrolliArv();
