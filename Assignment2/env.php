<?php
//điều chỉnh kết nối db ở đây
const DBNAME = "we17314";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";

//tất cả những giừ chung của dự án viết vào đây
const BASE_URL="http://localhost/php2/Assignment2/";

function delete_session()
{
    unset($_SESSION['errors']);
    unset($_SESSION['success']);
}
function route($name)
{
    return BASE_URL . $name;
}
function redirect($key, $msg, $route)
{
    $_SESSION[$key] = $msg;
    switch ($key) {
        case 'success':
            unset($_SESSION['errors']);
            break;
        case 'errors':
            unset($_SESSION['success']);
            break;
    }
    header('location:' . BASE_URL . $route . "?msg=" . $key);
    die;
}
function checkAuth(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
}