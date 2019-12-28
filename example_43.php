<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);
/*
 * namespace
 */

require 'Apple.php';
require 'Sony.php';
require 'Lg.php';

// [namespace] [backslash] [classname]
$iphone = new Apple\Hardware\Phones\CreatePhone();
$iphone->sayHello();

$lg = new Lg\CreatePhone();
$lg->sayHello();

echo '<pre>';
print_r($iphone);
echo '</pre>';

echo '<pre>';
print_r($lg);
echo '</pre>';

$lgvip = new Lg\vip\products\CreatePhone();
$lgvip->sayHello();
