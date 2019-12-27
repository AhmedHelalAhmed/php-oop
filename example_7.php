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

    public function getSpecification()
    {
        echo 'this iphone ram is: ' . $this->ram . '<br>';
        echo 'this iphone screen inch is: ' . $this->inch . '<br>';

    }
}

$iphone6plus = new AppleDevice();
$iphone6plus->ram = '2GB';
$iphone6plus->inch = '5 inch';
$iphone6plus->space = '32GB';
$iphone6plus->color = 'gold';
$iphone6plus->getSpecification();
echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';
