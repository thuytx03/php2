<?php
class SinhVien{
    public $name;
    public $year;
    public $address;
    public $diemToan;
    public $diemLy;
    public $diemHoa;

    public function __construct($name,$year,$address,$diemToan,$diemLy,$diemHoa)
    {
        $this->name=$name;
        $this->year=$year;
        $this->address=$address;
        $this->diemToan=$diemToan;
        $this->diemLy=$diemLy;
        $this->diemHoa=$diemHoa;
    }
    public function tinhTuoi(){
        return date("Y")-$this->year;
    }
    public function diemTB(){
        return ($this->diemToan+$this->diemHoa+$this->diemLy)/3;
    }
    public function xepLoai(){
        if($this->diemTB()>8 && $this->diemTB()<10){
            return "Giỏi";
        }else if($this->diemTB()>=6 && $this->diemTB()<8){
            return "Khá";
        }else if($this->diemTB()>=4 && $this->diemTB()<6){
            return "TB";
        }else{
            return "Yếu";
        }
    }

    public function hienThi(){
        echo "Tên sinh viên: ".$this->name;
        echo "<br>";
        echo "Tuổi: ".$this->tinhTuoi();
        echo "<br>";
        echo "Địa chỉ: ".$this->address;
        echo "<br>";
        echo "Xếp loại: ".$this->xepLoai();
        echo "<br>";
        echo "Điểm trung bình: ".$this->diemTB();
        echo "<br>";

    }



}
$model=new SinhVien("Thuỷ","2003","HN", 1,2,2);
$model->hienThi();
?>