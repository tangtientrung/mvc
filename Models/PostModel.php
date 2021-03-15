<?php
namespace MVC\Models;

use MVC\Core\Model;
use MVC\Config\Database;

class PostModel extends Model
{
    /*
    * @var $name
    */
    protected $name;

    /*
    * get variable name
    */
    public function getName()
    {
        return $this->name;
    }

    /*
    * set variable name
    * @param $name
    */
    public function setName($name)
    {
        $this->name = $name;
    }
}
?>