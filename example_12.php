<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class AppleDevice
{

    // properties

    public $ram = '1GB';
    public $inch = '4 Inch';
    public $space = '16 GB';
    public $color = 'Silver';

    // methods

    public function changeSpec($r, $in, $ps, $co)
    {
        $this->ram = $r;
        $this->inch = $in;
        $this->space = $ps;
        $this->color = $co;

    }

}

$iphone6plus = new AppleDevice();
$iphone6plus->changeSpec('2GB', '5 inch', '32GB', 'Gold');
echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';
