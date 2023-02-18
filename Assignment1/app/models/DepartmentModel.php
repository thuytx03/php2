<?php
namespace App\Models;

class DepartmentModel extends BaseModel{
    public $table="departments";

    public static function getOneDepartment(){
        $model=new static;
        $id=$_GET['id'];
        $sql="select * from departments where id=$id";
        return $model->getData($sql,false);
    }

    public static function insertDepartment($name){
        $model=new static;
        $sql="insert into departments (name) values ('$name')";
        $model->getData($sql,false);
    }
    public static function updateDepartment($id,$name){
        $model=new static;
        $sql="update departments set name='$name' where id='$id'";
        $model->getData($sql,false);
    }
}


?>