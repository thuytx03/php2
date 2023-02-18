<?php

namespace App\Controllers;
use App\Models\BaseModel;
use App\Models\StaffModel;
use App\Models\PositionModel;
use App\Models\DepartmentModel;

class StaffController{

    public static function index(){
        $all=StaffModel::getAll();
        include_once './app/views/staff/listStaff.php';
    }

    public static function deleteStaff(){
        $id=$_GET["id"];
        StaffModel::delete($id);
        StaffModel::resetId("staff");
        $all=StaffModel::getAll();
        
        $thongbao='<div class="alert alert-success mt-2">
        <strong>Thành công!</strong> Xoá nhân viên.
        </div>';
        include_once './app/views/staff/listStaff.php';

    }

    public static function addStaff(){
        
        $position=PositionModel::all();
        $department=DepartmentModel::all();
        error_reporting(0); //Turn off error reporting(Tắt báo cáo lỗi);
        if(isset($_POST['add_staff'])){
            $full_name=($_POST['full_name']);
            $gender=($_POST['gender']);
            $address=($_POST['address']);
            $numberphone=($_POST['numberphone']);
            $cmnd=($_POST['cmnd']);
            $position_id=($_POST['position_id']);
            $department_id=($_POST['department_id']);
            $birthday=$_POST['birthday'];
            $avatar=$_FILES['avatar']['name'];
            $targetfile= "./public/uploads/". uniqid(). "-" .$avatar;
            move_uploaded_file($_FILES["avatar"]["tmp_name"],$targetfile);
            $check=true;
            if($full_name==""){
                $error_name="Không được để trống tên";
                $check=false;
            }
            if($gender==""){
                $error_gender="Không được để trống giới tính";
                $check=false;
            }
            if($address==""){
                $error_address="Không được để trống địa chỉ";
                $check=false;
            }
            if($numberphone==""){
                $error_numberphone="Không được để trống số điện thoại";
                $check=false;
            }
            if($avatar==""){
                $error_avatar="Không được để trống ảnh";
                $check=false;
            }
            if($cmnd==""){
                $error_cmnd="Không được để trống CMND || CCCD";
                $check=false;
            }
            if($position_id==""){
                $error_position="Không được để trống chức vụ";
                $check=false;
            }
            if($department_id==""){
                $error_department="Không được để trống phòng ban";
                $check=false;
            }
            if($birthday==""){
                $error_birthday="Không được để trống ngày sinh";
                $check=false;
            }
            if($check){
                StaffModel::insertStaff($full_name, $gender, $targetfile, $address, $numberphone,$cmnd,$birthday,$position_id,$department_id);
                $thongbao='<div class="alert alert-success">
                <strong>Thành công!</strong> Thêm mới nhân viên.
                </div>';
            }

        }
        include_once './app/views/staff/addStaff.php';
        // header('location:?url=addStaff');

    }

    public static function editStaff(){
        $getOneStaff=StaffModel::getOneStaff();
        $position=PositionModel::all();
        $department=DepartmentModel::all();
        include_once './app/views/staff/updateStaff.php';
    }
    public static function updateStaff(){
        
        if(isset($_POST['update_staff'])){
            $id=$_POST['id'];
            $full_name =($_POST['full_name']);
            $gender = $_POST["gender"];
            $avatar = $_FILES['avatar']['name'];
            $targetfile= "./public/uploads/". uniqid(). "-" .$avatar;
            move_uploaded_file($_FILES["avatar"]["tmp_name"], $targetfile);
            $address = $_POST["address"];
            $numberphone = $_POST["numberphone"];
            $cmnd = $_POST["cmnd"];
            $birthday = $_POST["birthday"];
            $position_id = $_POST["position_id"];
            $department_id = $_POST["department_id"];
            $check=true;
            if($full_name==""){
                $_SESSION["error_name"]="Không được để trống tên";
                $check=false;
            }
            if($address==""){
                $_SESSION['error_address']="Không được để trống địa chỉ";
                $check=false;
            }
            // if($numberphone==""){
            //     $error_numberphone="Không được để trống số điện thoại";
            //     $check=false;
            // }
            // if($cmnd==""){
            //     $error_cmnd="Không được để trống CMND || CCCD";
            //     $check=false;
            // }
            // if($birthday==""){
            //     $error_birthday="Không được để trống ngày sinh";
            //     $check=false;
            // }
            if($check==true){
               StaffModel::update_Staff($id,$full_name,$position_id,$department_id,$gender,$numberphone,$address,$cmnd,$birthday,$targetfile);
                $thongbao="<div class='alert alert-success'>
                <strong>Thành công!</strong> Cập nhật thông tin nhân viên $full_name có ID=$id
                </div>";
            }
            else{
                header('location:?url=editStaff&id='.$id);
            }
        }
        $all=StaffModel::getAll();
        include_once './app/views/staff/listStaff.php';
        
        //header('location:?url=listStaff');
    }
    
}

