<?php

require_once 'tabel.php';

class tabelHTML extends tabel {
    var $taustaVarv = '';

    public function setTaustaVarv($taustaVarv) {
        $this->taustaVarv = $taustaVarv;
    }

    public function __construct($pealkirjad, $taustaVarv = '') {
        parent::__construct($pealkirjad);
        $this->setTaustaVarv($taustaVarv);
    }

}