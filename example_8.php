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
    public $ownerName;

    // methods

    public function setOwnerName()
    {
        if (strlen($this->ownerName) < 3) {
            echo 'Owner name cant be less than 3 chars. <br>';
        } else {
            echo 'Your name has been set. <br>';
        }
    }
}

$iphone6plus = new AppleDevice();
$iphone6plus->ram = '2GB';
$iphone6plus->inch = '5 inch';
$iphone6plus->space = '32GB';
$iphone6plus->color = 'gold';

$iphone6plus->ownerName = 'os';
$iphone6plus->setOwnerName();

$iphone6plus->ownerName = 'ali';
$iphone6plus->setOwnerName();

echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';
