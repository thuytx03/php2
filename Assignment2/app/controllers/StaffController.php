<?php

namespace App\Controllers;

use App\Models\DepartmentModel;
use App\Models\PositionModel;
use App\Models\StaffModel;

class StaffController extends BaseController
{
    public $staff;
    public $position;
    public $department;
    public function __construct()
    {
       checkAuth();
        $this->staff = new StaffModel();
        $this->position = new PositionModel();
        $this->department = new DepartmentModel();
    }

    public function listStaff()
    {
        $staffs = $this->staff->getAllStaff();
        return $this->render('staff.index', compact('staffs'));
    }
    public function deleteStaff($id)
    {
        $this->staff->deleteStaff($id);
        StaffModel::resetId("staffs");
        redirect("success", "Xoá nhân viên", "listStaff");
    }
    public function addStaff()
    {
        $staffs = $this->staff->getAllStaff();
        $position = $this->position->getAllPosition();
        $department = $this->department->getAllDepartment();
        return $this->render('staff.add', compact('staffs', 'position', 'department'));
    }

    public function saveStaff()
    {
        if (isset($_POST['add-staff'])) {
            delete_session();
            $full_name = $_POST['full_name'];
            $position_id = $_POST['position_id'];
            $department_id = $_POST['department_id'];
            $avatar = $_FILES['avatar']['name'];
            $targetfile = "./public/upload/" . uniqid() . "-" . $avatar;
            move_uploaded_file($_FILES["avatar"]["tmp_name"], $targetfile);
            $gender = $_POST["gender"];
            $numberphone = $_POST['numberphone'];
            $email = $_POST['email'];
            $cmnd = $_POST['cmnd'];
            $address = $_POST['address'];
            $birthday = $_POST['birthday'];

            $error = [];
            if (empty($_POST['full_name'])) {
                $error[] = "Vui lòng nhập họ và tên";
            }
            if (empty($_POST['position_id'])) {
                $error[] = "Vui lòng nhập chức vụ";
            }
            if (empty($_POST['department_id'])) {
                $error[] = "Vui lòng nhập phòng ban";
            }
            if (empty($avatar)) {
                $error[] = "Vui lòng chọn ảnh";
            }
            if (empty($_POST['gender'])) {
                $error[] = "Vui lòng nhập giới tính";
            }
            if (empty($_POST['numberphone'])) {
                $error[] = "Vui lòng nhập số điện thoại";
            }
            if (empty($_POST['email'])) {
                $error[] = "Vui lòng nhập email";
            }
            if (empty($_POST['cmnd'])) {
                $error[] = "Vui lòng nhập CMND";
            }
            if (empty($_POST['address'])) {
                $error[] = "Vui lòng nhập địa chỉ";
            }
            if (empty($_POST['birthday'])) {
                $error[] = "Vui lòng nhập ngày sinh";
            }
            if (count($error) > 0) {
                $_SESSION['errors'] = $error;
                header('location:' . BASE_URL . 'addStaff');
                die();
            } else {
                $this->staff->insertStaff($full_name, $numberphone, $email, $targetfile, $address, $cmnd, $gender, $birthday, $position_id, $department_id);
                redirect("success", "Thêm mới nhân viên", "addStaff");
            }
        }
    }
    public function updateStaff()
    {
        $id = $_GET['id'];
        $getOneStaff = $this->staff->getOneStaff($id);
        $position = $this->position->getAllPosition();
        $department = $this->department->getAllDepartment();
        return $this->render('staff.update', compact('getOneStaff', 'position', 'department'));
    }
    public function saveUpdateStaff()
    {
        if (isset($_POST['update_staff'])) {
            $id = $_POST['id'];
            $full_name = ($_POST['full_name']);
            $gender = $_POST["gender"];
            $avatar = $_FILES['avatar']['name'];
            $targetfile = "./public/uploads/" . uniqid() . "-" . $avatar;
            move_uploaded_file($_FILES["avatar"]["tmp_name"], $targetfile);
            $address = $_POST["address"];
            $numberphone = $_POST["numberphone"];
            $cmnd = $_POST["cmnd"];
            $birthday = $_POST["birthday"];
            $position_id = $_POST["position_id"];
            $department_id = $_POST["department_id"];
            $email = $_POST['email'];
            $error=[];
            if(empty($full_name)){
                $error[]=" Không được để trống họ và tên";
            }
            if(empty($gender)){
                $error[]=" Không được để trống giới tính";
            }
            if(empty($position_id)){
                $error[]=" Không được để trống chức vụ";
            }
            if(empty($department_id)){
                $error[]=" Không được để trống phòng ban";
            }
            if(empty($numberphone)){
                $error[]=" Không được để trống số điện thoại";
            }
            if(empty($cmnd)){
                $error[]=" Không được để trống số CMND";
            }
            if(empty($birthday)){
                $error[]=" Không được để trống ngày sinh";
            }
            if(empty($email)){
                $error[]=" Không được để trống email";
            } 
            if(empty($address)){
                $error[]=" Không được để trống địa chỉ";
            }
            if(count($error)>0){
                redirect("errors",$error,"updateStaff&id=".$id);
            }else{
                $this->staff->updateStaff($id, $full_name, $position_id, $department_id, $gender, $numberphone, $address, $cmnd, $birthday, $targetfile, $email);
                redirect("success", "Cập nhật nhân viên $full_name có ID=$id", "listStaff");
            }
            
        }
    }
}
