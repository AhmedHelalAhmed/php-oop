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
    public $color;

    // note:  var still exists and = public

}

$iphone6plus = new AppleDevice();
echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';

$iphone7plus = new AppleDevice();
echo '<pre>';
var_dump($iphone7plus);
echo '</pre>';
