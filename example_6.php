<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class AppleDevice
{

    // properties

    public $ram = '1GB';
    public $inch;
    public $space;
    public $color;

    // methods

    public function doubleHomePressed()
    {
        // echo 'you have pressed the home button twice';
        echo 'this device does not support this feature';
    }
}

$iphone6plus = new AppleDevice();
$iphone6plus->ram = '2GB';
$iphone6plus->inch = '5 inch';
$iphone6plus->space = '32GB';
$iphone6plus->color = 'gold';
$iphone6plus->doubleHomePressed();
echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';

$iphone7plus = new AppleDevice();

$iphone7plus->ram = '4GB';
$iphone7plus->inch = '5.5 inch';
$iphone7plus->space = '256GB';
$iphone7plus->color = 'silver';
echo '<pre>';
var_dump($iphone7plus);
echo '</pre>';

$iphone = new AppleDevice();

echo '<pre>';
var_dump($iphone);
echo '</pre>';
