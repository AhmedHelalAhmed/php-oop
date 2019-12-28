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
3)__call
-- called when invoking function not accessible or not found
-- accept two parameters [ $methodName , $params ]
 */

class Iphone
{
    public $name;
    public $ram;

    public function __call($method, $params)
    {
        echo 'The method [ ' . $method . ' ] not found or not accessible. <br>';
        echo '<pre>';
        print_r($params);
        echo '</pre>';

    }

}

$phone = new Iphone();
$phone->welcomeToApp('ahmed', '2GB');
$phone->welcomeToPhone();

echo '<pre>';
print_r($phone);
echo '</pre>';
