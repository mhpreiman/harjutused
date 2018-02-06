<?php

define('MODEL_DIR', 'models/');
define('VIEWS_DIR', 'views/');
define('CONTROL_DIR', 'controllers/');
define('LIB_DIR', 'lib/');

require_once LIB_DIR.'utils.php';

//MODELS
require_once MODEL_DIR.'template.php';      //views
require_once MODEL_DIR.'http.php';          //http
require_once MODEL_DIR.'linkobject.php';    //links

$http = new linkobject();