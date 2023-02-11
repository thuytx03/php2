<?php
include_once 'nsp1.php';
include_once 'nsp2.php';

$gv=new NSP1\GiangVien("thuy","ph1122","12222");
$gv->hienThiGV();

$gv1=new NSP2\GiangVien("thuy","ph1122","22");
$gv1->hienThiGV();
