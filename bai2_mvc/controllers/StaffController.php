<?php
    require_once 'models/StaffModel.php';
    
    function listStaff(){
        $Staff=getStaff();
        include_once "views/staff/listStaff.php";
    }
    function addStaff(){
        error_reporting(0); //Turn off error reporting(Tắt báo cáo lỗi);
        if(isset($_POST['add_staff'])){
            $full_name=($_POST['full_name']);
            $gender=($_POST['gender']);
            $address=($_POST['address']);
            $salary=($_POST['salary']);
            $avatar=$_FILES['avatar']['name'];
            $targetfile="./uploads/" .$avatar;
            move_uploaded_file($_FILES["avatar"]["tmp_name"],$targetfile);
            $check=true;
            // $error=[];
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
            if($salary==""){
                $error_salary="Không được để trống lương";
                $check=false;
            }
            if($avatar==""){
                $error_avatar="Không được để trống ảnh";
                $check=false;
            }
            
            if($check){
                insertStaff($full_name,$gender,$targetfile,$address,$salary);
                $thongbao='<div class="alert alert-success">
                <strong>Thành công!</strong> Thêm mới nhân viên.
                </div>';
            }
        }
      include_once "views/staff/addStaff.php";
    // header('location:?url=addStaff');
    }
    function deleteStaff(){
        removeStaff();
        resetId("staff");
        $Staff=getStaff();
        $thongbao='<div class="alert alert-success mt-2">
        <strong>Thành công!</strong> Xoá nhân viên.
        </div>';
        // header("Location:?url=listStaff");
        include_once "views/staff/listStaff.php";

       
    }
    function editStaff(){
        $getOneStaff=getOneStaff();
        include_once "views/staff/updateStaff.php";
    }
    function updateStaff(){
        if(isset($_POST['update_staff'])){
            $id=$_POST['id'];
            $full_name =($_POST['full_name']);
            $gender = $_POST["gender"];
            $avatar = $_FILES['avatar']['name'];
            $targetfile = "./uploads/" . $avatar;
            move_uploaded_file($_FILES["avatar"]["tmp_name"], $targetfile);
            $address = $_POST["address"];
            $salary = $_POST["salary"];
            $check=true;
            if($full_name==""){
                // $error_name="Không được để trống tên";
                $_SESSION["error_name"]="Không được để trống tên";
                $check=false;
            }
            if($address==""){
                $_SESSION['error_address']="Không được để trống địa chỉ";
                $check=false;
            }
            if($salary==""){
                $_SESSION['error_salary']="Không được để trống lương";
                $check=false;
            }
            
            
            if($check==true){
                update_Staff();
                $thongbao='<div class="alert alert-success">
                <strong>Thành công!</strong> Cập nhật thông tin nhân viên.
                </div>';
            }else{
                header('location:?url=editStaff&id='.$id);
            }
        }
        $Staff=getStaff();
        include_once "views/staff/listStaff.php";
        
        //header('location:?url=listStaff');
    }


?>