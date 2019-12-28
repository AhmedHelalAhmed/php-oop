<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);
/*
 * polymorphism
- have methods without body code

 */

interface Mobile
{
    public function pressHome();
}

class Iphone implements Mobile
{
    public $name;

    public function pressHome()
    {
        echo 'you will see opened applications.';
    }
}

class Sony implements Mobile
{
    public $name;

    public function pressHome()
    {
        echo 'you will close all apps.';

    }
}

$iphone = new Iphone();
$iphone->pressHome();
echo '<pre>';
print_r($iphone);
echo '</pre>';

$sony = new Sony();
$sony->pressHome();
echo '<pre>';
print_r($sony);
echo '</pre>';
