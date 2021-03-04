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

    // public function __contruct(){}

    // public function __contruct($title,$description) {
    //     $this->title=$title;
    //     $this->description=$description;
    // }

    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id=$id;
    }

    public function getTitle()
    {
        return $this->title;
    }
    
    public function setTitle($title)
    {
        $this->title=$title;
    }

    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description)
    {
        $this->description=$description;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }
    
    public function setCreated_at($created_at)
    {
        $this->created_at=$created_at;
    }

    public function getUpdated_at()
    {
        return $this->updated_at;
    }
    
    public function setUpdated_at($updated_at)
    {
        $this->updated_at=$updated_at;
    }

}
?>