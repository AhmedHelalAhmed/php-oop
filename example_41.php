<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);
/*
 * trait => php 5.4
 */
trait Feature1
{
    // same method name
    public function feature()
    {
        echo 'this is feature #1 <br>';
    }
}
trait Feature2
{
    // same method name
    public function feature()
    {
        echo 'this is feature #2 <br>';
    }
}

class Iphone
{
    use Feature1, Feature2 {

        // [trait name] [::] [method name] [insteadof] [other method name]

        Feature2::feature insteadof Feature1; // #2

        // to access the other one use alias
        // [trait name] [::] [method name] [as] [new name]
        Feature1::feature as hamada;

    }

}

$iphone = new Iphone();
$iphone->feature(); // #2
$iphone->hamada(); //#1 by alias
echo '<pre>';
print_r($iphone);
echo '</pre>';
