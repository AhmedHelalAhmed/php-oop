<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);
/*
 * autoload classes
 */
require 'classes/Testing1.class.php';
require 'classes/Testing2.class.php';
require 'classes/Testing3.class.php';

$test = new Testing2();
echo '<pre>';
print_r($test);
echo '</pre>';
