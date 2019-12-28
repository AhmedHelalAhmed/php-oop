<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);
/*
 * methods chaining
- when a class's method return the $this keyword, they can be chained together
 */

class Iphone
{
    public $name;
    public static $email;

    public function pressPower()
    {
        echo 'you have pressed the power button <br>';
        return $this;
    }

    public function bootPhone()
    {
        echo 'the phone is booting now ... <br>';
        return $this;
    }

    public function sayWelcome()
    {
        echo 'welcome to phone <br>';
        return $this;
    }

}

$phone = new Iphone();
$phone->pressPower()->bootPhone()->sayWelcome();
echo '<pre>';
print_r($phone);
echo '</pre>';
