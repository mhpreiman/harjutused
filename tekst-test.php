<?php

require_once 'tekst.php';

//$minuTekst = new tekst();       //uus objekt (instants)
//$minuTekst->maaraTekst('Hi!');  //uue objekti meetod

$minuTekst = new tekst('Hi!');    //uus objekt (instants) konstruktori põhjal



echo '<pre>';
print_r($minuTekst);
echo '</pre>';