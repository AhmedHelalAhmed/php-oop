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
- have priority over class.
 */
trait FingerPrint
{
    public function fingerFeature()
    {
        echo 'this has finger print feature <br>';
    }
}
trait ThreeDimensionTouch
{
    public function threeD()
    {
        echo 'this has 3d touch feature <br>';
    }
}
trait FaceDetect
{
    public function faceFeature()
    {
        echo 'this has face detect feature <br>';
    }
}

class Iphone
{
    use FingerPrint;
    use ThreeDimensionTouch;
    use FaceDetect;
}

class Sony
{
    use FaceDetect;

}

$iphone = new Iphone();
$iphone->fingerFeature();
$iphone->threeD();
$iphone->faceFeature();

echo '<pre>';
print_r($iphone);
echo '</pre>';

$sony = new Sony();
$sony->faceFeature();
echo '<pre>';
print_r($sony);
echo '</pre>';
