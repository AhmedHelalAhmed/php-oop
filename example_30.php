<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);
/*
 * magic methods
- method with special name start with double underscore [ __ ]
1)__construct:
-- called when object is created
-- can be inherted
2)__destruct
-- called when object is destroyed
 */

class Iphone
{
    public $name;
    public $ram;

    public function __construct($na, $ra)
    {
        $this->name = $na;
        $this->ram = $ra;
        echo 'Hello ' . $na . ' your device has ' . $ra . ' ram';
    }
}

$phone = new Iphone('alex', '2GB'); //inject the values

echo '<pre>';
print_r($phone);
echo '</pre>';
