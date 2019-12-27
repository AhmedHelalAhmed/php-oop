<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);
/*

 * class Abstraction
- can not be instantiated [ can not create object from ]
- made for other classes to inhert properites and methods from
- can have methods and properities
- can have abstracted method and non abstracted method
- abstract methods [ contains no body code ]
- rules to go on
- force devlopers to follow your methods

 */
abstract class MakeDevice
{
    public $ram;
    public function sayHello()
    {
        echo 'say hello';
    }
    abstract public function sayBye();
}

class AppleDevice extends MakeDevice
{
    //* must be declared or the class to be abstract
    public function sayBye()
    {
        echo 'say bye';
    }

}

$iphone6plus = new AppleDevice();
$iphone6plus->sayHello();

echo '<pre>';
print_r($iphone6plus);
echo '</pre>';
