<?php

namespace MVC\Core\ResourceModel;

use MVC\Core\Interfaces\ResourceModelInterface;
use MVC\Config\Database;

class ResourceModel implements ResourceModelInterface
{
    /*
    * @var $table
    * @var $id
    * @var $model
    */
    protected $table;
    protected $id;
    protected $model;

    public function _init($table,$id,$model)
    {
        $this->table=$table;
        $this->id=$id;
        $this->model=$model;
    }

    public function save($model,$id=null)
    {
        $arr = get_object_vars($model);
        if ($id!=null) {
            $queryUpdate = "";
            $arrUpdate=array();
            foreach ($arr as $key => $value)
            {
                $queryUpdate = $queryUpdate. lcfirst(substr($key,3)). " = :". lcfirst(substr($key,3)). ", ";
                $arrUpdate[lcfirst(substr($key,3))]=$value;
            }

            $queryUpdate = rtrim($queryUpdate, ", ");
            $query = "UPDATE ". $this->table. " SET ". $queryUpdate. " WHERE ". $this->id. " = ". $id;
            $req = Database::getBdd()->prepare($query);
            return $req->execute($arrUpdate);
        } else {
            $columns = "";
            $values=":";
            $arrInsert=array();
            foreach ($arr as $key => $value)
            {
                $columns = $columns. lcfirst(substr($key,3))." , ";
                $values = $values. lcfirst(substr($key,3))." , :";
                $arrInsert[lcfirst(substr($key,3))]=$value;
            }
            $columns = rtrim($columns, " , ");
            $values = rtrim($values, " ,: ");
            $sql = "INSERT INTO ".$this->table." (".$columns.") VALUES (".$values.")";

            $req = Database::getBdd()->prepare($sql);
            // var_dump($columns);
            // var_dump($values);
            // var_dump($arrInsert);
            return $req->execute($arrInsert);
            
        }
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM '.$this->table.' WHERE id = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM ".$this->table;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
    
    public function getOne($id)
    {
        $sql = "SELECT * FROM ".$this->table." WHERE id =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

}
?>