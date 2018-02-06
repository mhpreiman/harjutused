<?php

class linkobject extends http
{
    var $baseLink = false;
    var $protocol = 'http://';
    var $eq = '=';                  // =    for query parameters     eg  some/link?name=mia
    var $delim = '&amp;';           // &    ditto

    public function __construct(){
        parent::__construct();
        $this->baseLink = $this->protocol.HTTP_HOST.SCRIPT_NAME;        //complete path incl protocol
    }
}