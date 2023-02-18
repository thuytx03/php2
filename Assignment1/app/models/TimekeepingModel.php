<?php
namespace App\Models;
class TimekeepingModel extends BaseModel{
    public $table="timekeepings";

    public static function getAllTimekeeping(){
        $model=new static();
        $sql="SELECT t.*, s.id as `staff_id`, s.full_name as `staff_name` FROM timekeepings t right join staffs s on s.id=t.staff_id";
        return $model->getData($sql);
    }
    public static function getOneTimekeeping()
    {
        $model = new static;
        $id = $_GET["id"];
        $sql = "select * from timekeepings where staff_id='$id'";
        return $model->getData($sql, false);
    }
    // public static function getTimekeeping(){
    //     $model=new static();
    //     $sql="select * from timekeepings  ";
    //     return $model->getData($sql,false);
    // }
    public static function insertTimekeeping($staff_id,$work_day,$on_leave,$unexcused_leave	,$month){
        $model=new static;
        $sql="insert into timekeepings (staff_id,work_day,on_leave,unexcused_leave,month) values ('$staff_id','$work_day','$on_leave','$unexcused_leave','$month')";
        $model->getData($sql,false);
    }
    public static function updateTimekeeping($staff_id,$work_day,$on_leave,$unexcused_leave	,$month){
        $model=new static;
        $sql="update timekeepings set work_day='$work_day',
                                    on_leave='$on_leave',
                                    unexcused_leave='$unexcused_leave',
                                    month='$month' 

        where staff_id='$staff_id'";
        $model->getData($sql,false);
    }
}


?>