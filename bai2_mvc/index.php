<?php
require_once  'controllers/ProductController.php';
require_once 'controllers/StaffController.php';
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        //điều hướng về trang danh sách sản phẩm
        // echo listProduct();
        echo listStaff();

        break;
    case 'add':
        echo addProduct();
        break;
    case 'remove-product':
        echo removeProduct();
        break;
    case 'listStaff':
        echo listStaff();
        break;
    case 'addStaff':
        echo addStaff();
        break;
    case 'removeStaff':
        echo deleteStaff();
        break;
    case 'editStaff':
        echo editStaff();
        break;
    case 'updateStaff':
        echo updateStaff();
        break;
}
