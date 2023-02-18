<?php
namespace App\Models;
class Product extends BaseModel{
    protected $table="product";

    //hàm lấy danh sách sản phẩm
    public function getProduct(){
        $sql="select * from $this->table  ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getOneProduct($id){
        $sql="select * from $this->table  where id=$id";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function getDetailProduct($id){
        $sql="select * from $this->table  where id=?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function addProduct($id,$ten_sp,$gia){
        $sql="insert into $this->table values(?,?,?) ";
        $this->setQuery($sql);
        return $this->execute([$id,$ten_sp,$gia]);
    }
    public function updateProduct($id,$ten_sp,$gia){
        $sql="update $this->table set ten_sp= ? , gia = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute([$ten_sp,$gia,$id]);
    }
    public function deleteProduct($id){
        $sql="delete from $this->table where id =?";
        $this->setQuery($sql);
        return $this->execute([$id]);


    }
}


?>