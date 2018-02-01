<?php

date_default_timezone_set('Europe/Tallinn');

$aegHetkel = time();
//$kellaaeg = date('G:i', $aegHetkel);      (format, timestamp) - timestamp  specifies int Unix timestamp (def is local time)
$kellaaeg = date('G:i');
$kuupaev = date('j. F Y');

echo $kellaaeg.'<br>';
echo $kuupaev.'<br>';


