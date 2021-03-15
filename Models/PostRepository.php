<?php

namespace MVC\Models;

use MVC\Models\PostResourceModel;
use MVC\Models\PostModel;

class PostRepository
{
    /*
    * get all data
    */
    public function getAll()
    {
        $postResource = new PostResourceModel();
        return $postResource->getAll();
    }

    /*
    * delete data
    */
    public function delete($id)
    {
        $postResource = new PostResourceModel();
        $postResource->delete($id);
    }

    /*
    * add new data
    */
    public function add($model)
    {
        $postResource = new PostResourceModel();
        $postResource->save($model);
    }

    /*
    * edit data
    */
    public function edit($model, $id)
    {
        $postResource = new PostResourceModel();
        $postResource->save($model, $id);
    }

    /*
    * get one data
    */
    public function getOne($id)
    {
        $postResource = new PostResourceModel();
        return $postResource->getOne($id);
    }
}