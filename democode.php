<?php
error_reporting(0);	

$url = getcwd();		//full path
// $checkURL = preg_match("/(\\\php-funktsionaalne)$/", $url);			//doesnt work on ikt server

//If last part (folder) of full path after / is php-funktsionaalne 
//and  'vaatakoodi' was sent
 //show source of the PHP file that has the same name as GET
if (basename($url) == "php-funktsionaalne"& isset($_GET['vaatakoodi'])) {
	$get = $_GET['vaatakoodi'];
	show_source($get.".php");
}
// else header("Location:  index.html");
	
?>