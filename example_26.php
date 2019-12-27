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
- Removing the Abstraction Class will not effect the child classes
 */
abstract class MakeDevice
{

    abstract public function testPerformance();
    abstract public function verifyOwner();
    abstract public function sayWelcome($n);
    /*
 * child method must be in the same level or less
=> if the method public in parent then child class can be public
=> if the method protected in parent then child class can be protected or public
=> if the method private in parent then child class can be private, protected or public
 */

}

class Iphone extends MakeDevice
{
    public $owner;

    public function testPerformance()
    {
        echo 'Performance is good 100%';

    }

    public function verifyOwner()
    {
        echo 'Owner is verified';

    }

    public function sayWelcome($name)
    {
        echo 'Welcome ' . $name;

    }
}

class Ipab extends MakeDevice
{
    public $owner;

    public function testPerformance()
    {
        echo 'Performance is good 100%';

    }

    public function verifyOwner()
    {
        echo 'Owner is verified';

    }

    public function sayWelcome($hamada)
    {
        echo 'Welcome ' . $hamada;

    }
}

$iphone = new Iphone();
$iphone->sayWelcome('ahmed');
echo '<pre>';
print_r($iphone);
echo '</pre>';

$ipad = new Ipab();
$ipad->sayWelcome('ali');
echo '<pre>';
print_r($ipad);
echo '</pre>';
