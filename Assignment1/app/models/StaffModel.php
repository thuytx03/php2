<?php
namespace App\Models;

class StaffModel extends BaseModel
{
    public $table = "staffs";

    public static function getAll()
    {
        $model = new static;
        $sql = "SELECT s.* ,p.name as `name_position` , d.name `name_department` FROM `staffs` s inner join
         `positions` p on s.position_id=p.id inner join `departments` d on s.department_id=d.id order by s.id";
        return $model->getData($sql);
    }

    public static function insertStaff($full_name, $gender, $avatar, $address, $numberphone, $cmnd, $birthday, $position_id, $department_id)
    {
        $model = new static;
        $sql = "insert into staffs (full_name, gender, avatar, address,numberphone,cmnd,birthday,position_id,department_id) values('$full_name', '$gender', '$avatar', '$address','$numberphone','$cmnd', '$birthday', '$position_id', '$department_id')";
        $model->getData($sql, false);
        
    }
    public static function getOneStaff()
    {
        $model = new static;
        $id = $_GET["id"];
        $sql = "select * from staffs where id='$id'";
        return $model->getData($sql, false);
    }


    public static function update_Staff($id,$full_name,$position_id,$department_id,$gender,$numberphone,$address,$cmnd,$birthday,$targetfile)
    {
        $model = new static;

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
            department_id='$department_id'

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
            department_id='$department_id' 
            where id='$id'";
        $model->getData($sql, false);
    }
}
