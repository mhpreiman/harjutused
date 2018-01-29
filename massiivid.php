<?php

$arvud = array(5,4,3,2,1);

var_dump($arvud);

echo '<pre>';
print_r($arvud);
echo '</pre>';
echo '<br>';


$elementideArv = count($arvud);

echo 'See massiiv koosneb '.$elementideArv.' elemendist: &emsp;<br>';
$arvud[] = 0;
echo 'See massiiv koosneb '.count($arvud).' elemendist: &emsp;';

for($i = 0; $i < count($arvud); $i++){
    echo $arvud[$i].'&emsp;';
}
echo '<br>';

