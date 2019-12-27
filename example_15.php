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
    private $lock; // encapsulation

    // methods

    public function changeSpec($r, $in, $ps, $co)
    {
        $this->ram = $r;
        $this->inch = $in;
        $this->space = $ps;
        $this->color = $co;

    }

    public function changeLock($lo)
    {
        $this->lock = sha1($lo); // encapsulation
    }

}

$iphone6plus = new AppleDevice();
$iphone6plus->changeSpec('2GB', '5 inch', '32GB', 'Gold');
$iphone6plus->changeLock('osama@123'); // encapsulation

echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';
