<?php
namespace NSP1;
class GiangVien{
    public $tenGV;
    public $maGV;
    public $luongCB;

    public function __construct($tenGV,$maGV,$luongCB)
    {
        $this->tenGV=$tenGV;
        $this->maGV=$maGV;
        $this->luongCB=$luongCB;
    }

    public function hienThiGV(){
        echo "Tên GV: ".$this->tenGV. "Mã GV: ".$this->maGV."Lương cơ bản: ".$this->luongCB;
    }
}