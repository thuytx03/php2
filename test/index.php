<?php
require_once "./model/pdo.php";
require_once "./model/product.php";
if (isset($_GET["act"]) && ($_GET["act"] != "")) {
    $act = $_GET["act"];
    switch ($act) {
        case 'addimg':
            if (isset($_POST["btn_add"])) {
                
                $name = $_POST['name'];
                $category_id =implode(',', $_POST['category_id']);
                
                $product_id=insert_product($name);
                // $id=$_POST['id'];
                // echo "</pre>";
                // var_dump(
                //     $product_id
                // );
                // die();
                $countfiles = count($_FILES['image']['name']);
                for ($i = 0; $i < $countfiles; $i++) {
                    $filename = $_FILES["image"]["name"][$i];
                     $target_file = "./upload/".$filename;
                    // Upload file
                    move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file);
                    up_load_img($filename, $product_id);                
                }
                $countcate=count(explode(",", $category_id));
                for ($i=0; $i <$countcate ; $i++) { 
                    $category_id2=$_POST['category_id'][$i];
                    category_product($category_id2, $product_id);
                }

            }
            $load_category = load_category();
            $load_product=load_product();
            include "./view/addimg.php";
            break;

            case 'list':
                $id=6;
                $load_category_product=load_category_product($id);
                // echo "<pre>";
                // var_dump($load_category_product);
                // die();
                $load_category = load_category();
            $load_product=load_product();
                include "./view/list.php";
                break;

        default:
            # code...
            break;
    }
}
