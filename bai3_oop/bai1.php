<?php
class HinhChuNhat{
    public $chieudai;
    public $chieurong;

    public function __construct($chieudai,$chieurong)
    {
        $this->chieudai=$chieudai;
        $this->chieurong=$chieurong;
    }

    public function tinhDienTich(){
        return $this->chieudai * $this->chieurong;
}
    public  function tinhChuVi(){
        return ($this->chieudai * $this->chieurong) *2;
    }
    public function hienThi(){
        echo "Diện tích hình chữ nhật:".$this->tinhDienTich();
        echo "<br>";
        echo "Chu vi hình chữ nhật:".$this->tinhChuVi();
}

}
$model=new HinhChuNhat(2,3);
$model->hienThi();