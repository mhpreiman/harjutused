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


    // Create query parameters and add them to query string     eg first=value&second=value
    function addQueryParams(&$queryString, $queryParam, $queryParamVal){      //& - $link points to the same data as the var that called it (all changes affect it)
        //Add delimiter & if query string already contains a parameter
        if($queryString != ''){
            $queryString .= $this->delim;  // param=val  ->  param=val&
        }
        //Add a query parameter and value to query string      ->  param=val / param=val&param2=val
        $queryString .= fixUrl($queryParam).$this->eq.fixUrl($queryParamVal);
    }


    // Create full link incl query string
    function getLink($add = array()){           //input such as 'category'=>'computers', 'price'=>'200'
        $queryStr = '';
        //Loop through received key-value pairs and make them into a query string
        foreach ($add as $queryPar=>$queryPVal){
            $this->addQueryParams($queryStr, $queryPar, $queryPVal);
        }
        if($queryStr != ''){
            $link = $this->baseLink.'?'.$queryStr;    //eg http://server/some/link?param=value&param2=value
        } else {
            $link = $this->baseLink;
        }
        return $link;
    }
}