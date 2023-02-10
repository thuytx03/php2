<?php
//xây dựng 1 class để tính chu vi và diện tích hcn 
//xây dựng 1 class để tính chu vi và diện tích hv
//xây dựng 1 class để tính chu vi và diện tích hình thang
//xây dựng 1 class trừu tượng và xác địnnh những phương thức trừu tượng cho 3 class trên

abstract class HinhHoc{
    abstract function dienTich();
    abstract function chuVi();
}

class HinhChuNhat extends HinhHoc{

    
    public function dienTich() {

    }

    public function chuVi(){

    }

}


class HinhVuong extends HinhHoc{
    public function dienTich() {

    }

    public function chuVi(){

    }

}

class HinhThang extends HinhHoc{
    public function dienTich() {

    }

    public function chuVi(){

    }

}




?>