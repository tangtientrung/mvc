<?php

namespace MVC\Models;

use MVC\Core\ResourceModel\ResourceModel;

class TaskResourceModel extends ResourceModel
{
    public function __construct()
    {
        $this->_init('tasks', 'id', 'TaskModel');
    }
}
?>