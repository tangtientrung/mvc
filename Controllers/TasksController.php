<?php
namespace MVC\Controllers;

use MVC\Models\TaskModel;
use MVC\Core\Controller;
use MVC\Models\TaskRepository;
use MVC\Models\TaskResourceModel;

class TasksController extends Controller
{
     /*
    * get all data form table task
    */
    function index()
    {
        $tasks = new TaskModel();
        $taskRepo = new TaskRepository();
        $d['tasks'] = $taskRepo->getAll();
        $this->set($d);
        $this->render("index");
        
    }

    /*
    * delete specific row by id
    * @param $id
    */
    function delete($id)
    {
        $taskRepo = new TaskRepository();
        $taskRepo->delete($id);
        header("Location: " . WEBROOT . "tasks/index");
    }

    /*
    * create new task
    */
    function create()
    {
        if (isset($_POST["title"]))
        {
            $task = new TaskModel();
            $taskRepo=new TaskRepository();

            $task->setTitle = $_POST["title"];
            $task->setDescription = $_POST["description"];
            $task->setCreated_at = date('Y-m-d H:i:s');
            $task->setUpdated_at = date('Y-m-d H:i:s');

            $taskRepo->add($task);
            header("Location: " . WEBROOT . "tasks/index");
        }

        $this->render("create");
    }

    /*
    * edit specific row by id
    */
    function edit($id)
    {
        $task = new TaskModel();
        $taskRepo = new TaskRepository();

        $d["task"] = $taskRepo->getOne($id);

        if (isset($_POST["title"]))
        {
            $task->setTitle = $_POST["title"];
            $task->setDescription = $_POST["description"];

            $taskRepo->edit($task,$id);

            header("Location: " . WEBROOT . "tasks/index");
        }
        $this->set($d);
        $this->render("edit");
    }

}
?>