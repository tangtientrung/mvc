<?php

namespace MVC\Models;

use MVC\Models\TaskResourceModel;
use MVC\Models\TaskModel;

class TaskRepository
{
    /*
    * get all data
    */
    public function getAll()
    {
        $taskResource = new TaskResourceModel();
        return $taskResource->getAll();
    }

    /*
    * delete data
    */
    public function delete($id)
    {
        $taskResource = new TaskResourceModel();
        $taskResource->delete($id);
    }

    /*
    * add new data
    */
    public function add($model)
    {
        $taskResource = new TaskResourceModel();
        $taskResource->save($model);
    }

    /*
    * edit data
    */
    public function edit($model, $id)
    {
        $taskResource = new TaskResourceModel();
        $taskResource->save($model, $id);
    }

    /*
    * get one data
    */
    public function getOne($id)
    {
        $taskResource = new TaskResourceModel();
        return $taskResource->getOne($id);
    }
}