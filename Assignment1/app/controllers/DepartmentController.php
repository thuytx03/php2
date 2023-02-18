<?php
namespace App\Controllers;
use App\Models\DepartmentModel;

class DepartmentController{
    public static function getAllDepartment(){
        $getAllDepartment=DepartmentModel::all();
        include_once './app/views/department/listDepartment.php';
    }
    public static function addDepartment(){
        if(isset($_POST['add_department'])){
            $name=$_POST['name'];
            $check=true;
            if($name==""){
                $error_name="Không được để trống phòng ban";
                $check=false;
            }
            if($check==true){
                DepartmentModel::insertDepartment($name);
                $thongbao='<div class="alert alert-success">
                <strong>Thành công!</strong> Thêm mới phòng ban.
                </div>';
            }
        }
        include_once './app/views/department/addDepartment.php';

    }
    public static function deleteDepartment(){
        $id=$_GET['id'];
        DepartmentModel::delete($id);
        DepartmentModel::resetId("departments");
        $getAllDepartment=DepartmentModel::all();
        $thongbao='<div class="alert alert-success mt-2">
        <strong>Thành công!</strong> Xoá phòng ban.
        </div>';
        include_once './app/views/department/listDepartment.php';

    }
    public static function editDepartment(){
        $getOneDepartment=DepartmentModel::getOneDepartment();
        include_once './app/views/department/updateDepartment.php';
    }

    public static function updateDepartment(){
        if(isset($_POST['update_department'])){
            $id=$_POST['id'];
            $name=$_POST['name'];
            
            DepartmentModel::updateDepartment($id,$name);
            $thongbao="<div class='alert alert-success'>
            <strong>Thành công!</strong> Cập nhật thông tin phòng ban $name có ID=$id
            </div>";
        }
        $getAllDepartment=DepartmentModel::all();
        include_once './app/views/department/listDepartment.php';

    }

}


?>