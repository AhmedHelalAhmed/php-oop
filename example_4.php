<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class AppleDevice
{

// properties

    public $ram;
    public $inch;
    public $space;

}

$iphone6plus = new AppleDevice();
$iphone6plus->ram = '2GB';
$iphone6plus->inch = '5 inch';
$iphone6plus->space = '32GB';
$iphone6plus->color = 'gold'; // !! this property does not exists
echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';

$iphone7plus = new AppleDevice();
$iphone7plus->ram = '4GB';
$iphone7plus->inch = '5.5 inch';
$iphone7plus->space = '256GB';
$iphone7plus->colors = 'silver'; // !! this property does not exists
echo '<pre>';
var_dump($iphone7plus);
echo '</pre>';

$iphone = new AppleDevice();
echo '<pre>';
var_dump($iphone);
echo '</pre>';
