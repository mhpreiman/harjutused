<?php

require_once 'tekst.php';

class varvilineTekst extends tekst {

    var $tekstiVarv = '';

    public function __construct($sonad = '', $varv = '') {
        parent::__construct($sonad);    //use parent's constructor (tekst) for $sonad
        $this->varvi($varv);            //call object's method
    }

    function varvi($varv){
        $this->tekstiVarv = $varv;
    }

    function prindiTekst() {
        if($this->tekstiVarv == '')
            parent::prindiTekst();
        else
            echo '<font color="'.$this->tekstiVarv.'">'.$this->sonad.'</font><br>';
    }
}