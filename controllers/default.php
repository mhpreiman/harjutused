<?php

$mainTmpl->set('content','Vaikimisi sisu');



//Get value of URL query parameter "page_id"     eg page_id=2
$page_id = (int)$http->get('page_id');


//Search for the same id in db
$sql =  'SELECT * FROM content '.
        'WHERE content_id='.fixDB($page_id);
$result = $db->getData($sql);


//Get main page if requested was not found
if($result == false){
    $sql =  'SELECT * FROM content '.
            'WHERE is_first_page='.fixDB(1);
    $result = $db->getData($sql);
}


//Otherwise get the requested
if($result != false){
    $page = $result[0];     //get first in case several rows were returned

    //Set querystring page_id to returned row id
    $http->set('page_id', $page['content_id']);

    //Re-set MAIN template object content
    $mainTmpl->set('content', $page['content']);
}