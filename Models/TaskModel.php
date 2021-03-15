<?php

namespace MVC\Models;

use MVC\Core\Model;
use MVC\Config\Database;

class TaskModel extends Model
{
    /*
    * @var $id
    * @var $title
    * @var $description
    * @var $created_at
    * @var $updated_at
    */
    protected $id;
    protected $title;
    protected $description;
    protected $created_at;
    protected $updated_at;

    /*
    * get variable id
    */
    public function getId()
    {
        return $this->id;
    }
    
    /*
    * set variable id
    * @param $id
    */
    public function setId($id)
    {
        $this->id = $id;
    }

    /*
    * get variable title
    */
    public function getTitle()
    {
        return $this->title;
    }
    
    /*
    * set variable title
    * @param $title
    */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /*
    * get variable description
    */
    public function getDescription()
    {
        return $this->description;
    }
    
    /*
    * set variable description
    * @param $description
    */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /*
    * get variable created_at
    */
    public function getCreated_at()
    {
        return $this->created_at;
    }
    
    /*
    * set variable created_at
    * @param $created_at
    */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    }

    /*
    * get variable updated_at
    */
    public function getUpdated_at()
    {
        return $this->updated_at;
    }
    
    /*
    * set variable updated_at
    * @param $updated_at
    */
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;
    }

}
?>