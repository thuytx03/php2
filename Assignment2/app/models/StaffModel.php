<?php
namespace App\Models;
class StaffModel extends BaseModel{
    protected $table="staffs";

    public function getAllStaff(){
        $sql = "SELECT s.* ,p.name as `name_position` , d.name `name_department` FROM `staffs` s inner join
         `positions` p on s.position_id=p.id inner join `departments` d on s.department_id=d.id order by s.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getOneStaff($id){
        $sql="select * from $this->table where id= $id ";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    // public function insertStaff($id,$full_name,$numberphone, $email,$targetfile, $address, $cmnd,$gender, $birthday,$position_id,$department_id){
    //     $sql="insert into $this->table values(?,?,?,?,?,?,?,?,?,?,?)";
    //     $this->setQuery($sql);
    //     return $this->execute([$id,$full_name,$numberphone, $email,$targetfile, $address, $cmnd,$gender, $birthday,$position_id,$department_id]);
    // }
     public function insertStaff($full_name,$numberphone, $email,$targetfile, $address, $cmnd,$gender, $birthday,$position_id,$department_id){
        $sql="insert into staffs (full_name,numberphone,email,avatar,address,cmnd,gender,birthday,position_id,department_id) values('$full_name','$numberphone','$email','$targetfile','$address','$cmnd','$gender','$birthday','$position_id','$department_id')";
        $this->getData($sql,false);
    }
    public function deleteStaff($id){
        $sql="delete from $this->table where id=?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
    public function updateStaff($id,$full_name,$position_id,$department_id,$gender,$numberphone,$address,$cmnd,$birthday,$targetfile,$email)
    {

        if ($_FILES['avatar']['size'] != 0) {
            $sql = "update staffs set 
            full_name='$full_name',
            gender='$gender',
            avatar='$targetfile',
            address='$address',
            numberphone='$numberphone',
            cmnd='$cmnd',
            birthday='$birthday',
            position_id='$position_id',
            department_id='$department_id',
            email='$email'

            where id='$id'";
        } else
            $sql = "update staffs set 
                    full_name='$full_name',
                    gender='$gender',
                    address='$address',
                    numberphone='$numberphone',
                    cmnd='$cmnd',
            birthday='$birthday',
            position_id='$position_id',
            department_id='$department_id' ,
            email='$email'

            where id='$id'";
        $this->getData($sql, false);
    }
    
}


?>