<?php
namespace App\Models;
class PositionModel extends BaseModel{
    protected $table="positions";

    public function getAllPosition(){
        $sql="select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getOnePosition($id){
        $sql="select * from $this->table where id= $id ";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function insertPosition($id,$name){
        $sql="insert into $this->table values(?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$name]);
    }
    public function deletePosition($id){
        $sql="delete from $this->table where id=?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
    public function updatePosition($id,$name){
        $sql="update $this->table set name= ? where id= ?";
        $this->setQuery($sql);
        return $this->execute([$name,$id]);
    }
}


?>