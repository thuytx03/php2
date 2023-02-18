<?php

namespace App\Controllers;

use App\Models\TimekeepingModel;
use App\Models\StaffModel;

class TimekeepingController
{

    public static function listTimekeeping()
    {
        // $staff=StaffModel::getAll();
        $timekeeping = TimekeepingModel::getAllTimekeeping();
        include_once './app/views/timekeeping/listTimekeeping.php';
    }
    public static function addTimekeeping()
    {
        $staff_id = $_POST['staff_id'];
        $check = false;


        // if (isset($_POST['chamcong'])) {
            $timekeeping = TimekeepingModel::all();

            foreach ($timekeeping as $key => $value) {
                if($staff_id==$value['staff_id']){
                                 $check=true;
                                 break;
                             }

                if ( $value['work_day'] != "") {  
                    var_dump($value['work_day']);
                    die;  
                    echo "Đã chấm công";
                    $timekeeping = TimekeepingModel::getAllTimekeeping();
                    include_once './app/views/timekeeping/listTimekeeping.php';
                   

                } else {
                    echo "Chưa chấm công";
                    $timekeeping = TimekeepingModel::getAllTimekeeping();
                    include_once './app/views/timekeeping/addTimekeeping.php';
                }
            }
        // }
        // $timekeeping = TimekeepingModel::getAllTimekeeping();
        // include_once './app/views/timekeeping/addTimekeeping.php';
    }
    public static function saveAddTimekeeping()
    {
        if (isset($_POST['add_timekeeping'])) {
            $staff_id = $_POST['staff_id'];
            $work_day = $_POST['work_day'];
            $on_leave = $_POST['on_leave'];
            $unexcused_leave = $_POST['unexcused_leave'];
            $month = $_POST['month'];
            $check = false;
            $timekeeping = TimekeepingModel::getAllTimekeeping();
            //  foreach ($timekeeping as $key => $value) {
            //           if($staff_id==$value['staff_id']){
            //              $check=true;
            //              break;
            //          }
            //         }
            // if($check){
            //     TimekeepingModel::updateTimekeeping($staff_id,$basic_salary);
            // }else{
            // foreach ($timekeeping as $value) {
            //     if (isset($value['work_day'])) {
            //         var_dump($value['work_day']);
            //         // echo "Tồn tại";
            //         die;
            //     }
            // }

            TimekeepingModel::updateTimekeeping($staff_id, $work_day, $on_leave, $unexcused_leave, $month);
            $thongbao = '<div class="alert alert-success">
                    <strong>Thành công!</strong> Chấm công nhân viên.
                    </div>';
        }
        $timekeeping = TimekeepingModel::getAllTimekeeping();
        include_once './app/views/timekeeping/listTimekeeping.php';
        // include_once './app/views/timekeeping/addTimekeeping.php';  
    }
    public static function editTimekeeping()
    {
        $getOne = TimekeepingModel::getOneTimekeeping();
        include_once './app/views/timekeeping/updateTimekeeping.php';
    }
    public static function updateTimekeeping()
    {
        if (isset($_POST['update_timekeeping'])) {
            $staff_id = $_POST['staff_id'];
            $work_day = $_POST['work_day'];
            $on_leave = $_POST['on_leave'];
            $unexcused_leave = $_POST['unexcused_leave'];
            $month = $_POST['month'];
            TimekeepingModel::updateTimekeeping($staff_id, $work_day, $on_leave, $unexcused_leave, $month);
            $thongbao = "<div class='alert alert-success'>
                <strong>Thành công!</strong> Cập nhật chấm công nhân viên có ID=$staff_id
                </div>";
        }
        $timekeeping = TimekeepingModel::getAllTimekeeping();
        include_once './app/views/timekeeping/listTimekeeping.php';
    }
}
