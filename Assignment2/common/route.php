<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});


// bắt đầu định nghĩa ra các đường dẫn
// $router->get('/', function(){
//     return "trang chủ";
// });\

//Trang chủ
$router->get('/', [App\Controllers\HomeController::class, 'index']);
$router->get('login', [App\Controllers\AuthController::class, 'index']);
$router->post('saveLogin', [App\Controllers\AuthController::class, 'indexPost']);
$router->get('logOut', [App\Controllers\AuthController::class, 'logOut']);



////////////////////////////////////////////////////////////////////////////

//Trang Position (Chức vụ)
$router->get('listPosition', [App\Controllers\PositionController::class, 'listPosition']);
$router->get('addPosition', [App\Controllers\PositionController::class, 'addPosition']);
$router->post('saveAddPosition', [App\Controllers\PositionController::class, 'saveAddPosition']);
$router->get('deletePosition/{id}', [App\Controllers\PositionController::class, 'deletePosition']);
$router->get('updatePosition/{id}', [App\Controllers\PositionController::class, 'updatePosition']);
$router->post('saveUpdatePosition/{id}', [App\Controllers\PositionController::class, 'saveUpdatePosition']);

////////////////////////////////////////////////////////////////////////////

//Trang Department (Phòng ban)
$router->get('listDepartment', [App\Controllers\DepartmentController::class, 'listDepartment']);
$router->get('addDepartment', [App\Controllers\DepartmentController::class, 'addDepartment']);
$router->post('saveAddDepartment', [App\Controllers\DepartmentController::class, 'saveAddDepartment']);
$router->get('deleteDepartment/{id}', [App\Controllers\DepartmentController::class, 'deleteDepartment']);
$router->get('updateDepartment/{id}', [App\Controllers\DepartmentController::class, 'updateDepartment']);
$router->post('saveUpdateDepartment/{id}', [App\Controllers\DepartmentController::class, 'saveUpdateDepartment']);

////////////////////////////////////////////////////////////////////////////


//Trang Staff (Nhân viên)
$router->get('listStaff', [App\Controllers\StaffController::class, 'listStaff']);
$router->get('addStaff', [App\Controllers\StaffController::class, 'addStaff']);
$router->get('deleteStaff/{id}', [App\Controllers\StaffController::class, 'deleteStaff']);
$router->post('saveAddStaff', [App\Controllers\StaffController::class, 'saveStaff']);
$router->get('updateStaff', [App\Controllers\StaffController::class, 'updateStaff']);
$router->post('saveUpdateStaff', [App\Controllers\StaffController::class, 'saveUpdateStaff']);

////////////////////////////////////////////////////////////////////////////


//Trang Salary(Lương)
$router->get('listSalary', [App\Controllers\SalaryController::class, 'listSalary']);
$router->get('addSalary', [App\Controllers\SalaryController::class, 'addSalary']);
$router->post('saveAddSalary', [App\Controllers\SalaryController::class, 'saveAddSalary']);
$router->get('deleteSalary/{id}', [App\Controllers\SalaryController::class, 'deleteSalary']);
$router->get('updateSalary', [App\Controllers\SalaryController::class, 'updateSalary']);
$router->post('saveUpdateSalary', [App\Controllers\SalaryController::class, 'saveUpdateSalary']);


////////////////////////////////////////////////////////////////////////////

//Trang Account(Tài khoản)
$router->get('listAccount', [App\Controllers\AccountController::class, 'listAccount']);
$router->get('addAccount', [App\Controllers\AccountController::class, 'addAccount']);
$router->post('saveAddAccount', [App\Controllers\AccountController::class, 'saveAddAccount']);
$router->get('deleteAccount/{id}', [App\Controllers\AccountController::class, 'deleteAccount']);
$router->get('updateAccount/{id}', [App\Controllers\AccountController::class, 'updateAccount']);
$router->post('saveUpdateAccount/{id}', [App\Controllers\AccountController::class, 'saveUpdateAccount']);











$router->get('test', [App\Controllers\ProductController::class, 'index']);
//tạo route có link add_product gọi vào trong phương thức add của productcontroller
$router->get('add-product', [App\Controllers\ProductController::class, 'addProduct']);
$router->post('post-product', [App\Controllers\ProductController::class, 'postProduct']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>