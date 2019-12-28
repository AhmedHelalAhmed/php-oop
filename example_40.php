<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);
/*
 * trait => php 5.4
-a mechanism for code reuse in single inhertance language such as php
- problem with extending classes, is that u can only extend one. this is a little limiting
- with traits its possible for php classes to inherit methods & properties from multi sources.

- you can not extend or implements.
- you can not instantiate.
- its supporting class not replacing it.
- can have methods.
- have priority over class of parent but not the same class.
 */
trait FingerPrint
{
    public function fingerFeature()
    {
        echo 'this has finger print feature <br>';
        return $this;
    }
}
trait ThreeDimensionTouch
{
    public function threeD()
    {
        echo 'this has 3d touch feature <br>';
        return $this;
    }
}
trait FaceDetect
{
    public function faceFeature()
    {
        echo 'this has face detect feature <br>';
        return $this;
    }
}
trait MyFeature
{
    public function sayHello()
    {
        echo 'hello from trait';
    }
}
trait AllFeatures
{
    use FingerPrint, ThreeDimensionTouch, FaceDetect, MyFeature;
}

class AppleDevice
{
    public function sayHello()
    {
        echo 'hello from class';
    }
}
class Iphone extends AppleDevice
{
    use AllFeatures;

}

class Sony
{
    use FaceDetect, MyFeature;
    public function sayHello()
    {
        echo 'hello from class';
    }
}

$iphone = new Iphone();
$iphone->fingerFeature()->threeD()->faceFeature()->sayHello();
echo '<pre>';
print_r($iphone);
echo '</pre>';

$sony = new Sony();
$sony->faceFeature()->sayHello();
echo '<pre>';
print_r($sony);
echo '</pre>';
