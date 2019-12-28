<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);
/*
 * autoload classes
 */

spl_autoload_register(function ($class) {

    // do not need to check [required_once] => not needed
    // it load the class one time only
    require 'classes/' . $class . '.class.php';

});

$test = new Testing2();
echo '<pre>';
print_r($test);
echo '</pre>';
