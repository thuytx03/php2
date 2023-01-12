<?php
//tạo một class GiangVien gồm thuôcj tính maGV, tenGV, namSinh, luongCB, soGioDay
//xây dựng một hàm tạo có tham so cho các thuộc tính trên
//xây dựng hàm set cho từng thuộc tính trên
//xaay dựng 1 phươgn thức tính tuổi có trả về =nam hiện tại -năm sinh
//xây dựng 1 phương thức tính lương có trả về =luongCB*soGIoDay
//xây dựng 1 phương thức hiển thị thông tin GV gồm: maGV, tenGV, Tuổi, lương
//khởi tạo 2 giảng viên và gọi phương thức hieern thị thông tin giảng viên
class GiangVien{
    public $maGV;
    public $tenGV;
    public $namSinh;
    public $luongCB;
    public  $soGioDay;

    public function __construct($maGV,$tenGV,$namSinh,$luongCB,$soGioDay)
    {
        $this->maGV=$maGV;
        $this->tenGV=$tenGV;
        $this->namSinh=$namSinh;
        $this->luongCB=$luongCB;
        $this->soGioDay=$soGioDay;


    }

    public function tinhTuoi(){
        return date("Y") - $this->namSinh;
    }
    public  function tinhLuong(){
        return $this->luongCB * $this->soGioDay;
    }

    public function hienThi(){
        echo "<br>";
        echo "Mã GV:".$this->maGV;
        echo "<br>";
        echo "Tên GV:".$this->tenGV;
        echo "<br>";
        echo "Tuổi:".$this->tinhTuoi();
        echo "<br>";
        echo  "Lương:".$this->tinhLuong();
        echo "<br>";

    }

}
$model=new GiangVien("Ph1234", "Thắng", 2003, 3000, 3 );
$model->hienThi();
$model2=new GiangVien("Ph1234555", "Thắng12321", 2003, 3000, 5 );
$model2->hienThi();