<?php
namespace App\Models;
class AuthModel extends BaseModel{
    protected $table="accounts";

    public function getAuth($email){
        // $sql="select * from $this->table where email=?  ";
        // $this->setQuery($sql);
        // return $this->loadRow([$email]);
        $sql="select * from accounts where email= '$email'  ";
        return $this->getData($sql,false);
    }
    
}


?>