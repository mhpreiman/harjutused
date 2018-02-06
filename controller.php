<?php

$controller = $http->get('control');       // get name of controller ('control')
$file = CONTROL_DIR.$controller.'.php';    // get controller's full path

if(file_exists($file) and is_file($file) and is_readable($file)){
    require_once $file;
} else {
    $file = CONTROL_DIR.DEFAULT_CONTROLLER.'.php';
    require_once $file;
}