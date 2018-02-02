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

    function prindiTabel(){
        echo '<table border="1">';
        echo '<tr bgcolor="'.$this->taustaVarv.'">';

        foreach ($this->pealkirjad as $pealkiri){
            echo '<th>'.$pealkiri.'</th>';
        }   echo '</tr>';

        foreach ($this->tabeliSisu as $tabeliRida){
            echo '<tr bgcolor="'.$this->taustaVarv.'">';
            foreach ($tabeliRida as $element){
                echo '<td>'.$element.'</td>';
            }   echo '</tr>';
        }
        echo '</table>';
    }
}