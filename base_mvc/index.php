
<?php
//thực hiện tạo các class controller và model tướng ứng
//thực hiện auto load tất cả các file trong thư mực app ra ngoài index
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
require_once "env.php";
require_once './vendor/autoload.php';
require_once './common/route.php';
// use App\Controllers\ProductController;

// switch ($url) {
//     case '/':
//         echo ProductController::index();
//         break;
// }

?>