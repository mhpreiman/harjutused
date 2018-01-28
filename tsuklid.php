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



//While tsükkel
$kord = 1;
while($kord <= 5){
    echo $kord++;
}
echo '<br>';



//Continue to skip current loop
$kord = 1;                  //iteration ($kord++) before looping causes 1 to be skipped
while($kord++ <= 5){
    if($kord == 3) continue;
    echo $kord;
}
echo '<br>';



//Do-while
do {
    if($kord > 8) break;
    echo $kord++;
}
while($kord <= 10);