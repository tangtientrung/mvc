<?php

namespace MVC\Models;

use MVC\Core\ResourceModel\ResourceModel;

class PostResourceModel extends ResourceModel
{
    /*
    * init constructor for class
    */
    public function __construct()
    {
        $this->_init('post', 'id', 'PostModel');
    }
}
?>