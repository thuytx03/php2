<?php
namespace App\Models;
class DepartmentModel extends BaseModel{
    protected $table="departments";

    public function getAllDepartment(){
        $sql="select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getOneDepartment($id){
        $sql="select * from $this->table where id=$id";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function insertDepartment($id,$name){
        $sql="insert into $this->table values(?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$name]);
    }
    public function deleteDepartment($id){
        $sql="delete from $this->table where id=?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
    public function updateDepartment($id,$name){
        $sql="update $this->table set name= ? where id= ?";
        $this->setQuery($sql);
        return $this->execute([$name,$id]);
    }
}


?>