<?php
class SinhVien{
    // đây là thuộc tính hay còn gọi là biến
    public $tenSV;// biến tenSV này là của class
    public $maSV;
    public $namSinh;
    //phương thức khởi tạo
    public function __construct($tenSV,$maSV,$namSinh)
    {
        $this->tenSV=$tenSV;
        $this->maSV=$maSV;
        $this->namSinh=$namSinh;

    }

    //đây là phương thức set tenSV
    public  function setTenSV($tenSV){  //biến tenSV này là của tham số
        $this->tenSV=$tenSV; //set giá trị cho biến tenSV
    }
    public  function setmaSV($maSV){  //biến tenSV này là của tham số
        $this->maSV=$maSV; //set giá trị cho biến tenSV
    }
    public  function setnaSinh($namSinh){  //biến tenSV này là của tham số
        $this->namSinh=$namSinh; //set giá trị cho biến tenSV
    }
    //đây là phương thức hay còn gọi là hàm
    public function hienThiThongTinSV(){
            echo "Tên SV:" . $this->tenSV. " - Mã SV:" . $this->maSV. " - Năm sinh:".$this->namSinh;
            echo "<br>";
        }

}
//khởi tạo đối tượng (cứ có new thì được gọi là khởi tạo đối tượng)
//cách 1
//$model=new SinhVien();
//$model->tenSV="Thuỷ";
//$model->maSV="PH26691";
//$model->namSinh=2003;
//$model->hienThiThongTinSV();

//cách 2
//$model2=new SinhVien();
//$model2->setTenSV("Xuân");
//$model2->setmaSV("PH26691");
//$model2->setnaSinh(2004);
//$model2->hienThiThongTinSV();

//cách 3
$model3=new SinhVien("Trịnh", "PH26692", 2003);
echo $model3->hienThiThongTinSV();


?>