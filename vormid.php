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
        echo 'Tere, '.$kasutaja.'<br>';
        echo 'Sinu parooliks on '.$parool.'<br>';
    }
}
valjastaVorm();
vormiAndmed();
