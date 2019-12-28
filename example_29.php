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
 */

class Iphone
{
    public $name;
    public $ram;

    public function sayHello()
    {
        echo 'Hello user <br>';
    }

    public function __construct()
    {
        echo 'object is created <br>';
    }
}
class Sony extends Iphone
{

}

$phone = new Iphone();
$phone->sayHello();

echo '<pre>';
print_r($phone);
echo '</pre>';

$sony = new Sony();
echo '<pre>';
print_r($sony);
echo '</pre>';
