<?php
    require_once 'db.php';

    function getProduct(){
        $sql="select * from product ";
        return getData($sql);
    }
    function deleteProduct(){
        $id=$_GET['id'];
        $sql="delete from product where id = $id";
        getData($sql, false);

    }

?>