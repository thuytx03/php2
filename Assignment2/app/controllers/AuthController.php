<?php
namespace App\Controllers;

use App\Models\AuthModel;

class AuthController extends BaseController{
    public $auth;

    public function __construct(){
        $this->auth=new AuthModel();
    }
    public function index(){
        return $this->render('auth.login');
    }
    public function indexPost(){
        if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $auths=$this->auth->getAuth($email);
        if(password_verify($password,$auths['password'])){
            $_SESSION['auth']=$auths;
            redirect("success","Đăng nhập vào hệ thống","");
        }else{
            redirect("errors","Thông tin đăng nhập không chính xác","login");
        }
    }
    }
    public function logOut(){
        unset($_SESSION['auth']);
        return $this->render('auth.login');

    }
}


?>