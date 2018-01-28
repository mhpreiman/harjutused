<?php

//Väljasta vahelduva värviga numbrid 1-10

$varv = '';

for($i = 1; $i <= 10; $i++){
    if($i % 2 == 0){
        $varv = 'deeppink';
    } else {
        $varv = 'dodgerblue';
    }
    echo '<p style="color: '.$varv.';">'.$i.'</p>';
}