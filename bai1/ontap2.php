<?php
// hàm c 2 loại:
//có trả về

//không trả về
//tất cả những gì nằm trong ngoặc () gọi là tham số
//function hienThi($a,$b,$c=9){
//    echo $a+$b+$c;
//}
//hienThi(7,8,10);

//tạo một hàm có tham số truyền vào tên, năm sinh, địa chỉ
//hiển thị ra thôngtin tên +tuổi+địa chỉ
//tuổi=Năm hiện tại-năm sinh
//get curent year in php
//function hienThi($name,$year,$address){
//    echo "Họ và tên: ". $name;
//    echo "<br>";
//    echo "Tuổi: ". $year=(date("Y")-$year);
//    echo "<br>";
//    echo "Địa chỉ: " .$address;
//
//}
//hienThi("Thuỷ"," 2003","Hà Nội");

//xây dựng hàm không trả về hiện thị thông tin sinh viên gômf những thamm số truyền vào
//mssv, tensv, namsinh, diemmon1, diemmon2, diachi
//xây dựng hàm xếp loại có trả về
//điểm TB=diemmon1+diemmon2/2
//điểm TB>5 đạt
//điểm Tb<5 K đạt
//hiển thị ra mã tên sv-diemtb-xeploai,địa chỉ,tuổi

//function tinhTuoi($year){
//    return date("Y")-$year;
//}
//function diemTB($diemmon1, $diemmon2){
//    return ($diemmon1 + $diemmon2)/2;
//}
//function xeploai($diemmon1, $diemmon2){
//    diemTB($diemmon1,$diemmon2);
//    if(diemTB($diemmon1,$diemmon2)>=5){
//        return "Đạt";
//    }else{
//        return "Không đạt";
//    }
//
//}
//function hienThi($masv,$tensv,$year,$diemmon1,$diemmon2,$diachi){
//    echo "Mã sinh viên: ".$masv;
//    echo  "<br>";
//    echo "Tên sinh viên: ".$tensv;
//    echo  "<br>";
//    echo "Điểm TB:" .diemTB($diemmon1,$diemmon2);
//    echo  "<br>";
//    echo "Xếp loại: " .xeploai($diemmon1,$diemmon2) ;
//    echo  "<br>";
//    echo "Tuổi:" .tinhTuoi($year);
//
//}
//hienThi("PH26691", "Thuỷ", 2003, 8, 8,"Hà Nội");


//hiển thị thông tin giảng viên
//magv, tengv, namvaotruong, luongcoban, sogioday
//yêu cầu xây dựng hàm thâm niên =năm hiện tại-nam vào trường
//xây dựng hàm tổng lương=luongcoban+sogioday;
//yêu cầu hiển thị ra tổng lương, magv, têngv, thâm niên

function thamNien($namvaotruong){
    return (date("Y")-$namvaotruong);
}
function tongLuong($luongcoban, $sogioday){
    return $luongcoban*$sogioday;
}
function hienThi($magv, $tengv, $namvaotruong, $luongcoban, $sogioday){
    echo "Mã GV: ".$magv;
    echo "<br>";
    echo "Tên GV: ".$tengv;
    echo "<br>";
    echo "Thâm niên:". thamNien($namvaotruong);
    echo "<br>";
    echo "Tổng lương:".tongLuong($luongcoban,$sogioday);
}

hienThi("PH26691", "Thuỷ", 2020, 5000, 2000);