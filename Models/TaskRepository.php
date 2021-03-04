<?php

namespace MVC\Models;

use MVC\Models\TaskResourceModel;
use MVC\Models\TaskModel;

class TaskRepository
{
    public function getAll()
    {
        $taskResource = new TaskResourceModel();
        return $taskResource->getAll();
    }

    public function delete($id)
    {
        $taskResource = new TaskResourceModel();
        $taskResource->delete($id);
    }


    public function add($model)
    {
        $taskResource = new TaskResourceModel();
        $taskResource->save($model);
    }

    public function edit($model, $id)
    {
        $taskResource = new TaskResourceModel();
        $taskResource->save($model, $id);
    }

    
    public function getOne($id)
    {
        $taskResource = new TaskResourceModel();
        return $taskResource->getOne($id);
    }
}