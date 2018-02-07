<?php

// Get value of query string 'controller'               eg  ?controller=esimene
// and use it to request identically named controller   eg  controllers/esimene.php
$controller = $http->get('controller');
$file = CONTROL_DIR.$controller.'.php';    // controller's full path

if(file_exists($file) and is_file($file) and is_readable($file)){

    require_once $file;
} else {
    $file = CONTROL_DIR.DEFAULT_CONTROLLER.'.php';
//    $http->set('controller',DEFAULT_CONTROLLER);
    require_once $file;
}