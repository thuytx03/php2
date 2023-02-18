<?php

namespace App\Controllers;

use App\Models\AccountModel;

class AccountController extends BaseController
{
    public $account;

    public function __construct()
    {
        $this->account = new AccountModel();
       checkAuth();

    }
    public function listAccount()
    {
        $accounts = $this->account->getAccount();
        return $this->render('account.index', compact('accounts'));
    }
    public function deleteAccount($id)
    {
        $this->account->deleteAccount($id);
        AccountModel::resetId("accounts");
        redirect('success', 'Xoá tài khoản', 'listAccount');
    }
    public function addAccount()
    {
        return $this->render('account.add');
    }
    public function saveAddAccount()
    {
        if (isset($_POST['add_account'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            // $password = $_POST['password'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $role = $_POST['role'];
            $error = [];
            if (empty($name)) {
                $error[] = " Vui lòng nhập họ và tên";
            }
            if (empty($email)) {
                $error[] = " Vui lòng nhập email";
            }
            if (empty($_POST['password'])) {
                $error[] = " Vui lòng nhập password";
            }
            if (empty($role)) {
                $error[] = " Vui lòng nhập vai trò";
            }
            if (count($error) > 0) {
                redirect('errors', $error, 'addAccount');
            } else {
                $result = $this->account->insertAccount(NULL, $name, $email, $password, $role);
                redirect("success", "Thêm tài khoản ", "addAccount");
            }
        }
    }
    public function updateAccount($id)
    {
        $getOneAccount = $this->account->getOneAccount($id);
        return $this->render('account.update', compact('getOneAccount'));
    }
    public function saveUpdateAccount($id)
    
    {
        
        if (isset($_POST['update_account'])) {
           
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $role = $_POST['role'];
            $error = [];
            if (empty($name)) {
                $error[] = " Không được để trống tên";
            }
            if (empty($email)) {
                $error[] = " Không được để trống email";
            }
            if (empty($_POST['password'])) {
                $error[] = " Không được để trống password";
            }
            if (empty($role)) {
                $error[] = " Không được để trống vai trò";
            }
            if (count($error) > 0) {
                redirect('errors', $error, 'updateAccount/'.$id);
            } else {
                $this->account->updateAccount($id, $name, $email, $password, $role);
                redirect("success", "Cập nhật tài khoản ", "listAccount");
            }
        }
    }
}
