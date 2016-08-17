<?php

if(version_compare(PHP_VERSION, '5.3.7','<')) {
	exit("Sorry, this code doesn't run on a PHP version smaller than 5.3.7!");
}


require_once("page.php");
$page = new Page();

?>