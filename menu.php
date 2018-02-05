<?php

// Menu template
$menuTmpl = new template('menu.menu');

// Menu item template
$itemTmpl = new template('menu.item');
// Set menu item variable 'name'
$itemTmpl->set('name','Ükslink');


// Set item as the menu's variable
//Get the content of menu.item - then set that to menu template var 'menu_items'
$setMenuItem = $itemTmpl->parse();
$menuTmpl->set('menu_items', $setMenuItem);

// Parse menu variable content, then set that parsed content to menu var 'menu'
$menu = $menuTmpl->parse();
$mainTmpl->add('menu',$menu);


// Create another menu item
$itemTmpl->set('name','Teinelink');       // Set item value
$menuItem = $itemTmpl->parse();           // Set item content to that item (value)
$menuTmpl->add('menu_items',$menuItem);   // Concatenate the new item to menu var menu_items

// Parse whole menu
$menu = $menuTmpl->parse();       // Get contents
$mainTmpl->set('menu', $menu);    // Show on view