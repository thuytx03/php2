<?php
abstract class DongVat{
    //dịnh nghĩa 1 phương thức trừu tượng(hàm trừu tượng)
    abstract function chay();

}

class ConCho extends DongVat{
    public function nhay(){

    }
    public function chay(){
        echo "Con chó chạy bằng 4 chân";
    }
}
$conCho=new ConCho();
$conCho->chay();
//tìm hiểu xem tại sao phải định nghĩa 1 phương thức abstract và phương thức đó có
// ý nghĩa gì
// kiểm tra điều chỉnh lại phiên bản xampp
// cài đặt composer 