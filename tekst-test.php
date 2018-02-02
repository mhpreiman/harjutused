<?php

require_once 'tekst.php';

$minuTekst = new tekst();       //uus objekt (instants)
$minuTekst->maaraTekst('Hi!');  //uue objekti meetod



echo '<pre>';
print_r($minuTekst);
echo '</pre>';