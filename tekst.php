<?php

class tekst {

    //CLASS PROPERTIES
    var $sonad = 'tere';

    //OBJECT CONSTRUCT
    public function __construct($sonad)
    {
        $this->maaraTekst($sonad);
    }

    //CLASS METHODS
    function maaraTekst($sonad){
        $this->sonad = $sonad;
    }

    function prindiTekst(){
        echo $this->sonad.'<br>';
    }

}