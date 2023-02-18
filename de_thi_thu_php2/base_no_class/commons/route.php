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
$router->get('/', function(){
    return "trang chủ";
});
$router->get('test', [App\Controllers\ProductController::class, 'index']);
$router->get('add', [App\Controllers\ProductController::class, 'viewAdd']);
$router->get('edit-product/{id}', [App\Controllers\ProductController::class, 'edit']);
$router->post('edit-product-post/{id}', [App\Controllers\ProductController::class, 'editPost']);
$router->post('add-form', [App\Controllers\ProductController::class, 'add']);
$router->get('delete-product/{id}', [App\Controllers\ProductController::class, 'delete']);


$router->get('listProduct', [App\Controllers\ProductController::class, 'getProduct']);
$router->get('addProduct', [App\Controllers\ProductController::class, 'addProduct']);
$router->post('saveAddProduct', [App\Controllers\ProductController::class, 'saveAddProduct']);
$router->get('deleteProduct/{id}', [App\Controllers\ProductController::class, 'deleteProduct']);
$router->get('updateProduct/{id}', [App\Controllers\ProductController::class, 'updateProduct']);
$router->post('saveUpdateProduct/{id}', [App\Controllers\ProductController::class, 'saveUpdateProduct']);





# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>