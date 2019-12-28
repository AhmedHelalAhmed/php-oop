<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);
/*
 * namespace
 */
require 'class.Testing.php';
// global namespace
class Testing// this will give error since the name exists

{

    public $test;
}

$test = new Testing();
echo '<pre>';
print_r($test);
echo '</pre>';
