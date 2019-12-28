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

    public function __set($prop, $val)
    {
        echo 'the property [ ' . $prop . ' ] is not found or not accessible. <br>';
        echo 'and you can not assign this value [ ' . $val . ' ] to it. <br>';
    }

}

$phone = new Iphone();
// this will added to this object only
// ? how to prevent that => by suing __set method
$phone->color = 'red';

echo '<pre>';
print_r($phone);
echo '</pre>';

$phone2 = new Iphone();
echo '<pre>';
print_r($phone2);
echo '</pre>';
