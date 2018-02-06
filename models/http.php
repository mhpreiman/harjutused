<?php

class http
{
    var $queryParameters = array();      //query parameters received through GET/POST    eg 2 vars name=Joe&age=24
    var $server = array();               //server info

    public function __construct(){
        $this->init();
    }

    // Initialize
    function init(){
        $this->queryParameters = array_merge($_GET, $_POST);      //merge GET and POST arrays
        $this->server = $_SERVER;                                 //get server info array

        $httpConstants = array('HTTP_HOST','SCRIPT_NAME');
        foreach ($httpConstants as $httpConstant){
            if(!defined($httpConstant) and isset($this->server[$httpConstant])){
                define($httpConstant, $this->server[$httpConstant]);
            }
        }
    }


    // Get value of query parameter if in array
    function get($qParameter){
        if(isset($this->queryParameters[$qParameter])){
            return $this->queryParameters[$qParameter];
        } else {
            return false;
        }
    }


    // Set an arbitrary value to an array query parameter
    function set($qParameter, $qPValue){
        $this->queryParameters[$qParameter] = $qPValue;
    }
}