<?php
//class cha
class ConNguoi{
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function __construct($tay,$chan,$mat,$mui)
    {
        $this->tay=$tay;
        $this->chan=$chan;
        $this->mui=$mui;
        $this->mat=$mat;

    }
    public function an(){
        echo "Ăn bằng mồm";
        echo "<br>";
    }
    public function setChan($chan){
        $this->chan=$chan;
    }
    public function setTay($tay){
        $this->tay=$tay;
    }


}
//khi class con chưa có hàm khởi tạo thì class con sẽ auto theo class cha
class NguoiLon extends ConNguoi {

    public $longNach;

    // phương thức khởi tạo
    public function __construct($chan,$tay,$mat,$mui,$longNach)
    {
        parent::__construct($chan,$tay,$mat,$mui);
        $this->longNach=$longNach;
    }

    public function di(){
    echo "Đi bằng: ".$this->chan."chân";
    echo "<br>";
    }
    public function noi(){

}
}

class TreCon extends ConNguoi {

    public function bo(){
    echo "Bò bằng: ".$this->chan."chân".$this->tay."tay";
        echo "<br>";
    }


}
$nl1=new NguoiLon(2,2);
//$nl1->an();
$nl1->di();
$tc1=new TreCon(2,2);
//$tc1->an();
$tc1->bo();



