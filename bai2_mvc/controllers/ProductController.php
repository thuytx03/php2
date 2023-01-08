<?php
require_once  "models/ProductModel.php";
//hàm danh sách product
function listProduct()
{
//    return "Danh sach san pham";
    $product=getProduct();
//    echo "<pre>";
//    var_dump($product);
//    die();
    include_once("views/product/listProduct.php");
}


function addProduct()
{
    return "Trang them san pham";
}
function removeProduct(){
    deleteProduct();
    resetId("product");
    header("Location:?url=/");
    die();
    // include_once("views/product/listProduct.php");

}

?>