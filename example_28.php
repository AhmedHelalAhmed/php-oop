<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);
/*
 * polymorphism
- have methods without body code

 */

interface DBConnects
{
    public function getUsers();
    public function getArticles();
    public function getStats();

}

class MySQL implements DBConnects
{
    public function getUsers()
    {
        echo 'select * from users <br>';
    }

    public function getArticles()
    {
        echo 'select * from articles <br>';
    }

    public function getStats()
    {
        echo 'select * from stats <br>';
    }

}
// change db to oracle
class Oracle implements DBConnects
{
    public function getUsers()
    {
        echo 'hello from users <br>';
    }

    public function getArticles()
    {
        echo 'hello from articles <br>';
    }

    public function getStats()
    {
        echo 'hello from stats <br>';
    }
}

$row = new MySQL(); // changed to oracle
// to change to Oracle just change the line above
$row = new Oracle();

$row->getUsers();
$row->getArticles();
$row->getStats();
echo '<pre>';
print_r($row);
echo '</pre>';
