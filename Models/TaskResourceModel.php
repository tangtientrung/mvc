<?php

namespace MVC\Models;

use MVC\Core\ResourceModel\ResourceModel;

class TaskResourceModel extends ResourceModel
{
    /*
    * init constructor for class
    */
    public function __construct()
    {
        $this->_init('tasks', 'id', 'TaskModel');
    }
}
?>