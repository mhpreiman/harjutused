<?php

// Get value of query string 'page_id'               eg  ?page_id=esimene
// and use it to request identically named controller   eg  controllers/esimene.php
$controller = $http->get('page_id');       // get value of queryparameter 'page_id'
$file = CONTROL_DIR.$controller.'.php';    // controller's full path

if(file_exists($file) and is_file($file) and is_readable($file)){

    require_once $file;
} else {
    $file = CONTROL_DIR.DEFAULT_CONTROLLER.'.php';
//    $http->set('controller',DEFAULT_CONTROLLER);
    require_once $file;
}