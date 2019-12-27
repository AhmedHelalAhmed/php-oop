<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);

class AppleDevice
{

    // properties

    public $ram = '1GB';
    public $inch = '4 Inch';
    public $space = '16 GB';
    public $color = 'Silver';
    public $screen = 'LCD';
    public $name;

    // methods

    public function changeSpec($r, $in, $ps, $co)
    {
        $this->ram = $r;
        $this->inch = $in;
        $this->space = $ps;
        $this->color = $co;

    }
    public function sayHello($n)
    {
        $this->name = $n;
        echo 'Welcome to ' . $n;
    }

}

class Sony extends AppleDevice
{

    // properties

    public $camera = '25MB';

}

$iphone6plus = new AppleDevice();
$iphone6plus->changeSpec('2GB', '5 inch', '32GB', 'Gold');
$iphone6plus->sayHello('Iphone');
echo '<pre>';
print_r($iphone6plus);
echo '</pre>';

$sony = new Sony();
$sony->changeSpec('2GB', '5 inch', '32GB', 'Gold', '30MB');
$sony->sayHello('Sony');

echo '<pre>';
print_r($sony);
echo '</pre>';
