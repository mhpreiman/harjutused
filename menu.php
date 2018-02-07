<?php
// $menuTmpl - menu
// $itemTmpl - menu item
// $mainTmpl - main template

$menuTmpl = new template('menu.menu');  // Menu template
$itemTmpl = new template('menu.item');  // Menu item template


// MENU and MENU ITEMS:     select menu items from database and set them to menu
$sql =  'SELECT content_id, content, title '.
        'FROM content WHERE parent_id='.fixDB(0).
        ' AND show_in_menu='.fixDB(1);

$result = $db->getData($sql);

if($result != false){
    foreach ($result as $page){

        //Set link name                 eg  Minu pealkiri
        $itemTmpl->set('linkname',$page['title']);

        //Create full url with query parameters (eg  page_id=2)
        $getLink = $http->getLink(array('page_id' => $page['content_id']));

        //Set link to created url       eg  http://localhost/php-oop/index.php?page_id=2
        $itemTmpl->set('link',$getLink);

        //Attach parsing of previously constructed MENU ITEM to MENU object
        $menuTmpl->add('menu_items',$itemTmpl->parse());

    }
}


// MAIN:    attach parsing of MENU to MAIN object (to its $viewVars 'menu' key)
$mainTmpl->set('menu', $menuTmpl->parse());
