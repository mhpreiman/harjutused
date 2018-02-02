<?php

class tabel {

    var $pealkirjad = array();
    var $veergudeArv;
    var $tabeliSisu = array();

    public function __construct(array $pealkirjad){
        $this->pealkirjad = $pealkirjad;
        $this->veergudeArv = count($pealkirjad);
    }

    function lisaRida($rida){
        if(count($rida) != $this->veergudeArv){
            return false;
        }
        array_push($this->tabeliSisu, $rida);
        return true;
    }

    //Lisa pealkirjad ja sisu korraga
    function lisaRidaPealkiri($readPealkirjad){
        $rida = array();

        //Kui konstruktori $pealkiri võrdub samal indeksil saadetud massiivi ($readPealkirjad) võtmega...
        //      saadetud massiiv ja konstruktori pealkiri võtmeks:   $readPealkirjad[$pealkiri]
        //..siis salvesta see uude massiivi $rida
        foreach ($this->pealkirjad as $pealkiri){
            $rida[] = $readPealkirjad[$pealkiri];
        }
        array_push($this->tabeliSisu, $rida);
        return true;
    }
}