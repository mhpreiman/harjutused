<?php

require_once 'conf.php';

$mainTmpl = new template('main');

$mainTmpl->set('site_lang','et');
$mainTmpl->set('site_title','PV');
$mainTmpl->set('user','Kasutaja');
$mainTmpl->set('title','Pealkiri');
$mainTmpl->set('lang_bar','Keeleriba');
$mainTmpl->set('menu','Lehe menüü');
$mainTmpl->set('content','Lehe sisu');

echo '<pre>';
print_r($mainTmpl);
echo '</pre>';

echo $mainTmpl->parse();