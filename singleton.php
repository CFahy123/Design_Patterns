<?php

error_reporting(E_ALL);
ini_set("display_errors","On");

// allows 1 and only 1 instance of a class

class Database {
    public static $instance;

    public static function createInstance() {
        if (!isset(Database::$instance)) {
             return Database::$instance =  new Database();  
        }
        
    }
    private function __construct() {
        // print "In BaseClass constructor\n";
    }

    public function getQuery() {
        return "SELECT * FROM users";
    }
}

// Non Singleton 
class DB {}




$db = Database::createInstance();
// echo $db->getQuery();
$db2 = Database::createInstance();
$db3 = Database::createInstance();

var_dump($db);
var_dump($db2);
var_dump($db3);


$fake = new DB();
$fake2 = new DB();
$fake3 = new DB();

var_dump($fake);
var_dump($fake2);
var_dump($fake3);







