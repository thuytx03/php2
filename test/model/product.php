<?php
function insert_product($name)
{
    $sql = "insert into productions (name) values('$name')";
    $id = pdo_query_last_id($sql);
    return $id;}
function up_load_img($name, $product_id)
{
    $sql = "insert into image (name,product_id) values ('$name','$product_id')";
    pdo_execute($sql);
}
function category_product($category_id, $product_id)
{
    $sql = "insert into categories_products (category_id,product_id) values ('$category_id','$product_id')";
    pdo_execute($sql);
}
function load_category(){
    $sql="select * from categories";
    return pdo_query($sql);
}
function load_product(){
    $sql="select * from productions ";
    return pdo_query($sql);
}
function load_category_product($id){
    $sql="select cp.*, c.name as name from categories_products cp inner join categories c on cp.category_id=c.id where cp.product_id = $id ";
    return pdo_query($sql);

}
?>