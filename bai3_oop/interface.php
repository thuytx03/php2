<?php

// InterFace không phải là class
//trong interface chỉ có phương thức trừu tượng cho nên 
//không cần phải dùng từ khoá abstract ở đầu
//interface không thể khởi tạo
//
interface DiChuyen{
    function chay(); //đây là phương thức trừu tượng trong interface
}

//đối với interface phải dùng từ khoá implements
class ConCho implements DiChuyen{
    public function chay(){
        echo "Con chó chạy bằng 4 chân";
    }

}

class Oto implements DiChuyen{
    public function chay(){
        echo "Ô tô chạy bằng 4 bánh";
    }
}

$cc=new ConCho();
$cc->chay();

$oto=new Oto();
$oto->chay();
?>