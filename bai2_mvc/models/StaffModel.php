<?php
require_once 'db.php';
function getStaff()
{
    $sql = "select * from staff ";
    return getData($sql);
}
function getOneStaff()
{
    $id = $_GET["id"];
    $sql = "select * from staff where id='$id'";
    return getData($sql, false);
}
function insertStaff($full_name, $gender, $avatar, $address, $salary)
{
    $sql = "insert into staff (full_name, gender, avatar, address,salary) values('$full_name', '$gender', '$avatar', '$address',$salary)";
    getData($sql, false);
}
function removeStaff()
{
    $id = $_GET["id"];
    $sql = "delete from staff where id=$id";
    getData($sql, false);
}
function update_Staff()
{
    $id = $_POST["id"];
    $full_name = $_POST["full_name"];
    $gender = $_POST["gender"];
    $avatar = $_FILES['avatar']['name'];
    $targetfile = "./uploads/" . $avatar;
    move_uploaded_file($_FILES["avatar"]["tmp_name"], $targetfile);
    $address = $_POST["address"];
    $salary = $_POST["salary"];

    if ($_FILES['avatar']['size'] != 0) {
        $sql = "update staff set 
            full_name='$full_name',
            gender='$gender',
            avatar='$targetfile',
            address='$address',
            salary='$salary' where id='$id'";
    } else
        $sql = "update staff set 
                    full_name='$full_name',
                    gender='$gender',
                    address='$address',
                    salary='$salary' where id='$id'";
    getData($sql, false);
}
