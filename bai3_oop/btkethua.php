<?php
//khai báo 1 class ConNguoi bao gồm các thuộc tính sau :
//hoten,namsinh,diachi,sodienthoai,email
//định nghĩa phương thức tính tuổi trong class tuổi = năm hiện tại - năm sinh
//tạo class SinhVien kế thừa từ class ConNguoi và class SinhVien có thuộc tính
//diemtoan,diemly,diemhoa
//có phương thức tính điểm TB = (toán + lý + hóa)/3
//tạo phương thức hiển thị thông tin sinh viên gồm hoten-sodienthoai-tuổi-điểmTB
//tạo class GiangVien kế thừa từ class ConNguoi có thuộc tính lương cơ bản,số giờ dạy
//tạo phương thức tính tổng lương = lương cơ bản * số giờ dạy
//tạo phương thức hiển thị thông tin giảng viên gồm hoten-sodienthoai-tuổi-Tổng lương
class ConNguoi{
    public $hoTen;
    public $namSinh;
    public $diaChi;
    public $soDienThoai;
    public $email;

    public function __construct($hoTen,$namSinh,$diaChi,$soDienThoai,$email)
    {
        $this->hoTen=$hoTen;
        $this->namSinh=$namSinh;
        $this->diaChi=$diaChi;
        $this->soDienThoai=$soDienThoai;
        $this->email=$email;

    }
    public function hienThi(){

        echo "Họ và tên: ".$this->hoTen;
        echo "<br>";
        echo "SĐT: ".$this->soDienThoai;
        echo "<br>";
        echo "Email:".$this->email;
        echo "<br>";
        echo "Tuổi: ".$this->tinhTuoi();
        echo "<br>";


    }

    public function tinhTuoi(){
        return (date("Y")-$this->namSinh);
    }


}
class SinhVien extends ConNguoi {
    public $diemToan;
    public $diemLy;
    public $diemHoa;
    public function nhapDiem($diemToan,$diemLy,$diemHoa)
    {
        $this->diemToan=$diemToan;
        $this->diemLy=$diemLy;
        $this->diemHoa=$diemHoa;
    }
    public function hienThiTT(){
        echo "Điểm TB: ".$this->diemTB();
        echo "<br>";
    }


    public function diemTB(){
        return ($this->diemToan+$this->diemLy+$this->diemHoa)/3;
    }
}

class GiangVien extends ConNguoi{
    public $luongCB;
    public $soGioDay;
    public function nhapLuong($luongCB, $soGioDay){
        $this->luongCB=$luongCB;
        $this->soGioDay=$soGioDay;
}
    public function tinhLuong(){
        return $this->luongCB*$this->soGioDay;
    }
    public function hienThiLuong(){
        echo "Tổng lương: ".$this->tinhLuong();
        echo "<br>";
    }
}
//hiển thị thông tin sinh viên
$sv=new SinhVien("thuy",2003,"HN",123, "thuy@fpt");
$sv->nhapDiem(9,9,9);
$sv->hienThi();
$sv->hienThiTT();

//hiển thị thông tin giảng viên
$gv=new GiangVien("Thắng", 1996, "HN", "12312", "FPT");
$gv->nhapLuong(1000,22);
$gv->hienThi();
$gv->hienThiLuong();
