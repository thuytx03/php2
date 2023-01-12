<?php
class PhuongTrinhBac2{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b,$c)
    {
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }


    public function delta()
    {
        return ($this->b*$this->b - 4*$this->a*$this->c);
    }

    public function tinhNghiemPT(){
        if($this->delta()>0){
            $x1=(-$this->b + sqrt($this->delta())/2*$this->a );
            $x2=(-$this->b - sqrt($this->delta())/2*$this->a );
            echo "Phương trình có 2 nghiệm là: "."x1=".$x1 ." và x2=". $x2;
        }else if($this->delta()==0){
            $x1=(-$this->b/(2*$this->a));
            echo "Phương trình có nghiệm kép x1=x2=".$x1;
        }else{
            echo "Phương trình vô nghiệm";
        }
    }

}
$model=new PhuongTrinhBac2(1,-6,5);
$model->tinhNghiemPT();