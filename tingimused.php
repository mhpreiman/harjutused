<?php


//Loo juhusliku funktsiooniga vanus ja prindi, mis vanusegruppi see kuulub

header("Refresh:3");

$vanus = rand(0, 110);

if($vanus >= 0 and $vanus < 4){
    echo 'Meie väikelaps on '.$vanus.' aasta vanune';
}
elseif($vanus > 4 and $vanus < 11){
    echo 'Meie laps on '.$vanus.' aasta vanune';
}
elseif ($vanus > 11 and $vanus < 19){
    echo 'Meie nooruk on '.$vanus.' aasta vanune';
}
elseif ($vanus > 19 and $vanus < 65){
    echo 'Meie täiskasvanu on '.$vanus.' aasta vanune';
}
else{
    echo 'Meie senioor on '.$vanus.' aasta vanune';
}