<?php
namespace App\Controllers;

use App\Models\PositionModel;

class PositionController{
    public static function getAllPosition(){
        // $model=new static;
        $getAllPosition=PositionModel::all();
        include_once "./app/views/position/listPosition.php";
    } 
    public static function deletePosition(){
        $id=$_GET["id"];
        PositionModel::delete($id);
        PositionModel::resetId("positions");
        $getAllPosition=PositionModel::all();
        $thongbao='<div class="alert alert-success mt-2">
        <strong>Thành công!</strong> Xoá chức vụ.
        </div>';
        include_once "./app/views/position/listPosition.php";
    }

    public static function addPosition(){
        if(isset($_POST['add_position'])){
            $name=$_POST['name'];
            $check=true;
            if($name==""){
                $error_name="Không được để trống tên chức vụ";
                $check=false;
            }
            if($check){
               PositionModel::insertPosition($name);
               $thongbao='<div class="alert alert-success">
               <strong>Thành công!</strong> Thêm mới chức vụ.
               </div>';
            }
        }
        include_once "./app/views/position/addPosition.php";
        
    }
    public static function editPosition(){
        $getOnePosition=PositionModel::getOnePosition();
        include_once "./app/views/position/updatePosition.php";

    }

    public static function updatePosition(){
        if(isset($_POST['update_position'])){
            $id=$_POST['id'];
            $name=$_POST['name'];
            PositionModel::updatePosition($id,$name);
            $thongbao="<div class='alert alert-success'>
            <strong>Thành công!</strong> Cập nhật thông tin chức vụ $name có ID=$id
            </div>";
        }
        $getAllPosition=PositionModel::all();
        include_once "./app/views/position/listPosition.php";

    }
}


?>