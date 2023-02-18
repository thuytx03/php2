<?php
session_start();
ob_start();
$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once './app/layouts/header.php';
require_once 'vendor/autoload.php';

use App\Controllers\StaffController;
use App\Controllers\PositionController;
use App\Controllers\DepartmentController;
use App\Controllers\TimekeepingController;

switch ($url) {
    case '/':
        include_once './app/layouts/home.php';
        break;
        // Quản lý nhân viên
    case 'listStaff':
        echo StaffController::index();
        break;
    case 'deleteStaff':
        echo StaffController::deleteStaff();
        break;
    case 'addStaff':
        echo StaffController::addStaff();
        break;
    case 'editStaff':
        echo StaffController::editStaff();
        break;
    case 'updateStaff':
        echo StaffController::updateStaff();
        break;
        //End Quản lý nhân viên

        //Quản lý chức vụ
    case 'listPosition':
        echo PositionController::getAllPosition();
        break;
    case 'addPosition':
        echo PositionController::addPosition();
        break;
    case 'deletePosition':
        echo PositionController::deletePosition();
        break;
    case 'editPosition':
        echo PositionController::editPosition();
        break;
    case 'updatePosition':
        echo PositionController::updatePosition();
        break;
        //End Quản lý nhân viên

        //Quản lý phòng ban
    case 'listDepartment':
        echo DepartmentController::getAllDepartment();
        break;
    case 'addDepartment':
        echo DepartmentController::addDepartment();
        break;
    case 'deleteDepartment':
        echo DepartmentController::deleteDepartment();
        break;
    case 'editDepartment':
        echo DepartmentController::editDepartment();
        break;
    case 'updateDepartment':
        echo DepartmentController::updateDepartment();
        break;
        //End Quản lý phòng ban

    case 'listTimekeeping':
        echo TimekeepingController::listTimekeeping();
        break;
    
    case 'addTimekeeping':
        echo TimekeepingController::addTimekeeping();
        break;
        case 'saveAddTimekeeping':
            echo TimekeepingController::saveAddTimekeeping();
            break;
        case 'editTimekeeping':
        echo TimekeepingController::editTimekeeping();
        break;
        case 'updateTimekeeping':
            echo TimekeepingController::updateTimekeeping();
            break;

    default:
        # code...
        echo 'Đường dẫn không tồn tại';
        break;
}

require_once './app/layouts/footer.php';
