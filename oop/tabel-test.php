<?php

require_once 'tabel.php';

//Objekti loomine
$minuTabel = new tabel(array('Pealkiri 1', 'Pealkiri 2', 'Pealkiri 3', 'Pealkiri 4'));

//Meetodite kutsumine
$minuTabel->lisaRida(array('sisu1', 'sisu2', 'sisu3', 'sisu4'));
$minuTabel->lisaRida(array('sisu5', 'sisu6', 'sisu7', 'sisu8'));
$minuTabel->lisaRidaPealkiri(array ('Pealkiri 1'=> 'sisu9',     //pealkirjad ja sisu korraga
                                    'Pealkiri 3'=> 'sisu11',
                                    'Pealkiri 2'=> 'sisu10',
                                    'Pealkiri 4'=> 'sisu12'));

$minuTabel->prindiTabel();


//Objekti loomine
require_once 'tabelHTML.php';
$htmlTabel = new tabelHTML(array('Pealkiri 1', 'Pealkiri 2', 'Pealkiri 3', 'Pealkiri 4'),'pink');

//Meetodite kutsumine
$htmlTabel->lisaRida(array('sisu1', 'sisu2', 'sisu3', 'sisu4'));
$htmlTabel->lisaRidaPealkiri(array ('Pealkiri 1'=> 'sisu5',     //pealkirjad ja sisu korraga
                                    'Pealkiri 3'=> 'sisu6',
                                    'Pealkiri 2'=> 'sisu7',
                                    'Pealkiri 4'=> 'sisu18'));
$htmlTabel->lisaRida(array('sisu9', 'sisu10', 'sisu11', 'sisu12'));

$htmlTabel->prindiTabel();