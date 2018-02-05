<?php
// $menuTmpl - menu
// $itemTmpl - menu item
// $mainTmpl - main template

// MENU
$menuTmpl = new template('menu.menu');  // Menu template

// MENU ITEM
$itemTmpl = new template('menu.item');  // Menu item template
$itemTmpl->set('name','Ükslink');       // Assign 'Ükslink' to menu item var 'name'

// MENU
// Assign parsed menu item to menu var 'menu_items'     effectively the same as add() since it's the first var assignment to $menuTmpl
$menuTmpl->add('menu_items', $itemTmpl->parse());



// ...Create another menu item...       (use same code from line 11 and 15 (set() is basically add())
// MENU ITEM
$itemTmpl->set('name','Teinelink');                 // Set item value
// MENU
$menuTmpl->add('menu_items', $itemTmpl->parse());   // Add another parsed menu item to menu var 'menu_items'



// MAIN
// Assign-parse the whole previously created menu to MAIN template var 'menu'
$mainTmpl->set('menu', $menuTmpl->parse());
