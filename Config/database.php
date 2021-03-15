<?php
namespace MVC\Config;

use PDO;

class Database
{
    /*
    * @var $bdd
    */

    private static $bdd = null;

    /*
    * contruct for class
    */
    private function __construct() {
    }

    /*
    * get connect database
    */
    public static function getBdd() {
        if(is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=localhost;dbname=mvc", 'root', '');
        }
        return self::$bdd;
    }
}
?>