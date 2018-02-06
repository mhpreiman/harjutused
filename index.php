<?php

require_once 'conf.php';

$mainTmpl = new template('main');

$mainTmpl->set('site_lang','et');
$mainTmpl->set('site_title','PV');
$mainTmpl->set('user','Kasutaja');
$mainTmpl->set('title','Pealkiri');
$mainTmpl->set('lang_bar','Keeleriba');
require_once 'menu.php';
$mainTmpl->set('content','Lehe sisu');

// Actually render the whole MAIN object
echo $mainTmpl->parse();

echo '<pre>';
print_r($http);
echo '</pre>';


//$newQueryString = array('control'=>'login', 'user'=>'test');
//$link = $http->getLink($newQueryString);
//echo $link.'<br>';

echo $http->get('control');