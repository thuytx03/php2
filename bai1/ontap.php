<?php

    // $a="Thuỷ";
    // $b=" Trịnh";
    // echo $a.$b;

    //mảng một chiều hay còn gọi là mảng tuần tự
    // $mang=[1,2,3,4,5,6,7];
    // echo "<br>";
    // echo $mang[5].$mang[6];
    //hiển thị những phần tử trong mảng là số chẵn sử dụng foreach để duyệt mảng
    // foreach($mang as $value){
    //     if($value % 2==0){
    //         echo "<br>";
    //         echo $value;
    //     }
    // }
    
    //mảng liên hợp $key=>$value
        $manglh=["G"=>10, "F"=>3, "H"=>9,"J"=>4];
//        echo $manglh["F"].$manglh["J"];

    $color=[
        "green"=>"xanh lá",
        "blue"=>"xanh dương",
        "red"=>"đỏ"
    ];
    //yêu cầi tạo ra một mảng mỗi dòng chứa tên màu bằng tiếng việt và mỗi 1 dòng có 1 màu tương ứng với tên màu đó
    
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr >
        <td>Key</td>
        <td>Value</td>

    </tr>
    <?php foreach ($color as $key => $value): ?>
    <tr >
        <td><?= $key ?></td>
        <td style="background: <?= $key?>"></td>
    </tr>

    <?php endforeach; ?>
</table>
</body>
</html>