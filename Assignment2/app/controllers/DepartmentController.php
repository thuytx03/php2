<?php
namespace App\Controllers;

use App\Models\DepartmentModel;
use Illuminate\Support\Facades\Redis;

class DepartmentController extends BaseController{
    public $department;

    public function __construct(){
        $this->department = new DepartmentModel();
       checkAuth();

    }
    public function listDepartment(){
        $departments=$this->department->getAllDepartment();
        return $this->render("department.index",compact("departments"));
    }
    public function addDepartment(){
        return $this->render("department.add");
    }
    public function saveAddDepartment(){
        if(isset($_POST['add_department'])){
            $name=$_POST['name'];
            $error=[];
            if(empty($name)){
                $error[]="Vui lòng nhập phòng ban";
            }
            if(count($error)>0){
                $_SESSION['errors']=$error;
                header('location:'.BASE_URL.'addDepartment');
                die;
            }else{
                $result=$this->department->insertDepartment(NULL,$name);
                if($result){
                    $_SESSION['success']="Thêm mới phòng ban";
                    header('location:'.BASE_URL.'addDepartment');
                    die;
                }
            }

        }
    }
    public function deleteDepartment($id){
        $this->department->deleteDepartment($id);
        DepartmentModel::resetId("departments");
        redirect('success',"Xoá thành công","listDepartment");
    }
    public function updateDepartment($id){
        $getOneDepartment=$this->department->getOneDepartment($id);
        return $this->render('department.update',compact('getOneDepartment'));
    }
    public function saveUpdateDepartment($id){
        if(isset($_POST['update_department'])){
            $name=$_POST['name'];
            $error=[];
            if(empty($name)){
                $error[]=" Không được để trống phòng ban";
            }
            if(count($error)>0){
                redirect("errors",$error,"updateDepartment/".$id);
            }else{
            $this->department->updateDepartment($id,$name);
            redirect('success',"Cập nhật phòng ban $name có ID=$id","listDepartment");
            }
        }
    }
}


?>