<?php

require_once 'tekst.php';
require_once 'varvilineTekst.php';

//$minuTekst = new tekst();       //uus objekt (instants)
//$minuTekst->maaraTekst('Hi!');  //uue objekti meetod

$minuTekst = new tekst('Hi!');    //uus objekt (instants) konstruktori põhjal
$minuTekst->prindiTekst();        //objekti meetod

$varvituTekst = new varvilineTekst('Värvitu tekst');
$varvituTekst->prindiTekst();

$roosaTekst = new varvilineTekst('Roosa tekst','deeppink');
$roosaTekst->prindiTekst();