<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);
/*
 * static
- static properties/methods are used to access properties/methods in a global scope
- declaring class properties or methods as static
make them accessible without needing an instantiation of the class
- because static methods are callable without an intsance of the object created
$this is not available inside the method declared as static
- a property declared as static can not be accessed
with an instantiated class object (a static method can)
- one of the major benefits to using static properties is that they keep their
stored values for the duration of the script
 */

class Iphone
{
    public static $name = 'ahmed';
    public static $ram;
    public static $screen;

    public static function sayHello()
    {
        Iphone::$ram = '1GB'; // or self
        self::$screen = 'LED'; // or class name
        return 'hello';
    }

}

echo Iphone::sayHello() . ' <br>';

echo Iphone::$ram . ' <br>';

echo Iphone::$screen . ' <br>';

echo Iphone::$name . ' <br>';
