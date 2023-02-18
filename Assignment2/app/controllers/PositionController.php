<?php

namespace App\Controllers;

use App\Models\BaseModel;
use App\Models\PositionModel;

class PositionController extends BaseController
{
   public $position;

   public function __construct()
   {
      $this->position = new PositionModel();
      checkAuth();

   }
   public function listPosition()
   {
      $positions = $this->position->getAllPosition();
      return $this->render('position.index', compact('positions'));
   }
   public function addPosition()
   {
      return $this->render('position.add');
   }
   public function saveAddPosition()
   {
      if (isset($_POST['add_position'])) {
         $name = $_POST['name'];
         $error = [];
         if (empty($name)) {
            $error[] = "Vui lòng nhập tên chức vụ";
         }
         if (count($error) > 0) {
            $_SESSION["errors"] = $error;
            header('location:' . BASE_URL . 'addPosition');
            die;
         } else {
            $result = $this->position->insertPosition(NULL, $name);
            if ($result) {
               $_SESSION['success'] = "Thêm mới chức vụ";
               header('location:' . BASE_URL . 'addPosition');
               die;
            }
         }
      }
   }
   public function deletePosition($id){
      $this->position->deletePosition($id);
      PositionModel::resetId("positions");
      redirect('success',"Xoá thành công",'listPosition');
      // $_SESSION['success']="Xoá chức vụ";
      // header('location:' . BASE_URL . 'listPosition');
      // die;
   }
   public function updatePosition($id){
      $getOnePosition=$this->position->getOnePosition($id);
      return $this->render('position.update',compact('getOnePosition'));
   }
   public function saveUpdatePosition($id){
    if(isset($_POST['update_position'])){
      $name=$_POST['name'];
      $error=[];
      if(empty($name)){
         $error[]=" Không được để trống chức vụ";
      }
      if(count($error)>0){
         redirect("errors",$error,"updatePosition/".$id);
      }else{
         $this->position->updatePosition($id,$name);
         redirect("success","Cập nhật chức vụ $name có ID=$id","listPosition");
      }
    
    }
   }
}
