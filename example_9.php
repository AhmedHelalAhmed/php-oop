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

    public function setOwnerName($owner)
    {
        if (strlen($owner) < 3) {
            echo 'Owner name cant be less than 3 chars. <br>';
        } else {
            $this->ownerName = $owner;
            echo 'Your name has been set. <br>';
        }
    }
}

$iphone6plus = new AppleDevice();
$iphone6plus->ram = '2GB';
$iphone6plus->inch = '5 inch';
$iphone6plus->space = '32GB';
$iphone6plus->color = 'gold';

$iphone6plus->setOwnerName('os');
$iphone6plus->setOwnerName('hello');

echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';
