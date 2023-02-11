<?php
namespace App\Models;

class Customer extends BaseModel{
    protected $table="customer";

    public function getCustomer(){
        $sql="select *from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}


?>