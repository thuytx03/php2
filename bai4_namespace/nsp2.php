<?php
namespace NSP2;
class GiangVien{
    public $tenGV;
    public $maGV;
    public $namLamViec;

    public function __construct($tenGV,$maGV,$namLamViec)
    {
        $this->tenGV=$tenGV;
        $this->maGV=$maGV;
        $this->namLamViec=$namLamViec;
    }

    public function hienThiGV(){
        echo "Tên GV: ".$this->tenGV. "Mã GV: ".$this->maGV."Năm làm việc: ".$this->namLamViec;
    }
}