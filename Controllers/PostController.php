<?php
namespace MVC\Controllers;

use MVC\Models\PostModel;
use MVC\Core\Controller;
use MVC\Models\PostRepository;
use MVC\Models\PostResourceModel;

class PostController extends Controller
{
    /*
    * get all data form table post
    */
    function index()
    {
        $post = new PostModel();
        $postRepo = new PostRepository();
        $d['post'] = $postRepo->getAll();
        $this->set($d);
        $this->render("index");
    }

    /*
    * delete specific row by id
    * @param $id
    */
    function delete($id)
    {
        $postRepo = new PostRepository();
        $postRepo->delete($id);
        header("Location: " . WEBROOT . "post/index");
    }

    /*
    * create new post
    */
    function create()
    {
        if (isset($_POST["name"]))
        {
            $post = new PostModel();
            $postRepo = new PostRepository();

            $post->setName = $_POST["name"];

            $postRepo->add($post);
            header("Location: " . WEBROOT . "post/index");
        }

        $this->render("create");
    }

    /*
    * edit specific row by id
    */
    function edit($id)
    {
        $post = new PostModel();
        $postResource = new PostResourceModel();

        $d["post"] = $postResource->getOne($id);

        if (isset($_POST["name"]))
        {
            $post->setName = $_POST["name"];

            $postResource->save($post,$id);

            header("Location: " . WEBROOT . "post/index");
        }
        $this->set($d);
        $this->render("edit");
    }

}
?>