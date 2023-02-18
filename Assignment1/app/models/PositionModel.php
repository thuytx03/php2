<?php
namespace App\Models;

class PositionModel extends BaseModel{
    public $table="positions";

    public static function getOnePosition(){
        $model=new static;
        $id=$_GET['id'];
        $sql="select * from positions where id=$id";
        return $model->getData($sql,false);
    }

    public static function insertPosition($name){
        $model=new static;
        $sql="insert into positions (name) values ('$name')";
        $model->getData($sql,false);
    }

    public static function updatePosition($id,$name){
        $model=new static;
        $sql="update positions set name='$name' where id='$id'";
        $model->getData($sql,false);
    }
   
}


?>