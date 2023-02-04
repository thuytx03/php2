<?php

$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once './app/layouts/header.php';
require_once './app/controllers/StaffController.php';
require_once './app/models/BaseModel.php';
require_once './app/models/StaffModel.php';
require_once './app/models/PositionModel.php';
require_once './app/models/DepartmentModel.php';


switch ($url) {
    case '/':
        include_once './app/layouts/home.php';
        break;
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


    default:
        # code...
        echo 'Đường dẫn không tồn tại';
        break;
}
// require_once './layouts/footer.php';

require_once './app/layouts/footer.php';
