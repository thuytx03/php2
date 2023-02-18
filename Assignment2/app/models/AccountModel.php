<?php
namespace App\Models;
class AccountModel extends BaseModel{
    protected $table="accounts";

    public function getAccount(){
        $sql="select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getOneAccount($id){
        $sql="select * from $this->table where id= ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function insertAccount($id,$name,$email,$password,$role){
        $sql="insert into $this->table values (?,?,?,?,?)";
        $this->setQuery($sql);
        $this->execute([$id,$name,$email,$password,$role]);
    }
    public function deleteAccount($id){
        $sql="delete from $this->table where id=?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
    public function updateAccount($id,$name,$email,$password,$role){
        $sql="update $this->table set name=?,email=?,password=?,role=? where id=?";
        $this->setQuery($sql);
        return $this->execute([$name,$email,$password,$role,$id]);
    }
}


?>