<?php
namespace MVC\Controllers;

use MVC\Models\TaskModel;
use MVC\Core\Controller;
use MVC\Models\TaskRepository;
use MVC\Models\TaskResourceModel;

class tasksController extends Controller
{
    function index()
    {
        $tasks = new TaskModel();
        $taskRepo = new TaskRepository();
        $d['tasks'] = $taskRepo->getAll();
        $this->set($d);
        $this->render("index");
    }

    function delete($id)
    {
        $taskRepo=new TaskRepository();
        $taskRepo->delete($id);
        header("Location: " . WEBROOT . "tasks/index");
    }

    function create()
    {
        if (isset($_POST["title"]))
        {
            $task= new TaskModel();
            $taskRepo=new TaskRepository();

            $task->setTitle=$_POST["title"];
            $task->setDescription=$_POST["description"];
            $task->setCreated_at=date('Y-m-d H:i:s');
            $task->setUpdated_at=date('Y-m-d H:i:s');

            $taskRepo->add($task);
            header("Location: " . WEBROOT . "tasks/index");
        }

        $this->render("create");
    }

    function edit($id)
    {
        $task= new TaskModel();
        $taskRepo=new TaskRepository();

        $d["task"] = $taskRepo->getOne($id);

        if (isset($_POST["title"]))
        {
            $task->setTitle=$_POST["title"];
            $task->setDescription=$_POST["description"];

            $taskRepo->edit($task,$id);

            header("Location: " . WEBROOT . "tasks/index");
        }
        $this->set($d);
        $this->render("edit");
    }

}
?>