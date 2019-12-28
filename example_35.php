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
6)__clone - clone
-- typical copy of object in php works by reference.
-- means both ( main and copied ) object will be interlinked [ the same ].
 */

class Iphone
{
    public $name;
    public $email;

    public function __construct($n, $e)
    {
        $this->name = $n;
        $this->email = $e;
    }

}

$main = new Iphone('Ahmed', 'ahmed@app.com');

$copy = $main; // copy by reference => copy the the same object

$main->name = 'ali';

$copy->name = 'x';

echo '<pre>';
print_r($main);
echo '</pre>';

echo '<pre>';
print_r($copy);
echo '</pre>';
