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
4)__get
-- called when getting a property not accessible or not found
-- accept one parameter [ $prop ]
5)__set
-- called when setting a value to a property not accessible or not found
-- accept two parameters [ $prop, $value]
 */

class Iphone
{
    public $name;
    public $ram;

    public function __get($prop)
    {
        echo 'the property [ ' . $prop . ' ] is not found or not accessible. <br>';
    }

}

$phone = new Iphone();
echo $phone->hamada;
echo $phone->color;
echo '<pre>';
print_r($phone);
echo '</pre>';
